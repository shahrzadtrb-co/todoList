<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class AddTodos extends Component
{
    public $task;

    protected $rules = [
        'task' =>'required|min:5'
    ];

    protected $validationAttributes = [
        'task' =>'to-do'
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }


    public function mount(){
        $this->task='';
    }

    public function addTodo(){
        $validatedData = $this->validate();
        Task::create($validatedData);
        $this->reset('task');
        $this->emit('todoAdded');
    }
    public function render()
    {
        return view('livewire.add-todos');
    }
}
