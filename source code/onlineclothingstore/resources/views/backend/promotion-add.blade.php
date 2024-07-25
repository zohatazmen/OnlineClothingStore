@extends('backend.layouts.app')
@section('title', 'Create Promotion')

@section('content')
    <div class="container">
        <h2>Create Promotion</h2>
        <form action="{{ route('admin.promotions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code">Promotion Code:</label>
                <input type="text" name="code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="discount">Discount (%):</label>
                <input type="number" name="discount" class="form-control" required min="1"
                    max="100>
            </div>
            <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="end_date">End Date:</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Create Promotion</button>
        </form>
    </div>
@endsection
