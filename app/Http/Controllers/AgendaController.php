<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\User;
use App\Models\Groups;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\title;



class AgendaController extends Controller
{
    public function history()
    {

        $userId = Auth::id();

        $agendas = DB::table('users')
        ->join('agenda', 'agenda.user_id', '=', 'users.id')->get()
        ->where('user_id', $userId);
        return view('history', ['agendas' => $agendas]);
    }

     public function store(Request $request)
    {

        $agenda = Agenda::create($request->all());

        $agenda -> save();

        return redirect('agenda');
    }

    public function index()
    {
        return view('agenda');
    }

    // public function agenda(Request $request) {
    //     $agendagroup = Groups::with('user')->get();

    //     $agenda= User::all();
    //     dd($agendagroup);
    //     return view('agenda', compact( 'agenda', 'agendagroup'));
    // }

    public function edit(Request $request, $id) {
        $agendas = Agenda::where('id',$id)->firstOrFail();

    }

    public function update(Request $request, $id) {
        $agendas = Agenda::where('id', $id)->firstOrFail();
            $agendas->name = $request->name;
            $agendas->group_name = $request->group_name;
            $agendas->waktu = $request->waktu;
            $agendas->tanggal = $request->tanggal;
            $agendas->kegiatan = $request->kegiatan;
        $agendas->save();

        return redirect('history');
    }

    public function destroy($id) {
        $agendas = Agenda::where('id',$id)->firstOrFail();
        $agendas->delete();
        return back();
    }
}
