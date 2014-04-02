//公共js
window.MYJS = window.MYJS || {};
$(function(){
  var ajax_obj={};
  //POST
  ajax_obj.post=function(form,url,result_type){
    return $.ajax({
      type: "POST",
      url: url,
      data:form,
      async : false,
      dataType:result_type
    });
  };

  //GET
  ajax_obj.get=function(form,url,result_type){
    return $.ajax({
      type: "GET",
      url: url,
      async : false,
      data:form,
      dataType:result_type
    });
  };

  MYJS.ajax_obj = ajax_obj;
}());
