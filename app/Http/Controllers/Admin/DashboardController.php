<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $info = [
            'total_pelanggan' => 100,
            'total_pelanggan_hari_ini' => 5,
            'pelanggan_bulan_ini' => 25,
            'pelanggan_bulan_kemarin' => 20,
        ];
        $infopelanggans = $this->infoPelanggan($info);
        return view('pages.admin.dashboard.index', compact('infopelanggans'));
    }

    public function infoPelanggan($info)
    {
        return array(
            ["title" => "Total pelanggan", "desc" => "Desa", "info" => $info['total_pelanggan'], "color" => "bg-info", "icon" => "ion ion-bag", "link" => "/pelanggan"],
            ["title" => "Pelanggan Hari Ini", "desc" => "Desa", "info" => $info['total_pelanggan_hari_ini'], "color" => "bg-success", "icon" => "ion ion-stats-bars", "link" => "/pelanggan"],
            ["title" => "Pelanggan Bulan Ini", "desc" => "Desa", "info" => $info['pelanggan_bulan_ini'], "color" => "bg-warning", "icon" => "ion ion-person-add", "link" => "/pelanggan"],
            ["title" => "Pelanggan Bulan Kemarin", "desc" => "Desa", "info" => $info['pelanggan_bulan_kemarin'], "color" => "bg-danger", "icon" => "ion ion-pie-graph", "link" => "/pelanggan/expired"],
        );
    }
}
