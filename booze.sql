DROP SCHEMA IF EXISTS drinky CASCADE;
CREATE SCHEMA drinky;

ALTER SCHEMA drinky OWNER TO cs3380f13grp12;


SET search_path = public;


-- Table: authentication
-- Columns:
--    username      - The username tied to the authentication info.
--    password_hash - The hash of the user's password + salt. Expected to be SHA1.
--    salt          - The salt to use. Expected to be a SHA1 hash of a random input.



CREATE TABLE drinky.user_info (
		username varchar(30) PRIMARY KEY
		);

CREATE TABLE drinky.ratings (
		rating_id serial primary key,
		username varchar(30),
		rating int not null,
		alcohol_name varchar (60),
		rated date DEFAULT now()
		);

CREATE TABLE drinky.admin_info (
		username varchar(30),
		password_hash char(40) NOT NULL,
		salt char(40) NOT NULL,
		joined date DEFAULT now()

		);

CREATE TABLE drinky.alcohols (
		description varchar(300),
		code varchar(30),
		brand varchar(80),
		size varchar(30),
		age varchar(30),
		proof varchar(30),
		price varchar(30)
		);

CREATE TABLE drinky.log (
		log_id SERIAL PRIMARY KEY,
		username varchar(30) NOT NULL REFERENCES drinky.user_info,
		action varchar (50) NOT NULL
		);

\copy drinky.alcohols from 'booze.csv' WITH DELIMITER AS ',' CSV QUOTE AS '"';

insert into drinky.admin_info (username, password_hash, salt) VALUES ('a','a','1');



ALTER TABLE drinky.alcohols ADD drink_id serial;
