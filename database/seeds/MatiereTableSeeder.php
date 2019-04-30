<?php

use Illuminate\Database\Seeder;

class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //test if table is empty
        if(DB::table('matieres')->get()->count()==0)
        {  
        	DB::table('matieres')->insert([
        	['name' => 'Les mathématiques', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'L\'arithmétique', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La géométrie', 'created_at'=> now(),'updated_at' => now(), ],

        	['name' => 'Français', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Anglais', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Arabe', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'L\'espagnol', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'L\'allemand', 'created_at'=> now(),'updated_at' => now(), ],

        	['name' => 'L\'economie', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'l\'histoire', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'L\'orthographe', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La biologie', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La chimie', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La geographie', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La littérature', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La musique', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'La physique', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Le dessin', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Les sciences', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Sport', 'created_at'=> now(),'updated_at' => now(), ],

            ]);

         }else
        {
        	echo "Table MATIERES not empty ! \n";
        }
    }
}
