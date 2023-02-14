<?php

namespace App\Http\Requests;

use App\Models\Empleado;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmpleadoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('empleado_create');
    }

    public function rules()
    {
        return [
            'nombre' => [
                'string',
                'nullable',
            ],
            'apellido' => [
                'string',
                'nullable',
            ],
            'identificacion' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
