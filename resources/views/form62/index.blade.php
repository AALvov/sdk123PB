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
                    <div class="card-header"><h2 class="text-muted" style="text-align: center" >Список актов технического расследования причин аварии</h2>
                        @can('product-create')
                            <div class="bat_add"><a href="{{ route('form62.create') }}">Создать Акт</a></div>
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
                            <th style="width: 25vh">Дата создания акта</th>
                            <th style="width: 25vh" class="centered">Дата аварии</th>
                            <th style="width: 25vh" class="centered">Действия</th>
                        </tr>

                        </thead>
                        <tbody >
        @foreach ($data as $key => $form)
            <tr>
                <td>{{ $form->id }}</td>
                <td>{{ $form->create_add }}</td>
                <td>{{ $form->date_accident }}</td>

                <td  class="centered">

                    <a href="{{ route('form62.edit',$form->id) }}"><img  alt="" src="{{asset('assets/images/icons/edit.svg')}}" class="check_i"></a>
                    <a href="{{ route('form62.edit',$form->id) }}"><img  alt="" src="{{asset('assets/images/icons/search.svg')}}" class="open_i"></a>

                    {!! Form::open(['method' => 'DELETE','route' => ['form62.destroy', $form->id],'style'=>'display:inline']) !!}
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
{{--            </div>--}}

{{--        </div>--}}

    </div>


@endsection
