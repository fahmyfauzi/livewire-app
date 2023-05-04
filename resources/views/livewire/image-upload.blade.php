<div class=" d-flex justify-content-center py-5">
    <div class="mb-5">
        <form wire:submit.prevent='save'>

            @if ($image)
            Preview : 
            @foreach ($image as $i)
                <img src="{{ $i->temporaryUrl() }}" style='width: 100px' alt="">
            @endforeach
                
            @endif
            <input wire:model='image' type="file" multiple class="mb-2 form-control" style="width: 400px">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
    
            <button type="submit" class="btn btn-primary">save photo</button>
        </form>
    
    </div>
 
    <div class="py-5 d-flex justify-content-center">
        @foreach ($images as $image)
        <img src="{{ $image }}" style="width: 100px" class="mx-2" alt="">
            
        @endforeach
    </div>
</div>
