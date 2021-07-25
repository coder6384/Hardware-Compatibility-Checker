<?php
require_once "./core/Database.php";

echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS user(id SERIAL,first_name TINYTEXT NOT NULL, last_name TINYTEXT NOT NULL, email TINYTEXT NOT NULL UNIQUE, password TINYTEXT NOT NULL,is_staff BOOLEAN default 0 ,is_super_admin BOOLEAN DEFAULT 1,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n"; 


echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS computer(id SERIAL,Manufacturer TINYTEXT NOT NULL, Model TINYTEXT NOT NULL, year_made TINYTEXT NOT NULL , market_price TINYINT NOT NULL,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n";

echo "applying migration\n";
$sql="CREATE TABLE IF NOT EXISTS parts(id SERIAL,Manufacturer TINYTEXT NOT NULL, Model TINYTEXT NOT NULL, hard_disk TINYTEXT NOT NULL,ram TINYTEXT NOT NULL , cpu TINYTEXT NOT NULL,charging_pin TINYTEXT NOT NULL ,last_updated TIMESTAMP)";
$db->exec($sql);
echo "applied migration\n";