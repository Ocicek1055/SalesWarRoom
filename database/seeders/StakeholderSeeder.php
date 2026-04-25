<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stakeholder;

class StakeholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stakeholder::create([
            'name' => 'Can Emlak',
            'role' => 'Emlak Ajansi',
            'contact_person' => 'Canan Yilmaz',
            'phone_number' => '5551112233',
            'email' => 'canan.yilmaz@canemlak.com',
        ]);

        Stakeholder::create([
            'name' => 'Demirbank',
            'role' => 'Banka',
            'contact_person' => 'Demir Bey',
            'phone_number' => '5554445566',
            'email' => 'demir.bey@demirbank.com',
        ]);
    }
}
