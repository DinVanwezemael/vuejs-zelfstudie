<?php


namespace app\Http\Controllers;

use app\Project;

class ProjectsController extends Controller{


    public function create(){
        return view('projects.create', [
            'projects' => Project::all()
        ]);
    }

    public function store(){


        $this->validate(request(), [
            'name' => 'required',
            'discription' => 'required'
        ]);

        Project::forceCreate([
            'name' => request('name'),
            "description" => request('description')
        ]);

        return ['message' => 'Project created!'];

}
}

?>