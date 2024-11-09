<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data buku
        DB::table('book')->insert([
            ['title' => 'Menjadi Hebat', 'author' => 'Mario Teguh', 'published_year' => 2009],
            ['title' => 'Luar Angkasa', 'author' => 'Mario Kun', 'published_year' => 2010],
        ]);

        //Data CD
        DB::table('cd')->insert([
            ['title' => 'No Money', 'artist' => 'Martin Garrix', 'release_year' => 2014],
            ['title' => 'Wake Me Up', 'artist' => 'Avicii', 'release_year' => 2011],
        ]);

        //Data Newspaper
        DB::table('newspaper')->insert([
            ['title' => 'Kompas', 'publisher' => 'Admin Kompas', 'published_date' => '2010-12-12'],
            ['title' => 'Kompas', 'publisher' => 'Admin TV One', 'published_date' => '2020-1-12'],
        ]);

        //Data Skripsi
        DB::table('final_year_project')->insert([
            ['title' => 'Baby Blues Syndrome Application', 'student_name' => 'Alicia Keys', 'year' => 2024],
            ['title' => 'Pulauwesi Website', 'student_name' => 'Javin Deathmatch', 'year' => 2023],
        ]);
    }
}
