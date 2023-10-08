<div class="content ht-100v pd-0">
    <br>
    <br>
    <br>
    <div class="content-body">
        <div class="container pd-x-0">
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li style="color: #B90000" class="breadcrumb-item active" aria-current="page">Charts Monitoring</li>
                        </ol>
                    </nav>
                    <h4 class="mg-b-0 tx-spacing--1">Berikut adalah Charts dari Survey Monitoring</h4>
                </div>
                <div class="d-none d-md-block">
           
                <a href="{{url('/')}}" class="btn btn-sm pd-x-15 custom-btn btn-uppercase mg-l-5">Kembali</a>
              </div>
            </div>

            
            <div class="row row-xs">
                <div class="col-lg-4 col-xl-6 mg-t-10">
                    <div class="card">
                        <div class="card-header pd-t-20 pd-b-0 bd-b-0">
                            <h6 class="mg-b-5">BAR CHARTS</h6>
                            
                        </div><!-- card-header -->
                        <div class="card-body pd-20">
                            <div class="chart-two mg-b-20">
                                <!-- <div id="flotChart2" class="flot-chart"></div> -->
                                <canvas id="barChart" style="height:230px"></canvas>
                            </div><!-- chart-two -->
                            
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <div class="col-lg-4 col-xl-6 mg-t-10">
                    <div class="card">
                        <div class="card-header pd-t-20 pd-b-0 bd-b-0">
                            <h6 class="mg-b-5">PIE CHARTS</h6>
                           
                        </div><!-- card-header -->
                        <div class="card-body pd-20">
                            <div class="chart-two mg-b-20">
                                <!-- <div id="flotChart2" class="flot-chart"></div> -->
                                <canvas id="pieChart" style="height:250px"></canvas>
                            </div><!-- chart-two -->
                           
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>
<script>
$(document).ready(function() {
     //-------------
    //- BAR CHART -
    //-------------
    var areaChartData = {
        //labels: ['Quiz 1', 'Quiz 2', 'Quiz 3', 'Quiz 4', 'Quiz 5', 'Quiz 6', 'Quiz 7'],
        labels: [
            @if($quizId)
            @foreach($quizId as $q)
            'No. {{$q}}',
            @endforeach
            @endif
        ],
        datasets: [{
                label: 'Survey',
                fillColor: 'rgba(210, 214, 222, 1)',
                strokeColor: 'rgba(210, 214, 222, 1)',
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                //data: [5, 4, 3, 4, 5, 2, 4]
                data: [
                    @if($answer)
                    @foreach($answer as $a)
                    {{$a}},
                    @endforeach
                    @endif
                ]
            }
        ]
    }
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChart = new Chart(barChartCanvas)
    var barChartData = areaChartData
    barChartData.datasets[0].fillColor = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor = '#00a65a'
    var barChartOptions = {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: 'rgba(0,0,0,.05)',
        scaleGridLineWidth: 1,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        barShowStroke: true,
        barStrokeWidth: 2,
        barValueSpacing: 5,
        barDatasetSpacing: 1,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',

        responsive: true,
        maintainAspectRatio: true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart = new Chart(pieChartCanvas)
    var PieData = [{
            value: {{$persen['sangat_baik']}},
            color: '#f56954',
            highlight: '#f56954',
            label: 'Sangat Baik'
        },
        {
            value: {{$persen['baik']}},
            color: '#00a65a',
            highlight: '#00a65a',
            label: 'Baik'
        },
        {
            value: {{$persen['cukup']}},
            color: '#f39c12',
            highlight: '#f39c12',
            label: 'Cukup'
        },
        {
            value: {{$persen['buruk']}},
            color: '#00c0ef',
            highlight: '#00c0ef',
            label: 'Buruk'
        },
        {
           value: {{$persen['sangat_buruk']}},
            color: '#3c8dbc',
            highlight: '#3c8dbc',
            label: 'Sangat Buruk'
        }
    ]
    var pieOptions = {
        segmentShowStroke: true,
        segmentStrokeColor: '#fff',
        segmentStrokeWidth: 2,
        percentageInnerCutout: 0, // This is 50 for Pie charts
        animationSteps: 100,
        animationEasing: 'easeOutBounce',
        animateRotate: true,
        animateScale: false,
        responsive: true,
        maintainAspectRatio: true,
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    pieChart.Pie(PieData, pieOptions)

   
})

</script>

