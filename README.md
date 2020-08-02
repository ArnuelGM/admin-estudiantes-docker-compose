## Para iniciar y detener el entorno

```bash
# Compilar la imagen desde el Dockerfile
$ docker-compose build 

# Iniciar el entorno
$ docker-compose up -d

# Detener la ejecución del entorno
$ docker-compose down
```


## Para ver las aplicaciones

 - localhost - Aplicación
 - localhost:81 - phpmyadmin
 - localhost:8080 - Editor (la contraseña se genera en `config_editor/code-server/config.yml`)