# Student-Info-PHP


## Project Setup

1. Download this repo.
2. Unzip it into yout www or htdocs directory
3. Start Your local server
4. goto localhost/phpmyadmin
5. click sql
6. open database.sql and copy everything and paste it into sql input field
```sql
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE `smallproject` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `smallproject`;

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `roll` varchar(15) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `enrollday` date NOT NULL,
  `l1t1` varchar(10) NOT NULL,
  `l1t2` varchar(10) NOT NULL,
  `l2t1` varchar(10) NOT NULL,
  `l2t2` varchar(10) NOT NULL,
  `l3t1` varchar(10) NOT NULL,
  `l3t2` varchar(10) NOT NULL,
  `l4t1` varchar(10) NOT NULL,
  `l4t2` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

```
7. press go button

and your project will be live.

## Or Follow this Process


1. Download this repo.
2. Unzip it into yout www or htdocs directory
3. Start Your local server
4. goto localhost/phpmyadmin
5. create a database name smallproject
6. go to smallproject database and click sql

```sql
CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `roll` varchar(15) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `enrollday` date NOT NULL,
  `l1t1` varchar(10) NOT NULL,
  `l1t2` varchar(10) NOT NULL,
  `l2t1` varchar(10) NOT NULL,
  `l2t2` varchar(10) NOT NULL,
  `l3t1` varchar(10) NOT NULL,
  `l3t2` varchar(10) NOT NULL,
  `l4t1` varchar(10) NOT NULL,
  `l4t2` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
```

7. paste the avobe code and click go and it will create your database table.