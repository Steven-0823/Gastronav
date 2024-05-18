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
                <h1 class="text-center"> Bienvenido a Gastronav </h1>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="formulario_item">
                        <label class="form_contra" for="email"> Email: </label>
                        <input class="formu_contra" placeholder=" Usuario " id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email') 
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="formulario_item">
                        <label class="form_contra" for="password"> Password: </label>
                        <input class="formu_contra" placeholder=" Contraseña " id="password" type="password" name="password" required>
                        @error('password')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="formulario_boton">
                        <button type="submit" class="boton_formulario">Iniciar Sesión</button>
                    </div>
                    <p></p>
                    <div class="formulario_link">
                        <a class="olvidar" href="{{ route('register') }}">Registrarse</a>
                        <a class="olvidar olvidar-modify" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="terminoycondi">
                        <input class="termycondi" type="checkbox" value=" " id="checkterm"/>
                        <label class="termycondi_label" for="checkterm">Estoy de acuerdo con los <a href="#!">Términos y condiciones</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
