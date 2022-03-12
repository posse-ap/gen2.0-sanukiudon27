DROP TABLE IF EXISTS sum;
CREATE TABLE sum (
id INT AUTO_INCREMENT,
dayte DATE,
time INT,
contents_id INT,
lang_id INT,
PRIMARY KEY(id)
);

INSERT INTO sum (date, time, lang_id, contents_id) VALUES
(2020-00-01, 2, 3, 0),
(2020-01-02, 3, 1, 0),
(2020-03-12, 5, 2, 1),
(2020-01-12, 5, 5, 1),
(2020-02-02, 10, 7, 2),
(2020-03-17, 4, 8, 2);


DROP TABLE IF EXISTS langs;
CREATE TABLE langs (
id INT AUTO_INCREMENT,
language VARCHAR(255),
PRIMARY KEY(id)
);

INSERT INTO langs (language) VALUES
(JavaScript),
(CSS),
(PHP),
(HTML),
(Laravel),
(SQL),
(SHELL),
(情報システム基礎知識（その他）);


DROP TABLE IF EXISTS contents;
CREATE TABLE contents (
id INT AUTO_INCREMENT,
learn_contents VARCHAR(255),
PRIMARY KEY(id)
);

INSERT INTO contents (learn_contents) VALUES
(ドットインストール),
(N予備校),
(POSSE課題);










