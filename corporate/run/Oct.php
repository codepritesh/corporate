<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);






mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='319', `b_od_pri`='2181',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2181', `outstanding`='18669',`a_od_int`='0',`a_tot_od`='2760.1872727273',`a_od_pr`='2760.1872727273',`collection`='2500.00',`coll_date`='2016-10-18' where `accountno`='BL1772' and `cal_date`='2016-10-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2760.1872727273',`amount_topay`='18669',`last_refund_date`='2016-10-18',`last_refund_amt`='2500.00', `od_cal_date`='2016-11-10',`loancomplited`='0' where `loan_accno`='BL1772'");

mysql_query("UPDATE   `transaction` set `amount`='2181',`details`='businessloan Refund' where `accountno`='BL1772' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='319',`details`='businessloan Interest' where `accountno`='BL1772' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='613',`b_cur_int`='633', `b_od_pri`='1539',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1539', `outstanding`='39882',`a_od_int`='0',`a_tot_od`='2925.4660869565',`a_od_pr`='2925.4660869565',`collection`='2785.00',`coll_date`='2016-10-18' where `accountno`='BL1679' and `cal_date`='2016-10-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2925.4660869565',`amount_topay`='39882',`last_refund_date`='2016-10-18',`last_refund_amt`='2785.00', `od_cal_date`='2016-11-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='1539',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1246',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='513', `b_od_pri`='2327',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2327', `outstanding`='31218',`a_od_int`='0',`a_tot_od`='5335.8211764706',`a_od_pr`='5335.8211764706',`collection`='2840.00',`coll_date`='2016-10-19' where `accountno`='BL1734' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5335.8211764706',`amount_topay`='31218',`last_refund_date`='2016-10-19',`last_refund_amt`='2840.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='2327',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='513',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='58.00',`b_cur_int`='56', `b_od_pri`='636.36',`b_cur_pri`='636.36363636364',`a_pre_pri`='213.27636363636',`tot_pr`='1486', `outstanding`='1617',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1600.00',`coll_date`='2016-10-20' where `accountno`='BL1590' and `cal_date`='2016-10-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='1617',`last_refund_date`='2016-10-20',`last_refund_amt`='1600.00', `od_cal_date`='2016-10-21',`loancomplited`='0' where `loan_accno`='BL1590'");

mysql_query("UPDATE   `transaction` set `amount`='1486',`details`='businessloan Refund' where `accountno`='BL1590' and `date`='2016-10-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='114',`details`='businessloan Interest' where `accountno`='BL1590' and `date`='2016-10-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='606',`b_cur_int`='626', `b_od_pri`='3919',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3919', `outstanding`='37058',`a_od_int`='0',`a_tot_od`='9785.3590909091',`a_od_pr`='9785.3590909091',`collection`='5151.00',`coll_date`='2016-10-19' where `accountno`='BL1767' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9785.3590909091',`amount_topay`='37058',`last_refund_date`='2016-10-19',`last_refund_amt`='5151.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3919',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1232',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='211', `b_od_pri`='1804',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1804', `outstanding`='9499',`a_od_int`='0',`a_tot_od`='2226.2618181818',`a_od_pr`='2226.2618181818',`collection`='2015.00',`coll_date`='2016-10-25' where `accountno`='BL1643' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2226.2618181818',`amount_topay`='9499',`last_refund_date`='2016-10-25',`last_refund_amt`='2015.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1804',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-10-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='211',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-10-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='274', `b_od_pri`='1164',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1164', `outstanding`='16785',`a_od_int`='0',`a_tot_od`='1490.4105882353',`a_od_pr`='1490.4105882353',`collection`='1438.00',`coll_date`='2016-10-25' where `accountno`='BL1753' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1490.4105882353',`amount_topay`='16785',`last_refund_date`='2016-10-25',`last_refund_amt`='1438.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1753'");

mysql_query("UPDATE   `transaction` set `amount`='1164',`details`='businessloan Refund' where `accountno`='BL1753' and `date`='2016-10-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='274',`details`='businessloan Interest' where `accountno`='BL1753' and `date`='2016-10-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='300', `b_od_pri`='2670',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2670', `outstanding`='16972',`a_od_int`='0',`a_tot_od`='6062.9227272727',`a_od_pr`='6062.9227272727',`collection`='2970.00',`coll_date`='2016-10-26' where `accountno`='BL1692' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6062.9227272727',`amount_topay`='16972',`last_refund_date`='2016-10-26',`last_refund_amt`='2970.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2670',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='300',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-10-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='227', `b_od_pri`='1806',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1806', `outstanding`='13048',`a_od_int`='0',`a_tot_od`='2138.9018181818',`a_od_pr`='2138.9018181818',`collection`='2033.00',`coll_date`='2016-10-26' where `accountno`='BL1724' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2138.9018181818',`amount_topay`='13048',`last_refund_date`='2016-10-26',`last_refund_amt`='2033.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1724'");

