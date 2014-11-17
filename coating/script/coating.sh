#!/bin/bash
cat coating.sql \
INSERT_TipDannyh.sql \
INSERT_Razmernost.sql \
INSERT_Mnozitel_10.sql \
INSERT_TipSuschnosti.sql \
INSERT_Suschnost.sql \
INSERT_Harakteristika.sql \
| mysql -u root -p

# 
# INSERT_ТипИспытаний.sql \
#
# INSERT_Countryes.sql \
# INSERT_Regions.sql \
# INSERT_Districts.sql \
# INSERT_Localities.sql \
# INSERT_Streets.sql \
# INSERT_Humans.sql  \
# INSERT_Phones.sql \
# INSERT_Human_Phone.sql \

