<?php

namespace App\Http\Controllers\Admin;

use Sdkconsultoria\Core\Controllers\ResourceController;

class PatientController extends ResourceController
{
    protected $model = \App\Models\Patient::class;
}
