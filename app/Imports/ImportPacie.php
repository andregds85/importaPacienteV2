<?php

namespace App\Imports;

use App\Models\Categorias;
use App\Models\Pacientes;
use App\Pacie;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPacie implements ToModel
{

    public function model(array $row)
    {
        return new Pacientes([
                    
            'categorias_id' => $row[0],
            'macro' => $row[1],     
            'solicitacao' => $row[2],
            'cns' => $row[3],
            'nomedousuario' => $row[4],
            'municipio' => $row[5],
            'datasolicitacao' => $row[6],
            'unidadedesejada' => $row[7],
            'codigo'    => $row[8],
            'observacao1' => $row[9],
            'observacao2' => $row[10],
            'observacao3' => $row[11],
            'observacao4' => $row[12],
            'observacao5' => $row[13],
            'statusSolicitacao' => $row[14],
        ]);
    }
}









