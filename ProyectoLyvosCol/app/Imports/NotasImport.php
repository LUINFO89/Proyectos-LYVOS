<?php

namespace App\Imports;

use App\Models\Nota;
use App\Imports\NotasImport;
use Maatwebsite\Excel\Concerns\ToModel;


class NotasImport implements ToModel
{
    public function model(array $row)
    {
        return new Nota([
            'id' => $row[0],
            'nombre_estudiante' => $row[1],
            'id_identidad_alumno'=>$row[2],
            'email_estudiante' => $row[6],
            'nota1'=>$row[7],
            'nota2'=>$row[8],
            'nota3'=>$row[9],
            'nota4'=>$row[10],
            'nota_final'=>$row[11],
            'estado'=>$row[12],
            

        ]);
    }
}





