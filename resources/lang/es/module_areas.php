<?php

$word_title = 'Área';
$word_text = 'área';

return [
    // Title
    'module_title_s'        => $word_title,
    'module_title'          => $word_title.'s',

	// Tabs
	'tabs'              => [
        'general'      	    => 'General',
    ],

    // CRUD
    'crud'              => [
        'create'            => [
            'success'           => $word_title.' registrada con éxito',
            'error'             => 'Error al registrar el '.$word_text,
        ],
        'update'            => [
            'success'           => $word_title.' actualizada con éxito',
            'error'             => 'Error al actualizar el '.$word_text,
        ],
        'delete'            => [
            'success'           => $word_title.' eliminada con éxito',
            'error'             => 'Error al eliminar el '.$word_text,
        ],
        'restore'           => [
            'success'           => $word_title.' restaurada con éxito',
            'error'             => 'Error al restaurar el '.$word_text,
        ]
    ],
];
