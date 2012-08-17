<?php

function user_recent_posts() {
	$items = Registry::get('recent_posts');

	if($item = $items->valid()) {	
		Registry::set('post', $items->current());

		$items->next();
	}

	return $item;
}

function user_id() {
	return Registry::get('user')->id;
}

function user_name() {
	return Registry::get('user')->name;
}

function user_username() {
	return Registry::get('user')->username;
}

function user_total_posts() {
	return Registry::get('user')->posts;
}

function user_registered() {
	return Date::format(Registry::get('user')->registered);
}