{{--ТУТ НАПИСАН КОНТЕНТ, КОТОРЫЙ ВСПЫЛВАЕТ--}}
<span id="razd_22">22</span>
<script>
    document.addEventListener('DOMContentLoaded', function (){
        var tooltip_content=document.getElementById('razd_22');
        var tooltip=new Tooltip(tooltip_content, 'razd_22_tooltip', "r22_label");
    })
</script>

<div style="display: inline-block; width: 4%;">
    <div style="width: 90%" class="tab">
        <input type="radio" id="22" name="tab_group">
        <label for="22" class="tab_title razd_col_tab" id="r22_label">Раздел 2.2</label>
        <section class="tab_content">
            <div style="margin-top: 15px; margin-bottom: 15px" class="bat_add"><a href={{'/docs/tab22/new'}}>Добавить запись</a></div>
            <div class="inside_tab_padding plan_new">
                <div class="row_block plan_new plan22">
                    <table style="width: 100%; text-align: center">
                        <thead>
                        <tr>
                            <th>Регистрационный номер ОПО</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Должность</th>
                            <th>Образование/квалификация</th>
                            <th>Стаж работы в отрасли</th>
                            <th>Сведения о последнем повышении квалификации</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($table22 as $row)
                        <tr>
                            <td>{{$row->num_opo}}</td>
                            <td>{{$row->name_f}}</td>
                            <td>{{$row->name_n}}</td>
                            <td>{{$row->name_o}}</td>
                            <td>{{$row->post}}</td>
                            <td>{{$row->education}}</td>
                            <td>{{$row->experiens}}</td>
                            <td>{{$row->last_sert}}</td>

                            <td class="hover_links">
                                <a href="tab22/delete/{{ $row->id }}"><img wire:click="delete({{ $row->id }})" alt="" src="{{asset('assets/images/icons/trash.svg')}}" class="trash_i"></a>
                                <a href="tab22/edit/{{ $row->id }}"><img wire:click="edit({{ $row->id }})" alt="" src="{{asset('assets/images/icons/edit.svg')}}" class="check_i"></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>
{{--    <div id="openModal22" class="modal">--}}
{{--        <div class="modal-dialog table_use" style="margin-top: 200px; margin-left: 30%; height: 450px">--}}
{{--            <div class="modal-content" style="width: 750px; height: 450px">--}}
{{--                <div class="modal-header">--}}
{{--                    <a href="#close" title="Close" class="close">×</a>--}}
{{--                </div>--}}
{{--                <div class="modal-body ">--}}
{{--                    <h2 style="text-align: center">Редактировать</h2>--}}
{{--                    <form>--}}
{{--                        <table class="modal_table map_hover">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>Фамилия</td>--}}
{{--                                <td><input type="text" wire:model="name_f" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Имя</td>--}}
{{--                                <td><input type="text" wire:model="name_n" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Отчество</td>--}}
{{--                                <td><input type="text" wire:model="name_o" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Должность</td>--}}
{{--                                <td><input type="text" wire:model="post" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Образование/квалификация</td>--}}
{{--                                <td><input type="text" wire:model="education" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Стаж работы в отрасли</td>--}}
{{--                                <td><input type="text"="text" wire:model="experiens" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Сведения о последнем повышении квалификации</td>--}}
{{--                                <td><input type="text" wire:model="last_sert" id="title" style="min-width: 350px" /></td>--}}
{{--                            </tr>--}}



{{--                            <td colspan="2" class="link_td centered">--}}
{{--                                <button type="submit" class="create" wire:click.prevent="update()">--}}
{{--                                    Сохранить--}}
{{--                                </button></td>--}}
{{--                            </tbody>--}}


{{--                        </table>--}}
{{--                    </form>--}}
{{--                    <div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</div>
