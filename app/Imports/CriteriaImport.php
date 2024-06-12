<?php

namespace App\Imports;

use App\Models\Criteria;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CriteriaImport implements ToCollection, WithHeadingRow
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(collection $rows)
    {
        foreach ($rows as $row) 
        {   
            Criteria::create([
                'name' => $row['nama'],
                'weight' => $row['bobot'],
                'benefited' => $row['jenis'],
                'user_id' => auth()->user()->id
            ]);
        }
    }
}
