<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'notes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description'];


	//Relationships
	public function task()
    {
        return $this->belongsTo('App\Task');
    }

}
