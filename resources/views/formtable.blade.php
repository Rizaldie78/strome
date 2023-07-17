@extends('layout.app')

@section('title','formp')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body >
    <div id="app">
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <form action="/table/add_data" method="POST">
                @csrf
                <div class="card mt-5">
                    <div class="card-header">
                      <h3>New Game</h3>
                    </div>
                 <div class="card-body">
                <div class="mb-3">
                  <label for="nama_product" class="form-label">Nama Game</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Ukuran</label>
                  <input type="text" class="form-control" id="ukuran" name="ukuran">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga">
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>

@endsection