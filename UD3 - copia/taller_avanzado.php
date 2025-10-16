<?php
//Problema 1: Calculadora de Descuentos

function calcularDescuento($precio, $categoria)
{
    if ($categoria == "electronica") {
        return $precio * 0.15;
    }elseif ($categoria == "ropa") {
        return $precio * 0.10;
    }elseif ($categoria == "alimentacion") {
        return $precio * 0.05;
    }

}
echo "Descuento: " . calcularDescuento(100, "electronica") . " euros";

//Problema 2: El juego "FizzBuzz"
function fizzBuzz ($numero){
    if ($numero % 3 == 0 && $numero % 5 == 0){
        return "FizzBuzz";
    } elseif ($numero % 3 == 0) {
        return "Fizz";
    } elseif ($numero % 5 == 0) {
        return "Buzz";
    } else {
        return  "$numero no es divisible ni por 3 ni por 5";
    }
}

echo fizzBuzz(15);

//Problema 3: Validar de contraseña
function validarPassword(string $password): string {
    if (strlen($password) <= 8){
        return "DEVIL";
    }
        $tieneMayus = preg_match('/[A-Z]/', $password);   
        $tieneNumero = preg_match('/[0-9]/', $password);
    if ($tieneMayus && $tieneNumero) {
        return "Fuerte";
    }
        return "media";
}
    echo validarPassword("Password1");
   
//Problema 4: encontrar el valor maximo
array(3, 5, 7, 2, 8, 1);
    function encontrarMaximo(array $array): int|float {
    $maximo = $array[0];  

    foreach ($array as $valor) {
        if ($valor > $maximo) {
            $maximo = $valor;
        }
    }

    return $maximo;
}
 echo "El valor máximo es: " . encontrarMaximo([3, 5, 7, 2, 8, 1]);

 //Problema 5 : Filtrar usuarios por criterios
 $usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];
$usuariosMayores = array_filter($usuarios, function($usuario) {
    return $usuario['edad'] >= 18;
});

echo($usuariosMayores);

?>