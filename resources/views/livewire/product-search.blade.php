<div>
    <input wire:model.lazy='search' type="text" class="form-control my-2 " style="width: 300px" placeholder="search...">
    <div class="row justify-content-center">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Title</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><img style="width: 100px" src="{{ $product->image }}" alt=""></td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                </tr>  
                @endforeach
             
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
