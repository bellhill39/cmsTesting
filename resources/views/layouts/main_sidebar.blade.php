<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Training-Admin</p>

            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Budget</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('budget/create') !!}"><i class="fa fa-circle-o"></i> Allocate Budget </a></li>
                    <li class="active"><a href="{!! url('budget') !!}"><i class="fa fa-circle-o"></i> View Budget</a></li>
                    <li class="active"><a href="{!! url('budget/edit') !!}"><i class="fa fa-circle-o"></i> Edit Budget</a></li>
                </ul>
            </li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Units</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('unit/create') !!}"><i class="fa fa-circle-o"></i> New unit </a></li>
                    <li class="active"><a href="{!! url('unit') !!}"><i class="fa fa-circle-o"></i> View units</a></li>

                </ul>
            </li>
            <li><a href="{!! url('training-program-and-cost') !!}"><i class="fa fa-book"></i> <span>Training programs & cost</span></a></li>
            <li><a href="{!! url('notify-units') !!}"><i class="fa fa-book"></i> <span>Notify units</span></a></li>


    </section>
    <!-- /.sidebar -->
</aside>