@php $active='layout' @endphp
@extends('layouts.main')
@section('title','Layout Test')
@section('content')
    <div class="card mt-4">
    <div class="card-body"> 
      <h3>Layout</h3> 
      <br> 
          <form class="row g-2">
  
              <div class="col-auto">
                  <input type="search" class="form-control" id="search" placeholder="Search">
              </div>
              <div class="col-auto" style="position: absolute; right:20px;">
                  <button class="btn btn-primary me-md-2" type="button">Create</button>
              </div>
          </form>
      <br> 
      <table class="table">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
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

@endsection
