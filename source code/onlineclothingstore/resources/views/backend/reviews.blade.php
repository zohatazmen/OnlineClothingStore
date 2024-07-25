@extends('backend.layouts.app')

@section('title', 'Review Management')

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
                    <a href="{{ route('admin.reviews.create') }}"><button class="btn btn-dark">Add Review</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Review</th>
                                <th>Rating</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $review->review }}</td>
                                    <td>{{ $review->rating }}</td>
                                    <td>
                                        <a href="{{ route('admin.reviews.edit', $review->id) }}" class="text-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.reviews.destroy', $review->id) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger" title="Delete" style="border: none; background: none; padding: 0;">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
