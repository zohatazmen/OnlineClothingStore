@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Stats Cards -->
                <div class="col-lg-3 col-6">
                    <div class="small-box card">
                        <div class="inner">
                            <h3>{{ $totalOrders }}</h3>
                            <p>Total Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.orders.index') }}" class="small-box-footer text-dark">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box card">
                        <div class="inner">
                            <h3>{{ $totalProducts }}</h3>
                            <p>Total Products</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('products.index') }}" class="small-box-footer text-dark">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box card">
                        <div class="inner">
                            <h3>{{ $totalReviews }}</h3>
                            <p>Total Reviews</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.reviews.index') }}" class="small-box-footer text-dark">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box card">
                        <div class="inner">
                            <h3>{{ $totalPromotions }}</h3>
                            <p>Total Promotions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-promotion"></i>
                        </div>
                        <a href="{{ route('admin.promotions.index') }}" class="small-box-footer text-dark">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="row">
                <div class="col-12">
                    <canvas id="statsChart" style="max-height: 400px;"></canvas>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJs')
    <script>
        const ctx = document.getElementById('statsChart').getContext('2d');
        const statsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Orders', 'Total Products', 'Total Reviews', 'Total Promotions'],
                datasets: [{
                    label: 'Statistics',
                    data: [{{ $totalOrders }}, {{ $totalProducts }}, {{ $totalReviews }},
                        {{ $totalPromotions }}
                    ],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
