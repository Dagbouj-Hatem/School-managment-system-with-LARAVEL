<?php

namespace App\Http\Controllers;

use App\DataTables\ExamenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateExamenRequest;
use App\Http\Requests\UpdateExamenRequest;
use App\Repositories\ExamenRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage;

class ExamenController extends AppBaseController
{
    /** @var  ExamenRepository */
    private $examenRepository;

    public function __construct(ExamenRepository $examenRepo)
    {
        $this->examenRepository = $examenRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Examen.
     *
     * @param ExamenDataTable $examenDataTable
     * @return Response
     */
    public function index(ExamenDataTable $examenDataTable)
    {
        return $examenDataTable->render('examens.index');
    }

    /**
     * Show the form for creating a new Examen.
     *
     * @return Response
     */
    public function create()
    {
        $types= \App\TypeExamen::pluck('name','id');
        $matiers= \App\Matiere::pluck('name','id');
        $classes= \App\Classe::pluck('name','id');
        return view('examens.create',compact('types','matiers','classes'));
    }

    /**
     * Store a newly created Examen in storage.
     *
     * @param CreateExamenRequest $request
     *
     * @return Response
     */
    public function store(CreateExamenRequest $request)
    {
        $input = $request->all();

        $examen = $this->examenRepository->create($input);

        // begin file section  
        if($request->file('file'))
        {
            $path = Storage::disk('public')->put('examens_files',$request->file('file')); 
            $examen->fill(['file'=> asset($path)])->save();
        }
        // end file section 
        Flash::success('Examen enregistré avec succès.');

        return redirect(route('examens.index'));
    }

    /**
     * Display the specified Examen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examen = $this->examenRepository->findWithoutFail($id);

        if (empty($examen)) {
            Flash::error('Examen non trouvé.');

            return redirect(route('examens.index'));
        }

        return view('examens.show')->with('examen', $examen);
    }

    /**
     * Show the form for editing the specified Examen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $examen = $this->examenRepository->findWithoutFail($id);

        if (empty($examen)) {
            Flash::error('Examen non trouvé.');

            return redirect(route('examens.index'));
        }
            $types= \App\TypeExamen::pluck('name','id');
            $matiers= \App\Matiere::pluck('name','id');
            $classes= \App\Classe::pluck('name','id');
        return view('examens.edit',compact('types','matiers','classes'))->with('examen', $examen);
    }

    /**
     * Update the specified Examen in storage.
     *
     * @param  int              $id
     * @param UpdateExamenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExamenRequest $request)
    {
        $examen = $this->examenRepository->findWithoutFail($id);

        if (empty($examen)) {
            Flash::error('Examen non trouvé.');

            return redirect(route('examens.index'));
        }
        if($request->file('file'))
        {
            //delete old 
             $exists = Storage::disk('public')->exists('examens_files',$examen->file);

            if($exists)
            {   
                $file = basename($examen->file);  
                Storage::disk('public')->delete('examens_files/'.$file);
            }
        }
        $examen = $this->examenRepository->update($request->all(), $id);
        // begin file section  
        if($request->file('file'))
        {
            $path = Storage::disk('public')->put('examens_files',$request->file('file')); 
            $examen->fill(['file'=> asset($path)])->save();
        }
        // end file section 
        Flash::success('Examen mis à jour avec succès.');

        return redirect(route('examens.index'));
    }

    /**
     * Remove the specified Examen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examen = $this->examenRepository->findWithoutFail($id);

        if (empty($examen)) {
            Flash::error('Examen non trouvé.');

            return redirect(route('examens.index'));
        }

        //delete old FILE 
         $exists = Storage::disk('public')->exists('examens_files',$examen->file);

            if($exists)
            {   
                $file = basename($examen->file);  
                Storage::disk('public')->delete('examens_files/'.$file);
            }
        // end delete old FILE
        $this->examenRepository->delete($id);

        Flash::success('Examen supprimé avec succès.');

        return redirect(route('examens.index'));
    }
}
