<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //test if table is empty
        if(DB::table('levels')->get()->count()==0)
        {  
        	DB::table('levels')->insert([
        		['name' => '1ère année de base' ,'description'=>'Niveau 1ère année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '2ème année de base' ,'description'=>'Niveau 2ème année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '3ème année de base' ,'description'=>'Niveau 3ème année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '4ème année de base' ,'description'=>'Niveau 4ème année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '5ème année de base' ,'description'=>'Niveau 5ème année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '6ème année de base' ,'description'=>'Niveau 6ème année de base', 'created_at' => now(),'updated_at' => now(),],

                ['name' => '7ème année de base' ,'description'=>'Niveau 7ème année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '8ème année de base' ,'description'=>'Niveau 8ème année de base', 'created_at' => now(),'updated_at' => now(),],
                ['name' => '9ème année de base' ,'description'=>'Niveau 9ème année de base', 'created_at' => now(),'updated_at' => now(),],

                ['name' => '1ère année secondaire' ,'description'=>'Niveau 1ère année secondaire', 'created_at' => now(),'updated_at' => now(),],
        		['name' => '2ème année secondaire' ,'description'=>'Niveau 2ème année secondaire', 'created_at' => now(),'updated_at' => now(),],
        		['name' => '3ème année secondaire' ,'description'=>'Niveau 3ème année secondaire', 'created_at'=> now(),'updated_at' => now(), ],
        		['name' => '4ème année secondaire' ,'description'=>'Niveau 4ème année secondaire', 'created_at'=> now(),'updated_at' => now(), ]
            ]);

        }else
        {
        	echo "Table LEVELS not empty ! \n";
        }
    }
}
