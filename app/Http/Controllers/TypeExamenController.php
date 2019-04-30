<?php

namespace App\Http\Controllers;

use App\DataTables\TypeExamenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTypeExamenRequest;
use App\Http\Requests\UpdateTypeExamenRequest;
use App\Repositories\TypeExamenRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TypeExamenController extends AppBaseController
{
    /** @var  TypeExamenRepository */
    private $typeExamenRepository;

    public function __construct(TypeExamenRepository $typeExamenRepo)
    {
        $this->typeExamenRepository = $typeExamenRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the TypeExamen.
     *
     * @param TypeExamenDataTable $typeExamenDataTable
     * @return Response
     */
    public function index(TypeExamenDataTable $typeExamenDataTable)
    {
        return $typeExamenDataTable->render('type_examens.index');
    }

    /**
     * Show the form for creating a new TypeExamen.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_examens.create');
    }

    /**
     * Store a newly created TypeExamen in storage.
     *
     * @param CreateTypeExamenRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeExamenRequest $request)
    {
        $input = $request->all();

        $typeExamen = $this->typeExamenRepository->create($input);

        Flash::success('Type d\'examen enregistré avec succès.');

        return redirect(route('typeExamens.index'));
    }

    /**
     * Display the specified TypeExamen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeExamen = $this->typeExamenRepository->findWithoutFail($id);

        if (empty($typeExamen)) {
            Flash::error('Type d\'examen non trouvé.');

            return redirect(route('typeExamens.index'));
        }

        return view('type_examens.show')->with('typeExamen', $typeExamen);
    }

    /**
     * Show the form for editing the specified TypeExamen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeExamen = $this->typeExamenRepository->findWithoutFail($id);

        if (empty($typeExamen)) {
            Flash::error('Type d\'examen non trouvé.');

            return redirect(route('typeExamens.index'));
        }

        return view('type_examens.edit')->with('typeExamen', $typeExamen);
    }

    /**
     * Update the specified TypeExamen in storage.
     *
     * @param  int              $id
     * @param UpdateTypeExamenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeExamenRequest $request)
    {
        $typeExamen = $this->typeExamenRepository->findWithoutFail($id);

        if (empty($typeExamen)) {
            Flash::error('Type d\'examen non trouvé.');

            return redirect(route('typeExamens.index'));
        }

        $typeExamen = $this->typeExamenRepository->update($request->all(), $id);

        Flash::success('Type d\'examen mis à jour avec succès.');

        return redirect(route('typeExamens.index'));
    }

    /**
     * Remove the specified TypeExamen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeExamen = $this->typeExamenRepository->findWithoutFail($id);

        if (empty($typeExamen)) {
            Flash::error('Type d\'examen non trouvé.');

            return redirect(route('typeExamens.index'));
        }

        $this->typeExamenRepository->delete($id);

        Flash::success('Type d\'examen supprimé avec succès.');

        return redirect(route('typeExamens.index'));
    }
}