mysql_query("UPDATE   `transaction` set `amount`='1806',`details`='businessloan Refund' where `accountno`='BL1724' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='227',`details`='businessloan Interest' where `accountno`='BL1724' and `date`='2016-10-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='57', `b_od_pri`='451',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='451', `outstanding`='3264',`a_od_int`='0',`a_tot_od`='536.64545454545',`a_od_pr`='536.64545454545',`collection`='508.00',`coll_date`='2016-10-28' where `accountno`='BL1715' and `cal_date`='2016-10-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='536.64545454545',`amount_topay`='3264',`last_refund_date`='2016-10-28',`last_refund_amt`='508.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='BL1715'");

mysql_query("UPDATE   `transaction` set `amount`='451',`details`='businessloan Refund' where `accountno`='BL1715' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='57',`details`='businessloan Interest' where `accountno`='BL1715' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='219', `b_od_pri`='2521',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2521', `outstanding`='9183',`a_od_int`='0',`a_tot_od`='4638.1872727273',`a_od_pr`='4638.1872727273',`collection`='2740.00',`coll_date`='2016-10-28' where `accountno`='BL1572' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4638.1872727273',`amount_topay`='9183',`last_refund_date`='2016-10-28',`last_refund_amt`='2740.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1572'");

mysql_query("UPDATE   `transaction` set `amount`='2521',`details`='businessloan Refund' where `accountno`='BL1572' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='219',`details`='businessloan Interest' where `accountno`='BL1572' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='226', `b_od_pri`='1164',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1164', `outstanding`='10936',`a_od_int`='0',`a_tot_od`='2700.4105882353',`a_od_pr`='2700.4105882353',`collection`='1390.00',`coll_date`='2016-10-28' where `accountno`='BL1575' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2700.4105882353',`amount_topay`='10936',`last_refund_date`='2016-10-28',`last_refund_amt`='1390.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1164',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='226',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='110', `b_od_pri`='465',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='465', `outstanding`='6712',`a_od_int`='0',`a_tot_od`='594.35823529412',`a_od_pr`='594.35823529412',`collection`='575.00',`coll_date`='2016-10-31' where `accountno`='BL1760' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='594.35823529412',`amount_topay`='6712',`last_refund_date`='2016-10-31',`last_refund_amt`='575.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='BL1760'");

mysql_query("UPDATE   `transaction` set `amount`='465',`details`='businessloan Refund' where `accountno`='BL1760' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='110',`details`='businessloan Interest' where `accountno`='BL1760' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1816',`b_cur_int`='612', `b_od_pri`='572',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='572', `outstanding`='39428',`a_od_int`='0',`a_tot_od`='8839.7623529412',`a_od_pr`='8839.7623529412',`collection`='3000.00',`coll_date`='2016-10-31' where `accountno`='BL1755' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='8839.7623529412',`amount_topay`='39428',`last_refund_date`='2016-10-31',`last_refund_amt`='3000.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='BL1755'");

mysql_query("INSERT  into `transaction` set `transactionid`='1479819648',`amount`='572',`details`='businessloan Refund',`accountno`='BL1755',`date`='2016-10-31' ");


mysql_query("UPDATE   `transaction` set `interest`='2428',`details`='businessloan Interest' where `accountno`='BL1755' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='372',`b_cur_int`='385', `b_od_pri`='1347',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1347', `outstanding`='23829',`a_od_int`='0',`a_tot_od`='4417.2517647059',`a_od_pr`='4417.2517647059',`collection`='2104.00',`coll_date`='2016-10-31' where `accountno`='BL1690' and `cal_date`='2016-10-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4417.2517647059',`amount_topay`='23829',`last_refund_date`='2016-10-31',`last_refund_amt`='2104.00', `od_cal_date`='2016-11-21',`loancomplited`='0' where `loan_accno`='BL1690'");

mysql_query("UPDATE   `transaction` set `amount`='1347',`details`='businessloan Refund' where `accountno`='BL1690' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='757',`details`='businessloan Interest' where `accountno`='BL1690' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='163', `b_od_pri`='1655',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1655', `outstanding`='7045',`a_od_int`='0',`a_tot_od`='2045.3566666667',`a_od_pr`='2045.3566666667',`collection`='1818.00',`coll_date`='2016-10-31' where `accountno`='BL1613' and `cal_date`='2016-10-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2045.3566666667',`amount_topay`='7045',`last_refund_date`='2016-10-31',`last_refund_amt`='1818.00', `od_cal_date`='2016-11-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1655',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='163',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='207', `b_od_pri`='871',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='871', `outstanding`='12669',`a_od_int`='0',`a_tot_od`='2081.0529411765',`a_od_pr`='2081.0529411765',`collection`='1078.00',`coll_date`='2016-10-31' where `accountno`='BL1748' and `cal_date`='2016-10-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2081.0529411765',`amount_topay`='12669',`last_refund_date`='2016-10-31',`last_refund_amt`='1078.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `amount`='871',`details`='businessloan Refund' where `accountno`='BL1748' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='207',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='266', `b_od_pri`='2734',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2734', `outstanding`='11503',`a_od_int`='0',`a_tot_od`='3321.1627272727',`a_od_pr`='3321.1627272727',`collection`='3000.00',`coll_date`='2016-10-26' where `accountno`='BL1616' and `cal_date`='2016-10-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3321.1627272727',`amount_topay`='11503',`last_refund_date`='2016-10-26',`last_refund_amt`='3000.00', `od_cal_date`='2016-11-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2734',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='266',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-10-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='170',`b_cur_int`='175', `b_od_pri`='476',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='476', `outstanding`='8903',`a_od_int`='0',`a_tot_od`='853.38782608696',`a_od_pr`='853.38782608696',`collection`='821.00',`coll_date`='2016-10-25' where `accountno`='BL1512' and `cal_date`='2016-10-15'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='853.38782608696',`amount_topay`='8903',`last_refund_date`='2016-10-25',`last_refund_amt`='821.00', `od_cal_date`='2016-11-15',`loancomplited`='0' where `loan_accno`='BL1512'");

