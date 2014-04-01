@extends('Vendor-Admin::layouts.main')
@section('content')
<table class="table table-striped">
  <tr>
    <td>id</td>
    <td>标题</td>
  </tr>
@foreach($displayData['article'] as $k)
  <tr>
    <td>{{$k['id']}}</td>
    <td>{{$k['title']}}</td>
  </tr>
@endforeach
</table>
    {{ $displayData['article']->links()  }}
@stop
