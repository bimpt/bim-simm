<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Information extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.navigations.information', [
            'informations' => $this->Information()
        ]);
    }

    public function Information()
    {
        return array(
            ["id" => "heading1", "target" => "collapse1", "show" => "show", "collapsed" => "", "title" => "Tentang Layanan BIM", "description" => "Layanan BIM merupakan aplikasi yang digunakan sebagai pencatatan tema pro yang mendukung penerapan tema di OpenSID.", "link" => ""],
            ["id" => "heading2", "target" => "collapse2", "show" => "", "collapsed" => "collapsed", "title" => "Instalasi", "description" => ".", "link" => ""],
            ["id" => "heading3", "target" => "collapse3", "show" => "", "collapsed" => "collapsed", "title" => "Memperbarui", "description" => ".", "link" => ""],
            ["id" => "heading4", "target" => "collapse4", "show" => "", "collapsed" => "collapsed", "title" => "Rilis", "description" => ".", "link" => ""],
            ["id" => "heading5", "target" => "collapse5", "show" => "", "collapsed" => "collapsed", "title" => "Halaman Administrasi", "description" => ".", "link" => ""],
            ["id" => "heading6", "target" => "collapse6", "show" => "", "collapsed" => "collapsed", "title" => "Dokumentasi", "description" => ".", "link" => ""],
        );
    }
}
