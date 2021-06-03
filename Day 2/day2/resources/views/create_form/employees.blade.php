@php $active ='employees' @endphp
@extends('layouts.main')
@section('title','Create Employees')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Employees
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3">
                <div class="col-md-12">
                <label for="img" class="form-label">Photo</label>
                <input type="file" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstname" placeholder="First name">
                </div>
                <div class="col-4">
                <label for="middlename" class="form-label">Middle name</label>
                <input type="text" class="form-control" id="middlename" placeholder="Middle name">
                </div>
                <div class="col-4">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Last name">
                </div>
                <div class="col-md-4">
                <label for="Contact" class="form-label">Contact</label>
                <input type="number" class="form-control" id="contact" placeholder="09...">
                </div>       
                <div class="col-md-4">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday">
                </div>
                <div class="col-md-4">
                <label for="inputState" class="form-label">Gender</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="textarea" class="form-control" id="address">
                </div>
                <div class="col-md-4">
                <label for="department" class="form-label">Department</label>
                <select id="department" class="form-select">
                    <option selected>Choose...</option>
                    <option>Depart 1</option>
                    <option>Depart 2</option>
                    <option>Depart 3</option>
                </select>
                </div>
                <div class="col-md-4">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation">
                </div>
                <div class="col-md-4">
                    <label for="basicrate" class="form-label">Basic Rate</label>
                    <input type="number" class="form-control" id="basicrate">
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">PhilHealth Contribution Table</label>
                    <select id="department" class="form-select">
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">SSS Contribution Table</label>
                    <select id="department" class="form-select">
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Pag-ibig Contribution Table</label>
                    <select id="department" class="form-select">
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                 </div>
                 <div class="col-md-6">
                    <label for="department" class="form-label">Income Tax Table</label>
                    <select id="department" class="form-select">
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
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
