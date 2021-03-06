<?php

namespace App\Http\Controllers;
use App\Models\Answer;

use Illuminate\Http\Request;

class AcceptAnswerController extends Controller
{
    public function __invoke(Answer $answer) {
        
        $a = $answer->question->acceptBestAnswer($answer);
        return back();
    }
}
