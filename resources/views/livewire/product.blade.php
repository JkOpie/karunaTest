<div>
    <section>
        <div class="container py-5">
            @if (session()->has('message'))
                <div class="alert alert-success"> {{ session('message') }}</div>
            @endif
                <div class="text-end pb-3">
                    <a class="btn btn-success" href="/product/create">Create New Product</a>
                </div>
                <div class="d-flex justify-content-end pb-3">
                    <div class="w-25">
                        <input type="text" class="form-control" wire:model="search" wire:keydown.enter='search'> 
                        @error('search')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button class="btn btn-primary ms-2" wire:click="search" style="height:fit-content">Search</button>
                </div>
                <div class="card">
                    <div class="card-header">
                        Products
                    </div>
                    <div class="card-body">
                      
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Price (RM)</th>
                                    <th>Details</th>
                                    <th>Publish</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price_in_cents / 100}}</td>
                                        <td>{{$product->details}}</td>
                                        <td>{{$product->publish}}</td>
                                        <td>
                                            <a class="btn btn-info mb-1" href="/product/{{$product->id}}">Show</a>
                                            <a class="btn btn-primary mb-1" href="/product/edit/{{$product->id}}">Edit</a>
                                            <button class="btn btn-danger mb-1" wire:click.prevent="delete({{$product->id}})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            
        </div>
    </section>
</div>
