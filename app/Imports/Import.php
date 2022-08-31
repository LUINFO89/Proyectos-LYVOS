<?php

namespace App\Imports;
use App\Models\Category;
use App\Models\Notas;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Import implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
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
        return new Notas([
            /*'name' => $row['producto'],
            'description' => $row['descripcion'],
            'price' => $row['precio'],
            'quantity_left' => $row['en_inventario'],
            'category_id' => 1,
            //'category_id' => $this->categories[$row['categoria']]*/

            'nombre_estudiante' => $row['nombre'],
            'email_estudiante' => $row['email'],
            'nota1'=>$row['nota1'],   
            'nota2'=>$row['nota2'],
            'nota3'=>$row['nota3'],
            'nota4'=>$row['nota4'],
            'nota_final'=>$row['nota_final'],
            'estado'=>1,
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
            '*.en_inventario' => [
                'integer',
                'required'
            ],
            '*.precio' => [
                'numeric',
                'required'
            ]
        ];
    }
}
