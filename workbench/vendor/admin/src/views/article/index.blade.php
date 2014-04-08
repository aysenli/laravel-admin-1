@extends('Vendor-Admin::layouts.main')
@section('content')
<table class="table table-striped">
  <tr>
    <td>id</td>
    <td>标题</td>
    <td>分类</td>
    <td>操作</td>
  </tr>
@foreach($displayData['article'] as $k)
<tr id="list_{{$k['id']}}">
    <td>{{$k['id']}}</td>
    <td>{{$k['title']}}</td>
    <td>{{$k['ArticleCategory'][0]['name']}}</td>
    <td>
      <a href="{{asset('admin/article/edit')}}/{{$k['id']}}">编辑</a>
      <a href="javascript:void(0)" list_id="{{$k['id']}}" class="del">删除</a>
    </td>
  </tr>
@endforeach
</table>
    {{ $displayData['article']->links()  }}

<script>
  $(function(){
    $('.del').click(function(){
      var f=new Object();
      f.id=$(this).attr('list_id');
      var result_msg=MYJS.ajax_obj.post(f,"{{asset('admin/article/del')}}",'html');
      result_msg.success(function(msg){
          $("#list_"+msg).remove();
      }); 
    });

  });
 
</script>
@stop
