<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\item;

class itesController extends Controller
{
    public function index(){
        $home_item=item::select()->paginate(pagination_count);
        return view('front.home',compact('home_item'));
        // view()->share('items','admin.items.index','item','front.home',compact('items'));
        // view('admin.items.index','front.home',compact('items'));
    }
}
