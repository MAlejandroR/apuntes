
<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
/**
 * @param $frase representa una solución que queremos verificar
 * @param $solucion es un array de palabras con la solución
 * @return booleano si la frase coincide con la solución sin tener en cuenta los espacios en blanco
 */
function contains(string|null $respuesta, string|null $solucion): bool
{
    $respuesta = explode(" ", $respuesta);
    $solucion = explode(" ", $solucion);
    $rtdo = array_diff($solucion, $respuesta);
    return (!(bool)count($rtdo));
}

$respuesta = htmlspecialchars(filter_input(INPUT_POST, "respuesta"));
$solucion = htmlspecialchars(filter_input(INPUT_POST, "solucion"));

$ejercicio = filter_input(INPUT_POST, "ejercicio");

$rtdo = contains($respuesta, $solucion);
$msj = $rtdo ? "<span style='color:green'>Muy bien</span>" : "<span style='color:red'>No parece una buena solución</span>";

$msj .= "<br />Respuesta <span style='color:green'>$respuesta</span>";
$msj .= "<br />Solución <span style='color:green'>$solucion</span>";


$paginaDeReferencia = $_SERVER['HTTP_REFERER'];
header("Refresh: 5; url=$paginaDeReferencia");

?>

<!doctype html>
<html itemscope itemtype="http://schema.org/WebPage" lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="alternate" type="application/rss&#43;xml"
          href="http://proyectosdwa.es/manuel/docs/0_docker/1_ejercicios/1_imagenes/index.xml">
    <meta name="robots" content="index, follow">


    <link rel="shortcut icon" href="/manuel/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="/manuel/favicons/apple-touch-icon-180x180.png" sizes="180x180">
    <link rel="icon" type="image/png" href="/manuel/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/manuel/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/manuel/favicons/android-36x36.png" sizes="36x36">
    <link rel="icon" type="image/png" href="/manuel/favicons/android-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="/manuel/favicons/android-72x72.png" sizes="72x72">
    <link rel="icon" type="image/png" href="/manuel/favicons/android-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/manuel/favicons/android-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="/manuel/favicons/android-192x192.png" sizes="192x192">

    <title>Soluciones a ejercicios</title>
    <meta name="description" content="Apuntes sobre web">
    <meta property="og:title" content="Crea imágenes"/>
    <meta property="og:description" content="Apuntes sobre web"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://proyectosdwa.es/manuel/docs/0_docker/1_ejercicios/1_imagenes/"/>
    <meta itemprop="name" content="Crea imágenes">
    <meta itemprop="description" content="Apuntes sobre web">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Crea imágenes"/>
    <meta name="twitter:description" content="Apuntes sobre web"/>


    <link rel="preload"
          href="/manuel/scss/main.min.a259b9314771009688f4539373ec884b9c75fd106d86fce70f6e126c27b44f1a.css" as="style">
    <link href="/manuel/scss/main.min.a259b9314771009688f4539373ec884b9c75fd106d86fce70f6e126c27b44f1a.css"
          rel="stylesheet" integrity="">

    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK"
            crossorigin="anonymous"></script>

