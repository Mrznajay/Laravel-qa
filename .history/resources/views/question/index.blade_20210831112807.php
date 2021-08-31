@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @foreach ($question as $q )
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>
                                        {{ $q->votes }}
                                    </strong>
                                    {{ str_plural::('vote', ) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="mt-0"> <a href="{{  $q->url  }}}}">{{ $q->title }}</a></h3>
                                <p class="lead">
                                    Asked by
                                    <a href="{{ $q->user->url }}">{{ $q->user->name }}</a>
                                    <small class="text-muted">{{ $q->created_date }}</small>
                                </p>
                                {{ Str::limit($q->body, 250) }}
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $question->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
