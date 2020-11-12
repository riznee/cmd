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

<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>