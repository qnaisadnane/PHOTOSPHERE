

create table users( 
    id_utilisateur int PRIMARY KEY AUTO_INCREMENT, 
    username VARCHAR(30) unique, 
    email VARCHAR(30) unique, 
    password VARCHAR(255) NOT NULL, 
    upload_count int DEFAULT 0, 
    role ENUM('pro_user','basic_user','moderateur','admin') NOT NULL, 
    createdAt Timestamp DEFAULT CURRENT_TIMESTAMP, 
    last_login Timestamp NULL DEFAULT NULL, 
    bio Text, 
    isSuperAdmin boolean DEFAULT null, 
    level ENUM('junior','senior','lead') DEFAULT NULL, 
    date_debut_abonement datetime DEFAULT null, 
    date_fin_abonement datetime DEFAULT null 
    );

create table tag( 
    id_tag int PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(30) not null unique, 
    postCount VARCHAR(10) DEFAULT 0, 
    );

CREATE TABLE post_tag (
    post_id INT NOT NULL,
    tag_id INT NOT NULL,

    PRIMARY KEY (id_post, id_tag),

    CONSTRAINT fk_posttag_post
        FOREIGN KEY (id_post)
        REFERENCES post(id_post)
        ON DELETE CASCADE,

    CONSTRAINT fk_posttag_tag
        FOREIGN KEY (id_tag)
        REFERENCES tag(id_tag)
        ON DELETE CASCADE
);    

create table post( 
    id_post int PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL, 
    title VARCHAR(50) not null, 
    description Text, 
    status ENUM('draft','published','archived') NOT NULL DEFAULT 'draft',
    views INT DEFAULT 0,
    url_image VARCHAR(60) not null,  
    size_image int not null, 
    type_image VARCHAR(60) not null, 
    dimensions_image VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    published_at TIMESTAMP NULL DEFAULT NULL,

    CONSTRAINT fk_post_user
        FOREIGN KEY (id_user)
        REFERENCES users(id_utilisateur)
        ON DELETE CASCADE  
    );

    CREATE TABLE post_album (
    post_id INT NOT NULL,
    album_id INT NOT NULL,

    PRIMARY KEY (post_id, album_id),

    CONSTRAINT fk_postalbum_post
        FOREIGN KEY (post_id)
        REFERENCES post(id_post)
        ON DELETE CASCADE,

    CONSTRAINT fk_postalbum_album
        FOREIGN KEY (album_id)
        REFERENCES album(id_album)
        ON DELETE CASCADE
);

create table comment( 
    id_comment int PRIMARY KEY AUTO_INCREMENT,

    user_id INT NOT NULL,
    post_id INT NOT NULL,
    parent_id INT DEFAULT NULL, 
    content Text , 
    status VARCHAR(30) unique, 
    createdAt Timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    is_edited BOOLEAN DEFAULT FALSE,
    CONSTRAINT fk_comment_user
        FOREIGN KEY (user_id)
        REFERENCES users(id_utilisateur)
        ON DELETE CASCADE,

    CONSTRAINT fk_comment_post
        FOREIGN KEY (post_id)
        REFERENCES post(id_post)
        ON DELETE CASCADE,

    CONSTRAINT fk_comment_parent
        FOREIGN KEY (parent_id)
        REFERENCES comment(id_comment)
        ON DELETE CASCADE
    );  

create table album( 
    id_album int PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL, 
    name VARCHAR(30) not null, 
    description TEXT;, 
    photo VARCHAR(30) DEFAULT NULL,
    type VARCHAR(30) NOT NULL, 
    createdAt Timestamp DEFAULT CURRENT_TIMESTAMP,
    last_update Timestamp DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_album_user
        FOREIGN KEY (user_id)
        REFERENCES users(id_utilisateur)
        ON DELETE CASCADE
    );  