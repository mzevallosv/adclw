<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document' => 'Documento Nacional de Identidad',
            'sigla' => 'DNI'
        ];
        return [
            'document' => 'PASAPORTE',
            'sigla' => 'PASS'
        ];
        return [
            'document' => 'Permiso Temporal de Permanencia',
            'sigla' => 'PTP'
        ];
        return [
            'document' => 'CARNE DE EXTRANJERIA',
            'sigla' => 'CE'
        ];
        return [
            'document' => 'Otro',
            'sigla' => 'OTR'
        ];
    }
}
