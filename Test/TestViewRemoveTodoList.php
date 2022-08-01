<?php
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Lerry");
addTodoList("Julian");
addTodoList("Joostensz");
addTodoList("Aku");
addTodoList("Ateb");
addTodoList("Utas");

showTodoList();

viewRemoveTodoList();

showTodoList();
