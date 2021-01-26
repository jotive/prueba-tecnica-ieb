# prueba-tecnica-ieb

Instrucciones de Instalacion:

1. Configurar archivo .env
2. Configuracion de datos en la BD
3. Correr servidor:
3.1 Posibles errores
    -Falta extension intl: para solucionar este inconveniente, se debe habilitar la funcion intl, abriendo el archivo php.ini, buscar la linea
        extension=intl
    la cual se encuentra comentada y descomentarla, posteriormente se debe reiniciar el servidor Apache.
