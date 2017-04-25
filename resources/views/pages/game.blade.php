@extends('app')

@section('title', 'Game | FaceClash v1.0')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-center vh-align">
            <div style="top:-60px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if(count($images)==2)
                    <div style=" left:-5px" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        {!! Form::open(['method' => 'POST', 'action' => ['GameController@update',$expected1], 'class' => 'form-horizontal' ]) !!}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="winner" id="{{$images->first()->id}}" value="{{$images->first()->id}}"/>
                                <input type="hidden" class="form-control" name="looser" id="{{$images->last()->id}}" value="{{$images->last()->id}}"/>
                                <input type="hidden"  name="_method"  value="PATCH"/>
                            </div>
                            <div id = "left" class ="animated bounceInLeft">
                            <a href ="#" class ="pickoption">
                                <div class="view view-first" style="max-height=100%;max-width=100%">
                                    
                                    <img src="{{ asset('img/models/'.$images->first()->filename) }}" alt="image 1" width=600 height=600 style="border-radius:300px" class="img-responsive">
                                    <div class="mask">
                                        <h2>Rank:{{ $images->first()->rank }}</h2>
                                        <p class="lead">hot chart</p>
                                        <table class="table bg-inherit text-center">
                                            <thead><tr></tr></thead>
                                            <tbody>
                                                <tr><td><span class="font120">Won:{{$images->first()->wins}}</span></td></tr>
                                                <tr><td><span class="font120">Lost:{{$images->first()->losses}}</span></td></tr>
                                                <tr><td><span class="font120">expected:{{$expected1}}</span></td></tr>
                                                <tr><td><span class="font120">score:{{$images->first()->score}}</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </a>
                            </div>
                        {!! Form::close() !!}
                        </div>
                        <div style="left:120px" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        {!! Form::open(['method' => 'POST', 'action' => ['GameController@update',(1-$expected1)], 'class' => 'form-horizontal' ]) !!}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="winner" id="{{$images->last()->id}}" value="{{$images->last()->id}}"/>
                                <input type="hidden" class="form-control" name="looser" id="{{$images->first()->id}}" value="{{$images->first()->id}}"/>
                                <input type="hidden"  name="_method"  value="PATCH"/>
                            </div>
                            <div id = "right" class ="animated bounceInRight">
                            <a href ="#" class ="pickoption">
                                <div style="max-width=100%;max-height=100%" class="view view-first">
                                    
                                    <img src="{{ asset('img/models/'.$images->last()->filename) }}" alt="image 2" width=600 height=600 style="border-radius:300px" class="img-responsive">
                                    <div class="mask">
                                        <h2>Rank:{{ $images->last()->rank }}</h2>
                                        <p class="lead">hot chart</p>
                                        <table class="table bg-inherit text-center">
                                            <thead><tr></tr></thead>
                                            <tbody>
                                                <tr><td><span class="font120">Won:{{$images->last()->wins}}</span></td></tr>
                                                <tr><td><span class="font120">Lost:{{$images->last()->losses}}</span></td></tr>
                                                <tr><td><span class="font120">expected:{{1 - $expected1}}</span></td></tr>
                                                <tr><td><span class="font120">score:{{$images->last()->score}}</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </a>
                            </div>
                        {!! Form::close() !!}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop