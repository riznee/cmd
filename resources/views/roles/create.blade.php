@extends('layouts.admin')
@section('content')
    <form class="row g-3">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Name </label>
            <input type="text" class="form-control" id="validationCustom01" value= " " required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label"> Guard Name</label>
            <input type="text" class="form-control" id="validationCustom01" value= " " required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div> 

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label"> </label>
            <input type="text" class="form-control" id="validationCustom01" value= " " required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div> 

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label"> </label>
            <input type="text" class="form-control" id="validationCustom01" value= " " required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div> 

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
                
    </form>
@stop