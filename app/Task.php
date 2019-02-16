<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Security
    protected $fillable = [
        'project_id', 'description', 'completed'
    ];

    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->complete(false);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
