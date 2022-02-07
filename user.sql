create table USERS(USERS_ID int primary key autoincrement, USERS_EMAIL text not null unique,USERS_PASSWORD text not null);
create table POSTS(POSTS_TITLE varchar(30) not null,POSTS_DESCRIPTION varchar(130) not null,POSTS_TAG);
