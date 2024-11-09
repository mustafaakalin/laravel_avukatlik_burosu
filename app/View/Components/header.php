<?php

namespace App\View\Components;

use Closure;
use App\Models\SiteSettings;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public $siteSettings;
    

    public function __construct()
    {
        $this->siteSettings = SiteSettings::all();
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
                            dd($this->siteSettings); // Debugging purposes
                           
    // return view('components.header');
    }
    


}
