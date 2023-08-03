<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function show()
    {
        $project = DB::table('projects')
            ->join('client', 'projects.client_id', '=', 'client.id')
            ->select('projects.*', 'client.company as client_name')->get();
        return view('frontend/projects/project',['project'=>$project]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project= DB::table('projects')->get();
        return view('frontend/projects/createProject',['project'=>$project]);
    }

    public function create(){
        $client = DB::table('client')->get();
        return view('frontend/projects/createProject', ['client' => $client]);
    }

    public function store(Request $req)
    {
        DB::table('projects')->insert([
            'title'=>$req->title,
            'description'=>$req->description,
            'deadline'=>$req->deadline,
            'client_id'=>$req->client_id,
            'status'=>$req->status,
        ]);
      //  return view('home',['std'=>$req])->with('status','Added Successfully!');
        return redirect(route('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=DB::table('projects')->find($id);
        return view('frontend/projects/editProject',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $project=DB::table('projects')->where('id',$id)->update([
            'title'=>$req->title,
            'description'=>$req->description,
            'deadline'=>$req->deadline,
            'client_id'=>$req->client_id,
            'status'=>$req->status,
        ]);
        return redirect(route('project'))->with('status','Updation Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('projects')->where('id',$id)->delete();
        return redirect(route('project'))->with('status','Deleted Successfully!');
    }
}
