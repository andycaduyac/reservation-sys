<?php

namespace App\Http\Livewire\Frontend\Forms;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Admin\Accommodation;
use Illuminate\Support\Facades\Mail;

class DateForm extends Component
{

    public $selectedDate, $accommodation, $accommodation_id, $openContactForm, $first_name, $last_name, $phone, $email;

    public function selected($selectedDate){
        $this->selectedDate = $selectedDate;
        // dd($this->selectedDate);
        // $this->emit('selectedDate', $this->selectedDate);
    }

    public function available(){
        // dd($this->selectedDate);
        // dd(Carbon::parse($this->selectedDate[0])->modify('+1 day')->format('Y-m-d'));
        // where('status', 'booked')->

        //working
        // $bookings = Booking::where('status', 'booked')
        //             ->whereDate('book_date', Carbon::parse($this->selectedDate[0])->modify('+1 day')->format('Y-m-d'))
        //             ->select('accommodation_id')
        //             ->get();
        if(isset($this->selectedDate)){
            $this->accommodation = Accommodation::whereDoesntHave('bookings')
            ->orWhereHas('bookings', function($q){
                $q->where('book_date', '!=', Carbon::parse($this->selectedDate[0])->modify('+1 day')->format('Y-m-d'));
            })
            ->get();
        }else{
            return redirect()->to('/')->with('message', 'Date is empty. Please select date');
        }

    }

    public function openModal($id){
        $this->accommodation_id = $id;
        $this->emit('show');
    }
    public function createBooking(){
        $this->validate([
            'selectedDate' => 'required',
            'accommodation_id' => 'required',
        ]);

       $booking = Booking::create([
            'book_date' => Carbon::parse($this->selectedDate[0])->modify('+1 day')->format('Y-m-d'),
            'accommodation_id' => $this->accommodation_id,
        ]);
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $customer = Customer::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'booking_id' => $booking->id,
        ]);
        Mail::send('frontend.mail-forms.mail', ['customer' => $customer], function($mail) use($customer){
            $mail->to($customer->email);
            $mail->subject('Reservation Details');
        });

        return redirect()->to('/');
    }


    public function render()
    {
        // $accommodation = Accommodation::all(); , compact('accommodation')
        return view('livewire.frontend.forms.date-form');
    }
}
