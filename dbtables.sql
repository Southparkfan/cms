CREATE TABLE IF NOT EXISTS articles (
article_id INT(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
article_author VARCHAR(32),
article_date DATETIME,
article_title VARCHAR(128),
article_text MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS user (
user_id INT(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
user_username VARCHAR(64) NOT NULL,
user_password VARCHAR(64) NOT NULL,
user_email VARCHAR(64)
);