<x-layout>
    <div class="vh-100 d-flex align-items-center">


        <form class="shadow rounded p-5 bg-white" action="{{route('category.update', compact('category'))}}" method="post"  enctype="multipart/form-data">
@csrf
@method('PUT')

            <div class="mt-3">
                <label for="name" form="form-lable">change Category's Name</label>
                <input type="text" id="" class="form-control" name="name">
            </div>

            <div class="mt-3">
                <label for="cover" form="form-lable">Update Category's Image</label>
                <input type="file" id="cover" class="form-control" name="cover">
            </div>
            <button type="submit" class="btn btn-dark">conferma modifica</button>
        </form>



    </div>
</x-layout>