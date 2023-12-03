@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Students
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Add Students </li>
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
            <form class="form-horizontal" id='frm-add-student' method='post' action="#" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Registration No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="reg_no" name='reg_no' placeholder="Enter Registration no">
                  </div>
                </div>
         
                <!-- select -->
              <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                 <select class='form-control' id='dd_gender' name='dd_gender'>
                      <option value="">Select Gender</option>
                </select>
                </div>
              </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                 <input type="text" class="form-control" id="student_name" name='student_name' placeholder="Enter student name">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                 <input type="email" class="form-control" id="student_email" name='student_email' placeholder="Enter student email">
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Roll No</label>
                  <div class="col-sm-10">
                <input type="number" class="form-control" id="roll_no" name='roll_no' placeholder="Enter roll no">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-10">
                 <input type="number" class="form-control" id="student_phone" name='student_phone' placeholder="Enter student phone no">
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" name="student_address" id="student_address" placeholder="Enter Address"></textarea>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Student Photo</label>
                  <div class="col-sm-10">
                  <input type="file" class="form-control" id="student_photo" name='student_photo'>
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Student's Father</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="father_name" name='father_name' placeholder="Enter father's name">
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Student's Mother</label>
                  <div class="col-sm-10">
                 <input type="text" class="form-control" id="mother_name" name='mother_name' placeholder="Enter mother's name">
                </div>
              </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label">Student's Age</label>
                  <div class="col-sm-10">
                  <input type="number" min="3" class="form-control" id="student_age" name='student_age' placeholder="Enter age">
                </div>
              </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label">Student's Age</label>
                  <div class="col-sm-10">
                   <select class='form-control' id='dd_class' name='dd_class'>
                        <option value="">Select Class</option>
                   </select>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Section</label>
                  <div class="col-sm-10">
                  <select class='form-control' id='dd_section' name='dd_section'>
                        <option value="">Select Class</option>
                   </select>
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