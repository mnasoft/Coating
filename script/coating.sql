DROP DATABASE coating;

CREATE DATABASE coating;
SET NAMES 'utf8';

USE coating;

CREATE TABLE Размерность
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Тип                                  VARCHAR(50) NOT NULL COMMENT 'Наименование типа величины',
  Размерность                          VARCHAR(50) NOT NULL COMMENT 'Буквенное обозначение размерности',
  Наименование_Р                       VARCHAR(50) NOT NULL COMMENT 'Русское наименование размерности',
  Наименование_А                       VARCHAR(50) NOT NULL COMMENT 'Английское наименование размерности',
  Обозначение_Р                        VARCHAR(50) NOT NULL COMMENT 'Русское обозначение размерности',
  Обозначение_А                        VARCHAR(50) NOT NULL COMMENT 'Английское обозначение размерности',
  PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Множитель_10 
(
  Степень                                TINYINT              COMMENT 'Степень числа 10',
  Приставка_Р                            VARCHAR(15) NOT NULL COMMENT 'Наименование приставки русское', 
  Обозначение_Р                          VARCHAR(6)  NOT NULL COMMENT 'Обозначение приставки русское', 
  Приставка_А                            VARCHAR(15) NOT NULL COMMENT 'Наименование приставки английское', 
  Обозначение_А                          VARCHAR(6)  NOT NULL COMMENT 'Обозначение приставки английское', 
  PRIMARY KEY (Степень)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE ТипДанных
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Наименование                         VARCHAR(50) NOT NULL COMMENT 'Наименование типа данных',
  Спецификация                         VARCHAR(50) NOT NULL COMMENT 'Спецификация типа данных',
  PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE ТипСущности
(
  id                                  BIGINT UNSIGNED AUTO_INCREMENT,
  Тип                                 VARCHAR(50) NOT NULL COMMENT 'Тип сущности',
  PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Сущность
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Обозначение                          VARCHAR(50) NOT NULL COMMENT 'Обозначение сущности',
  Наименование                         VARCHAR(255) NOT NULL COMMENT 'Наименование сущности',
  Примечание                           VARCHAR(255) NOT NULL COMMENT 'Примечание',
  ТипСущности_id                       BIGINT UNSIGNED NOT NULL COMMENT 'Код Типа Сущности',                            
  PRIMARY KEY (id),
  FOREIGN KEY (ТипСущности_id)        REFERENCES ТипСущности (id) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE MimeType
(
   id                                     BIGINT UNSIGNED AUTO_INCREMENT,
   Обозначение                            VARCHAR(127)              COMMENT 'Например: application/vnd.oasis.opendocument.text',
   Описание                               TEXT                      COMMENT 'Например: OpenDocument Text; Registered[20]',
   PRIMARY KEY (id)
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Файл
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Файл                                 VARCHAR(255)                 COMMENT 'Имя файла на файловом ресурсе. Например: 2015-05-17-21-19-4.438216-9ba1e53325cff7733cd84c84b70f1334.pdf',
  Имя                                  VARCHAR(255)                 COMMENT 'Имя файла при выполнении опрерации скачивания. Например: GOST-2.301-80.pdf',
  Описание                             VARCHAR(255)                 COMMENT 'Краткое описание содержимого файла. Например: ГОСТ 2.301-68. Единая система конструкторской документации. Форматы',
  MD5                                  VARCHAR(35)                  COMMENT 'Контрольная сумма MD5 файла',
  SHA1                                 VARCHAR(45)                  COMMENT 'Контрольная сумма SHA1 файла',
  Размер                               BIGINT UNSIGNED NOT NULL     COMMENT 'Размер файла в байтах',
  MimeType_id                          BIGINT UNSIGNED NOT NULL     COMMENT 'Код Mime типа',
  PRIMARY KEY (id),
  FOREIGN KEY (MimeType_id)     REFERENCES MimeType (id)          ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Характеристика
(
  id                                   BIGINT UNSIGNED AUTO_INCREMENT,
  Наименование                         VARCHAR(50) NOT NULL         COMMENT 'Наименование характеристики',
  Обозначение                          VARCHAR(50)                  COMMENT 'Обозначение характеристики',
  Число                                FLOAT                        COMMENT 'Номинальное значение',
  Число_min                            FLOAT                        COMMENT 'Минимальное зачение для диапазона значений',
  Число_max                            FLOAT                        COMMENT 'Максимальное зачение для диапазона значений',
  Строка                               TEXT                         COMMENT 'Строковая характеристика до 65536 символов',
  Сущность_id                          BIGINT UNSIGNED NOT NULL     COMMENT 'Код сущности',
  Файл_id                              BIGINT UNSIGNED     NULL     COMMENT 'Код присоединенного файла',
  ТипДанных_id                         BIGINT UNSIGNED NOT NULL     COMMENT 'Код типа данных',
  Размерность_id                       BIGINT UNSIGNED              COMMENT 'Код размерности',
  Множитель_10_id                      TINYINT NOT NULL DEFAULT 0   COMMENT 'Код множителя',
  PRIMARY KEY (id),
  FOREIGN KEY (Сущность_id)     REFERENCES Сущность (id)          ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (ТипДанных_id)    REFERENCES ТипДанных (id)         ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (Размерность_id)  REFERENCES Размерность (id)       ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (Множитель_10_id) REFERENCES Множитель_10 (Степень) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (Файл_id)         REFERENCES Файл (id)              ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE ТипИспытаний
(
  Код                                  BIGINT UNSIGNED AUTO_INCREMENT,
  Наименование                         VARCHAR(50) NOT NULL         COMMENT 'Наименование типа испытания',
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

