/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     8/19/2012 11:27:45 AM                        */
/*==============================================================*/


drop table if exists categories;

drop table if exists comments;

drop table if exists contents;

drop table if exists core_layouts;

drop table if exists core_layout_details;

drop table if exists core_users;

drop table if exists lessons_favorite;

drop table if exists lessons_remember;

drop table if exists users;

/*==============================================================*/
/* Table: categories                                            */
/*==============================================================*/
create table categories
(
   id                   int(11) not null auto_increment,
   title                varchar(255) not null,
   slug                 varchar(255) not null,
   `desc`               text not null,
   state                tinyint(3) not null,
   created_date         timestamp not null default current_timestamp,
   primary key (id)
);

/*==============================================================*/
/* Table: comments                                              */
/*==============================================================*/
create table comments
(
   id                   int(11) not null auto_increment,
   comment              text not null,
   state                tinyint(3) not null,
   created_date         timestamp not null default current_timestamp,
   content_id           int(11) not null,
   user_id              int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: contents                                              */
/*==============================================================*/
create table contents
(
   id                   int(11) not null auto_increment,
   title                varchar(255) not null,
   slug                 varchar(255) not null,
   premium              tinyint(3) not null,
   content              text not null,
   type                 varchar(150) not null,
   created_date         timestamp not null default current_timestamp,
   category_id          int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: core_layouts                                          */
/*==============================================================*/
create table core_layouts
(
   id                   int(11) not null auto_increment,
   name                 varchar(250) not null,
   title                varchar(255) not null,
   `desc`               text,
   meta                 text,
   created_date         timestamp not null default current_timestamp,
   state                tinyint(11) not null,
   theme                varchar(150) not null,
   core_user_id         int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: core_layout_details                                   */
/*==============================================================*/
create table core_layout_details
(
   id                   int(11) not null auto_increment,
   widget               varchar(150) not null,
   params               varchar(150),
   state                tinyint(11) not null,
   layout_id            int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: core_users                                            */
/*==============================================================*/
create table core_users
(
   id                   int(11) not null auto_increment,
   username             varchar(150) not null,
   password             varchar(64) not null,
   email                varchar(50) not null,
   fullname             varchar(150) not null,
   created_date         timestamp not null,
   last_login           datetime not null,
   state                tinyint(3) not null,
   blocked              tinyint(1) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: lessons_favorite                                      */
/*==============================================================*/
create table lessons_favorite
(
   id                   int(11) not null auto_increment,
   state                tinyint(3) not null,
   created_date         timestamp not null default current_timestamp on update current_timestamp,
   content_id           int(11) not null,
   user_id              int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: lessons_remember                                      */
/*==============================================================*/
create table lessons_remember
(
   id                   int(11) not null auto_increment,
   state                tinyint(3) not null,
   created_date         datetime not null,
   content_id           int(11) not null,
   user_id              int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: users                                                 */
/*==============================================================*/
create table users
(
   id                   int(11) not null auto_increment,
   username             varchar(100) not null,
   password             varchar(32) not null,
   email                varchar(50) not null,
   fullname             varchar(150) not null,
   dob                  datetime not null,
   gender               tinyint(1) not null,
   address              varchar(255) not null,
   school               varchar(250),
   country              varchar(100) not null,
   premium              tinyint(3) not null,
   created_date         timestamp not null default current_timestamp,
   primary key (id)
);

alter table comments add constraint fk_fk_comments_contents foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table comments add constraint fk_fk_comments_users foreign key (user_id)
      references users (id) on delete restrict on update restrict;

alter table contents add constraint fk_fk_contents_categories foreign key (category_id)
      references categories (id) on delete restrict on update restrict;

alter table core_layouts add constraint fk_fk_core_user_layouts foreign key (core_user_id)
      references core_users (id) on delete restrict on update restrict;

alter table core_layout_details add constraint fk_fk_layouts_details foreign key (layout_id)
      references core_layouts (id) on delete restrict on update restrict;

alter table lessons_favorite add constraint fk_fk_favorite_contents foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table lessons_favorite add constraint fk_fk_lesson_favorite_user foreign key (user_id)
      references users (id) on delete restrict on update restrict;

alter table lessons_remember add constraint fk_fk_contents_lessons_remember foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table lessons_remember add constraint fk_fk_lesson_remember_users foreign key (user_id)
      references users (id) on delete restrict on update restrict;

