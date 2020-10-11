@if ($message = Session::get('success'))
<div class="notification is-success">  
  <button class="delete" onclick="this.parentElement.style.display='none'"></button> 
    {{$message}}
</div>
@endif

@if ($message = Session::get('error'))
<div class="notification is-danger">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$message}}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="notification is-warning">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$message}}
</div>
@endif

@if ($message = Session::get('info'))
<div class="notification is-info">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$message}}
</div>
@endif
  

@if ($errors->any()) 
<div class="notification is-link">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$errors}}
</div>
@endif