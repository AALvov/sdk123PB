<style>
    body { font-family: DejaVu Sans, sans-serif; }
    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        border: 1px solid black; /* Параметры рамки */
    }
    .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
    }
</style>
<h2 class="text-muted" style="text-align: center" >{{$data['title']}}</h2>
        <table style="border-collapse: collapse;" class="table table-hover">
            <thead>
            <tr>
                <th rowspan="2" class="centered">Наименование элемента ОПО</th>
                <th colspan="7" class="centered">Показатели безопасности функционирования ОПО</th>
                <th rowspan="2" class="centered">Обобщенный показатель безопасности функционирования ОПО</th>
                <th rowspan="2" class="centered">Показатель безаварийности ОПО</th>
                <th rowspan="2" class="centered">Показатель готовности организации и персонала ОПО к локализации аварий и инцидентов</th>
                <th rowspan="2" class="centered">Обобщенный показатель результативности АПК ОПО</th>
            </tr>
            <tr>
                <th class="centered">Показатель наличия "критичных" несоответствий</th>
                <th class="centered">Показатель устраняемости нарушений</th>
                <th class="centered">Показатель результативности контрольных процедур ПК</th>
                <th class="centered">Показатель наличия повторно выявляемых несоответствий</th>
                <th class="centered">Показатель эффективности корректирующих и предупреждающих действий </th>
                <th class="centered">Показатель результативности ПК, в сравнении с внешним производственным контролем</th>
                <th class="centered">Показатель охвата элементов ОПО контрольными процедурами</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data['rows'] as $item)
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            @endforeach


            </tbody>

        </table>
