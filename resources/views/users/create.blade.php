@extends('layouts.master')
@section('bc-title') Registro de nuevo usuario @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb">
            @include('partials.breadcrumb')
        </div>
        {!! Form::open(['method' => 'POST', 'route' => ['users.store'],'class' => 'form-horizontal']) !!}
            @include('users.partials._form', ['submit_text' => 'Enviar'])
        {!! Form::close() !!}
    </div>


@endsection