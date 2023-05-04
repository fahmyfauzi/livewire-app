<div>
    <form wire:submit.prevent='save'>
        @if(session()->has('message'))
            <div class="text-danger">
                {{ session('message') }}
            </div>
        @endif

        <div class="form-check">
            <input wire:model='role' value="customer" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                customer
            </label>
          </div>
          <div class="form-check">
            <input wire:model='role' value="vendor" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            Vendor
            </label>
          </div>
          <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input  wire:model.debounce.500ms='first_name' type="text" class="form-control" id="firstname" aria-describedby="emailHelp">
            @error('first_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
          <div class="mb-3">
            <label  for="lastname" class="form-label">Last Name</label>
            <input wire:model.debounce.500ms='last_name' type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
            @error('last_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input  wire:model.debounce.500ms="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input wire:model.debounce.500ms="password"  type="password" class="form-control" id="exampleInputPassword1">
          @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        @if($role === 'vendor')
        <div class="mb-3">
            <label for="companyname" class="form-label">Company Name</label>
            <input  wire:model.debounce.500ms='company_name' type="text" class="form-control" id="companyname" aria-describedby="emailHelp">
            @error('company_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif
        
        @if($role === 'vendor')
        <div class="mb-3">
            <label for="vatnumber" class="form-label">Vat Number</label>
            <input  wire:model.debounce.500ms='company_name' type="text" class="form-control" id="vatnumber" aria-describedby="emailHelp">
            @error('company_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
