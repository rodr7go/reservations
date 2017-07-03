@extends('layouts.master')

@section('bc-title') Usuarios @endsection

@section('custom_styles')
    @include('users.partials.styles')
@endsection

@section('content')
    <div id="content-header">
        @include('partials.breadcrumb')
        <h1>Usuarios</h1>
    </div>
    <div class="container-fluid">
        <div class="">
            <a href="{{ route('users.create') }}" class="btn btn-xs btn-primary">
                <i class="icon-plus"></i>
                Nuevo usuario
            </a>
        </div>
        <div class="row-fluid">
            <div class="ibox">
                <div class="ibox-content">
                    @include('users.partials.table')
                </div>
            </div>
        </div>
    </div>
    {{--<div class="">--}}
        {{--<div class="panel-heading">--}}
            {{--<h2>Usuarios</h2>--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
            {{--@include('users.partials.table')--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection
@section('custom_scripts')
    @include('users.partials.scripts')
@endsection
