/* Create Database and Table */
create database crud_db;

use crud_db;

CREATE TABLE `users` (
  `id` int(50) NOT NULL auto_increment,
  `nama` varchar(100),
  `menu` varchar(100),
  `jumlah` int(50),
  `meja` int(50),
  PRIMARY KEY  (`id`)
);