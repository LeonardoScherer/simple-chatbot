CREATE DATABASE chatbot;

USE chatbot;

CREATE TABLE chat(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    queries VARCHAR(300) NOT NULL,
    replies VARCHAR(300) NOT NULL
);

INSERT INTO chat (queries, replies) VALUES ('Oi|Olá|Eai|Opa', 'Olá, posso ajudar você?');
INSERT INTO chat (queries, replies) VALUES ('Bom dia', 'Bom dia, em que posso ajudar?');
INSERT INTO chat (queries, replies) VALUES ('Boa tarde', 'Boa Tarde, em que posso ajudar?');
INSERT INTO chat (queries, replies) VALUES ('Boa noite', 'Boa noite, em que posso ajudar?');
INSERT INTO chat (queries, replies) VALUES ('Quem é você?|Quem tu é|Qual seu nome?|Qual teu nome|', 'Sou o Botzin, estou aqui para ajuda-lo');

