<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'activity_type',
        'activity_date',
        'notes',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
