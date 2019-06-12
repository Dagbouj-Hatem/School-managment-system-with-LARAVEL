<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        $users= \App\User::all(); 
        $permissions = Permission::all();
        //dd($users->firstWhere('id', 1 )->getAllPermissions());
        return $userDataTable->render('users.index',compact('users','permissions'));
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
          $roles= Role::pluck('name','id');
          return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        // test sur le mot de passe 
        if($request->password)
        {   // l'utilisateur donne son password
            // alors décrypter le password
            $request->merge(['password' => bcrypt($request->password)]);
        }
        // end test password
        $input = $request->all();

        $user = $this->userRepository->create($input);
        // begin photo section 
        //redifine 'disks => [ 'public' => ['root'=> public_path(),]
        // in conf/filesystem.php
        if($request->file('avatar'))
        {
            $path = Storage::disk('public')->put('avatars',$request->file('avatar')); 
            $user->fill(['avatar'=> asset($path)])->save();
        }
        // end photo section  
        // Adding  role
        $role = Role::where('id', $request->type_account)->first();
        $user->assignRole($role->name); 
        // end roles 
        Flash::success('Utilisateur enregistré avec succès.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Display Profile of the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function profile($id)
    {
        $user = $this->userRepository->findWithoutFail($id);
 

        return view('users.profile')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }
        // get roles 
        $roles= Role::pluck('name','id');
        return view('users.edit', compact('roles'))->with('user', $user);
    } 

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function settings($id)
    {
        $user = $this->userRepository->findWithoutFail($id);
        return view('users.settings')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }
        // Adding permissions via a role 

        if($user->role != $request->type_account)
        {   
            // remove the current role from the user
             $roles = $user->getRoleNames();
             $user->removeRole($roles[0]);
            // Re assign the role to user 
            $role = Role::where('id', $request->type_account)->first();
            $user->assignRole($role->name); 
            // end assign  
        }
        // end permission
        // test sur le mot de passe 
        if($request->password)
        {   // l'utilisateur donne son password
            // alors décrypter le password
            $request->merge(['password' => bcrypt($request->password)]);
        }else
        {
            // l'utilisateur ne donne pas son password
            $request->merge(['password' => $user->password]);
        }
        // end test password

        // get  avatar name 
        $last_photo = $user->avatar;

        $user = $this->userRepository->update($request->all(), $id);

         // begin avatar section  
        if($request->file('avatar'))
        {
            $path = Storage::disk('public')->put('avatars',$request->file('avatar')); 
            $user->fill(['avatar'=> asset($path)])->save();

            //delete old image 
                $exists = Storage::disk('public')->exists('avatars',$last_photo);

                if($exists)
                {   
                    $file = basename($last_photo);  
                   // dd($file);
                    Storage::disk('public')->delete('avatars/'.$file);
                }
            // end delete old image
        }
        // end photo section 
        // end update user 
        Flash::success('Mis à jour avec succès.');

        return redirect(route('users.index'));
    }

    public function settings_save($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }
        // test sur le mot de passe 
        if($request->password)
        {   // l'utilisateur donne son password
            // alors décrypter le password
            $request->merge(['password' => bcrypt($request->password)]);
        }else
        {
            // l'utilisateur ne donne pas son password
            $request->merge(['password' => $user->password]);
        }
        // end test password

        // get  avatar name 
        $last_photo = $user->avatar;

        $user = $this->userRepository->update($request->all(), $id);

         // begin avatar section  
        if($request->file('avatar'))
        {
            $path = Storage::disk('public')->put('avatars',$request->file('avatar')); 
            $user->fill(['avatar'=> asset($path)])->save();

            //delete old image 
                $exists = Storage::disk('public')->exists('avatars',$last_photo);

                if($exists)
                {   
                    $file = basename($last_photo);  
                   // dd($file);
                    Storage::disk('public')->delete('avatars/'.$file);
                }
            // end delete old image
        }
        // end photo section 
        // end update user 
        Flash::success('Profil mis à jour avec succès.');

        return back();
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }

         //delete old avatar 
        $exists = Storage::disk('public')->exists('avatars',$user->avatar);

        if($exists)
        {   
            $file = basename($user->avatar);  
            Storage::disk('public')->delete('avatars/'.$file);
        }
        // end delete old avatar

        // revoke role from user 
        $roles = $user->getRoleNames();
        $user->removeRole($roles[0]);

        $this->userRepository->delete($id);

        Flash::success('Utilisateur supprimé avec succès.');

        return redirect(route('users.index'));
    }
}
