<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = ['groupe'];
	protected $primaryKey = 'id_group';

	public $timestamps = false;
}
