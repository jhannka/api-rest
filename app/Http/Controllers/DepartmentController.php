<?php

namespace App\Http\Controllers;

use App\Repository\BaseController;
use App\Repository\Department\DepartmentRepo;

class DepartmentController extends BaseController
{
    public function __construct(DepartmentRepo $model)
    {
        parent::__construct($model);
    }
}
