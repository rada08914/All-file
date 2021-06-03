@php $active ='loans' @endphp
@extends('layouts.main')
@section('title','Create Loans')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Loans
            </h4>
        </div>
        <div class="col-12">
            <form class="row g-3">
                <div class="col-md-4">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" placeholder="Fullname">
                </div>
                <div class="col-md-4">
                <label for="employee" class="form-label">Employee</label>
                <input type="text" class="form-control" id="employee" placeholder="Employee">
                </div>
                <div class="col-4">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Designation">
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <label for="leavesType" class="form-label">Load Type</label>
                        <select id="leavesType" class="form-select">
                            <option selected>Choose...</option>
                            <option>Load Type 1</option>
                            <option>Load Type 2</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="start" class="form-label">Start</label>
                        <input type="date" class="form-control" id="start" placeholder="Start Date">
                    </div>
                    <div class="col-md-12">
                        <label for="end" class="form-label">End</label>
                        <input type="date" class="form-control" id="end" placeholder="End Date">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea rows="7" type="text" class="form-control" id="notes" placeholder="notes"></textarea>
                    </div>
                </div>

                <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection
