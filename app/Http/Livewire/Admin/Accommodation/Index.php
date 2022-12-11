<?php

namespace App\Http\Livewire\Admin\Accommodation;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin\Accommodation;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithFileUploads;
    public $title, $details, $price, $image, $accommodation_id;
    public $new_image;

    // protected $rules = [
    //     'title' => 'required|string',
    //     'type' => 'nullable',
    //     'price' => 'required|numeric',
    // ];

    public function resetInput(){
        $this->title = NULL;
        $this->details = NULL;
        $this->price = NULL;
        // $this->image = NULL;

    }

    public function closeModal(){
        $this->resetInput();
    }

    public function submit()
    {
        $images = new Accommodation();
        $this->validate([
            'title' => 'required|string',
            'details' => 'nullable|string',
            'price' => 'required|numeric',
            // 'image' => 'required',
        ]);

        // Execution doesn't reach here if validation fails.
        $filename = "";
        if($this->image) {
            $filename = $this->image->store('images', 'public');
        }else {
            $filename = null;
        }


        $images->title = $this->title;
        $images->details = $this->details;
        $images->price = $this->price;
        $images->image = $filename;
        $result = $images->save();

        // Accommodation::create([
        //     'title' => $this->title,
        //     'details' => $this->details,
        //     'price' => $this->price,
        //     'image' => $this->image,
        // ]);

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
            $this->image =  $accommodation->image;

        }else {
            return redirect()->to('/admin/accommodations');
        }

    }

    public function update(){
        // $images = Accommodation::find()
        $images = Accommodation::find($this->accommodation_id);
        $this->validate([
            'title' => 'required|string',
            'details' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $filename = "";
        // $destination=public_path('storage\\'.$images->image);
        if($this->image){
            $filename = $this->image->store('images', 'public');
        } else {
            $filename = $this->null;
        }


        // if ($this->new_image) {
        //     $filename = $this->new_image->store('images', 'public');
        // } else {
        //     $filename = $this->image;
        // }

        $images->title = $this->title;
        $images->details = $this->details;
        $images->price = $this->price;
        $images->image = $filename;
        $result = $images->save();
        // if ($result) {
        //     session()->flash('success', 'Updated Successfully');
        //     $this->resetField();
        //     $this->showData = true;
        //     $this->updateData = false;
        // } else {
        //     session()->flash('error', 'Update UnSuccessfully');
        // }

        // Accommodation::where('id', $this->accommodation_id)->update([
        //     'title' => $this->title,
        //     'details' => $this->details,
        //     'price' => $this->price,
        //     'image' => $this->image,
        // ]);
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
        session()->flash('message', 'Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');

        return redirect()->to('/admin/accommodations');
    }



    public function render()
    {
        return view('livewire.admin.accommodation.index', ['accommodations' => Accommodation::all()]);
    }
}
