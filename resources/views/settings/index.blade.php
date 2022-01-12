@extends('layouts.admin')
@section('content')
<div class="card has-background-success"style=" margin: 10px">
	<header class="card-header has-text-info-light">
		<a  href="{{url()->previous()}}" class="card-header-icon" aria-label="more options">
		  <span class="icon">
			<i class="fas fa-arrow-left" aria-hidden="true"></i>
		  </span>
	  	</a>
		<p class="card-header-title">
			Settings 
		</p>

	</header>
</div>

<section class=" section column is-four-fifths">
    <form class="box is-two-thirds" method="post" action="{{ route('captcha.validation') }}">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input"name="name"  id="name" type="text" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input"  name="email"  id="email" type="email" placeholder="e.g. example@example.com" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Subject</label>
            <div class="control">
                <input class="input"name="subject"  id="subject" type="text" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Message</label>
            <div class="control">
                <textarea class="textarea"name="message"  id="message" type="text" row="10" required></textarea>
            </div>
        </div>
 
        <div class="field">     
            <label class="label">Captcha</label>
            <span>{!! captcha_img() !!}</span>
            <button   class="button is-rounded" id="refresh-captcha">
                &#x21bb;
            </button>
        </div>
        <div class="field"> 
            <input id="captcha" type="text" class="input" placeholder="Enter Captcha" name="captcha" required>
        </div>
        <div style="align-content: center">
            <button class="button is-secoundary" type="submit">Save</button>
        </div>
       
    </form>

</section>


   
@stop