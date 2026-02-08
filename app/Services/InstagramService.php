<?php

namespace App\Services;

use App\Models\InstagramPost;
use GuzzleHttp\Client;
use Exception;

class InstagramService
{
    protected $client;
    protected $accessToken;
    protected $businessAccountId;

    public function __construct()
    {
        $this->client = new Client();
        $this->accessToken = config('services.instagram.access_token');
        $this->businessAccountId = config('services.instagram.business_account_id');
    }

    /**
     * Buscar posts do Instagram e sincronizar com o banco de dados
     */
    public function syncPosts()
    {
        try {
            $response = $this->client->get(
                "https://graph.instagram.com/{$this->businessAccountId}/media",
                [
                    'query' => [
                        'fields' => 'id,caption,media_type,media_url,permalink,timestamp,like_count,comments_count',
                        'access_token' => $this->accessToken,
                    ],
                ]
            );

            $data = json_decode($response->getBody(), true);

            if (isset($data['data'])) {
                foreach ($data['data'] as $post) {
                    InstagramPost::updateOrCreate(
                        ['instagram_id' => $post['id']],
                        [
                            'caption' => $post['caption'] ?? null,
                            'media_type' => $post['media_type'] ?? null,
                            'media_url' => $post['media_url'] ?? null,
                            'permalink' => $post['permalink'] ?? null,
                            'timestamp' => $post['timestamp'] ?? null,
                            'likes_count' => $post['like_count'] ?? 0,
                            'comments_count' => $post['comments_count'] ?? 0,
                            'is_active' => true,
                        ]
                    );
                }
            }

            return true;
        } catch (Exception $e) {
            throw new Exception('Erro ao sincronizar posts do Instagram: ' . $e->getMessage());
        }
    }

    /**
     * Obter posts ativos do Instagram
     */
    public function getActivePosts($limit = 12)
    {
        return InstagramPost::where('is_active', true)
            ->orderBy('timestamp', 'desc')
            ->limit($limit)
            ->get();
    }
}
