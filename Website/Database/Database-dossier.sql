CREATE SCHEMA restaurant_qa;

CREATE TABLE admin
(
  admin_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  admin_email VARCHAR(255) NOT NULL,
  admin_password VARCHAR(60)
);

CREATE TABLE website_setting
(
  setting_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  setting_name VARCHAR(255) NOT NULL,
  setting_value VARCHAR(255) NOT NULL
);

CREATE TABLE picture
(
  picture_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  picture_name VARCHAR(100) NOT NULL,
  picture_image VARCHAR(255) NOT NULL
);

CREATE TABLE menu
(
  menu_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  menu_name VARCHAR(100) NOT NULL,
  menu_f_options VARCHAR(255) NOT NULL,
  menu_f_description VARCHAR(255) NOT NULL,
  menu_f_price DECIMAL(4,2) NOT NULL,
  menu_s_options VARCHAR(255),
  menu_s_description VARCHAR(255),
  menu_s_price DECIMAL(4,2)
);

CREATE TABLE category
(
  category_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  category_name VARCHAR(100) NOT NULL
);

CREATE TABLE product
(
  product_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  product_description VARCHAR(255) NOT NULL,
  product_price DECIMAL(4,2) NOT NULL,
  product_picture VARCHAR(255) NOT NULL,
  category_id INT(3) NOT NULL,
  FOREIGN KEY (category_id) REFERENCES category(category_id)
);

CREATE TABLE customer
(
  customer_id CHAR(36) NOT NULL UNIQUE,
  customer_mail VARCHAR(255) NOT NULL,
  customer_password VARCHAR(60) NOT NULL,
  customer_allergen VARCHAR(255) NOT NULL
);

CREATE TABLE reservation
(
  reservation_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  reservation_date DATE NOT NULL,
  reservation_hour TIME NOT NULL,
  reservation_nbcustomer INT(2) NOT NULL,
  reservation_mail VARCHAR(255) NOT NULL,
  reservation_allergen VARCHAR(255) NOT NULL,
  customer_id CHAR(36) NOT NULL,
  FOREIGN KEY (customer_id) REFERENCES customer(customer_id)
);

ALTER TABLE reservation MODIFY customer_id CHAR(36);

INSERT INTO website_setting (setting_name, setting_value) VALUES 
("restaurant_name", "Quai Antique"),
("restaurant_mail", "quai.antique@mail.com"), 
("restaurant_phone", "0606060606"),
("restaurant_place", "1 rue Martin, 00001 Matinville"),
("monday_hours", "12h00 - 14h00 et 19h00 - 22h00"),
("tuesday_hours", "12h00 - 14h00 et 19h00 - 22h00"),
("wednesday_hours", "Fermé"),
("thursday_hours", "12h00 - 14h00 et 19h00 - 22h00"),
("friday_hours", "12h00 - 14h00 et 19h00 - 22h00"),
("saturday_hours", "19h00 - 23h00"),
("sunday_hours", "12h00-14h00"),
("nb_place", "20");