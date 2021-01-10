@extends('layouts.admin')
@section('content')
    <form class="row g-3" method="post" action="{{route('roles.store')}}">
        {{ csrf_field() }}
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Name </label>
            <input type="text" name="name" class="form-control" id="validationCustom01" value= "{{$role->name}}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label"> Guard Name</label>
            <input type="text" name="guard_name" class="form-control" id="validationCustom01" value= "{{$role->guard_name}}" required>
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