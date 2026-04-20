<?php

namespace Database\Seeders;

use App\Models\Cours;
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

        $this->call([

            OfferSeeder::class,
            CommentSeeder::class,
            ProductSeeder::class,
            CoursSeeder::class,
            OrderSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
        ]);


        User::factory()->create([
            'name' => 'admin',
            'role_id'=>1,
            'email' => 'admin@example.com',
            'status'=>'client',
            'condition'=>'deblocke'
        ]);
        User::factory(20)->create([

            'role_id'=>2,
            'condition'=>'deblocke',
            ]);

        Role::factory()->create(
        ['status'=>'admin'],
       );
       Role::factory()->create([
         'status'=>'user',
       ]);
    }
}




