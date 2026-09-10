<?php include "../../../php/enlaces.php"?>
<?php include "../layouts/header.php"?>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<div class="contacto-page">
    <!-- Hero Section -->
    <div class="contacto-hero">
        <div class="contacto-hero-bg"></div>
        <div class="contacto-hero-content">
            <h1 class="animate__animated animate__fadeInDown">Contacto</h1>
            <p class="contacto-subtitle animate__animated animate__fadeInUp">Estamos aquí para atenderte</p>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container py-5">
        <div class="row">
            <!-- Información de contacto -->
            <div class="col-lg-4 mb-4">
                <div class="contacto-info-card">
                    <div class="contacto-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Ubicación</h4>
                    <p>Carretera hacia Ilobasco 2 km antes del desvío hacia Sensuntepeque</p>
                </div>

                <div class="contacto-info-card">
                    <div class="contacto-info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Teléfono</h4>
                    <p>+503 9023 1243</p>
                    <p>+503 2344 1235</p>
                </div>

                <div class="contacto-info-card">
                    <div class="contacto-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Correo Electrónico</h4>
                    <p>unicaeselsalvador@gmail.com</p>
                </div>

                <div class="contacto-info-card">
                    <div class="contacto-info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Horario</h4>
                    <p>Lunes a Viernes: 7:00 AM - 5:00 PM</p>
                    <p>Sábados: 7:00 AM - 12:00 PM</p>
                </div>
            </div>

            <!-- Formulario de contacto -->
            <div class="col-lg-8">
                <div class="contacto-form-card">
                    <h3><i class="fas fa-paper-plane"></i> Envíanos un mensaje</h3>
                    <p class="contacto-form-desc">Completa el formulario y te responderemos lo antes posible.</p>

                    <form id="contactForm" action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre completo *</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Correo electrónico *</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="tu@correo.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="+503 0000 0000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="asunto">Asunto *</label>
                                    <select class="form-control" id="asunto" name="asunto" required>
                                        <option value="" selected disabled>Selecciona un asunto</option>
                                        <option value="informacion">Solicitud de información</option>
                                        <option value="inscripciones">Inscripciones</option>
                                        <option value="becas">Becas y ayuda financiera</option>
                                        <option value="academico">Asuntos académicos</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje *</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="8" placeholder="Escribe tu mensaje aquí..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Adjuntar archivo (opcional)</label>
                            <div class="contacto-file-upload">
                                <input type="file" id="archivo" name="archivo" class="form-control-file">
                                <small class="text-muted">Formatos permitidos: PDF, DOC, DOCX, JPG, PNG (Máx. 5MB)</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="privacidad" name="privacidad" required>
                                <label class="custom-control-label" for="privacidad">Acepto la <a href="#">política de privacidad</a> y el tratamiento de mis datos personales *</label>
                            </div>
                        </div>

                        <button type="submit" class="btn-contacto-submit">
                            <i class="fas fa-paper-plane"></i> Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    // Inicializar CKEditor 5
    ClassicEditor
        .create(document.querySelector('#mensaje'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', 'blockQuote', '|',
                    'link', 'undo', 'redo', '|',
                    'fontSize', 'fontColor', '|',
                    'removeFormat'
                ],
                shouldNotGroupWhenFull: true
            },
            language: 'es',
            heading: {
                options: [
                    { model: 'paragraph', title: 'Párrafo', class: 'ck-heading_paragraph' },
                    { model: 'heading2', view: 'h2', title: 'Encabezado 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Encabezado 3', class: 'ck-heading_heading3' }
                ]
            }
        })
        .then(function(editor) {
            window.myEditor = editor;
        })
        .catch(function(error) {
            console.error('CKEditor error:', error);
        });

    // Animación de entrada expresiva con IntersectionObserver + stagger fallback
    var $cards = $('.contacto-info-card');
    var mqReduce = window.matchMedia('(prefers-reduced-motion: reduce)');
    if (mqReduce.matches) {
        $cards.addClass('contacto-card-visible');
    } else if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries){
            entries.forEach(function(entry){
                if(entry.isIntersecting){
                    var idx = $cards.index(entry.target);
                    setTimeout(function(){ $(entry.target).addClass('contacto-card-visible'); }, idx * 120);
                    observer.unobserve(entry.target);
                }
            });
        }, {threshold: 0.15, rootMargin: '0px 0px -40px 0px'});
        $cards.each(function(){ observer.observe(this); });
        // Fallback por si ya están en viewport al cargar
        setTimeout(function(){
            $cards.each(function(i){
                if(!$(this).hasClass('contacto-card-visible')){
                    var c=$(this);
                    setTimeout(function(){ c.addClass('contacto-card-visible'); }, i*120);
                }
            });
        }, 600);
    } else {
        $cards.each(function(i) {
            var card = $(this);
            setTimeout(function() { card.addClass('contacto-card-visible'); }, i * 120);
        });
    }

    // File upload drag expressive
    var $upload = $('.contacto-file-upload');
    $upload.on('dragover', function(e){ e.preventDefault(); $(this).addClass('dragover'); });
    $upload.on('dragleave drop', function(){ $(this).removeClass('dragover'); });

    // Color placeholder vs valor elegido en Asunto
    var $asunto = $('#asunto');
    function syncAsunto(){ $asunto.toggleClass('has-value', !!$asunto.val()); }
    $asunto.on('change', syncAsunto);
    syncAsunto();

    // Envío del formulario
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        var nombre = $('#nombre').val();
        var email = $('#email').val();
        var asunto = $('#asunto').val();
        var mensaje = window.myEditor ? window.myEditor.getData() : '';

        if (!nombre || !email || !asunto || !mensaje) {
            Swal.fire({
                icon: 'warning',
                title: 'Campos requeridos',
                text: 'Por favor completa todos los campos obligatorios.',
                confirmButtonColor: '#7a1515'
            });
            return;
        }

        // Simular envío
        Swal.fire({
            title: 'Enviando mensaje...',
            allowOutsideClick: false,
            didOpen: function() {
                Swal.showLoading();
            }
        });

        setTimeout(function() {
            Swal.fire({
                icon: 'success',
                title: '¡Mensaje enviado!',
                text: 'Gracias ' + nombre + '. Nos pondremos en contacto contigo pronto.',
                confirmButtonColor: '#7a1515'
            });
            $('#contactForm')[0].reset();
            syncAsunto();
            if (window.myEditor) window.myEditor.setData('');
        }, 1500);
    });
});
</script>

<?php include "../layouts/footer.php"?>