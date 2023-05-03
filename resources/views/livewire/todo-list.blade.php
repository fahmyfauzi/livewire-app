<div>
   <div class="form-group d-flex justify-content-center">
    <input wire:model='todoText' wire:keydown.enter='addTodo' type="text" style="width: 500px" class="form-control mx-2">
    <button wire:click='addTodo' class="btn btn-primary btn-sm">save</button>
   </div>

   <div class="py-5 ">
      @if (count($todos) == 0)
    <p class="text-dark text-center"> There are no todos</p>
    @endif

    @foreach ($todos as $index => $todo)
      <div class="d-flex justify-content-center">
         <div class="form-check ">
            <input class="form-check-input" type="checkbox" {{ $todo->completed ? 'checked' : '' }} wire:change='toggleTodo({{ $todo->id }})' id="flexCheckDefault">
            <label class="form-check-label {{ $todo->completed ? 'text-decoration-line-through' : '' }}" for="flexCheckDefault">
             {{$todo->todo}}
            </label>
            <button wire:click='deleteTodo({{ $todo->id }})' class="btn btn-danger text-center btn-sm  mx-2" > x </button>
        </div>

      </div>

       

    @endforeach
   </div>
</div>
