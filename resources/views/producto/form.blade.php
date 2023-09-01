    
    <label for="Name" class="form-label">Name:</label>
    <input type="text" name="name" value= "{{isset($producto->name)?$producto->name:old('name')}}" id="name" class="form-control"><br/>

    <label for="Price" class="form-label">Price:</label>
    <input type="text" name="price" value= "{{isset($producto->price)?$producto->price:old('price')}}" id="price" class="form-control"><br/>

    <label for="Status" class="form-label">Status:</label>
    <input type="text" name="status" value= "{{isset($producto->status)?$producto->status:old('status')}}" id="status" class="form-control"><br/>
        
    <label for="Stock" class="form-label">Stock:</label>
    <input type="text" name="stock" value= "{{isset($producto->stock)?$producto->stock:old('stock')}}" id="stock" class="form-control"><br/>

    

    <input type="submit" value="{{ $modo }} producto" class="btn btn-secondary">

    @if(count($errors)>0)
        <div class="alert alert-dark" role="alert">
            <ul>
                @foreach( $errors -> all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>
            
        </div>
        
    @endif