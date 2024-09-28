<?php

namespace App\Repository\Department;

use App\Repository\BaseRepo;
use App\Models\Department;

class DepartmentRepo extends BaseRepo
{

    public function getModel()
    {
        return new Department();
    }
}
