<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    function completed() {
        $this->completed = true;
        $this->save();
    }

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
