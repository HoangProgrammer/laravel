@extends('server.LayoutServer')
@section('title', 'FPT dashboard ')
@section('header', 'Dashboard')
@section('content')
    <div class="container-fluid pt-5">
        <h1 class="text-center">
            Hello
            @if (Auth::check())
                {{ Auth::user()->name }}
            @endif
        </h1>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body bg-danger">
                        <h2 class="card-title">Sản phẩm</h2>
                        <p class="card-text">{{ $products }}</p>
                        <a href="#" class="btn btn-secondary">xem</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body bg-success">
                        <h2 class="card-title ">Đơn hàng</h2>
                        <p class="card-text">{{ $orders }}</p>
                        <a href="{{ route('orders') }}" class="btn btn-secondary">xem</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body  bg-warning">
                        <h2 class="card-title">Người dùng</h2>
                        <p class="card-text">{{ $users }}</p>
                        <a href="{{ route('users') }}" class="text-light btn btn-secondary">xem</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body bg-primary">
                        <h2 class="card-title ">Liên Hệ</h2>
                        <p class="card-text">{{ $contacts }}</p>
                        <a href="{{ route('contacts') }}" class="btn btn-secondary">xem</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div id="myChart" style="width:100%;max-width:600px; height:500px;margin:auto"></div>
            </div>

        </div>

    </div>

@section('script')
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                <?php
                foreach ($charts as $val) {
                    echo "['" . $val->name . "'," . count($val->products) . '],';
                }
                
                ?>

            ]);

            var options = {
                title: 'Biểu đồ thống kê sản phẩm',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
@endsection

@endsection
