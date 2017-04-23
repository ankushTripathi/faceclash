@extends('app')

@section('title', 'Game | FaceClash v1.0')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-center vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if(count($images)==2)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        {!! Form::open(['method' => 'POST', 'action' => ['GameController@update',$images->first()->id], 'class' => 'form-horizontal' ]) !!}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="winner" id="{{$images->first()->id}}" value="{{$images->first()->id}}"/>
                                <input type="hidden" class="form-control" name="loser" id="{{$images->last()->id}}" value="{{$images->last()->id}}"/>
                                <input type="hidden"  name="_method"  value="PATCH"/>
                            </div>
                            <div id = "left" class ="animated bounceInLeft">
                            <a href ="#" class ="pickoption">
                                <div class="view view-first">
                                    
                                    <img src="{{ asset('img/models/'.$images->first()->filename) }}" alt="image 1" width=600 class="img-responsive">
                                    <div class="mask">
                                        <h2>Rank:{{ $images->first()->rank }}</h2>
                                        <p class="lead">hot chart</p>
                                        <table class="table bg-inherit text-center">
                                            <thead><tr></tr></thead>
                                            <tbody>
                                                <tr><td><span class="font120">Won:{{$images->first()->wins}}</span></td></tr>
                                                <tr><td><span class="font120">Lost:{{$images->first()->losses}}</span></td></tr>
                                                <tr><td><span class="font120">score:{{$images->first()->score}}</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        {!! Form::open(['method' => 'POST', 'action' => ['GameController@update',$images->first()->id], 'class' => 'form-horizontal' ]) !!}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="winner" id="{{$images->first()->id}}" value="{{$images->first()->id}}"/>
                                <input type="hidden" class="form-control" name="loser" id="{{$images->last()->id}}" value="{{$images->last()->id}}"/>
                                <input type="hidden"  name="_method"  value="PATCH"/>
                            </div>
                            <div id = "left" class ="animated bounceInRight">
                            <a href ="#" class ="pickoption">
                                <div class="view view-first">
                                    
                                    <img src="{{ asset('img/models/'.$images->last()->filename) }}" alt="image 2" width=600 height="400" class="img-responsive">
                                    <div class="mask">
                                        <h2>Rank:{{ $images->last()->rank }}</h2>
                                        <p class="lead">hot chart</p>
                                        <table class="table bg-inherit text-center">
                                            <thead><tr></tr></thead>
                                            <tbody>
                                                <tr><td><span class="font120">Won:{{$images->last()->wins}}</span></td></tr>
                                                <tr><td><span class="font120">Lost:{{$images->last()->losses}}</span></td></tr>
                                                <tr><td><span class="font120">score:{{$images->last()->score}}</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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