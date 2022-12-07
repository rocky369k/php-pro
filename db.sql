CREATE DATABASE storedb;

CREATE TABLE users(
                      id INT PRIMARY KEY,
                      username varchar(16),
                      password text NOT NULL,
                      full_name varchar NOT NULL,
                      telephone SMALLINT NOT NULL,
                      created_at timestamp
);

CREATE TABLE users_payment(
                              id INT PRIMARY KEY,
                              user_id BIGINT,
                              payment_type varchar NOT NULL,
                              expiry date,

                              FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE users_info(
                           id INT PRIMARY KEY,
                           user_id INT,
                           country varchar NOT NULL,
                           city varchar NOT NULL,
                           address varchar NOT NULL,
                           postal_code varchar,
                           telephone varchar NOT NULL,

                           FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE product(
                        id INT PRIMARY KEY,
                        name varchar,
                        category_id INT,
                        SKU varchar NOT NULL,
                        price decimal NOT NULL,
                        created_at timestamp,
                        modified_at timestamp,
                        deleted_at timestamp
);

CREATE TABLE order_details(
                              id INT PRIMARY KEY,
                              user_id INT,
                              total decimal,
                              payment_id INT,
                              created_at timestamp,
                              modified_at timestamp,

                              FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE order_items(
                            id INT PRIMARY KEY,
                            order_id INT,
                            product_id INT,

                            FOREIGN KEY (order_id) REFERENCES order_details(id) ON DELETE SET NULL,
                            FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE SET NULL
);

CREATE TABLE payment_details(
                                id INT PRIMARY KEY ,
                                order_id INT,
                                amount INT,
                                status varchar,

                                FOREIGN KEY (id) REFERENCES order_details(payment_id) ON DELETE SET NULL
);

DROP TABLE payment_details; /* 1. */

ALTER TABLE users ALTER COLUMN telephone TYPE INT; /* 2. */

INSERT INTO users
(id, password, full_name, telephone)
VALUES
    (1,'secret','Ivan Ivanov', 631255534);

INSERT INTO users_payment
(id, user_id, payment_type)
VALUES
    (1,1,'card');

INSERT INTO users_info
(id, user_id, country, city, address, telephone)
VALUES
    (1,1,'Ukraine','Kiyv','Koltsova st',6244513);

INSERT INTO product
(id, name, category_id, SKU, price)
VALUES
    (1,'Ivan',1,356184,55.99);

INSERT INTO order_details
(id, user_id, total, payment_id)
VALUES
    (1,1,55.99,1);

INSERT INTO order_items
(id, order_id, product_id)
VALUES
    (1,1,1); /* 3. */

UPDATE users SET telephone = 632551314 WHERE telephone = 631255534; /* 4. */

DELETE FROM product
WHERE id = 2; /* 5. */

SELECT * FROM product;

SELECT * FROM product
WHERE price > 200
ORDER BY price;

SELECT name FROM product
WHERE name = 'Fridge';

SELECT name FROM product
WHERE price < 500
GROUP BY name; /* 6. */

SELECT * FROM product
                  LEFT JOIN order_items oi on product.id = oi.product_id
WHERE price > 300; /* 7. */

ALTER TABLE product ADD COLUMN category varchar; /* 8. */