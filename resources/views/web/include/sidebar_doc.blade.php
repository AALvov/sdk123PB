{{--@push('calendar_scripts')--}}
{{--    <script src="{{asset('/calendarEvents/datetimepicker/moment-with-locales.min.js')}}"></script>--}}
{{--    <script src="{{asset('/calendarEvents/datetimepicker/bootstrap.min.js')}}"></script>--}}
{{--    <script src="{{asset('/calendarEvents/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>--}}
{{--    <link rel="stylesheet" href="{{asset('/calendarEvents/datetimepicker/bootstrap.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('/calendarEvents/datetimepicker/bootstrap-datetimepicker.css')}}">--}}

{{--@endpush--}}


<div class="sidebar">
    <div class="inside_sidebar">
        @include('web.include.sidebar_top')
        {{--        <div class="tech_block_search_doc">--}}
        {{--            <form><input type="text" name="search" required placeholder="Поиск по разделу"></form>--}}
        {{--        </div>--}}
        <div class="clearfix"></div>


        <div class="sidebar_bottom rounded doc_sidebar">

            <div class="blocks_list">


                <div>
                    @can('product-list')
                        <label class="accordion">
                            <input type='checkbox' name='checkbox-accordion' id="faq" onclick="SaveChecked(this)">
                            <div class="accordion__header">Справочники</div>
                            <div class="accordion__content">
                                <a href="/docs/events">Возможные опасные события</a>
                                <a href="{{route('matrix')}}">Сценарии</a>
                                <a href="/docs/koef">Коэффициенты</a>
                                <a href="/docs/predRTN">Предписания РТН</a>
                                <a href="/docs/infoOPO">Справочник ОПО</a>
                                <a href="/docs/infoObj">Справочник элементов ОПО</a>
                                <a href="/docs/infoTB">Справочник ТБ элементов ОПО</a>
                                <a href="/docs/calendar_event">Справочник возможных событий</a>
                            </div>
                        </label>

                        <label class="accordion">
                            <input type='checkbox' name='checkbox-accordion'  id="docs" onclick="SaveChecked(this)">
                            <div class="accordion__header">Документация</div>
                            <div class="accordion__content">
                                <a href={{route('reglament')}}>Справочник технологических регламентов</a>
                                <a href={{route('upload_form')}}>Перечень нормативной документации</a>
                            </div>
                        </label>
                    @endcan
                    <label class="accordion">
                        <input type='checkbox' name='checkbox-accordion' id="plan" onclick="SaveChecked(this)">
                        <div class="accordion__header">
                            <a href={{ url('/docs/rtn') }}> План мероприятий по обеспечению ПБ</a>
                        </div>
                        <div class="accordion__content">
                            <a href="#">Общие сведения</a>
                            <a href="#">Раздел 1.1</a>
                            <a href="#">Раздел 2.1</a>
                            <a href="#">Раздел 2.2</a>
                            <a href="#">Раздел 3.1</a>
                            <a href="#">Раздел 4.1</a>
                            <a href="#">Раздел 4.2</a>
                            <a href="#">Раздел 4.3</a>
                            <a href="#">Раздел 5.1</a>
                            <a href="#">Раздел 5.2</a>
                        </div>
                    </label>
                    <label class="accordion">
                        <input type='checkbox' name='checkbox-accordion' id="plan2021" onclick="SaveChecked(this)">
                        <div class="accordion__header">
                            <a href={{ url('/docs/rtn2') }}>План мероприятий по обеспечению ПБ (2021г.)</a>
                        </div>
                    </label>
                    <label class="accordion">
                        <input type='checkbox' name='checkbox-accordion' id="gloss" onclick="SaveChecked(this)" >
                        <div class="accordion__header">
                            <a href={{ url('/docs/glossary') }}>  Глоссарий применяемых сокращений</a>
                        </div>
                        {{--                        <div class="accordion__content">--}}
                        {{--                            <a href="#">Сокращения</a>--}}
                        {{--                            <a href="#">Термины и определения</a>--}}
                        {{--                            <a href="#">Показатели промышленной безопасности</a>--}}
                        {{--                            <a href="#">Классификация событий</a>--}}
                        {{--                        </div>--}}
                    </label>
                    @can('product-create')
                        <label class="accordion">
                            <input type='checkbox' name='checkbox-accordion' id="report"  onclick="SaveChecked(this)" >
                            <div class="accordion__header">
                                <a href=''>  Отчеты</a>
                            </div>
                            <div class="accordion__content">
                                <a href="{{ route('form51.index') }}">ОС о инциденте п 5.1</a>
                                <a href="{{ route('form52.index') }}">Акты тех. расследований о инциденте п 5.2</a>
                                <a href="{{ route('form5363.index') }}">Справки о выполнении мероприятий по результатам расследования и анализа коренных причин инцидентов п 5.3, 6.3</a>
                                <a href="{{ route('form61.index') }}">ОС о аварии п 6.1</a>
                                <a href="{{ route('form62.index') }}">Акты тех. расследований о аварии п 6.2</a>
                                <a href="{{ route('form5363.index') }}">Справки о выполнении мероприятий по результатам расследования и анализа коренных причин инцидентов п 5.3, 6.3</a>
                                {{--                            <a href="#">Термины и определения</a>--}}
                                {{--                            <a href="#">Показатели промышленной безопасности</a>--}}
                                <a href="{{ route('obj_status') }}">Отчет о состоянии элементов</a>
                                <a class="clieckable_report" data-route="{{ route('scena_report') }}">Отчет о зафиксированных событиях</a>
                                <a class="clieckable_report" data-route="{{ route('result_pk') }}">Сведения о результатах проверок</a>
                                <a class="clieckable_report" data-route="{{ route('violations_report') }}">Отчет о выяленных нарушениях</a>
                                <a href="{{ route('status_opo') }}">Отчет о состоянии ОПО</a>
                                <a class="clieckable_report" data-route="{{ route('repiat_report') }}">Отчет "Анализ повторяемости несоответствий"</a>
                                <a class="clieckable_report" data-route="{{ route('event_pk') }}">Отчет о проведенных контрольных мероприятиях</a>
                                <a href="{{ route('effect_pk') }}">Отчет об эффективности производственного контроля</a>
                                <a class="clieckable_report" data-route="{{ route('info_act') }}">Справка о выполнении актов выданных службой, отделом промышленной безопасности, работником, ответственным за промышленную безопасность</a>
                                <a class="clieckable_report" data-route="{{ route('act_pb') }}">Справка о выполнении актов выданных органами надзора и контроля в области ПБ</a>
                                <a class="clieckable_report" data-route="{{ route('quality_criteria') }}">Отчет о выявленных нарушениях на опасных производственных объектах по Критериям качественной оценки</a>
                            </div>
                            {{--                        <div class="accordion__content">--}}
                            {{--                            <a href="{{ route('form51.index') }}">ОС о инциденте п 5.1</a>--}}
                            {{--                            <a href="{{ route('form52.index') }}">Акты тех. расследований о инциденте п 5.2</a>--}}
                            {{--                            <a href="{{ route('form5363.index') }}">Справки о выполнении мероприятий по результатам расследования и анализа коренных причин инцидентов п 5.3, 6.3</a>--}}
                            {{--                            <a href="{{ route('form61.index') }}">ОС о аварии п 6.1</a>--}}
                            {{--                            <a href="{{ route('form62.index') }}">Акты тех. расследований о аварии п 6.2</a>--}}
                            {{--                            <a href="{{ route('form5363.index') }}">Справки о выполнении мероприятий по результатам расследования и анализа коренных причин инцидентов п 5.3, 6.3</a>--}}
                            {{--                            <a href="#">Термины и определения</a>--}}
                            {{--                            <a href="#">Показатели промышленной безопасности</a>--}}
                            {{--                            <a href="{{ route('obj_status') }}">Отчет о состоянии элементов</a>--}}
                            {{--                            <a href="{{ route('scena_report') }}">Отчет о зафиксированных событиях</a>--}}
                            {{--                            <a href="{{ route('result_pk') }}">Сведения о результатах проверок</a>--}}
                            {{--                            <a href="{{ route('violations_report') }}">Отчет о выяленных нарушениях</a>--}}
                            {{--                            <a href="{{ route('status_opo') }}">Отчет о состоянии ОПО</a>--}}
                            {{--                            <a href="{{ route('repiat_report') }}">Отчет "Анализ повторяемости несоответствий"</a>--}}
                            {{--                            <a href="{{ route('event_pk') }}">Отчет о проведенных контрольных мероприятиях</a>--}}
                            {{--                            <a href="{{ route('effect_pk') }}">Отчет об эффективности производственного контроля</a>--}}
                            {{--                            <a href="{{ route('info_act') }}">Справка о выполнении актов выданных службой, отделом промышленной безопасности, работником, ответственным за промышленную безопасность</a>--}}
                            {{--                            <a href="{{ route('act_pb') }}">Справка о выполнении актов выданных органами надзора и контроля в области ПБ</a>--}}
                            {{--                            <a href="{{ route('quality_criteria') }}">Отчет о выявленных нарушениях на опасных производственных объектах по Критериям качественной оценки</a>--}}
                            {{--                        </div>--}}
                        </label>
                    @endcan
                </div>


            </div>



        </div>
    </div>
</div>

<div id="choice_report_date_modal" class="dlg-modal dlg-modal-slide" style="height: 27%; width: 20%">
    <div class="form_header">
        <span class="closer_btn" data-close="" ></span>
        <h3>Укажите отчетный период</h3>
    </div>
        <form method="POST" id="choice_report_date" action="">
        @csrf
        <div class="form-group date">
            <label for="start_date">Дата начала периода</label>
            <input class="form-control" style="margin-top: 15px; margin-bottom: 15px; width: 40%; text-align: center; margin-left: 26%" id="start_date" type="date" name="start_date" value="{{ old('start_date') }} required="required">
        </div>
        <div class="form-group date">
            <label for="end_date">Дата окончания периода</label>
            <input class="form-control" style="margin-top: 15px; margin-bottom: 15px; width: 40%; text-align: center; margin-left: 26%" id="finish_date" type="date" name="finish_date" value="{{ old('finish_date') }} required="required">
        </div>

        <div class="form-group">
            <button type="submit" style="margin-top: 10px" id="upload_report_btn">Добавить</button>
        </div>
    </form>
</div>
<div class="overlay" data-close=""></div>


<script>
    let checkboxes = document.getElementsByName('checkbox-accordion');
    //console.log(checkboxes)
    function pageStart() {
        for (let ch of checkboxes) {
            if (window.localStorage[ch.id]){
                ch.checked=true;
            }
        }
    }

    function SaveChecked(element){
        //console.log(window.localStorage[element.id])
        if (window.localStorage[element.id]!=null){
            element.checked=false;
            window.localStorage.removeItem(element.id);

        }
        else {
            for (let ch of checkboxes){
                if (window.localStorage[ch.id]){
                    ch.checked=false;
                    window.localStorage.removeItem(ch.id);
                }
            }
            window.localStorage[element.id]=true;
        }

    }

    pageStart();
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        $(document).ready(function (){
            $.getScript("{{asset('/js/modals_function.js')}}", function() {
                console.log("Script loaded but not necessarily executed.");
            });
        })

        var report=document.getElementsByClassName('clieckable_report')
        // console.log(report)

        for (var r of report){
            r.addEventListener('click', function(){
                var form=document.getElementById('choice_report_date')
                form.action=this.dataset.route
                var modal=document.getElementById('choice_report_date_modal')
                modalShow(modal)
            })
        }
    })
</script>


<style>
    #choice_report_date_modal{
        width: 500px;
        height: 300px;
    }
</style>
