<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();

        Post::factory(30)->create();
        Product::factory(30)->create();
        Order::factory(12)->create();



        User::factory()->create([
            'name' => 'admin',
            'role_id'=>4,
            'departement_id'=>1,
            'email' => 'admin@example.com',
        ]);
        Role::factory()->create([
            'statu'=>'admin',
        ],
        [
            'statu'=>'manager',
        ],
        [
            'statu'=>'client',
        ],
        [
            'statu'=>'artisan'
        ]
        );

        Departement::factory()->create([
            'departement'=>'zlayji',
        ]
        );
    }
}




