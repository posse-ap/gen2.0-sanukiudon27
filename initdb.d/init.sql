-- docker-compose up せずにinit.sqlを更新する
-- mysql -u dondon -p < /docker-entrypoint-initdb.d/init.sql
use webapp;
DROP TABLE IF EXISTS basic;
CREATE TABLE basic (
id INT AUTO_INCREMENT,
date DATE,
time INT,
lang_id INT,
contents_id INT,
PRIMARY KEY(id)
);

INSERT INTO basic (date, time, lang_id, contents_id) VALUES
('2020-02-01', 2, 3, 1),
('2022-01-02', 3, 1, 1),
('2022-03-12', 5, 2, 2),
('2022-01-12', 5, 5, 2),
('2022-02-02', 10, 7, 3),
('2022-03-17', 4, 8, 3),
('2022-01-12', 5, 5, 2),
('2022-03-16', 10, 7, 3),
('2022-03-17', 8, 8, 3),
('2022-03-14', 3, 5, 2),
('2022-03-12', 9, 5, 3),
('2022-03-13', 4, 8, 3),
('2022-03-14', 7, 5, 1),
('2022-03-12', 2, 6, 2),
('2022-03-15', 3, 8, 1),
('2022-03-15', 11, 6, 2),
('2022-03-15', 12, 4, 1);

-- +----+------------+------+---------+-------------+
-- | id | date       | time | lang_id | contents_id |
-- +----+------------+------+---------+-------------+
-- |  1 | 2020-02-01 |    2 |       3 |           1 |
-- |  2 | 2020-01-02 |    3 |       1 |           1 |
-- |  3 | 2020-03-12 |    5 |       2 |           2 |
-- |  4 | 2020-01-12 |    5 |       5 |           2 |
-- |  5 | 2020-02-02 |   10 |       7 |           3 |
-- |  6 | 2020-03-17 |    4 |       8 |           3 |
-- +----+------------+------+---------+-------------+


DROP TABLE IF EXISTS langs;
CREATE TABLE langs (
langs_table_id INT AUTO_INCREMENT,
language VARCHAR(255),
PRIMARY KEY(langs_table_id)
);

INSERT INTO langs (language) VALUES
('JavaScript'),
('CSS'),
('PHP'),
('HTML'),
('Laravel'),
('SQL'),
('SHELL'),
('情報システム基礎知識（その他）');

-- +----+-----------------------------------------------+
-- | id | language                                      |
-- +----+-----------------------------------------------+
-- |  1 | JavaScript                                    |
-- |  2 | CSS                                           |
-- |  3 | PHP                                           |
-- |  4 | HTML                                          |
-- |  5 | Laravel                                       |
-- |  6 | SQL                                           |
-- |  7 | SHELL                                         |
-- |  8 | 情報システム基礎知識（その他）                |
-- +----+-----------------------------------------------+


DROP TABLE IF EXISTS contents;
CREATE TABLE contents (
contents_table_id INT AUTO_INCREMENT,
learn_contents VARCHAR(255),
PRIMARY KEY(contents_table_id)
);

INSERT INTO contents (learn_contents) VALUES
('ドットインストール'),
('N予備校'),
('POSSE課題');

-- +----+-----------------------------+
-- | id | learn_contents              |
-- +----+-----------------------------+
-- |  1 | ドットインストール          |
-- |  2 | N予備校                     |
-- |  3 | POSSE課題                   |
-- +----+-----------------------------+

DROP TABLE IF EXISTS sum;
CREATE TABLE sum (
SELECT * FROM basic
LEFT JOIN langs
ON basic.lang_id = langs.langs_table_id
LEFT JOIN contents 
ON basic.contents_id = contents.contents_table_id
);

-- +----+------------+------+---------+-------------+----------------+-----------------------------------------------+-------------------+-----------------------------+
-- | id | date       | time | lang_id | contents_id | langs_table_id | language                                      | contents_table_id | learn_contents              |
-- +----+------------+------+---------+-------------+----------------+-----------------------------------------------+-------------------+-----------------------------+
-- |  1 | 2020-02-01 |    2 |       3 |           1 |              3 | PHP                                           |                 1 | ドットインストール |
-- |  2 | 2020-01-02 |    3 |       1 |           1 |              1 | JavaScript                                    |                 1 | ドットインストール |
-- |  3 | 2020-03-12 |    5 |       2 |           2 |              2 | CSS                                           |                 2 | N予備校                  |
-- |  4 | 2020-01-12 |    5 |       5 |           2 |              5 | Laravel                                       |                 2 | N予備校                  |
-- |  5 | 2020-02-02 |   10 |       7 |           3 |              7 | SHELL                                         |                 3 | POSSE課題                 |
-- |  6 | 2020-03-17 |    4 |       8 |           3 |              8 | 情報システム基礎知識（その他） |                 3 | POSSE課題                 |
-- +----+------------+------+---------+-------------+----------------+-----------------------------------------------+-------------------+-----------------------------+






