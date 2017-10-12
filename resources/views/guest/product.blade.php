@extends('guest.master')

@section('content')
    <div class="main">
        <section class="module bg-dark-60 shop-page-header"
                 data-background="{{asset('images/bg-product.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Silahkan Pilih Produk Kami</h2>
                        <div class="module-subtitle font-serif">Kepuasan Anda adalah tujuan utama kami
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
            <div class="container">
                <div class="row multi-columns-row">
                    @foreach($data as $item)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="shop-item">
                                <div class="shop-item-image"><img src="{{asset('product/'.$item->image_url)}}"
                                                                  alt="Accessories Pack"/>
                                    <div class="shop-item-detail"><button class="btn btn-round btn-b btn-add"><span
                                                    class="icon-basket">Add To Cart</span></button>
                                    </div>
                                </div>
                                <h4 class="shop-item-title font-alt"><a
                                            href="/detail/{{$item->product_id}}">{{$item->product_name}}</a></h4>
                                Rp. {{$item->unit_price}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {!! $data->render() !!}
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-d">
        <footer class="footer bg-dark navbar-fixed-bottom">
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

@push('scripts')
    <script>

        $(function () {
            $('.btn-add').click(function () {
                alert('Maaf, Silahkan Masuk terlebih dahulu ')
            });
        });

    </script>
@endpush