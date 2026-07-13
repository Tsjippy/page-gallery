<?php
// This file is generated. Do not modify it manually.
return array(
	'build' => array(
		'schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'tsjippy-page-gallery/show',
		'version' => '0.1.0',
		'title' => 'Page gallery',
		'category' => 'widgets',
		'description' => 'A dynamic gallery of pages',
		'textdomain' => 'tsjippy',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'usesContext' => array(
			'postType'
		),
		'attributes' => array(
			'postTypes' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'amount' => array(
				'type' => 'integer',
				'default' => 10
			),
			'categories' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'speed' => array(
				'type' => 'integer',
				'default' => 3
			),
			'title' => array(
				'type' => 'string',
				'default' => ''
			),
			'color' => array(
				'type' => 'string',
				'default' => ''
			),
			'gradient' => array(
				'type' => 'boolean',
				'default' => false
			)
		)
	)
);
