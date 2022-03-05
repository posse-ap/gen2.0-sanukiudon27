use first;
DROP TABLE IF EXISTS big_question;
CREATE TABLE big_question (
id INT NOT NULL AUTO_INCREMENT,
question_title VARCHAR(225),
PRIMARY KEY(id)
);
drop table if exists test;
create table test;
INSERT INTO big_question (question_title) VALUES
('東京の難読地名クイズ'),
('広島の難読地名クイズ');
-- mysql -u dondon -p first < /docker-entrypoint-initdb.d/init.sql