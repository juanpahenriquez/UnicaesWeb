<?php include "../../../php/enlaces.php"?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php include "../layouts/header.php"?>

<?php
/**
 * =========================================================================
 * DATOS DEL PENSUM (sin BD, tal como se acordó)
 * -------------------------------------------------------------------------
 * IMPORTANTE: los prerrequisitos ('prereq') se transcribieron leyendo el
 * "número correlativo" de cada casilla del documento oficial. Verifica
 * cada valor contra el PDF/Excel oficial antes de publicar.
 * =========================================================================
 */
$pensum = [
    // -------- Ciclo I --------
    ['correlativo' => 1,  'codigo' => 'TEO100', 'nombre' => 'Teología I',                          'ciclo' => 1, 'fila' => 1, 'uv' => 4, 'prereq' => 'B', 'ce' => true],
    ['correlativo' => 2,  'codigo' => 'FIG100', 'nombre' => 'Filosofía General',                   'ciclo' => 1, 'fila' => 2, 'uv' => 4, 'prereq' => 'B', 'ce' => true],
    ['correlativo' => 3,  'codigo' => 'DPE100', 'nombre' => 'Desarrollo Personal',                 'ciclo' => 1, 'fila' => 3, 'uv' => 4, 'prereq' => 'B', 'ce' => true],
    ['correlativo' => 4,  'codigo' => 'TDR100', 'nombre' => 'Técnicas de Redacción',                'ciclo' => 1, 'fila' => 4, 'uv' => 4, 'prereq' => 'B', 'ce' => true],
    ['correlativo' => 5,  'codigo' => 'MAT106', 'nombre' => 'Matemática I',                         'ciclo' => 1, 'fila' => 5, 'uv' => 4, 'prereq' => 'B', 'ce' => true],

    // -------- Ciclo II --------
    ['correlativo' => 6,  'codigo' => 'TEO200', 'nombre' => 'Teología II',                          'ciclo' => 2, 'fila' => 1, 'uv' => 4, 'prereq' => '1', 'ce' => true],
    ['correlativo' => 7,  'codigo' => 'ETS100', 'nombre' => 'Ética Social',                         'ciclo' => 2, 'fila' => 2, 'uv' => 4, 'prereq' => 'B', 'ce' => true],
    ['correlativo' => 8,  'codigo' => 'FIS106', 'nombre' => 'Física I',                             'ciclo' => 2, 'fila' => 3, 'uv' => 4, 'prereq' => 5],
    ['correlativo' => 9,  'codigo' => 'EST006', 'nombre' => 'Estadística',                          'ciclo' => 2, 'fila' => 4, 'uv' => 4, 'prereq' => 'B'],
    ['correlativo' => 10, 'codigo' => 'MAT206', 'nombre' => 'Matemática II',                        'ciclo' => 2, 'fila' => 5, 'uv' => 4, 'prereq' => 5],

    // -------- Ciclo III --------
    ['correlativo' => 11, 'codigo' => 'MAT306', 'nombre' => 'Matemática III',                       'ciclo' => 3, 'fila' => 1, 'uv' => 4, 'prereq' => 10],
    ['correlativo' => 12, 'codigo' => 'MYT100', 'nombre' => 'Métodos y Técnicas de Investigación',   'ciclo' => 3, 'fila' => 2, 'uv' => 4, 'prereq' => 4],
    ['correlativo' => 13, 'codigo' => 'PDE006', 'nombre' => 'Principios de Electrónica',             'ciclo' => 3, 'fila' => 3, 'uv' => 4, 'prereq' => 8],
    ['correlativo' => 14, 'codigo' => 'PRO106', 'nombre' => 'Programación I',                        'ciclo' => 3, 'fila' => 4, 'uv' => 4, 'prereq' => 'B'],

    // -------- Ciclo IV --------
    ['correlativo' => 15, 'codigo' => 'MAT406', 'nombre' => 'Matemática IV',                         'ciclo' => 4, 'fila' => 1, 'uv' => 4, 'prereq' => 11],
    ['correlativo' => 16, 'codigo' => 'SOP006', 'nombre' => 'Sistemas Operativos',                   'ciclo' => 4, 'fila' => 2, 'uv' => 4, 'prereq' => 4],
    ['correlativo' => 17, 'codigo' => 'CLC006', 'nombre' => 'Circuitos Lógicos y de Computación',    'ciclo' => 4, 'fila' => 3, 'uv' => 4, 'prereq' => 13],
    ['correlativo' => 18, 'codigo' => 'PRO206', 'nombre' => 'Programación II',                       'ciclo' => 4, 'fila' => 4, 'uv' => 4, 'prereq' => 14],

    // -------- Ciclo V --------
    ['correlativo' => 19, 'codigo' => 'MEN006', 'nombre' => 'Métodos Numéricos',                     'ciclo' => 5, 'fila' => 1, 'uv' => 4, 'prereq' => 15],
    ['correlativo' => 20, 'codigo' => 'BDD006', 'nombre' => 'Bases de Datos',                        'ciclo' => 5, 'fila' => 2, 'uv' => 4, 'prereq' => 16],
    ['correlativo' => 21, 'codigo' => 'EDD006', 'nombre' => 'Estructura de Datos',                   'ciclo' => 5, 'fila' => 3, 'uv' => 4, 'prereq' => 18],
    ['correlativo' => 22, 'codigo' => 'POO006', 'nombre' => 'Programación Orientada a Objetos',      'ciclo' => 5, 'fila' => 4, 'uv' => 4, 'prereq' => 18],

    // -------- Ciclo VI --------
    ['correlativo' => 23, 'codigo' => 'RED006', 'nombre' => 'Redes',                                 'ciclo' => 6, 'fila' => 1, 'uv' => 4, 'prereq' => 16],
    ['correlativo' => 24, 'codigo' => 'ABD006', 'nombre' => 'Administración de Bases de Datos',      'ciclo' => 6, 'fila' => 2, 'uv' => 4, 'prereq' => 20],
    ['correlativo' => 25, 'codigo' => 'AIA006', 'nombre' => 'Algoritmos de Inteligencia Artificial',  'ciclo' => 6, 'fila' => 3, 'uv' => 4, 'prereq' => 21],
    ['correlativo' => 26, 'codigo' => 'TEW006', 'nombre' => 'Tecnologías Web',                        'ciclo' => 6, 'fila' => 4, 'uv' => 4, 'prereq' => 22],

    // -------- Ciclo VII --------
    ['correlativo' => 27, 'codigo' => 'LRC006', 'nombre' => 'Laboratorio de Redes Computacionales',   'ciclo' => 7, 'fila' => 1, 'uv' => 4, 'prereq' => 23],
    ['correlativo' => 28, 'codigo' => 'SIN006', 'nombre' => 'Sistemas Informáticos',                  'ciclo' => 7, 'fila' => 2, 'uv' => 4, 'prereq' => 24],
    ['correlativo' => 29, 'codigo' => 'SEI006', 'nombre' => 'Seguridad Informática',                  'ciclo' => 7, 'fila' => 3, 'uv' => 4, 'prereq' => 25],
    ['correlativo' => 30, 'codigo' => 'DAW006', 'nombre' => 'Desarrollo de Aplicaciones Web',         'ciclo' => 7, 'fila' => 4, 'uv' => 4, 'prereq' => 26],

    // -------- Ciclo VIII --------
    ['correlativo' => 31, 'codigo' => 'REI006', 'nombre' => 'Redes Inalámbricas',                     'ciclo' => 8, 'fila' => 1, 'uv' => 4, 'prereq' => 27],
    ['correlativo' => 32, 'codigo' => 'TPS006', 'nombre' => 'Técnicas de Producción de Sistemas',      'ciclo' => 8, 'fila' => 2, 'uv' => 4, 'prereq' => 28],
    ['correlativo' => 33, 'codigo' => 'GRT006', 'nombre' => 'Gestión de Riesgos Tecnológicos',         'ciclo' => 8, 'fila' => 3, 'uv' => 4, 'prereq' => 29],
    ['correlativo' => 34, 'codigo' => 'DAM006', 'nombre' => 'Desarrollo de Aplicaciones Móviles',      'ciclo' => 8, 'fila' => 4, 'uv' => 4, 'prereq' => 30],

    // -------- Ciclo IX --------
    ['correlativo' => 35, 'codigo' => 'CEN006', 'nombre' => 'Cómputo en la Nube',                      'ciclo' => 9, 'fila' => 1, 'uv' => 4, 'prereq' => 31],
    ['correlativo' => 36, 'codigo' => 'PDI006', 'nombre' => 'Proyectos de Informática',                 'ciclo' => 9, 'fila' => 2, 'uv' => 4, 'prereq' => 32],
    ['correlativo' => 37, 'codigo' => 'AUS006', 'nombre' => 'Auditoría de Sistemas',                    'ciclo' => 9, 'fila' => 3, 'uv' => 4, 'prereq' => 33],
    ['correlativo' => 38, 'codigo' => 'IDN006', 'nombre' => 'Inteligencia de Negocios',                 'ciclo' => 9, 'fila' => 4, 'uv' => 4, 'prereq' => 25],

    // -------- Ciclo X --------
    ['correlativo' => 39, 'codigo' => 'IEN006', 'nombre' => 'Infraestructura en la Nube',               'ciclo' => 10, 'fila' => 1, 'uv' => 4, 'prereq' => 35],
    ['correlativo' => 40, 'codigo' => 'ADS006', 'nombre' => 'Administración de Servidores',             'ciclo' => 10, 'fila' => 2, 'uv' => 4, 'prereq' => 36],
    ['correlativo' => 41, 'codigo' => 'ETI100', 'nombre' => 'Ética',                                    'ciclo' => 10, 'fila' => 3, 'uv' => null, 'prereq' => null, 'ce' => true, 'nota' => '100 UV acumuladas'],
    ['correlativo' => 42, 'codigo' => 'TEM006', 'nombre' => 'Tecnologías Emergentes',                   'ciclo' => 10, 'fila' => 4, 'uv' => 4, 'prereq' => 38],
];