mysql_query("UPDATE   `transaction` set `amount`='476',`details`='businessloan Refund' where `accountno`='BL1512' and `date`='2016-10-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='345',`details`='businessloan Interest' where `accountno`='BL1512' and `date`='2016-10-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='602',`b_cur_int`='306', `b_od_pri`='2046',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2046', `outstanding`='17954',`a_od_int`='0',`a_tot_od`='1483.4111764706',`a_od_pr`='1483.4111764706',`collection`='2954.00',`coll_date`='2016-10-18' where `accountno`='BL1789' and `cal_date`='2016-10-15'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1483.4111764706',`amount_topay`='17954',`last_refund_date`='2016-10-18',`last_refund_amt`='2954.00', `od_cal_date`='2016-11-15',`loancomplited`='0' where `loan_accno`='BL1789'");

mysql_query("UPDATE   `transaction` set `amount`='2046',`details`='businessloan Refund' where `accountno`='BL1789' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='908',`details`='businessloan Interest' where `accountno`='BL1789' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='606',`b_cur_int`='626', `b_od_pri`='3919',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3919', `outstanding`='37058',`a_od_int`='0',`a_tot_od`='9785.3590909091',`a_od_pr`='9785.3590909091',`collection`='5151.00',`coll_date`='2016-10-19' where `accountno`='BL1767' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9785.3590909091',`amount_topay`='37058',`last_refund_date`='2016-10-19',`last_refund_amt`='5151.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3919',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1232',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='381', `b_od_pri`='2709',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2709', `outstanding`='22234',`a_od_int`='0',`a_tot_od`='5870.0927272727',`a_od_pr`='5870.0927272727',`collection`='3090.00',`coll_date`='2016-10-24' where `accountno`='BL1761' and `cal_date`='2016-10-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5870.0927272727',`amount_topay`='22234',`last_refund_date`='2016-10-24',`last_refund_amt`='3090.00', `od_cal_date`='2016-11-10',`loancomplited`='0' where `loan_accno`='BL1761'");

mysql_query("UPDATE   `transaction` set `amount`='2709',`details`='businessloan Refund' where `accountno`='BL1761' and `date`='2016-10-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='381',`details`='businessloan Interest' where `accountno`='BL1761' and `date`='2016-10-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1816',`b_cur_int`='612', `b_od_pri`='572',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='572', `outstanding`='39428',`a_od_int`='0',`a_tot_od`='8839.7623529412',`a_od_pr`='8839.7623529412',`collection`='3000.00',`coll_date`='2016-10-31' where `accountno`='BL1755' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='8839.7623529412',`amount_topay`='39428',`last_refund_date`='2016-10-31',`last_refund_amt`='3000.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='BL1755'");

mysql_query("INSERT  into `transaction` set `transactionid`='1479819648',`amount`='572',`details`='businessloan Refund',`accountno`='BL1755',`date`='2016-10-31' ");


mysql_query("UPDATE   `transaction` set `interest`='2428',`details`='businessloan Interest' where `accountno`='BL1755' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='259', `b_od_pri`='1821',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1821', `outstanding`='15124',`a_od_int`='0',`a_tot_od`='4214.9018181818',`a_od_pr`='4214.9018181818',`collection`='2080.00',`coll_date`='2016-10-08' where `accountno`='BL1702' and `cal_date`='2016-10-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4214.9018181818',`amount_topay`='15124',`last_refund_date`='2016-10-08',`last_refund_amt`='2080.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='BL1702'");

