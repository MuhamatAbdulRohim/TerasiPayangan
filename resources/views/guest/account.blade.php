@extends('guest.master')

@section('content')

    <div class="main">
        <div class="container">
            <div class="row mt-80">
                <div class="col-sm-12">
                    <h4 class="font-alt">Daftar sebagai member Terasi Payangan</h4>
                    <hr/>
                    <form action="/registrasi" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Anda" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat</label>
                            <textarea class="form-control" name="address" placeholder="Alamat Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="noHp">Nomor Handphone</label>
                            <input type="text" id="noHp" class="form-control" placeholder="Nomor Handphone Anda"
                                   name="handphone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                   name="email">
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username"
                                   name="username">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                   name="password">
                        </div>
                        <button type="submit" class="btn btn-success" style="float: right !important;">Daftar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <footer class="footer bg-dark">
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

@endsection