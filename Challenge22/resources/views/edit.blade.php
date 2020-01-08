@extends('layout.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row" style="border-bottom: 1px solid grey;">
                <ul style="list-style-type:none; display:flex; padding-top:1%;">
                    <li style="padding:10px 10px;"><a style="text-decoration:none;"href="{{URL::to('/cards/add')}}">Додај</a></li>
                <li class="active"><a style="text-decoration:none; color:black;"href="{{URL::to('/cards/edit')}}/{{$card->id}}">Измени</a></li>
                </ul>
            </div>
            <h3 style="font-weight:bold;">Измени постоечки производи:</h3>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-3 col-sm-8 col-xs-10 col-xs-offset-1 cardStyle1 text-center">
                <form action="{{URL::to('/cards/edit')}}/{{$card->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="image">URL</label>
                        <input type="text" name="image" class="form-control" id="image" value="{{$card->image}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Слика</label>
                        <input type="text" class="form-control" name="image" id="image" value="{{$card->image}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Име</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$card->title}}">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Поднаслов</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{$card->subtitle}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Опис</label>
                        <textarea name="description" class="form-control" id="description" placeholder="{{$card->description}}">{{$card->description}}</textarea>
                    </div>
                    <div class="edit">
                        <button type="submit">Зачувај</button>
                    <button><a href="{{route('cards') }}">Откажи</a></button>
                    </div>
                </a>
                </form>
            </div>
                <div class="row">
                    @foreach($cards as $card)
                <a href="{{URL::to('/cards')}}" class="cardsLink">
                    <div class="col-md-12 col-sm-8 col-xs-8 col-xs-offset-2 cardStyle text-center">
                        <img src="{{$card->image}}" alt="img" class="img-responsive" style="width:180px; height:120px;margin-left:25%;">
                        <h3 style="color:#6c757d;">{{$card->title}}</h3>
                        <span style="color:#847592;">{{$card->subtitle}}</span>
                        <p style="margin-top:6%;">{{$card->description}}</p>
                        <div class="edit">
                            <button><a href="{{$card->id}}"><i class="glyphicon glyphicon-pencil"></i></a></button>
                            <button><a href="#" data-toggle="modal" data-target="#myModalDelete" target="_blank"><i class="glyphicon glyphicon-remove"></i></button>
                        </div>
                    </div>
                </a>
                    @endforeach
                </div>
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
            <label data-error="wrong" data-success="right" for="email">Е-мејл</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label data-error="wrong" data-success="right" for="number">Телефон</label>
              <input type="text" id="number" name="number"class="form-control">
            </div>
            <div class="form-group">
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
<div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Избриши</h4>
        <button type="button" class="close" id="myModalLabel" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="position:relative;top: -21px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="info">
          <p style="color:#6c757d;">Дали сте сигурни дека сакате да го избришете производот:</p>
        </div>
          <div class="modal-footer" style="display: flex;justify-content:flex-end;">
            <div>
                <button class="btn" style="color:black;"><a href="{{URL::to('/cards')}}">Откажи</a></button>
            </div>
              <div>
                  <button class="btn" style="background-color:#fcd232; color:black; margin-right:13%"><a href="{{('cards/delete')}}/{{$card->id}}">Избриши</a></button>
              </div>
          </div>
        </div>
     </div>
    </div>
</div>
@endsection

