<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AllTodos extends Component
{
    public $todos=[];
    public $editedTodoIndex = null;
    public $editedTodoField = null;

    protected $listeners = ['todoAdded'];

    public function mount(){
        $this->todos = Task::latest()->get()->toArray();
    }

   public function editTodo($todoIndex){
        $this->editedTodoIndex = $todoIndex;
   }

   public function editedTodoField($todoIndex , $fieldName){
        $this->editedTodoField = $todoIndex. '.'.$fieldName;

   }

   public function saveTodo($todoIndex){
        $todo = $this->todos[$todoIndex] ?? NULL;
        if(!is_NULL($todo)){
            optional(Task::find($todo['id']))->update($todo);
        }
        $this->editedTodoField = null;
       $this->editedTodoIndex = null;
   }

    public function todoAdded(){
        $this->todos = Task::latest()->get();
    }
    public function render()
    {
        return view('livewire.all-todos' ,[
            'todos' => $this->todos,
        ]);
    }
}
