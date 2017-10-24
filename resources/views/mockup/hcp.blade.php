@extends('layouts.nav')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> HCP </h1>
            </div>
        </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-outline btn-default"><i class="glyphicon glyphicon-export"></i> Export Activity Log</button>
                            <button type="button" class="btn btn-outline btn-default"><i class="glyphicon glyphicon-export"></i> Export HCPs</button>
                            <button type="button" class="btn btn-outline btn-default"><i class="glyphicon glyphicon-export"></i> Export Pharmacists</button>
                            <button type="button" class="btn btn-outline btn-default"><i class="glyphicon glyphicon-import"></i> Update HCPs</button>
                            <div class="input-group custom-search-form pull-right col-lg-3">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th><h6>Name</h6></th>
                                        <th><h6>User Type</h6></th>
                                        <th><h6>Hospital / Pharmacy</h6></th>
                                        <td><h6>TA<h6></td>
                                        <th><h6>Specialty</h6></th>
                                        <th><h6>Speaker Pool</h6></th>
                                        <th><h6>Joined Date</h6></th>
                                        <th><h6>Last Logged In</h6></th>
                                        <th><h6>Status</h6></th>
                                        <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Internet Explorer</td>
                                        <td>HCP</td>
                                        <td>Hospital</td>
                                        <td>Diabetes</td>
                                        <td>Specialty</td>
                                        <td>Yes</td>
                                        <td>2017-8-30</td>
                                        <td>2017-9-30</td>
                                        <td>Active</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/hcpDetails"> edit </a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>Internet Explorer</td>
                                        <td>Pharmacist</td>
                                        <td>Hospital</td>
                                        <td>Diabetes</td>
                                        <td>Specialty</td>
                                        <td>Yes</td>
                                        <td>2017-8-30</td>
                                        <td>2017-9-30</td>
                                        <td>Active</td>
                                        <td><a class="fa fa-edit" href="/public/mockup/hcpDetails"> edit </a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
</div>
@endsection
