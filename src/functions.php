<?php 

function vector()
{
	$params = func_get_args();
	$array = [];

	foreach ($params as $param) {
		$array[] = $param;
	}

	return new \Ds\Vector($array);
}

function set()
{
	$params = func_get_args();
	$array = [];

	foreach ($params as $param) {
		$array[] = $param;
	}

	return new \Ds\Set($array);
}

function stack()
{
	$params = func_get_args();
	$array = [];

	foreach ($params as $param) {
		$array[] = $param;
	}

	return new \Ds\Stack($array);
}

function queue()
{
	$params = func_get_args();
	$array = [];

	foreach ($params as $param) {
		$array[] = $param;
	}

	return new \Ds\Queue($array);
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

function deque()
{
	$params = func_get_args();
	$deque = new \Ds\Deque();

	foreach($params as $param) {
		$deque->push($param);
	}

	return $deque;
}

function pqueue()
{
	$params = func_get_args();
	$pqueue = new \Ds\PriorityQueue();
	$j = count($params);
	//var_dump($params);

	for($i = 0; $i < $j; $i++) {
		if($i % 2 == 0) {
			$pqueue->push($params[$i], $params[$i + 1]);
		}
	}

	return $pqueue;
}