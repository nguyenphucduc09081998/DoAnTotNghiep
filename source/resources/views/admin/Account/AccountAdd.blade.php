@extends('layouts.app')

@section('title', 'BMS | Project')

@push('page-styles')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('lib/iCheck/all.css')}}">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{asset('lib/datepicker/datepicker3.css')}}">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('messages.project_addnew')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('project')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{__('messages.project_addnew')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header d-flex p-0">
                            <!-- <h3 class="card-title p-3">
                                Add New Project
                            </h3> -->
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <!-- Form -->
                            <form role="form" id="projectForm" action="{{url('addnewproject')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="project_code" class="control-label">{{__('messages.project.code')}}</label>
                                            <div class="input-group">
                                                <input type="text" id="project_code" name="project_code" class="form-control" placeholder="Project Code" maxlength="5" value="{{old('project_code')}}" autocomplete="off">
                                                <div class="input-group-append">
                                                    <!-- <span class="input-group-text"><i class="fa fa-check"></i></span> -->
                                                </div>
                                            </div>
                                            @error('project_code')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->

                                    <div class="col-md-2"></div>

                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="project_name" class="control-label">{{__('messages.project.name')}} </label>
                                            <div>
                                                <input type="text" id="project_name" name="project_name" class="form-control" placeholder="Project Name" maxlength="255" value="{{old('project_name')}}" autocomplete="off">
                                                @error('project_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="customer_id" class="control-label">{{__('messages.customer.name')}}</label>
                                            <div>
                                                <select id="customer_id" name="customer_id" class="form-control">
                                                    <option></option>
                                                    @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}" {{ ( $customer->id == old('customer_id') )? 'selected':'' }}> {{ $customer->customer_name }} </option>
                                                    @endforeach
                                                </select>
                                                @error('customer_id')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->

                                    <div class="col-md-7"></div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="start_date" class="control-label">{{__('messages.start_date')}}</label>
                                            <div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="start_date" name="start_date" placeholder="YYYY/MM/DD" maxlength="10" value="{{old('start_date')}}" autocomplete="off" readonly>
                                                </div>
                                                @error('start_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->

                                    <div class="col-md-2"></div>

                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="end_date" class="control-label">{{__('messages.end_date')}}</label>
                                            <div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="end_date" name="end_date" placeholder="YYYY/MM/DD" maxlength="10" value="{{old('end_date')}}" autocomplete="off" readonly>
                                                </div>
                                                @error('end_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="project_type" class="control-label">{{__('messages.project.project_type')}}</label>
                                            <div>
                                                <select class="form-control" id="project_type" name="project_type">
                                                    <option></option>
                                                    @foreach ($projectTypes as $key => $value)
                                                    <option value="{{$key}}" {{ ( $key == old('project_type') )? 'selected':'' }}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('project_type')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->

                                    <div class="col-md-2"></div>

                                    <div class="col-md-5">
                                        <div class="form-group required">
                                            <label for="resource_type" class="control-label">{{__('messages.project.resource_type')}}</label>
                                            <div>
                                                <select class="form-control" id="resource_type" name="resource_type">
                                                    <option></option>
                                                    @foreach ($resourceTypes as $key => $value)
                                                    <option value="{{$key}}" {{ ( $key == old('resource_type') )? 'selected':'' }}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                                @error('resource_type')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="project_manager">{{__('messages.project.manager')}}</label>
                                            <div>
                                                <input type="text" id="project_manager" name="project_manager" value="{{old('project_manager')}}" class="form-control" placeholder="Manager Name" maxlength="10" autocomplete="off">
                                                @error('project_manager')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->

                                    <div class="col-md-7"></div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <div class="form-group">
                                            <label>&nbsp;
                                            </label>
                                            <div><label for="monthly_timesheet">{{__('messages.project.timesheet')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <input id="monthly_timesheet" name="monthly_timesheet" type="checkbox" value="{{old('monthly_timesheet')}}" class="minimal" {{(old('monthly_timesheet') == 1)  ? 'checked ':''}}> &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2"></div>
                                    <div class="col-md-5 col-5">
                                        <label for="timesheet_due_day">{{__('messages.project.timesheet_due_day')}} </label>
                                        <div>
                                            <input type="text" id="timesheet_due_day" name="timesheet_due_day" value="{{old('timesheet_due_day')}}" class="form-control" placeholder="" maxlength="2" {{(old('monthly_timesheet') == 1)  ? ' ':'disabled'}} autocomplete="off">
                                            @error('timesheet_due_day')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <div class="form-group">
                                            <label>&nbsp;
                                            </label>
                                            <div><label for="monthly_invoice">{{__('messages.project.monthly_invoice')}} &nbsp;</label>
                                                <input type="checkbox" id="monthly_invoice" name="monthly_invoice" value="{{old('monthly_invoice')}}" class="minimal" {{(old('monthly_invoice') == 1)  ? 'checked ':''}}>&nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2"></div>
                                    <div class="col-md-5 col-5">
                                        <label for="invoice_due_day">{{__('messages.project.invoice_due_day')}}</label>
                                        <div>
                                            <input type="text" id="invoice_due_day" name="invoice_due_day" value="{{old('invoice_due_day')}}" class="form-control" placeholder="" maxlength="2" {{(old('monthly_invoice') == 1)  ? ' ':'disabled'}} autocomplete="off">
                                            @error('invoice_due_day')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!-- /.row -->

                                <br />
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <div class="form-group">
                                            <a href="{{url('listproject')}}">
                                                <Button type="button" class="btn  btn-primary btn-outline-danger">{{__('messages.cancel')}}</Button>
                                            </a>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->

                                    <div class="col-md-2 col-2"></div>

                                    <div class="col-md-5 col-5">
                                        <Button type="submit" id="createNewProject" class="btn  btn-primary ">{{__('messages.create')}}</Button>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /.form -->

                            <div id="processing" class="submitForm_processing" style="display: none;">
                                <div class="spinner-grow text-primary" role="status"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i><br> Loading...</div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="eModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" id="Cancel" class="btn  btn-primary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" id="OK" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('page-scripts')
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/right-bar.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('lib/iCheck/icheck.min.js')}}"></script>
<!-- date-picker -->
<script src="{{asset('lib/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- page script -->
<script>
  
</script>

<script type="text/javascript">
   
</script>

@endpush
