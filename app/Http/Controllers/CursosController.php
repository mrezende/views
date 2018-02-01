<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    private $cursos = ['BDD', 'TDD', 'XP', 'Scrum'];
    // action -> trata uma requisição
    public function index()
    {
      $cursos = $this->cursos;
      return view('cursos.index', compact('cursos'));
    }

    // /cursos/2
    public function show($posicao)
    {
      $curso = $this->cursos[$posicao];
      return view('cursos.show', compact('curso'));
    }
}
