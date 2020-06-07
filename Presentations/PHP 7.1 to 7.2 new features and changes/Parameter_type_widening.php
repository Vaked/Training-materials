<?php

<?php

namespace Core;

interface DatabaseInterface
{
    public function connectToDb();
    public function closeConnection();
    public function queryDatabase();
    public function fetchResults();
}


$configFile = "../Configurations/config.php";
$config= Config::getInstance($configFile);
echo $config->getFile();



$array = $config->getConfiguration("0");
var_dump($array);


$array = $config->getConfiguration("0");
var_dump($array);

$array = $config->getConfiguration("mysqlDb");
var_dump($array);


$config= Config::getInstance();
$array = $config->getConfiguration("oracleDb");
var_dump($array);


$config = Config::getInstance();
$array = $config->getConfiguration("oracleDb");
var_dump($array);


$array = $app->config->getConfiguration("oracleDb");
var_dump($array);


$database = new Database;
$dbInstance = $database->connect();