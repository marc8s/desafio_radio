<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programacao extends Model
{
    //programacao
	protected $fillable = [
		'dia',
		'idprograma',
		'idradialista',
		'horario'
	];
}
