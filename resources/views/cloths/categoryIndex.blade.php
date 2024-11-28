<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-evenly align-items-center mt-5">

                @foreach($cloths as $cloth)
                <div class="col-3 cardContainer">

                    <div class="cardImage">
                        <img src="{{ Storage::url($cloth->image) }}" class="card-img-top" alt="...">
                    </div>

                    <div class="">
                        <div class="d-flex flex-row justify-content-between">
                            <h5> {{ $cloth->name }} </h5>
                            <p> {{ $cloth->price }} €</p>
                        </div>
                        <p> {{ $cloth->description }} </p>

                        <a href="{{route('clothShow', compact('cloth'))}}"> <button class="openBtn"> APRI </button> </a>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>

    <a class="btn btn-info" href="{{route('category.update', compact('category'))}}">Category Modify</a>
</x-layout>