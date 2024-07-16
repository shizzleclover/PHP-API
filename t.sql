CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



SELECT username, email FROM users WHERE id = 1;

INSERT INTO users (username, email, created_at)
VALUES ('john_doe', 'john.doe@email.com', NOW());


UPDATE users
SET email = 'updated.email@email.com'
WHERE id = 1;

DELETE FROM users
WHERE id = 1;


CREATE DATABASE company;

USE company;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

ALTER TABLE users
ADD COLUMN age INT;

USE company;

DROP TABLE products;

