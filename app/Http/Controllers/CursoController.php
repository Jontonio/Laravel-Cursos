<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view("cursos.index", compact('cursos'));
    }

    public function create(){
        return view("cursos.create");
    }

    public function show($slug){

        $curso = Curso::where("slug",$slug)->first();

        if(!$curso){
            return view("404.NotFound",compact('curso'));
        }

        return view("cursos.show", compact('curso'));
    }

    // Archivos request para validación personalizada
    public function store(StoreCurso $request){

        $curso = Curso::create([
            'name'=> $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description'=>$request->description,
            'category'=>$request->category
        ]);

//        $curso = Curso::create($request->all());
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy($id){
        Curso::destroy($id);
        $cursos = Curso::orderBy('id','desc')->paginate();
        return redirect()->route('cursos.index',compact('cursos'));
    }

    public function  getForUpdate($slug){
        $curso = Curso::where("slug",$slug)->first();
        return view('cursos.editCurso',compact('curso'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'category' => ['required']
        ]);

        $curso = Curso::find($id);
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();

        return view('cursos.show',compact('curso'));
    }
}
