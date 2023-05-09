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
VALUES ('De Tomaso P72', 1300000, 3),
    ('Ferrari LaFerrari', 1400000, 6),
    ('Pagani Huayra', 1400000, 2),
    ('McLaren Elva', 1700000, 2),
    ('Zenvo TSR-S', 1700000, 8),
    ('Tesla - Model 3', 60000, 8),
    ('Tesla - Model Y', 80000, 233),
    ('Tesla - Model S', 120000, 412),
    ('Bentley Bacalar', 1900000, 4),
    ('Mercedes-AMG Project One', 2700000, 1),
    ('Lamborghini Sian', 3600000, 2),
    ('Bugatti Bolide', 4700000, 1),
    ('Bugatti La Voiture Noire', 13400000, 1),
    ('Rolls-Royce Boat Tail', 28000000, 1);
-- @ Add Users
-- password: John@Cena125, BnnJ@e257
INSERT INTO USER (
        Username,
        Display_name,
        Password,
        Email,
        Membership
    )
VALUES (
        'DucatiMeme123',
        'DucatiMimi',
        'f1549eb516ffbf5bbcc7dda0d6646ea2',
        'DucatiMeme123@gmail.com',
        'G'
    ),
    (
        'BananaJoe933',
        'B-Joe',
        'a694b2ae4d2762e71c9f11a31b3c468e',
        'bnansj@bnn.com',
        'D'
    );