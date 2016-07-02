<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    //programas
	protected $fillable = [
		'nome',
		'descricao'
	];
}
