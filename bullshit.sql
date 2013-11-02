
--test data


INSERT INTO lottery.school (school_name) VALUES ('Benton');
INSERT INTO lottery.school (school_name) VALUES ('Ridgeway');
INSERT INTO lottery.school (school_name) VALUES ('Lee');

INSERT INTO lottery.school_grade (school_id, grade) VALUES (1, 'K');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (1, '1');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (1, '2');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (1, '3');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (1, '4');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (1, '5');

INSERT INTO lottery.school_grade (school_id, grade) VALUES (2, 'K');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (2, '1');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (2, '2');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (2, '3');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (2, '4');

INSERT INTO lottery.school_grade (school_id, grade) VALUES (3, 'K');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (3, '1');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (3, '2');
INSERT INTO lottery.school_grade (school_id, grade) VALUES (3, '3');

INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Admiral', 'Akbar', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Count', 'Dooku', 'Benton', '1');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Obi-Wan', 'Kenobi', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Darth', 'Vader', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Luke', 'Skywalker', 'Benton', '2');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Han', 'Solo', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Padme', 'Amidala', 'Benton', '1');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Tits', 'McGee', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Boba', 'Fett', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Chew', 'Bacca', 'Benton', '2');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('R2', 'D2', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('D2', 'Dooku', 'Benton', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Qui-Gon', 'Jin', 'Benton', 'K');

INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Admiral', 'Akbar', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Count', 'Dooku', 'Ridgeway', '1');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Obi-Wan', 'Kenobi', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Darth', 'Vader', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Luke', 'Skywalker', 'Ridgeway', '2');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Han', 'Solo', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Padme', 'Amidala', 'Ridgeway', '1');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Tits', 'McGee', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Boba', 'Fett', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Chew', 'Bacca', 'Ridgeway', '2');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('R2', 'D2', 'Ridgeway', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('D2', 'Dooku', 'Ridgeway', '3');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Qui-Gon', 'Jin', 'Ridgeway', 'K');


INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Admiral', 'Akbar', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Count', 'Dooku', 'Lee', '1');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Obi-Wan', 'Kenobi', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Darth', 'Vader', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Luke', 'Skywalker', 'Lee', '2');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Han', 'Solo', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Padme', 'Amidala', 'Lee', '1');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Tits', 'McGee', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Boba', 'Fett', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Chew', 'Bacca', 'Lee', '2');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('R2', 'D2', 'Lee', 'K');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('D2', 'Dooku', 'Lee', '3');
INSERT INTO lottery.application (child_firstname, child_lastname, school_select, grade_select) VALUES ('Qui-Gon', 'Jin', 'Lee', 'K');








