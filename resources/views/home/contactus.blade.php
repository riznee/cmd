@extends('layouts.site')
@section('content')

    <form class="box" method="post" action="{{ route('captcha.validation') }}">
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
                <textarea class="input"name="message"  id="message" type="text" required></textarea>
            </div>
        </div>
 
        <div class="field">     
            <label class="label">Captcha</label>
            <span>{!! captcha_img() !!}</span>
            <button type="button" class="btn btn-secondary" class="refresh-captcha" id="refresh-captcha">
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
               
@stop
