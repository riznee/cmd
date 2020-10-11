@if ($message = Session::get('success'))
<div class="notification is-success">
   
    {{$message}}
</div>
@endif

@if ($message = Session::get('error'))
<div class="notification is-danger">
   
    {{$message}}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="notification is-warning">
   
    {{$message}}
</div>
@endif

@if ($message = Session::get('info'))
<div class="notification is-info">
   
    {{$message}}
</div>
@endif
  

@if ($errors->any()) 
  <div class="notification is-link">
    {{$errors}}
  </div>
@endif