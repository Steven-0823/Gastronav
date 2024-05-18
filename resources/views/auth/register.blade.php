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

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="formulario_item">
                        <label class="form_contra" for="name"> Name: </label>
                        <input class="formu_contra" placeholder=" Nombre " id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name') 
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="formulario_item">
                        <label class="form_contra" for="email"> Email: </label>
                        <input class="formu_contra" placeholder=" Usuario " id="email" type="email" name="email" value="{{ old('email') }}" required>
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

                    <div class="formulario_item">
                        <label class="form_contra" for="password_confirmation"> Confirm Password: </label>
                        <input class="formu_contra" placeholder=" Confirmar Contraseña " id="password_confirmation" type="password" name="password_confirmation" required>
                        @error('password_confirmation')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="formulario_boton">
                        <button type="submit" class="boton_formulario">Registrarse</button>
                    </div>
                    <p></p>
                    <div class="formulario_link">
                        <a class="olvidar" href="{{ route('login') }}">¿Ya estás registrado?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
