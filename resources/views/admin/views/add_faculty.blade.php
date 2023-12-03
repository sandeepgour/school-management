@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Faculty
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Add Faculty</li>
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
            <form class="form-horizontal" id='frm-add-faculty' method='post' action="#" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Choose Type</label>

                  <div class="col-sm-10">
                      <select class='form-control' id='dd_type' name='dd_type'>
                                <option value='-1'>Select Faculty Type</option>
                              
                            </select>
                  </div>
                </div>
                <br>
         
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="faculty_name" name='faculty_name' placeholder="Enter faculty name">
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                   <input type="email" class="form-control" id="faculty_email" name='faculty_email' placeholder="Enter faculty email">
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Desination</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" id="faculty_designation" name='faculty_designation' placeholder="Enter faculty designation">
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-10">
                   <input type="number" class="form-control" id="faculty_phone" name='faculty_phone' placeholder="Enter faculty phone no">
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                    <select class='form-control' id='dd_gender' name='dd_gender'>
                                    <option value="">option</option>   
                    </select>
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Profile Photo</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="faculty_photo" name='faculty_photo'>
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="faculty_address" id="faculty_address" placeholder="Enter Address"></textarea>
                 </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select class='form-control' id='dd_status' name='dd_status'>
                                    <option value='1'>Active</option>
                                    <option value='0'>Inactive</option>
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