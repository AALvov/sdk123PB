<div>
    <div class="map_links">
        <div class="map_block">
            @foreach($rows as $row)
            <a href="#openModal{{$row->id}}" class="map_dot good" id="{{$row->css}}" onmouseover="changeItem()" onmouseout="rechangeItem()"></a>

            @endforeach
        </div>

{{--        <script>--}}
{{--            function changeItem() {--}}
{{--                document.getElementById('map_info').style.display = 'block';--}}
{{--            }--}}
{{--            function rechangeItem() {--}}
{{--                document.getElementById('map_info').style.display = 'none';--}}
{{--            }--}}
{{--        </script>--}}
{{--        <div class="map_bottom_blocks" id="map_info">--}}
{{--            <div class="map_info">--}}
{{--                <div class="row_block">--}}
{{--                    <table class="map_hover">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>Регион</td>--}}
{{--                            <td>Астраханская область</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Город</td>--}}
{{--                            <td>Астрахань</td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>