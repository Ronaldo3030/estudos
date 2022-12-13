<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
  public function index()
  {
    $series = Serie::all();
    dd($series);

    return view('series.index', [
      'series' => $series
    ]);

  }

  public function create()
  {
    return view('series.create');
  }

  public function store(Request $request)
  {
    $nomeSerie = $request->input('nome');

    DB::insert("INSERT INTO series (nome) VALUES (?)", [$nomeSerie]);
    return redirect('/series');

  }
}