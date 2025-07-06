@extends('dashboard.index')
@section('title', "Détails d'un sondage")
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Vote Carréfoot</a></li>
                                <li class="breadcrumb-item active">Détails d'un sondage</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Détails d'un sondage</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Détails du sondage</h4>
                        <p><strong>Nom du sondage:</strong> {{ $poll->title }}</p>
                        <p><strong>Description:</strong> {{ $poll->description }}</p>
                        <p><strong>Date d'expiration:</strong> {{ $poll->expiration_date }}</p>
                        <p><strong>Total des votes:</strong> {{ $poll->options->sum(function ($option) { return $option->votes->count(); }) }}</p>

                        <div dir="ltr">
                            <div id="poll-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Votes',
                data: @json($options_data->pluck('percentage'))
            }],
            plotOptions: {
                bar: {
                    horizontal: true,
                    dataLabels: {
                        position: 'center',
                    },
                    barHeight: '70%',
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val, opt) {
                    var votes = @json($options_data->pluck('votes'))[opt.dataPointIndex];
                    return `${val.toFixed(1)}% (${votes} votes)`;
                },
                style: {
                    colors: ['#fff']
                }
            },
            xaxis: {
                categories: @json($options_data->pluck('name')),
                labels: {
                    formatter: function (val) {
                        return val.toFixed(1) + "%";
                    }
                },
                title: {
                    text: 'Pourcentage (%)'
                }
            },
            yaxis: {
                labels: {
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            tooltip: {
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return 'Votes:';
                        }
                    },
                    formatter: function (val, opt) {
                        var votes = @json($options_data->pluck('votes'))[opt.dataPointIndex];
                        return `${val.toFixed(1)}% (${votes} votes)`;
                    }
                }
            },
            colors: ['#00823a'], // Light blue color similar to the example
            title: {
                text: 'Répartition des votes',
                align: 'center',
                style: {
                    fontSize: '16px'
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#poll-bar"), options);
        chart.render();
    </script>

@endsection
