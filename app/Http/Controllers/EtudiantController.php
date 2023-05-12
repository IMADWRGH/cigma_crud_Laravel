<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_etudiants = Etudiant::all();
        return view('etudiant.index', ['etudiants' => $list_etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etd = new Etudiant();
        $etd->nom = $request->nom;
        $etd->prenom = $request->prenom;
        $etd->note = $request->note;
        $etd->save();
        return redirect('/etudiants');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('etudiant.show', ['etudiant' => Etudiant::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('etudiant.edit', ['etudiant' => Etudiant::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $etd = Etudiant::find($id);
        $etd->nom = $request->nom;
        $etd->prenom = $request->prenom;
        $etd->note = $request->note;
        $etd->save();
        return redirect('/etudiants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $etd = Etudiant::find($id);
        $etd->delete();
        return redirect('/etudiants');
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');

            if ($query != '') {

                $data = Etudiant::table('etudiant')
                    ->where('id', 'like', '%' . $query . '%')
                    ->orWhere('nom', 'like', '%' . $query . '%')
                    ->orWhere('prenom', 'like', '%' . $query . '%')
                    ->orderBy('id', 'desc')
                    ->get();
            } else {
                $data = Etudiant::table('etudiant')
                    ->orderBy('id', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
            } else {
                $output = '
                <tr>
                <td align="center" colspan="5">No Data </td>
                </tr>';
            }
        }
    }
}
