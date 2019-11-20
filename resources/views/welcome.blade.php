@extends('layout.main')
@section('title',' | Home')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <ul class="nav nav-pills">
                <li class="active"><a href="">Recent</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        Trend<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="#">Daily</a></li>
                        <li role="presentation"><a href="#">Weekly</a></li>
                        <li role="presentation"><a href="#">Monthly</a></li>
                    </ul>
                </li>
            </ul>
            <hr>
        </div>
        {{--  --}}
        <div class="row">
            <div class="question-lg">
                <p class="title-lg"> <a href="" class="text text-primary">xxx is not defined...</a> </p>
                <div class="question-lg-info">
                    <img src="{{url('img/avatar.jpg')}}"
                        style="width: 30px; height: 30px;border-radius: 50%;display: inline;margin: 0px; margin-right: 5px">
                    <small class="text-muted">Moira | asked 33 min ago |3 answers |20 views</small>
                </div>
                <p class="question-tags-lg">
                    <a class="label label-default">tag1</a>
                    <a class="label label-default">tag2</a>
                    <a class="label label-default">tag3</a>
                </p>
            </div>

            <div class="question-lg">
                <p class="title-lg"> <a href="" class="text text-primary">Laravel is exciting...</a> </p>
                <div class="question-lg-info">
                    <img src="{{url('img/avatar.jpg')}}"
                        style="width: 30px; height: 30px;border-radius: 50%;display: inline;margin: 0px; margin-right: 5px">
                    <small class="text-muted">Tracer | asked 33 min ago |3 answers |20 views</small>
                </div>
                <p class="question-tags-lg">
                    <a class="label label-default">tag1</a>
                    <a class="label label-default">tag2</a>
                    <a class="label label-default">tag3</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
        <div class="row text-center">
            <h4><span class="label label-primary">Most Recent Comments</span></h4>
            <hr>
        </div>
        <div class="comment-sidebar">
            <div class="question-lg-info">
                <img src="{{url('img/avatar.jpg')}}"
                    style="width: 30px; height: 30px;border-radius: 50%;display: inline;margin: 0px; margin-right: 5px">
                <small class="text-muted">Mohamed Hussein | 33 min ago</small>
            </div>
            <p class="comment-sidebar-content"> <a href="" class="text text-primary">what is the main difference between
                    ...</a> </p>
        </div>
    </div>
    @endsection