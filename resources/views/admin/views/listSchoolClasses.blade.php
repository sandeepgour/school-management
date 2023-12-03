@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List School Classes
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List School Classes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
              <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered" id="list-classes">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Class Section Id</th>
                                <th>Seat Available</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
            </div>
            <!-- /.box-body -->
          </div>
       
        </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        
    </section>
    <!-- /.content -->
</div>

@endsection