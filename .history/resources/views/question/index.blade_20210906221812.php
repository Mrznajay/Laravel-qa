@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">Ask Question</a>
                        </div>
                    </div>
                </div>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ Session::get('success') }}
                    </div>
                @elseif (Session::has('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
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
                    @foreach ($question as$questions )
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>
                                        {{$questions->votes }}
                                    </strong>
                                    {{ Str::plural('vote',$questions->votes) }}
                                </div>
                                <div class="status {{$questions->status }}">
                                    <strong>
                                        {{$questions->answers_count }}
                                    </strong>
                                    {{ Str::plural('answers_count',$questions->answers_count) }}
                                </div>
                                <div class="view">
                                        {{ $questions->views . " " . Str::plural('view',$questions->views) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="mt-0"> <a href="{{ $questions->url  }}">{{ $questions->title }}</a></h3>
                                    <div class="ml-auto">
                                        @can ('update',$questions)
                                            <a href="{{ route('questions.edit',$questions->id) }}" class="btn btn-sm btn-outline-info">Edit</a>    
                                        @endcan
                                        
                                        @can ('delete',$questions)
                                            <form action="{{ route('questions.destroy',$questions->id) }}" method="post" class="form-delete">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure wanna delete')">Delete</button>
                                            </form>
                                        @endcan
                                       
                                    </div>
                                </div>
                                
                                <p class="lead">
                                    Asked by
                                    <a href="{{$questions->user->url }}">{{$questions->user->name }}</a>
                                    <small class="text-muted">{{$questions->created_date }}</small>
                                </p>
                                {{ Str::limit($questions->body, 250) }}
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{$question->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
