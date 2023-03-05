<?php

namespace App\View\Components;

use App\Http\Controllers\Helpers\ImageController;
use Illuminate\View\Component;

class MainLayout extends Component
{
    public $title;
    public $aplikasi;
    public $template;

    public $styles = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null)
    {
        $this->title = $title ?? "Dasbor | " . env('APP_NAME');
        $this->aplikasi = new ImageController();
        $this->template = 'layouts.templates.adminlte';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view($this->template . ' .main', [
            'favicon' => $this->aplikasi->imageApplication('favicon'),
        ]);
    }
}
