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
                    <div style="background: #FFFFFF; height:133rem; padding: 35px; border-radius: 6px"
                         class="container1">
                    <form method="POST" action="{{ '/docs/tab64/save' }}">
                        @csrf
                        <div class="card-header"><h2 class="text-muted" style="text-align: center">Создание новой записи</h2></div>

                        <div class="card-header">
                        <div class="form-inline">
                                <div class="col-4">
                            <label for="num_opo" style="padding-left: 35px">Регистрационный номер ОПО</label>
                                </div>
                            <div class="col-4">
                                <input id="num_opo" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('num_opo') is-invalid @enderror" name="num_opo" value="{{ old('num_opo') }}" required autocomplete="num_opo" autofocus>

                                @error('num_opo')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="num_tu" style="padding-left: 35px">Регистрационный (учетный) номер оборудования (ТУ)</label>
                                </div>
                            <div class="col-4">
                                <input id="num_tu" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('num_tu') is-invalid @enderror" name="num_tu" value="{{ old('num_tu') }}" required autocomplete="num_tu" autofocus>

                                @error('num_tu')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="name_tu" style="padding-left: 35px">Наименование ТУ</label>
                                </div>
                            <div class="col-4">
                                <input id="name_tu" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('name_tu') is-invalid @enderror" name="name_tu" value="{{ old('name_tu') }}" required autocomplete="name_tu" autofocus>

                                @error('name_tu')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="serial_num" style="padding-left: 35px">Серийный номер ТУ (при наличии)</label>
                                </div>
                            <div class="col-4">
                                <input id="serial_num" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="serial_num" value="{{ old('serial_num') }}" autocomplete="serial_num" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="industrial_num" style="padding-left: 35px">Заводской номер ТУ (при наличии)</label>
                                </div>
                            <div class="col-4">
                                <input id="industrial_num" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="industrial_num" value="{{ old('industrial_num') }}" autocomplete="industrial_num" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="invent_num" style="padding-left: 35px">Инвентарный номер ТУ (при наличии)</label>
                                </div>
                            <div class="col-4">
                                <input id="invent_num" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="invent_num" value="{{ old('invent_num') }}" autocomplete="invent_num" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="type_auto" style="padding-left: 35px">Тип ТУ (из справочника)</label>
                                </div>
                            <div class="col-4">
                                <input id="type_auto" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="type_auto" value="{{ old('type_auto') }}" autocomplete="type_auto" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="type" style="padding-left: 35px">Тип ТУ (ручной ввод)</label>
                                </div>
                            <div class="col-4">
                                <input id="type" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="type" value="{{ old('type') }}" autocomplete="type" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="vid_auto" style="padding-left: 35px">Вид ТУ (из справочника)</label>
                                </div>
                            <div class="col-4">
                                <input id="vid_auto" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="vid_auto" value="{{ old('vid_auto') }}" autocomplete="vid_auto" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="vid" style="padding-left: 35px">Вид ТУ (ручной ввод)</label>
                                </div>
                            <div class="col-4">
                                <input id="vid" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="vid" value="{{ old('vid') }}" autocomplete="vid" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="mark" style="padding-left: 35px">Марка ТУ (при наличии)</label>
                                </div>
                            <div class="col-4">
                                <input id="mark" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="mark" value="{{ old('mark') }}" autocomplete="mark" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="country" style="padding-left: 35px">Страна-производитель</label>
                                </div>
                            <div class="col-4">
                                <input id="country" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="time_exp" style="padding-left: 35px">Нормативный срок службы/эксплуатации (лет)</label>
                                </div>
                            <div class="col-4">
                                <input id="time_exp" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('time_exp') is-invalid @enderror" name="time_exp" value="{{ old('time_exp') }}" required autocomplete="time_exp" autofocus>

                                @error('time_exp')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="year_exp" style="padding-left: 35px">Год ввода в эксплуатацию</label>
                                </div>
                            <div class="col-4">
                                <input id="year_exp" type="date" style="width: 450px; margin-top: 7px" class="form-control @error('year_exp') is-invalid @enderror" name="year_exp" value="{{ old('year_exp') }}" required autocomplete="year_exp" autofocus>

                                @error('year_exp')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="old_percent" style="padding-left: 35px">Процент износа</label>
                                </div>
                            <div class="col-4">
                                <input id="old_percent" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('old_percent') is-invalid @enderror" name="old_percent" value="{{ old('old_percent') }}" required autocomplete="old_percent" autofocus>

                                @error('old_percent')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="repair_info" style="padding-left: 35px">Сведения о модернизации</label>
                                </div>
                            <div class="col-4">
                                <input id="repair_info" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="repair_info" value="{{ old('repair_info') }}" autocomplete="repair_info" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="num_doc" style="padding-left: 35px">Номер документа, подтверждающего соответствие ТУ требованиям технического регламента</label>
                                </div>
                            <div class="col-4">
                                <input id="num_doc" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="num_doc" value="{{ old('num_doc') }}" autocomplete="num_doc" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="doc_check" style="padding-left: 35px">Наличие технической документации ТУ</label>
                                </div>
                            <div class="col-4">
                                <input id="doc_check" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('doc_check') is-invalid @enderror" name="doc_check" value="{{ old('doc_check') }}" required autocomplete="doc_check" autofocus>

                                @error('doc_check')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="date_check" style="padding-left: 35px">Дата проведения экспертизы промышленной безопасности ТУ</label>
                                </div>
                            <div class="col-4">
                                <input id="date_check" type="date" style="width: 450px; margin-top: 7px" class="form-control" name="date_check" value="{{ old('date_check') }}" autocomplete="date_check" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="result_check" style="padding-left: 35px">Вывод о соответствии объекта требованиям промышленной безопасности</label>
                                </div>
                            <div class="col-4">
                                <input id="result_check" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('result_check') is-invalid @enderror" name="result_check" value="{{ old('result_check') }}" required autocomplete="result_check" autofocus>

                                @error('result_check')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="info_event_check" style="padding-left: 35px">Если ранее указан код "3", то указать сведения о принятых мерах по недопущению эксплуатации неисправного ТУ</label>
                                </div>
                            <div class="col-4">
                                <input id="info_event_check" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="info_event_check" value="{{ old('info_event_check') }}" autocomplete="info_event_check" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="accept_time" style="padding-left: 35px">Разрешенный срок эксплуатации или количество разрешенных циклов нагрузки</label>
                                </div>
                            <div class="col-4">
                                <input id="accept_time" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('accept_time') is-invalid @enderror" name="accept_time" value="{{ old('accept_time') }}" required autocomplete="accept_time" autofocus>

                                @error('accept_time')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="accept_kol_vo" style="padding-left: 35px">Количество разрешенных циклов нагрузки</label>
                                </div>
                            <div class="col-4">
                                <input id="accept_kol_vo" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('accept_kol_vo') is-invalid @enderror" name="accept_kol_vo" value="{{ old('accept_kol_vo') }}" required autocomplete="accept_kol_vo" autofocus>

                                @error('accept_kol_vo')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="fact_time" style="padding-left: 35px">Фактический срок службы/фактическое количество отработанных разрешенных циклов нагрузки</label>
                                </div>
                            <div class="col-4">
                                <input id="fact_time" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('fact_time') is-invalid @enderror" name="fact_time" value="{{ old('fact_time') }}" required autocomplete="fact_time" autofocus>

                                @error('fact_time')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="fact_kol_vo" style="padding-left: 35px">Количество факт циклов нагрузки</label>
                                </div>
                            <div class="col-4">
                                <input id="fact_kol_vo" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('fact_kol_vo') is-invalid @enderror" name="fact_kol_vo" value="{{ old('fact_kol_vo') }}" required autocomplete="fact_kol_vo" autofocus>

                                @error('fact_kol_vo')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="check_control" style="padding-left: 35px">Наличие средств контроля</label>
                                </div>
                            <div class="col-4">
                                <input id="check_control" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('check_control') is-invalid @enderror" name="check_control" value="{{ old('check_control') }}" required autocomplete="check_control" autofocus>

                                @error('check_control')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="info_demo_tu" style="padding-left: 35px">Сведения о ТУ, находящихся в опытной эксплуатации</label>
                                </div>
                            <div class="col-4">
                                <input id="info_demo_tu" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="info_demo_tu" value="{{ old('info_demo_tu') }}" autocomplete="info_demo_tu" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="time_demo" style="padding-left: 35px">Период опытной эксплуатации</label>
                                </div>
                            <div class="col-4">
                                <input id="time_demo" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="time_demo" value="{{ old('time_demo') }}" autocomplete="time_demo" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="info_devices" style="padding-left: 35px">Сведения о соответствии установленных на ТУ (оборудовании) предохранительных устройств проекту и технической документации</label>
                                </div>
                            <div class="col-4">
                                <input id="info_devices" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="info_devices" value="{{ old('info_devices') }}" autocomplete="info_devices" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="info_event" style="padding-left: 35px">Сведения о принятых мерах по недопущению эксплуатации неисправного оборудования/технических устройств при наличии выводов о несоответствии по результатам технического освидетельствования</label>
                                </div>
                            <div class="col-4">
                                <input id="info_event" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="info_event" value="{{ old('info_event') }}" autocomplete="info_event" autofocus>

                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="tu_repair_check" style="padding-left: 35px">ТУ заменено</label>
                                </div>
                            <div class="col-4">
                                <input id="tu_repair_check" type="text" style="width: 450px; margin-top: 7px" class="form-control @error('tu_repair_check') is-invalid @enderror" name="tu_repair_check" value="{{ old('tu_repair_check') }}" required autocomplete="tu_repair_check" autofocus>

                                @error('tu_repair_check')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                                <div class="col-4">
                            <label for="num_new_tu" style="padding-left: 35px">Номер ТУ на которое заменено</label>
                                </div>
                            <div class="col-4">
                                <input id="num_new_tu" type="text" style="width: 450px; margin-top: 7px" class="form-control" name="num_new_tu" value="{{ old('num_new_tu') }}" autocomplete="num_new_tu" autofocus>

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
