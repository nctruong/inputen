/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 12                       */
/* Created on:     8/11/2012 11:52:29 AM                        */
/*==============================================================*/


drop table if exists CATEGORY;

drop table if exists CONTENT;

drop table if exists MENUS;

drop table if exists USERS;

/*==============================================================*/
/* Table: CATEGORY                                              */
/*==============================================================*/
create table CATEGORY 
(
   ID                   int(11)                        null,
   NAME                 varchar(250                    null,
   SLUG                 varchar(250                    null,
   STATE                tinyint(11)                    null,
   CREATED_DATE         datetime                       null,
   UPDATED_DATE         datetime                       null,
   CREATED_BY           int(11)                        null
);

/*==============================================================*/
/* Table: CONTENT                                               */
/*==============================================================*/
create table CONTENT 
(
   ID                   int(11)                        null,
   TITLE                varchar(250)                   null,
   SLUG                 varchar(250)                   null,
   CONTENT              text                           null,
   STATE                tinyint(1)                     null,
   CREATED_DATE         datetime                       null,
   UPDATED_DATE         datetime                       null,
   CATEGORY_ID          int(11)                        null,
   CREATED_BY           int(11)                        null
);

/*==============================================================*/
/* Table: MENUS                                                 */
/*==============================================================*/
create table MENUS 
(
   ID                   int(11)                        null,
   NAME                 varchar(250)                   null,
   SLUG                 varchar(250)                   null,
   STATE                tinyint(1)                     null,
   CREATED_DATE         datetime                       null,
   UPDATE_DATE          datetime                       null
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS 
(
   ID                   int(11)                        null,
   USERNAME             varchar(150)                   null,
   PASSWD               varchar(32)                    null,
   EMAIL                varchar(150)                   null,
   FULLNAME             varchar(50)                    null,
   BOD                  varchar(50)                    null,
   GENDER               varchar(100)                   null,
   ADDRESS              varchar(250)                   null,
   SCHOOL               varchar(250)                   null,
   SHOW_BORN            tinyint(1)                     null,
   SHOW_ADD             tinyint(1)                     null,
   COUNTRY_ID           int(11)                        null,
   STATE                tinyint(1)                     null,
   CREATED_DATE         datetime                       null,
   UPDATE_DATE          datetime                       null
);

