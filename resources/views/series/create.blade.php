<x-layout title="Inserir série">
    <form action="{{ route('series.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label"><span class="text-white">Nome da série: </span></label>
                <input 
                    type="text"
                    autofocus
                    id="nome" 
                    name="nome" 
                    class="form-control"
                    value="{{ old('nome') }}"
                    >
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label"><span class="text-white">N* Temporadas: </span></label>
                <input 
                    type="text" 
                    id="seasonsQty" 
                    name="seasonsQty" 
                    class="form-control"
                    value="{{ old('seasonsQty') }}"
                    >
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="form-label"><span class="text-white">Eps / Temporada: </span></label>
                <input 
                    type="text" 
                    id="episodesPerSeason" 
                    name="episodesPerSeason" 
                    class="form-control"
                    value="{{ old('episodesPerSeason') }}"
                    >
            </div>
        </div>
        <div class="row mb-3">
        </div>
        <button class="btn btn-primary mb-2">Inserir</button>
    </form>
</x-layout>