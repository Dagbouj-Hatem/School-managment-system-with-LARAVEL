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
            // create the SuperAdmin Role
            $role= Role::create(['name' => 'Super administrateur' ]);

            /**
             *  Gestion des Roles & Permission
             */
            // Role permissions
            Permission::create(['name' => 'Ajouter un role' 	])->assignRole($role);
            Permission::create(['name' => 'Modifier un role'	])->assignRole($role);
            Permission::create(['name' => 'Consulter un role' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer un role' ])->assignRole($role);
            // Permissions permissions
            Permission::create(['name' => 'Ajouter une autorisation'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier une autorisation'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter une autorisation' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer une autorisation' ])->assignRole($role);

            /**
             *   Gestion  des niveaux
             */
            // Level permissions
            Permission::create(['name' => 'Ajouter un niveau'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier un niveau'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter un niveau' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer un niveau' ])->assignRole($role);
            /**
             * Gestion des classes
             */
            // Classe permissions
            Permission::create(['name' => 'Ajouter une classe'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier une classe'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter une classe' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer une classe' ])->assignRole($role);

            /**
             * Gestion des livres
             */
            // Categorie permissions
            Permission::create(['name' => 'Ajouter une catégorie'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier une catégorie'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter une catégorie' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer une catégorie' ])->assignRole($role);
            // Book permissions
            Permission::create(['name' => 'Ajouter un livre'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier un livre'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter un livre' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer un livre' ])->assignRole($role);

            /**
               *  Forum Permissions 
               */  
            // SujetForum permissions
            Permission::create(['name' => 'Ajouter un sujet'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier un sujet'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter un sujet' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer un sujet' ])->assignRole($role);
            // CategoryForum permissions
            Permission::create(['name' => 'Ajouter une catégorie de sujet'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier une catégorie de sujet'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter une catégorie de sujet' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer une catégorie de sujet' ])->assignRole($role); 
            // MessageForum permissions
            Permission::create(['name' => 'Ajouter un message de forum'   ])->assignRole($role);
            Permission::create(['name' => 'Modifier un message de forum'  ])->assignRole($role);
            Permission::create(['name' => 'Consulter un message de forum' ])->assignRole($role);
            Permission::create(['name' => 'Supprimer un message de forum' ])->assignRole($role); 
        }else
        {
        	echo "Table PERMISSIONS not empty ! \n";
        }
    }
}
