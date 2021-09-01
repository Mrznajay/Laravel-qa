@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Edit Question</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary"> Question</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('question._form',['buttonText' => 'Ask Question'])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
