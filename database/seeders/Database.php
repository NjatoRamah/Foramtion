<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Database extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'nom' => 'Admin',
            'email' => 'admin@admin.com',
            'statue' => 'admin',
            'mdp' => '123456'
            
        ]);

        \App\Models\User::factory(10)->create([
            'nom' => $nom,
            'email' => $email,
            'statue' => 'user',
            'mdp' => '123456'
            
        ]);
        \App\Models\Article::factory(20)->create([
            
            'titre' => $titre,
            'soustitre' => $soustitre,
            'prix' => $prix,
            'dateentree' => $date,
            'description' => $description,
            'image' => $image
            
        ]);
    }
}
