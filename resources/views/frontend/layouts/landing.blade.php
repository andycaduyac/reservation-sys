@extends('frontend.base')

@section('content')

<section id="header" class="jumbotron text-center">
    <br>
    <br>
    <h1 class="display-3 text-white py-2"><strong>JYRA'S RESORT</strong></h1>
    <p class="lead text-white">Guiwanon, Tubigon, Bohol</p>
    <br> <br>
    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, debitis iusto.</p>
    <br> <br> <br> <br>
    {{-- <a href="/make-reservation" class="my-3 text-white" id="mk-reserve">Make Reservation</a> --}}
</section>



<style>


/* -0  */

    #header {
        background: url('/resort-images/resort-img1.png') center center / cover no-repeat ;
        min-height: 350px;
        /* filter: blur(1.5px);
        -webkit-filter: blur(1.5px); */
    }

    #header {
        -webkit-animation: fadeInDown 1.3s both;
        -moz-animation: fadeInDown 1.3s both;
        -o-animation: fadeInDown 1.3s both;
        animation: fadeInDown 1.3s both;
    }
    @keyframes fadeInDown {
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }


    #header{
        height: 10vw;
        }
</style>

@endsection
