<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        DB::table('movies')->insert( [
            [
                'title' => 'Inception',
                'year' => '2010-07-16',
                'note' => 9.0,
                'comment' => 'Un thriller de science-fiction qui brouille les frontières entre rêve et réalité. Visuellement impressionnant, avec un scénario complexe.'
            ],
            [
                'title' => 'Le Fabuleux Destin d’Amélie Poulain',
                'year' => '2001-04-25',
                'note' => 8.3,
                'comment' => 'Un film poétique et coloré qui célèbre les petites joies de la vie. Audrey Tautou y est lumineuse.'
            ],
            [
                'title' => 'Interstellar',
                'year' => '2014-11-05',
                'note' => 9.2,
                'comment' => 'Une épopée spatiale intense avec une forte charge émotionnelle. La musique et les images sont inoubliables.'
            ],
            [
                'title' => 'Intouchables',
                'year' => '2011-11-02',
                'note' => 8.5,
                'comment' => 'Une belle leçon d’amitié et d’humanité. Un duo d’acteurs inoubliable et beaucoup d’humour.'
            ],
            [
                'title' => 'Parasite',
                'year' => '2019-05-21',
                'note' => 9.1,
                'comment' => 'Un chef-d’œuvre social entre drame et comédie noire. Chaque plan est millimétré, le suspense monte crescendo.'
            ]
        ]);

    }
}
