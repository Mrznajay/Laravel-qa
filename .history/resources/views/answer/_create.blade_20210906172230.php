<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Your Answer</h3>
                </div>
                <hr>   
                <form action="{{ route('questions.answers.store', $) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="body" id="body" class="form-control" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                    </div>
                </div>    
                </form>     
            </div>
        </div>
    </div>
</div>