<?php

namespace App\Http\Controllers;
use App\
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Question $question) {
        $question->favorites()->attach(auth()->id());
        return back();
    }
}
