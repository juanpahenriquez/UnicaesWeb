<?php include "../../../php/enlaces.php"?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<?php include "../layouts/header.php"?>

<div class="carreras-page">
    <!-- Hero Section -->
    <div class="carreras-hero">
        <div class="carreras-hero-bg"></div>
        <div class="carreras-hero-content">
            <h1 class="animate__animated animate__fadeInDown">Carreras</h1>
            <p class="carreras-subtitle animate__animated animate__fadeInUp">Formación profesional con valores cristianos desde 1982</p>
        </div>
    </div>

    <!-- Filtro -->
    <div class="container-filtros animate__animated animate__fadeInUp">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <select class="selectpicker" id="filtroCarreras" data-live-search="true" title="Filtrar carreras..." data-width="100%">
                    <option value="todas">Todas las carreras</option>
                    <optgroup label="Presencial">
                        <option value="presencial ingenieria">Ingeniería</option>
                        <option value="presencial licenciatura">Licenciatura</option>
                    </optgroup>
                    <optgroup label="Virtual">
                        <option value="virtual licenciatura">Licenciatura</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>

    <!-- Carrusel de carreras -->
    <div id="carrerasCarousel" class="carousel slide carreras-carousel" data-ride="false" data-interval="false">
        <div class="carousel-inner">

            <div class="carousel-item active" data-category="presencial ingenieria">
                <div class="carreras-grid">
                    <div class="wrap wrap--1" data-category="presencial ingenieria">
                        <div class="container container--1">
                            <div class="card-badges">
                                <span class="card-badge card-badge--presencial">Presencial</span>
                                <span class="card-badge card-badge--duracion">5 años</span>
                            </div>
                            <div class="card-content">
                                <p class="card-title">Ingeniería en Sistemas</p>
                                <p class="card-description">Forma profesionales capaces de diseñar, desarrollar y administrar sistemas de información con enfoque tecnológico.</p>
                                <a href="sistemadetalle.php" class="card-btn"><span>Ver más</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="wrap wrap--2" data-category="presencial ingenieria">
                        <div class="container container--2">
                            <div class="card-badges">
                                <span class="card-badge card-badge--presencial">Presencial</span>
                                <span class="card-badge card-badge--duracion">5 años</span>
                            </div>
                            <div class="card-content">
                                <p class="card-title">Ingeniería en Desarrollo de Software</p>
                                <p class="card-description">Prepara profesionales para crear aplicaciones y soluciones software utilizando metodologías ágiles.</p>
                                <a href="#" class="card-btn"><span>Ver más</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="wrap wrap--3" data-category="presencial licenciatura">
                        <div class="container container--3">
                            <div class="card-badges">
                                <span class="card-badge card-badge--presencial">Presencial</span>
                                <span class="card-badge card-badge--duracion">4 años</span>
                            </div>
                            <div class="card-content">
                                <p class="card-title">Licenciatura en Mercadeo</p>
                                <p class="card-description">Desarrolla estrategias de marketing y ventas para impulsar el crecimiento de organizaciones.</p>
                                <a href="#" class="card-btn"><span>Ver más</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-category="virtual licenciatura">
                <div class="carreras-grid carreras-grid--single">
                    <div class="wrap wrap--4" data-category="virtual licenciatura">
                        <div class="container container--4">
                            <div class="card-badges">
                                <span class="card-badge card-badge--virtual">Virtual</span>
                                <span class="card-badge card-badge--duracion">4 años</span>
                            </div>
                            <div class="card-content">
                                <p class="card-title">Licenciatura en Idioma Inglés</p>
                                <p class="card-description">Forma educadores y profesionales bilingües con dominio del idioma inglés en diversos contextos.</p>
                                <a href="#" class="card-btn"><span>Ver más</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controles -->
        <a class="carousel-control-prev" href="#carrerasCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carrerasCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>

        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#carrerasCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#carrerasCarousel" data-slide-to="1"></li>
        </ol>
    </div>

    <!-- Sin resultados -->
    <div class="carreras-sin-resultados" id="sinResultados">
        <i class="fa-solid fa-search"></i>
        <p>No se encontraron carreras con este filtro.</p>
    </div>
</div>

<script>
$(function() {
    var $carousel = $('#carrerasCarousel');
    var $inner = $carousel.find('.carousel-inner');
    var $indicadores = $carousel.find('.carousel-indicators');
    var $sinResultados = $('#sinResultados');
    var filtroActual = 'todas';
    var resizeTimer = null;

    // Guardar todas las cards originales
    var $todasLasCards = [];
    $inner.find('.carousel-item .wrap').each(function() {
        $todasLasCards.push($(this).clone());
    });

    function getChunkSize() {
        var w = $(window).width();
        if (w <= 768) return 1;
        if (w <= 992) return 2;
        return 3;
    }

    function rebuildCarousel(filtro) {
        filtroActual = filtro;
        // Limpiar
        $inner.empty();
        $indicadores.empty();

        // Filtrar cards - match exacto para evitar falsos positivos por substring
        var cardsFiltradas = [];
        $todasLasCards.forEach(function($card) {
            var cats = ($card.data('category') || '').toString().trim();
            if (filtro === 'todas' || cats === filtro) {
                cardsFiltradas.push($card.clone());
            }
        });

        // Sin resultados
        if (cardsFiltradas.length === 0) {
            $carousel.hide();
            $sinResultados.show();
            return;
        }

        $sinResultados.hide();
        $carousel.show();

        // Reconstruir slides: 3/desktop, 2/tablet (≤992), 1/móvil (≤768)
        var CHUNK = getChunkSize();
        for (var i = 0; i < cardsFiltradas.length; i += CHUNK) {
            var $item = $('<div class="carousel-item"></div>');
            if (i === 0) $item.addClass('active');
            var $grid = $('<div class="carreras-grid"></div>');
            if (cardsFiltradas.length - i < CHUNK) {
                $grid.addClass('carreras-grid--incompleto');
            }
            for (var k = 0; k < CHUNK && (i + k) < cardsFiltradas.length; k++) {
                $grid.append(cardsFiltradas[i + k]);
            }
            $item.append($grid);
            $inner.append($item);
        }

        // Reconstruir indicadores
        var totalSlides = $inner.find('.carousel-item').length;
        for (var j = 0; j < totalSlides; j++) {
            var $li = $('<li></li>');
            $li.attr('data-target', '#carrerasCarousel');
            $li.attr('data-slide-to', j);
            if (j === 0) $li.addClass('active');
            $indicadores.append($li);
        }
    }

    // Inicial: asegurar agrupado correcto según viewport actual
    rebuildCarousel('todas');

    // Filtro
    $('#filtroCarreras').on('changed.bs.select', function() {
        var val = $(this).val();
        rebuildCarousel(val);
    });

    // Responsive: reagrupar al cruzar breakpoints 768px / 992px
    var lastChunk = getChunkSize();
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            var newChunk = getChunkSize();
            if (newChunk !== lastChunk) {
                lastChunk = newChunk;
                rebuildCarousel(filtroActual);
            }
        }, 200);
    });
});
</script>

<?php include "../layouts/footer.php"?>