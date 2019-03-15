@extends ('layouts.main')
<!-- main section -->
@section('content')
    <div class="row">

        <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Distribution</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Industry Category</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->



    </div>
    <!-- /.row -->

@endsection
<!-- /main section -->

@section('style')
    <link href="bower_components/morris.js/morris.css" rel="stylesheet">
@endsection

@section('js')
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.min.js"></script>
    <script>
        $(document).ready(function () {
            //DONUT CHART
            var donut = new Morris.Donut({
                element: 'sales-chart',
                resize: true,
                data: [
                    {label: "Finance, Insurance & Real", value: 1},
                    {label: "Agriculture, Fishing & Forestry", value: 30},
                    {label: "Construction", value: 24},
                    {label: "Construction", value: 24},
                ],
                hideHover: 'auto'
            });

            //BAR CHART
            var bar = new Morris.Bar({
                element: 'bar-chart',
                resize: true,
                data: [
                    {y: 'External Audit', a: 1172246, b: 1053782},
                    {y: 'Tax Compliance', a: 849425, b: 802471},
                ],
                barColors: ['#00a65a', '#f56954'],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Actual', 'Budget'],
                hideHover: 'auto'
            });
        })
    </script>
@endsection
