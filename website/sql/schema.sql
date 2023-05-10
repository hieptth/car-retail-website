DROP TABLE IF EXISTS PRODUCT;
DROP TABLE IF EXISTS USER;
CREATE TABLE IF NOT EXISTS PRODUCT (
    id INT(6) UNSIGNED AUTO_INCREMENT,
    Product_name VARCHAR(30) NOT NULL,
    Price VARCHAR(20) NOT NULL,
    In_stock INT UNSIGNED NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE IF NOT EXISTS USER (
    userId INT(6) UNSIGNED AUTO_INCREMENT,
    Username VARCHAR(30) NOT NULL,
    Display_name VARCHAR(30) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Membership VARCHAR(1) NOT NULL,
    PRIMARY KEY (userId)
);
-- @ Insert products
INSERT INTO PRODUCT (Product_name, Price, In_stock)
VALUES ('De Tomaso P72', '1.300.000', 3),
    ('Ferrari LaFerrari', '1.400.000', 6),
    ('Pagani Huayra', '1.400.000', 2),
    ('McLaren Elva', '1.700.000', 2),
    ('Zenvo TSR-S', '1.700.000', 8),
    ('Tesla - Model 3', '60.000', 8),
    ('Tesla - Model Y', '80.000', 233),
    ('Tesla - Model S', '120.000', 412),
    ('Bentley Bacalar', '190.0000', 4),
    ('Mercedes-AMG Project One', '2.700.000', 1),
    ('Lamborghini Sian', '3.600.000', 2),
    ('Bugatti Bolide', '4.700.000', 1),
    ('Bugatti La Voiture Noire', '13.400.000', 1),
    ('Pagani Imola', '5.400.000', 12),
    ('Bugatti Mistral', '5.000.000', 34),
    ('Koenigsegg CCXR Trevita', '4.800.000', 17),
    ('Rolls-Royce Boat Tail', '28.000.000', 1),
    ('Bugatti Chiron Super', '5.700.000', 1),
    ('Gordon Murray T.50s', '4.400.000', 4),
    ('Lamborghini Veneno', '4.000.000', 1),
    ('Bugatti Chiron Pur Sport', '3.600.000', 1),
    ('Aspark Owl', '3.560.000', 1),
    ('Pagani Huayra BC Roadster', '3.500.000', 1),
    ('McLaren Solus', '3.500.000', 1),
    ('Ferrari Pininfarina Sergio', '3.000.000', 1),
    ('Koenigsegg Jesko', '3.000.000', 1),
    ('Hennessey Venom F5 Roadster', '3.000.000', 1),
    ('Aston Martin Victor', '3.000.000', 1),
    ('Mercedes AMG One', '2.700.000', 1),
    ('Aston Martin Valkyrie', '2.600.000', 1),
    ('Ferrari FXX K Evo', '2.600.000', 1),
    ('Ferrari F60 America', '2.500.000', 1),
    ('Pagani Utopia', '2.500.000', 1),
    ('Lamborghini Countach LPI 800-4', '2.500.000', 1),
    ('Bugatti Veyron Super Sport', '2.400.000', 1),
    ('Aston Martin Vulcan', '2.300.000', 1);
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