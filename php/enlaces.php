    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/PRACTICA1/assets/css/estilos.css?v=14">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .my-progress{position:fixed;top:0;left:0;width:100%;height:4px;background:linear-gradient(90deg,#7a1515,#d4a574);z-index:99999;transform:translateX(-100%);transition:transform 450ms cubic-bezier(0.16,1,0.3,1);pointer-events:none;will-change:transform}
        .my-progress.active{transform:translateX(0)}
        .my-progress.complete{transform:translateX(100%);transition:transform 1100ms cubic-bezier(0.16,1,0.3,1)}
        @media (prefers-reduced-motion: reduce){
          .my-progress{transition:none!important}
          body.page-exit{transition:none!important}
          .animate__animated{animation-duration:0.01ms!important;animation-iteration-count:1!important}
        }
    </style>
    <script>
        (function(){
            function createBar(){
                if(document.getElementById('my-progress')) return document.getElementById('my-progress');
                var bar=document.createElement('div');
                bar.id='my-progress';
                bar.className='my-progress';
                document.body.appendChild(bar);
                return bar;
            }
            window.MyProgress={
                _timer:null,
                start:function(){
                    var self=this;
                    clearTimeout(self._timer);
                    var tryStart=function(){
                        var bar=document.getElementById('my-progress')||createBar();
                        bar.className='my-progress active';
                    };
                    if(document.body){tryStart();}
                    else{document.addEventListener('DOMContentLoaded',tryStart);}
                },
                done:function(){
                    var self=this;
                    clearTimeout(self._timer);
                    self._timer=setTimeout(function(){
                        var bar=document.getElementById('my-progress');
                        if(bar){
                            bar.className='my-progress complete';
                            setTimeout(function(){bar.className='my-progress';},1200);
                        }
                    },500);
                }
            };

            var mqReduce = window.matchMedia('(prefers-reduced-motion: reduce)');
            MyProgress.start();
            var _minTime=setTimeout(function(){MyProgress.done();},1100);
            $(window).on('load',function(){clearTimeout(_minTime);MyProgress.done();});

            $(document).on('click','a[href]',function(e){
                var href=$(this).attr('href');
                var target=$(this).attr('target');
                var download=$(this).attr('download');
                if(!href||href==='#'||href.startsWith('#')||href===''||href==='!'||href.startsWith('javascript')||href.startsWith('mailto')||href.startsWith('tel:'))return;
                if(e.ctrlKey||e.metaKey||e.shiftKey||e.which===2||target==='_blank'||typeof download !== 'undefined')return;
                if(mqReduce.matches){ return; }
                if(window.MyProgress) clearTimeout(MyProgress._timer);
                // Solo interceptar navegación misma pestaña con efecto expresivo
                e.preventDefault();
                MyProgress.start();
                $('body').addClass('page-exit');
                // Sincronizar con transición larga (650ms) + buffer
                var navigated=false;
                function go(){ if(!navigated){ navigated=true; window.location.href=href; } }
                setTimeout(go,650);
                // Fallback filtrado: solo opacity del body
                $('body').one('transitionend', function(ev){
                    var oe = ev.originalEvent || ev;
                    if(ev.target!==document.body || (oe.propertyName && oe.propertyName!=='opacity')) return;
                    go();
                });
            });

            // --- Fix bfcache robusto: carreras ↔ detalle (página pesada 42 + chart) ---
            function clearExit(){
                if(!document.body) return;
                document.body.classList.remove('page-exit');
                document.body.style.opacity='';
                void document.body.offsetHeight;
                var bar=document.getElementById('my-progress');
                if(bar) bar.className='my-progress';
                if(window.MyProgress){
                    clearTimeout(MyProgress._timer);
                    clearTimeout(window._minTime);
                    MyProgress._timer=null;
                }
            }
            window.addEventListener('pageshow', function(e){
                // Incondicional: cubre persisted true/false y bfcache evicted (detalle pesado)
                clearExit();
                requestAnimationFrame(function(){ requestAnimationFrame(clearExit); });
                setTimeout(clearExit, 60);
            });
            window.addEventListener('pagehide', clearExit);
            document.addEventListener('visibilitychange', function(){
                if(document.visibilityState==='visible') clearExit();
            });
            // Limpieza inicial por si el DOM ya llega con page-exit (navegación interrumpida)
            if(document.body && document.body.classList.contains('page-exit')){
                setTimeout(clearExit, 60);
            }
        })();
    </script>