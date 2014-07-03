<?php
return array(

    /*
    |--------------------------------------------------------------------------
    | Your Solr config
    |--------------------------------------------------------------------------
    |
    |
    */
    'endpoint' => 'localhost',
	'port' => '8983',
	'path' => '/solr/',
	'output_format' => 'json', //possible values depends on your solr version, but usually includes xml, php, python, ruby and csv, check your solr documentation
	'indent' => false,
);