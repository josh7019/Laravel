<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\News;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList=News::all();
        $color_class=["success","active","info","warning","danger"];
        return view("home.index",compact('newsList','color_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ok=='cancel'){
            return redirect('/news');
        }
        $news=new News();
        $news->title=$request->title;
        $news->content=$request->content;
        $news->save();
        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=News::find($id);
        return view('news.detail',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        // dd($news);
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->ok=='cancel'){
            return redirect('/news');
            // return 'cancel';
        }
        $news=News::find($id);
        $news->title=$request->title;
        $news->content=$request->content;
        $news->save();
        // dd($request);
        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::find($id);
        return view('news.delete',compact('news'));
    }

    public function confirmDelete(Request $request,$id){
        if($request->ok=='cancel'){
            return redirect('/news');
        }
        $news=News::find($id);
        $news->delete();
        return redirect('/news');
    }


}
