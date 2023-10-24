# INVENTARIO-INFO1170
Ubicacion de las paginas

Proyecto/resources/views/betaconex

Ubicacion del modelo

Proyecto/app/Models/items

Ubicacion del controlador

Proyecto/app/Http/Controllers/Contitems

todas las pagina se encuentran en betaconex y se hacen referencia en los controladores

Esto es donde se encuentran la mayoria de los cambios de mi parte (Pedidas muy amablemente por el señor joaco)

se usa las platillas

@extends(menu)
@extends(plantilla)

la primera basada en lo creado anteriormente la segunda una simple plantilla de testeo

Contitems llama a todas las paginas y hace su funcionamiento atravez de sus funciones
y su modelo asignado items

el modelo items solo contiene lo que laravel ya agrega a este solo se crea para una mejor usabilidad

Falta una conexion de vuelta a la pagina de productos