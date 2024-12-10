<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->truncate();

        Blog::factory()
        ->count(30)
        ->create();

        // DB::table('blogs')->insert([
        //     'title' => 'Mulai Aja Dulu',
        //     'description' => 'Ini adalah deskripsi untuk blog Mulai Aja Dulu',
        // ]);

        // DB::table('blogs')->insert([
        //     'title' => 'Blog 2',
        //     'description' => 'Ini adalah deskripsi untuk blog 2 ',
        // ]);

        // DB::table('blogs')->insert([
        //     'title' => 'Bloh 3',
        //     'description' => 'Ini adalah deskripsi untuk blog 3',
        // ]);
    }
}
