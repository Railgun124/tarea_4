<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glosario de comandos de Git</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        nav {
            background-color: #0078d4;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            padding: 0;
            font-size: 24px;
        }

        main {
            max-width: auto;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        #volver {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #0078d4;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 999;
            opacity: 0.7;
            transition: opacity 0.3s ease-in-out;
        }

        #volver:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Glosario de comandos de Git</h1>
    </nav>
    <main>
        <table>
            <tr>
                <th>Comando</th>
                <th>Descripción</th>
                <th>Parametros</th>
                <th>Ejemplo</th>
            </tr>
            <tr>
                <td>git versión</td>
                <td>Muestra la versión de git</td>
                <td>--build-options</td>
                <td><img src="git_version.png" alt=""></td>
            </tr>
            <tr>
                <td>git help</td>
                <td>Muestra ayuda sobre los comandos</td>
                <td>< commando ></td>
                <td><img src="git_help.png" alt=""></td>
            </tr>
            <tr>
                <td>git config</td>
                <td>Configura un repositorio o opciones globales</td>
                <td>[< options >]</td>
                <td><img src="git_config.png" alt=""></td>
            </tr>
            <tr>
                <td>git clone</td>
                <td>Clona un repositorio en un nuevo directorio</td>
                <td>Repositorio </td>
                <td><img src="git_clone.png" alt=""></td>
            </tr>
            <tr>
                <td>git status</td>
                <td>Muestra el estatus del directorio local, los commit y los archivos que estan siendo rastreados</td>
                <td>No tiene </td>
                <td><img src="git_status.png" alt=""></td>
            </tr>
            <tr>
                <td>git add</td>
                <td>añade un archivo para hacer un commit</td>
                <td>< file ></td>
                <td><img src="git_add.png" alt=""></td>
            </tr>
            <tr>
                <td>git commit</td>
                <td>Guarda cambios en el repositorio </td>
                <td>-m (añaade un mensaje para el commit)</td>
                <td><img src="git_commit.png" alt=""></td>
            </tr>
            <tr>
                <td>git push</td>
                <td>Guarda los cambios en el repositorio remoto</td>
                <td>< repository >,< refdpec > </td>
                <td><img src="git_push.png" alt=""></td>
            </tr>
            <tr>
                <td>git pull</td>
                <td>Trae y integra de otro repositorio los archivos </td>
                <td>[< repository > [< refspec >​]]</td>
                <td><img src="git_pull.png" alt=""></td>
            </tr>
            <tr>
                <td>git init</td>
                <td>Crea un repositorio git vacio o re inicializa uno nuevo</td>
                <td>No tiene </td>
                <td><img src="git_init.png" alt=""></td>
            </tr>
            <tr>
                <td>git ls-files</td>
                <td>Muestra informacion de los archivos en el index y working tree </td>
                <td>No tiene </td>
                <td><img src="git_lsfiles.png" alt=""></td>
            </tr>
            <tr>
                <td>git reset</td>
                <td>Reinicia el actual HEAD a un estado especificado</td>
                <td>< pathspec ></td>
                <td><img src="gti_reset.png" alt=""></td>
            </tr>
            <tr>
                <td>git checkout</td>
                <td>Cambia el working branch</td>
                <td>< branch ></td>
                <td><img src="git_checkout.png" alt=""></td>
            </tr>
            <tr>
                <td>git rm</td>
                <td>Remueve archivos del working tree y index</td>
                <td>< pathspec ></td>
                <td><img src="git_rm.png" alt=""></td>
            </tr>
            <tr>
                <td>git mv</td>
                <td>Mueve or renombra un archivo o directorio</td>
                <td>< source >, < destination ></td>
                <td><img src="git_mv.png" alt=""></td>
            </tr>
            <tr>
                <td>git log</td>
                <td>Muestra el historial de commits</td>
                <td>--all --graph --decorate --oneline</td>
                <td><img src="git_log.png" alt=""></td>
            </tr>
            <tr>
                <td>git show</td>
                <td>Muestra los cambios que se hicieron en el commit </td>
                <td>codigo del commit </td>
                <td><img src="git_show.png" alt=""></td>
            </tr>
            <tr>
                <td>git diff</td>
                <td>Muestra las diferencias entre commits </td>
                <td>codigo del commit a comparar 1, codigo de commit a comparar 2</td>
                <td><img src="git_diff.png" alt=""></td>
            </tr>
            <tr>
                <td>git stash</td>
                <td>Almacena los cambio en un directorio de trabajo alterno</td>
                <td>list, show, drop, pop, apply, branch, clear </td>
                <td><img src="git_stash.png" alt=""></td>
            </tr>
            <tr>
                <td>git merge</td>
                <td>Une dos o mas ramas de trabajo </td>
                <td>branch 1 branch 2</td>
                <td><img src="git_merge.png" alt=""></td>
            </tr>
            <tr>
                <td>git branch</td>
                <td>Muestra los branch actuales</td>
                <td>Nombre de branch </td>
                <td><img src="git_branch.png" alt=""></td>
            </tr>
            <tr>
                <td>git tag</td>
                <td>Ande una etiqueta</td>
                <td>nombre de etiqueta</td>
                <td><img src="git_tag.png" alt=""></td>
            </tr>
        </table>
    </main>
    <a href="../index.php"><button id="volver">Volver</button></a>
</body>
</html>
