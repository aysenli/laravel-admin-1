@extends('Vendor-Admin::layouts.main')
@section('content')
<form class="form-horizontal" role="form">
  <div class="form-group">

    <div class="col-sm-10">
     {{$displayData['treeHtml']}}
    </div>
    <label class="col-sm-2 control-label">
      <button type="button" class="btn btn-danger" id="edit">更新</button>
     <button type="button" class="btn btn-primary" id="del">删除</button> 
    </label>
  </div>
  
</form>


</table>

<script>
  $(function(){
    $('#cat').change(function(){
      var f=new Object();
      f.id=$(this).val();
      $('#del').click(function(){
        var result_msg=MYJS.ajax_obj.post(f,"{{asset('admin/article/category_del')}}",'html');
        result_msg.success(function(msg){
          window.location.reload()
        }); 
      });
    });

  });
 
</script>
@stop
