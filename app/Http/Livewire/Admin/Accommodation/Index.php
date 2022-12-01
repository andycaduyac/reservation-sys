<?php

namespace App\Http\Livewire\Admin\Accommodation;

use Livewire\Component;
use App\Models\Admin\Accommodation;

class Index extends Component
{
    public $title, $details, $price, $accommodation_id;

    // protected $rules = [
    //     'title' => 'required|string',
    //     'type' => 'nullable',
    //     'price' => 'required|numeric',
    // ];

    public function resetInput(){
        $this->title = NULL;
        $this->details = NULL;
        $this->price = NULL;

    }

    public function closeModal(){
        $this->resetInput();
    }

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
        session()->flash('message', 'Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();

        return redirect()->to('/admin/accommodations');
    }

    public function edit(int $accommodation_id){
        $accommodation = Accommodation::find($accommodation_id);
        if($accommodation){
            $this->accommodation_id =  $accommodation->id;
            $this->title =  $accommodation->title;
            $this->details =  $accommodation->details;
            $this->price =  $accommodation->price;

        }else {
            return redirect()->to('/admin/accommodations');
        }

    }

    public function update(){
        $this->validate([
            'title' => 'required|string',
            'details' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        Accommodation::where('id', $this->accommodation_id)->update([
            'title' => $this->title,
            'details' => $this->details,
            'price' => $this->price,
        ]);
        session()->flash('message', 'Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
        return redirect()->to('/admin/accommodations');
    }

    public function deleteAccommodation(int $accommodation_id){
        $this->accommodation_id = $accommodation_id;

    }
    public function destroy(){
        Accommodation::find($this->accommodation_id)->delete();
        session()->flash('message', 'Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');

        return redirect()->to('/admin/accommodations');
    }



    public function render()
    {
        return view('livewire.admin.accommodation.index', ['accommodations' => Accommodation::all()]);
    }
}
