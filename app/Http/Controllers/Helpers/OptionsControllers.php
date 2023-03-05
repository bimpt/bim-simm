<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;

class OptionsControllers extends Controller
{
    public function bulan()
    {
        return array(
            ['key' => '1', 'value' => 'Januari'],
            ['key' => '2', 'value' => 'Februari'],
            ['key' => '3', 'value' => 'Maret'],
            ['key' => '4', 'value' => 'April'],
            ['key' => '5', 'value' => 'Mei'],
            ['key' => '6', 'value' => 'Juni'],
            ['key' => '7', 'value' => 'Juli'],
            ['key' => '8', 'value' => 'Agustus'],
            ['key' => '9', 'value' => 'September'],
            ['key' => '10', 'value' => 'Oktober'],
            ['key' => '11', 'value' => 'Nopember'],
            ['key' => '12', 'value' => 'Desember'],
        );
    }

    public function status_aktif()
    {
        return array(
            ['key' => 1, 'value' => 'Non Aktif'],
            ['key' => 2, 'value' => 'Aktif'],
        );
    }
}
