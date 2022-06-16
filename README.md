# Como Iniciar Cuatro En Linea

## Requisitos

### Tener instalados los siguientes programas (links en las imágenes):


<a href="https://www.docker.com" target="_blank"><img src="https://cdn.worldvectorlogo.com/logos/docker-3.svg" width="300"></a>

<a href="https://ddev.com" target="_blank"><img src="https://ddev.com/app/themes/ddevcom_theme_2020/dist/images/ddev-logo.svg" width="300"></a>

<a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" width="300"></a>

## Pasos a seguir

### Crear repositorio local

>Introduciremos el comando ``git clone https://github.com/Evenaut7/cuatroenlinea.git`` dentro del directorio en el que se desee almacenar.


### Configurar ddev

>Para comenzar abriremos el programa Docker, luego en la consola intorudicremos: 

    ddev config

>1- En la primera instancia colocamos el nombre del proyecto

>2- Luego nos pedira la ruta del proyecto. En caso de ya estar en el directorio correspondiente lo dejamos en blanco.

>3- Por ultimo el tipo de proyecto, en el cual ingresaremos ``Laravel``


### Iniciar Proyecto

>Cada vez que querramos abrir el proyecto deberemos de introducir el siguiente comando teniendo Docker abierto:

    ddev start
 
>Luego ingresamos a la URL que se indica abajo en la consola o simplemente ingresamos: ``https://127.0.0.1:64042``

>La primera vez que hagamos esto la pagina principal nos mostrará esto:

![Error](/Images/Error.png)

>Esto sucede debido a que falta instalar composer y configurar algunas cosas.
Para ello introduciremos los siguientes comandos:

>1- Ingresar a la interfaz ssh

    ddev ssh
    
>2- Instalar composer

    composer install

>3- Cambiar el nombre de la ruta

    cp .env.example .env

>4- Generar la key

    php artisan key:generate

>5- Salir de ssh

    exit

### Jugar

>Si hicimos bien lo anterior, cada que ingresemos ``ddev start`` nos aparecerá esto en la pagina principal:

![Page](/Images/Inicio.jpg)

>Para poder ingresar al juego solo tendremos que colocar en la URL ``/jugar/1``

![Juego](/Images/juego.jpg)

### Cerrar ddev

>Para ello colocamos el siguiete comando

    ddev stop
