<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'contact_person',
        'phone_number',
        'email',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_stakeholder');
    }
}
