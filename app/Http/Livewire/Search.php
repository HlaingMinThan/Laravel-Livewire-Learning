<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $searchSongs = [];//initial state

    public function updatedSearch($value)
    {
        if (strlen($value) < 3) {
            return;
        }
        $res = Http::get("https://itunes.apple.com/search/?term='{$value}'&limit=10");
        $this->searchSongs = $res->json()['results'];
    }

    public function render()
    {
        return view('livewire.search');
    }
}
