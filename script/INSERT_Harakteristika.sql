SET NAMES 'utf8';
USE coating;

INSERT INTO Характеристика
(id, Наименование,  Обозначение, Число, Число_min, Число_max, Строка, Сущность_id, ТипДанных_id, Размерность_id) VALUES
(1, 'Дисперсность', '' ,         NULL,  20,        100 ,      NULL,   3,           2,            1),
(2, 'плотность',    'ro',        5990,  NULL,      NULL ,     NULL,   1,           1,            15),
(3, 'пористость',   'П',         22,    NULL,      NULL ,     NULL,   1,           1,            20);
