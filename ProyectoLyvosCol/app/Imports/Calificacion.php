<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use App\Models\Calificacione;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Calificacion implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    private $categories;

    public function __construct()
    {
        $this->categories = Category::pluck('id', 'name');
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Calificacione([
            'id_identidad_alumno'=> $row['identidadalumno'],
            'alumno' => $row['alumno'],
            'id_asignatura_estudiante'=> $row['idasignatura'],
            'materia' => $row['materia'],
            'nota1' => $row['nota1'],
            'nota2' => $row['nota2'],
            'nota3' => $row['nota3'],
            'nota4' => $row['nota4'],
            'nota_final' => $row['nota_final'],

            'id_curso_estudiante'=> $row['idcurso'],

            
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
            ]
            
        ];
    }
}
