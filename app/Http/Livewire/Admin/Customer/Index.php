<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\Booking;
use Livewire\Component;
use App\Models\Customer;

class Index extends Component
{

    public $first_name, $last_name, $email, $phone, $booking_id;
    public $customer_id;



    public function resetInput(){
        $this->first_name = NULL;
        $this->last_name = NULL;
        $this->email = NULL;
        $this->phone = NULL;

    }

    public function closeModal(){
        $this->resetInput();
    }

    public function submit()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',
            // 'booking_id' => 'required',
        ]);

        // Execution doesn't reach here if validation fails.

        Customer::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            //  'booking_id' => '1',
        ]);
        session()->flash('message', 'Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();

        return redirect()->to('/admin/customers');
    }
    public function deleteCustomer(int $customer_id){
        $this->customer_id = $customer_id;
    }
    public function destroy(){
        Customer::find($this->customer_id)->delete();
        session()->flash('message', 'Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');

        return redirect()->to('/admin/customers');
    }


    public function render()
    {
        $customers = Customer::all();
        return view('livewire.admin.customer.index', compact('customers'));
    }
}
