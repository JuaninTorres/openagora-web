<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    /**
     * Muestra la informació de "Nosotros"
     *
     * @return \Illuminate\View\View
     */
    public function getAbout()
    {
        return view('about.index');
    }

    /**
     * Gestión del Desempeño
     *
     * @return \Illuminate\View\View
     */
    public function getGD()
    {
        return view('pages.gd');
    }

    /**
     * Gestión de Selección
     *
     * @return \Illuminate\View\View
     */
    public function getGS()
    {
        return view('pages.gs');
    }

    /**
     * Gestión de Talentos
     *
     * @return \Illuminate\View\View
     */
    public function getGT()
    {
        return view('pages.gt');
    }

    /**
     * Control de Gestión
     *
     * @return \Illuminate\View\View
     */
    public function getCG()
    {
        return view('pages.cg');
    }

    /**
     * Gestión de Capacitación
     *
     * @return \Illuminate\View\View
     */
    public function getGC()
    {
        return view('pages.gc');
    }
}
