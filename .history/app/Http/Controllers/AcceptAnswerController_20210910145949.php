<?php

namespace App\Http\Controllers;
use 

use Illuminate\Http\Request;

class AcceptAnswerController extends Controller
{
    public function _invoke(Answer $answer){
        dd('accept');
    }
}
