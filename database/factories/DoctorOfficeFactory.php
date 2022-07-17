<?php

namespace Database\Factories;

use App\Models\DoctorOffice;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorOfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorOffice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->model::STATUS_ACTIVE,
        ];
    }
}
