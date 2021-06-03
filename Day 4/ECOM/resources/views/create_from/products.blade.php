@php $active ='products' @endphp
@extends('layouts.main')
@section('title','Create Products')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Products
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3">
                
                <div class="col-md-8">
                <label for="name" class="form-label">Name	</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-md-4">
                <label for="category" class="form-label">Category	</label>
                <input type="text" class="form-control" id="category" placeholder="Category">
                </div>
                <div class="col-4">
                <label for="price" class="form-label">Price	</label>
                <input type="number" class="form-control" id="price" placeholder="Price">
                </div>
                <div class="col-4">
                <label for="brand" class="form-label">Brand	</label>
                <input type="text" class="form-control" id="brand" placeholder="Brand">
                </div>
                <div class="col-4">
                    <label for="description" class="form-label">Description	</label>
                    <input type="text" class="form-control" id="description" placeholder="Description">
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
