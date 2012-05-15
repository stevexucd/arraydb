<?php

	$model=array(
		'user'=>array(
			'conf'=>array(
				'len'=>7
			),
			'fields'=>array(
				'email'=>array('len'=>100),
				'password'=>array('type'=>'pass'),
				'name'=>array('len'=>50),
			),
			'has_many'=>array(
				array('type'=>'post', 'foreign_name'=>'writer'),
				array('type'=>'comment', 'foreign_name'=>'writer')
			),
			'many_to_many'=>array(
				'liked_post'=>array('type'=>'post', 'foreign_name'=>'liker'),
				'liked_comment'=>array('type'=>'comment', 'foreign_name'=>'liker')
			),
			'self_ref'=>array('friend')
		),
		'post'=>array(
			'conf'=>array(
				'len'=>8
			),
			'fields'=>array(
				'text'=>array('len'=>5000),
			),
			'has_many'=>array(
				array('type'=>'comment')
			)
		),
		'comment'=>array(
			'conf'=>array(
				'len'=>10
			),
			'fields'=>array(
				'text'=>array('len'=>1000)
			)
		)
	);
