<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [//投稿を許可
		'title',
		'name'
	];
	
	 public function editOne($id)
    {   
      if(!is_null($this->find($id))) {
          return $this->find($id);
      } else {
          abort('404');
      }   
    }
	
	public function savePost($request){
		return $this->fill($request)->save();
	}
}
