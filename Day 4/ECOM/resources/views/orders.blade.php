@php $active ='orders' @endphp
@extends('layouts.main')
@section('title','Orders')
@section('content')
<div class="card col-12 mt-5">
    <div class="card">
    <div class="card-body row p-5"> 
    
        <div class="col-10">
            <h4>
                Orders
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
                <a href="/orders/create" class="btn btn-dark pull right">Create</a>
              </div>
          </form>
      <br> 
      <table class="table">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Customer name</th>
              <th scope="col">Contact</th>
              <th scope="col">Address	</th>
              <th scope="col">Product</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col">Shipment status</th>
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
