<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',

    'theme' => 'default',

    'import' => array(
        'application.components.*',

        'common.components.*'
    ),

    'components' => array(
	'themeManager' => array(
	    'class' => 'CThemeManager',
	    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'themes',
	    'baseUrl' => 'themes'
	),

	'log' => array(
	    'class' => 'CLogRouter',
	    'routes' => array(
		array(
		    'class' => 'CFileLogRoute',
		    'levels' => 'error, warning'
		),

		array(
		    'class' => 'CWebLogRoute'
		)
	    )
	),
    ),
);