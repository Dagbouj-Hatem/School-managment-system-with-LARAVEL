<?php

namespace App\Http\Controllers;

use App\DataTables\MatiereDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMatiereRequest;
use App\Http\Requests\UpdateMatiereRequest;
use App\Repositories\MatiereRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MatiereController extends AppBaseController
{
    /** @var  MatiereRepository */
    private $matiereRepository;

    public function __construct(MatiereRepository $matiereRepo)
    {
        $this->matiereRepository = $matiereRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Matiere.
     *
     * @param MatiereDataTable $matiereDataTable
     * @return Response
     */
    public function index(MatiereDataTable $matiereDataTable)
    {
        return $matiereDataTable->render('matieres.index');
    }

    /**
     * Show the form for creating a new Matiere.
     *
     * @return Response
     */
    public function create()
    {
        return view('matieres.create');
    }

    /**
     * Store a newly created Matiere in storage.
     *
     * @param CreateMatiereRequest $request
     *
     * @return Response
     */
    public function store(CreateMatiereRequest $request)
    {
        $input = $request->all();

        $matiere = $this->matiereRepository->create($input);

        Flash::success('Matière enregistré avec succès.');

        return redirect(route('matieres.index'));
    }

    /**
     * Display the specified Matiere.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matiere = $this->matiereRepository->findWithoutFail($id);

        if (empty($matiere)) {
            Flash::error('Matière non trouvé.');

            return redirect(route('matieres.index'));
        }

        return view('matieres.show')->with('matiere', $matiere);
    }

    /**
     * Show the form for editing the specified Matiere.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matiere = $this->matiereRepository->findWithoutFail($id);

        if (empty($matiere)) {
            Flash::error('Matière non trouvé.');

            return redirect(route('matieres.index'));
        }

        return view('matieres.edit')->with('matiere', $matiere);
    }

    /**
     * Update the specified Matiere in storage.
     *
     * @param  int              $id
     * @param UpdateMatiereRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMatiereRequest $request)
    {
        $matiere = $this->matiereRepository->findWithoutFail($id);

        if (empty($matiere)) {
            Flash::error('Matière non trouvé.');

            return redirect(route('matieres.index'));
        }

        $matiere = $this->matiereRepository->update($request->all(), $id);

        Flash::success('Matière a été mis à jour avec succès.');

        return redirect(route('matieres.index'));
    }

    /**
     * Remove the specified Matiere from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matiere = $this->matiereRepository->findWithoutFail($id);

        if (empty($matiere)) {
            Flash::error('Matière non trouvé.');

            return redirect(route('matieres.index'));
        }

        $this->matiereRepository->delete($id);

        Flash::success('Matière supprimé avec succès.');

        return redirect(route('matieres.index'));
    }
}
