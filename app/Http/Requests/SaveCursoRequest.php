<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha'=> 'required',
            'docente'=> 'required',
            'nombre_curso'=> 'required',
            'dirigido_id'=> [
                'required',
                'exists:dirigidos,id'
            ],
            'horas_curso'=> 'required',
            'fecha_limite'=> 'required',
            'materia'=> 'required',
            'vigencia'=> 'required',
            'videoconferencia'=> 'required',
            'drive'=> 'required',
            'imagen_curso'=>[
                $this->route('curso') ? 'nullable':'required',
                'image'],
        ];
    }
}
