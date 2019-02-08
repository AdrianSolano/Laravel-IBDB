<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Carga de la página de inicio.<
     */
    public function index()
    {
        return view('public.pages.index');
    }

    public function contact()
    {
      return view('public.pages.contact');
    }

    public function about()
    {
      return view('public.pages.about');
    }

    public function navPrueba()
    {
      return view('public.profile.navPrueba');
    }

    public function obtenerVista($tab)
    {//`${$idTab}`
      $vista = NULL;
      switch ($vista) {
        case 'myProfilePill':
          $vista = ('public.profile.myProfile');
          break;
        case 'myBooksPill':
          $vista = ('public.profile.myBooks');
          break;
        case 'friendsPill':
          $vista = ('public.profile.friends');
          break;
      }

    }
}
