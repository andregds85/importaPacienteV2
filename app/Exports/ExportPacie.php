<?php

namespace App\Exports;

use App\Models\Pacientes;

use App\pacie;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPacie implements FromCollection
{
    public function collection()
    {
    /*Pacientes::all();*/
    /*
    return  Pacientes::where('macro',2)->get(); */
    }
}
