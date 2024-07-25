@extends('backend.layouts.app')

@section('title', 'Promotions')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2>Promotions</h2>
        <a href="{{ route('admin.promotions.create') }}" class="btn btn-dark">Add Promotion</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Discount (%)</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $promotion)
                    <tr>
                        <td>{{ $promotion->code }}</td>
                        <td>{{ $promotion->discount }}</td>
                        <td>{{ $promotion->start_date }}</td>
                        <td>{{ $promotion->end_date }}</td>
                        <td>
                            <a href="{{ route('admin.promotions.edit', $promotion->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.promotions.destroy', $promotion->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
