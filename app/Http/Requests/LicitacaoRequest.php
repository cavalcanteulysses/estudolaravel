<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;
use App\Licitacao;

class LicitacaoRequest extends FormRequest
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
            'data_entrada' => 'required',
            'objeto' => 'required|min:10',
            'modalidade_id' => 'required',
            'numero_processo' => 'required',
            'numero_processo_adm' => 'required',
            'data_conclusao' => 'required',
            'publicado' => 'required',
            'data_abertura' => 'required',
            'hora_abertura' => 'required',
            'valor_disponivel' => 'required',
            'data_montagem' => 'required',
            'valor_fechado' => 'required',
            'data_execucao' => 'required'
        ];
    }
}
