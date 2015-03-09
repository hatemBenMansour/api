<?php
namespace App\Http\Controllers;


use App\Menu;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;


class MenuController extends Controller
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
            $menus['results'] = Menu::with('posts')->get();
            return Response::json($menus);
        } else {
            $menus = Menu::all();
        }
        return View::make('admin.menus.index')->with('menus', $menus);

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

        if ((Request::wantsJson() || Request::isJson())) {
            $menu['results'] = Menu::find($id)->posts()->get();
            return Response::json($menu);
        } else {
            $menu = Menu::find($id);
        }

        return View::make('admin.menus.show')->with('menu', $menu);
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
