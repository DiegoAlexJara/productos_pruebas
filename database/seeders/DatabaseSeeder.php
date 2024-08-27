<?php

namespace Database\Seeders;

use App\Models\Product;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $post = new user();
        $post->name = 'diego';
        $post->email = 'admin@gmail.com';
        $post->password =Hash::make('12345');
        
        $post->save();
        
        Product::factory()->count(10)->create();
        User::factory()->count(10)->create(); 
    }
}
