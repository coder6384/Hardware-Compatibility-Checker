<?php
require_once "./core/Database.php";

echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS user(id SERIAL,first_name TINYTEXT NOT NULL, last_name TINYTEXT NOT NULL, email TINYTEXT NOT NULL UNIQUE, password TINYTEXT NOT NULL,is_staff BOOLEAN default 0 ,is_super_admin BOOLEAN DEFAULT 1,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n"; 


echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS computer(id SERIAL,Category TINYTEXT NOT NULL, Manufacturer TINYTEXT NOT NULL, Model TINYTEXT NOT NULL, display TINYTEXT NOT NULL ,storage TINYTEXT NOT NULL,ram TINYTEXT NOT NULL,market_price DOUBLE NOT NULL,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n";

echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS desktop(id SERIAL,Category TINYTEXT NOT NULL, Manufacturer TINYTEXT NOT NULL, Model TINYTEXT NOT NULL, display TINYTEXT NOT NULL , storage TINYTEXT NOT NULL,ram TINYTEXT NOT NULL,market_price DOUBLE NOT NULL,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n";




echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS parts(id SERIAL,Manufacturer TINYTEXT NOT NULL, Model TINYTEXT NOT NULL, storage_type TINYTEXT NOT NULL,ram TINYTEXT NOT NULL , cpu TINYTEXT NOT NULL,charging_pin TINYTEXT NOT NULL,display TINYTEXT NOT NULL,graphics_card TINYTEXT NOT NULL,other TINYTEXT NOT NULL ,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n";