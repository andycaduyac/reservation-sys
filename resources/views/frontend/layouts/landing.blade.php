@extends('frontend.base')

@section('content')
<div class="container-fluid">
    @include('frontend.booking-forms.date-form')
</div>




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
