<?php

namespace App\Http\Controllers;

use App\DataTables\SujetForumDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSujetForumRequest;
use App\Http\Requests\UpdateSujetForumRequest;
use App\Repositories\SujetForumRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SujetForumController extends AppBaseController
{
    /** @var  SujetForumRepository */
    private $sujetForumRepository;

    public function __construct(SujetForumRepository $sujetForumRepo)
    {
        $this->sujetForumRepository = $sujetForumRepo;
         $this->middleware('auth');
    }

    /**
     * Display a listing of the SujetForum.
     *
     * @param SujetForumDataTable $sujetForumDataTable
     * @return Response
     */
    public function index(SujetForumDataTable $sujetForumDataTable)
    {
        return $sujetForumDataTable->render('sujet_forums.index');
    }

    /**
     * Show the form for creating a new SujetForum.
     *
     * @return Response
     */
    public function create()
    {
        $categories= \App\CategoryForum::pluck('name','id');
        return view('sujet_forums.create', compact('categories'));
    }

    /**
     * Store a newly created SujetForum in storage.
     *
     * @param CreateSujetForumRequest $request
     *
     * @return Response
     */
    public function store(CreateSujetForumRequest $request)
    {
        $input = $request->all();

        $sujetForum = $this->sujetForumRepository->create($input);

        Flash::success('Sujet sauvegardée avec succès.');

        return redirect(route('sujetForums.index'));
    }

    /**
     * Display the specified SujetForum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sujetForum = $this->sujetForumRepository->findWithoutFail($id);

        if (empty($sujetForum)) {
            Flash::error('Sujet non trouvée.');

            return redirect(route('sujetForums.index'));
        }

        return view('sujet_forums.show')->with('sujetForum', $sujetForum);
    }

    /**
     * Show the form for editing the specified SujetForum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sujetForum = $this->sujetForumRepository->findWithoutFail($id);

        if (empty($sujetForum)) {
            Flash::error('Sujet non trouvée.');

            return redirect(route('sujetForums.index'));
        }
         $categories= \App\CategoryForum::pluck('name','id');
        return view('sujet_forums.edit', compact('categories'))->with('sujetForum', $sujetForum);
    }

    /**
     * Update the specified SujetForum in storage.
     *
     * @param  int              $id
     * @param UpdateSujetForumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSujetForumRequest $request)
    {
        $sujetForum = $this->sujetForumRepository->findWithoutFail($id);

        if (empty($sujetForum)) {
            Flash::error('Sujet non trouvée.');

            return redirect(route('sujetForums.index'));
        }

        $sujetForum = $this->sujetForumRepository->update($request->all(), $id);

        Flash::success('Sujet mis à jour avec succès.');

        return redirect(route('sujetForums.index'));
    }

    /**
     * Remove the specified SujetForum from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sujetForum = $this->sujetForumRepository->findWithoutFail($id);

        if (empty($sujetForum)) {
            Flash::error('Sujet non trouvée.');

            return redirect(route('sujetForums.index'));
        }

        $this->sujetForumRepository->delete($id);

        Flash::success('Sujet supprimée avec succès.');

        return redirect(route('sujetForums.index'));
    }
}
