@extends('layout/main0226')

@section('title', 'Rak Buku')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Rak Buku</h1>
    <a class="btn btn-primary" href="/exportexcel" role="button">Export</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Jenis</th>
      <th scope="col">Tahun Terbit</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($rak as $rk)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$rk->judul}}</td>
      <td>{{$rk->jenis}}</td>
      <td>{{$rk->tahun_terbit}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   