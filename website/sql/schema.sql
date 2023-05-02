DROP TABLE IF EXISTS PRODUCT;
DROP TABLE IF EXISTS USER;
CREATE TABLE IF NOT EXISTS PRODUCT (
    id INT(6) UNSIGNED AUTO_INCREMENT,
    Product_name VARCHAR(30) NOT NULL,
    Price INT(15) NOT NULL,
    In_stock INT UNSIGNED NOT NULL,
    PRIMARY KEY (Id)
);
CREATE TABLE IF NOT EXISTS USER (
    userId INT(6) UNSIGNED AUTO_INCREMENT,
    Username VARCHAR(30) NOT NULL,
    Display_name VARCHAR(30) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Membership VARCHAR(1) NOT NULL,
    PRIMARY KEY (Id)
);
-- @ Insert products
INSERT INTO PRODUCT (Product_name, Price, In_stock)
VALUES ('Mercedes', 30000, 5),
    ('Tesla', 60000, 12),
    ('Vulcan', 75000, 3);
-- @ Add Users
-- password: John@Cena125
INSERT INTO USER (
        Username,
        Display_name,
        Password,
        Email,
        Membership
    )
VALUES (
        'DucatiMeme123',
        'DucatiMeme',
        'f1549eb516ffbf5bbcc7dda0d6646ea2',
        'DucatiMeme123@gmail.com',
        'G'
    );