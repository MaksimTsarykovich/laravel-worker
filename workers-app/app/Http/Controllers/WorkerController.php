<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        foreach ($workers as $worker) {
            dump($worker->name);
        }
    }

    public function show()
    {
        $worker = Worker::find(2);

        dd($worker->toArray());
    }

    public function create(): string
    {
        $worker = Worker::create([
            'name' => 'Luck',
            'surname' => 'Joe',
            'email' => 'joe@doe.com',
            'age' => '22',
            'description' => 'Its Luck Doe',
            'is_married' => 0,
        ]);


        return 'John Doe created';
    }

    public function update()
    {
        $worker = Worker::find(2);

        $worker->update([
            'name' => 'Luck',
            'surname' => 'Scaywoker',
        ]);

        return 'updated';
    }

    public function delete()
    {
        $worker = Worker::find(2);

        $worker->delete();

        return 'deleted';
    }
}
