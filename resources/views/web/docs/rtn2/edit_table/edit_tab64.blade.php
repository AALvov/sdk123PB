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
        <div class="inside_tab_padding" style="height: 600px">
            <div class="row_block">
                <style>
                     label {
                        display: block;
                        margin-bottom: 0.5rem;}
                </style>
                <div style="background: #FFFFFF; height:140rem; padding: 35px; border-radius: 6px"
                     class="container">


                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form method="POST" action="{{ route('update_tab64') }}">
                                @csrf

                        <div class="card-header"><h2 class="text-muted" style="text-align: center">Редактирование записи</h2></div>

                                <div class="card-header">
                                    <div class="form-inline">
                                        <div class="col-4">
                            <label for="time" style="padding-left: 35px" class="">Регистрационный номер ОПО</label>
                                        </div>
                            <div class="col-4">
                                <input id="num_opo" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('num_opo') is-invalid @enderror" name="num_opo" value="{{ $data_table->num_opo }}" required autocomplete="name" autofocus>
                                <input type="hidden" name="id" value="{{ $data_table->id }}" >
                            </div>
                                    </div>

                                            <div class="form-inline">
                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Регистрационный (учетный) номер оборудования (ТУ)</label>
                                                </div>
                                <div class="col-4">
                                    <input id="num_tu" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('num_tu') is-invalid @enderror" name="num_tu" value="{{ $data_table->num_tu }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                            </div>

                                                    <div class="form-inline">
                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Наименование ТУ</label>
                                                        </div>
                                <div class="col-4">
                                    <input id="name_tu" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('name_tu') is-invalid @enderror" name="name_tu" value="{{ $data_table->name_tu }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                    </div>

                                                            <div class="form-inline">
                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Серийный номер ТУ (при наличии)</label>
                                                                </div>
                                <div class="col-4">
                                    <input id="serial_num" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="serial_num" value="{{ $data_table->serial_num }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                            </div>

                                                                    <div class="form-inline">
                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Заводской номер ТУ (при наличии)</label>
                                                                        </div>
                                <div class="col-4">
                                    <input id="industrial_num" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="industrial_num" value="{{ $data_table->industrial_num }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                    </div>

                                                                            <div class="form-inline">
                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Инвентарный номер ТУ (при наличии)</label>
                                                                                </div>
                                <div class="col-4">
                                    <input id="invent_num" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="invent_num" value="{{ $data_table->invent_num }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                            </div>

                                                                                    <div class="form-inline">
                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Тип ТУ (из справочника)</label>
                                                                                        </div>
                                <div class="col-4">
                                    <input id="type_auto" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="type_auto" value="{{ $data_table->type_auto }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                    </div>

                                                                                            <div class="form-inline">
                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Тип ТУ (ручной ввод)</label>
                                                                                                </div>
                                <div class="col-4">
                                    <input id="type" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="type" value="{{ $data_table->type }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                            </div>

                                                                                                    <div class="form-inline">
                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Вид ТУ (из справочника)</label>
                                                                                                        </div>
                                <div class="col-4">
                                    <input id="vid_auto" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="vid_auto" value="{{ $data_table->vid_auto }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                    </div>

                                                                                                            <div class="form-inline">
                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Вид ТУ (ручной ввод)</label>
                                                                                                                </div>
                                <div class="col-4">
                                    <input id="vid" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="vid" value="{{ $data_table->vid }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                            </div>

                                                                                                                    <div class="form-inline">
                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Марка ТУ (при наличии)</label>
                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="mark" style="width: 450px; margin-top: 7px" type="text" class="form-control " name="mark" value="{{ $data_table->mark }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                    </div>

                                                                                                                            <div class="form-inline">
                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Страна-производитель</label>
                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="country" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ $data_table->country }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                            </div>

                                                                                                                                    <div class="form-inline">
                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Нормативный срок службы/эксплуатации (лет)</label>
                                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="time_exp" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('time_exp') is-invalid @enderror" name="time_exp" value="{{ $data_table->time_exp }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                    </div>

                                                                                                                                            <div class="form-inline">
                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Год ввода в эксплуатацию</label>
                                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="date" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('year_exp') is-invalid @enderror" name="year_exp" value="{{ $data_table->year_exp }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                            </div>

                                                                                                                                                    <div class="form-inline">
                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Процент износа</label>
                                                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="old_percent" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('old_percent') is-invalid @enderror" name="old_percent" value="{{ $data_table->old_percent }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                    </div>

                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Сведения о модернизации</label>
                                                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="repair_info" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="repair_info" value="{{ $data_table->repair_info }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                </div>

                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Номер документа, подтверждающего соответствие ТУ требованиям технического регламента в форме декларации о соответствии или сертификата соответствия</label>
                                                                                                                                                                        </div>
                                                                                                                                                                            <div class="col-4">
                                    <input id="num_doc" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="num_doc" value="{{ $data_table->num_doc }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                    </div>

                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Наличие технической документации ТУ</label>
                                                                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="doc_check" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('doc_check') is-invalid @enderror" name="doc_check" value="{{ $data_table->doc_check }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                            </div>

                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Дата проведения экспертизы промышленной безопасности ТУ</label>
                                                                                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="date_check" style="width: 450px; margin-top: 7px" type="date" class="form-control" name="date_check" value="{{ $data_table->date_check }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                    </div>

                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Вывод о соответствии объекта требованиям промышленной безопасности</label>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                    <div class="col-4">
                                    <input id="result_check" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('result_check') is-invalid @enderror" name="result_check" value="{{ $data_table->result_check }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                            </div>

                                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Если ранее указан код "3", то указать сведения о принятых мерах по недопущению эксплуатации неисправного ТУ (оборудования) при наличии отрицательных результатов (выводов о несоответствии) экспертизы</label>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                            <div class="col-4">
                                    <input id="info_event_check" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="info_event_check" value="{{ $data_table->info_event_check }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                    </div>

                                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Разрешенный срок эксплуатации или количество разрешенных циклов нагрузки</label>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                    <div class="col-4">
                                    <input id="accept_time" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('accept_time') is-invalid @enderror" name="accept_time" value="{{ $data_table->accept_time }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                </div>


                                                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Количество разрешенных циклов нагрузки</label>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                            <div class="col-4">
                                    <input id="accept_kol_vo" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('accept_kol_vo') is-invalid @enderror" name="accept_kol_vo" value="{{ $data_table->accept_kol_vo }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                </div>


                                                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Фактический срок службы/фактическое количество отработанных разрешенных циклов нагрузки</label>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                    <div class="col-4">
                                    <input id="fact_time" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('fact_time') is-invalid @enderror" name="fact_time" value="{{ $data_table->fact_time }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Количество факт циклов нагрузки</label>
                                                                                                                                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="fact_kol_vo" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('fact_kol_vo') is-invalid @enderror" name="fact_kol_vo" value="{{ $data_table->fact_kol_vo }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Наличие средств контроля (приборы безопасности, средства измерений)</label>
                                                                                                                                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="check_control" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('check_control') is-invalid @enderror" name="check_control" value="{{ $data_table->check_control }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Сведения о ТУ, находящихся в опытной эксплуатации</label>
                                                                                                                                                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="info_demo_tu" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="info_demo_tu" value="{{ $data_table->info_demo_tu }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Период опытной эксплуатации</label>
                                                                                                                                                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="time_demo" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="time_demo" value="{{ $data_table->time_demo }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Сведения о соответствии установленных на ТУ (оборудовании) предохранительных устройств проекту и технической документации изготовителя, в части их типов, количества и параметров настройки, фактически примененных устройств</label>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                            <div class="col-4">
                                    <input id="info_devices" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="info_devices" value="{{ $data_table->info_devices }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Сведения о принятых мерах по недопущению эксплуатации неисправного оборудования/технических устройств при наличии выводов о несоответствии по результатам технического освидетельствования</label>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                    <div class="col-4">
                                    <input id="info_event" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="info_event" value="{{ $data_table->info_event }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                    <div class="form-inline">
                                                                                                                                                                                                                                                                                        <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">ТУ заменено</label>
                                                                                                                                                                                                                                                                                        </div>
                                <div class="col-4">
                                    <input id="tu_repair_check" style="width: 450px; margin-top: 7px" type="text" class="form-control @error('tu_repair_check') is-invalid @enderror" name="tu_repair_check" value="{{ $data_table->tu_repair_check }}" required autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
                                </div>
                                                                                                                                                                                                                                                                                    </div>


                                                                                                                                                                                                                                                                                            <div class="form-inline">
                                                                                                                                                                                                                                                                                                <div class="col-4">
                                <label for="time" style="padding-left: 35px" class="">Номер ТУ на которое заменено</label>
                                                                                                                                                                                                                                                                                                </div>
                                <div class="col-4">
                                    <input id="num_new_tu" style="width: 450px; margin-top: 7px" type="text" class="form-control" name="num_new_tu" value="{{ $data_table->num_new_tu }}" autocomplete="name" autofocus>
                                    <input type="hidden" name="id" value="{{ $data_table->id }}" >
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
                            </form>
                </div>
            </div>
        </div>
    </div>



@endsection
