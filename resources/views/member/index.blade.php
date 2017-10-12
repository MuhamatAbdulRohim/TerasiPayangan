@extends('member.master')

@section('content')

    <section class="home-section home-fade home-full-height bg-dark-60 landing-header" id="home"
             data-background="{{asset('images/landing_bg.jpg')}}">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="container">
                    <div class="font-alt mb-30 titan-title-size-4">Welcome To Our Website</div>
                    <div class="font-alt mt-30"><a class="btn btn-border-w btn-circle" href="#"><i
                                    class="icon-bike"></i> Shope Now</a></div>
                </div>
            </div>
        </div>
    </section>

@endsection
