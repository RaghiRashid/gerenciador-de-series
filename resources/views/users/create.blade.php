<x-layout title="Novo Usuário">
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label text-white">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="form-label text-white">E-mail</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label text-white">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-3 mb-3">Registrar</button>
    </form>
</x-layout>