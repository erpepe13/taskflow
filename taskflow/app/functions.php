<?php
function obtenerClasePrioridad($tarea) {
    $clasesTarea = 'task-item';

    if ($tarea['completado']) {
        $clasesTarea .= ' completed';
    }

    switch ($tarea['prioridad']) {
        case 'alta':
            $clasesTarea .= ' priority-alta';
            break;
        case 'media':
            $clasesTarea .= ' priority-media';
            break;
        case 'baja':
            $clasesTarea .= ' priority-baja';
            break;
    }

    return $clasesTarea;
}

function renderizarTareas($tareas) {
    foreach ($tareas as $tarea) {
        $clase = obtenerClasePrioridad($tarea);
        echo "<li class='{$clase}'>{$tarea['titulo']}</li>";
    }
}
?>