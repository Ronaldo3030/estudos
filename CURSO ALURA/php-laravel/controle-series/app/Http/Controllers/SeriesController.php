<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
  public function index(Request $req)
  {
    // return $req->get('id'); PEGA O /nomeDaRota?id=123
    // return redirect('/');
    $series = [
      "Punisher",
      "LOST",
      "Vikings",
      "GOT"
    ];

    return view('series.index', [
      'series' => $series
    ]);

  }

  public function create(){
    return view('series.create');
  }
}