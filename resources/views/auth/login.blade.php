{{-- <x-guest-layout>
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
</x-guest-layout> --}}
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
                        <div class="relative">
                            <input class="formu_contra password-input" placeholder=" Contraseña " id="password" type="password" name="password" required>
                            <button type="button" class="toggle-password-visibility" onclick="togglePasswordVisibility()">
                                <svg id="eye-icon" class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.065.167-.136.331-.21.497a1 1 0 00.012.009C20.268 16.057 16.478 19 12 19c-4.478 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
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
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('password');
            var eyeIcon = document.getElementById('eye-icon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.innerHTML = '<path d="M12 4.5C7.305 4.5 3.137 7.61 1.458 12a10.12 10.12 0 00.21.497l.012-.009C3.732 16.057 7.522 19 12 19c4.478 0 8.268-2.943 9.542-7-.065-.167-.136-.331-.21-.497A10.11 10.11 0 0023.542 12C22.268 7.943 18.478 5 14 5c-4.478 0-8.268 2.943-9.542 7zM12 7a5 5 0 010 10 5 5 0 010-10zm0 4a1 1 0 100 2 1 1 0 000-2z"/>';
            } else {
                passwordField.type = 'password';
                eyeIcon.innerHTML = '<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.065.167-.136-.331-.21-.497a1 1 0 00.012.009C20.268 16.057 16.478 19 12 19c-4.478 0-8.268-2.943-9.542-7z" />';
            }
        }
    </script>
</x-guest-layout>
