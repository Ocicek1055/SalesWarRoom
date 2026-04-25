<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Gunesli Konutlari',
            'location' => 'Istanbul, Gunesli',
            'description' => 'Modern ve luks konut projesi.',
            'contractor_id' => 1,
        ]);

        Project::create([
            'name' => 'Mavi Kule Residence',
            'location' => 'Ankara, Cankaya',
            'description' => 'Sehir merkezinde prestijli bir yasam alani.',
            'contractor_id' => 2,
        ]);
    }
}
