DROP DATABASE coating;

CREATE DATABASE coating;
SET NAMES 'utf8';

USE coating;

CREATE TABLE Размерность
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Тип                                  varchar(50) NOT NULL COMMENT 'Наименование типа величины',
  Размерность                          varchar(50) NOT NULL COMMENT 'Буквенное обозначение размерности',
  Наименование_Р                       varchar(50) NOT NULL COMMENT 'Русское наименование размерности',
  Наименование_А                       varchar(50) NOT NULL COMMENT 'Английское наименование размерности',
  Обозначение_Р                        varchar(50) NOT NULL COMMENT 'Русское обозначение размерности',
  Обозначение_А                        varchar(50) NOT NULL COMMENT 'Английское обозначение размерности',
  PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Множитель_10 
(
  Степень                                TINYINT              COMMENT 'Степень числа 10',
  Приставка_Р                            varchar(15) NOT NULL COMMENT 'Наименование приставки русское', 
  Обозначение_Р                          varchar(6)  NOT NULL COMMENT 'Обозначение приставки русское', 
  Приставка_А                            varchar(15) NOT NULL COMMENT 'Наименование приставки английское', 
  Обозначение_А                          varchar(6)  NOT NULL COMMENT 'Обозначение приставки английское', 
  PRIMARY KEY (Степень)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE ТипДанных
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Наименование                         varchar(50) NOT NULL COMMENT 'Наименование типа данных',
  Спецификация                         varchar(50) NOT NULL COMMENT 'Спецификация типа данных',
  PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE ТипСущности
(
  id                                  BIGINT UNSIGNED AUTO_INCREMENT,
  Тип                                 varchar(50) NOT NULL COMMENT 'Тип сущности',
  PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Сущность
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Обозначение                          varchar(50) NOT NULL COMMENT 'Обозначение сущности',
  Наименование                         varchar(255) NOT NULL COMMENT 'Наименование сущности',
  Примечание                           varchar(255) NOT NULL COMMENT 'Примечание',
  ТипСущности_id                       BIGINT UNSIGNED NOT NULL COMMENT 'Код Типа Сущности',                            
  PRIMARY KEY (id),
  FOREIGN KEY (ТипСущности_id)        REFERENCES ТипСущности (id) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Характеристика
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Наименование                         varchar(50) NOT NULL         COMMENT 'Наименование характеристики',
  Обозначение                          varchar(50)                  COMMENT 'Обозначение характеристики',
  Число                                FLOAT                        COMMENT 'Номинальное значение',
  Число_min                            FLOAT                        COMMENT 'Минимальное зачение для диапазона значений',
  Число_max                            FLOAT                        COMMENT 'Максимальное зачение для диапазона значений',
  Строка                               varchar(255)                 COMMENT 'Строковая характеристика',
  Сущность_id                          BIGINT UNSIGNED NOT NULL     COMMENT 'Код сущности',
  Файл_id                              BIGINT UNSIGNED              COMMENT 'Код присоединенного файла',
  ТипДанных_id                         BIGINT UNSIGNED NOT NULL     COMMENT 'Код типа данных',
  Размерность_id                       BIGINT UNSIGNED              COMMENT 'Код размерности',
  Множитель_10_id                      TINYINT NOT NULL DEFAULT 0   COMMENT 'Код множителя',
  PRIMARY KEY (id),
  FOREIGN KEY (Сущность_id)     REFERENCES Сущность (id)          ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (ТипДанных_id)    REFERENCES ТипДанных (id)         ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (Размерность_id)  REFERENCES Размерность (id)       ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (Множитель_10_id) REFERENCES Множитель_10 (Степень) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE ТипИспытаний
(
  Код                                  BIGINT UNSIGNED AUTO_INCREMENT,
  Наименование                         varchar(50) NOT NULL         COMMENT 'Наименование типа испытания',
  PRIMARY KEY (Код)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE СущностьСодержит
(
  id                                      BIGINT UNSIGNED AUTO_INCREMENT,
  Сущность_id                             BIGINT UNSIGNED NOT NULL  COMMENT 'Код сущности',
  ПодСущность_id                          BIGINT UNSIGNED NOT NULL  COMMENT 'Код подсущности, из которых состоит сущность',
  PRIMARY KEY (id),
  FOREIGN KEY (Сущность_id)    REFERENCES Сущность (id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (ПодСущность_id) REFERENCES Сущность (id) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE MimeType
(
   id                                     BIGINT UNSIGNED AUTO_INCREMENT,
   Обозначение                            varchar(127)              COMMENT 'Например: application/vnd.oasis.opendocument.text',
   Описание                               TEXT                      COMMENT 'Например: OpenDocument Text; Registered[20]',
   PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Файл
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Имя                                  varchar(255)                 COMMENT 'Имя файла на файловом ресурсе',
  MD5                                  varchar(35)                  COMMENT 'Контрольная сумма MD5 файла',
  SHA1                                 varchar(45)                  COMMENT 'Контрольная сумма SHA1 файла',
  Размер                               BIGINT UNSIGNED NOT NULL     COMMENT 'Размер файла в байтах',
  MimeType_id                          BIGINT UNSIGNED NOT NULL     COMMENT 'Код Mime типа',
  PRIMARY KEY (id),
  FOREIGN KEY (MimeType_id) REFERENCES MimeType (id)       ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (MimeType_id) REFERENCES Характеристика (id) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
