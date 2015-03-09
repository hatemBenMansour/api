<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    protected $rules = [
        "name" => "required",
        "email" => "required|email",
        "message" => "required"
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            if (Request::isJson()) {
                return Response::json($validator->errors(), 400);
            }
        }
        $name = Input::get('name');
        $email = Input::get('email');
        $content = Input::get('message');
        $data = array(
            'name' => $name,
            'email' => $email,
            'content' => $content
        );
        $subject = "Nouveau E-mail de contact via le Portfolio";
        $to = 'contact@benmansourhatem.com';

        $send = Mail::send('emails.contact', $data, function ($message) use ($to, $subject, $email, $name) {
            $message->from($email, $name);
            $message->to($to)->subject($subject);
        });

        if (Request::isJson()) {
            if ($send) {
                $result['data'] = array('status' => 'success','message' => 'Votre message est envoyé avec succès');
                return Response::json($result);
            } else {
                $result['data'] = array('status' => 'errors','message' => 'Erreur d\'envoi, merci de réessayer');
                return Response::json($result, 400);
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
