<?php

namespace App\Exports;

use App\Models\Criteria;
use Maatwebsite\Excel\Concerns\FromView;
use illuminate\Contracts\View\View;
class ExportCriteria implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $criteria = Criteria::where('user_id', '=', auth()->user()->id)->get();

        return view('criteria-table', ['criteria' => $criteria]);
    }
}
