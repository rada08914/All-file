@php $active ='categories' @endphp
@extends('layouts.main')
@section('title','Create Categories')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Categories
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3">
               
                <div class="col-md-4">
                <label for="name" class="form-label">Name	</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-md-8">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description">
                </div>
                
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>

    
@endsection
