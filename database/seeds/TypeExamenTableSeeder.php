<?php

use Illuminate\Database\Seeder;

class TypeExamenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                  //test if table is empty
        if(DB::table('type_examens')->get()->count()==0)
        {  
        	DB::table('type_examens')->insert([
        	['name' => 'Les Questions À Choix Multiples', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Les Questions Vrai/faux', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Les Associations', 'created_at'=> now(),'updated_at' => now(), ],

        	['name' => 'Les Questions À Réponse Courte', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Les Questions À Développement', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Les Résolutions De Problèmes', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'Les Examens À Livre Ouvert', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'L\'examen écrit', 'created_at'=> now(),'updated_at' => now(), ],

        	['name' => 'L\'examen pratique', 'created_at'=> now(),'updated_at' => now(), ],
        	['name' => 'l\'examen oral', 'created_at'=> now(),'updated_at' => now(), ],

            ]);

         }else
        {
        	echo "Table TYPE EXAMEN not empty ! \n";
        }
    }
}
