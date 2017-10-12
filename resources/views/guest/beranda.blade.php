@extends('guest.master')

@section('content')

    <section class="home-section home-fade home-full-height bg-dark-60 landing-header" id="home"
             data-background="{{asset('images/landing_bg.jpg')}}">
        <div class="titan-caption">
            <div class="caption-content">
                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('success_message')}}</strong>
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9" style="margin-bottom: 10% !important; margin-top: 10% !important;">
                            <div class="font-alt mb-30 titan-title-size-4">Welcome To Our Website</div>
                            <div class="font-alt mt-30"><a class="btn btn-border-w btn-circle" href="#"><i
                                            class="icon-bike"></i> Shope Now</a></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-sm-12"
                                 style="background-color: #e0dfe3 !important; padding: 5% !important;">
                                <h4 class="font-alt" style="color: #2f2f2f !important;">Masuk</h4><br/>
                                <form method="POST" action="/log">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="username" name="username"
                                               placeholder="Enter Your Username" required="required"
                                               data-validation-required-message="Please enter your Username."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="pwd"
                                               placeholder="Enter Your Password" required="required"
                                               name="password"
                                               data-validation-required-message="Please enter your password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success form-control" id="cfsubmit" type="submit">
                                            Masuk
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <a href="/registrasi"
                                           class="btn btn-block btn-d form-control">Registrasi</a>
                                    </div>
                                </form>
                                <div class="ajax-response font-alt" id="contactFormResponse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
