<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    // Obtener todas las notas con paginación
    public function index(Request $request)
    {
        return Nota::paginate(6);
    }

    // Crear una nueva nota
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
        ]);

        return Nota::create($request->all());
    }

    // Actualizar una nota existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'string|max:255',
            'texto' => 'string',
        ]);

        $nota = Nota::findOrFail($id);
        $nota->update($request->all());

        return $nota;
    }

    // Eliminar una nota
    public function destroy($id)
    {
        Nota::findOrFail($id)->delete();
        return response()->json(['mensaje' => 'Nota eliminada']);
    }
}
