<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class FunctionsController extends Controller
{
    public $deleteMore = "Hapus";
    public $submitCreate = "Tambah";
    public $submitEdit = "Ubah";
    public $resetCreate = "Kosongkan";
    public $resetEdit = "Kembalikan";
    public $cetak = "Cetak";

    public function viewCrud()
    {
        $view = new ViewCrudControllers();
        return $view->layout();
    }

    public function index($viewPage, $title, $table, $modul, $datas, $options)
    {
        return view($this->viewCrud() . '.index', [
            'viewPage' => $viewPage,
            'title' => $title,
            'table' => $table,
            'modul' => $modul,
            'datas' => $datas,
            'delete' => $this->deleteMore,
            'reset' => $this->resetCreate,
            'submit' => $this->submitCreate,
            'cetak' => $this->cetak,
            'options' => $options,
        ]);
    }

    public function create($viewPage, $title, $table, $modul, $datas, $data)
    {
        return view($this->viewCrud() . '.create', [
            'viewPage' => $viewPage,
            'title' => $title,
            'table' => $table,
            'modul' => $modul,
            'reset' => $this->resetCreate,
            'submit' => $this->submitCreate,
            'datas' => $datas,
            'data' => $data,
        ]);
    }

    public function edit($viewPage, $title, $table, $modul, $datas, $data)
    {
        return view($this->viewCrud() . '.edit', [
            'viewPage' => $viewPage,
            'title' => $title,
            'table' => $table,
            'modul' => $modul,
            'reset' => $this->resetEdit,
            'submit' => $this->submitEdit,
            'datas' => $datas,
            'data' => $data,
        ]);
    }

    public function downloadPdf($layout, $filename, $size_paper, $format_paper, $data)
    {
        $pdf = Pdf::loadView($layout, $data);
        $pdf->setPaper($size_paper, $format_paper);
        return $pdf->stream($filename . '.pdf');
    }
}
