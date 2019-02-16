<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Task;

class Project extends Model
{
    // protected $fillable = [
    //     'title',
    //     'description'
    // ];
    
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        // return Task::create([

        //     'project_id' => $this->id,
        //     'description' => $description

        // ]);

        $this->tasks()->create($task);
    }
}