mysql_query("UPDATE   `transaction` set `amount`='1821',`details`='businessloan Refund' where `accountno`='BL1702' and `date`='2016-10-08' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='259',`details`='businessloan Interest' where `accountno`='BL1702' and `date`='2016-10-08' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='613',`b_cur_int`='633', `b_od_pri`='1539',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1539', `outstanding`='39882',`a_od_int`='0',`a_tot_od`='2925.4660869565',`a_od_pr`='2925.4660869565',`collection`='2785.00',`coll_date`='2016-10-18' where `accountno`='BL1679' and `cal_date`='2016-10-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2925.4660869565',`amount_topay`='39882',`last_refund_date`='2016-10-18',`last_refund_amt`='2785.00', `od_cal_date`='2016-11-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='1539',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1246',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='300',`b_cur_int`='310', `b_od_pri`='2413',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2413', `outstanding`='14178',`a_od_int`='0',`a_tot_od`='5995.8154545455',`a_od_pr`='5995.8154545455',`collection`='3023.00',`coll_date`='2016-10-18' where `accountno`='BL1642' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5995.8154545455',`amount_topay`='14178',`last_refund_date`='2016-10-18',`last_refund_amt`='3023.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2413',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='610',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='53', `b_od_pri`='1225.9',`b_cur_pri`='431.1',`a_pre_pri`='0',`tot_pr`='1657', `outstanding`='1205',`a_od_int`='0',`a_tot_od`='114.35454545455',`a_od_pr`='114.35454545455',`collection`='1710.00',`coll_date`='2016-10-28' where `accountno`='BL1628' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='114.35454545455',`amount_topay`='1205',`last_refund_date`='2016-10-28',`last_refund_amt`='1710.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='1657',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='53',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='105', `b_od_pri`='905',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='905', `outstanding`='4701',`a_od_int`='0',`a_tot_od`='1064.3609090909',`a_od_pr`='1064.3609090909',`collection`='1010.00',`coll_date`='2016-10-24' where `accountno`='BL1641' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1064.3609090909',`amount_topay`='4701',`last_refund_date`='2016-10-24',`last_refund_amt`='1010.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='905',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-10-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='105',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-10-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='300',`b_cur_int`='310', `b_od_pri`='2413',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2413', `outstanding`='14178',`a_od_int`='0',`a_tot_od`='5995.8154545455',`a_od_pr`='5995.8154545455',`collection`='3023.00',`coll_date`='2016-10-18' where `accountno`='BL1642' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5995.8154545455',`amount_topay`='14178',`last_refund_date`='2016-10-18',`last_refund_amt`='3023.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2413',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='610',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='211', `b_od_pri`='1804',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1804', `outstanding`='9499',`a_od_int`='0',`a_tot_od`='2226.2618181818',`a_od_pr`='2226.2618181818',`collection`='2015.00',`coll_date`='2016-10-25' where `accountno`='BL1643' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2226.2618181818',`amount_topay`='9499',`last_refund_date`='2016-10-25',`last_refund_amt`='2015.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1804',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-10-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='211',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-10-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='997',`b_cur_int`='1031', `b_od_pri`='3095',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3095', `outstanding`='49670',`a_od_int`='0',`a_tot_od`='20892.174117647',`a_od_pr`='20892.174117647',`collection`='5123.00',`coll_date`='2016-10-31' where `accountno`='EL1560' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='20892.174117647',`amount_topay`='49670',`last_refund_date`='2016-10-31',`last_refund_amt`='5123.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3095',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2028',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='6409.00',`b_cur_int`='591', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='100000',`a_od_int`='971',`a_tot_od`='46425.549090909',`a_od_pr`='45454.549090909',`collection`='7000.00',`coll_date`='2016-10-03' where `accountno`='EL1712' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='971',`odprincipal`='45454.549090909',`amount_topay`='100000',`last_refund_date`='2016-10-03',`last_refund_amt`='7000.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1712'");

mysql_query("UPDATE   `transaction` set `interest`='7000',`details`='enterpriseloan Interest' where `accountno`='EL1712' and `date`='2016-10-03' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1762', `b_od_pri`='3238',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3238', `outstanding`='86946',`a_od_int`='0',`a_tot_od`='36946.455555556',`a_od_pr`='36946.455555556',`collection`='5000.00',`coll_date`='2016-10-31' where `accountno`='EL1604' and `cal_date`='2016-10-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='36946.455555556',`amount_topay`='86946',`last_refund_date`='2016-10-31',`last_refund_amt`='5000.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='3238',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1762',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1472', `b_od_pri`='373.34',`b_cur_pri`='3738.66',`a_pre_pri`='0',`tot_pr`='4112', `outstanding`='71261',`a_od_int`='0',`a_tot_od`='428.00666666667',`a_od_pr`='428.00666666667',`collection`='5584.00',`coll_date`='2016-10-31' where `accountno`='EL1632' and `cal_date`='2016-10-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='428.00666666667',`amount_topay`='71261',`last_refund_date`='2016-10-31',`last_refund_amt`='5584.00', `od_cal_date`='2016-11-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4112',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1472',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='4045',`b_cur_int`='1363', `b_od_pri`='252',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='252', `outstanding`='69525',`a_od_int`='0',`a_tot_od`='29524.538888889',`a_od_pr`='29524.538888889',`collection`='5660.00',`coll_date`='2016-10-28' where `accountno`='EL1612' and `cal_date`='2016-10-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='29524.538888889',`amount_topay`='69525',`last_refund_date`='2016-10-28',`last_refund_amt`='5660.00', `od_cal_date`='2016-11-20',`loancomplited`='0' where `loan_accno`='EL1612'");

