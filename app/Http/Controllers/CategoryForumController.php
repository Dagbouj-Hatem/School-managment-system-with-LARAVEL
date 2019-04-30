<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryForumDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCategoryForumRequest;
use App\Http\Requests\UpdateCategoryForumRequest;
use App\Repositories\CategoryForumRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CategoryForumController extends AppBaseController
{
    /** @var  CategoryForumRepository */
    private $categoryForumRepository;

    public function __construct(CategoryForumRepository $categoryForumRepo)
    {
        $this->categoryForumRepository = $categoryForumRepo;
          $this->middleware('auth');
    }

    /**
     * Display a listing of the CategoryForum.
     *
     * @param CategoryForumDataTable $categoryForumDataTable
     * @return Response
     */
    public function index(CategoryForumDataTable $categoryForumDataTable)
    {
        return $categoryForumDataTable->render('category_forums.index');
    }

    /**
     * Show the form for creating a new CategoryForum.
     *
     * @return Response
     */
    public function create()
    {
        return view('category_forums.create');
    }

    /**
     * Store a newly created CategoryForum in storage.
     *
     * @param CreateCategoryForumRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryForumRequest $request)
    {
        $input = $request->all();

        $categoryForum = $this->categoryForumRepository->create($input);

        Flash::success('Catégorie sauvegardée avec succès.');

        return redirect(route('categoryForums.index'));
    }

    /**
     * Display the specified CategoryForum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoryForum = $this->categoryForumRepository->findWithoutFail($id);

        if (empty($categoryForum)) {
            Flash::error('Catégorie non trouvée.');

            return redirect(route('categoryForums.index'));
        }

        return view('category_forums.show')->with('categoryForum', $categoryForum);
    }

    /**
     * Show the form for editing the specified CategoryForum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoryForum = $this->categoryForumRepository->findWithoutFail($id);

        if (empty($categoryForum)) {
            Flash::error('Catégorie non trouvée.');

            return redirect(route('categoryForums.index'));
        }

        return view('category_forums.edit')->with('categoryForum', $categoryForum);
    }

    /**
     * Update the specified CategoryForum in storage.
     *
     * @param  int              $id
     * @param UpdateCategoryForumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryForumRequest $request)
    {
        $categoryForum = $this->categoryForumRepository->findWithoutFail($id);

        if (empty($categoryForum)) {
            Flash::error('Catégorie non trouvée.');

            return redirect(route('categoryForums.index'));
        }

        $categoryForum = $this->categoryForumRepository->update($request->all(), $id);

        Flash::success('Catégorie mis à jour avec succès.');

        return redirect(route('categoryForums.index'));
    }

    /**
     * Remove the specified CategoryForum from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoryForum = $this->categoryForumRepository->findWithoutFail($id);

        if (empty($categoryForum)) {
            Flash::error('Catégorie non trouvée.');

            return redirect(route('categoryForums.index'));
        }

        $this->categoryForumRepository->delete($id);

        Flash::success('Catégorie supprimée avec succès.');

        return redirect(route('categoryForums.index'));
    }
}
