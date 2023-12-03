@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Faculties 
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> List Faculties </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Section Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="section_name" placeholder="Enter Section Name." class="section_name">
                  </div>
                </div>
         
                <!-- select -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Select Status</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="dd_status" name="dd_status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
              </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
          
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
       
        </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        
    </section>
    <!-- /.content -->
</div>

@endsection