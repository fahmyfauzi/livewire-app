<div>
    <div class="d-flex justify-content-center py-5">
        <form wire:submit.prevent='save'>
            @if ($image)
                Preview:
                @foreach ($image as $i)
                    <img src="{{ $i->temporaryUrl() }}" style='width: 100px' alt="" class="mb-4">
                @endforeach
            @endif
            <input wire:model='image' type="file" multiple class="form-control mb-2" style="width: 400px">
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <button type="submit" class="btn btn-primary">Save Photo</button>
        </form>
    </div>

    <div class="d-flex justify-content-center py-5">
        @foreach ($images as $image)
            <img src="{{ $image }}" style="width: 100px" class="mx-2" alt="">
        @endforeach
    </div>
</div>
