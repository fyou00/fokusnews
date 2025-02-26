@extends('components/layout')

@section('konten')
  <div class="container px-5">
    <a href="posts/create" class="btn btn-primary">create posts</a>
    {{-- <div class="row p-2 bg-warning">
      <div class="col-md-8 bg-primary-subtle">
        <div class="blue-box">
            <h3>Ini adalah Kotak Biru</h3>
            <p>Kotak ini memiliki ukuran col-md-8 dan menggunakan warna latar belakang biru.</p>
        </div>
      </div>
      <div class="col-md-4 bg-danger-subtle">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div> --}}
    <table>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $post->$title }}</td>
          <td>{{ $post->$content }}</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection