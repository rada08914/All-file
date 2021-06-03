@php $active ='deduction' @endphp
@extends('layouts.main')
@section('title','Create Deduction')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Deduction
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="contributionType" class="form-label">Contribution Type</label>
                    <select id="contributionType" class="form-select">
                        <option selected>Tax</option>
                        <option>Tax 1</option>
                        <option>Tax 2</option>
                    </select>
                </div>
                <div class="col-md-8">
                <label for="baseRange" class="form-label">Base Range</label>
                <input type="baseRange" class="form-control" id="baseRange" placeholder="Base Range">
                </div>
                <div class="col-md-4">
                <label for="monthlyContribution" class="form-label">Monthly Contribution</label>
                <input type="monthlyContribution" class="form-control" id="monthlyContribution" placeholder="Monthly Contribution">
                </div>
                <div class="col-4">
                <label for="employeeShare" class="form-label">Employee Share</label>
                <input type="text" class="form-control" id="employeeShare" placeholder="Employee Share">
                </div>
                <div class="col-4">
                <label for="employerShare" class="form-label">Employer Share</label>
                <input type="text" class="form-control" id="employerShare" placeholder="Employer Share">
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
