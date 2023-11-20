<?php

namespace Database\Seeders;

use App\Models\Comunity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comunity::create([
            'comunity_name' => 'Kecak Fire Dance',
            'village_id' => '80571',
            'contact_name' => 'Kecak Fire Dance Badung',
            'comunity_desc' => 'Kecak Fire Dance',
            'comunity_logo' => 'https://images.unsplash.com/photo-1511164657592-59a452023479?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);
        Comunity::create([
            'comunity_name' => 'Barong Kaja',
            'village_id' => '80571',
            'contact_name' => 'Barong Kaja Ubud',
            'comunity_desc' => 'Barong Kaja',
            'comunity_logo' => 'https://images.unsplash.com/photo-1565970141926-c001afaf8577?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);
    }
}
