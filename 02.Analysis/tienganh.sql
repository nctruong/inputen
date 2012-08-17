/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     8/17/2012 11:38:43 PM                        */
/*==============================================================*/


drop table if exists CATEGORIES;

drop table if exists COMMENTS;

drop table if exists CONTENTS;

drop table if exists CORE_LAYOUTS;

drop table if exists CORE_LAYOUT_DETAILS;

drop table if exists CORE_USERS;

drop table if exists LESSONS_FAVORITE;

drop table if exists LESSONS_REMEMBER;

drop table if exists USERS;

/*==============================================================*/
/* Table: CATEGORIES                                            */
/*==============================================================*/
create table CATEGORIES
(
   ID                   int(11) not null auto_increment,
   TITLE                varchar(255),
   SLUG                 varchar(255),
   "DESC"               text,
   STATE                tinyint(3),
   CREATED_DATE         timestamp default CURRENT_TIMESTAMP,
   primary key (ID)
);

/*==============================================================*/
/* Table: COMMENTS                                              */
/*==============================================================*/
create table COMMENTS
(
   ID                   int(11) not null auto_increment,
   COMMENT              text,
   STATE                tinyint(3),
   CREATED_DATE         timestamp default CURRENT_TIMESTAMP,
   CONTENT_ID           int(11),
   USER_ID              int(11),
   primary key (ID)
);

/*==============================================================*/
/* Table: CONTENTS                                              */
/*==============================================================*/
create table CONTENTS
(
   ID                   int(11) not null auto_increment,
   TITLE                varchar(255),
   SLUG                 varchar(255),
   PREMIUM              tinyint(3),
   CONTENT              text,
   TYPE                 varchar(150),
   CREATED_DATE         timestamp default CURRENT_TIMESTAMP,
   CATEGORY_ID          int(11),
   primary key (ID)
);

/*==============================================================*/
/* Table: CORE_LAYOUTS                                          */
/*==============================================================*/
create table CORE_LAYOUTS
(
   ID                   int(11) not null auto_increment,
   NAME                 varchar(250),
   TITLE                varbinary(250),
   "DESC"               text,
   META                 text,
   CREATED_DATE         timestamp default CURRENT_TIMESTAMP,
   STATE                tinyint(11),
   THEME                varchar(150),
   CORE_USER_ID         int(11),
   primary key (ID)
);

/*==============================================================*/
/* Table: CORE_LAYOUT_DETAILS                                   */
/*==============================================================*/
create table CORE_LAYOUT_DETAILS
(
   ID                   int(11) not null auto_increment,
   WIDGET               varbinary(150),
   PARAMS               varbinary(255),
   STATE                tinyint(11),
   LAYOUT_ID            int(11),
   primary key (ID)
);

/*==============================================================*/
/* Table: CORE_USERS                                            */
/*==============================================================*/
create table CORE_USERS
(
   ID                   int(11) not null auto_increment,
   USERNAME             varbinary(50),
   PASSWD               varchar(64),
   EMAIL                varchar(50),
   FULLNAME             varbinary(150),
   CREATED_DATE         timestamp,
   LAST_LOGIN           datetime,
   STATE                tinyint(3),
   BLOCKED              tinyint(1),
   primary key (ID)
);

/*==============================================================*/
/* Table: LESSONS_FAVORITE                                      */
/*==============================================================*/
create table LESSONS_FAVORITE
(
   ID                   int(11) not null auto_increment,
   STATE                tinyint(3),
   CREATED_DATE         timestamp default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   CONTENT_ID           int(11),
   USER_ID              int(11),
   primary key (ID)
);

/*==============================================================*/
/* Table: LESSONS_REMEMBER                                      */
/*==============================================================*/
create table LESSONS_REMEMBER
(
   ID                   int(11) not null auto_increment,
   STATE                tinyint(3),
   CREATED_DATE         datetime,
   CONTENT_ID           int(11),
   USER_ID              int(11),
   primary key (ID)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   ID                   int(11) not null auto_increment,
   USERNAME             varchar(100),
   PASSWD               varchar(32),
   EMAIL                varchar(50),
   FULLNAME             varbinary(150),
   DOB                  datetime,
   GENDER               tinyint(1),
   ADDRESS              varbinary(255),
   SCHOOL               varchar(250),
   COUNTRY              varchar(100),
   PREMIUM              tinyint(3),
   CREATED_DATE         timestamp default CURRENT_TIMESTAMP,
   primary key (ID)
);

alter table COMMENTS add constraint FK_FK_COMMENTS_CONTENTS foreign key (CONTENT_ID)
      references CONTENTS (ID) on delete restrict on update restrict;

alter table COMMENTS add constraint FK_FK_COMMENTS_USERS foreign key (USER_ID)
      references USERS (ID) on delete restrict on update restrict;

alter table CONTENTS add constraint FK_FK_CONTENTS_CATEGORIES foreign key (CATEGORY_ID)
      references CATEGORIES (ID) on delete restrict on update restrict;

alter table CORE_LAYOUTS add constraint FK_FK_CORE_USER_LAYOUTS foreign key (CORE_USER_ID)
      references CORE_USERS (ID) on delete restrict on update restrict;

alter table CORE_LAYOUT_DETAILS add constraint FK_FK_LAYOUTS_DETAILS foreign key (LAYOUT_ID)
      references CORE_LAYOUTS (ID) on delete restrict on update restrict;

alter table LESSONS_FAVORITE add constraint FK_FK_FAVORITE_CONTENTS foreign key (CONTENT_ID)
      references CONTENTS (ID) on delete restrict on update restrict;

alter table LESSONS_FAVORITE add constraint FK_FK_LESSON_FAVORITE_USER foreign key (USER_ID)
      references USERS (ID) on delete restrict on update restrict;

alter table LESSONS_REMEMBER add constraint FK_FK_CONTENTS_LESSONS_REMEMBER foreign key (CONTENT_ID)
      references CONTENTS (ID) on delete restrict on update restrict;

alter table LESSONS_REMEMBER add constraint FK_FK_LESSON_REMEMBER_USERS foreign key (USER_ID)
      references USERS (ID) on delete restrict on update restrict;

