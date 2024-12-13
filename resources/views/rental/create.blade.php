@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')


<div class="">

<form action="#" method="POST">
@csrf

<div class="mb-2">
<label for="nama_rental"> Nama Rental</label>
<input type="text" name="nama_rental" class="form-control">
</div>

</form>

</div>

@endsection