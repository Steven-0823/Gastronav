<x-guest-layout>
    <div class="fondobody">
        <div class="iconos_redes">
            <a href="https://web.facebook.com/?locale=es_LA&_rdc=1&_rdr" target="_blank">
                <img class="imagen__redes" src="{{ asset('imagenes/facebook.svg') }}" alt="facebook">
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <img class="imagen__redes" src="{{ asset('imagenes/instagram.svg') }}" alt="instagram">
            </a>
        </div>
        <div class="container">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="container_login">
                <h1 class="text-center"> Olvidaste tu contraseña? </h1>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="formulario_item">
                        <label class="form_contra" for="email"> Email: </label>
                        <input class="formu_contra block mt-1 w-full" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email') 
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="formulario_boton">
                        <button type="submit" class="boton_formulario">Enviar enlace </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
