<?php

namespace App\Http\Livewire;

use App\Models\Days;
use App\Models\Price;
use App\Models\Schedule;
use Livewire\Component;
use App\Models\SportCenter;
use App\Models\Sports;

class BookingPage extends Component
{
    public $sportCenter_id, $category_id, $time_id, $date_id, $time, $price;
    public function mount($sportCenter_id)
    {
        $this->sportCenter_id= $sportCenter_id;
       
    }
    public function test()
    {
        dd($this->time_id);
    }
    
    public function render()
    {
        $categories= Sports::where('sport_center_id',$this->sportCenter_id)->get();
    
    
        $dates = Days::where('sports_id',$this->category_id)->get();
       
       $times= Schedule::where('days_id',$this->date_id)->get();
       
       $prices= Price::where('schedule_id',1)->get();
    
//  dd($prices);
        $booking_detail = SportCenter::find($this->sportCenter_id);

    
        return view('livewire.booking-page',["bookingDetails"=>$booking_detail,'categories'=>$categories,"dates"=>$dates,"times"=>$times,"prices"=>$prices]);
    }
}
