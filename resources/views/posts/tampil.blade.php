@extends('components.layout')

@section('konten')
<div class="d-flex">
  <h4>list data</h4>
  <div class="ms-auto">
    <a class="btn btn-success" href="{{ route('posts.create') }}">insert data</a>
  </div>
</div>
  <table class="container">
    <tr>
      <th>id</th>
      <th>title</th>
      <th>authorid</th>
      <th>catid</th>
      <th>slug</th>
      <th>body</th>
    </tr>
  </table>
  
@endsection