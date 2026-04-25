<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'contractor_id',
    ];

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function salesActivities()
    {
        return $this->hasMany(SalesActivity::class);
    }

    public function stakeholders()
    {
        return $this->belongsToMany(Stakeholder::class, 'project_stakeholder');
    }
}
