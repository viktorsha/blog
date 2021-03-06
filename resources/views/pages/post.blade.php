@extends('layouts.default')
@section('title', '| Post name')

@section('content')         
<div class="article-post">
    <div class="intro">
        <div class="cover">
            <img src="{{url('assets/img/post_img.jpg')}}" alt="Post cover"> <!-- {{url('assets/img/post_img.jpg')}}-->
        </div>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>Категория</strong>
                </a>
            </div>
        </div>
        <div class="title">
            <h1>Оглавление</h1>
        </div>
    </div>
    <div class="body">
        <h3>
        Изучение иностранных языков дарит нам большое количество новых возможностей, расширяет наш кругозор и улучшает когнитивные способности, делая мозг более пластичным. Почему же многие бросают это занятие на полпути? Кому-то не хватает времени, кому-то силы воли, а кому-то мотивации. В новой статье на How to Green поделимся советами, которые помогут вам не только самостоятельно изучать иностранный язык, но и не забросить это занятие спустя пару недель.
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
</div>
@include('partials._see-also')
@endsection