<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gastronav</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            /* Tus otros estilos aquí... */

            /* Estilos para los enlaces de navegación */
           
        </style>
    </head>
    <body>
        <div class="bg-gray-50 text-black/50 dark:bg-white dark:text-black/50">
            <div>
                <div>
                    <header class="encabezado">
                        <div class="contenedor-navegacion">
                            <div class="contenido-navegacion contenedor">
                                <div class="logo">
                                    <h2> <span class="blanco">Gas</span><span class="amarillo">tro</span><span class="rojo">nav</span></h2>
                                </div>
                                @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                            <a
                                                href="{{ url('/dashboard') }}"
                                                class="nav-link rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Home
                                            </a>
                                        @else
                                            <a
                                                href="{{ route('login') }}"
                                                class="nav-link rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Log in
                                            </a>

                                            @if (Route::has('register'))
                                                <a
                                                    href="{{ route('register') }}"
                                                    class="nav-link rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                >
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                            </div>
                        </div>
                        <div class="contenido-header">
                            <div class="contenedor-encabezado">
                                <div class="texto-encabezado">
                                    <h2> Bienvenido! </h2>
                                    <a href="#main" class="btn bordes">Ir al Menú</a>
                                </div>
                                <video autoplay loop>
                                    <source auto loop src="{{ asset('Imagenes/Gastronavv.mp4') }}">
                                </video>
                            </div>
                        </div>
                    </header>
                    <div id="nos" class="contenedor-nosotros">
                        <div class="contenedor contenedor-nosotros">
                            <div class="texto-nosotros">
                                <p class="bienvenida">Bienvenido a!</p>
                                <h1>Gastronav</h1>
                                <p>¡Hola, aventureros! Soy 'Gastronav', una mezcla vibrante de calidez, pasión y aventura. Me encanta
                                    explorar los sabores y lugares únicos de esta maravillosa ciudad y compartir esas experiencias con
                                    todos los que me rodean!
                                </p>
                                <a href="#contac" class="btn btn-rojo">Contactenos</a>
                            </div>
                            <div class="imagenes-nosotros">
                                <div class="imagenes2">
                                    <img  src="https://i.ibb.co/qjRhsh3/Imagen2.jpg" alt="iglesia">
                                    <img src="https://i.ibb.co/cC9tGSX/imagen3.jpg" alt="Caliturismo">
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <main id="main" class="menu contenedor">
                        <h2 class="texto-queteinteresa">¿Qué te interesa hoy?</h2>
                        <div class="botones-lugares">
                            <button class="lugares btn btn__lugares btn-amarillo"> Lugares </button>
                            <button class="restaurantes btn btn__lugares btn-amarillo"> Restaurantes </button>
                        </div>
                
                        <div class="contenido__main">
                            <div class="contenedor__lugares">
                                <div class="lugares">
                                    <div class="lugar" data-lugar="turismo">
                                        <img class="img__lugares" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/2d/01/0a.jpg" alt="sanantonio">
                                        <h2>San Antonio</h2>
                                        <p>Lindo barrio, lleno de historia y una buena gastronomía, su parque es hermoso con algunas
                                            calles antiguas en piedra, tiene teatros y distintos espacios para compartir en familia o
                                            con amigos
                                        </p>
                
                                    </div>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank"
                                            href="https://www.google.com/maps/place/San+Antonio,+Cali,+Valle+del+Cauca/@3.44763,-76.5401788,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a67c61d39a51:0x7b953cdb658a057b!8m2!3d3.448069!4d-76.5394302!16s%2Fg%2F11_ygngxx?entry=ttu"><button>¿Como
                                                Llegar?</button></a>
                                    </div>
                                </div>
                
                                <div class="lugares">
                                    <div class="lugar" data-lugar="turismo">
                                        <img class="img__lugares" src="https://tubarco.news/wp-content/uploads/2023/10/Screenshot_2023-10-11-09-48-57-190_com.zhiliaoapp.musically-5-9.jpg" alt="Cristorey">
                                        <h2>Cristo Rey</h2>
                                        <p>Lindo lugar, lleno de historia, su sitios es hermoso para pasar tiempo al aire libre y con un
                                            mirador
                                            increible y distintos espacios para compartir en familia o con amigos
                                        </p>
                
                                    </div>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank"
                                            href="https://www.google.com/maps/place/Mirador+Cristo+Rey/@3.4359059,-76.6368936,13z/data=!4m10!1m2!2m1!1scristo+rey+cali+sitio+turistico!3m6!1s0x8e30a4294ebb2e71:0x61611be339081e5e!8m2!3d3.4359059!4d-76.5647958!15sCh9jcmlzdG8gcmV5IGNhbGkgc2l0aW8gdHVyaXN0aWNvWiEiH2NyaXN0byByZXkgY2FsaSBzaXRpbyB0dXJpc3RpY2-SARBvYnNlcnZhdGlvbl9kZWNrmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJUY25ZeVZFNW5FQUXgAQA!16s%2Fg%2F11g01tfp58?entry=ttu"><button>¿Cómo
                                                llegar?</button></a>
                                    </div>
                                </div>
                
                                <div class="lugares">
                                    <div class="lugar" data-lugar="turismo">
                                        <img class="img__lugares" src="https://www.orgullodecali.com/wp-content/uploads/2022/01/Las-Gatas-del-Gato.jpg" alt="parquegatos">
                                        <h2>Parque Gatos</h2>
                                        <p> Un sitio el cual contiene muchas esculturas de distintos gatos, un parque hermoso donde
                                            puedes compartir con tu familia
                                        </p>
                                    </div>
                
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank"
                                            href="https://www.google.com/maps/place/Parque+Las+Novias+del+Gato+del+R%C3%ADo/@3.4514647,-76.546865,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a6799ed94a61:0x4422d4073fdfeecf!8m2!3d3.4514647!4d-76.5442901!16s%2Fg%2F11gfc8dl9p?entry=ttu"><button>¿Cómo
                                                llegar?</button></a>
                                    </div>
                                </div>
                            </div>
                
                            <div class="contenedor__restaurantes">
                                <div class="lugares">
                                    <div class="lugar" data-lugar="restaurante">
                                        <img class="img__lugares" src="https://media-cdn.tripadvisor.com/media/photo-s/26/f4/bc/07/los-mejores-espacios.jpg" alt="cantina">
                                        <h2>Cantina la 15</h2>
                                        <p>Un restaurante con distintas variedades y buena gastronomía, platos exquisitos un buen lugar
                                            con espacios para compartir en familia o con amigos
                                        </p>
                                    </div>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank"
                                            href="https://www.google.com/maps/place/Cantina+La+15+Granada+Cali+Norte/@3.4598173,-76.5370691,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a66c3310e0d1:0xce07b007762fd120!8m2!3d3.4598173!4d-76.5344942!16s%2Fg%2F11cjk7kfkd?entry=ttu"><button>¿Cómo
                                                llegar?</button></a>
                                    </div>
                                </div>
                                <div class="lugares">
                                    <div class="lugar" data-lugar="restaurante">
                                        <img class="img__lugares" src="https://media-cdn.tripadvisor.com/media/photo-s/27/a2/c2/34/storia-d-amore-barranquilla.jpg" alt="storie">
                                        <h2>Storia d'amore</h2>
                                        <p>Es un espacio dedicado al amor que sentimos por Italia. Encontrarás productos de alta calidad, presentaciones únicas,   
                                            aromas que te harán soñar y texturas que te sorprenderán. ¡Cruza la puerta principal y disfruta del viaje
                                        </p>
                                    </div>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank"
                                            href="https://www.google.com/maps?sca_esv=d7773eb477db942c&sca_upv=1&rlz=1C1CHBD_esCO1052CO1052&output=search&q=storia+d%27amore+granada&source=lnms&entry=mc&ved=1t:200715&ictx=111"><button>¿Cómo
                                                llegar?</button></a>
                                    </div>
                                </div>
                                <div class="lugares">
                                    <div class="lugar" data-lugar="restaurante">
                                        <img class="img__lugares" src="https://media-cdn.tripadvisor.com/media/photo-s/28/1d/33/48/odiseo-bistro.jpg" alt="odiseobistro">
                                        <h2> Odiseo Bistro </h2>
                                        <p>Con Odiseo, buscábamos un espacio majestuoso, pero al mismo tiempo cálido
                                        </p>
                
                                    </div>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank"
                                            href="https://www.google.com/maps?sca_esv=d7773eb477db942c&sca_upv=1&rlz=1C1CHBD_esCO1052CO1052&output=search&q=odiseo+bistro&source=lnms&entry=mc&ved=1t:200715&ictx=111"><button>¿Cómo
                                                llegar?</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                
                    <div class="separador">
                        <div class="contenido-separador contenedor">
                            <h2> Vive experiencias nuevas </h2>
                            <p> Disfruta cada uno de los lugares que nos brinda la ciudad de Cali</p>
                        </div>
                    </div>
                    <div id="contac" class="formulario-contacto contenedor">
                        <div class="informacion-contacto">
                            <img data-src="/Imagenes/Logo.png">
                            <h3>CONTACTENOS</h3>
                        </div>
                
                        <form class="formulario">
                            <div class="input-formulario">
                                <label for="nombre">Nombre</label>
                                <input type="text" placeholder="Sebastian" id="nombre">
                            </div>
                            <div class="input-formulario">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" placeholder="Milton" id="apellidos">
                            </div>
                            <div class="input-formulario">
                                <label for="correo">Correo</label>
                                <input type="email" placeholder="miltonp@gmail.com" id="correo">
                            </div>
                            <div class="input-formulario">
                                <label for="telefono">Telefono</label>
                                <input type="number" placeholder="3134432345" id="telefono">
                            </div>
                            <div class="input-formulario">
                                <label for="mensaje">Mensaje</label>
                                <textarea id="mensaje"></textarea>
                            </div>
                            <div class="input-formulario">
                                <input type="submit" class="btn btn-amarillo" value="Enviar">
                            </div>
                
                        </form>
                    </div>
                    <footer class="pie-pagina">
                        <div class="contenedor-piepagina contenedor">
                            <div class="info">
                                <h3>Direccion</h3>
                                <p>Cra 23 #25-32</p>
                            </div>
                            <div class="info">
                                <h3>Días especiales</h3>
                                <p>Miercoles y Viernes 6pm - 8pm</p>
                                <p>+57 313 4432345</p>
                            </div>
                            <div class="info">
                                <h3>Horarios</h3>
                                <p>Lunes a viernes 8am - 5pm</p>
                            </div>
                            <div class="info">
                                <h3>Noticias</h3>
                                <p>Suscribete para recibir mas notificaciones</p>
                                <input type="email" placeholder="Tu correo">
                
                                <input type="submit" class="btn btn-amarillo btn__suscripcion" value="Suscribirse">
                            </div>
                        </div>
                    </footer>
                
                    @vite(['public/js/app.js', 'public/js/carruser.js','public/js/validacionesindex.js'])
                    @vite(['public/css/normalize.css', 'public/css/indexstyle.css'])
                </div>
            </div>
        </div>
    </body>
</html>
