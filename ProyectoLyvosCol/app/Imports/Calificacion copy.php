<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Calificacion implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        return new Calificacion([
            'alumno' => $row['alumno'],
            'materia' => $row['materia'],
            'nota1' => $row['nota1'],
            'nota2' => $row['nota2'],
            'nota3' => $row['nota3'],
            'nota4' => $row['nota4'],
            'nota_final' => $row['nota_final'],

            
        ]);
        
    }
    public function batchSize(): int
    {
        return 4000;
    }

    public function chunkSize(): int
    {
        return 4000;
    }

    public function rules(): array
    {
        return [
            '*.alumno' => [
                'string',
                'required'
            ],
            '*.nota_final' => [
                'numeric',
                'required'
            ]
        ];
    }
}
