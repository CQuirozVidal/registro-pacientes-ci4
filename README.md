# registro-pacientes-ci4

Ejercicio de práctica: registro de pacientes con CodeIgniter 4, MySQL y Bootstrap. Todos los datos son ficticios. 

> Proyecto de aprendizaje. No es un sistema clínico y no debe usarse con datos reales.

## Stack
- PHP 8.3, CodeIgniter 4 (MVC)
- MySQL 8
- Bootstrap 5
- Docker Compose

## Base de datos

Requiere un MySQL 8 accesible y las credenciales en `.env` (copia `env` a `.env` y completa `database.default.*`).

```bash
php spark migrate
php spark db:seed DatabaseSeeder
```

Esto crea las tablas `tipos_documento`, `previsiones` y `pacientes` y carga datos de ejemplo ficticios.

Para recrear la base desde cero: borrar y crear la base `registro_pacientes` en MySQL y volver a correr los dos comandos.


## Funcionalidades

- [ ] Ingreso pacientes mediante formulario, con validación
- [ ] Listado de pacientes
- [ ] Edición
- [ ] Informe (listado imprimible o CSV)

## Avance 
- [X] Fase 1: Instalación y estructura
- [X] Fase 2: Migraciones y seed
- [ ] Fase 3: Listado
- [ ] Fase 4: Formulario con validación
- [ ] Fase 5: Edición
- [ ] Fase 6: Informe
- [ ] Fase 7: Docker Compose y README final