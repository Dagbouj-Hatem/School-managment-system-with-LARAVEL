<?php

namespace App\Http\Controllers;

use App\DataTables\ClasseDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClasseRequest;
use App\Http\Requests\UpdateClasseRequest;
use App\Repositories\ClasseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ClasseController extends AppBaseController
{
    /** @var  ClasseRepository */
    private $classeRepository;

    public function __construct(ClasseRepository $classeRepo)
    {
        $this->classeRepository = $classeRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Classe.
     *
     * @param ClasseDataTable $classeDataTable
     * @return Response
     */
    public function index(ClasseDataTable $classeDataTable)
    {
        return $classeDataTable->render('classes.index');
    }

    /**
     * Show the form for creating a new Classe.
     *
     * @return Response
     */
    public function create()
    {
        $levels= \App\Level::pluck('name','id');
        return view('classes.create',compact('levels'));
    }

    /**
     * Store a newly created Classe in storage.
     *
     * @param CreateClasseRequest $request
     *
     * @return Response
     */
    public function store(CreateClasseRequest $request)
    {
        $input = $request->all();

        $classe = $this->classeRepository->create($input);

        Flash::success('Classe enregistrée avec succès.');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified Classe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classe = $this->classeRepository->findWithoutFail($id);

        if (empty($classe)) {
            Flash::error('Classe non trouvé.');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('classe', $classe);
    }

    /**
     * Show the form for editing the specified Classe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classe = $this->classeRepository->findWithoutFail($id);

        if (empty($classe)) {
            Flash::error('Classe non trouvé.');

            return redirect(route('classes.index'));
        }

        $levels= \App\Level::pluck('name','id');

        return view('classes.edit',compact('levels'))->with('classe', $classe);
    }

    /**
     * Update the specified Classe in storage.
     *
     * @param  int              $id
     * @param UpdateClasseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClasseRequest $request)
    {
        $classe = $this->classeRepository->findWithoutFail($id);

        if (empty($classe)) {
            Flash::error('Classe non trouvé.');

            return redirect(route('classes.index'));
        }

        $classe = $this->classeRepository->update($request->all(), $id);

        Flash::success('Classe mise à jour avec succès.');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified Classe from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classe = $this->classeRepository->findWithoutFail($id);

        if (empty($classe)) {
            Flash::error('Classe non trouvé.');

            return redirect(route('classes.index'));
        }

        $this->classeRepository->delete($id);

        Flash::success('Classe supprimée avec succès.');

        return redirect(route('classes.index'));
    }
}
