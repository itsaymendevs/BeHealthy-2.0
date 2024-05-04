<?php

namespace App\Livewire\Website\Components;

use App\Models\Profile;
use Livewire\Component;

class Navbar extends Component
{

    public function render()
    {


        // :: dependencies
        $profile = Profile::first();


        return view('livewire.website.components.navbar', compact('profile'));

    } // end function

} // end class
