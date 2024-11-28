<form class="shadow rounded p-5 bg-white" wire:submit="storeCloth">
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{session('success')}}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mt-3">
        <label for="" form="form-lable">Name of cloth</label>
        <input type="text" class="form-control" id="name" wire:model.live="name">
    </div>

    <div class="mt-3">
        <label for="" form="form-lable"> Description of cloth</label>
        <textarea id="description" wire:model.live="description"></textarea>
    </div>

    <div class="mt-3">
        <label for="" form="form-lable">Price</label>
        <input type="text" id="price" class="form-control" wire:model.live="price">
    </div>

    <!-- CATEGORY -->
    <div class="mt-3">
        <label for="" form="form-lable">Select Categories</label>
        <select id="category" class="form-control" multiple wire:model.live="selectedCategories">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <!-- TAGLIA/SIZE -->
    <div class="mt-3">
        <label for="" form="form-lable">Select Size</label>
        <select id="size" class="form-control" multiple wire:model.live="selectedSizes">
            @foreach($sizes as $size)
                <option value="{{$size->id}}">{{$size->name}}</option>
            @endforeach
        </select>
    </div>

    <!-- COLORS -->
    <div class="mt-3">
        <label for="" form="form-lable">Select Color</label>
        <select id="color" class="form-control" multiple wire:model.live="selectedColor">
            @foreach($colors as $color)
                <option value="{{$color->id}}">{{$color->name}}</option>
            @endforeach
        </select>
    </div>



    <div class="mt-3">
        <label for="" form="form-lable">Add Image</label>
        <input type="file" id="image" class="form-control" wire:model.live="image">
    </div>

    <div class="mt-3 text-center">
        <button type="submit" class="btn btn-info">Create</button>
    </div>

</form>