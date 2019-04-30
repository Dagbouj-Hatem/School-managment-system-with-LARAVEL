<?php

use Illuminate\Database\Seeder;
use App\Classe;
use App\Level;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //test if table is empty
        if(DB::table('classes')->get()->count()==0)
        {  
            // init var 
            $number_classe_college = 2; 
            $number_classe_lycee = 2; 
            $section_2eme= ['Sciences','Sciences Informatique','Economie et Gestion','Lettres'];
            $section=['Mathématiques','Sciences Expérimentales','Economie et Gestion','Sciences Techniques','Sciences Informatique','Éducation physique','Lettres'];


            // les classe de collège 
            for( $i=7 ; $i<=9;$i++) {
                // get level 
                $level = Level::where('id', $i)->first();
                // insert classes
                for( $j=1 ; $j<=$number_classe_college;$j++) {
                    // insert one classe
                    $classe = new Classe();
                        $classe->name= 'Classe '.$i.'ème B'.$j;
                        $classe->description= 'Classe '.$i.'ème B'.$j; 
                        $classe->created_at=now();
                        $classe->updated_at=now(); 
                        $classe->level()->associate($level);  
                    $classe->save();
                }

            }

            // les classe de secondaire 
            for( $i=10 ; $i<=13;$i++) {
                // get level 
                $level = Level::where('id', $i)->first();
                // insert classes
                for( $j=1 ; $j<=$number_classe_lycee;$j++) {
                    // insert one classe
                        // si 1ere année 
                        if($i==10){
                             $classe = new Classe();
                                $classe->name= 'Classe 1ère S'.$j;
                                $classe->description= 'Classe 1ère S'.$j; 
                                $classe->created_at=now();
                                $classe->updated_at=now(); 
                                $classe->level()->associate($level);  
                            $classe->save();
                        }else if($i==11){

                            foreach ($section_2eme as  $sec) {
                            $classe = new Classe();
                                $classe->name= 'Classe 2ème '.$sec.' '.$j;
                                $classe->description= 'Classe 2ème '.$sec.' '.$j; 
                                $classe->created_at=now();
                                $classe->updated_at=now(); 
                                $classe->level()->associate($level);  
                            $classe->save();
                                
                            }
                        }else{
                                $niv= $i-9;
                            foreach ($section as  $sec) {
                             $classe = new Classe();
                                $classe->name= 'Classe '.$niv.'ème '.$sec.' '.$j;
                                $classe->description= 'Classe '.$niv.'ème '.$sec.' '.$j; 
                                $classe->created_at=now();
                                $classe->updated_at=now(); 
                                $classe->level()->associate($level);  
                            $classe->save();
                            }
                        }
                        
                }

            }

            

        }else
        {
        	echo "Table CLASSES not empty ! \n";
        }
    }
}
