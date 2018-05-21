<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object)[
            'nome' => 'Paulo Henrique',
            'telefone' => '99239-8529'
        ];

    }
}
