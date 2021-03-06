@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('question.index') }}" class="btn btn-outline-secondary">Back To Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('question.store') }}" method="post">
                        @csrf

                        <div class="from-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" id="question-title" class="form-control">
                        </div>

                        <div class="from-group">
                            <label for="question-body">Explain Question</label>
                            <textarea rows="10" name="body" id="question-body" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Ask this question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
