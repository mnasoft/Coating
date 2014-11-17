SET NAMES 'utf8';
USE coating;

INSERT INTO Размерность (Тип,Размерность,Наименование_Р,Наименование_А,Обозначение_Р,Обозначение_А) VALUES
('Длина',                                    'L',             'метр',                     'metre','м','m'),
('Масса',                                    'M',             'тонна',                    'tonne','т','t'),
('Масса',                                    'M',             'килограмм',                'kilogram','кг','kg'),
('Масса',                                    'M',             'грамм',                    'gram','г','g'),
('Время',                                    'T',             'секунда',                  'second','с','s'),
('Сила электрического тока',                 'I',             'ампер',                    'ampere','А','A'),
('Термодинамическая температура',            'Θ',             'кельвин',                  'kelvin','К','K'),
('Количество вещества',                      'N',             'моль',                     'mole','моль','mol'),
('Сила света',                               'J',             'кандела',                  'candela','кд','cd'),

('Площадь',                                  'L2',            'квадратный метр',              '-','м2',      'm2'),
('Объём, вместимость',                       'L3',            'кубический метр',              '-','м3',      'm3'),
('Скорость',                                 'L T-1',         'метр в секунду',               '-','м/с',     'm/s'),
('Ускорение',                                'L T-2',         'метр на секунду в квадрате',   '-','м/с',     'm/s'),
('Волновое число',                           'L-1',           'метр в минус первой степени',  '-','1/м',     '1/m'),
('Плотность',                                'L-3 M',         'килограмм на метр кубический', '-','кг/м3',   'kg/m3'),
('Удельный объём',                           'L3 M-1',        'метр кубический на килограмм', '-','м3/кг',   'm3/kg'),
('Плотность электрического тока',            'L-2 I',         'ампер на квадратный метр',     '-','А/м2',    'A/m2'),
('Напряженность магнитного поля',            'L-1 I',         'ампер на метр',                '-','А/м',     'A/m'),
('Молярная концентрация компонента',         'L-3 N',         'моль на кубический метр',      '-','моль/м3', 'mol/m3'),
('Яркость',                                  'L-2 J',         'кандела на квадратный метр',   '-','кд/м2',   'cd/m2'),

('Плоский угол',                             '1',             'радиан',                  'radian','рад',     'rad'),
('Телесный угол',                            '1',             'стерадиан',            'steradian','ср',      'sr'),
('Частота',                                  'T-1',           'герц',                     'hertz','Гц',      'Hz'),
('Сила',                                     'L M T-2',       'ньютон',                  'newton','Н',       'N'),
('Давление',                                 'L-1 M T-2',     'паскаль',                 'pascal','Па',      'Pa'),
('Энергия',                                  'L2 M T-2',      'джоуль',                   'joule','Дж',      'J'),
('Мощность',                                 'L2 M T-3',      'ватт',                      'watt','Вт',      'W'),

('Электрический заряд',                      'T I',           'кулон',                  'coulomb','Кл',      'C'),
('Разность потенциалов',                     'L2 M T-3 I-1',  'вольт',                     'volt','В',       'V'),
('Электроёмкость',                           'L-2 M-1 T4 I2', 'фарад',                    'farad','Ф',       'F'),
('Сопротивление',                            'L2 M T-3 I-2',  'ом',                         'ohm','Ом',      'Ω'),
('Электрическая проводимость',               'L-2 M-1 T3 I2', 'сименс',                 'siemens','См',      'S'),

('Магнитный поток',                          'L2 M T-2 I-1',  'вебер',                    'weber','Вб',      'Wb'),
('Магнитная индукция',                       'M T-2 I-1',     'тесла',                    'tesla','Тл',      'T'),
('Индуктивность',                            'L2 M T-2 I-2',  'генри',                    'henry','Гн',      'H'),

('Температура по шкале Цельсия[6]',          'Θ',             'градус Цельсия','degree Celsius', '°C',   '°C'),

('Световой поток',                           'J',             'люмен',                     'lumen','лм',     'lm'),
('Освещённость',                             'L-2 J',         'люкс',                        'lux','лк',     'lx'),

('Активность радиоактивного источника',      'T-1',           'беккерель',             'becquerel','Бк',     'Bq'),
('Поглощённая доза ионизирующего излучения', 'L2 T-2',        'грей',                       'gray','Гр',     'Gy'),
('Эффективная доза ионизирующего излучения', 'L2 T-2',        'зиверт',                  'sievert','Зв',     'Sv'),

('Активность катализатора',                  'N T-1',         'катал',                     'katal','кат',    'kat'),


('Момент силы',                              'L2 M T-2',      'ньютон-метр',                   '-','Н·м',    'N·m'),
('Поверхностное натяжение',                  'M T-2',         'ньютон на метр',                '-','Н/м',    'N/m'),
('Динамическая вязкость',                    'L-1 M T-1',     'паскаль-секунда',               '-','Па·с',   'Pa·s'),

('Пространственная плотность электрического заряда', 'L-3 T I', 'кулон на кубический метр',    '-','Кл/м3',  'C/m3'),
('Электрическое смещение',                   'L-2 T I',       'кулон на квадратный метр',      '-','Кл/м2',  'C/m2'),
('Напряженность электрического поля',        'L M T-3 I-1',   'воль на метр',                  '-','В/м',    'V/m'),

('Диэлектрическая проницаемость',            'L-3 M-1 T4 I2', 'фарад на метр',                 '-','Ф/м',     'F/m'),
('Магнитная проницаемость',                  'L M T-2 I-2',   'генри на метр',                 '-','Гн/м',    'H/m'),

('Удельная энергия',                         'L2 T-2',        'джоуль на килограмм',           '-','Дж/кг',   'J/kg'),

('Энтропия системы',                         'L2 M T-2 Θ-1',  'джоуль на кельвин',             '-','Дж/К',    'J/K'),
('Удельная энтропия',                        'L2 T-2 Θ-1',    'джоуль на килограмм-кельвин',   '-','Дж/(кг·К)','J/(kg·K)'),

('Поверхностная плотность потока энергии',   'M T-3',         'ватт на квадратный метр',       '-','Вт/м2',   'W/m2'),
('Теплопроводность',                         'L M T-3 Θ-1',  'ватт на квадратный метр-кельвин','-','Вт/(м·К)','W/(m·K)'),

('Молярная внутренняя энергия',              'L2 M T-2 N-1',   'джоуль на моль',               '-','Дж/моль',  'J/mol'),
('Молярная теплоёмкость',                   'L2 M T-2 Θ-1 N-1','джоуль на моль-кельвин',       '-','Дж/(моль·К)','J/(mol·K)'), 

('Экспозиционая доза фотоного излучения',    'M-1 T I',        'кулон на килограмм',           '-','Кл/кг',     'C/kg'),
 
('Мощность поглощенной дозы',                'L2 T-3',         'грей в секунду',               '-','Гр/с',     'Gy/s'),

('Угловая скорость',                         'T-1',            'радиан в секунду',             '-','рад/с',    'rad/s'),
('Угловое ускорение',                        'T-2',            'радиан на секунду в квадрате', '-','рад/с2',   'rad/s2'),

('Сила излучения',                           'L2 M T-3',       'ватт на стерадиан',            '-','Вт/ср',    'W/sr'),

('Энергетичская яркость',                    'M T-3',      'ватт на стерадиан-квадратный метр','-','Вт/(ср·м2)','W/(sr·m2)');

