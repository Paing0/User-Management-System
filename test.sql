--CRUD

--Create
INSERT INTO roles (name,value) VALUES ('Super', 44);

--Read
SELECT id, name FROM values ORDER BY name DESC LIMIT 3;

--Update
UPDATE roles SET name='Editor' WHERE id=2;

--Delete
DELETE FROM roles WHERE id=2;