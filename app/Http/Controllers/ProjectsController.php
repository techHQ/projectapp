<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){
            
        $projects = Project::where('user_id',Auth::user()->id)->get();
        return view('projects.index',['projects'=> $projects]);

        }
         
       return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id = null)
    {
        if($company_id == null){
            $companies = Company::where('user_id',Auth::user()->id)->get();
            
        }elseif($company_id !== null){
            $companies = null;
        } 
        return view('projects.create' , ['company_id'=>$company_id,'companies'=>$companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
           
           
            $project = Project::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'company_id'=>$request->input('company_id'),
            'days'=>$request->input('days'),
            'user_id'=> Auth::user()->id
            ]);
           
            if($Project){
             return redirect()->route('projects.show',['project'=>$project->id])
                              ->with('success','Project created successfully');
            }

             
            }
            return back()->withInput()->with('error','Error creating a new Project please login to proceed');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //first method
        // $Project = Project::where('id',$Project->id)->first();

        //second method 
        $project = Project::find($project->id);
        
        return view('projects.show',['project'=> $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $Project)
    {
        //
            
       $project = Project::find($Project->id);

       return view('projects.edit',['project'=> $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $Project)
    {
        //update
        $projectupdate = Project::where('id', $project->id)
                                  ->update([
                                    'name'=>$request->input('name'),
                                    'description'=>$request->input('description')
                                   ]);
            
        //if successful

        if($projectupdate){

            return redirect()->route('projects.show',['project'=>$project->id])
                             ->with('success','Project Updated Succcessfully');
        }
        //if fails
        return back()->withImput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $Project)
    {

         //
        $findproject = Project::find($Project->id);
        if($findproject){
            $findproject->delete();
            return redirect()->route('projects.index')
                             ->with('success','Project successfully deleted');

        }
        return back()->withInput()->with('error','Project can not be deleted');
    } 
}
