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
            'number' => $row[2],
            'speed-popc-fiber-1' => $row[15],
            'speed-popc-fiber-2' => $row[16],
            'speed-popc-fiber-3' => $row[17],
            'speed-popc-fiber-4' => $row[18],
            'speed-popc-fiber-5' => $row[19],
            'price-popc-fiber-1' => $row[20],
            'price-popc-fiber-2' => $row[21],
            'price-popc-fiber-3' => $row[22],
            'price-popc-fiber-4' => $row[23],
            'price-popc-fiber-5' => $row[24],
            'name-popc-fiber-1' => $row[25],
            'name-popc-fiber-2' => $row[26],
            'name-popc-fiber-3' => $row[27],
            'name-popc-fiber-4' => $row[28],
            'name-popc-fiber-5' => $row[29],

            'speed-popc-radio-1' => $row[30],
            'speed-popc-radio-2' => $row[31],
            'speed-popc-radio-3' => $row[32],
            'speed-popc-radio-4' => $row[33],
            'speed-popc-radio-5' => $row[34],
            'price-popc-radio-1' => $row[35],
            'price-popc-radio-2' => $row[36],
            'price-popc-radio-3' => $row[37],
            'price-popc-radio-4' => $row[38],
            'price-popc-radio-5' => $row[39],
            'name-popc-radio-1' => $row[40],
            'name-popc-radio-2' => $row[41],
            'name-popc-radio-3' => $row[42],
            'name-popc-radio-4' => $row[43],
            'name-popc-radio-5' => $row[44],

            'speed-htk-radio-1' => $row[45],
            'speed-htk-radio-2' => $row[46],
            'speed-htk-radio-3' => $row[47],
            'speed-htk-radio-4' => $row[48],
            'speed-htk-radio-5' => $row[49],
            'price-htk-radio-1' => $row[50],
            'price-htk-radio-2' => $row[51],
            'price-htk-radio-3' => $row[52],
            'price-htk-radio-4' => $row[53],
            'price-htk-radio-5' => $row[54],
            'name-htk-radio-1' => $row[55],
            'name-htk-radio-2' => $row[56],
            'name-htk-radio-3' => $row[57],
            'name-htk-radio-4' => $row[58],
            'name-htk-radio-5' => $row[59],

            'speed-htk-fiber-1' => $row[60],
            'speed-htk-fiber-2' => $row[61],
            'speed-htk-fiber-3' => $row[62],
            'speed-htk-fiber-4' => $row[63],
            'speed-htk-fiber-5' => $row[64],
            'price-htk-fiber-1' => $row[65],
            'price-htk-fiber-2' => $row[66],
            'price-htk-fiber-3' => $row[67],
            'price-htk-fiber-4' => $row[68],
            'price-htk-fiber-5' => $row[69],
            'name-htk-fiber-1' => $row[70],
            'name-htk-fiber-2' => $row[71],
            'name-htk-fiber-3' => $row[72],
            'name-htk-fiber-4' => $row[73],
            'name-htk-fiber-5' => $row[74],

            'chanels-dvbc-1' => $row[75],
            'chanels-dvbc-2' => $row[76],
            'chanels-dvbc-3' => $row[77],
            'chanels-dvbc-4' => $row[78],
            'chanels-dvbc-5' => $row[79],
            'price-dvbc-1' => $row[80],
            'price-dvbc-2' => $row[81],
            'price-dvbc-3' => $row[82],
            'price-dvbc-4' => $row[83],
            'price-dvbc-5' => $row[84],
            'name-dvbc-1' => $row[85],
            'name-dvbc-2' => $row[86],
            'name-dvbc-3' => $row[87],
            'name-dvbc-4' => $row[88],
            'name-dvbc-5' => $row[89],

            'chanels-iptv-1' => $row[90],
            'chanels-iptv-2' => $row[91],
            'chanels-iptv-3' => $row[92],
            'chanels-iptv-4' => $row[93],
            'chanels-iptv-5' => $row[94],
            'price-iptv-1' => $row[95],
            'price-iptv-2' => $row[96],
            'price-iptv-3' => $row[97],
            'price-iptv-4' => $row[98],
            'price-iptv-5' => $row[99],
            'name-iptv-1' => $row[100],
            'name-iptv-2' => $row[101],
            'name-iptv-3' => $row[102],
            'name-iptv-4' => $row[103],
            'name-iptv-5' => $row[104],
        ]);
   }
}
