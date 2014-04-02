@extends('Vendor-Admin::layouts.main')
@section('content')
<script type="text/javascript">  
  UE.getEditor('content');
</script>  
<form class="form-horizontal" role="form" method="POST" action="{{asset('admin/article/edit')}}/{{$displayData['result']['id']}}">
<input type="hidden" name="id" value="{{$displayData['result']['id']}}">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" value="{{$displayData['result']['title']}}">
    </div>
  </div>
 <div class="form-group">
    <label for="" class="col-sm-2 control-label">分类</label>
    <div class="col-sm-10">
            {{$displayData['treeHtml']}}
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-10">
      <textarea name="content" id="content">{{$displayData['result']['content']}}</textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
</form>
<script>
$(function(){
$('#cat').val({{$displayData['result']['article_category_id']}});
});
</script>
@stop
