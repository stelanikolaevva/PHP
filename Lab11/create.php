<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        if (!$dbConn = mysqli_connect($host, $dbUser, $dbPass)) {
            die('Не може да се осъществи връзка със сървъра.');
        }
        $queryResource = mysqli_query($dbConn, "CREATE DATABASE InfoProvider");
        if ($queryResource) {
            echo "Базата данни е създадена. <br>";
        } else {
            die("Грешка при създаване на базата данни: " . mysqli_error($dbConn));
        }

        include "config.php";
        $crcity = "CREATE TABLE  City(CityID INT(10) NOT NULL,"
                . " Name VARCHAR(100) DEFAULT NULL)";
        $resultcreate1 = mysqli_query($dbConn, $crcity);
        
        $crpk1 = "ALTER TABLE `city`  ADD PRIMARY KEY (`CityID`)";
        $resuladdpk = mysqli_query($dbConn, $crpk1);
        
        if ($resultcreate1) {
            echo "Създадена е таблица за Град<br>";
        } 
        
        $createprov = "CREATE TABLE Provider(ProvID INT(8) NOT NULL ,"
                . "Firm VARCHAR(30) NOT NULL,"
                . "Bulstat VARCHAR(30) DEFAULT NULL, "
                . "CityID INT(10) NOT NULL, "
                . "PhoneNumber VARCHAR(10) DEFAULT NULL,"
                . " YearRegistered INT(4) DEFAULT NULL,"
                . " Name VARCHAR(30) DEFAULT NULL)";
        $resultcreate2 = mysqli_query($dbConn, $createprov);
        if ($resultcreate2) {
            echo "Създадена е таблица за Доставчик<br>";
        } 
        $crpk2 = "ALTER TABLE `Provider`  ADD PRIMARY KEY (`ProvID`),  ADD KEY `CityID` (`CityID`)";
        $resultaddpk = mysqli_query($dbConn, $crpk2);

        if(!$resultcreate1 || !$resultcreate2) {
            die("Greshka: <br>".mysqli_error($dbConn));
        }

        $aincrc = " ALTER TABLE `city` MODIFY `CityID` int(10) NOT NULL AUTO_INCREMENT";
        $resultmodify = mysqli_query($dbConn, $aincrc);
        $aincrc2 = "ALTER TABLE `provider`   MODIFY `ProvID` int(8) NOT NULL AUTO_INCREMENT";
        $resultmodify2 = mysqli_query($dbConn, $aincrc2);
        ?>
        <a href="index.php"/>Назад</a>
</body>
</html>
