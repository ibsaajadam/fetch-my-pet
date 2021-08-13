CREATE TABLE dogs (
  dog_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
  dog_breed varchar(255) not null,
  dog_age int(11) not null
);

INSERT INTO dogs (dog_breed, dog_age) VALUES ('German Shepherd', '10');