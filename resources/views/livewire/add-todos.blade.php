<div class="form-group mx-3 my-4">
    <label for="task">Add new Task</label>
    <input name="task" type="text" class="form-control shadow-xl rounded"  placeholder="Enter Task" wire:model="task" wire:keydown.enter="addTodo">

    <small class="form-text text-muted">write down your new todo task and hit enter!</small>
    @error('task')
        <span class="alert alert-danger">{{ $message }}</span>
    @enderror
</div>
