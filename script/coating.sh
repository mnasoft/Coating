#!/bin/bash
cat coating.sql \
    INSERT_MimeType.sql \
    INSERT_TipDannyh.sql \
    INSERT_Razmernost.sql \
    INSERT_Mnozitel_10.sql \
    INSERT_TipIspytaniy.sql \
    INSERT_TipSuschnosti.sql \
    INSERT_Suschnost.sql \
    INSERT_Harakteristika.sql \
| mysql -u root -p




