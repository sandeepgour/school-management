@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Classes
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Classes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
          @if(session()->has('message'))
            <div class="alert alert-success">
              <p>{{ session('message') }}</p>
            </div>
          @endif
         
          @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
            <form class="form-horizontal" id='frm-add-class' method='post' action="{{ route('saveclass') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Class Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="class_name" name='class_name' placeholder="Enter class name">
                  </div>
                </div>
         
                <!-- select -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Choose section</label>
                  <div class="col-sm-10">
                  <select class='form-control' id='dd_section' name='dd_section'>
                     <option value="-1">Select Section</option>
                        @if (count($sections) > 0)
                        @foreach($sections as $key=>$section)
                        <option value='{{ $section->id }}'>
                          {{ $section->section }}
                        </option>
                        @endforeach
                        @endif
                                 
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Seats Available</label>
                  <div class="col-sm-10">
                  <input type="number" min="1" class="form-control" id="seats_available" name='seats_available' placeholder="Enter seats">
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