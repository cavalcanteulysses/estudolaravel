<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;
use App\Compra;
use App\Http\Requests\ProdutoRequest;

class CompraRequest extends FormRequest
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
            'numero' => 'required',
            'data_protocolo' => 'required',
            'objeto' => 'required|min:10',
            'tipo_documento_id' => 'required',
            'local_origem_id' => 'required',
            'tipo_processo_id' => 'required',
            'status_processo_id' => 'required'
        ];
    }
}
