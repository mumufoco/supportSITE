<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the Portuguese home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pt.home');
    }

    /**
     * Display the English home page.
     *
     * @return \Illuminate\View\View
     */
    public function indexEn()
    {
        return view('en.home');
    }

    /**
     * Display the Spanish home page.
     *
     * @return \Illuminate\View\View
     */
    public function indexEs()
    {
        return view('es.home');
    }
}
