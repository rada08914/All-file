@php $active ='customers' @endphp
@extends('layouts.main')
@section('title','Customers')
@section('content')
<div class="card col-12 mt-5">
    <div class="card">
    <div class="card-body row p-5"> 
    
        <div class="col-10">
            <h4>
                Customers
            </h4>
        </div> 
        <div class="col-12">
            <hr>    
        </div>
          <form class="row g-2">
  
              <div class="col-auto">
                  <input type="search" class="form-control" id="search" placeholder="Search">
              </div>
              <div class="col-auto" style="position: absolute; right:20px;">
                <a href="/customers/create" class="btn btn-dark pull right">Create</a>
              </div>
          </form>
      <br> 
      <table class="table">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Name	</th>
              <th scope="col">Contact</th>
              <th scope="col">Address	</th>
              <th scope="col">Gender</th>
              <th scope="col">Age</th>
              <th scope="col">Email address</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
          </tr>
          
          </tbody>
      </table>
    </div>
@endsection