mysql_query("UPDATE   `transaction` set `amount`='252',`details`='enterpriseloan Refund' where `accountno`='EL1612' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='5408',`details`='enterpriseloan Interest' where `accountno`='EL1612' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1425',`b_cur_int`='1473', `b_od_pri`='4114',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4114', `outstanding`='71269',`a_od_int`='0',`a_tot_od`='30154.825882353',`a_od_pr`='30154.825882353',`collection`='7012.00',`coll_date`='2016-10-31' where `accountno`='EL1559' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='30154.825882353',`amount_topay`='71269',`last_refund_date`='2016-10-31',`last_refund_amt`='7012.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4114',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2898',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='997',`b_cur_int`='1031', `b_od_pri`='3095',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3095', `outstanding`='49670',`a_od_int`='0',`a_tot_od`='20892.174117647',`a_od_pr`='20892.174117647',`collection`='5123.00',`coll_date`='2016-10-31' where `accountno`='EL1560' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='20892.174117647',`amount_topay`='49670',`last_refund_date`='2016-10-31',`last_refund_amt`='5123.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3095',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2028',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1762', `b_od_pri`='3238',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3238', `outstanding`='86946',`a_od_int`='0',`a_tot_od`='36946.455555556',`a_od_pr`='36946.455555556',`collection`='5000.00',`coll_date`='2016-10-31' where `accountno`='EL1604' and `cal_date`='2016-10-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='36946.455555556',`amount_topay`='86946',`last_refund_date`='2016-10-31',`last_refund_amt`='5000.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='3238',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1762',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1139', `b_od_pri`='4096',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4096', `outstanding`='51806',`a_od_int`='0',`a_tot_od`='5974.3566666667',`a_od_pr`='5974.3566666667',`collection`='5235.00',`coll_date`='2016-10-31' where `accountno`='EL1439' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5974.3566666667',`amount_topay`='51806',`last_refund_date`='2016-10-31',`last_refund_amt`='5235.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4096',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1139',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1139', `b_od_pri`='4096',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4096', `outstanding`='51790',`a_od_int`='0',`a_tot_od`='5969.3566666667',`a_od_pr`='5969.3566666667',`collection`='5235.00',`coll_date`='2016-10-31' where `accountno`='EL1440' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5969.3566666667',`amount_topay`='51790',`last_refund_date`='2016-10-31',`last_refund_amt`='5235.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4096',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1139',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1429', `b_od_pri`='4277',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4277', `outstanding`='84300',`a_od_int`='0',`a_tot_od`='6039.1460869565',`a_od_pr`='6039.1460869565',`collection`='5706.00',`coll_date`='2016-10-31' where `accountno`='EL1726' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6039.1460869565',`amount_topay`='84300',`last_refund_date`='2016-10-31',`last_refund_amt`='5706.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1726'");

