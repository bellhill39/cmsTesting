@extends ('layouts.main')
<!-- main section -->
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Unit</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="{!! url('unit') !!}" accept-charset="UTF-8" class="form-horizontal" id="Form">
                    @csrf
                    @include('error.error')
                    @include('units._partials.form')
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

@endsection