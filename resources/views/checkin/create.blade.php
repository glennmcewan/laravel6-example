@extends('layouts.standard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Check in</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('checkin.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="measure" class="col-md-4 col-form-label text-md-right">Measure</label>

                            <div class="col-md-6">
                                <select id="measure" class="form-control @error('measure') is-invalid @enderror" name="measure">
                                    @foreach ($measures as $measure)
                                    <option value="{{ $measure->id }}">{{ $measure->display_name }}</option>
                                    @endforeach
                                </select>

                                @error('measure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="serving_style" class="col-md-4 col-form-label text-md-right">Serving Style</label>

                            <div class="col-md-6">
                                <select id="serving_style" class="form-control @error('serving_style') is-invalid @enderror" name="serving_style">
                                    @foreach ($servingStyles as $style)
                                    <option value="{{ $style->id }}">{{ $style->display_name }}</option>
                                    @endforeach
                                </select>

                                @error('serving_style')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">Rating</label>

                            <div class="col-md-6">
                                <select id="rating" class="form-control @error('rating') is-invalid @enderror" name="rating">
                                    @foreach (range(0, 5, 0.5) as $rating)
                                        <option value="{{ $rating }}">{{ $rating }}</option>
                                    @endforeach
                                </select>

                                @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-right">Comment</label>

                            <div class="col-md-6">
                                <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}"></textarea>

                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Check in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
