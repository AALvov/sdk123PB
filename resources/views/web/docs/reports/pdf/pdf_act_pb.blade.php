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
<h2 class="text-muted" style="text-align: center" >Справка о выполнении актов, предписаний, выданных органами надзора и контроля в области ПБ</h2>
        <table style="border-collapse: collapse;" class="table table-hover">
                <thead>
                <tr>
                    <th rowspan="2" class="centered">№ П/П</th>
                    <th rowspan="2" class="centered">Орган надзора, контроля (сфера надзора, контроля)</th>
                    <th rowspan="2" class="centered">№ акта, предписания, дата</th>
                    <th colspan="4" class="centered">Количество пунктов нарушений</th>
                    <th rowspan="2" class="centered">Примечание</th>
                </tr>
                <tr>
                    <th class="centered">Всего</th>
                    <th class="centered">Устранено</th>
                    <th class="centered">Срок исполнения не истек</th>
                    <th class="centered">С истекшим сроком исполнения</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($rows as $item)
                    <tr>
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