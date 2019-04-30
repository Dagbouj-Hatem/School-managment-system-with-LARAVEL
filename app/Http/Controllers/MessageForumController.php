<?php

namespace App\Http\Controllers;

use App\DataTables\MessageForumDataTable;
use App\Http\Requests; 
use App\Http\Requests\CreateMessageForumRequest;
use App\Http\Requests\UpdateMessageForumRequest;
use App\Repositories\MessageForumRepository;
use App\Repositories\SujetForumRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Auth;
use Redirect;
use \App\MessageForum;
class MessageForumController extends AppBaseController
{
    /** @var  MessageForumRepository */
    private $messageForumRepository;
    /** @var  SujetForumRepository */
    private $sujetForumRepository;

    public function __construct(MessageForumRepository $messageForumRepo, SujetForumRepository $sujetForumRepo)
    {
        $this->messageForumRepository = $messageForumRepo;
        $this->sujetForumRepository = $sujetForumRepo;
        $this->middleware('auth');
    }




    public function principal($id)
    {
       $sujet = $this->sujetForumRepository->findWithoutFail($id); 
       return view('message_forums.create',compact('sujet'));
    }
    /**
     * Display a listing of the MessageForum.
     *
     * @param MessageForumDataTable $messageForumDataTable
     * @return Response
     */
    public function index(MessageForumDataTable $messageForumDataTable)
    {
        return $messageForumDataTable->render('message_forums.index');
    }

    /**
     * Show the form for creating a new MessageForum.
     *
     * @return Response
     */
    public function create()
    {
        return view('message_forums.create');
    }

    /**
     * Store a newly created MessageForum in storage.
     *
     * @param CreateMessageForumRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageForumRequest $request)
    {

        $user = Auth::user();
        $sujet = $this->sujetForumRepository->findWithoutFail($request->sujet_forums_id);

        // create a MessageForum object 
        $message = new MessageForum();
            $message->content= $request->content;
            $message->sujet()->associate($sujet);
            $message->user()->associate($user);
        $message->save(); 

        Flash::success('Message enregistré avec succès.');
        return Redirect::back();
    }

    /**
     * Display the specified MessageForum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $messageForum = $this->messageForumRepository->findWithoutFail($id);

        if (empty($messageForum)) {
            Flash::error('Message non trouvé.');

            return redirect(route('sujetForums.index'));
        }

        return view('message_forums.show')->with('messageForum', $messageForum);
    }

    /**
     * Show the form for editing the specified MessageForum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $messageForum = $this->messageForumRepository->findWithoutFail($id);

        if (empty($messageForum)) {
            Flash::error('Message non trouvé.');

            return redirect(route('sujetForums.index'));
        }

        return view('message_forums.edit')->with('messageForum', $messageForum);
    }

    /**
     * Update the specified MessageForum in storage.
     *
     * @param  int              $id
     * @param UpdateMessageForumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageForumRequest $request)
    {
        $message = $this->messageForumRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message non trouvé.');

            return redirect(route('sujetForums.index'));
        }

         $message->content= $request->content;
         $message->save(); 
        
        Flash::success('Message mis à jour avec succès.');

        return redirect(route('messages',$message->sujet->id));
    }

    /**
     * Remove the specified MessageForum from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $messageForum = $this->messageForumRepository->findWithoutFail($id);

        if (empty($messageForum)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $this->messageForumRepository->delete($id);

        Flash::success('Message supprimé avec succès.');

         return Redirect::back();
    }

    public function like_message($id)
    {
        $messageForum = $this->messageForumRepository->findWithoutFail($id);

        if (empty($messageForum)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $messageForum->like();

         return Redirect::back();
    }

    public function dislike_message($id)
    {
        $messageForum = $this->messageForumRepository->findWithoutFail($id);

        if (empty($messageForum)) {
            Flash::error('Message non trouvé.');

            return Redirect::back();
        }

        $messageForum->unlike();

         return Redirect::back();
    }

}
