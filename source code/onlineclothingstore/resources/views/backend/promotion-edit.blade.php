@extends('backend.layouts.app')

@section('title', 'Edit Promotion')

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
                    <a href="{{ route('admin.promotions.index') }}">
                        <button class="btn btn-dark">Promotion List</button>
                    </a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.promotions.update', $promotion->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="m-0">
                            <label for="code">Promotion Code</label>
                            <input class="form-control" id="code" type="text" name="code"
                                placeholder="Enter Promotion Code" value="{{ $promotion->code }}" required>
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="discount">Discount (%)</label>
                            <input class="form-control" id="discount" type="number" name="discount"
                                placeholder="Enter Discount" value="{{ $promotion->discount }}" required>
                            @if ($errors->has('discount'))
                                <span class="text-danger">{{ $errors->first('discount') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="start_date">Start Date</label>
                            <input class="form-control" id="start_date" type="date" name="start_date"
                                value="{{ $promotion->start_date->format('Y-m-d') }}" required>
                            @if ($errors->has('start_date'))
                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="end_date">End Date</label>
                            <input class="form-control" id="end_date" type="date" name="end_date"
                                value="{{ $promotion->end_date->format('Y-m-d') }}" required>
                            @if ($errors->has('end_date'))
                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                            @endif
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-dark btn-block" type="submit" value="Update Promotion"
                                    name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
