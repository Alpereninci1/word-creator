<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordGeneratorController extends Controller
{
    public function index()
    {
        $words = Word::paginate(10);
        return view('words.index', compact('words'));
    }
}
