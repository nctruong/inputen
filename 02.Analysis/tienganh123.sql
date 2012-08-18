/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     8/18/2012 1:55:57 PM                         */
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
   title                varchar(255),
   slug                 varchar(255),
   `desc`               text,
   state                tinyint(3),
   created_date         timestamp default current_timestamp,
   primary key (id)
);

/*==============================================================*/
/* Table: comments                                              */
/*==============================================================*/
create table comments
(
   id                   int(11) not null auto_increment,
   comment              text,
   state                tinyint(3),
   created_date         timestamp default current_timestamp,
   content_id           int(11),
   user_id              int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: contents                                              */
/*==============================================================*/
create table contents
(
   id                   int(11) not null auto_increment,
   title                varchar(255),
   slug                 varchar(255),
   premium              tinyint(3),
   content              text,
   type                 varchar(150),
   created_date         timestamp default current_timestamp,
   category_id          int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: core_layouts                                          */
/*==============================================================*/
create table core_layouts
(
   id                   int(11) not null auto_increment,
   name                 varchar(250),
   title                varbinary(250),
   `desc`               text,
   meta                 text,
   created_date         timestamp default current_timestamp,
   state                tinyint(11),
   theme                varchar(150),
   core_user_id         int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: core_layout_details                                   */
/*==============================================================*/
create table core_layout_details
(
   id                   int(11) not null auto_increment,
   widget               varbinary(150),
   params               varbinary(255),
   state                tinyint(11),
   layout_id            int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: core_users                                            */
/*==============================================================*/
create table core_users
(
   id                   int(11) not null auto_increment,
   username             varbinary(50),
   passwd               varchar(64),
   email                varchar(50),
   fullname             varbinary(150),
   created_date         timestamp,
   last_login           datetime,
   state                tinyint(3),
   blocked              tinyint(1),
   primary key (id)
);

/*==============================================================*/
/* Table: lessons_favorite                                      */
/*==============================================================*/
create table lessons_favorite
(
   id                   int(11) not null auto_increment,
   state                tinyint(3),
   created_date         timestamp default current_timestamp on update current_timestamp,
   content_id           int(11),
   user_id              int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: lessons_remember                                      */
/*==============================================================*/
create table lessons_remember
(
   id                   int(11) not null auto_increment,
   state                tinyint(3),
   created_date         datetime,
   content_id           int(11),
   user_id              int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: users                                                 */
/*==============================================================*/
create table users
(
   id                   int(11) not null auto_increment,
   username             varchar(100),
   passwd               varchar(32),
   email                varchar(50),
   fullname             varbinary(150),
   dob                  datetime,
   gender               tinyint(1),
   address              varbinary(255),
   school               varchar(250),
   country              varchar(100),
   premium              tinyint(3),
   created_date         timestamp default current_timestamp,
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

