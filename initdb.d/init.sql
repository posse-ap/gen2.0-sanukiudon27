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
('2022-01-12', 5, 5, 2),
('2022-01-24', 5, 3, 2),
('2022-02-02', 10, 7, 3),
('2022-03-01', 5, 4, 2),
('2022-03-02', 3, 7, 2),
('2022-03-03', 2, 6, 2),
('2022-03-04', 6, 1, 2),
('2022-03-05', 5, 2, 2),
('2022-03-12', 4, 8, 3),
('2022-03-13', 10, 7, 3),
('2022-03-14', 8, 8, 3),
('2022-03-15', 3, 5, 2),
('2022-03-16', 9, 4, 3),
('2022-03-17', 4, 8, 3),
('2022-03-18', 7, 3, 1),
('2022-03-19', 2, 3, 2),
('2022-03-20', 3, 7, 1),
('2022-03-21', 11, 6, 2),
('2022-03-22', 6, 1, 1),
('2022-03-23', 2, 4, 1),
('2022-03-24', 1, 5, 1),
('2022-03-25', 3, 6, 3),
('2022-03-26', 4, 7, 1),
('2022-04-20', 2, 1, 2),
('2022-03-28', 1, 2, 1);



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
color CHAR(7),
PRIMARY KEY(langs_table_id)
);

INSERT INTO langs (language, color) VALUES
('JavaScript','#0345ec'),
('CSS','#0f71bd'),
('PHP','#20bdde'),
('HTML','#4bd1fe'),
('Laravel','#b29ef3'),
('SQL','#6d46ec'),
('SHELL','#4a17ef'),
('情報システム基礎知識（その他）','#3105c0');

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
contents_color CHAR(7),
PRIMARY KEY(contents_table_id)
);

INSERT INTO contents (learn_contents, contents_color) VALUES
('ドットインストール', '#0345ec'),
('N予備校', '#0f71bd'),
('POSSE課題', '#20bdde');

-- +----+-----------------------------+
-- | id | learn_contents              |
-- +----+-----------------------------+
-- |  1 | ドットインストール          |
-- |  2 | N予備校                     |
-- |  3 | POSSE課題                   |
-- +----+-----------------------------+

-- DROP TABLE IF EXISTS sum;
-- CREATE TABLE sum (
-- SELECT * FROM basic
-- LEFT JOIN langs
-- ON basic.lang_id = langs.langs_table_id
-- LEFT JOIN contents 
-- ON basic.contents_id = contents.contents_table_id
-- );

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






