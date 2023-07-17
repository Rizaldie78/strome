@extends('Layout.app')

@section('title','home')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<table class="table-info">
    <thead>
        <tr class="table-info">
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
        <tbody>
            <tr class="table-info">
            <td class="table-info">{{$table->id}}</td>
            <td class="table-info">{{$table->nama}}</td>
            <td class="table-info">{{$table->ukuran}}</td>
            <td class="table-info">{{$table->harga}}</td>
          </tr> 
        </tbody>
      </table>

                <a href="/datatable"><button type="button" class="btn btn-danger">Kembali</button></a>

@endsection