$ciclosNumeros = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'];

$uvPorCiclo = [];
foreach ($pensum as $m) {
    $c = $m['ciclo'];
    $uvPorCiclo[$c] = ($uvPorCiclo[$c] ?? 0) + (int) ($m['uv'] ?? 0);
}
$totalUV = array_sum($uvPorCiclo);
?>



<!-- TITULO DE LA CARRERA - jumbotron bootstrap modernizado -->
    <div class="jumbotron jumbotron-fluid jumbotron-detalle animate__animated animate__fadeInDown">
        <div class="jumbotron-detalle-bg"></div>
        <div class="container jumbotron-detalle-content">
            <div class="card-badges justify-content-center mb-3">
                <span class="card-badge card-badge--presencial"><i class="fa-solid fa-location-dot"></i> Presencial</span>
                <span class="card-badge card-badge--duracion"><i class="fa-solid fa-clock"></i> 5 años • 10 ciclos • 164 UV</span>
            </div>
            <h1 class="display-4">Ingeniería en Sistemas Informáticos</h1>
            <p class="lead">Forma profesionales capaces de diseñar y administrar sistemas de información con enfoque tecnológico</p>
        </div>
    </div>


    <style>

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab - expresivo */
    .tab {
        display: flex;
        flex-wrap: wrap;
        gap: 0;
    }
    .tab button {
        background-color: inherit;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: background-color var(--dur-base, 300ms) var(--ease-default, ease), color var(--dur-base, 300ms) var(--ease-default, ease), transform var(--dur-fast, 150ms) var(--ease-bounce, ease);
        font-size: 17px;
        position: relative;
        will-change: transform;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #e8dcc8;
        transform: translateY(-1px);
    }
    .tab button:active{ transform: translateY(0); }
    .tab button:focus-visible{ outline: 2px solid #d4a574; outline-offset: -2px; }

    /* Create an active/current tablink class - expresivo */
    .tab button.active {
        background: linear-gradient(135deg, #7a1515, #5c0e0e);
        color: #fff;
        box-shadow: 0 2px 8px rgba(122,21,21,0.2);
    }

    /* Style the tab content - expresivo */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        animation: fadeEffect 0.45s cubic-bezier(0.16,1,0.3,1) both;
    }

    /* Fade in tabs - expresivo con translate */
    @-webkit-keyframes fadeEffect {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeEffect {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Style the pills */
    .nav-pills {
        gap: 0.5rem;
    }

    .nav-pills .nav-link {
        color: #7a1515;
        font-weight: 600;
        border-radius: 50px;
        padding: 0.6rem 1.5rem;
        background-color: #fdf3e8;
        border: 1px solid #d4a574;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.85rem;
        transition: background-color var(--dur-base,300ms) var(--ease-default,ease), border-color var(--dur-base,300ms) var(--ease-default,ease), color var(--dur-base,300ms) var(--ease-default,ease), transform var(--dur-fast,150ms) var(--ease-bounce,ease);
        will-change: transform;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background: linear-gradient(135deg, #7a1515, #5c0e0e) !important;
        border-color: #5c0e0e;
        color: #fff !important;
        box-shadow: 0 4px 12px rgba(122,21,21,0.18);
    }

    .nav-pills .nav-link:hover:not(.active) {
        color: #5c0e0e;
        background-color: #f5e6c8;
        border-color: #c9953c;
        transform: translateY(-2px);
    }
    .nav-pills .nav-link:active:not(.active){ transform: translateY(0); }

    /* Tarjetas de estadísticas (Generalidades) - expresivo */
    .stat-card {
        background: #ffffff;
        border: 1.5px solid #e8d7c5;
        border-radius: 14px;
        padding: 1.1rem 1rem;
        transition: transform var(--dur-base,300ms) var(--ease-bounce,ease), box-shadow var(--dur-base,300ms) var(--ease-default,ease), border-color var(--dur-base,300ms) var(--ease-default,ease);
        box-shadow: 0 4px 12px rgba(122, 21, 21, 0.05);
        display: flex;
        align-items: center;
        gap: 1rem;
        height: 100%;
        will-change: transform;
    }

    .stat-card:hover {
        transform: translateY(-4px) scale(1.015);
        box-shadow: 0 12px 28px rgba(122, 21, 21, 0.14);
        border-color: #7a1515;
    }

    .stat-card__icon {
        width: 48px;
        height: 48px;
        min-width: 48px;
        border-radius: 12px;
        background: linear-gradient(135deg, rgba(122, 21, 21, 0.1) 0%, rgba(212, 165, 116, 0.2) 100%);
        color: #7a1515;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.35rem;
        transition: background var(--dur-base,300ms) var(--ease-default,ease), color var(--dur-base,300ms) var(--ease-default,ease), transform var(--dur-base,300ms) var(--ease-bounce,ease);
        will-change: transform;
    }

    .stat-card:hover .stat-card__icon {
        background: linear-gradient(135deg, #7a1515 0%, #5c0e0e 100%);
        color: #ffffff;
    }

    .stat-card__content {
        display: flex;
        flex-direction: column;
    }

    .stat-card__number {
        font-size: 1.5rem;
        font-weight: 800;
        color: #7a1515;
        line-height: 1.1;
    }

    .stat-card__label {
        font-size: 0.8rem;
        font-weight: 600;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 3px;
    }

    @media (max-width: 991.98px) {
        .stat-card {
            padding: 0.9rem 0.75rem;
            gap: 0.75rem;
        }
        .stat-card__icon {
            width: 42px;
            height: 42px;
            min-width: 42px;
            font-size: 1.15rem;
        }
        .stat-card__number {
            font-size: 1.3rem;
        }
        .stat-card__label {
            font-size: 0.72rem;
        }
    }

    @media (max-width: 575.98px) {
        .stat-card {
            flex-direction: column;
            text-align: center;
            padding: 1rem 0.5rem;
        }
        .stat-card__content {
            align-items: center;
        }
    }
    </style>



    <div class="container mb-5">
        <br>
        <div class="row">
            <div class="col-10">
                <h3 class="pb-2 mb-4 border-bottom">Informacion de la carrera:</h3>
            </div>
            <div class="col-2"><a href="./assets/img/sistemaspensum20151.jpg" onclick="triggerDownload()"
                    class="btn btn-danger show-example-btn w-100 h-50" style="font-size: 20px;"><i
                        class="fa-solid fa-file-pdf" aria-hidden="true"></i></a></div>
        </div>

        <script>
        document.querySelector('.show-example-btn').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                position: "center",
                icon: "success",
                title: "El pensum ha sido descargado!",
                showConfirmButton: false,
                timer: 1500
            });
        });

        function triggerDownload() {
            const link = document.createElement('a');
            link.href = '/PRACTICA1/assets/img/sistemaspensum20151.jpg';
            link.download = 'sistemaspensum20151.jpg'
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        </script>


        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Generalidades')" id="defaultOpen">Generalidades</button>
            <button class="tablinks" onclick="openCity(event, 'Pensum')">Pensum</button>
            <button class="tablinks" onclick="openCity(event, 'Inversion')">Inversion</button>
        </div>


        <div id="Generalidades" class="tabcontent">
            <div class="p-4" style="background: #fff;">

                <h3 style="font-weight: 700; padding-bottom: 0.75rem;">Generalidades</h3>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8 mb-4 mb-lg-0">

                        <!-- Datos generales -->
                        <div class="mt-2" style="font-size: 1.05rem; line-height: 1.9; color: #555;">
                            <p class="mb-2"><strong>Nombre de la carrera:</strong> Ingeniería en Sistemas Informáticos</p>
                            <p class="mb-2"><strong>Requisitos de Ingreso:</strong> Título de bachiller en cualquier opción o su
                                equivalente obtenido en el extranjero y reconocido legalmente en el país.</p>
                            <p class="mb-2"><strong>Título a otorgar:</strong> Ingeniero(a) en Sistemas Informáticos</p>
                            <p class="mb-2"><strong>Duración en años y ciclos:</strong> 5 años, 10 ciclos académicos, más un ciclo
                                para desarrollar trabajo de graduación.</p>
                            <p class="mb-0"><strong>Modalidad en que se ofrece:</strong> Presencial</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 col-sm-4 col-lg-12 mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                                <div class="stat-card">
                                    <div class="stat-card__icon">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <div class="stat-card__content">
                                        <span class="stat-card__number">42</span>
                                        <span class="stat-card__label">Materias a cursar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-12 mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                                <div class="stat-card">
                                    <div class="stat-card__icon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="stat-card__content">
                                        <span class="stat-card__number">10</span>
                                        <span class="stat-card__label">Ciclos académicos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-12 mb-3 mb-lg-0 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                                <div class="stat-card">
                                    <div class="stat-card__icon">
                                        <i class="fa-solid fa-language"></i>
                                    </div>
                                    <div class="stat-card__content">
                                        <span class="stat-card__number">18</span>
                                        <span class="stat-card__label">Niveles de inglés</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gráfico de Empleabilidad -->
                <div class="mt-4 mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                    <h5 style="font-weight: 700; color: #5c0e0e; border-bottom: 2px solid #d4a574; padding-bottom: 8px;">
                        <i class="fa-solid fa-chart-line" style="color: #d4a574;"></i> Tasa de Empleabilidad por Carrera
                    </h5>
                    <div id="chartEmpleabilidad"></div>
                </div>



                <!-- Pills de información -->
                <ul class="nav nav-pills nav-fill mt-4" id="pillsTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-desc-tab" data-toggle="pill" href="#pills-desc" role="tab"
                            aria-controls="pills-desc" aria-selected="true">Descripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-ingreso-tab" data-toggle="pill" href="#pills-ingreso" role="tab"
                            aria-controls="pills-ingreso" aria-selected="false">Perfil de Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-egreso-tab" data-toggle="pill" href="#pills-egreso" role="tab"
                            aria-controls="pills-egreso" aria-selected="false">Perfil de Egreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-areas-tab" data-toggle="pill" href="#pills-areas" role="tab"
                            aria-controls="pills-areas" aria-selected="false">Áreas de trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-requisitos-tab" data-toggle="pill" href="#pills-requisitos"
                            role="tab" aria-controls="pills-requisitos" aria-selected="false">Requisitos de
                            graduación</a>
                    </li>
                </ul>

                <div class="tab-content mt-3 p-3"
                    style="border: 1px solid #d4a574; border-radius: 8px; background: #fff;">
                    <div class="tab-pane fade show active" id="pills-desc" role="tabpanel"
                        aria-labelledby="pills-desc-tab">
                        <p style="text-align: justify; color: #333; margin: 0;">
                            Las tecnologías de la información y comunicación han tenido un enorme crecimiento y
                            desarrollo
                            en el mundo en los últimos años. Los sistemas de información son de gran importancia en
                            la
                            gestión de empresas y organizaciones modernas, entre otros para generar información para
                            la toma
                            de decisiones, concretar negocios o dar mejor servicio a los clientes y usuarios, por
                            ello los
                            ingenieros en esta especialidad son muy requeridos para dar mantenimiento y soporte a
                            estos
                            sistemas.

                            La carrera de Ingeniería en Sistemas Informáticos busca formar profesionales capaces de
                            resolver
                            problemas de tecnologías de la información, aplicando conocimientos científicos,
                            técnicos y
                            éticos en las empresas, contribuyendo con ello al desarrollo tecnológico del país. El
                            ingeniero
                            en este campo deberá diseñar, implementar y mantener sistemas electrónicos para el
                            procesamiento
                            de datos y transmisión de los mismos, sistemas para Internet y programación de
                            dispositivos
                            móviles de información, utilizando lenguajes de programación científicos y comerciales,
                            aplicando estándares de seguridad informática.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-ingreso" role="tabpanel" aria-labelledby="pills-ingreso-tab">
                        <p style="text-align: justify; color: #333; margin: 0;">
                            Interés: El(la) aspirante a ingresar a la carrera de Ingeniería en Sistemas Informáticos
                            posee
                            un interés especial por el desarrollo de aplicaciones informáticas, la elaboración y
                            mejora de
                            los softwares y sistemas de información, así como por la innovación tecnológica en
                            general.

                            Habilidades y aptitudes: debido a que los avances tecnológicos están fundamentados en
                            las
                            ciencias, debe tener un gusto especial por las matemáticas, la lógica y el cálculo
                            científico
                            así como, poseer visión analítica, capacidad para identificar y resolver problemas.

                            Cualidades y actitudes: motivación sólida para el estudio de la informática, disciplina
                            y
                            tenacidad para dedicarse a los estudios y mantenerse en una educación permanente,
                            capacidad para
                            desarrollar procesos de comunicación efectiva, habilidades para diseñar y ejecutar
                            investigaciones, capacidad para trabajar en equipo.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-egreso" role="tabpanel" aria-labelledby="pills-egreso-tab">
                        <p style="text-align: justify; color: #333; margin: 0;">
                            El(la) Ingeniero(a) en Sistemas Informáticos es un profesional capacitado para
                            implementar
                            soluciones a los problemas informáticos que enfrentan las organizaciones, tiene la
                            capacidad de
                            diseñar, implementar, evaluar y mejorar sistemas de información, según las necesidades
                            que se le
                            planteen.

                            Tiene como responsabilidad general, administrar todos aquellos recursos tecnológicos y
                            resguardar la información valiosa de las organizaciones, por el nivel de confianza
                            depositado en
                            la gestión de información de las instituciones debe conducirse con ética y
                            profesionalismo en el
                            desempeño de sus funciones, realizando sus tareas con principios y valores.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-areas" role="tabpanel" aria-labelledby="pills-areas-tab">
                        <p>El(la) Ingeniero(a) en Sistemas Informáticos es requerido en todo tipo de organizaciones
                            públicas
                            y privadas, de bienes o servicios, para gestionar los sistemas de manejo de información.

                            Para ello puede desempeñarse como gerente de informática, programador, desarrollador de
                            software
                            para aplicaciones específicas, implementador de redes informáticas, administrador de
                            bases de
                            datos, desarrollador web, desarrollador de aplicaciones para dispositivos móviles de
                            información, así como gestor de la calidad, seguridad y auditoría de sistemas
                            informáticos.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-requisitos" role="tabpanel"
                        aria-labelledby="pills-requisitos-tab">
                        <ul class="list-group list-group-flush" style="color: #333;">
                            <li class="list-group-item">1. Haber cumplido el servicio social estudiantil de
                                conformidad al
                                Reglamento de Servicio Social Estudiantil de esta Universidad</li>
                            <li class="list-group-item">2. Ostentar la calidad de egresado</li>
                            <li class="list-group-item">3. Si ingresó por equivalencias, haber cursado un mínimo de
                                32 U.V.
                                en esta Universidad</li>
                            <li class="list-group-item">4. Realizar el Trabajo de Graduación de acuerdo a lo
                                estipulado en
                                el Reglamento de Graduación vigente</li>
                            <li class="list-group-item">5. Cumplir con las disposiciones administrativas que la
                                Universidad
                                ha establecido para graduarse</li>
                            <li class="list-group-item">6. Cursar y aprobar 18 niveles de inglés de UNICAES o
                                aprobar un
                                examen cuyo resultado indique que el alumno posee conocimientos equivalentes a los
                                mismos
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


    <div id="Pensum" class="tabcontent">

        <div class="pensum-instrucciones">
            Toca una materia para ver
            <span class="leyenda leyenda--prereq">sus prerrequisitos</span>
            y
            <span class="leyenda leyenda--unlock">las materias que desbloquea</span>.
        </div>
        <div class="table-responsive">
            <div class="pensum-malla" style="--ciclos: <?= count($ciclosNumeros) ?>;">

                <!-- Encabezado de ciclos -->
                <?php foreach ($ciclosNumeros as $i => $numeroRomano): ?>
                <div class="pensum-encabezado" style="grid-column: <?= $i + 1 ?>;"><?= $numeroRomano ?></div>
                <?php endforeach; ?>

                <!-- Materias -->
                <?php foreach ($pensum as $m): ?>
                <?php $prereqTexto = $m['prereq'] === 'B' ? 'B' : ($m['prereq'] ?? '-'); ?>
                <div class="materia-box <?= !empty($m['ce']) ? 'materia-box--ce' : '' ?>"
                    style="grid-column: <?= $m['ciclo'] ?>; grid-row: <?= $m['fila'] + 1 ?>;"
                    data-correlativo="<?= $m['correlativo'] ?>"
                    data-prereq="<?= is_numeric($m['prereq']) ? $m['prereq'] : '' ?>">
                    <div class="materia-box__top">
                        <span class="materia-box__correlativo"><?= $m['correlativo'] ?></span>
                        <span class="materia-box__codigo"><?= htmlspecialchars($m['codigo']) ?></span>
                    </div>
                    <div class="materia-box__nombre"><?= htmlspecialchars($m['nombre']) ?></div>
                    <div class="materia-box__bottom">
                        <?php if (!empty($m['ce'])): ?><span class="materia-box__ce">ce</span><?php endif; ?>
                        <span class="materia-box__uv"><?= $m['uv'] !== null ? $m['uv'] : '' ?></span>
                        <span class="materia-box__prereq"><?= htmlspecialchars($prereqTexto) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Total de UV por ciclo -->
                <?php foreach ($ciclosNumeros as $i => $numeroRomano): ?>
                <div class="pensum-total-ciclo" style="grid-column: <?= $i + 1 ?>; grid-row: 7;">
                    <h6>UV:</h6> <?= isset($uvPorCiclo[$i + 1]) ? $uvPorCiclo[$i + 1] : '' ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="pensum-footer">
            <div class="pensum-leyenda-caja">
                <div class="materia-box materia-box--ejemplo">
                    <div class="materia-box__top">
                        <span class="materia-box__correlativo">1</span>
                        <span class="materia-box__codigo">TEO100</span>
                    </div>
                    <div class="materia-box__nombre">Teología I</div>
                    <div class="materia-box__bottom">
                        <span class="materia-box__ce">ce</span>
                        <span class="materia-box__uv">4</span>
                        <span class="materia-box__prereq">B</span>
                    </div>
                </div>
                <ul class="pensum-leyenda-texto">
                    <li>Número correlativo &amp; Código de la asignatura</li>
                    <li>Nombre de la asignatura</li>
                    <li>Ciclo Extraordinario (ce) · Unidades Valorativas · Prerrequisito (B = Bachillerato)</li>
                    <li>Fila inferior de la malla: total de UV por ciclo</li>
                </ul>
            </div>

            <div class="pensum-total-general">
                <span><?= htmlspecialchars($totalUV) ?></span>
                <small>Total de Unidades<br>Valorativas de la carrera</small>
            </div>
        </div>

        <div id="materiaDetalle" class="materia-detalle"></div>
    </div>



    <div id="Inversion" class="tabcontent">
        <h1 class="display-3" style="font-family: 'Segoe UI', Arial, sans-serif; color: #5c0e0e;">Inversion y Aranceles</h1>
        <p class="lead" style="color: #888; font-family: 'Segoe UI', Arial, sans-serif;">Al inicio de cada ciclo academico:</p>
        <hr class="my-2" style="border-color: #d4a574;">
        <table style="border-collapse: collapse; border: 1px solid #d4a574; border-radius: 8px; overflow: hidden; font-family: 'Segoe UI', Arial, sans-serif;">
            <caption style="font-size: 0.95rem; color: #7a1515; font-weight: 600; padding-bottom: 10px;">Mensualidad de $95.00 (6 cuotas por ciclo en total)</caption>
            <thead>
                <tr style="background: linear-gradient(135deg, #7a1515, #5c0e0e);">
                    <th scope="col" style="text-align: center; border: 1px solid #d4a574; padding: 12px; color: #f5e6c8; font-weight: 600; letter-spacing: 0.5px;">Dato:</th>
                    <th scope="col" style="text-align: center; border: 1px solid #d4a574; padding: 12px; color: #f5e6c8; font-weight: 600; letter-spacing: 0.5px;">Detalle:</th>
                </tr>
            </thead>
            <tbody>
                <tr class="inversion-row">
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #444;">Matricula</td>
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #5c0e0e; font-weight: 600;">$65.00</td>
                </tr>

                <tr class="inversion-row">
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #444;">Primer cuota mensual</td>
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #5c0e0e; font-weight: 600;">$95.00 +</td>
                </tr>

                <tr class="inversion-row">
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #444;">Bienestar universitario</td>
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #5c0e0e; font-weight: 600;">$15.00</td>
                </tr>

                <tr class="inversion-row">
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #444;">Carnet</td>
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #5c0e0e; font-weight: 600;">$4.00</td>
                </tr>

                <tr class="inversion-row">
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #444;">Primer cuota mensual</td>
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #5c0e0e; font-weight: 600;">$95.00</td>
                </tr>

                <tr class="inversion-row">
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #444;">Talonario</td>
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 10px; color: #5c0e0e; font-weight: 600;">$3.00</td>
                </tr>

                <tr style="background: linear-gradient(135deg, #fdf3e8, #f5e6c8);">
                    <td scope="row" style="text-align: center; border: 1px solid #d4a574; padding: 12px; color: #7a1515; font-weight: 700; font-size: 1.05em;">Total</td>
                    <td style="text-align: center; border: 1px solid #d4a574; padding: 12px; color: #7a1515; font-weight: 700; font-size: 1.1em;">$179.00</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>


    <style>
    .inversion-row{ transition: background-color var(--dur-base,300ms) var(--ease-default,ease), transform var(--dur-fast,150ms) var(--ease-default,ease); }
    .inversion-row:hover{ background-color: #fdf6ee !important; transform: translateX(4px); }
    .inversion-row:active{ transform: translateX(0); }

    .pensum-instrucciones {
        font-family: "Roboto", sans-serif;
        color: #666;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .leyenda {
        display: inline-block;
        padding: 2px 10px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 12.5px;
        font-family: "Roboto", sans-serif;
    }

    .leyenda--prereq {
        background: #fff3e0;
        color: #e77b00;
    }

    .leyenda--unlock {
        background: #e6f4ea;
        color: #1e8e3e;
    }

    /* Grid fluido: se ajusta al ancho disponible del tab, sin scroll
       horizontal en pantallas de escritorio/tablet. Los cuadros se
       encogen o crecen según el espacio, en vez de forzar un ancho
       mínimo fijo. */
    .pensum-malla {
        display: grid;
        grid-template-columns: repeat(var(--ciclos), 1fr);
        grid-auto-rows: min-content;
        gap: 8px;
        width: 100%;
        font-family: "Roboto", sans-serif;
        box-sizing: border-box;
    }

    .pensum-malla * {
        box-sizing: border-box;
    }

    .pensum-encabezado {
        grid-row: 1;
        text-align: center;
        font-weight: 700;
        font-size: 14px;
        color: #343434;
        padding-bottom: 6px;
        border-bottom: 3px solid #800000;
        margin-bottom: 4px;
    }

    .pensum-total-ciclo {
        text-align: center;
        font-size: 12px;
        font-weight: 700;
        color: #888;
        padding-top: 6px;
        border-top: 2px solid #eee;
    }

    .materia-box {
        background: #f5f5f5;
        border: 2px solid transparent;
        border-radius: 8px;
        padding: 8px 8px;
        cursor: pointer;
        transition: background-color var(--dur-base,300ms) var(--ease-default,ease), border-color var(--dur-base,300ms) var(--ease-default,ease), opacity var(--dur-base,300ms) var(--ease-default,ease), color var(--dur-base,300ms) var(--ease-default,ease), transform var(--dur-fast,150ms) var(--ease-bounce,ease), box-shadow var(--dur-base,300ms) var(--ease-default,ease);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 96px;
        will-change: transform, opacity;
    }

    .materia-box:hover {
        background: #ebebeb;
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .materia-box:focus-visible{ outline: 2px solid #d4a574; outline-offset: 2px; transform: translateY(-1px); }
    .materia-box:active{ transform: translateY(0) scale(0.98); }

    .materia-box--ce {
        border-left: 4px solid #999;
    }

    .materia-box__top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 10px;
        font-weight: 700;
        color: #999;
        margin-bottom: 3px;
    }

    .materia-box__codigo {
        font-size: 10px;
        color: #999;
    }

    .materia-box__nombre {
        font-size: 11.5px;
        font-weight: 600;
        line-height: 1.2;
        color: #343434;
        flex-grow: 1;
    }

    .materia-box__bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 10px;
        font-weight: 700;
        color: #777;
        margin-top: 5px;
        padding-top: 4px;
        border-top: 1px solid #e2e2e2;
    }

    .materia-box__ce {
        font-size: 9px;
        font-style: italic;
        color: #999;
    }

    /* Estados de interacción - expresivos */
    .materia-box.is-active {
        background: #343434;
        border-color: #343434;
        transform: scale(1.03);
        box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }

    .materia-box.is-active .materia-box__nombre,
    .materia-box.is-active .materia-box__top,
    .materia-box.is-active .materia-box__codigo,
    .materia-box.is-active .materia-box__bottom {
        color: #fff;
    }

    .materia-box.is-prereq {
        background: #fff3e0;
        border-color: #e77b00;
        transform: translateY(-1px);
    }

    .materia-box.is-prereq .materia-box__nombre {
        color: #e77b00;
    }

    .materia-box.is-unlock {
        background: #e6f4ea;
        border-color: #1e8e3e;
        transform: translateY(-1px);
    }

    .materia-box.is-unlock .materia-box__nombre {
        color: #1e8e3e;
    }

    .pensum-malla.tiene-seleccion .materia-box:not(.is-active):not(.is-prereq):not(.is-unlock) {
        opacity: 0.35;
        transition: opacity var(--dur-base,300ms) var(--ease-default,ease);
    }

    /* Pie de tabla */
    .pensum-footer {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 26px;
        padding-top: 20px;
        border-top: 1px solid #eee;
        font-family: "Roboto", sans-serif;
    }

    .pensum-leyenda-caja {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .materia-box--ejemplo {
        width: 130px;
        pointer-events: none;
        cursor: default;
    }

    .pensum-leyenda-texto {
        list-style: none;
        margin: 0;
        padding: 0;
        font-size: 12px;
        color: #666;
    }

    .pensum-leyenda-texto li {
        margin-bottom: 4px;
    }

    .pensum-total-general {
        text-align: center;
        border: 2px solid #343434;
        border-radius: 8px;
        padding: 10px 20px;
    }

    .pensum-total-general span {
        display: block;
        font-size: 22px;
        font-weight: 700;
        color: #800000;
    }

    .pensum-total-general small {
        font-size: 10px;
        color: #666;
        text-transform: uppercase;
    }

    .materia-detalle {
        display: block;
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        margin-top: 0;
        padding: 0 20px;
        border-radius: 12px;
        background: #f9f9f9;
        border-left: 4px solid #343434;
        font-size: 13px;
        color: #343434;
        font-family: "Roboto", sans-serif;
        transform: translateY(8px);
        transition: max-height var(--dur-slow,450ms) var(--ease-default,ease), opacity var(--dur-base,300ms) var(--ease-default,ease), transform var(--dur-base,300ms) var(--ease-default,ease), padding var(--dur-base,300ms) var(--ease-default,ease), margin var(--dur-base,300ms) var(--ease-default,ease);
        will-change: max-height, opacity;
    }

    .materia-detalle.visible {
        max-height: 500px;
        opacity: 1;
        margin-top: 24px;
        padding: 16px 20px;
        transform: translateY(0);
    }

    .materia-detalle strong {
        color: #800000;
    }

    .materia-detalle ul {
        margin: 6px 0 12px;
        padding-left: 18px;
    }

    .materia-detalle ul:last-child {
        margin-bottom: 0;
    }

    /* En pantallas muy angostas, 10 columnas ya no son legibles: ahí sí
       dejamos scroll horizontal como respaldo, con un ancho mínimo. */
    @media (max-width: 767px) {
        .pensum-malla {
            overflow-x: auto;
            grid-template-columns: repeat(var(--ciclos), minmax(110px, 1fr));
            min-width: 1100px;
        }

        .pensum-footer {
            flex-direction: column;
            align-items: stretch;
        }
    }

    /* ===================== Responsive general ===================== */
    @media (max-width: 767px) {
        .tab button {
            flex: 1 1 100%;
            font-size: 15px;
            padding: 12px 10px;
        }

        .pills-wrapper {
            gap: 8px;
        }

        .pill-btn {
            font-size: 12.5px;
            padding: 7px 14px;
        }

        h3.pb-2.mb-4 {
            font-size: 20px;
        }

        .card-body.p-4.p-md-5 {
            padding: 1.25rem !important;
        }
    }

    table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

    </style>


    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();

    // -------- Interacción del pensum: resaltar prerrequisitos / desbloqueos --------
    $(document).ready(function() {
        var $malla = $(".pensum-malla");
        var $todas = $(".materia-box:not(.materia-box--ejemplo)");
        var $detalle = $("#materiaDetalle");

        var infoPorCorrelativo = {};
        $todas.each(function() {
            var correlativo = String($(this).data("correlativo"));
            infoPorCorrelativo[correlativo] = {
                nombre: $.trim($(this).find(".materia-box__nombre").text())
            };
            // Accesibilidad expresiva
            $(this).attr({tabindex: 0, role: 'button', 'aria-pressed': 'false'});
        });
        $detalle.attr('aria-live','polite');

        function handleMateriaSelect($clicked){
            var yaActiva = $clicked.hasClass("is-active");
            $todas.removeClass("is-active is-prereq is-unlock").attr('aria-pressed','false');
            $malla.removeClass("tiene-seleccion");
            $detalle.removeClass("visible");
            // esperar transición antes de vaciar para efecto expresivo
            setTimeout(function(){ if(!$detalle.hasClass('visible')) $detalle.empty(); }, 300);
            if (yaActiva) return;
            var correlativoActual = String($clicked.data("correlativo"));
            var prereq = String($clicked.data("prereq") || "").trim();
            $clicked.addClass("is-active").attr('aria-pressed','true');
            $malla.addClass("tiene-seleccion");
            var nombrePrereq = null;
            if (prereq !== "") {
                $todas.filter('[data-correlativo="' + prereq + '"]').addClass("is-prereq");
                if (infoPorCorrelativo[prereq]) nombrePrereq = infoPorCorrelativo[prereq].nombre;
            }
            var nombresUnlock = [];
            $todas.each(function() {
                var otroPrereq = String($(this).data("prereq") || "").trim();
                if (otroPrereq === correlativoActual) {
                    $(this).addClass("is-unlock");
                    nombresUnlock.push($.trim($(this).find(".materia-box__nombre").text()));
                }
            });
            var nombreActual = $clicked.find(".materia-box__nombre").text().trim();
            var html = "<strong>" + nombreActual + "</strong><br>";
            if (nombrePrereq) {
                html += "<span>Requiere haber aprobado:</span><ul><li>" + nombrePrereq + "</li></ul>";
            } else if (prereq === "") {
                html += "<span>Solo requiere haber cursado Bachillerato.</span>";
            }
            if (nombresUnlock.length > 0) {
                html += "<span>Al aprobarla, habilita:</span><ul>";
                nombresUnlock.forEach(function(n) { html += "<li>" + n + "</li>"; });
                html += "</ul>";
            } else {
                html += "<span>No es prerrequisito de ninguna otra materia.</span>";
            }
            $detalle.html(html);
            // trigger reflow para transición expresiva
            $detalle[0].offsetHeight;
            $detalle.addClass("visible");
        }

        $todas.on("click", function() { handleMateriaSelect($(this)); });
        $todas.on("keydown", function(e){ if(e.key==='Enter' || e.key===' '){ e.preventDefault(); handleMateriaSelect($(this)); } });
    });
    </script>


    <script>
    // Gráfico de Empleabilidad por Carrera - expresivo + respeta reduced-motion
    var mqReduceChart = window.matchMedia('(prefers-reduced-motion: reduce)');
    var optionsEmpleabilidad = {
        series: [92, 85, 78, 70],
        chart: {
            type: 'radialBar',
            height: 320,
            fontFamily: "'Segoe UI', Arial, sans-serif",
            animations: { enabled: !mqReduceChart.matches, speed: 900, animateGradually: { enabled: true, delay: 150 }, dynamicAnimation: { speed: 400 } }
        },
        labels: ['Ing. Sistemas', 'Ing. Software', 'Lic. Mercadeo', 'Lic. Inglés'],
        colors: ['#7a1515', '#d4a574', '#5c0e0e', '#c9953c'],
        plotOptions: {
            radialBar: {
                hollow: { size: '30%' },
                dataLabels: {
                    name: { fontSize: '13px', color: '#555' },
                    value: {
                        fontSize: '16px',
                        fontWeight: 700,
                        color: '#5c0e0e',
                        formatter: function(val) { return val + '%'; }
                    }
                }
            }
        },
        legend: {
            position: 'bottom',
            fontSize: '12px',
            labels: { colors: '#555' }
        },
        stroke: { lineCap: 'round' }
    };
    var chartEmpleabilidad = new ApexCharts(
        document.querySelector("#chartEmpleabilidad"),
        optionsEmpleabilidad
    );
    chartEmpleabilidad.render();
    </script>

    <?php include "../layouts/footer.php"?>