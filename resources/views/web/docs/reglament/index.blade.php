@extends('web.layouts.app')
@section('title')
    Справка
@endsection

@section('content')


@include('web.include.sidebar_doc')


    <div class="top_table">
  @include('web.include.toptable')
    </div>

<div class="inside_content">
    @livewire('docs.reglament')
</div>
{{--@include('web.include.script-lib.updateOpoParams')--}}
{{--Эта страница не работает, надо разобраться, пишет, что ошибка в БД--}}
@endsection
