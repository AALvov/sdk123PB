@extends('web.layouts.app')
@section('title')
    Справочник коэффициекнтов для расчетово
@endsection

@section('content')


@include('web.include.sidebar_doc')


    <div class="top_table">
  @include('web.include.toptable')
    </div>

<div class="inside_content">
    @livewire('calc-koef')
</div>
@include('web.include.script-lib.updateOpoParams')

@endsection
