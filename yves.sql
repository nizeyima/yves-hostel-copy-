CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  dob DATE,
  gender ENUM('male', 'female', 'other'),
  phone_number VARCHAR(20),
  country VARCHAR(30),
  course VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`name`, `username`, `email`, `password`, `dob`, `gender`, `phone_number`, `country`, `course`)
VALUES ('John Doe', 'johndoe', 'johndoe@example.com', 'mypassword', '1990-01-01', 'male', '1234567890', 'USA', 'Computer Science');
