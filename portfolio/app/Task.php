<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'status', 'hours_worked'];


	//Relationships
	public function project()
    {
        return $this->belongsTo('App\Project');
    }

	public function notes()
    {
        return $this->hasMany('App\Note');
    }

    public function bugs()
    {
        return $this->hasMany('App\Bug');
    }

}
