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
                            <div class="media-body">
                                <h3 class="mt-0">
                                    {{ $q->title }}
                                </h3>
                                {{ Str::limit($q->body, 250) }}
                            </div>
                        </div>
                    @endforeach
                        
                    {{ $question->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
