<?php

namespace App\Http\Livewire\Admin\Accommodation;

use App\Models\Admin\Accommodation;
use Livewire\Component;

class Create extends Component
{

    public $title, $details, $price;

    // protected $rules = [
    //     'title' => 'required|string',
    //     'type' => 'nullable|string',
    //     'price' => 'required|numeric',
    // ];


    public function submit()
    {
        $this->validate([
            'title' => 'required|string',
            'details' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Execution doesn't reach here if validation fails.

        Accommodation::create([
            'title' => $this->title,
            'details' => $this->details,
            'price' => $this->price,
        ]);

        return redirect('/accommodations');
    }

    public function render()
    {
        // $data = Accommodation::all();
        return view('livewire.admin.accommodation.create');
    }
}
