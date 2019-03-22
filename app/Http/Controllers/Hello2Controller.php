<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;


class Hello2Controller extends Controller
{	
	public function index(Request $request) {
		
		$user = Auth::user();
		$sort = $request->sort;
		$items = Person::orderBy($sort,'asc')->simplePaginate(5);
		$param = ['items'=> $items,
				  'sort' => $sort,
				  'user'=> $user
				 ];		
        return view('hello2/index',$param);
    }
	
}


