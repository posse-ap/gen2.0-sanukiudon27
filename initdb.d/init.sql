use first;
DROP TABLE IF EXISTS big_question;
CREATE TABLE big_question (
id INT NOT NULL AUTO_INCREMENT,
question_title VARCHAR(225) NOT NULL AS name,
PRIMARY KEY(id)
);


INSERT INTO big_question (question_title) VALUES
('東京の難読地名クイズ'),
('広島の難読地名クイズ');
