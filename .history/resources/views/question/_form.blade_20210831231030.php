    @csrf

    <div class="from-group">
        <label for="question-title">Question Title</label>
        <input type="text" name="title" id="question-title" class="form-control" value="{{ old('title', $q->title) }}">

        @if ($errors->has('title'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div>

    <div class="from-group">
        <label for="question-body">Explain Question</label>
        <textarea rows="10" name="body" id="question-body" class="form-control" {{ $errors->has('body') ? 'is-invalid' : '' }}>{{ old('body', $q->body) }} </textarea>

        @if ($errors->has('body'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('body') }}</strong>
            </div>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
    </div>