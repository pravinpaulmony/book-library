-- DATABASE
CREATE DATABASE book_data

-- BOOK TABLE

CREATE TABLE `book_data`.`books` ( `sale_id` INT(5) NOT NULL AUTO_INCREMENT , `customer_name` VARCHAR(100) NOT NULL , `customer_mail` VARCHAR(50) NOT NULL , `product_id` INT(5) NOT NULL , `product_name` VARCHAR(200) NOT NULL , `product_price` VARCHAR(6) NOT NULL , `sale_date` DATETIME NOT NULL , PRIMARY KEY (`sale_id`)) ENGINE = InnoDB;

INSERT INTO books(sale_id,customer_name,customer_mail,product_id,product_name,product_price,sale_date) VALUES (1,'Reto Fanzen','reto.fanzen@no-reply.rexx-systems.com',1,'Refactoring: Improving the Design of Existing Code',49.99,'2019-04-02 08:05:12');
INSERT INTO books(sale_id,customer_name,customer_mail,product_id,product_name,product_price,sale_date) VALUES (2,'Reto Fanzen','reto.fanzen@no-reply.rexx-systems.com',2,'Clean Architecture: A Craftsman''s Guide to Software Structure and Design',24.99,'2019-05-01 11:07:18');
INSERT INTO books(sale_id,customer_name,customer_mail,product_id,product_name,product_price,sale_date) VALUES (3,'Leandro Bußmann','leandro.bussmann@no-reply.rexx-systems.com',2,'Clean Architecture: A Craftsman''s Guide to Software Structure and Design',19.99,'2019-05-06 14:26:14');
INSERT INTO books(sale_id,customer_name,customer_mail,product_id,product_name,product_price,sale_date) VALUES (4,'Hans Schäfer','hans.schaefer@no-reply.rexx-systems.com',1,'Refactoring: Improving the Design of Existing Code',37.98,'2019-06-07 11:38:39');
INSERT INTO books(sale_id,customer_name,customer_mail,product_id,product_name,product_price,sale_date) VALUES (5,'Mia Wyss','mia.wyss@no-reply.rexx-systems.com',1,'Refactoring: Improving the Design of Existing Code',37.98,'2019-07-01 15:01:13');
INSERT INTO books(sale_id,customer_name,customer_mail,product_id,product_name,product_price,sale_date) VALUES (6,'Mia Wyss','mia.wyss@no-reply.rexx-systems.com',2,'Clean Architecture: A Craftsman''s Guide to Software Structure and Design',19.99,'2019-08-07 19:08:56');