API FUTBOL

laravel v5

##instalar dependencias

composer install


## migrar las tablas 
php artisan migrate


## lista de las rutas
#EQUIPO
GET {{url_base}}equipo/get
POST {{url_base}}equipo/registrar
PUT {{url_base}}equipo/actualizar/{ID}
DELETE {{url_base}}equipo/actualizar/{ID}
#JUGADOR
GET {{url_base}}jugador/get
POST {{url_base}}jugador/registrar
PUT {{url_base}}jugador/actualizar/{ID}
DELETE {{url_base}}jugador/actualizar/{ID}
#LIGA
GET {{url_base}}liga/get
POST {{url_base}}liga/registrar
PUT {{url_base}}liga/actualizar/{ID}
DELETE {{url_base}}liga/actualizar/{ID}
#LIGA_EQUIPO
GET {{url_base}}ligaequipo/get
POST {{url_base}}ligaequipo/registrar
PUT {{url_base}}ligaequipo/actualizar/{ID}
DELETE {{url_base}}ligaequipo/actualizar/{ID}
