# proyecto-carrito-de-la-compra
este es el proyecto carrito de la compra y sus documentos se encuentran aqui :
*css se aloja el estilo personalizado que he querido dar a los iconos de redes sociales 
*libreriapdf la encargada de poder crear un pdf
*templates tenemos los modelos que se utilizan desde la pagina :
 +cuepoindex-contiene la tienda 
 +cuepoindexadmin-copntiene las funciones del admin
 +footer- aqui esta el pie de pagina
 +head - documentos donde importo las librerioas de bootstrap y los iconos y mi hoja de stilo 
 +header- aqui se haya la barra de navegacion donde se encuentra los formularios y boton mostrar carrito
 +headeradministardor contiene los botones para el administardor que no pueda acceder a la tienda 
 +headerregistrado- barra de navegacion para usuarios registrados con botones de cerrar sesion y mostrar carrito
 +mostrarcarrito-recolecta los dastos de la cookie y nos lo muesta o nos da un mensaje erroneo en casoi de no encontrar productos 
*libreriapdf-nos da la funcion de imprimir el toicket por pdf 
*actualizar -actualiza productos de la db 
*borrar-borra productos de la db
*carrito  almacena objetos en el carrito
*cierre  sirve para cerrar sesiones abiertas que es un enlace de un boton
*conexion he realizado la conexion a parte para facilitar el cambio cuando paso de local a mi host y no ir uno a uno modificando mis documentos que requieren de este
*datosticket-pagina que recoje todos los datos que se quieren mostarar en el ticket 
*facturas-pagina donde se reflejan las compras y nos da acceso al ticket
*index - donde se aloja la tienda 
*indexadmindato-un index que salta cuando el administardor realiza una accion
*indexadministardor es el index para el usuario administardor con sus opciones para modificar 
*indexmal- una pagina a la que se nos redireccionara cuando hagamos un inicio de sesion erroneo
*indexregis- pagina a la que se nos redigira cuando hayamos creado un usuario
*indexregistrado - es el index con el menu de navegacion para un usuario registrado
*insertar-da al admin la funcion de insertar nuevos productos  
*mostrarcarrito-encargada de recoger los datos de la cookie y mostarlos 
*mostrarcarritonoregis-muestra los datos del carrito con los templates de un usuario con sesion no iniciada
*mostrarcarritoregis-muestra los datos del carrito con los templates de un usuario con sesion iniciada
*mostrardatos - muestra al usduario sus datos 
*pagar-la encargada de crear la tabla en la base de datos de ventas "pedidos"
*ticketpdf-es la pagina donde los datos obtenidos y pasados por post a esta seran transformados en pdf con consultas a base de ddatos 
*userregistrado- la que se encarga de introducir los datos del usuario nuevo a la base datos 
*validacion- se encarga de comprobar si el ususario existe en la base de datos y mostar sus datos

