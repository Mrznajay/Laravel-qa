@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                <div class="card-title">
                    <div class="d-flex align-items-center">
                        <h1>{{ $question->title }}</h1>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To Question</a>
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
                <div class="alert alert-danger alert-dismissable" id="alert">
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

                <hr>

                <div class="media">
                    <div class="d-flex flex-column vote-controls">
                        <a title="This quesiton is useful" class="vote-up">
                            <i class="fas fa-sort-up fa-3x"></i>   
                        </a>
                        <span class="votes-count">123</span>
                        <a title="This question is not useful" class="vote-down off">
                            <i class="fas fa-sort-down fa-3x"></i>  
                        </a>
                        <a title="Click to mark as favorite question (Click again to undo)" 
                            class="favorite mt-2 {{ Auth::guest() ? 'off' : ($question->is_favorite ? 'favorited' : '') }}"
                            onclick="event.preventDefault(); document.getElementById('favorite-question-{{ $question->id }}').submit();">
                            <i class="fas fa-star"></i>
                            <span class="favorites-count">{{ $question->favorites_count }}</span>
                        </a>
                        <form id="favorite-question-{{ $question->id }}" action= "/questions/{{ $question->id }}/favorites") method="POST">
                        @csrf
                        @if ($question->is_favorite)
                            @method ('DELETE')
                        @endif
                        </form>    
                    </div>

                   <div class="media-body">
                    {!! $question->body_html !!}
                    <div class="float-right">
                         <span class="text-muted">
                             Answered {{ $question->created_date }}
                         </span>
                         <div class="media mt-2">
                             <a href="{{ $question->user->url }}" class="pr-2">
                                 <img src="{{ $question->user->avatar }}" alt="">
                             </a>
                             <div class="media-body mt-1">
                                 <a href="{{ $question->user->url }}">
                                     {{ $question->user->name }} 
                                 </a>    
                             </div> 
                         </div>
                     </div>
                   </div>
                </div>      
                </div> 
            </div>
        </div>
    </div>
    @include('answer._index', [
        'answers' => $question->answers,
        'answersCount' => $question->answers_count,
    ])
    @include('answer._create')
</div>
@endsection