mysql_query("UPDATE   `transaction` set `amount`='4277',`details`='enterpriseloan Refund' where `accountno`='EL1726' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1429',`details`='enterpriseloan Interest' where `accountno`='EL1726' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1472', `b_od_pri`='373.34',`b_cur_pri`='3738.66',`a_pre_pri`='0',`tot_pr`='4112', `outstanding`='71261',`a_od_int`='0',`a_tot_od`='428.00666666667',`a_od_pr`='428.00666666667',`collection`='5584.00',`coll_date`='2016-10-31' where `accountno`='EL1632' and `cal_date`='2016-10-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='428.00666666667',`amount_topay`='71261',`last_refund_date`='2016-10-31',`last_refund_amt`='5584.00', `od_cal_date`='2016-11-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4112',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1472',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1282',`b_cur_int`='1324', `b_od_pri`='4394',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4394', `outstanding`='63396',`a_od_int`='0',`a_tot_od`='22272.825882353',`a_od_pr`='22272.825882353',`collection`='7000.00',`coll_date`='2016-10-31' where `accountno`='EL1511' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22272.825882353',`amount_topay`='63396',`last_refund_date`='2016-10-31',`last_refund_amt`='7000.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("INSERT  into `transaction` set `transactionid`='1479819649',`amount`='4394',`details`='enterpriseloan Refund',`accountno`='EL1511',`date`='2016-10-31' ");


mysql_query("UPDATE   `transaction` set `interest`='2606',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='6409.00',`b_cur_int`='591', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='100000',`a_od_int`='971',`a_tot_od`='46425.549090909',`a_od_pr`='45454.549090909',`collection`='7000.00',`coll_date`='2016-10-03' where `accountno`='EL1712' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='971',`odprincipal`='45454.549090909',`amount_topay`='100000',`last_refund_date`='2016-10-03',`last_refund_amt`='7000.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1712'");

mysql_query("UPDATE   `transaction` set `interest`='7000',`details`='enterpriseloan Interest' where `accountno`='EL1712' and `date`='2016-10-03' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='4045',`b_cur_int`='1363', `b_od_pri`='252',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='252', `outstanding`='69525',`a_od_int`='0',`a_tot_od`='29524.538888889',`a_od_pr`='29524.538888889',`collection`='5660.00',`coll_date`='2016-10-28' where `accountno`='EL1612' and `cal_date`='2016-10-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='29524.538888889',`amount_topay`='69525',`last_refund_date`='2016-10-28',`last_refund_amt`='5660.00', `od_cal_date`='2016-11-20',`loancomplited`='0' where `loan_accno`='EL1612'");

mysql_query("UPDATE   `transaction` set `amount`='252',`details`='enterpriseloan Refund' where `accountno`='EL1612' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='5408',`details`='enterpriseloan Interest' where `accountno`='EL1612' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='997',`b_cur_int`='1031', `b_od_pri`='3095',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3095', `outstanding`='49670',`a_od_int`='0',`a_tot_od`='20892.174117647',`a_od_pr`='20892.174117647',`collection`='5123.00',`coll_date`='2016-10-31' where `accountno`='EL1560' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='20892.174117647',`amount_topay`='49670',`last_refund_date`='2016-10-31',`last_refund_amt`='5123.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3095',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2028',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1425',`b_cur_int`='1473', `b_od_pri`='4114',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4114', `outstanding`='71269',`a_od_int`='0',`a_tot_od`='30154.825882353',`a_od_pr`='30154.825882353',`collection`='7012.00',`coll_date`='2016-10-31' where `accountno`='EL1559' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='30154.825882353',`amount_topay`='71269',`last_refund_date`='2016-10-31',`last_refund_amt`='7012.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4114',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2898',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1282',`b_cur_int`='1324', `b_od_pri`='4394',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4394', `outstanding`='63396',`a_od_int`='0',`a_tot_od`='22272.825882353',`a_od_pr`='22272.825882353',`collection`='7000.00',`coll_date`='2016-10-31' where `accountno`='EL1511' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22272.825882353',`amount_topay`='63396',`last_refund_date`='2016-10-31',`last_refund_amt`='7000.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("INSERT  into `transaction` set `transactionid`='1479819649',`amount`='4394',`details`='enterpriseloan Refund',`accountno`='EL1511',`date`='2016-10-31' ");


mysql_query("UPDATE   `transaction` set `interest`='2606',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1139', `b_od_pri`='4096',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4096', `outstanding`='51790',`a_od_int`='0',`a_tot_od`='5969.3566666667',`a_od_pr`='5969.3566666667',`collection`='5235.00',`coll_date`='2016-10-31' where `accountno`='EL1440' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5969.3566666667',`amount_topay`='51790',`last_refund_date`='2016-10-31',`last_refund_amt`='5235.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4096',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1139',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1139', `b_od_pri`='4096',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4096', `outstanding`='51806',`a_od_int`='0',`a_tot_od`='5974.3566666667',`a_od_pr`='5974.3566666667',`collection`='5235.00',`coll_date`='2016-10-31' where `accountno`='EL1439' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5974.3566666667',`amount_topay`='51806',`last_refund_date`='2016-10-31',`last_refund_amt`='5235.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4096',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1139',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='91', `b_od_pri`='722',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='722', `outstanding`='5211',`a_od_int`='0',`a_tot_od`='1574.8127272727',`a_od_pr`='1574.8127272727',`collection`='813.00',`coll_date`='2016-10-19' where `accountno`='GRL1706' and `cal_date`='2016-10-10'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1574.8127272727',`amount_topay`='5211',`last_refund_date`='2016-10-19',`last_refund_amt`='813.00', `od_cal_date`='2016-11-10',`loancomplited`='0' where `loan_accno`='GRL1706'");

mysql_query("UPDATE   `transaction` set `amount`='722',`details`='grouploan Refund' where `accountno`='GRL1706' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='91',`details`='grouploan Interest' where `accountno`='GRL1706' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='123', `b_od_pri`='842',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='842', `outstanding`='5200.67',`a_od_int`='0',`a_tot_od`='1916.3333333333',`a_od_pr`='1916.3333333333',`collection`='965.00',`coll_date`='2016-10-14' where `accountno`='AL1454' and `cal_date`='2016-10-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='1916.3333333333',`amount_topay`='5200.67',`last_refund_date`='2016-10-14',`last_refund_amt`='965.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='842',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-10-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='123',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-10-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='246',`b_cur_int`='92', `b_od_pri`='842',`b_cur_pri`='0',`a_pre_pri`='1910',`tot_pr`='2752', `outstanding`='3248',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2248.00',`coll_date`='2016-10-28' where `accountno`='GL1815' and `cal_date`='2016-10-21'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='3248',`last_refund_date`='2016-10-28',`last_refund_amt`='2248.00', `od_cal_date`='2016-11-21',`loancomplited`='0' where `loan_accno`='GL1815'");

mysql_query("UPDATE   `transaction` set `amount`='2752',`details`='goldloan Refund' where `accountno`='GL1815' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='338',`details`='goldloan Interest' where `accountno`='GL1815' and `date`='2016-10-28' and `interest`>0 ");














mysql_query("update  `transaction_ledger` set `outstanding`='3826.00', `a_od_int`='0',`a_tot_od`='492.34',`a_od_pr`='492.34' where `accountno`='BL1737' and `cal_date`='2016-10-20'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='492.34',`amount_topay`='3826.00',`od_cal_date`='2016-10-20' where `loan_accno`='BL1737'");
mysql_query("update  `transaction_ledger` set `outstanding`='19127.00', `a_od_int`='0',`a_tot_od`='2460.66',`a_od_pr`='2460.66' where `accountno`='BL1735' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2460.66',`amount_topay`='19127.00',`od_cal_date`='2016-10-08' where `loan_accno`='BL1735'");
mysql_query("update  `transaction_ledger` set `outstanding`='17382.00', `a_od_int`='419',`a_tot_od`='16665.354545455',`a_od_pr`='16246.354545455' where `accountno`='BL1505' and `cal_date`='2016-10-10'");

mysql_query("update  `businessloan` set `odintrest`='419',`odprincipal`='16246.354545455',`amount_topay`='17382.00',`od_cal_date`='2016-10-10' where `loan_accno`='BL1505'");
mysql_query("update  `transaction_ledger` set `outstanding`='36956.00', `a_od_int`='0',`a_tot_od`='4228.72',`a_od_pr`='4228.72' where `accountno`='BL1799' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4228.72',`amount_topay`='36956.00',`od_cal_date`='2016-10-07' where `loan_accno`='BL1799'");
mysql_query("update  `transaction_ledger` set `outstanding`='27838.00', `a_od_int`='838',`a_tot_od`='3893.397826087',`a_od_pr`='3055.397826087' where `accountno`='BL1717' and `cal_date`='2016-10-12'");

mysql_query("update  `businessloan` set `odintrest`='838',`odprincipal`='3055.397826087',`amount_topay`='27838.00',`od_cal_date`='2016-10-12' where `loan_accno`='BL1717'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='2248',`a_tot_od`='10581.346666667',`a_od_pr`='8333.3466666667' where `accountno`='BL1703' and `cal_date`='2016-10-21'");

mysql_query("update  `businessloan` set `odintrest`='2248',`odprincipal`='8333.3466666667',`amount_topay`='20000.00',`od_cal_date`='2016-10-21' where `loan_accno`='BL1703'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='3017',`a_tot_od`='21198.803636364',`a_od_pr`='18181.803636364' where `accountno`='BL1691' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='3017',`odprincipal`='18181.803636364',`amount_topay`='40000.00',`od_cal_date`='2016-10-08' where `loan_accno`='BL1691'");
mysql_query("update  `transaction_ledger` set `outstanding`='47273.00', `a_od_int`='855',`a_tot_od`='13345.383043478',`a_od_pr`='12490.383043478' where `accountno`='BL1621' and `cal_date`='2016-10-21'");

mysql_query("update  `businessloan` set `odintrest`='855',`odprincipal`='12490.383043478',`amount_topay`='47273.00',`od_cal_date`='2016-10-21' where `loan_accno`='BL1621'");
mysql_query("update  `transaction_ledger` set `outstanding`='20107.00', `a_od_int`='364',`a_tot_od`='2139.3266666667',`a_od_pr`='1775.3266666667' where `accountno`='BL1636' and `cal_date`='2016-10-10'");

mysql_query("update  `businessloan` set `odintrest`='364',`odprincipal`='1775.3266666667',`amount_topay`='20107.00',`od_cal_date`='2016-10-10' where `loan_accno`='BL1636'");
mysql_query("update  `transaction_ledger` set `outstanding`='80000.00', `a_od_int`='583',`a_tot_od`='583',`a_od_pr`='0' where `accountno`='EL1870' and `cal_date`='2016-10-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='583',`odprincipal`='0',`amount_topay`='80000.00',`od_cal_date`='2016-10-15' where `loan_accno`='EL1870'");
mysql_query("update  `transaction_ledger` set `outstanding`='88930.00', `a_od_int`='1681',`a_tot_od`='29500.115555556',`a_od_pr`='27819.115555556' where `accountno`='EL1603' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1681',`odprincipal`='27819.115555556',`amount_topay`='88930.00',`od_cal_date`='2016-10-13' where `loan_accno`='EL1603'");
mysql_query("update  `transaction_ledger` set `outstanding`='58401.00', `a_od_int`='6735',`a_tot_od`='36937.871764706',`a_od_pr`='30202.871764706' where `accountno`='EL1550' and `cal_date`='2016-10-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='6735',`odprincipal`='30202.871764706',`amount_topay`='58401.00',`od_cal_date`='2016-10-10' where `loan_accno`='EL1550'");
mysql_query("update  `transaction_ledger` set `outstanding`='54065.00', `a_od_int`='0',`a_tot_od`='17396.65',`a_od_pr`='17396.65' where `accountno`='EL1444' and `cal_date`='2016-10-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='17396.65',`amount_topay`='54065.00',`od_cal_date`='2016-10-12' where `loan_accno`='EL1444'");
mysql_query("update  `transaction_ledger` set `outstanding`='64315.00', `a_od_int`='0',`a_tot_od`='30978.89',`a_od_pr`='30978.89' where `accountno`='EL1436' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='30978.89',`amount_topay`='64315.00',`od_cal_date`='2016-10-13' where `loan_accno`='EL1436'");
mysql_query("update  `transaction_ledger` set `outstanding`='6199.00', `a_od_int`='92',`a_tot_od`='92',`a_od_pr`='0' where `accountno`='DL1707' and `cal_date`='2016-10-20'");

mysql_query("update  `demand_loan` set `odintrest`='92',`odprincipal`='0',`amount_topay`='6199.00',`od_cal_date`='2016-10-20' where `loan_accno`='DL1707'");
mysql_query("update  `transaction_ledger` set `outstanding`='35000.00', `a_od_int`='618',`a_tot_od`='618',`a_od_pr`='0' where `accountno`='DL1709' and `cal_date`='2016-10-18'");

mysql_query("update  `demand_loan` set `odintrest`='618',`odprincipal`='0',`amount_topay`='35000.00',`od_cal_date`='2016-10-18' where `loan_accno`='DL1709'");
mysql_query("update  `transaction_ledger` set `outstanding`='5000.00', `a_od_int`='148',`a_tot_od`='148',`a_od_pr`='0' where `accountno`='DL1711' and `cal_date`='2016-10-13'");

mysql_query("update  `demand_loan` set `odintrest`='148',`odprincipal`='0',`amount_topay`='5000.00',`od_cal_date`='2016-10-13' where `loan_accno`='DL1711'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='7693',`a_tot_od`='7693',`a_od_pr`='0' where `accountno`='DL1714' and `cal_date`='2016-10-20'");

mysql_query("update  `demand_loan` set `odintrest`='7693',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-10-20' where `loan_accno`='DL1714'");
mysql_query("update  `transaction_ledger` set `outstanding`='4000.00', `a_od_int`='266',`a_tot_od`='266',`a_od_pr`='0' where `accountno`='DL1730' and `cal_date`='2016-10-12'");

mysql_query("update  `demand_loan` set `odintrest`='266',`odprincipal`='0',`amount_topay`='4000.00',`od_cal_date`='2016-10-12' where `loan_accno`='DL1730'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='399',`a_tot_od`='2899',`a_od_pr`='2500.00' where `accountno`='GL1419' and `cal_date`='2016-10-15'");

mysql_query("update  `goldloan` set `odintrest`='399',`odprincipal`='2500.00',`amount_topay`='2500.00',`od_cal_date`='2016-10-15' where `loan_accno`='GL1419'");











mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='136', `b_od_pri`='2260',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2260', `outstanding`='5013',`a_od_int`='0',`a_tot_od`='2740.8272727273',`a_od_pr`='2740.8272727273',`collection`='2396.00',`coll_date`='2016-10-13' where `accountno`='BL1522' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2740.8272727273',`amount_topay`='5013',`last_refund_date`='2016-10-13',`last_refund_amt`='2396.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1522'");

mysql_query("UPDATE   `transaction` set `amount`='2260',`details`='businessloan Refund' where `accountno`='BL1522' and `date`='2016-10-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='136',`details`='businessloan Interest' where `accountno`='BL1522' and `date`='2016-10-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='511', `b_od_pri`='4962',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4962', `outstanding`='21194',`a_od_int`='0',`a_tot_od`='6194',`a_od_pr`='6194',`collection`='5473.00',`coll_date`='2016-10-20' where `accountno`='EL1602' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6194',`amount_topay`='21194',`last_refund_date`='2016-10-20',`last_refund_amt`='5473.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='4962',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-10-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='511',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-10-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='105', `b_od_pri`='905',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='905', `outstanding`='4701',`a_od_int`='0',`a_tot_od`='1973.7209090909',`a_od_pr`='1973.7209090909',`collection`='1010.00',`coll_date`='2016-10-24' where `accountno`='BL1641' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1973.7209090909',`amount_topay`='4701',`last_refund_date`='2016-10-24',`last_refund_amt`='1010.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='905',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-10-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='105',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-10-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='137', `b_od_pri`='1623',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1623', `outstanding`='5731',`a_od_int`='0',`a_tot_od`='2398.6866666667',`a_od_pr`='2398.6866666667',`collection`='1760.00',`coll_date`='2016-10-15' where `accountno`='BL1502' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2398.6866666667',`amount_topay`='5731',`last_refund_date`='2016-10-15',`last_refund_amt`='1760.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='1623',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-10-15' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='137',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-10-15' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1139', `b_od_pri`='1731.02',`b_cur_pri`='2364.98',`a_pre_pri`='0',`tot_pr`='4096', `outstanding`='51771',`a_od_int`='0',`a_tot_od`='1801.6866666667',`a_od_pr`='1801.6866666667',`collection`='5235.00',`coll_date`='2016-10-31' where `accountno`='EL1438' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='1801.6866666667',`amount_topay`='51771',`last_refund_date`='2016-10-31',`last_refund_amt`='5235.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='4096',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1139',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-10-31' and `interest`>0 ");








mysql_query("update  `transaction_ledger` set `outstanding`='1377.00', `a_od_int`='0',`a_tot_od`='1245.68',`a_od_pr`='1245.68' where `accountno`='BL1484' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1245.68',`amount_topay`='1377.00',`od_cal_date`='2016-10-08' where `loan_accno`='BL1484'");

mysql_query("update  `transaction_ledger` set `outstanding`='84955.00', `a_od_int`='0',`a_tot_od`='5788.34',`a_od_pr`='5788.34' where `accountno`='EL1698' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5788.34',`amount_topay`='84955.00',`od_cal_date`='2016-10-13' where `loan_accno`='EL1698'");
?>