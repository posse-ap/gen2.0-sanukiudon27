-- docker-compose up せずにinit.sqlを更新する
-- mysql -u dondon -p < /docker-entrypoint-initdb.d/init.sql
use webapp;
DROP TABLE IF EXISTS sum;
CREATE TABLE sum (
id INT AUTO_INCREMENT,
date DATE,
time INT,
lang_id INT,
contents_id INT,
PRIMARY KEY(id)
);

INSERT INTO sum (date, time, lang_id, contents_id) VALUES
('2020-02-01', 2, 3, 0),
('2020-01-02', 3, 1, 0),
('2020-03-12', 5, 2, 1),
('2020-01-12', 5, 5, 1),
('2020-02-02', 10, 7, 2),
('2020-03-17', 4, 8, 2);

-- +----+------------+------+---------+-------------+
-- | id | date       | time | lang_id | contents_id |
-- +----+------------+------+---------+-------------+
-- |  1 | 2020-02-01 |    2 |       3 |           0 |
-- |  2 | 2020-01-02 |    3 |       1 |           0 |
-- |  3 | 2020-03-12 |    5 |       2 |           1 |
-- |  4 | 2020-01-12 |    5 |       5 |           1 |
-- |  5 | 2020-02-02 |   10 |       7 |           2 |
-- |  6 | 2020-03-17 |    4 |       8 |           2 |
-- +----+------------+------+---------+-------------+


DROP TABLE IF EXISTS langs;
CREATE TABLE langs (
id INT AUTO_INCREMENT,
language VARCHAR(255),
PRIMARY KEY(id)
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
id INT AUTO_INCREMENT,
learn_contents VARCHAR(255),
PRIMARY KEY(id)
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









