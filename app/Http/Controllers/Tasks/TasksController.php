<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TasksController extends Controller
{
    public function index()
    {
        return view('task.index');
    }

    public function stone(Request $request)
    {
        $this->validate($request, [
            'taskTitle'   => 'required|max:100',
            'taskContent' => 'required|max:500',
        ]);

        $taskID = $this->getTaskCountNum();

        $this->saveTask($taskID, $request->taskTitle, $request->taskContent);
    }

    /**
     * 获取 Task ID
     *
     * @return mixed
     */
    private function getTaskCountNum()
    {
        return Redis::incr('task:count');
    }

    private function saveTask($id, $title, $content)
    {
        Reids::set('task:' . $id . ':title', $title);
        Reids::set('task:' . $id . ':content', $content);

        return TRUE;
    }
}
