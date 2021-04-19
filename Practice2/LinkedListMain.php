<?php
include_once ('LinkList.php');

$linkedList = new LinkedList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(33);
$linkedList->insertLast(44);
//$totalNodes = $linkedList->totalNode();
//$linkData = $linkedList->readList();
//
//echo $totalNodes;
echo "<pre>";
var_dump($linkedList->firstNode);

