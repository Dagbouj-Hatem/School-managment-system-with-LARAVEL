<?php

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
        // roles & permissions 
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        // users of appalication 
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        // level & classes 
        $this->call(LevelsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(MatiereTableSeeder::class);
        $this->call(TypeExamenTableSeeder::class);
    }
}
