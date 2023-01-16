<x-layout title="Login">
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label text-white">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label text-white">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-3 mb-3">Entrar</button>

        <a href="{{ route('users.create') }}" class="btn btn-secondary ml-3 bg-black">Registrar</a>
    </form>
</x-layout> 