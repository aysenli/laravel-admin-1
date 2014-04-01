@extends('Vendor-Admin::layouts.main')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{asset('admin/article/add')}}">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="content" name="content">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
</form>
@stop
