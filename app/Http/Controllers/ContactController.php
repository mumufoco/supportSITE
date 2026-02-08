<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Mostrar formulário de contato
     */
    public function show()
    {
        return view('contact.index');
    }

    /**
     * Processar envio de formulário de contato
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'subject.required' => 'O assunto é obrigatório.',
            'message.required' => 'A mensagem é obrigatória.',
            'message.min' => 'A mensagem deve ter pelo menos 10 caracteres.',
        ]);

        try {
            // Aqui você pode enviar o e-mail ou salvar em um banco de dados
            // Para agora, apenas redirecionamos com mensagem de sucesso
            
            // Exemplo de envio de e-mail (descomente se configurar MAIL_* no .env):
            // Mail::send('emails.contact', $validated, function ($message) use ($validated) {
            //     $message->to('contato@supportsondagens.com.br')
            //             ->subject('Novo Contato: ' . $validated['subject'])
            //             ->replyTo($validated['email']);
            // });

            return back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao enviar mensagem. Tente novamente mais tarde.');
        }
    }
}
