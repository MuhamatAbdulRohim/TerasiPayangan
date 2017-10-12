@extends('guest.master')

@section('content')
    <div class="main">
        <section class="module bg-dark-60 contact-page-header bg-dark" data-background="{{asset('images/bg-contact.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Hubungi Kami</h2>
                        <div class="module-subtitle font-serif">Kemauan Anda adalah Kebutuhan Kami.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module-small">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style=" background-color: #e0dfe3 !important; padding: 1% !important;">
                        <h4 class="font-alt">Kontak Kami</h4><br/>
                        <form id="contactForm" role="form" method="post" action="php/contact.php">
                            <div class="form-group">
                                <label class="sr-only" for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*"
                                       required="required" data-validation-required-message="Please enter your name."/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email"
                                       placeholder="Your Email*" required="required"
                                       data-validation-required-message="Please enter your email address."/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="7" id="message" name="message"
                                          placeholder="Your Message*" required="required"
                                          data-validation-required-message="Please enter your message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit
                                </button>
                            </div>
                        </form>
                        <div class="ajax-response font-alt" id="contactFormResponse"></div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="font-alt">Siapa Kami</h4><br/>
                        <p>Terasi Payangan adalah produk awetan ikan-ikan kecil khas daerah payangan Jember atau udang
                            rebon yang
                            diolah melalui proses pemeraman atau fermentasi, penggilingan atau penumbukan, dan
                            penjemuran. Wilayah
                            Payangan, terletak di Desa Sumberrejo Kecamatan Ambulu, adalah salah satu wilayah pesisir di
                            Kabupaten
                            Jember yang merupakan wilayah usaha pengolahan hasil lauth nomer 2 terbesar di Jember.
                            Masyarakat
                            setempat sebagian besar bermata pencaharian sebagai nelayan dan pengolahan hasil laut.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="map-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Lokasi Kami</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15786.582832983162!2d113.581299!3d-8.436409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x349dbb12eb1ac295!2sPantai+Payangan!5e0!3m2!1sen!2s!4v1507191148102"
                                width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer navbar-fixed-bottom bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights
                            Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                    href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection