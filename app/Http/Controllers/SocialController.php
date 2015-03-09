<?php namespace App\Http\Controllers;


use App\Social;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;


class SocialController extends Controller
{

    public function __construct()
    {
        if (!Request::isJson() && !Request::wantsJson()) {
            $this->middleware('auth');
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if ((Request::wantsJson() || Request::isJson())) {
            $socials['results'] = Social::all();
            return Response::json($socials);
        } else {
            $socials = Social::all();
        }

        return View::make('admin.socials.index')->with('socials', $socials);
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
        //
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
