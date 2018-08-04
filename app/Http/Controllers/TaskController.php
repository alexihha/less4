<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Task;
use App\Models\Log;

class TaskController extends Controller
{
    public function index()
    {
        $articles = Task::all();
        return view('index')->with('articles', $articles);
    }

    public function counter($id)
    {
        Task::where('id', $id)->increment('counter');
        Log::insert(['task_id' => $id]);
        return redirect('/');
    }

    public function queue()
    {
        $articles = Log::all()->where('status', 0)->sortByDesc('created_at');
        return view('queue')->with('articles', $articles);
    }


    public function done(){
        $articles = Log::all()->where('status', 1)->sortByDesc('created_at');
        return view('queue')->with('articles', $articles);
    }

    public function add()
    {

        $query = Log::where('status', 0)->first();
        if (!empty($query)) {
            Log::where('id', $query->id)->update(['status'=> 1]);
            $url = 'queue?id=' . $query->id;
        } else {
            $url = 'queue';
        }
        return redirect($url);
    }
}

