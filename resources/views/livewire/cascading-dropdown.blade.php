<div>
   <div class="row justify-content-center">
      <div class="col-md-8">
         <select wire:model='selectedContinent' wire:change='changeContinent' class="form-select mb-4" aria-label="Default select example">
            <option value="-1" selected>Please select continent</option>
            @foreach ($continents as $continent)
            <option value="{{ $continent->id }}">{{ $continent->name }}</option>
               
            @endforeach
            
          </select>

          <div>
            <p wire:loading>
               Loading...
            </p>
            <select wire:model='selectedCountry' class="form-select" aria-label="Default select example">
               <option value="-1" selected>Please select country</option>

               @foreach ($countries as $country)
               <option value="{{ $country->id }}">{{ $country->name }}</option>
                  
               @endforeach
   
             </select>
          </div>

      </div>
   </div>

</div>
