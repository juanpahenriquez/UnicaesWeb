<?php

require '../../../vendor/autoload.php';

$basePath = 'file:///C:/wamp64/www/PRACTICA1/';

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 8,
    'margin_right' => 8,
    'margin_top' => 8,
    'margin_bottom' => 8,
]);

$html = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 8px;
            color: #000;
        }

        /* Encabezado */
        .header {
            text-align: center;
            margin-bottom: 4px;
        }
        .header h1, .header-text h1 {
            font-size: 16px;
            margin: 0;
            text-transform: uppercase;
        }
        .header h2, .header-text h2 {
            font-size: 12px;
            margin: 3px 0;
            color: #900;
            font-weight: bold;
        }
        .header p, .header-text p {
            font-size: 8px;
            margin: 0;
            color: #333;
        }

        /* Encabezado con Tabla */
        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }
        .header-logo {
            text-align: left;
            vertical-align: middle;
        }
        .header-text {
            text-align: center;
            vertical-align: middle;
        }

        /* Secciones Ciclos */
        .ciclo-title {
            text-align: center;
            font-weight: bold;
            font-style: italic;
            font-size: 10px;
            margin: 4px 0 2px 0;
        }

        /* Layout Grid mediante tablas principales */
        .grid-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 4px;
        }
        .grid-table td {
            width: 33.33%;
            vertical-align: top;
            padding: 2px;
        }

        /* Estilos del Mes */
        .month-table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 7.5px;
        }
        .month-table th, .month-table td {
            border: 1px solid #444;
            height: 12px;
            width: 14.28%;
            padding: 1px 0;
        }
        .month-name {
            background-color: #f9f9f9;
            color: #b22222;
            font-weight: bold;
            font-size: 8.5px;
            text-transform: uppercase;
        }
        .sun {
            color: #d0021b;
            font-weight: bold;
        }

        /* Colores de resaltado para eventos */
        .bg-blue   { background-color: #3b82f6; color: #fff; }
        .bg-red    { background-color: #ef4444; color: #fff; }
        .bg-yellow { background-color: #facc15; color: #000; }
        .bg-green  { background-color: #22c55e; color: #fff; }
        .bg-pink   { background-color: #ec4899; color: #fff; }

        /* Estilos de Indicadores / Leyenda */
        .legend-section-title {
            text-align: center;
            font-weight: bold;
            font-style: italic;
            font-size: 9px;
            margin: 4px 0 2px 0;
        }
        .legend-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 7.5px;
        }
        .legend-table td {
            border: 1px solid #444;
            padding: 2px 4px;
        }
        .color-box {
            width: 14px;
            height: 10px;
            display: inline-block;
            border: 1px solid #000;
        }
    </style>
</head>
<body>

   <!-- Encabezado con Logo y Texto Centrado -->
    <table class="header-table">
        <tr>
            <!-- Columna Izquierda: Logo -->
            <td width="10%" class="header-logo">
                <img src="' . $basePath . '/assets/img/logo_u.png" style="width:100px; height:auto;" />
            </td>
             
            <!-- Columna Central: Textos -->
            <td width="60%" class="header-text">
                <h1>UNIVERSIDAD CATÓLICA DE EL SALVADOR</h1>
                <h2>CALENDARIO ACADÉMICO 2023</h2>
                <p>Aprobado por Consejo Académico en acta No. <u>1305</u> de fecha <u>11 de mayo de 2022</u></p>
            </td>
            
            <!-- Columna Derecha: Vacía para equilibrar el centrado -->
            <td width="20%"></td>
        </tr>
    </table>

    <!-- CICLO I -->
    <div class="ciclo-title">CICLO - I</div>

    <table class="grid-table">
        <tr>
            <!-- ENERO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">ENERO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td class="sun">1</td><td>2</td><td class="bg-blue">3</td><td class="bg-blue">4</td><td class="bg-red">5</td><td class="bg-blue">6</td><td class="bg-blue">7</td></tr>
                    <tr><td class="sun">8</td><td class="bg-blue">9</td><td class="bg-blue">10</td><td class="bg-blue">11</td><td class="bg-blue">12</td><td class="bg-yellow">13</td><td>14</td></tr>
                    <tr><td class="sun">15</td><td class="bg-blue">16</td><td class="bg-blue">17</td><td class="bg-blue">18</td><td class="bg-blue">19</td><td class="bg-blue">20</td><td class="bg-blue">21</td></tr>
                    <tr><td class="sun">22</td><td class="bg-yellow">23</td><td class="bg-yellow">24</td><td class="bg-yellow">25</td><td class="bg-yellow">26</td><td class="bg-yellow">27</td><td class="bg-yellow">28</td></tr>
                    <tr><td class="sun">29</td><td class="bg-yellow">30</td><td>31</td><td></td><td></td><td></td><td></td></tr>
                </table>
            </td>
            <!-- FEBRERO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">FEBRERO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td>1</td><td>2</td><td class="bg-yellow">3</td><td>4</td></tr>
                    <tr><td class="sun">5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td></tr>
                    <tr><td class="sun">12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td></tr>
                    <tr><td class="sun">19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr>
                    <tr><td class="sun">26</td><td>27</td><td>28</td><td></td><td></td><td></td><td></td></tr>
                </table>
            </td>
            <!-- MARZO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">MARZO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td>1</td><td>2</td><td class="bg-yellow">3</td><td>4</td></tr>
                    <tr><td class="sun">5</td><td class="bg-red">6</td><td class="bg-red">7</td><td class="bg-red">8</td><td class="bg-red">9</td><td class="bg-red">10</td><td class="bg-red">11</td></tr>
                    <tr><td class="sun">12</td><td class="bg-yellow">13</td><td class="bg-yellow">14</td><td class="bg-yellow">15</td><td class="bg-yellow">16</td><td class="bg-yellow">17</td><td class="bg-yellow">18</td></tr>
                    <tr><td class="sun">19</td><td class="bg-green">20</td><td class="bg-green">21</td><td class="bg-green">22</td><td class="bg-green">23</td><td class="bg-green">24</td><td class="bg-green">25</td></tr>
                    <tr><td class="sun">26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td></td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <!-- ABRIL -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">ABRIL</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td></tr>
                    <tr><td class="sun">2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td></tr>
                    <tr><td class="sun">9</td><td>10</td><td class="bg-yellow">11</td><td>12</td><td>13</td><td>14</td><td>15</td></tr>
                    <tr><td class="sun">16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td></tr>
                    <tr><td class="sun">23</td><td class="bg-red">24</td><td class="bg-red">25</td><td class="bg-red">26</td><td class="bg-red">27</td><td class="bg-red">28</td><td class="bg-red">29</td></tr>
                    <tr><td class="sun">30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                </table>
            </td>
            <!-- MAYO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">MAYO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td>1</td><td class="bg-yellow">2</td><td class="bg-yellow">3</td><td class="bg-yellow">4</td><td class="bg-yellow">5</td><td class="bg-yellow">6</td></tr>
                    <tr><td class="sun">7</td><td class="bg-green">8</td><td class="bg-green">9</td><td class="bg-green">10</td><td class="bg-green">11</td><td class="bg-green">12</td><td class="bg-green">13</td></tr>
                    <tr><td class="sun">14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td></tr>
                    <tr><td class="sun">21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td></tr>
                    <tr><td class="sun">28</td><td>29</td><td>30</td><td>31</td><td></td><td></td><td></td></tr>
                </table>
            </td>
            <!-- JUNIO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">JUNIO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr>
                    <tr><td class="sun">4</td><td class="bg-red">5</td><td class="bg-red">6</td><td class="bg-red">7</td><td class="bg-red">8</td><td class="bg-red">9</td><td class="bg-red">10</td></tr>
                    <tr><td class="sun">11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td></tr>
                    <tr><td class="sun">18</td><td class="bg-pink">19</td><td class="bg-blue">20</td><td class="bg-yellow">21</td><td class="bg-yellow">22</td><td class="bg-yellow">23</td><td>24</td></tr>
                    <tr><td class="sun">25</td><td class="bg-red">26</td><td class="bg-red">27</td><td class="bg-red">28</td><td class="bg-red">29</td><td class="bg-red">30</td><td></td></tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- CICLO II -->
    <div class="ciclo-title">CICLO - II</div>

    <table class="grid-table">
        <tr>
            <!-- JULIO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">JULIO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td></tr>
                    <tr><td class="sun">2</td><td class="bg-pink">3</td><td class="bg-blue">4</td><td class="bg-blue">5</td><td class="bg-blue">6</td><td class="bg-blue">7</td><td class="bg-blue">8</td></tr>
                    <tr><td class="sun">9</td><td class="bg-red">10</td><td class="bg-red">11</td><td class="bg-yellow">12</td><td class="bg-yellow">13</td><td class="bg-yellow">14</td><td class="bg-yellow">15</td></tr>
                    <tr><td class="sun">16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td></tr>
                    <tr><td class="sun">23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td></tr>
                    <tr><td class="sun">30</td><td>31</td><td></td><td></td><td></td><td></td><td></td></tr>
                </table>
            </td>
            <!-- AGOSTO -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">AGOSTO</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td class="bg-pink">1</td><td class="bg-pink">2</td><td class="bg-pink">3</td><td class="bg-pink">4</td><td class="bg-pink">5</td></tr>
                    <tr><td class="sun">6</td><td class="bg-yellow">7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td></tr>
                    <tr><td class="sun">13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
                    <tr><td class="sun">20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
                    <tr><td class="sun">27</td><td class="bg-red">28</td><td class="bg-red">29</td><td class="bg-red">30</td><td class="bg-red">31</td><td></td><td></td></tr>
                </table>
            </td>
            <!-- SEPTIEMBRE -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">SEPTIEMBRE</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td class="bg-red">1</td><td class="bg-red">2</td></tr>
                    <tr><td class="sun">3</td><td class="bg-yellow">4</td><td class="bg-yellow">5</td><td class="bg-yellow">6</td><td class="bg-yellow">7</td><td class="bg-yellow">8</td><td class="bg-yellow">9</td></tr>
                    <tr><td class="sun">10</td><td class="bg-green">11</td><td class="bg-green">12</td><td class="bg-green">13</td><td class="bg-green">14</td><td class="bg-pink">15</td><td class="bg-green">16</td></tr>
                    <tr><td class="sun">17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td></tr>
                    <tr><td class="sun">24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <!-- OCTUBRE -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">OCTUBRE</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td class="sun">1</td><td>2</td><td>3</td><td class="bg-yellow">4</td><td>5</td><td>6</td><td>7</td></tr>
                    <tr><td class="sun">8</td><td class="bg-red">9</td><td class="bg-red">10</td><td class="bg-red">11</td><td class="bg-red">12</td><td class="bg-red">13</td><td class="bg-red">14</td></tr>
                    <tr><td class="sun">15</td><td class="bg-yellow">16</td><td class="bg-yellow">17</td><td class="bg-yellow">18</td><td class="bg-yellow">19</td><td class="bg-yellow">20</td><td class="bg-yellow">21</td></tr>
                    <tr><td class="sun">22</td><td class="bg-green">23</td><td class="bg-green">24</td><td class="bg-green">25</td><td class="bg-green">26</td><td class="bg-green">27</td><td class="bg-green">28</td></tr>
                    <tr><td class="sun">29</td><td>30</td><td>31</td><td></td><td></td><td></td><td></td></tr>
                </table>
            </td>
            <!-- NOVIEMBRE -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">NOVIEMBRE</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td>1</td><td class="bg-pink">2</td><td class="bg-yellow">3</td><td>4</td></tr>
                    <tr><td class="sun">5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td></tr>
                    <tr><td class="sun">12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td></tr>
                    <tr><td class="sun">19</td><td class="bg-red">20</td><td class="bg-red">21</td><td class="bg-red">22</td><td class="bg-red">23</td><td class="bg-red">24</td><td class="bg-red">25</td></tr>
                    <tr><td class="sun">26</td><td>27</td><td>28</td><td>29</td><td>30</td><td></td><td></td></tr>
                </table>
            </td>
            <!-- DICIEMBRE -->
            <td>
                <table class="month-table">
                    <tr><th colspan="7" class="month-name">DICIEMBRE</th></tr>
                    <tr><th class="sun">D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td></tr>
                    <tr><td class="sun">3</td><td class="bg-yellow">4</td><td>5</td><td>6</td><td class="bg-red">7</td><td class="bg-red">8</td><td class="bg-red">9</td></tr>
                    <tr><td class="sun">10</td><td>11</td><td>12</td><td>13</td><td class="bg-red">14</td><td class="bg-red">15</td><td class="bg-red">16</td></tr>
                    <tr><td class="sun">17</td><td class="bg-blue">18</td><td class="bg-blue">19</td><td class="bg-blue">20</td><td class="bg-blue">21</td><td class="bg-blue">22</td><td class="bg-blue">23</td></tr>
                    <tr><td class="sun">24</td><td class="bg-pink">25</td><td class="bg-pink">26</td><td class="bg-pink">27</td><td class="bg-pink">28</td><td class="bg-pink">29</td><td class="bg-pink">30</td></tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- INDICADORES (LEYENDA) -->
    <div class="legend-section-title">INDICADORES</div>

    <table class="legend-table">
        <tr>
            <td width="50%">
                <span class="color-box bg-pink"></span> Inicio de Procesos Académicos
            </td>
            <td width="50%">
                <span class="color-box bg-pink"></span> Cierre de instalaciones para actividades académicas
            </td>
        </tr>
        <tr>
            <td>
                <span class="color-box bg-blue"></span> Período de inscripción ordinaria
            </td>
            <td>
                <span class="color-box bg-yellow"></span> Último día de pago de la cuota
            </td>
        </tr>
        <tr>
            <td>
                <span class="color-box bg-yellow"></span> Adición de materias / Inscripción extraordinaria
            </td>
            <td>
                <span class="color-box bg-red"></span> Evaluaciones parciales / Exámenes
            </td>
        </tr>
        <tr>
            <td>
                <span class="color-box bg-green"></span> Evaluaciones adicionales o de ciclo
            </td>
            <td>
                <span class="color-box bg-green"></span> Entrega de informe de notas
            </td>
        </tr>
    </table>

</body>
</html>
';

$mpdf->WriteHTML($html);

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
$mpdf->Output('Calendario_Academico.pdf', 'I');