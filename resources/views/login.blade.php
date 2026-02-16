
<x-layouts.guest>

    <div style="background:white; padding:30px; border-radius:10px; width:300px">
        <h2 style="text-align:center; margin-bottom:20px">
            Login
        </h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email"
                style="width:100%; margin-bottom:10px">

            <input type="password" name="password" placeholder="Contraseña"
                style="width:100%; margin-bottom:10px">

            <button style="width:100%">
                Entrar
            </button>
        </form>
    </div>

</x-layouts.guest>
