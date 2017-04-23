@extends('app')

@section('title', 'Home | FaceClash v1.0')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-center vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jumbotron bg-inherit text-white">
                    <div class="container">
                        {{--<h1 class="raleway">FACECL<i class="fa fa-smile-o"></i>SH<sup><em class="font70 lato"><span class="text-red">beta</span></em></sup>&nbsp;</h1>--}}
                        <h1 class="khand"><span class="font150 text-blue semi-trans">FACE<span class="text-white">CL<span class= "text-dark-semi-trans-back">ASH</span></span><sup><em class="font70 lato"><span class="text-red" style = "opacity :0.6" >beta</span></em></sup>&nbsp;</span></h1>
                        <p>Compare Faces.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop