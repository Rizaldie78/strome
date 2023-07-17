@extends('Layout.app')

@section('title','home')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<a class="btn btn-danger" style="margin-left: 40px" href="table/add_data" role="button">Add</a>
    <table class="table">
        <thead>
          <tr>
            <th style="color: black" scope="col">ID</th>
            <th style="color: black" scope="col">Nama</th>
            <th style="color: black" scope="col">Ukuran</th>
            <th style="color: black" scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
            @foreach($table as $data)
            <tr>
                <td style="color: black">{{$loop->iteration}}</td>
                <td style="color: black">{{$data->nama}}</td>
                <td style="color: black">{{$data->ukuran}}</td>
                <td style="color: black">{{$data->harga}}</td>
                <td style="display: flex">
                    <button class="btn btn-danger"><a href="/table/detail/{{ $data->id }}"><i class="fa-solid fa-circle-info"></i></a></button>
                
                    <form action="/table/destroy/{{ $data->id }}" method="POST"
                        onsubmit="return confirm('KAMU YAKINN?!!?1!??!?!?!?')">
                        @csrf
                        @method('DELETE')
                       <button class="btn btn-danger"> <i  class="fa-solid fa-trash"></i></button>
                    </form>
                    <button class="btn btn-danger"><a href="/edittable/update/{{$data->id}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      

@endsection