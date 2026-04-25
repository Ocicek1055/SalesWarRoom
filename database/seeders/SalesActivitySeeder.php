<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SalesActivity;

class SalesActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalesActivity::create([
            'project_id' => 1,
            'activity_type' => 'Telefon Gorusmesi',
            'activity_date' => '2024-04-20',
            'notes' => 'Potansiyel musteri ile ilk gorusme yapildi.',
        ]);

        SalesActivity::create([
            'project_id' => 1,
            'activity_type' => 'Toplanti',
            'activity_date' => '2024-04-22',
            'notes' => 'Musteri ile proje detaylari paylasildi.',
        ]);

        SalesActivity::create([
            'project_id' => 2,
            'activity_type' => 'Sunum',
            'activity_date' => '2024-04-25',
            'notes' => 'Yatirimcilara proje sunumu yapildi.',
        ]);
    }
}
