<form action="{{ $action }}" method="POST">
    @csrf

    @if($update)
        @method('PUT')
    @endif


    <div class="mb-3">
        <label for="nome" class="form-label"><span class="text-danger">Nome da série: </span></label>
        <input 
            type="text" 
            id="nome" 
            name="nome" 
            class="form-control"
            @isset($nome)value="{{ $nome }}"@endisset
            >
    </div>
    <button class="btn btn-primary mb-2">Inserir</button>
</form>