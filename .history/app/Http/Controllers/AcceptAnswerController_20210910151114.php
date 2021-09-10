<?php

namespace App\Http\Controllers;
use App\Models\Answer;

use Illuminate\Http\Request;

class AcceptAnswerController extends Controller
{
    public function _invoke(Answer $answer){
        dd('accept');
    }
    public function test(){
        echo ""a
    }
}
