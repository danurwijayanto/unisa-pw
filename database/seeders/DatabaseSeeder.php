<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // MataKuliah::create([
        //     'nama_mata_kuliah' => 'Matematika'
        // ]);
        $data = [
            [
                'nama_mata_kuliah' => 'Bahasa Jepang'
            ],
            [
                'nama_mata_kuliah' => 'Bahasa Inggris'
            ],
            [
                'nama_mata_kuliah' => 'Biologi'
            ]
        ];
        MataKuliah::insert($data);
    }
}
