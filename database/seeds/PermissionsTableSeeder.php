<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //test if table is empty
    	if(DB::table('permissions')->get()->count()==0)
    	{
            // create  Roles
            $role0 = Role::create(['name' => 'Super administrateur' ]);
            $role1 = Role::create(['name' => 'Administrateur' ]); 
            $role2 = Role::create(['name' => 'Enseignant' ]);
            $role3 = Role::create(['name' => 'Etudiant']);
            $role4 = Role::create(['name' => 'Tutors']);

            /**
             *  Super_Admin permissions
             */ 
            // Role 
            Permission::create(['name' => 'Ajouter un role' 	])
            ->assignRole($role0);
            Permission::create(['name' => 'Modifier un role'	])
            ->assignRole($role0);
            Permission::create(['name' => 'Consulter un role' ])
            ->assignRole($role0);
            Permission::create(['name' => 'Supprimer un role' ])
            ->assignRole($role0);
            // Permissions 
            Permission::create(['name' => 'Ajouter une autorisation'   ])
            ->assignRole($role0);
            Permission::create(['name' => 'Modifier une autorisation'  ])
            ->assignRole($role0);
            Permission::create(['name' => 'Consulter une autorisation' ])
            ->assignRole($role0);
            Permission::create(['name' => 'Supprimer une autorisation' ])
            ->assignRole($role0);

            /**
             *   Administrateur 
             */

            // users
            Permission::create(['name' => 'Ajouter un utilisateur'  ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Modifier un utilisateur'    ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Consulter un utilisateur' ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Supprimer un utilisateur' ])
            ->assignRole($role0)->assignRole($role1);
            // Level permissions
            Permission::create(['name' => 'Ajouter un niveau'   ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Modifier un niveau'  ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Consulter un niveau' ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Supprimer un niveau' ])
            ->assignRole($role0)->assignRole($role1); 
            // Classe permissions
            Permission::create(['name' => 'Ajouter une classe'   ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Modifier une classe'  ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Consulter une classe' ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Supprimer une classe' ])
            ->assignRole($role0)->assignRole($role1); 
            // CategoryForum permissions
            Permission::create(['name' => 'Ajouter une catégorie de sujet'   ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Modifier une catégorie de sujet'  ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Consulter une catégorie de sujet' ])
            ->assignRole($role0)->assignRole($role1);
            Permission::create(['name' => 'Supprimer une catégorie de sujet' ])
            ->assignRole($role0)->assignRole($role1); 


            /**
             *   Enseignant  
             */

            // Matière permissions
            Permission::create(['name' => 'Ajouter une matière'   ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Modifier une matière'  ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Consulter une matière' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Supprimer une matière' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            // Examens permissions
            Permission::create(['name' => 'Ajouter un examen'   ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Modifier un examen'  ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Consulter un examen' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Supprimer un examen' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            // Categorie permissions
            Permission::create(['name' => 'Ajouter une catégorie'   ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Modifier une catégorie'  ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Consulter une catégorie' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Supprimer une catégorie' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            // Book permissions
            Permission::create(['name' => 'Ajouter un livre'   ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Modifier un livre'  ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Consulter un livre' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Supprimer un livre' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2); 
            // SujetForum permissions
            Permission::create(['name' => 'Ajouter un sujet'   ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Modifier un sujet'  ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Consulter un sujet' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);
            Permission::create(['name' => 'Supprimer un sujet' ])
            ->assignRole($role0)->assignRole($role1)->assignRole($role2);



            /**
             *   Etudiant   
             */
       
            // MessageForum permissions
            Permission::create(['name' => 'Ajouter un message'   ])
            ->assignRole($role0)->assignRole($role1)
            ->assignRole($role2)->assignRole($role3);
            Permission::create(['name' => 'Modifier un message'  ])
            ->assignRole($role0)->assignRole($role1)
            ->assignRole($role2)->assignRole($role3);
            Permission::create(['name' => 'Consulter un message' ])
            ->assignRole($role0)->assignRole($role1)
            ->assignRole($role2)->assignRole($role3);
            Permission::create(['name' => 'Supprimer un message' ])
            ->assignRole($role0)->assignRole($role1)
            ->assignRole($role2)->assignRole($role3); 

             /**
             *   Tutors   
             */
                // MessageForum permissions
            Permission::create(['name' => 'LIKE un message'   ])
            ->assignRole($role0)->assignRole($role1)
            ->assignRole($role2)->assignRole($role3)
            ->assignRole($role4);
            Permission::create(['name' => 'DISLIKE un message'  ])
            ->assignRole($role0)->assignRole($role1)
            ->assignRole($role2)->assignRole($role3)
            ->assignRole($role4);

        }else
        {
        	echo "Table PERMISSIONS not empty ! \n";
        }
    }
}
