<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class CourseMeta extends Model {
	protected $table = 'course_meta';
	protected $primaryKey = 'id';
	protected $fillable = ['title','description'];
}