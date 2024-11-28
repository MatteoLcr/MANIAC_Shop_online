<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">


            <div class="col-12 boxShow d-flex flex-column justify-content-center align-items-center">
                <div class="col-6 cardContainer2 d-flex flex-row justify-content-between">

                    <div class="cardImage2">
                        <img src="{{ Storage::url($cloth->image) }}" class="card-img-top" alt="...">
                    </div>

                    <div class="infoContainer d-flex flex-column justify-content-between">

                        <h5> {{ $cloth->name }} </h5>
                        <p> {{ $cloth->price }} €</p>
                        <p> {{ $cloth->description }} </p>

                        <p>Colorazioni disponibili</p>
                        <div class="d-flex flex-row justify-content-start align-items-center colorContainer">
                            @foreach($cloth->colors as $color)
                            <div class="colors me-3" style="background-color:{{$color['name']}}; height:25px; width:25px; border-radius: 50%;"></div>
                            @endforeach
                        </div>

                        <p>Taglie disponibili</p>
                        <div>
                            @foreach($cloth->sizes as $size)
                            <span> {{ $size['name']}} </span>
                            @endforeach
                        </div>

                        <a href="{{route('clothShow', compact('cloth'))}}"> <button class="openBtn"> ACQUISTA </button> </a>
                    </div>

                </div>

                @auth
                <div class="mt-4">
                    @livewire('cloth-delete',compact('cloth'))
                </div>
                @endauth
                
            </div>
        </div>
    </div>

</x-layout>