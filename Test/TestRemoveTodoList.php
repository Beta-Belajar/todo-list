<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Lerry");
addTodoList("Eko");
addTodoList("Julian");
addTodoList("Obe");
addTodoList("Poi");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(5);

var_dump($success);
