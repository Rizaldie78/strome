@extends('Layout.app')

@section('title','home')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
<form action="{{ url('edittable/update/'.$table->id)}}" method="POST">
    @csrf
    @method('PATCH')

  <div class="card mt-5">
    <div class="card-header">
      <h3>Edit Game</h3>
    </div>

 <div class="card-body">
<div class="mb-3">
  <label for="nama_product" class="form-label">Nama </label>
  <input type="text" class="form-control" id="nama" name="nama" value="{{$table->nama}}">
</div>
<div class="mb-3">
  <label for="deskripsi" class="form-label">Ukuran</label>
  <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{$table->ukuran}}">
</div>
<div class="mb-3">
  <label for="harga" class="form-label">Harga</label>
  <input type="number" class="form-control" id="harga" name="harga" value="{{$table->harga}}">
</div>
  
  <button type="submit" class="btn btn-danger">Submit</button>

</form>

@endsection