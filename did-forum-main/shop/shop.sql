/*
���ն������룺
cd \xampp\mysql\bin
mysql -u root
���������´���
*/
CREATE DATABASE shop;
USE shop;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    public_key VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    points INT DEFAULT 0
);