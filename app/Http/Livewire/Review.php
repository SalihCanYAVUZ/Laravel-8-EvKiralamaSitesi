<?php

namespace App\Http\Livewire;

use App\Models\House;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record,$subject,$review,$house_id,$rate;

    public function mount($id){
        $this->record = House::findOrFail($id);
        $this->house_id = $this->record->id;
    }
    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->house_id = null;
        $this->ip = null;
    }
    public function store(){
        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
        ]);

        \App\Models\Review::create([
            'house_id' => $this->house_id,
            'user_id' => Auth::id(),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'review'=> $this->review,
            'subject'=>$this->subject
        ]);

        session()->flash('message', 'Mesajınız Ulaştı.');
        $this->resetInput();
    }
}
