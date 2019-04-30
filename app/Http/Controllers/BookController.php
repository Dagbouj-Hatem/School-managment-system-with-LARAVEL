<?php

namespace App\Http\Controllers;

use App\DataTables\BookDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Repositories\BookRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage; 

class BookController extends AppBaseController
{
    /** @var  BookRepository */
    private $bookRepository;

    public function __construct(BookRepository $bookRepo)
    {
        $this->bookRepository = $bookRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Book.
     *
     * @param BookDataTable $bookDataTable
     * @return Response
     */
    public function index(BookDataTable $bookDataTable)
    {
        return $bookDataTable->render('books.index');
    }

    /**
     * Show the form for creating a new Book.
     *
     * @return Response
     */
    public function create()
    {
        $categories= \App\Categorie::pluck('name','id');
        $levels= \App\Level::pluck('name','id');
        return view('books.create',compact('categories','levels'));
    }

    /**
     * Store a newly created Book in storage.
     *
     * @param CreateBookRequest $request
     *
     * @return Response
     */
    public function store(CreateBookRequest $request)
    {
        $input = $request->all();

        $book = $this->bookRepository->create($input);
        // begin photo section  
        if($request->file('photo'))
        {
            $path = Storage::disk('public')->put('book_photos',$request->file('photo')); 
            $book->fill(['photo'=> asset($path)])->save();
        }
        // end photo section 
        // begin file section  
        if($request->file('file'))
        {
            $path = Storage::disk('public')->put('book_files',$request->file('file')); 
            $book->fill(['file'=> asset($path)])->save();
        }
        // end file section 
        Flash::success('Livre enregistré avec succès.');

        return redirect(route('books.index'));
    }

    /**
     * Display the specified Book.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Livre non trouvé');

            return redirect(route('books.index'));
        }

        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified Book.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Livre non trouvé');

            return redirect(route('books.index'));
        }
         $categories= \App\Categorie::pluck('name','id');
         $levels= \App\Level::pluck('name','id');
        return view('books.edit',compact('categories','levels'))->with('book', $book);
    }

    /**
     * Update the specified Book in storage.
     *
     * @param  int              $id
     * @param UpdateBookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookRequest $request)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Livre non trouvé');

            return redirect(route('books.index'));
        }
         // begin photo section  
        if($request->file('photo'))
        {
            //delete old 
            $exists = Storage::disk('public')->exists('book_photos',$book->photo);

            if($exists)
            {   
                $file = basename($book->photo);  
                Storage::disk('public')->delete('book_photos/'.$file);
            }
        }
         if($request->file('file'))
        {
            //delete old 
             $exists = Storage::disk('public')->exists('book_files',$book->file);

            if($exists)
            {   
                $file = basename($book->file);  
                Storage::disk('public')->delete('book_files/'.$file);
            }
        }
        $book = $this->bookRepository->update($request->all(), $id);
         // begin photo section  
        if($request->file('photo'))
        {
            // upload new
            $path = Storage::disk('public')->put('book_photos',$request->file('photo')); 
            $book->fill(['photo'=> asset($path)])->save();
        }
        // end photo section 
        // begin file section  
        if($request->file('file'))
        {
            
            // upload new
            $path = Storage::disk('public')->put('book_files',$request->file('file')); 
            $book->fill(['file'=> asset($path)])->save();
        }
        // end file section 
        Flash::success('Livre mis à jour avec succès.');

        return redirect(route('books.index'));
    }

    /**
     * Remove the specified Book from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $book = $this->bookRepository->findWithoutFail($id);

        if (empty($book)) {
            Flash::error('Livre non trouvé');

            return redirect(route('books.index'));
        }
          //delete old FILE 
         $exists = Storage::disk('public')->exists('book_files',$book->file);

            if($exists)
            {   
                $file = basename($book->file);  
                Storage::disk('public')->delete('book_files/'.$file);
            }
        // end delete old FILE
        //delete old PHOTO
            $exists = Storage::disk('public')->exists('book_photos',$book->photo);

            if($exists)
            {   
                $file = basename($book->photo);  
                Storage::disk('public')->delete('book_photos/'.$file);
            }
            // DELETE OLD PHOTO
        $this->bookRepository->delete($id);

        Flash::success('Livre supprimé avec succès.');

        return redirect(route('books.index'));
    }
}
