<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    //

    public function index(){
        $jadwal =  Jadwal::all();
        return view("jadwal",compact("jadwal"));
    }

    public function create(){

        return view("jadwal_create");
    }

    public function createPost(Request $req){

        $req->validate([
            'tim'=> 'required',
            'tim_lawan'=> 'required',
            'jadwal_mulai'=> 'required',
            'jadwal_selesai'=> 'required',
            'studion'=> 'required',
        ]);
        
        $jadwal = new Jadwal;
        $jadwal->tim = $req->tim;
        $jadwal->tim_lawan = $req->tim_lawan;
        $jadwal->jadwal_mulai = $req->jadwal_mulai;
        $jadwal->jadwal_selesai = $req->jadwal_selesai;
        $jadwal->studion = $req->studion;
        $jadwal->save();

        return redirect("/")->with("success", "Data Successfully Added");
    }

    public function update($id){
        $jadwal = Jadwal::find($id);
        return view("jadwal_update",compact("jadwal"));
    }

    public function updatePost(Request $req,$id){

        $req->validate([
            'tim'=> 'required',
            'tim_lawan'=> 'required',
            'jadwal_mulai'=> 'required',
            'jadwal_selesai'=> 'required',
            'studion'=> 'required',
        ]);
        
        $jadwal = Jadwal::find($id);
        $jadwal->skor_tim = $req->skor_tim;
        $jadwal->skor_lawan = $req->skor_lawan;

        $jadwal->tim = $req->tim;
        $jadwal->tim_lawan = $req->tim_lawan;
        $jadwal->jadwal_mulai = $req->jadwal_mulai;
        $jadwal->jadwal_selesai = $req->jadwal_selesai;
        $jadwal->studion = $req->studion;
        $jadwal->save();

        return redirect("/")->with("success", "Data Successfully Edit");
    }


    public function delete($id){
        if(Jadwal::find($id)){
            Jadwal::find($id)->delete();
            return redirect("/")->with("success", "Data Successfully Deleted");

        }else{
            return redirect("/")->with("success", "Data NotFound");
        }

    }
}
