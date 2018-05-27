CREATE TABLE users( 
	id SERIAL PRIMARY KEY, 
	fname VARCHAR(50) NOT NULL, 
	lname VARCHAR(50) NOT NULL, 
	userName VARCHAR(50) UNIQUE NOT NULL, 
	email VARCHAR(256) UNIQUE NOT NULL, 
	password VARCHAR(50) NOT NULL,
	created_on TIMESTAMP NOT NULL,
	last_login TIMESTAMP
);

CREATE TABLE posts (
	id SERIAL NOT NULL PRIMARY KEY,
	user_id int references users(id),
	created_on TIMESTAMP NOT NULL,
	text VARCHAR(512) NOT NULL,
	subject_id int references subject(id)	
);

CREATE TABLE subject (
	id SERIAL NOT NULL PRIMARY KEY,
	name varchar(50) NOT NULL
);

CREATE SEQUENCE users_sequence
	start 1
	increment 1;

CREATE SEQUENCE posts_sequence
	start 1
	increment 1;
	
CREATE SEQUENCE subject_sequence
	start 1
	increment 1;
	
INSERT INTO users VALUES (
	nextval('users_sequence'), 
	'Gregory', 
	'Harston', 
	'harstong', 
	'mail123@test.com', 
	'password', 
	CURRENT_TIMESTAMP
);	

INSERT INTO users VALUES (
	nextval('users_sequence'), 
	'Ashley', 
	'Harston', 
	'ashzum', 
	'mail@test.com', 
	'password1', 
	CURRENT_TIMESTAMP
);	