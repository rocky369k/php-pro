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