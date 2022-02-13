@extends('layouts.site')
@section('content')

    <section class="section">



        <div class="tile is-ancestor is-transparent   ">
            <div class="tile is-vertical">

                <div class="tile">
                    <div class="tile is-parent is-vertical is-transparent">
                        <hr style="background-color: rgb(131, 115, 115);; height: 1px; border: 0;">
                        <article class="tile is-child  is-8">
                            <p class="title has-text-info _16mp">Contact us</p>
                            <br />
                            <br />
                            <p class="subtitle has-text-black-bis has-text-justified">
                                If you have any questions or queriese a member of staff will always be
                                to help. Feel free to contactus by filling the form and we will be sure to get back
                                to you as soon as possible</p>

                        </article>
                        <article class="tile is-child  is-8">
                            <p class="subtitle has-text-info-dark has-text-justified">
                                <br>
                                Email:
                                <br />
                                Phone:
                            </p>
                        </article>

                    </div>
                    <div class="vl"></div>
                    <div class="tile is-parent is-transparent">
                        <article class="tile is-child  ">
                            <form class="box" method="post" action="{{ route('captcha.validation') }}">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input class="input" name="name" id="name" type="text" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input class="input" name="email" id="email" type="email"
                                            placeholder="e.g. example@example.com" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Subject</label>
                                    <div class="control">
                                        <input class="input" name="subject" id="subject" type="text" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Message</label>
                                    <div class="control">
                                        <textarea class="textarea" name="message" id="message" type="text" row="10"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Captcha</label>
                                    <span class="captcha-image">{!! Captcha::img()!!}</span>
                                    <a class=" button tag is-primary" href="javascript:void(0)" onclick="refreshCaptcha()"> &#x21bb;  </a>
                                </div>
                                <div class="field">
                                    <input id="captcha" type="text" class="input" placeholder="Enter Captcha"
                                        name="captcha" required>
                                </div>


                                <div style="align-content: center">
                                    <button class="button is-secoundary" type="submit">Save</button>
                                </div>

                            </form>

                        </article>
                    </div>
                </div>
                <hr style="background-color: rgb(131, 115, 115); height: 1px; border: 0;">
            </div>


        </div>

    </section>
    <script>
        
    </script>

@stop
