<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\language;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class mainCategoryController extends Controller
{
  public function index(){
      $q[]=language::all();
      return Response()->json($q);
  }
}
