@extends('frontend.layouts.main')
@section('title', 'Submit Feedback')
@section('main-container')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <center><h2>Submit Your Feedback</h2></center>
        <br> <hr>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="review">Your Feedback</label><br>
                <textarea name="review" id="review" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label><br>
                <select name="rating" id="rating" class="form-control" required>
                    <option value="">Select Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Submit Feedback</button>
        </form>

        <center>   <h2 class="mt-5">All Feedbacks</h2> </center>
        <br> <hr>
        <div class="reviews">
            @if ($reviews->isEmpty())
                <p>No reviews yet.</p>
            @else
                <ul class="list-group">
                    @foreach ($reviews as $review)
                        <li class="list-group-item">
                            <strong>Rating: {{ $review->rating }}</strong>
                            <p>{{ $review->review }}</p>
                            <small>Posted on: {{ $review->created_at->format('d M Y') }}</small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
