<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Display the Portuguese terms of service page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pt.termos');
    }

    /**
     * Display the English terms of service page.
     *
     * @return \Illuminate\View\View
     */
    public function indexEn()
    {
        return view('en.terms');
    }

    /**
     * Display the Spanish terms of service page.
     *
     * @return \Illuminate\View\View
     */
    public function indexEs()
    {
        return view('es.terminos');
    }
}
