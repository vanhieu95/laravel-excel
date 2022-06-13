<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UserController extends Controller
{
    public function export(): BinaryFileResponse
    {
        return (new UsersExport())->download('users.xlsx', Excel::XLSX);
    }
}
