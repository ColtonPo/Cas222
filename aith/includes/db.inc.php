<?php
/**
 * Created by PhpStorm.
 * User: Colton
 * Date: 2/24/2019
 * Time: 1:19 PM
 */
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=coltonpo_aith', 'coltonpo_aith', 'moonpie17!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}
?>