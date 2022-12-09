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

    $html = "<ul>";

    foreach ($series as $serie) {
      $html .= "<li>$serie</li>";
    }

    $html .= "</ul>";

    return $html;

  }
}