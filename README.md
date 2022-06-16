# Como Iniciar Cuatro En Linea

## Requisitos

### Tener instalados los siguientes programas (links en las imagenes):


<a href="https://www.docker.com" target="_blank"><img src="https://cdn.worldvectorlogo.com/logos/docker-3.svg" width="300"></a>

<a href="https://ddev.com" target="_blank"><img src="https://ddev.com/app/themes/ddevcom_theme_2020/dist/images/ddev-logo.svg" width="300"></a>

<a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" width="300"></a>

## Pasos a seguir

### Crear repositorio local

>Introduciremos el comando ``git clone https://github.com/Evenaut7/cuatroenlinea.git`` dentro del directorio en el que se desee almacenar.


### Configurar ddev

>Para comenzar abriremos el programa Docker, luego en la consola intorudicremos: 

>``ddev config``

>En la primera instancia colocamos el nombre del proyecto

>Luego nos pedira la ruta del proyecto. En caso de ya estar en el directorio correspondiente lo dejamos en blanco.

>Por ultimo el tipo de proyecto, en el cual ingresaremos ``Laravel``

![Type](https://cdn.discordapp.com/attachments/577240428148031516/987012957441503292/unknown.png) 


### Iniciar Proyecto

>Para realizar esto teniendo Docker abierto colocaremos el siguiente comando:

>``ddev start``

>Deberia aparecer algo como esto:

![Init](https://cdn.discordapp.com/attachments/577240428148031516/987010481506103346/unknown.png) 

>Luego ingresmos a la ruta que se indica abajo o simplemente ingresamos: ``https://127.0.0.1:64042``
>Esto nos redireccionara a la pagina principal donde aparecera esto:

![Page](https://cdn.discordapp.com/attachments/577240428148031516/987010630684905492/unknown.png)

>Para poder ingresar al juego sol otendremos que colocar en la URL ``/jugar/1``

![Juego](https://cdn.discordapp.com/attachments/577240428148031516/987011047695204412/unknown.png)

### Finalizar Proyecto 

>Para ello colocaremos dos comandos, uno para finalizar ddev y otro para finalizar docker

>``ddev stop``

>``wsl --shutdown``