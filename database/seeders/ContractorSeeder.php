<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contractor;

class ContractorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contractor::create([
            'name' => 'Tekin Insaat',
            'contact_person' => 'Ahmet Tekin',
            'phone_number' => '5551234567',
            'email' => 'ahmet.tekin@tekininsaatt.com',
        ]);

        Contractor::create([
            'name' => 'Yilmaz Yapi',
            'contact_person' => 'Ayse Yilmaz',
            'phone_number' => '5557654321',
            'email' => 'ayse.yilmaz@yilmazyapi.com',
        ]);
    }
}
