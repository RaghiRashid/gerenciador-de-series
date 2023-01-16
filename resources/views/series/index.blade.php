<x-layout title="Series" :mensagem-sucesso="$mensagemSucesso" >
    <div class="d-flex flex-column">
        @auth
            <a class="btn btn-primary mt-3" href="series/create">Inserir Série</a>
        @endauth
        <ul class="mt-5 text-center list-group">
            @foreach ($series as $serie)
            <li class="list-group-item mb-3 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img class="me-3" src="{{ asset('storage/' . $serie->cover) }}" width="100" class="img-thumbnail" alt="">
                    @auth<a href="{{ route('seasons.index', $serie->id) }}">@endauth{{ $serie->nome }}@auth</a>@endauth
                </div>
                @auth
                    <span class="d-flex">
                        <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">E</a>
                        <form action="{{ route('series.destroy', $serie->id)}}" method="POST" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger bnt-sm">X</button>
                        </form> 
                    </span>
                @endauth      
            </li>
            @endforeach
        </ul>
    </div>
</x-layout>
