<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class MenuMaster extends Model {
	protected $table = 'menu_master';

	public function subcourses()
    {
        return $this->hasMany('App\MenuMeta', 'menu_id', 'id');
    }


    public function submenucourses(){
    	return $this->hasMany('App\Course', 'menu_id', 'id');
    }
}