drop DATABASE music;

CREATE DATABASE music_app;
use music_app;


-- creating table  for registration
CREATE TABLE registration(
id int not null AUTO_INCREMENT,
username varchar(255) not null,
    email_id varchar(255)  not null,
    password varchar (255)  not null,
    is_premium int  not null,
    is_admin int  not null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY(id)
);


-- adding music table
CREATE TABLE artist (
    id int not null auto_increment,
    artist_name varchar(255)  not null,
     created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id)

);
create table album(
    id int not null auto_increment,
    album_name varchar(255)  not null,
    song_artist varchar (255)  not null ,
    created_at timestamp,
    updated_at timestamp,
      primary key(id),
    FOREIGN KEY (song_artist) REFERENCES artist(id)
);


CREATE TABLE images (
id int not null AUTO_INCREMENT,
image_path varchar(255),
    artist_id int null,
    album_id int null,
    PRIMARY key (id),
    FOREIGN key (artist_id) REFERENCES artist(id),
        FOREIGN key (album_id) REFERENCES album(id),
          created_at timestamp,
    updated_at timestamp

);