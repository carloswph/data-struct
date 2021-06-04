<?php 

use DataStruct\Vector;
use DataStruct\Map;

function vector()
{
	$params = func_get_args();
	$array = [];

	foreach ($params as $param) {
		$array[] = $param;
	}

	return new \Ds\Vector($array);
}

function map()
{
	$params = func_get_args();
	$array = [];

	foreach ($params as $param) {
		$array[] = $param;
	}

	return new \Ds\Map($array);
}

function map_count(\Ds\Map $map)
{
	$res = new Map($map);
	return $res->count();
}

function deque()
{
	$params = func_get_args();
	$sequence = new \Ds\Deque();

	foreach($params as $param) {
		$sequence->push($param);
	}

	return $sequence;
}