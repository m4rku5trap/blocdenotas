# Bloc de notas

#   Prueba técnica PHP Laravel + React

*   La idea es hacer una aplicación web muy sencilla que sea un bloc de notas: se ve una lista de
notas y puedes crear, editar y eliminar notas de la lista.
*   Una nota debe tener como mínimo un Título, texto y fecha de creación.
*   Con PHP Laravel hay que desarrollar solamente una API (no la UI).
*   El Front debe ser desarrollado con React.
*   Lee los requisitos del proyecto en la siguiente página.
*   La entrega se hará subiendo el código a un repositorio de Github. Ambos proyectos en el mismo
respositorio.
*   ¡Importante!: Incluir en el repositorio los archivos de configuración (.env) para que el proyecto se
pueda arrancar.

#   Requisitos de la prueba:

*   Se deben poder listar, crear, editar y eliminar las notas. (CRUD)
*   La página debe tener paginación por API. Se mostrarán máximo 6 notas (como
en la captura) y a partir de ahí deben haber botones de “Siguiente” y “Anterior” que
permitan cargar más notas.
*   Usar los correctos estándares HTTP y API Rest para la definición de la API.
*   La API debe usar autenticación con el header Authentication simplemente con valor
“Doonamis” (Nada de tokens, usuarios, etc. Simplemente eso).
*   Deben usarse migraciones para crear la base de datos y llenar ésta automáticamente con
20 notas con texto aleatorio.
*   El Front debe estar desarrollado en React.
*   El proyecto de React debe estar hecho con Typescript y SCSS sin tailwind.
*   (Opcional) Idealmente, que haya un buscador que permita buscar las notas por su título.
*   Se valorará positivamente el tener un código estructurado, no repetir código
innecesariamente y conocer bien las tecnologías con las que se trabaja.
