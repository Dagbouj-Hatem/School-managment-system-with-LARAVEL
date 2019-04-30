<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // remplire la table catégories
         //test if table is empty
        if(DB::table('categories')->get()->count()==0)
        { 
        	DB::table('categories')->insert([
        		['name' => 'Manuel scolaire' ,'created_at' => now(),'updated_at' => now(),],
        		['name' => 'Annabac' ,'created_at' => now(),'updated_at' => now(),],
        		['name' => 'Manuel numérique' ,'created_at'=> now(),'updated_at' => now(), ],
        		['name' => 'Livre parascolaire' ,'created_at'=> now(),'updated_at' => now(), ]
            ]);
        }
        else
        {
            echo "Table CATEGORIES not empty ! \n";
        }
    }
}
