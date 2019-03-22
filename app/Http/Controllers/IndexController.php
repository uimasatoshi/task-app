<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//リクエスト
use App\Task;
use App\Http\Requests\TaskPostRequest;


class IndexController extends Controller
{
	private $task;
	
    public function __construct(Task $task) {
        $this->task = $task;
    }

	
	public function index() {
        return view('index',['tasks' => $this ->task::all()]);
    }
	
	public function edit($id){
		$task = $this->task->editOne($id);
		return view ('edit',['task'=>$task]);
	}
	

	
    public function post(TaskPostRequest $request) {
		//var_dump($request->name);
		//exit();
		
		//$task = new Task;
		
		//$task->title = $request->title;
		//$task->save();
		//return redirect('/');
		
		
		//$task->fill($request->all())->save();
                var_dump($request);
                exit();
		
		$this->task->savePost($request->all());
		return redirect('/');
		
    }
	
    public function update(Request $request, $id) {
        $set_task = $this->task->find($id);
        $set_task->title = $request->title;
        $set_task->name = $request->name;
        $set_task->save();
        return redirect('/');
    }
	
	

}


