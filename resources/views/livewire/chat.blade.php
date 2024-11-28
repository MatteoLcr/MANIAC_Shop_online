<div>
    <div class="text-start">
        <h5>Cerca qui il tuo articolo</h5>
    </div>


    <div class="p-3 boxChat rounded">
        @forelse ($conversationMessages as $message)

        @if ($message['role'] === 'user')
        <div class="border border-success rounded-3 p-1 my-2 text-end messaggioUtente" role="alert">
            {{ $message['content'] }}
        </div>
        @endif

        @if ($message['role'] === 'assistant')
        <div class="border border-info p-3 my-2 rounded-3 py-2 bg-white" role="alert">
            {!! $message['content'] !!}
        </div>
        @endif

        @endforeach

        <form wire:submit="ask">
            <div class="input-group mb-3">

                <input type="text"
                    wire:model="prompt"
                    class="form-control"
                    placeholder="Chiedimi qualcosa"
                    aria-label="Chiedimi qualcosa"
                    aria-describedby="button-addon2">

                <button class="btn btn-outline-dark" type="submit" id="button-addon2"><i class="bi bi-send-fill"></i></button>
            </div>
        </form>
    </div>
</div>
