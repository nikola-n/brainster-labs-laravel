@extends('layout.master')

@section('content')

<div class="container-fluid background-1">
    <div class="row">
        <h1 style="font-size:3.8em;">Brainster.xyz Labs</h1>
        <h3 style="font-size:1.6em;">Проекти од академиите на Brainster</h3>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12" style="padding-top:5%; padding-bottom:5%;">
            <div class="row">

                @foreach($cards as $card)
            <a href="{{URL::to('/admin')}}" class="cardsLink">
                <div class="col-md-3 col-sm-8 col-xs-12 cardStyle text-center">
                    <img src="{{$card->image}}" alt="img" class="img-responsive imgtablet" style="width:180px; height:120px;margin-left:25%;">
                    <h3 style="color:#6c757d;">{{$card->title}}</h3>
                    <span style="color:#847592;">{{$card->subtitle}}</span>
                    <p style="margin-top:6%;">{{$card->description}}</p>
                </div>
            </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Вработи наши студенти</h4>
        <button type="button" class="close" id="myModalLabel" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="position:relative;top: -21px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="info">
          <p style="color:#6c757d;">Внесете Ваши информации за да стапиме во контакт:</p>
        </div>
    <form action="{{URL::to('/companies')}}" method="post">
        @csrf

        <div class="form-group">
            <span style="background-color:#e3342f; color:white; display:block;">
                @if($errors->has('email'))
                    {{$errors->first('email')}}
                @endif
            </span>
            <label data-error="wrong" data-success="right" for="email">Е-мејл</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
            <span style="background-color:#e3342f; color:white; display:block;">
                    @if($errors->has('number'))
                        {{$errors->first('number')}}
                    @endif
            </span>
            <label data-error="wrong" data-success="right" for="number">Телефон</label>
              <input type="text" id="number" name="number"class="form-control">
            </div>
            <div class="form-group">
            <span style="background-color:#e3342f; color:white; display:block;">
                    @if($errors->has('company'))
                        {{$errors->first('company')}}
                    @endif
            </span>
                <label data-error="wrong" data-success="right" for="company">Компанија</label>
                  <input type="text" id="company" name="company" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
              <div class="form-group">
                  <button class="btn btn-block" style="background-color:#fcd232; color:black;">Испрати</button>
                </div>
          </div>
        </form>
    </div>
  </div>
</div>

@endsection
