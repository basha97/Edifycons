<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
	protected $table = 'course';
	protected $primaryKey = 'id';

	public  function course_content(){
		return $this->hasMany('App\CourseMeta', 'course_id', 'id');
	}
}