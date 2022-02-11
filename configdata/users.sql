use journal;
-- create table USERS(USERS_ID int primary key auto_increment, USERS_EMAIL varchar(30) not null unique,USERS_PASSWORD varchar(90) not null); --
create table POSTS(POSTS_TITLE varchar(30) not null,POSTS_DESCRIPTION varchar(130) not null,POSTS_TAG varchar(100));
