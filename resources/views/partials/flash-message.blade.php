@if ($message = Session::get('success'))
<div class="notification is-success level-right">  
  <button class="delete" onclick="this.parentElement.style.display='none'"></button> 
    {{$message}}
</div>
@endif

@if ($message = Session::get('error'))
<div class="notification is-danger level-right">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$message}}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="notification is-warning level-right">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$message}}
</div>
@endif

@if ($message = Session::get('info'))
<div class="notification is-info level-right">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$message}}
</div>
@endif
  

@if ($errors->any()) 
<div class="notification is-link level-right">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
    {{$errors}}
</div>
@endif