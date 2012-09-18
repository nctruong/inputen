/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     9/18/2012 2:00:16 PM                         */
/*==============================================================*/


drop table if exists categories;

drop table if exists comments;

drop table if exists contents;

drop table if exists core_layouts;

drop table if exists core_layout_details;

drop table if exists core_settings;

drop table if exists core_users;

drop table if exists lessons_favorite;

drop table if exists lessons_remember;

drop table if exists menus;

drop table if exists menu_items;

drop table if exists resources;

drop table if exists resource_details;

drop table if exists taxonomy;

drop table if exists users;

drop table if exists widgets;

/*==============================================================*/
/* Table: categories                                            */
/*==============================================================*/
create table categories
(
   id                   int(11) not null,
   title                varchar(255) not null,
   slug                 varchar(255) not null,
   `desc`               text not null,
   state                tinyint(3) not null,
   created_date         timestamp not null default current_timestamp,
   `order`              int(11),
   parent               int(11),
   taxonomy_id          int(11),
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
   id                   int(11) not null,
   `order`              int(11) not null,
   state                tinyint(3) not null,
   widget_id            int(11),
   layout_id            int(11) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: core_settings                                         */
/*==============================================================*/
create table core_settings
(
   id                   int(11) not null auto_increment,
   type                 varchar(250) not null,
   key                  varchar(250) not null,
   value                text,
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
/* Table: menus                                                 */
/*==============================================================*/
create table menus
(
   id                   int(11) not null auto_increment,
   name                 varchar(250),
   description          text,
   `order`              int(11),
   state                tinyint(3),
   primary key (id)
);

/*==============================================================*/
/* Table: menu_items                                            */
/*==============================================================*/
create table menu_items
(
   id                   int(11) not null,
   name                 varbinary(255),
   description          text,
   type                 varbinary(255),
   value                text,
   parent               int(11),
   `order`              int(11),
   menu_id              int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: resources                                             */
/*==============================================================*/
create table resources
(
   id                   int(11) not null auto_increment,
   name                 varchar(250),
   path                 varchar(250),
   type                 varchar(250),
   description          text,
   storage              varchar(150),
   primary key (id)
);

/*==============================================================*/
/* Table: resource_details                                      */
/*==============================================================*/
create table resource_details
(
   id                   int(11) not null auto_increment,
   description          text,
   `order`              int(11),
   type                 text,
   resource_id          int(11),
   content_id           int(11),
   primary key (id)
);

/*==============================================================*/
/* Table: taxonomy                                              */
/*==============================================================*/
create table taxonomy
(
   id                   int(11) not null auto_increment,
   name                 varchar(255) not null,
   description          text,
   type                 varchar(255) not null,
   state                tinyint(3) not null,
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

/*==============================================================*/
/* Table: widgets                                               */
/*==============================================================*/
create table widgets
(
   id                   int(11) not null auto_increment,
   name                 int,
   type                 varchar(250),
   params               text,
   created_date         timestamp,
   state                tinyint(3),
   primary key (id)
);

alter table categories add constraint fk_categories_taxonomy foreign key (taxonomy_id)
      references taxonomy (id) on delete restrict on update restrict;

alter table comments add constraint fk_comments_contents foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table comments add constraint fk_comments_users foreign key (user_id)
      references users (id) on delete restrict on update restrict;

alter table contents add constraint fk_contents_categories foreign key (category_id)
      references categories (id) on delete restrict on update restrict;

alter table core_layouts add constraint fk_fk_core_user_layouts foreign key (core_user_id)
      references core_users (id) on delete restrict on update restrict;

alter table core_layout_details add constraint fk_fk_layouts_details foreign key (layout_id)
      references core_layouts (id) on delete restrict on update restrict;

alter table core_layout_details add constraint fk_layout_details_widgets foreign key (widget_id)
      references widgets (id) on delete restrict on update restrict;

alter table lessons_favorite add constraint fk_favorite_contents foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table lessons_favorite add constraint fk_lesson_favorite_user foreign key (user_id)
      references users (id) on delete restrict on update restrict;

alter table lessons_remember add constraint fk_contents_lessons_remember foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table lessons_remember add constraint fk_lesson_remember_users foreign key (user_id)
      references users (id) on delete restrict on update restrict;

alter table menu_items add constraint fk_menus_menu_items foreign key (menu_id)
      references menus (id) on delete restrict on update restrict;

alter table resource_details add constraint fk_contents_resource_details foreign key (content_id)
      references contents (id) on delete restrict on update restrict;

alter table resource_details add constraint fk_resources_resource_details foreign key (resource_id)
      references resources (id) on delete restrict on update restrict;

