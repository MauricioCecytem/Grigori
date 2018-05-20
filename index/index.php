<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>

    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/pase_lista.css">

</head>
<body>
    <header>
        <div class="divlogo">
            <img src="../Globales/img/GriGori.png" alt="logo" class="imglogo">
        </div>
        <div class="titulo-sitio">
            <h2>GRIGORI. Sistema de detecci&oacute;n de casos de ausentismo</h2>
        </div>
    </header>
    <aside>
        <ul>
            <li class="renglon">
                <a id="alumnos" class="link" href="?pag=alumnos">
                    <span>Gesti&oacute;n alumnos</span>
                </a>
            </li>
            <li>
                <a href="?pag=Profesores">Gesti&oacute;n profesores</a>
            </li>
            <li>
                <a href="?pag=Turnos">Gesti&oacute;n turnos</a>
            </li>
            <li>
                <a href="?pag=Semestres">Gesti&oacute;n semestres</a>
            </li>
            <li>
                <a href="?pag=Grupos">Gesti&oacute;n grupos</a>
            </li>
            <li>
                <a href="?pag=Clases">Gesti&oacute;n clases</a>
            </li>
            <li>
                <a href="?pag=Horarios">Gesti&oacute;n horarios</a>
            </li>
            <li>
                <a href="?pag=Materias">Gesti&oacute;n materias</a>
            </li>
            <li>
                <a href="?pag=Especialidades">Gesti&oacute;n especialidades</a>
            </li>
            <li>
                <a href="?pag=lista_manual">Pase de lista manual</a>
            </li>
            <li>
                <a href="?pag=reportes">Reportes</a>
            </li>
            <li>
                <a href="?pag=alertas">Alertas</a>
            </li>
            <li>
                <a href="../Funciones/Login/logout.php">Cerrar sesi&oacute;n</a>
            </li>
        </ul>
    </aside><a href="../Gestion_turnos/"></a>
    <article>
        <?php
            if(isset($_GET['pag'])!=0){
                switch($_GET['pag']){
                    case 'lista_manual':
                        include("../Pase_lista/manual.php");
                        break;
                    case 'reportes':
                        include("../Reportes/generar.php");
                        break;
                    case 'alertas':
                        include("../Alertas/index.php");
                        break;
                    case 'crear_alumno':
                        include("../Gestion/Alumnos/crear_alumno.php");
                        break;
                    default:
                        include("../Gestion/".$_GET['pag']."/index.php");
                        break;
                }
            }
        ?>
    </article>
</body>
</html>
