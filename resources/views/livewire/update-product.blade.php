<div>
    <section>
        <div class="container py-5">
        
            @if (session()->has('message'))
            <div class="alert alert-success"> {{ session('message') }}</div>
        @endif
            <div class="text-end mb-3">
                <a class="btn btn-primary" href="/">Back</a>
            </div>

            <h3>Update Product</h3>

            <div class="mb-3">
                <label>Name:</label>
                <input type="text" class="form-control" wire:model="name" value="{{$name}}">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
    
            <div class="mb-3">
                <label>Price in (RM):</label>
                <input type="number" class="form-control" name="price" wire:model="price" value="{{$price}}">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
    
            <div class="mb-3">
                <label>Detail:</label>
                <textarea cols="30" rows="10" class="form-control" wire:model="detail" name="detail">{{ $detail }}</textarea>
                @error('detail')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
    
            <div class="mb-3">
                <label>Publish:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" wire:model="publish" value="Yes">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" wire:model="publish" value="No">
                    <label class="form-check-label" for="no">No</label>
                </div>

                @error('publish')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <button  class="btn btn-primary" wire:click.prevent='update'>Submit</button>
            </div>

        </div>
       
    </section>
</div>
