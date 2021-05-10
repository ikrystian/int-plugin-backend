<?php

namespace App\Imports;

use App\Models\address;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AddressImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        return new address([
            'city' => $row[0],
            'street' => $row[1],
            'number' => $row[2]
        ]);
    }
}
