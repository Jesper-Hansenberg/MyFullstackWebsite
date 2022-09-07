CREATE TABLE users (
    user_id         INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name       VARCHAR(30) NOT NULL UNIQUE,
    user_pass       VARCHAR(255) NOT NULL,
    user_email      VARCHAR(255) NOT NULL UNIQUE,
    created_at      DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    cat_id          INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cat_name        VARCHAR(255) NOT NULL,
    cat_description VARCHAR(255) NOT NULL
);


CREATE TABLE replies (
    reply_id        INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    reply_content   TEXT NOT NULL,
    cat_description VARCHAR(255) NOT NULL
);

CREATE TABLE topics (
    topic_id        INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    topic_subject   VARCHAR(255) NOT NULL,
    topic_date      DATETIME NOT NULL,
    topic_cat       INT NOT NULL,
    topic_by        INT NOT NULL
);

CREATE TABLE posts (
    post_id         INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    post_content    TEXT NOT NULL,
    post_date       DATETIME NOT NULL,
    post_topic      INT NOT NULL,
    post_by         INT NOT NULL
);