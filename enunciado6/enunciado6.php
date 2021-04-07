CREATE TABLE pessoas (
	id serial PRIMARY KEY,
	nome VARCHAR ( 100 ) NOT NULL,
	dt_insercao TIMESTAMP NOT NULL
);

CREATE TABLE contatos (
	id serial PRIMARY KEY,
	id_pessoa int NOT NULL,
	contato VARCHAR ( 50 ) NOT NULL
);

CREATE TABLE enderecos (
	id serial PRIMARY KEY,
	id_pessoa int NOT NULL,
	endereco VARCHAR ( 100 ) NOT NULL
);
