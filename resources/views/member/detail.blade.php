@extends ('member.master')

@section('content')
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-sm-40"><a class="gallery" href="{{asset('images/pd-1.jpg')}}"><img
                                    src="{{asset('images/'.$data->image_url)}}" alt="Single Product Image"/></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="product-title font-alt">{{$data->product_name}}</h1>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="price font-alt"><span class="amount">Rp. {{$data->unit_price}}</span></div>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="description">
                                    <p>{{$data->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="/member/cart/add/{{{$data->product_id}}}">Add To
                                    Cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer navbar-fixed-bottom bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="/">Terasi Payangan</a>, All Rights
                            Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                    href="#"><i
                                        class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection