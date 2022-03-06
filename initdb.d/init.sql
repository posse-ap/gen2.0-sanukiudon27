use first;
DROP TABLE IF EXISTS big_questions;
DROP TABLE IF EXISTS questions;
DROP TABLE IF EXISTS choices;
CREATE TABLE big_questions (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(225),
PRIMARY KEY(id)
);
CREATE TABLE questions (
id INT NOT NULL AUTO_INCREMENT,
big_question_id INT,
image VARCHAR(225),
PRIMARY KEY(id)
);
CREATE TABLE choices (
id INT NOT NULL AUTO_INCREMENT,
question_id INT,
name_list VARCHAR(225),
valid BOOLEAN,
PRIMARY KEY(id)
);



INSERT INTO big_questions (name) VALUES
('東京の難読地名クイズ'),
('広島の難読地名クイズ');

INSERT INTO questions (big_question_id, image) VALUES
(1, 'takanawa.png'),
(1, 'kameido.png'),
(2, 'mukainada.png');

INSERT INTO choices (question_id, name_list, valid) VALUES
(1, 'たかなわ', TRUE),
(1, 'たかわ', FALSE),
(1, 'こうわ', FALSE),
(2, 'かめと', FALSE),
(2, 'かめど', FALSE),
(2, 'かめいど', TRUE),
(3, 'むこうひら', FALSE),
(3, 'むきひら', FALSE),
(3, 'むかいなだ', TRUE);

-- SELECT 
-- big_questions.id, big_questions.name, questions.big_question_id, questions.image, choices.question_id, choices.name_list
-- FROM 
-- big_questions
-- INNER JOIN
-- questions
-- ON
-- big_questions.id = questions.big_question_id
-- INNER JOIN
-- choices
-- ON
-- big_questions.id = choices.question_id

-- CREATE TABLE IF EXISTS all;
-- CREATE TABLE all ()

DROP TABLE IF EXISTS showed;
CREATE TABLE 
showed
AS
(SELECT 
big_questions.name, questions.big_question_id, questions.image, choices.question_id, choices.name_list, big_questions.id, valid

FROM 
(questions
JOIN
choices
ON
questions.id = choices.question_id)
JOIN
big_questions
ON
questions.big_question_id = big_questions.id);

-- DROP TABLE mix;
-- create table mix as (select choices.id, choices.question_id, choices.name, choices.valid, questions.big_question_id, questions.image from  (choices left outer join questions on choices.question_id = questions.id) left outer join big_questions on questions.big_question_id = big_questions.id);




-- SELECT * FROM
-- choices left outer join questions on choices.question_id = questions.id left outer join big_questions on questions.big_question_id = big_questions.id


-- mysql -u dondon -p first < /docker-entrypoint-initdb.d/init.sql
-- mysql の更新

