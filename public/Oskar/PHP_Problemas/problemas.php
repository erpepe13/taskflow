<?php
//Ej 1.1 : Perfil de Usuario
$Nombre = "Pepe";
$Apellidos = "Salado Muñoz";
$Edad = 21;
$Altura = "1.77m";
$esEs22tudiante = True;

echo "Hola, me llamo $Nombre $Apellidos, 
tengo $Edad años, mido $Altura.";
echo $esEstudiante ? "Sí, es estudiante." : "No, no es estudiante.";


//Ej 1.2 : Informacion de Producto
$NombreProducto = "Grafica RTX 4090";
$Precio = 1600.50;
$Stock_Disponible = true;
$hayOferta = false;
echo "El producto $NombreProducto tiene un precio de $Precio euros.
¿Hay stock disponible? $Stock_Disponible. ¿Hay oferta? $hayOferta.";

//Ej 1.3 : Constantes de la aplicacion
$Nombre_Sitio = "Mi Tienda Online";
$VersionApp = "1.0";
echo "Nombre de la app $Nombre_Sitio, version $VersionApp.";

//Categoria 2 : Operadores
//Problema 2.1 :Calculadora basica
$num1 = 10;
$num2 = 5;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

//Problema 2.2 : Actualizacion de Stock
$stock = 100;
$ventas =25;
$stock = $stock - $ventas;
$stock = $stock + 50;
echo "El stock actual es de $stock unidades.";

//Problema 2.3 : cadena de texto
$nombre = "Oskar";
$Apellidos = "Salado Muñoz";
$curso = "DAW";
$fraseCompleta = "Soy $nombre $Apellidos y estudio $curso.";
echo "$fraseCompleta";
//Problema 2.4 : Herramienratas de depuracion
$edad = 21;
$edadMinima = 18;
var_dump($edad >= $edadMinima);
$contraseñaGuardada = "1234";
$contraseñaIntroducida = "124";
var_dump($contraseñaGuardada === $contraseñaIntroducida);

//Problema 2.5 : ¿Par o impar?
$numero = 7;
if ($numero % 2==0) {
    echo "$numero es par";
    } else {
    echo "$numero es impar";
    }

//CATEGORÍA 3: ESTRUCTURAS CONDICIONALES
//Problema 3.1 : Control de acceso
$edad = 17;
if ($edad >= 18) {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}

//Problema 3.2 : Calificacion de examen
$nota = 7.5;
if ($nota >= 9){
 echo "Notable";
}elseif ($nota >= 7){
    echo "Bien";
}elseif ($nota >= 5){
    echo "Suficiente";
}else{
    echo "Insuficiente";
}

//Poblema 3.3 : Menu del dia con switch
$diaSemana = "lunes";
switch ($diaSemana) {
    case "lunes":
        echo "Croqueta";
        break;
    case "martes":
        echo "lentejas";
        break;
    case "miercoles":
        echo "puchero";
        break;
    case "jueves":
        echo "paella";
        break;
    case "viernes":
        echo "pescado";
        break;
}

//(Problema 3.4 : Verificacion de Usuario Avanzada
$rolUsuario = "admin";
$usuarioActivo = true;
if ($rolUsuario == "admin" && $usuarioActivo == true) {
    echo "Acceso concedido";
}else{
    echo "Acceso denegado";
}

//CATEGORIA 4: BUCLES
//Problema 4.1 : Tabla de multiplicar del 7
$numero = 7;
for ($i=1; $i <= 10; )
{
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
    $i++;
}

//Problema 4.2 : Cuenta atras para año nuevo
$p = 10;
while ($p >= 1){
    
    echo "$p.";
    $p--;
}

//Problema 4.3 : Recorrer nombres
$alumnos = ["Paco", "Pepe", "Peter", "Sofi"];
foreach ($alumnos as $key => $value){
 echo "<br> Hola ".$value;
}

//Problema 4.4 : Listado de productos
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Raton", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
    ];
    foreach ($productos as $key => $value){
        echo "<br> ".$value["nombre"]." - ".$value["precio"]." euros";
    }

//Categoría 5: Arrays
//Problema 5.1 : Ficha de Usuario
$usuario = [
    ["nombre" => "Pepe", "edad" => 21, "email" => "pepe@"],
    ["nombre" => "Paco", "edad" => 22, "email" => "paco@"],
    ["nombre" => "Ana", "edad" => 20, "email" => "ana@"]
    ];
foreach ($usuario as $key => $value){
    echo "<br> Nombre: ".$value["nombre"].", Edad: ".$value["edad"].", Email: ".$value["email"];
    }

//Problema 5.2 : Filtrado de notas
$notas = [5, 7, 3, 9, 6, 4, 8];
foreach ($notas as $key => $value){
    if ($value >= 5){
        echo "".$value;
    }
}

//Problema 5.3 : Lista de la compra
$listaCompra = [
    "Frutas" => ["Manzanas", "Platanos", "Naranjas"],
    "Verduras" => ["Lechuga", "Tomate", "Zanahoria"],
    "Lacteos" => ["Leche", "Yogur", "Queso"]
];
foreach ($listaCompra as $key => $items){
    foreach ($items as $item){
        echo "<br> $item";
    }
}

//Problema 5.4 : Calcula el total del carrito
$listaCompra2 = [
    "Frutas" => ["Manzanas"=> 2, "Platanos" => 4, "Naranjas" => 5],
    "Verduras" => ["Lechuga" => 2,5 , "Tomate" => 3, "Zanahoria" => 1],
    "Lacteos" => ["Leche" => 3, "Yogur" => 2,70, "Queso" => 3,13]
];
$total = 0;
foreach ($listaCompra2 as $key => $items){
    foreach ($items as $item){
        echo "<br> $item";
        $total++;
        echo "<br> Total: $total";
    }
}
 ?>