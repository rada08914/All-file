<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row p-5">
        <div class="col-10">
          <h1> Personel</h1>
        </div>
        <div class="col-2">
            <a href="\create" class="btn btn-success">Add New</a>
        </div>
        <div class="col-12 mt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Middle name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                    <tr>           
                      <th scope="row">{{ $d->first_name }}</th>
                      <th scope="row">{{ $d->last_name }}</th>
                      <th scope="row">{{ $d->middle_name }}</th>
                      <th scope="row">{{ $d->age }}</th>
                      <th scope="row">{{ $d->gender }}</th>
                      <th scope="row">{{ $d->birthday }}</th>
                      <th scope="row">{{ $d->contact }}</th>
                      <th scope="row">{{ $d->address }}</th>
                      <th scope="row">
                        <a href="{{URL::route('update',$d->id)}}" class="btn btn-success btn-sm">Update</a>
                        <a href="{{URL::route('delete',$d->id)}}" class="btn btn-danger btn-sm">Delete</a>
                      </th>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        
            
        </div>
    </div>
</div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>