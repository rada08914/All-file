@php $active ='orders' @endphp
@extends('layouts.main')
@section('title','Create Orders')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Orders
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3">
    
                <div class="col-md-8">
                <label for="customerName" class="form-label">Customer name</label>
                <input type="customerName" class="form-control" id="customerName" placeholder="Customer Name">
                </div>
                <div class="col-md-4">
                <label for="contact" class="form-label">Contact</label>
                <input type="number" class="form-control" id="contact" placeholder="092">
                </div>
                <div class="col-4">
                <label for="address" class="form-label">Address	</label>
                <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
                <div class="col-4">
                <label for="product" class="form-label">Product</label>
                <input type="text" class="form-control" id="product" placeholder="Product">
                </div>
                <div class="col-4">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="QTY">
                </div>
                <div class="col-4">
                     <label for="product" class="form-label">Product</label>
                     <input type="text" class="form-control" id="product" placeholder="Product">
                </div>
                <div class="col-4">
                     <label for="total" class="form-label">Total</label>
                     <input type="number" class="form-control" id="total" placeholder="Total">
                </div>
        
               <div class="col-md-4">
                <label for="shipmentStatus" class="form-label">Shipment Status</label>
                <select id="shipmentStatus" class="form-select">
                    <option selected>Choose...</option>
                    <option>Pending</option>
                    <option>Out</option>
                </select>
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
