@extends('layouts.site')
@section('content')

<div class="container" style="width:75% ;padding-top: 25px;">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Contact Us</h1>
          {{--  <p class="lead">To quickly find answers to your questions, we have compiled this list of contact information</p>  --}}
        </div>
    </div>
    <div class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2> General Questions </h2>
                    <form class="row g-3" method="post" action="{{ route('captcha.validation') }}">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div>
                            <label for="name" class="form-label">Name </label>
                            <input type="text" name="name" id="name" class="form-control" value= " " required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose enter youname.
                            </div>
                        </div>

                        <div >
                            <label for="email" class="form-label">Email </label>
                            <input type="email" name="email"  id="email" class="form-control"  value= " " required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a enter an email address.
                            </div>

                        </div>

                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" class="form-control" name="subject" required="required"></input>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please choose a enter a subject .
                        </div>
                        <div >
                            <label class="form-label">Message</label>
                            <textarea  class="form-control" name="message"  placeholder="Write something.."  required></textarea>
                        </div>

                        <div>
                            <label class="form-label">Captcha</label>
                            <br/>
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-secondary" class="refresh-captcha" id="refresh-captcha">
                                &#x21bb;
                            </button>
                        </div>
                        <div >
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        </div>


                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div class="card ">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-9">
                                    <strong>   Priority Support and Contacts </strong>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-secondary">
                            <div class="col">
                                <ul class="list-group">
                                    <li class="list-group-item"> For all press related inquiries:</li>
                                    <li class="list-group-item">Partnering with  {{ config('app.name', 'SSCM') }}:</li>
                                    <li class="list-group-item">Support  {{ config('app.name', 'SSCM') }}:</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



@stop
