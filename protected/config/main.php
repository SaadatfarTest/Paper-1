<?php

return array(
	'params'=>array(
		'AdminUsername' => 'admin',
		'AdminPass' => '13721372'
	),
	'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'13721372',
        ),
        'admin'=>array(
            'class'=>'application.admin.AdminModule',
        ),
    ),
	'name'=>'Paper!',
	'basePath'=>dirname(__FILE__).DS.'..',
	'import'=>array(
    	'application.components.*',
		'application.extensions.*',
		'application.models.*',
		'application.extensions.widgets.*',
    	'application.admin.components.*',
	),
	'preload'=>array(
			'bootstrap',
	),
	/*'aliases' => array(
	    'admin' => 'ext.admin'
	),*/
	'components'=>array(
		'gc' => array(
			'class' => 'application.components.GRuntime',
		),
		'GWidget' => array(
			'class' => 'application.components.GWRuntime',
		),'decoda' => array(
        	'class' => 'ext.decoda.YiiDecoda',
        	'defaults' => true,
    	),
        'cache'=>array(
            'class'=>'system.caching.CFileCache',
        ),
		'db'=>array(
            'class'=>'CDbConnection',
            'connectionString'=>'mysql:host=localhost;dbname=gframework',
            'username'=>'root',
            'password'=>'',
            'emulatePrepare'=>true,
			'charset'=>'utf8',
        ),
		'bootstrap'=>array(
        	'class'=>'ext.bootstrap.components.Bootstrap',
    	),
    	'functions'=>array(
    		'class'=>'ext.functions.functions',
    	)
    ),
);