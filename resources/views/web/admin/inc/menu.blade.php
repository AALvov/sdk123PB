@include('web.include.sum_checker_tree.sumchecker_tree')
<script>
    document.addEventListener('DOMContentLoaded', function (){
        document.getElementById('seumchecker_go_btn').addEventListener('click',function (){
            clear_tree();
            load_files_tree();
            var modal=document.getElementById('files_tree_modal');
            // console.log(modal)
            modalShow(modal)
        });
        document.getElementById('files_tree_closer').addEventListener('click', function (){
            console.log($('#choice_files_tree').removeData('uiFancytree'))
        });
    });
</script>
<div class="btn-group">
    <a href="/admin" class="btn btn-primary" aria-current="page">Журнал событий</a>
    <a href="/admin_ib" class="btn btn-primary" aria-current="page">Журнал действий администратора</a>
{{--    <a href="/admin/users" class="btn btn-primary">Список пользователей</a>--}}
{{--    <a href="/admin/roles" class="btn btn-primary">Список ролей</a>--}}
    <a href="/admin/perm" class="btn btn-primary">Список привелегий</a>
    <a class="btn btn-primary" href="{{ route('roles.index') }}">Список ролей</a>
    <a class="btn btn-primary" href="{{ route('users.index') }}">Список пользователей</a>
    <a class="btn btn-primary" id="seumchecker_go_btn">Контрольные суммы</a>
    <a class="btn btn-primary" href="{{ route('config_safety') }}">Конфигурация безопасности</a>

</div>


