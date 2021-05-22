@extends('dashboard.app')
@section("title") Dashboard @endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center py-5">Welcome From Game and Software Zone Myanmar </h4>
                        <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('foot')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>--}}
{{--    <script>--}}
{{--        --}}{{--var url = "{{url('stock/chart')}}";--}}
{{--        var date = new Array();--}}
{{--        var Labels = new Array();--}}
{{--        var Prices = new Array();--}}
{{--        $(document).ready(function(){--}}
{{--            $.get(url, function(response){--}}
{{--                response.forEach(function(data){--}}
{{--                    Years.push(data.stockYear);--}}
{{--                    Labels.push(data.stockName);--}}
{{--                    Prices.push(data.stockPrice);--}}
{{--                });--}}
{{--                var ctx = document.getElementById("canvas").getContext('2d');--}}
{{--                var myChart = new Chart(ctx, {--}}
{{--                    type: 'bar',--}}
{{--                    data: {--}}
{{--                        labels:Years,--}}
{{--                        datasets: [{--}}
{{--                            label: 'Infosys Price',--}}
{{--                            data: Prices,--}}
{{--                            borderWidth: 1--}}
{{--                        }]--}}
{{--                    },--}}
{{--                    options: {--}}
{{--                        scales: {--}}
{{--                            yAxes: [{--}}
{{--                                ticks: {--}}
{{--                                    beginAtZero:true--}}
{{--                                }--}}
{{--                            }]--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
