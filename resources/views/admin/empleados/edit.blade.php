@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.empleado.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.empleados.update", [$empleado->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">{{ trans('cruds.empleado.fields.nombre') }}</label>
                <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre" id="nombre" value="{{ old('nombre', $empleado->nombre) }}">
                @if($errors->has('nombre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nombre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.empleado.fields.nombre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apellido">{{ trans('cruds.empleado.fields.apellido') }}</label>
                <input class="form-control {{ $errors->has('apellido') ? 'is-invalid' : '' }}" type="text" name="apellido" id="apellido" value="{{ old('apellido', $empleado->apellido) }}">
                @if($errors->has('apellido'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apellido') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.empleado.fields.apellido_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="identificacion">{{ trans('cruds.empleado.fields.identificacion') }}</label>
                <input class="form-control {{ $errors->has('identificacion') ? 'is-invalid' : '' }}" type="number" name="identificacion" id="identificacion" value="{{ old('identificacion', $empleado->identificacion) }}" step="1">
                @if($errors->has('identificacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('identificacion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.empleado.fields.identificacion_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection