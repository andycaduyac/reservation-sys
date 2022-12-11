@extends('frontend.base')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid mt-3" id="text-to-right">
            <h1 class="display-6 text-white"> <strong> Contact Us </strong> </h1>
            <p class="text-white"> If you have any inquiries, feel free to contact us through the following:</p>
        </div>
        <div class="body">
            <div class="row mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 mb-3" id="card1">
                                <a href="tel:09328826688" class="card text-dark">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <h5 class="card-title"><i class="bi bi-phone-fill me-2"></i> 0932 882 6688</h5>
                                    </div>
                                        <h5 class="card-subtitle d-flex justify-content-center mb-3">Mobile No.</h5>
                                </a>

                            </div>


                            <div class="col-md-4 mb-3" id="card2">
                                <a href="https://www.google.com/maps/place/Jyra's+Resort/@9.940816,123.9524754,227m/data=!3m1!1e3!4m19!1m13!4m12!1m4!2m2!1d123.9056384!2d10.3153664!4e1!1m6!1m2!1s0x33aa2f9f5fae5763:0xbf1f94bae0d543f0!2sjyras+resort!2m2!1d123.9527309!2d9.9410097!3m4!1s0x33aa2f9f5fae5763:0xbf1f94bae0d543f0!8m2!3d9.9410097!4d123.9527309"
                                    class="card text-dark shadow-lg" target="_blank">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2"></i> Guiwanon, Tubigon, Bohol</h5>
                                    </div>
                                        <h5 class="card-subtitle d-flex justify-content-center mb-3"> Address</h5>

                                </a>

                            </div>

                        <div class="col-md-4 mb-3" id="card3">

                            <a href="https://web.facebook.com/jyraresort/" class="card text-dark shadow-lg" target="_blank">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <h5 class="card-title"><i class="bi bi-facebook me-2"></i> Jyra's Resort</h5>
                                </div>
                                <h5 class="card-subtitle d-flex justify-content-center mb-3">Facebook</h5>
                            </a>
                        </div>
                        </div>
                    </div>

            </div>
        </div>
        <div class="container mt-5 p-3" id="message-form">
            <h4 class="text-white">Visit us: </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1168.3710160624078!2d123.95224330583027!3d9.940947386481511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa2f9f5fae5763%3A0xbf1f94bae0d543f0!2sJyra&#39;s%20Resort!5e0!3m2!1sen!2sph!4v1669165088499!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <style>
        .card{
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
            padding: 14px 35px 18px 35px;
            cursor: pointer;
            min-height: 12rem;
            min-width: 30rem;
        }

        .card:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }

        .card h3{
            font-weight: 600;
        }
        #card1{
            -webkit-animation: fadeInUp 1.2s both;
            -moz-animation: fadeInUp 1.2s both;
            -o-animation: fadeInUp 1.2s both;
            animation: fadeInUp 1.2s both;
        }
        #card2{
            -webkit-animation: fadeInUp 1.5s both;
            -moz-animation: fadeInUp 1.5s both;
            -o-animation: fadeInUp 1.5s both;
            animation: fadeInUp 1.5s both;
        }
        #card3{
            -webkit-animation: fadeInUp 1.8s both;
            -moz-animation: fadeInUp 1.8s both;
            -o-animation: fadeInUp 1.8s both;
            animation: fadeInUp 1.8s both;
        }
        @keyframes fadeInUp {
            0%{
                opacity: 0;
            }
            55%{
                opacity: 0;
                transform: translateY(50px);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }
        #text-to-right h1{
            -webkit-animation: fadeInRight 1.3s both;
            -moz-animation: fadeInRight 1.3s both;
            -o-animation: fadeInRight 1.3s both;
            animation: fadeInRight 1.3s both;
        }
        @keyframes fadeInRight {
            0%{
                opacity: 0;
                transform: translateX(-50px);
            }
            100%{
                opacity: 1;
                transform: translateX(0);
            }
        }
        #text-to-right p{
            -webkit-animation: fadeInDown 1.3s both;
            -moz-animation: fadeInDown 1.3s both;
            -o-animation: fadeInDown 1.3s both;
            animation: fadeInDown 1.3s both;
        }
        @keyframes fadeInDown {
            0%{
                opacity: 0;
            }
            40%{
                opacity: 0;
                transform: translateY(-15px);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
        }
        #message-form {
            -webkit-animation: fadeInDown 2s both;
            -moz-animation: fadeInDown 2s both;
            -o-animation: fadeInDown 2s both;
            animation: fadeInDown 2s both;
        }
        a{
            text-decoration: none;
        }
    </style>
@endsection
