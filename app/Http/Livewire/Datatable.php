<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $sortField;
    public $sortAsc = true;

    public $search;
    public $filterByActive = true;

    //fix searching data that's not from current page not working bug
    //when update search query reset page to 1 and render component again with searched results
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($col)
    {
        if ($col === $this->sortField) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortField = $col;
            $this->sortAsc = true;
        }
    }

    public function render()
    {
        // (A OR B) AND C
        $users = User::where(function ($query) {
            $query
            ->where('name', 'like', "%{$this->search}%")//A
            ->orWhere('email', 'like', "%{$this->search}%");//B
        })
            ->where('active', $this->filterByActive)//C
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->paginate(10);
        return view('livewire.datatable', compact('users'));
    }
}
