<div>
    <div class="fex flex-col-px-4 py-4 space-y-4">

            <table class="flex justify-between table">
                <thead>
                    <tr>
                        <th scope="col">Task Name</th>
                        <th scope="col">status</th>
                        <th scope="col">remove</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($todos as $index => $todo)
                    <tr>
                        @if($editedTodoIndex === $index || $editedTodoField === $index. '.task')
                            <input type="text"
                                @click.away="$wire.editedTodoField === '{{ $index }}.task' ? $wire.saveTodo({{ $index }} :null"
                                @keydown.enter = "$wire.saveTodo({{ $index }})"
                                wire:model.defer="todos.{{ $index }}.task"
                            />
                            @if($errors->has('todos.' .$index. '.task'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('todos.' .$index. '.task') }}
                                </div>
                            @endif

                            @else
                        @endif
                        <th scope="row" wire:click="editedTodoField({{ $index }}, 'task)">{{ $todo['task'] }}</th>
                        <td><button type="button" class="btn btn-outline-success">done!</button></td>
                        <td><button type="button" class="btn btn-outline-danger">delete</button></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


    </div>

</div>
