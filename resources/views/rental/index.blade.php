@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

@foreach($rental as $item)

<div class="card d-flex">
    <a href="{{route ('rental.create') }}" class="btn btn-success"> Tambah </a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">No Hp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td scope="row">{{ $item->nama_rental }}</td>
      <td scope="row">{{ $item->no_hp }}</td>
      <td>
        <a href="#" class="btn btn-primary"> Edit</a>
        <a href="#" class="btn btn-danger"> Hapus</a>
      </td>
    </tr>
  </tbody>
</table>

@endforeach


@endsection