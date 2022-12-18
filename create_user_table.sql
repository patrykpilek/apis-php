CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    username VARCHAR(128) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    api_key VARCHAR(32) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (username),
    UNIQUE (api_key)
);
