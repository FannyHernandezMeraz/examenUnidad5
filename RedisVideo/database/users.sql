/*
 admin
 Este usuario tiene acceso a consultar, insertar y editar datos.
*/

# Privilegios para `admin`@`%`

GRANT USAGE ON *.* TO `admin`@`%` IDENTIFIED BY PASSWORD 'administrador';

GRANT SELECT, INSERT, UPDATE ON `redisvideo`.* TO `admin`@`%`;

/*
 guess
 Este usuario tiene acceso únicamente a la consulta de datos.
*/

# Privilegios para `guess`@`%`

GRANT USAGE ON *.* TO `guess`@`%` IDENTIFIED BY PASSWORD 'invitado';

GRANT SELECT ON `redisvideo`.* TO `guess`@`%`;