@extends('layouts.app_backup')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i> 新增教室</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/classRoom') }}">

                    {!! csrf_field() !!}
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">所属校区 ： </label>
                         <label class="control-label">{{$school->name}} </label> 
                         <input type="hidden" name="school_id" value="{{ $school->id }}">

                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">教室名称 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">   

                    </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label class="control-label">教室编号 ： </label>
                        <input type="text" class="form-control" name="code" value="{{ old('code') }}">   
                        
                    </div>
                        
                   
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i>提交
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

@endsection
