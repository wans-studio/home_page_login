<img width="1435" height="748" alt="Screenshot (107)" src="https://github.com/user-attachments/assets/e43764b0-b874-4fde-8d79-d67038d94642" />

ini sql nya tingal paste ke sql aja


CREATE DATABASE db_login;
USE db_login;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
