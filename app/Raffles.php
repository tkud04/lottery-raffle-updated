<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Raffles extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'agent'];

}
