<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Task;
use App\Log;

class TaskController extends Controller
{
    public function index()
    {
        $articles = DB::table('tasks')->get();
        return view('index')->with('articles', $articles);
    }

    public function counter($id)
    {
        DB::table('tasks')
            ->where('id', $id)
            ->increment('counter');
        DB::table('logs')
            ->insert(
                ['task_id' => $id]
            );
        return redirect('/');
    }

    public function queue()
    {
        $articles = Log::all()->where('status', 0)->sortByDesc('created_at');
        return view('queue')->with('articles', $articles);
    }

    public function add()
    {
        $query = DB::table('logs')->where('status', 0)->first();
        if (!empty($query)) {
            DB::update("update logs set status = 1 where id = $query->id");
            $url = 'queue?id=' . $query->id;
        } else {
            $url = 'queue';
        }
        return redirect($url);
    }
}

