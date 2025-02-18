INSERT INTO users (name, username,password, age, gender, email, job_position)
 VALUES ('Fabian Silva', 'FabianDev','3312', 25, 'hombre', 'fabian@example.com', 'Developer');

INSERT INTO users (name, username,password, age, gender, email, job_position)
VALUES('Dayana Garcia', 'DayanaGarcia','1234', 24, 'mujer', 'dayana@donaestudio.com', 'CEO admin'); 

INSERT INTO proyects (name_company, name_proyect, profile_logo, status, observation, price_proyect)
VALUES ('Sephoart', 'landing page', 'sephoart.png','en proceso', 'landing page para la empresa Sephoart, aumento de ventas', 500);


alter table proyects modify price_proyect decimal(4,3);