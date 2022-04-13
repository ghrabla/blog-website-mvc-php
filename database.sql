CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(30) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(255) NOT NULL
);

CREATE TABLE post (
    id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(50),
    description varchar(800),
    picture varchar(50),
    type varchar(50),
    userId int ,
    published_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE comment (
    id int PRIMARY KEY AUTO_INCREMENT,
    text varchar(800),
    userId INT NOT NULL,
    postId INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (postId) REFERENCES post(id) ON DELETE CASCADE
);
