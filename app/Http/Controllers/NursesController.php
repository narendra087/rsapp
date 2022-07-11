<?php

namespace App\Http\Controllers;

class NursesController extends Controller
{

  public function index()
  {
    $dataResponden[0] = [
      'tanggal' => '2012/01/01',
      'noRM' => '1',
      'nama' => 'Lorem Ipsum',
      'status' => 'baru',
    ];
    $dataResponden[1] = [
      'tanggal' => '2012/01/01',
      'noRM' => '2',
      'nama' => 'Lorem Ipsum 2',
      'status' => 'lama',
    ];

    return view('dashboard.perawat.index', ['dataResponden' => $dataResponden]);
  }

}
