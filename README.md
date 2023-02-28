# Projecte Streaming Peepo

### Versió --> 2.0

## Starting with Laravel

- Install SAIL

````
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
````

- Run sail

````
./vendor/bin/sail up -d
````

- Migrate and refresh the database

````
 ./vendor/bin/sail php artisan migrate:fresh --seed 
````

- Open your site on [https://localhost](https://localhost) 

 
## 01. Instalacion Laravel
### Instala con Docker un servidor PHP en el que ejecutar la instalación de Laravel (Hello World)
#### a) Conexión con el servidor
```
ssh daw@10.200.248.172
```
#### b) Instalación Laravel
```
curl -s "https://laravel.build/example-app" | bash

cd example-app

./vendor/bin/sail up
```

#### c) Git del proyecto
[Link del repositori del git](https://gitlab.com/iawblancaserna/gbi)
## 02. Diagrama de casos de uso
### Realizar un diagrama donde se especifiquen todas las acciones que pueda realizar un usuario (con sus diferentes perfiles)
![Diagrama de casos de uso.](doc/diagrama1.png "Diagrama")

## 03. Diagrama de base de datos
### Realizar el diagrama de la base de datos
![Diagrama de base de dades.](doc/BD.png "Base de Dades")
## 04. Mockups
### Realizar los mockups de cada una de las páginas:
#### a) Home
#####   - Home 1
![Home1.](doc/home1.png "home1")
#####   - Home 2
![Home2.](doc/home2.png "home2")
#### b) Lista de Peliculas
![ListaPelicula.](doc/pelicula.png "Lista pelicula")
#### c) Resultado de busqueda
![ResultatBusqueda.](doc/resultat.png "Resultat busqueda")
#### d) Pantalla de Login
![PantallaLogin.](doc/login.png "Pantalla login")

#### e) Formulario de registro
![signup.](doc/Signup.png "signup")
### -> Usuarios
#### f) Formulario de pago. 👫 No hacen esta pagina
![FormulariPagament.](doc/payment.png "Payment")
#### g) Formulario datos de usuario
#### - Users
![DatosUsuario1.](/doc/acc1.png "Usuario 1")
#### - Admins
![AdminHome.](/doc/adminHome.png "Admin Home")
#### - Editar perfils d'usuaris
![DatosUsuarios2.](/doc/acc2.png "Usuario 2")

#### h) Visualizar streaming
![Streaming.](doc/streaming.png "streaming")
#### i) Pagina favoritos/recomendados 👫 No hacen los recomendados
![Favs](/doc/fav.png "Favoritos")
### -> Administrador
#### j) Lista de usuarios  
![ListaUsers.](doc/adminUserList.png "ListaUsuarios")
#### k) Lista de peliculas
![MovieList.](doc/Admin_FilmList.png "signup")
#### l) Información de usuario
![informacioUsuari.](doc/adminUser.png "Informació Usuario")
#### m) Pagina de autorización. 👫 No hacen esta página
![UserAuthorize.](doc/usersAutorize.png "Payment")
#### m) Insertar/modificar pelicula
![Add.](doc/Upload.png "upload")
![Edit.](doc/EditMovie.png "edit")


## 05. Lista de URLs
### Crear la lista de URLs que conformarán la web con una breve descripción (incluida la información que se mostrará y la tabla de la DB donde se encuentra esa información)
![LlistaUrl.](doc/llistaUrls.png "url")
## 06. Crear la base de datos
### Usar las herramientas del Framework para crear la base de datos (tablas y contenido dummy)
[Link a la bd](https://gitlab.com/iawblancaserna/gbi/-/tree/main/database)
## 07. Programar las vistas (solo HTML) de la aplicación diseñadas en los Mockups con las herramientas del Framework y Bootstrap utilizando información dummy  
#### Home1
![home1.](doc/home1Html.png "home1")  
#### Home2
![home2.](doc/HTMLhome2.png "home2")  
#### Sign up
![signup.](doc/signupHtml.png "sign up")  
#### Payment
![payment.](doc/paymentHtml.png "payment")  
#### Login
![login.](doc/loginHtml.png "login")  
#### Profile
![profile.](doc/profileHtml.png "profile")  
#### Edit Profile
![editProfile.](doc/editProfileHtml.png "editProfile")  
#### Search
![search.](doc/searchHtml.png "search")  
#### MovieList
![movieList.](doc/movieListHtml.png "movieList")  
#### Favorites
![favorite.](doc/favoriteHtml.png "favorite")  
## 08. Crear la página de la home.
![home.](doc/home2Ola.png "home2")  
## 09. Crear la pagina que lista las peliculas

#### a) Controller que carga la vista de todas las peliculas
#### b) Model que devuelve la lista de peliculas
#### c) Controller que recibe la petición de filtro de peliculas
#### d) Model que devuelve la lista de peliculas filtradas
![llistaPelis.](doc/llistaPeliOla.png "llistaPelis")  
## 10. Crear el proceso de registro
#### a) Controller que carga la vista del formulario
#### b) Verificador de formulario
#### c) Controller que procesa los datos del formulario
#### d) Model que guarda los datos del formulario
#### e) Control de usuario ya existe
![llistaPelis.](doc/signupOla.png "signup")  
## 11. Crear el proceso de login guardando las credenciales en session/cookie utilizando las herramientas del Framework
#### a) Controller que carga la vista del formulario
#### b) Verificador de formulario
#### c) Controller que procesa los datos del formulario
#### d) Model que gestiona los datos del formulario
#### e) Si autorizado cargar los datos en session/cookies
![login.](doc/loginOla.png "login")  
## 12. Crear la página del resultado de busqueda
## 13. Crear la página de streaming
## 14. Crear la página de formulario de pago
## 15. (admin) Crear la pagina de lista de usuarios
## 16. (admin) Crear admin de usuario
## 17. (admin) Crear la pagina de lista de peliculas/series
## 18. (admin) Crear admin de peliculas/series
