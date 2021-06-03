@php $active ='customers' @endphp
@extends('layouts.main')
@section('title','Create Customers')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Customers
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3">
            
                <div class="col-md-8">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-md-4">
                <label for="contact" class="form-label">Contact</label>
                <input type="number" class="form-control" id="contact" placeholder="0920">
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" class="form-select">
                        <option selected>Choose...</option>
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </div>
                <div class="col-4">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Age">
                </div>
                <div class="col-4">
                    <label for="emailaddress" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="emailaddress" placeholder="Email address">
                </div>
                <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Check me out
                    </label>
                </div>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>

    
@endsection
