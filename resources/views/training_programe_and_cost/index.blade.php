@extends ('layouts.main')

@section('style')
    <link href="{!! asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">
@endsection

<!-- main section -->
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ url('training-program-and-cost/create') }}" class="btn btn-sm btn-danger">New <i class="fa fa-plus-square"></i></a>
                </div>
                <!-- /.box-header -->
                <div style="overflow: auto" class="box-body">
                    <table id="table" class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Col 1</th>
                            <th>Col 2</th>
                            <th>Col 3</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>data 1</td>
                            <td>data 2</td>
                            <td>data 3</td>
                            <td>
                                <a href="#" ><i class="fa fa-paper-plane"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>data 1</td>
                            <td>data 2</td>
                            <td>data 3</td>
                            <td>
                                <a href="#" ><i class="fa fa-paper-plane"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>data 1</td>
                            <td>data 2</td>
                            <td>data 3</td>
                            <td>
                                <a href="#" ><i class="fa fa-paper-plane"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection



@section('js')
    <script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>


    <script type="text/javascript">

        $(function () {
            $('#table').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
            })
        })
    </script>

@endsection