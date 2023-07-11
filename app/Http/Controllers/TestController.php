<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
       $values = Test::all();

       $count = Test::count();

       $first = Test::findOrFail(1);

       $whereAAA = test::where('text','=','aaa')->get();

       $queryBuilder = DB::table('tests')->where('text','=','aaa')
       ->select('id','text')
       ->get();

       dd($values,$count,$first,$whereAAA,$queryBuilder);
    
    return view('tests.test',compact('values'));
    }
}
