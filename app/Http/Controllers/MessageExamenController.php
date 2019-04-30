<?php

namespace App\Http\Controllers;

use App\DataTables\MessageExamenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMessageExamenRequest;
use App\Http\Requests\UpdateMessageExamenRequest;
use App\Repositories\MessageExamenRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

use App\Repositories\ExamenRepository;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\MessageExamen;

class MessageExamenController extends AppBaseController
{
    /** @var  MessageExamenRepository */
    private $messageExamenRepository;
    /** @var  ExamenRepository */
    private $examenRepository;

    public function __construct(MessageExamenRepository $messageExamenRepo, ExamenRepository $examenRepo)
    {
        $this->messageExamenRepository = $messageExamenRepo;
          $this->examenRepository = $examenRepo;
        $this->middleware('auth');
    }



    public function principal($id)
    {
       $examen = $this->examenRepository->findWithoutFail($id);  
       return view('message_examens.create',compact('examen'));
    }


    /**
     * Display a listing of the MessageExamen.
     *
     * @param MessageExamenDataTable $messageExamenDataTable
     * @return Response
     */
    public function index(MessageExamenDataTable $messageExamenDataTable)
    {
        return $messageExamenDataTable->render('message_examens.index');
    }

    /**
     * Show the form for creating a new MessageExamen.
     *
     * @return Response
     */
    public function create()
    {
        return view('message_examens.create');
    }

    /**
     * Store a newly created MessageExamen in storage.
     *
     * @param CreateMessageExamenRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageExamenRequest $request)
    {
        $user = Auth::user();
        $examen = $this->examenRepository->findWithoutFail($request->examen_id);

        $input = $request->all();

          // create a bookMessage 
        $messageExamen = new MessageExamen();
          $messageExamen->content= $request->content;
            $messageExamen->examen()->associate($examen);
            $messageExamen->user()->associate($user);
        $messageExamen->save(); 
        //$messageExamen = $this->messageExamenRepository->create($input);

        Flash::success('Message enregistré avec succès.');

        //return redirect(route('messageExamens.index'));
         return Redirect::back();
    }

    /**
     * Display the specified MessageExamen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messageExamen = $this->messageExamenRepository->findWithoutFail($id);

        if (empty($messageExamen)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageExamens.index'));
        }

        return view('message_examens.show')->with('messageExamen', $messageExamen);
    }

    /**
     * Show the form for editing the specified MessageExamen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messageExamen = $this->messageExamenRepository->findWithoutFail($id);

        if (empty($messageExamen)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageExamens.index'));
        }

        return view('message_examens.edit')->with('messageExamen', $messageExamen);
    }

    /**
     * Update the specified MessageExamen in storage.
     *
     * @param  int              $id
     * @param UpdateMessageExamenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageExamenRequest $request)
    {
        $messageExamen = $this->messageExamenRepository->findWithoutFail($id);

        if (empty($messageExamen)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageExamens.index'));
        }

        $messageExamen = $this->messageExamenRepository->update($request->all(), $id);

        Flash::success('Message mis à jour avec succès.');

        //return redirect(route('messageExamens.index'));
        return redirect(route('examenmessages',$messageExamen->examen->id));
    }

    /**
     * Remove the specified MessageExamen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messageExamen = $this->messageExamenRepository->findWithoutFail($id);

        if (empty($messageExamen)) {
            Flash::error('Message non trouvé.');

            return redirect(route('messageExamens.index'));
        }

        $this->messageExamenRepository->delete($id);

        Flash::success('Message supprimé avec succès.');

        //return redirect(route('messageExamens.index'));
         return Redirect::back();
    }

        public function like_message($id)
    {
        $messageExamen = $this->messageExamenRepository->findWithoutFail($id);

        if (empty($messageExamen)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $messageExamen->like();

         return Redirect::back();
    }

    public function dislike_message($id)
    {
        $messageExamen = $this->messageExamenRepository->findWithoutFail($id);

        if (empty($messageExamen)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $messageExamen->unlike();

         return Redirect::back();
    }
}
