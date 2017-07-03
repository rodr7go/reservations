<div class="ibox">
    <div class="ibox-title">
        <h5>Datos Personales</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <input type="hidden" name="active" value="1">
            <input type="hidden" name="role" value="user">
            <div class="col-lg-4 m-b-md">
                {!! Form::label('name', 'Nombre(s): *') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 18, 'minlength' => 1 ]) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('last_name_1', 'Apellido Paterno: *') !!}
                {!! Form::text('last_name_1', null, ['class' => 'form-control', 'required', 'maxlength' => 100]) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('last_name_2', 'Apellido Materno: *') !!}
                {!! Form::text('last_name_2', null, ['class' => 'form-control', 'required', 'maxlength' => 100]) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 m-b-md">
                {!! Form::label('email', 'E-mail: *') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('username', 'Nombre de usuario:') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('phone', 'Telefono:') !!}
                {!! Form::number('phone', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 m-b-md">
                {!! Form::label('mobile', 'Celular:') !!}
                {!! Form::number('mobile', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="ibox">
    <div class="ibox-title">
        <h5>Direccion</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-lg-4 m-b-md">
                {!! Form::label('street_address', 'Calle: *') !!}
                {!! Form::text('street_address', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('colony', 'Colonia: *') !!}
                {!! Form::text('colony', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('exterior_number', 'Numero exterior: ') !!}
                {!! Form::text('exterior_number', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 m-b-md">
                {!! Form::label('interior_number', 'Numero interior: ') !!}
                {!! Form::text('interior_number', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('postal_zip', 'Codigo Postal: ') !!}
                {!! Form::text('postal_zip', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('city', 'Ciudad: *') !!}
                {!! Form::select('city', $cities, null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 m-b-md">
                {!! Form::label('state', 'Estado: *') !!}
                {!! Form::select('state', $states, null,['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('password', 'Contraseña: *') !!}
                {!! Form::text('password', null,['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-lg-4 m-b-md">
                {!! Form::label('password_confirmation', 'Contraseña: *') !!}
                {!! Form::text('password_confirmation', null,['class' => 'form-control', 'required']) !!}
            </div>
        </div>
    </div>
</div>


<div class="ibox">
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger">Cancelar</a>
                {!! Form::submit($submit_text, ['class'=>'btn btn-sm btn-primary']) !!}
            </div>
        </div>
    </div>
</div>