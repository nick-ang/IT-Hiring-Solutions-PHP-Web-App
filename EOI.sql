CREATE TABLE EOI (
  EOInumber INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  ref INT(25) NOT NULL,
  first_name VARCHAR(40) NOT NULL,
  last_name VARCHAR(40) NOT NULL,
  address VARCHAR(40) NOT NULL,
  suburb VARCHAR(40) NOT NULL,
  state VARCHAR(40) NOT NULL,
  postcode INT NOT NULL,
  email VARCHAR(40) NOT NULL,
  phone VARCHAR(40) NOT NULL,
  skills VARCHAR(40),
  Other VARCHAR(40),
  status VARCHAR(7) DEFAULT 'New'
);

INSERT into
  eoi (
    ref,
    first_name,
    last_name,
    address,
    suburb,
    state,
    postcode,
    email,
    phone,
    skills,
    Other
  )
values
  (
    '$ref',
    '$first_name',
    '$last_name',
    '$street',
    '$suburb',
    '$state',
    '$postcode',
    '$email',
    '$phone',
    '$skills',
    '$other'
  );

INSERT INTO
  cars (car_id, make, model, price, yom)
VALUES
  (NULL, 'BMW', 'X3', 35000, 2010);

INSERT INTO
  cars (car_id, make, model, price, yom)
VALUES
  (NULL, 'Holden', 'Astra', 14000, 2009),
  (NULL, 'Ford', 'Falcon', 39000, 2013),
  (NULL, 'Toyota', 'Corolla', 14000, 2009),
  (NULL, 'Holden', 'Commodore', 14000, 2009),
  (NULL, 'Holden', 'Astra', 14000, 2009),
  (NULL, 'Holden', 'Commodore', 14000, 2009),
  (NULL, 'Ford', 'Falcon', 14000, 2009),
  (NULL, 'Ford', 'Falcon', 14000, 2009),
  (NULL, 'Ford', 'Laser', 14000, 2009);

SELECT
  *
FROM
  cars;

SELECT
  make,
  model,
  price
FROM
  cars
ORDER BY
  make,
  model;

SELECT
  EOInumber,
  ref,
  first_name,
  last_name,
  address,
  suburb,
  state,
  postcode,
  email,
  phone,
  skills,
  other,
  status
FROM
  EOI
ORDER BY
  EOInumber,
  ref ";


UPDATE
  Customers
SET
  ContactName = 'Alfred Schmidt',
  City = 'Frankfurt'
WHERE
  CustomerID = 1;
