<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReportController extends Controller
{
    /**
     * Display the Portuguese report form page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pt.denuncia');
    }

    /**
     * Display the English report form page.
     *
     * @return \Illuminate\View\View
     */
    public function indexEn()
    {
        return view('en.report');
    }

    /**
     * Display the Spanish report form page.
     *
     * @return \Illuminate\View\View
     */
    public function indexEs()
    {
        return view('es.denuncia');
    }

    /**
     * Handle the report form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
            'anonymous' => 'nullable|boolean',
        ]);

        // TODO: Send email or store in database
        // For now, just redirect back with success message

        return redirect()->back()->with('success', 'Denúncia enviada com sucesso!');
    }
}
