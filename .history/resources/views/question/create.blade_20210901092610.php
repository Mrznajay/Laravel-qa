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
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To Question</a>
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

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"zzzzzz>&times;</span>
                    </button>
                    {{ Session::get('error') }}
                </div>
            @elseif(Session::has('warning'))
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ Session::get('warning') }}
                </div>
            @endif


                <div class="card-body">
                    @include('question._form',['buttonText' => 'Ask Question'])
                </div>

                <form action="{{ route('questions.create', $question->id) }}" method="post">
                        {{ method_field('PUT') }}
                            @include('question._form',['buttonText' => 'Update Question'])
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
