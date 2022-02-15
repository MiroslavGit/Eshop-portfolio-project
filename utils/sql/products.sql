CREATE TABLE products(
    product_id int(11) PRIMARY KEY AUTO_INCREMENT not null,
    name varchar(80) NOT NULL,
    category varchar(80) NOT NULL,
    gender varchar(60) NOT NULL,
    price int(11) NOT NULL,
    color varchar(80) NOT NULL,
    sport varchar(80) NOT NULL,
    thicknes int(11) NOT NULL,
    temperature_rating int(11) NOT NULL,
    warmth_rating varchar(80) NOT NULL,
    volume_range int(11) NOT NULL,
    imagine varchar(255) NOT NULL
)

INSERT INTO products
Values
(1,"POLLARD VOLCANO SHORT SLEEVE T-SHIRT","t-shirts", "womens","30,00","pink","bike", 2, 20,"warm", 20, "../../photos/products/product1.jpg");