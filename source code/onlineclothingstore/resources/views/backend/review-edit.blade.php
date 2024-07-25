@extends('backend.layouts.app')

@section('title', 'Edit Review')

@section('content')
    <div class="app-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block p-4 border-left-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="container-fluid">
            <br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ route('admin.reviews.index') }}"><button class="btn btn-dark">Review List</button></a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.reviews.update', $review->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="m-0">
                            <label for="review">Review</label>
                            <textarea class="form-control" id="review" name="review" placeholder="Enter Review" required>{{ $review->review }}</textarea>
                            @if ($errors->has('review'))
                                <span class="text-danger">{{ $errors->first('review') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="rating">Rating</label>
                            <input class="form-control" id="rating" type="number" min="1" max="5"
                                placeholder="Enter Rating" name="rating" value="{{ $review->rating }}" required>
                            @if ($errors->has('rating'))
                                <span class="text-danger">{{ $errors->first('rating') }}</span>
                            @endif
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-dark btn-block" type="submit" value="Update Review" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
