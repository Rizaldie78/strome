@extends('buy.buy')

@section('title','home')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
<form action="{{ url('edittable/update/'.$table->id)}}" method="POST">
    @csrf
    @method('PATCH')

    
        <div class="col-md-6 col-sm-6">
             <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="cf-name" required="">
        </div>

        <div class="col-md-6 col-sm-6">
             <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="cf-email" required="">
        </div>

        <div class="col-md-6 col-sm-6">
             <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="cf-number" required="">
        </div>

        <div class="col-md-6 col-sm-6">
             <select class="form-control" id="cf-budgets" name="cf-budgets">
                  <option>Budget Level</option>
                  <option>$500 to $1,000</option>
             </select>
        </div>

        <div class="col-md-12 col-sm-12">
             <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message" required=""></textarea>
        </div>

        <div class="col-md-4 col-sm-12">
             <input type="submit" class="form-control" name="submit" value="Send Message">
        </div>

@endsection