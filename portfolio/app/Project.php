<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description'];


	//Relationships
	public function account()
    {
        return $this->belongsTo('App\Account');
    }

	public function tasks()
    {
        return $this->hasMany('App\Task');
    }

}
