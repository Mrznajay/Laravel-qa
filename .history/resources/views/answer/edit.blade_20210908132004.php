
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>Editing answer for question:<strong>{{  $question->title }}</strong></h1>
                </div>
                <hr>   
                <form action="{{ route('questions.answers.update', [$$question->id, $answer->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <textarea name="body" id="body" class="form-control @error('title') is-invalid @enderror" rows="7">{{ old('body', $answer->body) }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                    </div>
                </div>    
                </form>     
            </div>
        </div>
    </div>
</div>