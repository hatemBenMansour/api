<?php namespace App\Http\Controllers;


use App\Category;
use App\Competence;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;


class CompetenceController extends Controller
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
            $competences['results'] = Category::with('competences')->get();
            return Response::json($competences);
        } else {
            $competences = Competence::all();
        }
       // dd(env('APP_KEY'));
        return View::make('admin.competences.index')->with('competences', $competences);
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
