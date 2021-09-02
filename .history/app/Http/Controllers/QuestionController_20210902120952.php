<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use App\Http\Requests\AskQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \DB::enableQueryLog();
        $question = Question::with('user')->latest()->paginate(10);

        return view('question.index', compact('question'));
        //  dd(\DB::getQueryLog()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $question = new Question();
       return view('question.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AskQuestionRequest $request)
    {
        $request->validated();
        $request->user()->questions()->create($request->only('title', 'body'));
        return redirect()->route('questions.index')->with('success','Your Question has been created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $question->d
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        // $question = Question::find($id);
        return view('question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AskQuestionRequest $request,Question $question)
    {
        // dd($question);
        $question->update($request->only('title', 'body'));
        return redirect()->route('questions.index')->with('success','Your Question has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return redirect()->route('questions.index')->with('success','Your Question has been deleted');
    }
}
