<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class Order extends Component
{
    #[Url]
    public $lat;
    #[Url]
    public $long;

    // @todo: fake for now
    public $orders = [
        [
            'username' => 'احمد سيد',
            'avatar' => "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
            'place' => 'مطعم خير'
        ],
        [
            'username' => 'جمال عبد الناصر',
            'avatar' => "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80",
            'place' => 'كشري الزعيم'
        ],
        [
            'username' => 'جيهات السادات',
            'avatar' => "https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
            'place' => 'جرين برجر هاوس'
        ],
    ];

    public function setLocation($coords)
    {
        sleep(1);
        $this->lat = $coords['lat'];
        $this->long = $coords['long'];
    }

    public function render()
    {
        return view('livewire.order');
    }
}
