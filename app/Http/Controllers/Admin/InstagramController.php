<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstagramPost;
use App\Services\InstagramService;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    protected $instagramService;

    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    /**
     * Listar posts do Instagram
     */
    public function index()
    {
        $posts = InstagramPost::orderBy('timestamp', 'desc')->paginate(12);
        return view('admin.instagram.index', compact('posts'));
    }

    /**
     * Sincronizar posts do Instagram
     */
    public function sync()
    {
        try {
            $this->instagramService->syncPosts();
            return redirect()->route('admin.instagram.index')->with('success', 'Posts sincronizados com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('admin.instagram.index')->with('error', 'Erro ao sincronizar: ' . $e->getMessage());
        }
    }

    /**
     * Alternar visibilidade do post
     */
    public function toggle(InstagramPost $post)
    {
        $post->update(['is_active' => !$post->is_active]);
        return redirect()->route('admin.instagram.index')->with('success', 'Status atualizado!');
    }

    /**
     * Deletar post
     */
    public function destroy(InstagramPost $post)
    {
        $post->delete();
        return redirect()->route('admin.instagram.index')->with('success', 'Post deletado!');
    }
}
