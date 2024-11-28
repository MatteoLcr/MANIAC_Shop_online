<x-layout>

    <div class="container-fluid m-0 p-0">

        <div class="row justify-content-center">
            <div class="col-4 searcBar text-center">
                <input type="text" class="form-control" wire:model.live="" placeholder="Inserisci qui il titolo che cerchi...">
            </div>
        </div>

        <div class="row g-0">
            <div class="col-12">
                <video autoplay muted loop id="background-video">
                    <source src="{{(Storage::url('video/video_home.mp4'))}}" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{route('askView')}}" class="btn btn-dark my-5">Accedi alla ricerca tramite AI</a>
            </div>
        </div>

        <div class="row">
            @foreach($categories as $category)
            <div class="col-6 d-flex flex-row justify-content-evenly align-items-center">
                <div class="card position-relative align-items-center">
                    <img src="{{Storage::url($category->cover)}}" class="card-img-top" alt="...">
                    <button class="btnCatCard">
                        <a href="{{route('categoryIndex', compact('category'))}}">
                            {{$category->name}}
                        </a>
                    </button>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</x-layout>