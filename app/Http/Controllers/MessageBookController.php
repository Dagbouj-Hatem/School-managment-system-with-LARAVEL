<?php

namespace App\Http\Controllers;

use App\DataTables\MessageBookDataTable; 
use App\Http\Requests;
use App\Http\Requests\CreateMessageBookRequest;
use App\Http\Requests\UpdateMessageBookRequest;
use App\Repositories\MessageBookRepository;
use App\Repositories\BookRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\MessageBook;

class MessageBookController extends AppBaseController
{
    /** @var  MessageBookRepository */
    private $messageBookRepository;
     /** @var  BookRepository */
    private $bookRepository;

    public function __construct(MessageBookRepository $messageBookRepo , BookRepository $bookRepo)
    {
        $this->messageBookRepository = $messageBookRepo;
        $this->bookRepository = $bookRepo;
        $this->middleware('auth');
    }


    public function principal($id)
    {
       $book = $this->bookRepository->findWithoutFail($id);  
       return view('message_books.create',compact('book'));
    }

    /**
     * Display a listing of the MessageBook.
     *
     * @param MessageBookDataTable $messageBookDataTable
     * @return Response
     */
    public function index(MessageBookDataTable $messageBookDataTable)
    {
        return $messageBookDataTable->render('message_books.index');
    }

    /**
     * Show the form for creating a new MessageBook.
     *
     * @return Response
     */
    public function create()
    {
        return view('message_books.create');
    }

    /**
     * Store a newly created MessageBook in storage.
     *
     * @param CreateMessageBookRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageBookRequest $request)
    {

        $user = Auth::user();
        $book = $this->bookRepository->findWithoutFail($request->book_id);

        $input = $request->all();

        // create a bookMessage 
        $messageBook = new MessageBook();
          $messageBook->content= $request->content;
            $messageBook->book()->associate($book);
            $messageBook->user()->associate($user);
        $messageBook->save(); 
        //$messageBook = $this->messageBookRepository->create($input);

        Flash::success('Message enregistré avec succès.');

        //return redirect(route('messageBooks.index'));
        return Redirect::back();
    }

    /**
     * Display the specified MessageBook.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messageBook = $this->messageBookRepository->findWithoutFail($id);

        if (empty($messageBook)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageBooks.index'));
        }

        return view('message_books.show')->with('messageBook', $messageBook);
    }

    /**
     * Show the form for editing the specified MessageBook.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messageBook = $this->messageBookRepository->findWithoutFail($id);

        if (empty($messageBook)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageBooks.index'));
        }

        return view('message_books.edit')->with('messageBook', $messageBook);
    }

    /**
     * Update the specified MessageBook in storage.
     *
     * @param  int              $id
     * @param UpdateMessageBookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageBookRequest $request)
    {
        $messageBook = $this->messageBookRepository->findWithoutFail($id);

        if (empty($messageBook)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageBooks.index'));
        }

        $messageBook = $this->messageBookRepository->update($request->all(), $id);

        Flash::success('Message mis à jour avec succès.');

        //return redirect(route('messageBooks.index'));
        return redirect(route('bookmessages',$messageBook->book->id));
    }

    /**
     * Remove the specified MessageBook from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messageBook = $this->messageBookRepository->findWithoutFail($id);

        if (empty($messageBook)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageBooks.index'));
        }

        $this->messageBookRepository->delete($id);

        Flash::success('Message supprimé avec succès.');

        return Redirect::back();
    }


    public function like_message($id)
    {
        $messageBook = $this->messageBookRepository->findWithoutFail($id);

        if (empty($messageBook)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $messageBook->like();

         return Redirect::back();
    }

    public function dislike_message($id)
    {
        $messageBook = $this->messageBookRepository->findWithoutFail($id);

        if (empty($messageBook)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $messageBook->unlike();

         return Redirect::back();
    }
}
