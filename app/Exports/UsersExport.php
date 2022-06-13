<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class UsersExport implements FromView
{
    use Exportable;

    /**
     * @return Collection
     */
//    public function collection(): Collection
//    {
//        return User::all();
//    }

//    public function headings(): array
//    {
//        return [
//            ['First row', 'First row', 'First row'],
//            ['Second row'],
//        ];
//    }

    /**
     * @return EloquentBuilder
     */
//    public function query(): EloquentBuilder
//    {
//        return User::query()->whereDate('created_at', today());
//    }

    /**
     * @param User $user
     * @return array
     */
//    public function map($user): array
//    {
//        return [
//            $user->email,
//            $user->name,
//            $user->created_at->format('Y-m-d')
//        ];
//    }

    /**
     * @return View
     */
    public function view(): View
    {
        $users = User::query()->whereDate('created_at', today())->get();
        $groups = [$users, $users];
        return view('exports.users', [
           'groups' => $groups
        ]);
    }
}
