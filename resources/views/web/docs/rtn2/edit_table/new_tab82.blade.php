@extends('web.layouts.app')
@section('title')
    Для годового отчета
@endsection
@section('content')
    @push('app-css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endpush
    @include('web.include.sidebar_doc')


    <div class="top_table">
        @include('web.include.toptable')
    </div>


    <div class="inside_content">
            <div class="inside_tab_padding">
                <div class="row_block">
                    <div style="background: #FFFFFF; height:37rem; padding: 35px; border-radius: 6px"
                         class="container1">
                    <form method="POST" action="{{ '/docs/tab82/save' }}">
                        @csrf
                        <div class="card-header"><h2 class="text-muted" style="text-align: center">Создание новой записи</h2></div>

                        <div class="card-header">
                        <div class="form-inline">
                                <div class="col-4">
                            <label for="num_opo" style="padding-left: 35px">Регистрационный номер ОПО</label>
                                </div>
                            <div class="col-4">
                                <input id="num_opo" type="text" style="width: 450px; margin-top: 7pxpx" class="form-control @error('num_opo') is-invalid @enderror" name="num_opo" value="{{ old('num_opo') }}" required autocomplete="num_opo" autofocus>

                                @error('num_opo')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="date_accept" style="padding-left: 35px">Дата утверждения ПМЛА руководителем организации</label>
                                </div>
                            <div class="col-4">
                                <input id="date_accept" type="date" style="width: 450px; margin-top: 7pxpx" class="form-control @error('date_accept') is-invalid @enderror" name="date_accept" value="{{ old('date_accept') }}" required autocomplete="date_accept" autofocus>

                                @error('date_accept')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-inline">
                                <div class="col-4">
                            <label for="time" style="padding-left: 35px">Срок действия ПМЛА</label>
                                </div>
                            <div class="col-4">
                                <input id="time" type="date" style="width: 450px; margin-top: 7pxpx" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>

                                @error('time')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="name_service" style="padding-left: 35px">Наименование профессиональной аварийно-спасательной службы или аварийно-спасательного формирования</label>
                                </div>
                            <div class="col-4">
                                <input id="name_service" type="text" style="width: 450px; margin-top: 7pxpx" class="form-control @error('name_service') is-invalid @enderror" name="name_service" value="{{ old('name_service') }}" required autocomplete="name_service" autofocus>

                                @error('name_service')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="time_evidence" style="padding-left: 35px">Срок действия свидетельства о праве ведения соответствующих работ на ОПО</label>
                                </div>
                            <div class="col-4">
                                <input id="time_evidence" type="date" style="width: 450px; margin-top: 7pxpx" class="form-control @error('time_evidence') is-invalid @enderror" name="time_evidence" value="{{ old('time_evidence') }}" required autocomplete="time_evidence" autofocus>

                                @error('time_evidence')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="info_other_service" style="padding-left: 35px">Сведения о наличии нештатных аварийно-спасательных формирований из числа работников</label>
                                </div>
                            <div class="col-4">
                                <input id="info_other_service" type="text" style="width: 450px; margin-top: 7pxpx" class="form-control @error('info_other_service') is-invalid @enderror" name="info_other_service" value="{{ old('info_other_service') }}" required autocomplete="info_other_service" autofocus>

                                @error('info_other_service')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="pmla_copy" style="padding-left: 35px">Копия действующего ПМЛА (в случае ее ненаправления ранее)</label>
                                </div>
                            <div class="col-4">
                                <input id="pmla_copy" type="text" style="width: 450px; margin-top: 7pxpx" class="form-control @error('pmla_copy') is-invalid @enderror" name="pmla_copy" value="{{ old('pmla_copy') }}" required autocomplete="pmla_copy" autofocus>

                                @error('pmla_copy')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>




                            <div style="padding-bottom: 40px; margin-top: 20px"
                                 class="text-center">
                                <button type="submit" class="btn btn-outline-success">Сохранить
                                </button>
                                <a href="/docs/rtn2">
                                    <button type="button" class="btn btn-outline-dark">Отменить
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </div>


@endsection
