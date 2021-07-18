
@extends('admin.layout')

@section('page_css')
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
@endsection

@section('content')
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Toggle Switches</h2>
    </header>
    <div class="panel-body">
        <form class="form-horizontal form-bordered">

            <div class="form-group">
                <label class="control-label col-md-3">Large</label>
                <div class="col-md-9">
                    <div class="switch switch-lg switch-primary">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-lg switch-success">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-lg switch-warning">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-lg switch-danger">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-lg switch-info">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-lg switch-dark">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">Default</label>
                <div class="col-md-9">
                    <div class="switch switch-primary">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-success">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-warning">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-danger">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-info">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-dark">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">Small</label>
                <div class="col-md-9">
                    <div class="switch switch-sm switch-primary">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-sm switch-success">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-sm switch-warning">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-sm switch-danger">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-sm switch-info">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                    <div class="switch switch-sm switch-dark">
                        <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('page_js')
    <script src="{{URL::asset('assets/vendor/select2/select2.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
@endsection

