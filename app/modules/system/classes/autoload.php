<?php
spl_autoload_register(function(string $classPath)
{
    $filePath = $_SERVER['DOCUMENT_ROOT'] . "/$classPath.php";
    $filePath = mb_strtolower($filePath);
    $filePath = str_replace('\\', '/', $filePath);

    if (file_exists($filePath))
    {
        include_once $filePath;
    }
    else
    {
        throw new Exception("File '$filePath' is not founded!");
    }
});