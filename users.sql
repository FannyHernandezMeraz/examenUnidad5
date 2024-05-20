/*
 admin
 Este usuario tiene acceso a consultar, insertar y editar datos.
*/

# Privilegios para `admin`@`%`

GRANT USAGE ON *.* TO `admin`@`%` IDENTIFIED BY PASSWORD '*EFC258DA67C9F942793CDD8A2050C469256C7192';

GRANT SELECT, INSERT, UPDATE ON `redisvideo`.* TO `admin`@`%`;

/*
 guess
 Este usuario tiene acceso únicamente a la consulta de datos.
*/

# Privilegios para `guess`@`%`

GRANT USAGE ON *.* TO `guess`@`%` IDENTIFIED BY PASSWORD '*3292583B213458B8A3AD8039662A80450C7EC021';

GRANT SELECT ON `redisvideo`.* TO `guess`@`%`;