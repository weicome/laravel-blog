<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\render;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('article');
    }
}
