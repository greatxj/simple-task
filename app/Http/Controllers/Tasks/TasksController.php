<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TasksController extends Controller
{
    public function index()
    {
        $task_count = Redis::get('task:count');

        $data = [];

        if ($task_count > 0) {
            for ($i = 1; $i <= $task_count; $i++) {
                $task = [
                    'title'   => Redis::get('task:' . $i . ':title'),
                    'content' => Redis::get('task:' . $i . ':content'),
                ];

                array_push($data, $task);
            }
        } else {
            $data = [
                [
                    'title'   => 'Hello world',
                    'content' => 'Hello world, this is a Laravel + Redis project',
                ]
            ];
        }

        return view('task.index', compact('data'));
    }

    public function stone(Request $request)
    {
        $this->validate($request, [
            'taskTitle'   => 'required|max:100',
            'taskContent' => 'required|max:500',
        ]);

        $taskID = $this->getTaskCountNum();

        $result = $this->saveTask($taskID, $request->taskTitle, $request->taskContent);

        if ($result) {
            return redirect()->route('home');
        }
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
        Redis::set('task:' . $id . ':title', $title);
        Redis::set('task:' . $id . ':content', $content);

        return TRUE;
    }
}
