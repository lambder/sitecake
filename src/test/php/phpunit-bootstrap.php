<?php

spl_autoload_register(function($className)
{
	require(str_replace('_', '/', str_replace('\\', '/', ltrim($className, '\\'))) . '.php');
});