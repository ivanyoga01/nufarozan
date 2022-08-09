<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class DashboardController extends Controller
{
  public function index()
  {
    return view('admin.dashboard',[
      'daftars' => Daftar::with('umroh')->get(),
    ]);
  }
}
