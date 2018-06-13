CREATE DATABASE my_works;

USE my_works;

CREATE TABLE works(
  work_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  poster VARCHAR(255) NOT NULL,
  url VARCHAR(255) NOT NULL
);

INSERT INTO works (title, poster, url) VALUES
  ('Trabajo 1', 'https://placeimg.com/400/400/animals', 'https://desarrolloweb.com'),
  ('Trabajo 2', 'https://placeimg.com/400/400/people', 'https://escuela.it'),
  ('Trabajo 3', 'https://placeimg.com/400/400/arch', 'https://desarrolloweb.com'),
  ('Trabajo 4', 'https://placeimg.com/400/400/nature', 'https://escuela.it'),
  ('Trabajo 5', 'https://placeimg.com/400/400/people', 'https://desarrolloweb.com'),
  ('Trabajo 6', 'https://placeimg.com/400/400/any', 'https://escuela.it');