</head>
<body class="td-section">
<header>
    <header>
        <nav class="js-navbar-scroll navbar navbar-expand navbar-dark flex-column flex-md-row td-navbar">
            <a class="navbar-brand" href="/manuel/"><span class="navbar-brand__logo navbar-logo"><svg version="1.0"
                                                                                                      xmlns="http://www.w3.org/2000/svg"
                                                                                                      width="300pt"
                                                                                                      height="100pt"
                                                                                                      viewBox="0 0 300 100"><g
                                transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#000"
                                stroke="none"><path
                                    d="M2867 984c-15-16-7-53 14-59 30-10 58 19 43 43-12 18-45 28-57 16z"/><path
                                    d="M2542 960c-27-11-39-37-24-52 8-8 15-8 26 1 17 15 58 11 63-5 2-7-19-39-47-72-70-85-68-92 30-92 73 0 80 2 80 20 0 17-7 20-45 20h-45l40 51c25 32 40 61 40 79 0 49-58 74-118 50z"/><path
                                    d="M2680 945c0-18 5-25 20-25 19 0 20-7 20-90 0-89 0-90 25-90h25v115 115h-45c-41 0-45-2-45-25z"/><path
                                    d="M2960 910c0-5 5-10 10-10 6 0 10 5 10 10 0 6-4 10-10 10-5 0-10-4-10-10z"/><path
                                    d="M2910 881c0-18 30-25 43-11 9 10 9 11-1 6-7-4-19-2-27 4-11 9-15 9-15 1z"/><path
                                    d="M2850 805c-24-25-42-45-39-45s25 20 49 45 42 45 39 45-25-20-49-45z"/><path
                                    d="M7 824c-4-4-7-128-7-274 0-217 3-270 14-279 9-8 45-11 98-9l83 3 5 184 5 184 109-164c60-90 118-174 129-186l20-23h349 348v75 75H960 760v35 35l188 2 187 3v65 65l-187 3-188 2v25 25h320 320V465 259l98 3 97 3 3 203 2 202h210 210l2-202 3-203h1e2 1e2l3 202 2 202 118 3 117 3 3 78 3 77h-960-961l-2-182-3-183-120 180-121 180-145 3c-80 1-148-1-152-4z"/><path
                                    d="M753 169c-26-8-33-16-39-45-3-19-2-50 3-67 7-26 16-34 46-41 59-15 91 1 95 47 3 36 3 37-32 37-37 0-48-13-20-24 22-8 7-26-22-26-21 0-24 4-24 40 0 47 13 56 64 42 32-9 36-8 36 8 0 10-3 21-7 23-20 12-71 15-1e2 6z"/><path
                                    d="M1416 167c-28-20-18-71 14-75 60-7 71-12 68-35-2-18-11-23-41-25-26-2-39 1-43 12-3 9-10 16-15 16-11 0 1-33 15-42 19-13 74-8 90 8 32 32 13 74-34 74-36 0-63 21-54 43 8 23 63 23 80 0 13-17 13-17 14 0 0 10-11 22-26 27-34 13-47 13-68-3z"/><path
                                    d="M1890 173c-24-9-30-25-30-80 0-61 17-83 63-83 49 0 60 13 65 73 4 46 1 58-17 76-20 20-50 25-81 14zm78-57c2-22 1-50-3-63-5-21-11-24-43-21-37 3-37 3-40 52-4 69 1 78 45 74 36-3 38-5 41-42z"/><path
                                    d="M2035 166c-23-17-28-114-6-139 16-20 81-23 99-5 7 7 12 39 12 75 0 51-3 64-19 73-27 14-64 13-86-4zm80-71V35l-34-3c-40-4-51 9-51 60 0 59 8 69 49 66l36-3V95z"/><path
                                    d="M312 85c-26-53-37-85-29-85 7 0 32 38 55 85 26 53 37 85 29 85-7 0-32-38-55-85z"/><path
                                    d="M480 90V10h53c69 0 88 15 94 72 8 73-6 88-82 88h-65V90zm95 5c0-36-3-40-27-43-26-3-28-1-28 36 0 45 6 54 35 50 16-2 20-10 20-43z"/><path
                                    d="M650 90c0-73 2-80 20-80s20 7 20 80-2 80-20 80-20-7-20-80z"/><path
                                    d="M882 93c3-70 5-78 23-78s20 8 23 78c3 77 3 77-23 77s-26 0-23-77z"/><path
                                    d="M940 155c0-8 9-15 20-15 16 0 19-8 22-62 3-55 5-63 23-63s20 8 23 63c3 54 6 62 22 62 11 0 20 7 20 15 0 12-14 15-65 15s-65-3-65-15z"/><path
                                    d="M1115 158c-3-7-13-41-24-76-17-56-18-64-4-69 9-4 21 1 28 10 15 21 64 22 71 2 7-17 44-21 44-4 0 6-9 42-21 80-21 68-22 69-55 69-19 0-37-6-39-12zm54-75c1-7-6-13-14-13-16 0-19 17-8 46 6 16 7 16 14-2 4-10 8-25 8-31z"/><path
                                    d="M1250 90V10h55c48 0 55 2 55 20 0 16-7 20-35 20h-35v60c0 53-2 60-20 60s-20-7-20-80z"/><path
                                    d="M1549 143c-12-31-4-99 13-120 13-16 80-17 96-1 7 7 12 21 11 32 0 20-1 20-11-2-16-32-83-32-92 1-10 36-7 82 6 95 20 20 64 14 82-10l16-23-2 25c-3 23-8 25-56 28-49 3-53 1-63-25z"/><path
                                    d="M17e2 89c0-51 4-78 10-74 6 3 10 22 10 41 0 34 0 34 45 34s45 0 45-34c0-19 5-38 10-41 6-4 10 23 10 74 0 47-4 81-10 81-5 0-10-16-10-35 0-35 0-35-45-35s-45 0-45 35c0 19-4 35-10 35s-10-34-10-81z"/><path
                                    d="M2170 90V10h50c28 0 50 5 50 10 0 6-18 10-40 10h-40v70c0 40-4 70-10 70s-10-33-10-80z"/><path
                                    d="M2350 90c-45-89-45-90-27-90 6 1 31 39 55 85 32 64 39 85 27 85-9 0-31-32-55-80z"/></g></svg></span><span
                        class="navbar-brand__name">Máster en  Web</span></a>
            <div class="td-navbar-nav-scroll ml-md-auto pr-20%" id="main_navbar ">
                <h1>Soluciones a ejercicos</h1>
                </ul>
            </div>
            <div class="navbar-nav d-none d-lg-block">

            </div>
        </nav>
    </header>
    <html>
    <body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center p-4" style="border: 2px solid #ccc; background-color: #f9f9f9;">
            <h1><?= $msj ?></h1>
        </div>
    </div>
    </body>
    </html>
