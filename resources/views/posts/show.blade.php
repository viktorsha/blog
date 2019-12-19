@extends('layouts.default')

@section('title', '| {{$post->title}}')

@section('content')         
<div class="article-post">
    <div class="intro">
        <div class="cover">
            <img src="{{$post->image}}" alt="Post cover"> <!-- {{url('assets/img/post_img.jpg')}}-->
        </div>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>{{$post->category}}</strong>
                </a>
            </div>
        </div>
        <div class="title">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
    <div class="body">
        <h3>
        {{$post->body}}
        </h3>
        <h2>
            Название подтемы 1
        </h2>
        <p>
            Это может звучать очевидно, но прежде, чем приступить к изучению нового иностранного языка, очень важно определить, для чего именно вам это нужно. Ответ «для саморазвития» не подходит, ведь так вы сможете в любой момент передумать, решив, что развиваться можно и в других сферах. Помните о том, что однажды изучение языка может вам наскучить. Сила воли – исчерпаемый ресурс, на который не получится опираться в долгосрочной перспективе. Поэтому стоит найти свою причину для изучения языка. Это может быть подача документов в иностранный вуз, повышение на работе, переезд в другую страну или желание читать книги или смотреть фильмы в оригинале.
        </p>
        <h2>
            Название подтемы 2
        </h2>
        <p>
            Это может звучать очевидно, но прежде, чем приступить к изучению нового иностранного языка, очень важно определить, для чего именно вам это нужно. Ответ «для саморазвития» не подходит, ведь так вы сможете в любой момент передумать, решив, что развиваться можно и в других сферах. Помните о том, что однажды изучение языка может вам наскучить. Сила воли – исчерпаемый ресурс, на который не получится опираться в долгосрочной перспективе. Поэтому стоит найти свою причину для изучения языка. Это может быть подача документов в иностранный вуз, повышение на работе, переезд в другую страну или желание читать книги или смотреть фильмы в оригинале.
        </p>
    </div>
    <div class="time-note">
    <p class="note">Опубликовано: {{ date('M j, Y',strtotime($post->created_at))}}</p>
    <p class="note">Последнее обновление: {{ date('M j, Y',strtotime($post->updated_at))}}</p>
    <div class="btn-field">
        {!! Html::linkRoute('posts.edit','Редактировать',array($post->id), array('class'=>'btn edit-btn')) !!}
        {!! Html::linkRoute('posts.edit','Удалить',array($post->id), array('class'=>'btn delete-btn')) !!}
    </div>
    </div>
</div>

@include('partials._see-also')
@endsection