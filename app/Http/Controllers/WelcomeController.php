<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $title = "Suma Apoyo Empresarial";
        $homeActivo = "active";
        $serviciosActivo = "";
        $equipoActivo = "";
        $clientesActivo = "";
        $contactoActivo = "";
        $menuSuma = "shared.menuA";
        $pieFijo = "";
        return view('suma', compact('title', 'homeActivo', 'serviciosActivo', 'equipoActivo', 'clientesActivo', 'contactoActivo', 'menuSuma', 'pieFijo'));
    }

    public function suma()
    {
        $title = "Suma Apoyo Empresarial";
        $homeActivo = "active";
        $equipoActivo = "";
        $clientesActivo = "";
        $contactoActivo = "";
        $menuSuma = "shared.menuA";
        $pieFijo = "";
        return view('suma', compact('title', 'homeActivo', 'serviciosActivo', 'equipoActivo', 'clientesActivo', 'contactoActivo', 'menuSuma', 'pieFijo'));
    }

    public function equipo()
    {
        $title = "Equipo - Suma Apoyo Empresarial";
        $homeActivo = "";
        $equipoActivo = "active";
        $clientesActivo = "";
        $contactoActivo = "";
        $menuSuma = "shared.menuB";
        $pieFijo = "";
        return view('equipo', compact('title', 'homeActivo', 'serviciosActivo', 'equipoActivo', 'clientesActivo', 'contactoActivo', 'menuSuma', 'pieFijo'));
    }

    public function clientes()
    {
        $title = "Clientes - Suma Apoyo Empresarial";
        $homeActivo = "";
        $equipoActivo = "";
        $clientesActivo = "active";
        $contactoActivo = "";
        $menuSuma = "shared.menuB";
        $pieFijo = "";
        return view('clientes', compact('title', 'homeActivo', 'serviciosActivo', 'equipoActivo', 'clientesActivo', 'contactoActivo', 'menuSuma', 'pieFijo'));
    }

    public function contacto()
    {
        $title = "Contacto - Suma Apoyo Empresarial";
        $homeActivo = "";
        $equipoActivo = "";
        $clientesActivo = "";
        $contactoActivo = "active";
        $menuSuma = "shared.menuB";
        $pieFijo = "fixed-bottom";
        return view('contacto', compact('title', 'homeActivo', 'serviciosActivo', 'equipoActivo', 'clientesActivo', 'contactoActivo', 'menuSuma', 'pieFijo'));
    }

    public function politica()
    {
        $title = "Politica Seguridad - Suma Apoyo Empresarial";
        $homeActivo = "";
        $equipoActivo = "";
        $clientesActivo = "";
        $contactoActivo = "";
        $menuSuma = "shared.menuB";
        $pieFijo = "fixed-bottom";
        return view('politica', compact('title', 'homeActivo', 'serviciosActivo', 'equipoActivo', 'clientesActivo', 'contactoActivo', 'menuSuma', 'pieFijo'));
    }

}
