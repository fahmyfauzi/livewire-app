<div>
    <div class="form-group d-flex justify-content-center">
        <input wire:model='number1' type="number" id="number1" class="form-control" style="width: 300px">
        <select wire:model='action' class="form-select mx-2" style="width: 100px">
            <option selected >+</option>    
            <option>-</option>    
            <option>*</option>    
            <option>/</option>    
            <option>%</option>    
        </select>
        <input wire:model='number2' type="number" id="number2" class="form-control" style="width: 300px">
        <button wire:click='calculate' class="btn btn-primary btn-sm mx-2 {{ $disabled ?  'disabled' : '' }}">=</button>
    </div>
    <h1 class="text-center mt-5 mx-2 ">{{ $result }}</h1>
</div>
