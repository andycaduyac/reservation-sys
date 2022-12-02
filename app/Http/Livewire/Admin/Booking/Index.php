<?php

namespace App\Http\Livewire\Admin\Booking;

use App\Models\Admin\Accommodation;
use App\Models\Booking;
use Livewire\Component;

class Index extends Component
{

    public $book_date, $accommodation_id, $book_id;
    public $selectedDate;

    public function selected($selectedDates){
        $this->selectedDate = $selectedDates;
        // dd($this->selectedDate);

        $book_date = $this->emit('selectedDate', $this->selectedDate);
    }

    public function resetInput(){
        $this->book_date = NULL;
        $this->accommodation_id = NULL;

    }

    public function submit()
    {
        $this->validate([
            'book_date' => 'required|date',
            'accommodation_id' => 'required',
        ]);

        // Execution doesn't reach here if validation fails.

        Booking::create([
            'book_date' => $this->book_date,
            'accommodation_id' => $this->accommodation_id,
        ]);

        session()->flash('message', 'Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();

        return redirect()->to('/admin/bookings');

    }

    public function deleteBooking(int $book_id){
        $this->book_id = $book_id;

    }
    public function destroy(){
        Booking::find($this->book_id)->delete();
        session()->flash('message', 'Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');

        return redirect()->to('/admin/bookings');
    }

    public function render()
    {
        $bookings = Booking::all();
        $types = Accommodation::all();
        // dd($types);
        return view('livewire.admin.booking.index', compact('bookings', 'types'));
    }
}
