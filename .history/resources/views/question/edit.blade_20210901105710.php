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
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary"> Back To Question</a>
                        </div>
                    </div>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="post">
                        {{-- {{method_field('PUT')}} --}}
                            @include('question._form',['buttonText' => 'Update Question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
