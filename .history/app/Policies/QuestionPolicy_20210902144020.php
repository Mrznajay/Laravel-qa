<?php

namespace App\Policies;

use App\Models\Question;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuestionPolicy
{
    use HandlesAuthorization;

  
    public function update(User $user, Question $question)
    {
        //
        return 
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Question $question)
    {
        //
    }
}
