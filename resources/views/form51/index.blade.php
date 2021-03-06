@extends('web.layouts.app')
@section('title')
    Отчеты о инцидентах
@endsection

@section('content')

{{--    @push('app-css')--}}
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    @endpush--}}
    <style>
        label {
            display: block;
            margin-bottom: 0.5rem;
        }

    </style>
@include('web.include.sidebar_doc')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2 class="text-muted" style="text-align: center" >Список оперативных сообщений о инцидентах</h2>
                        @can('product-create')
                            <div class="bat_add"><a href="{{ route('form51.create') }}">Создать Акт</a></div>
                        @endcan
                    </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

                    <div class="inside_tab_padding form51">
                        <div style="background: #FFFFFF; border-radius: 6px" class="row_block form51">
                    <table>
                        <thead>
                        <tr>
                            <th style="width: 2rem">Номер </th>
                            <th style="width: 25vh">Дата сообщения</th>
                            <th style="width: 25vh" class="centered">Статус</th>
                            <th style="width: 25vh" class="centered"></th>
                        </tr>

                        </thead>
                        <tbody >
        @foreach ($data as $key => $form)
            <tr>
                <td>{{ $form->id }}</td>
                <td>{{ $form->create_add }}</td>
                <td>{{ $form->num_obj }}</td>

                <td  class="centered">

                    <a href="{{ route('form51.edit',$form->id) }}"><img  alt="" src="{{asset('assets/images/icons/edit.svg')}}" class="check_i" style="text-align:center"></a>

                    {!! Form::open(['method' => 'DELETE','route' => ['form51.destroy', $form->id],'style'=>'display:inline']) !!}
                    <input type="image" name="picture" src="{{asset('assets/images/icons/trash.svg')}}" class="trash_i" style="width: 15px; height: 15px; margin-top:3px; margin-right: 240px" />
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
                        </tbody>
                        {!! $data->render() !!}
    </table>
                           </div>
                       </div>



                </div>
</div>
        </div>


    </div>


@endsection
