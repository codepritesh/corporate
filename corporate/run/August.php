<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);




mysql_query("update  `transaction_ledger` set `b_od_int`='505',`b_cur_int`='382', `b_od_pri`='1793',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1793', `outstanding`='23207',`a_od_int`='0',`a_tot_od`='2752.4545454545',`a_od_pr`='2752.4545454545',`collection`='2680.00',`coll_date`='2016-08-22' where `accountno`='BL1772' and `cal_date`='2016-08-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2752.4545454545',`amount_topay`='23207',`last_refund_date`='2016-08-22',`last_refund_amt`='2680.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='BL1772'");

mysql_query("UPDATE   `transaction` set `amount`='1793',`details`='businessloan Refund' where `accountno`='BL1772' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='887',`details`='businessloan Interest' where `accountno`='BL1772' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='710', `b_od_pri`='2162',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2162', `outstanding`='44260',`a_od_int`='0',`a_tot_od`='5129.5630434783',`a_od_pr`='5129.5630434783',`collection`='2872.00',`coll_date`='2016-08-30' where `accountno`='BL1679' and `cal_date`='2016-08-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5129.5630434783',`amount_topay`='44260',`last_refund_date`='2016-08-30',`last_refund_amt`='2872.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2162',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='710',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='585', `b_od_pri`='2345',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2345', `outstanding`='35914',`a_od_int`='0',`a_tot_od`='2972.8211764706',`a_od_pr`='2972.8211764706',`collection`='2930.00',`coll_date`='2016-08-12' where `accountno`='BL1734' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2972.8211764706',`amount_topay`='35914',`last_refund_date`='2016-08-12',`last_refund_amt`='2930.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='2345',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-08-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='585',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-08-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='94.00',`b_cur_int`='97', `b_od_pri`='1393.45',`b_cur_pri`='636.36363636364',`a_pre_pri`='79.186363636364',`tot_pr`='2109', `outstanding`='3103',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2300.00',`coll_date`='2016-08-17' where `accountno`='BL1590' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='3103',`last_refund_date`='2016-08-17',`last_refund_amt`='2300.00', `od_cal_date`='2016-08-21',`loancomplited`='0' where `loan_accno`='BL1590'");

mysql_query("UPDATE   `transaction` set `amount`='2109',`details`='businessloan Refund' where `accountno`='BL1590' and `date`='2016-08-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='191',`details`='businessloan Interest' where `accountno`='BL1590' and `date`='2016-08-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='764',`b_cur_int`='764', `b_od_pri`='3782',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3782', `outstanding`='46218',`a_od_int`='0',`a_tot_od`='9854.3645454545',`a_od_pr`='9854.3645454545',`collection`='5310.00',`coll_date`='2016-08-09' where `accountno`='BL1767' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9854.3645454545',`amount_topay`='46218',`last_refund_date`='2016-08-09',`last_refund_amt`='5310.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3782',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1528',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-08-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='279', `b_od_pri`='1811',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1811', `outstanding`='13122',`a_od_int`='0',`a_tot_od`='4031.0818181818',`a_od_pr`='4031.0818181818',`collection`='2090.00',`coll_date`='2016-08-25' where `accountno`='BL1643' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4031.0818181818',`amount_topay`='13122',`last_refund_date`='2016-08-25',`last_refund_amt`='2090.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1811',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-08-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='279',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-08-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='444',`b_cur_int`='306', `b_od_pri`='870',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='870', `outstanding`='19130',`a_od_int`='0',`a_tot_od`='1482.9411764706',`a_od_pr`='1482.9411764706',`collection`='1620.00',`coll_date`='2016-08-11' where `accountno`='BL1753' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1482.9411764706',`amount_topay`='19130',`last_refund_date`='2016-08-11',`last_refund_amt`='1620.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1753'");

mysql_query("UPDATE   `transaction` set `amount`='870',`details`='businessloan Refund' where `accountno`='BL1753' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='750',`details`='businessloan Interest' where `accountno`='BL1753' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='3102',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3102', `outstanding`='21856',`a_od_int`='0',`a_tot_od`='2765.1',`a_od_pr`='2765.1',`collection`='3102.00',`coll_date`='2016-08-11' where `accountno`='BL1692' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2765.1',`amount_topay`='21856',`last_refund_date`='2016-08-11',`last_refund_amt`='3102.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='3102',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='283', `b_od_pri`='1813',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1813', `outstanding`='16675',`a_od_int`='0',`a_tot_od`='2129.5418181818',`a_od_pr`='2129.5418181818',`collection`='2096.00',`coll_date`='2016-08-23' where `accountno`='BL1724' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2129.5418181818',`amount_topay`='16675',`last_refund_date`='2016-08-23',`last_refund_amt`='2096.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1724'");

mysql_query("UPDATE   `transaction` set `amount`='1813',`details`='businessloan Refund' where `accountno`='BL1724' and `date`='2016-08-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='283',`details`='businessloan Interest' where `accountno`='BL1724' and `date`='2016-08-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='70',`b_cur_int`='70', `b_od_pri`='385',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='385', `outstanding`='4223',`a_od_int`='0',`a_tot_od`='586.64090909091',`a_od_pr`='586.64090909091',`collection`='525.00',`coll_date`='2016-08-19' where `accountno`='BL1715' and `cal_date`='2016-08-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='586.64090909091',`amount_topay`='4223',`last_refund_date`='2016-08-19',`last_refund_amt`='525.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='BL1715'");

mysql_query("UPDATE   `transaction` set `amount`='385',`details`='businessloan Refund' where `accountno`='BL1715' and `date`='2016-08-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='140',`details`='businessloan Interest' where `accountno`='BL1715' and `date`='2016-08-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='305',`b_cur_int`='305', `b_od_pri`='2390',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2390', `outstanding`='13952',`a_od_int`='0',`a_tot_od`='4861.3645454545',`a_od_pr`='4861.3645454545',`collection`='3000.00',`coll_date`='2016-08-11' where `accountno`='BL1572' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4861.3645454545',`amount_topay`='13952',`last_refund_date`='2016-08-11',`last_refund_amt`='3000.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1572'");

mysql_query("UPDATE   `transaction` set `amount`='2390',`details`='businessloan Refund' where `accountno`='BL1572' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='610',`details`='businessloan Interest' where `accountno`='BL1572' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='270', `b_od_pri`='1170',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1170', `outstanding`='13278',`a_od_int`='0',`a_tot_od`='1512.8205882353',`a_od_pr`='1512.8205882353',`collection`='1440.00',`coll_date`='2016-08-22' where `accountno`='BL1575' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1512.8205882353',`amount_topay`='13278',`last_refund_date`='2016-08-22',`last_refund_amt`='1440.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1170',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='270',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='180',`b_cur_int`='122', `b_od_pri`='291',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='291', `outstanding`='7709',`a_od_int`='0',`a_tot_od`='1120.7682352941',`a_od_pr`='1120.7682352941',`collection`='593.00',`coll_date`='2016-08-29' where `accountno`='BL1760' and `cal_date`='2016-08-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1120.7682352941',`amount_topay`='7709',`last_refund_date`='2016-08-29',`last_refund_amt`='593.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='BL1760'");

mysql_query("UPDATE   `transaction` set `amount`='291',`details`='businessloan Refund' where `accountno`='BL1760' and `date`='2016-08-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='302',`details`='businessloan Interest' where `accountno`='BL1760' and `date`='2016-08-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='412', `b_od_pri`='1758',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1758', `outstanding`='25176',`a_od_int`='0',`a_tot_od`='3999.5358823529',`a_od_pr`='3999.5358823529',`collection`='2170.00',`coll_date`='2016-08-26' where `accountno`='BL1690' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3999.5358823529',`amount_topay`='25176',`last_refund_date`='2016-08-26',`last_refund_amt`='2170.00', `od_cal_date`='2016-09-21',`loancomplited`='0' where `loan_accno`='BL1690'");

mysql_query("UPDATE   `transaction` set `amount`='1758',`details`='businessloan Refund' where `accountno`='BL1690' and `date`='2016-08-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='412',`details`='businessloan Interest' where `accountno`='BL1690' and `date`='2016-08-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='225', `b_od_pri`='1660',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1660', `outstanding`='10367',`a_od_int`='0',`a_tot_od`='2034.0066666667',`a_od_pr`='2034.0066666667',`collection`='1885.00',`coll_date`='2016-08-29' where `accountno`='BL1613' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2034.0066666667',`amount_topay`='10367',`last_refund_date`='2016-08-29',`last_refund_amt`='1885.00', `od_cal_date`='2016-09-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1660',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-08-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='225',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-08-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='226',`b_cur_int`='229', `b_od_pri`='708',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='708', `outstanding`='14292',`a_od_int`='0',`a_tot_od`='1939.0629411765',`a_od_pr`='1939.0629411765',`collection`='1163.00',`coll_date`='2016-08-13' where `accountno`='BL1748' and `cal_date`='2016-08-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1939.0629411765',`amount_topay`='14292',`last_refund_date`='2016-08-13',`last_refund_amt`='1163.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `amount`='708',`details`='businessloan Refund' where `accountno`='BL1748' and `date`='2016-08-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='455',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-08-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='368', `b_od_pri`='2732',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2732', `outstanding`='16947',`a_od_int`='0',`a_tot_od`='3310.6327272727',`a_od_pr`='3310.6327272727',`collection`='3100.00',`coll_date`='2016-08-29' where `accountno`='BL1616' and `cal_date`='2016-08-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3310.6327272727',`amount_topay`='16947',`last_refund_date`='2016-08-29',`last_refund_amt`='3100.00', `od_cal_date`='2016-09-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2732',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-08-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='368',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-08-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='71', `b_od_pri`='424',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='424', `outstanding`='4226',`a_od_int`='0',`a_tot_od`='475.99666666667',`a_od_pr`='475.99666666667',`collection`='495.00',`coll_date`='2016-08-22' where `accountno`='BL1737' and `cal_date`='2016-08-20'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='475.99666666667',`amount_topay`='4226',`last_refund_date`='2016-08-22',`last_refund_amt`='495.00', `od_cal_date`='2016-09-20',`loancomplited`='0' where `loan_accno`='BL1737'");

mysql_query("UPDATE   `transaction` set `amount`='424',`details`='businessloan Refund' where `accountno`='BL1737' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='71',`details`='businessloan Interest' where `accountno`='BL1737' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='355', `b_od_pri`='2085',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2085', `outstanding`='21140',`a_od_int`='0',`a_tot_od`='2390.0033333333',`a_od_pr`='2390.0033333333',`collection`='2440.00',`coll_date`='2016-08-11' where `accountno`='BL1735' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2390.0033333333',`amount_topay`='21140',`last_refund_date`='2016-08-11',`last_refund_amt`='2440.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1735'");

mysql_query("UPDATE   `transaction` set `amount`='2085',`details`='businessloan Refund' where `accountno`='BL1735' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='355',`details`='businessloan Interest' where `accountno`='BL1735' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='237',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='40000',`a_od_int`='612',`a_tot_od`='7884.7272727273',`a_od_pr`='7272.7272727273',`collection`='237.00',`coll_date`='2016-08-12' where `accountno`='BL1799' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='612',`odprincipal`='7272.7272727273',`amount_topay`='40000',`last_refund_date`='2016-08-12',`last_refund_amt`='237.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1799'");

mysql_query("UPDATE   `transaction` set `interest`='237',`details`='businessloan Interest' where `accountno`='BL1799' and `date`='2016-08-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='276',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='20000',`a_od_int`='306',`a_tot_od`='2658.9411764706',`a_od_pr`='2352.9411764706',`collection`='276.00',`coll_date`='2016-08-29' where `accountno`='BL1789' and `cal_date`='2016-08-15'");

mysql_query("update  `businessloan` set `odintrest`='306',`odprincipal`='2352.9411764706',`amount_topay`='20000',`last_refund_date`='2016-08-29',`last_refund_amt`='276.00', `od_cal_date`='2016-09-15',`loancomplited`='0' where `loan_accno`='BL1789'");

mysql_query("UPDATE   `transaction` set `interest`='276',`details`='businessloan Interest' where `accountno`='BL1789' and `date`='2016-08-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='764',`b_cur_int`='764', `b_od_pri`='3782',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3782', `outstanding`='46218',`a_od_int`='0',`a_tot_od`='9854.3645454545',`a_od_pr`='9854.3645454545',`collection`='5310.00',`coll_date`='2016-08-09' where `accountno`='BL1767' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9854.3645454545',`amount_topay`='46218',`last_refund_date`='2016-08-09',`last_refund_amt`='5310.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3782',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1528',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-08-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='457.00',`b_cur_int`='0', `b_od_pri`='2733',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2733', `outstanding`='27267',`a_od_int`='0',`a_tot_od`='2721.55',`a_od_pr`='2721.55',`collection`='3190.00',`coll_date`='2016-08-06' where `accountno`='BL1761' and `cal_date`='2016-08-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2721.55',`amount_topay`='27267',`last_refund_date`='2016-08-06',`last_refund_amt`='3190.00', `od_cal_date`='2016-08-10',`loancomplited`='0' where `loan_accno`='BL1761'");

mysql_query("UPDATE   `transaction` set `amount`='2733',`details`='businessloan Refund' where `accountno`='BL1761' and `date`='2016-08-06' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='457',`details`='businessloan Interest' where `accountno`='BL1761' and `date`='2016-08-06' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='710', `b_od_pri`='2162',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2162', `outstanding`='44260',`a_od_int`='0',`a_tot_od`='5129.5630434783',`a_od_pr`='5129.5630434783',`collection`='2872.00',`coll_date`='2016-08-30' where `accountno`='BL1679' and `cal_date`='2016-08-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5129.5630434783',`amount_topay`='44260',`last_refund_date`='2016-08-30',`last_refund_amt`='2872.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2162',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='710',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='418', `b_od_pri`='2722',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2722', `outstanding`='19675',`a_od_int`='0',`a_tot_od`='6038.6327272727',`a_od_pr`='6038.6327272727',`collection`='3140.00',`coll_date`='2016-08-09' where `accountno`='BL1642' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6038.6327272727',`amount_topay`='19675',`last_refund_date`='2016-08-09',`last_refund_amt`='3140.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2722',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='418',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-08-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='74', `b_od_pri`='531',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='531', `outstanding`='3406',`a_od_int`='0',`a_tot_od`='678.71454545455',`a_od_pr`='678.71454545455',`collection`='605.00',`coll_date`='2016-08-19' where `accountno`='BL1628' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='678.71454545455',`amount_topay`='3406',`last_refund_date`='2016-08-19',`last_refund_amt`='605.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='531',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-08-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='74',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-08-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='476',`b_cur_int`='476', `b_od_pri`='3301',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3301', `outstanding`='22179',`a_od_int`='0',`a_tot_od`='2180.6633333333',`a_od_pr`='2180.6633333333',`collection`='4253.00',`coll_date`='2016-08-11' where `accountno`='BL1636' and `cal_date`='2016-08-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2180.6633333333',`amount_topay`='22179',`last_refund_date`='2016-08-11',`last_refund_amt`='4253.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='BL1636'");

mysql_query("UPDATE   `transaction` set `amount`='3301',`details`='businessloan Refund' where `accountno`='BL1636' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='952',`details`='businessloan Interest' where `accountno`='BL1636' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='137', `b_od_pri`='908',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='908', `outstanding`='6398',`a_od_int`='0',`a_tot_od`='943.45090909091',`a_od_pr`='943.45090909091',`collection`='1045.00',`coll_date`='2016-08-11' where `accountno`='BL1641' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='943.45090909091',`amount_topay`='6398',`last_refund_date`='2016-08-11',`last_refund_amt`='1045.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='908',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='137',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='418', `b_od_pri`='2722',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2722', `outstanding`='19675',`a_od_int`='0',`a_tot_od`='6038.6327272727',`a_od_pr`='6038.6327272727',`collection`='3140.00',`coll_date`='2016-08-09' where `accountno`='BL1642' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6038.6327272727',`amount_topay`='19675',`last_refund_date`='2016-08-09',`last_refund_amt`='3140.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2722',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='418',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-08-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='279', `b_od_pri`='1811',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1811', `outstanding`='13122',`a_od_int`='0',`a_tot_od`='4031.0818181818',`a_od_pr`='4031.0818181818',`collection`='2090.00',`coll_date`='2016-08-25' where `accountno`='BL1643' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4031.0818181818',`amount_topay`='13122',`last_refund_date`='2016-08-25',`last_refund_amt`='2090.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1811',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-08-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='279',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-08-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1091',`b_cur_int`='1091', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='52765',`a_od_int`='0',`a_tot_od`='15751.884117647',`a_od_pr`='15751.884117647',`collection`='5266.00',`coll_date`='2016-08-30' where `accountno`='EL1560' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.884117647',`amount_topay`='52765',`last_refund_date`='2016-08-30',`last_refund_amt`='5266.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2182',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1684', `b_od_pri`='4932',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4932', `outstanding`='81282',`a_od_int`='0',`a_tot_od`='6282.0066666667',`a_od_pr`='6282.0066666667',`collection`='6616.00',`coll_date`='2016-08-19' where `accountno`='EL1632' and `cal_date`='2016-08-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6282.0066666667',`amount_topay`='81282',`last_refund_date`='2016-08-19',`last_refund_amt`='6616.00', `od_cal_date`='2016-09-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4932',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-08-19' and `amount`>0 ");


mysql_query("INSERT into `transaction` set `transactionid`='1479819047',`interest`='1684',`details`='enterpriseloan Interest',`accountno`='EL1632',`date`='2016-08-19' ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1559',`b_cur_int`='1559', `b_od_pri`='4405',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4405', `outstanding`='75383',`a_od_int`='0',`a_tot_od`='22504.115882353',`a_od_pr`='22504.115882353',`collection`='7523.00',`coll_date`='2016-08-30' where `accountno`='EL1559' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22504.115882353',`amount_topay`='75383',`last_refund_date`='2016-08-30',`last_refund_amt`='7523.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4405',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3118',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1091',`b_cur_int`='1091', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='52765',`a_od_int`='0',`a_tot_od`='15751.884117647',`a_od_pr`='15751.884117647',`collection`='5266.00',`coll_date`='2016-08-30' where `accountno`='EL1560' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.884117647',`amount_topay`='52765',`last_refund_date`='2016-08-30',`last_refund_amt`='5266.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2182',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1309', `b_od_pri`='4132',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4132', `outstanding`='60073',`a_od_int`='0',`a_tot_od`='5908.0066666667',`a_od_pr`='5908.0066666667',`collection`='5441.00',`coll_date`='2016-08-30' where `accountno`='EL1439' and `cal_date`='2016-08-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5908.0066666667',`amount_topay`='60073',`last_refund_date`='2016-08-30',`last_refund_amt`='5441.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4132',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1309',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1308', `b_od_pri`='4133',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4133', `outstanding`='60057',`a_od_int`='0',`a_tot_od`='5903.0066666667',`a_od_pr`='5903.0066666667',`collection`='5441.00',`coll_date`='2016-08-30' where `accountno`='EL1440' and `cal_date`='2016-08-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5903.0066666667',`amount_topay`='60057',`last_refund_date`='2016-08-30',`last_refund_amt`='5441.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4133',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1308',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1570', `b_od_pri`='4321',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4321', `outstanding`='92946',`a_od_int`='0',`a_tot_od`='10337.306086957',`a_od_pr`='10337.306086957',`collection`='5891.00',`coll_date`='2016-08-30' where `accountno`='EL1726' and `cal_date`='2016-08-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10337.306086957',`amount_topay`='92946',`last_refund_date`='2016-08-30',`last_refund_amt`='5891.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='EL1726'");

mysql_query("UPDATE   `transaction` set `amount`='4321',`details`='enterpriseloan Refund' where `accountno`='EL1726' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1570',`details`='enterpriseloan Interest' where `accountno`='EL1726' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1684', `b_od_pri`='4932',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4932', `outstanding`='81282',`a_od_int`='0',`a_tot_od`='6282.0066666667',`a_od_pr`='6282.0066666667',`collection`='6616.00',`coll_date`='2016-08-19' where `accountno`='EL1632' and `cal_date`='2016-08-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6282.0066666667',`amount_topay`='81282',`last_refund_date`='2016-08-19',`last_refund_amt`='6616.00', `od_cal_date`='2016-09-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4932',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-08-19' and `amount`>0 ");


mysql_query("INSERT into `transaction` set `transactionid`='1479819047',`interest`='1684',`details`='enterpriseloan Interest',`accountno`='EL1632',`date`='2016-08-19' ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1410',`b_cur_int`='1410', `b_od_pri`='4400',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4400', `outstanding`='67790',`a_od_int`='0',`a_tot_od`='14902.115882353',`a_od_pr`='14902.115882353',`collection`='7220.00',`coll_date`='2016-08-22' where `accountno`='EL1511' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='14902.115882353',`amount_topay`='67790',`last_refund_date`='2016-08-22',`last_refund_amt`='7220.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("UPDATE   `transaction` set `amount`='4400',`details`='enterpriseloan Refund' where `accountno`='EL1511' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2820',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2005',`b_cur_int`='1130', `b_od_pri`='2113',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2113', `outstanding`='67887',`a_od_int`='0',`a_tot_od`='10239.937058824',`a_od_pr`='10239.937058824',`collection`='5248.00',`coll_date`='2016-08-29' where `accountno`='EL1757' and `cal_date`='2016-08-21'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10239.937058824',`amount_topay`='67887',`last_refund_date`='2016-08-29',`last_refund_amt`='5248.00', `od_cal_date`='2016-09-21',`loancomplited`='0' where `loan_accno`='EL1757'");

mysql_query("UPDATE   `transaction` set `amount`='2113',`details`='enterpriseloan Refund' where `accountno`='EL1757' and `date`='2016-08-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3135',`details`='enterpriseloan Interest' where `accountno`='EL1757' and `date`='2016-08-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='5256',`b_cur_int`='1744', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='90674',`a_od_int`='27',`a_tot_od`='29590.341111111',`a_od_pr`='29563.341111111',`collection`='7000.00',`coll_date`='2016-08-29' where `accountno`='EL1603' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='27',`odprincipal`='29563.341111111',`amount_topay`='90674',`last_refund_date`='2016-08-29',`last_refund_amt`='7000.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1603'");

mysql_query("UPDATE   `transaction` set `interest`='7000',`details`='enterpriseloan Interest' where `accountno`='EL1603' and `date`='2016-08-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1091',`b_cur_int`='1091', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='52765',`a_od_int`='0',`a_tot_od`='15751.884117647',`a_od_pr`='15751.884117647',`collection`='5266.00',`coll_date`='2016-08-30' where `accountno`='EL1560' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.884117647',`amount_topay`='52765',`last_refund_date`='2016-08-30',`last_refund_amt`='5266.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2182',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1559',`b_cur_int`='1559', `b_od_pri`='4405',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4405', `outstanding`='75383',`a_od_int`='0',`a_tot_od`='22504.115882353',`a_od_pr`='22504.115882353',`collection`='7523.00',`coll_date`='2016-08-30' where `accountno`='EL1559' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22504.115882353',`amount_topay`='75383',`last_refund_date`='2016-08-30',`last_refund_amt`='7523.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4405',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3118',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1410',`b_cur_int`='1410', `b_od_pri`='4400',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4400', `outstanding`='67790',`a_od_int`='0',`a_tot_od`='14902.115882353',`a_od_pr`='14902.115882353',`collection`='7220.00',`coll_date`='2016-08-22' where `accountno`='EL1511' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='14902.115882353',`amount_topay`='67790',`last_refund_date`='2016-08-22',`last_refund_amt`='7220.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("UPDATE   `transaction` set `amount`='4400',`details`='enterpriseloan Refund' where `accountno`='EL1511' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2820',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1308', `b_od_pri`='4133',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4133', `outstanding`='60057',`a_od_int`='0',`a_tot_od`='5903.0066666667',`a_od_pr`='5903.0066666667',`collection`='5441.00',`coll_date`='2016-08-30' where `accountno`='EL1440' and `cal_date`='2016-08-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5903.0066666667',`amount_topay`='60057',`last_refund_date`='2016-08-30',`last_refund_amt`='5441.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4133',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1308',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1309', `b_od_pri`='4132',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4132', `outstanding`='60073',`a_od_int`='0',`a_tot_od`='5908.0066666667',`a_od_pr`='5908.0066666667',`collection`='5441.00',`coll_date`='2016-08-30' where `accountno`='EL1439' and `cal_date`='2016-08-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5908.0066666667',`amount_topay`='60073',`last_refund_date`='2016-08-30',`last_refund_amt`='5441.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4132',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1309',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='113', `b_od_pri`='727',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='727', `outstanding`='6661',`a_od_int`='0',`a_tot_od`='1570.0927272727',`a_od_pr`='1570.0927272727',`collection`='840.00',`coll_date`='2016-08-11' where `accountno`='GRL1706' and `cal_date`='2016-08-10'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1570.0927272727',`amount_topay`='6661',`last_refund_date`='2016-08-11',`last_refund_amt`='840.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='GRL1706'");

mysql_query("UPDATE   `transaction` set `amount`='727',`details`='grouploan Refund' where `accountno`='GRL1706' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='113',`details`='grouploan Interest' where `accountno`='GRL1706' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='535.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='35000',`a_od_int`='635',`a_tot_od`='635',`a_od_pr`='0',`collection`='535.00',`coll_date`='2016-08-30' where `accountno`='DL1709' and `cal_date`='2016-08-18'");

mysql_query("update  `demand_loan` set `odintrest`='635',`odprincipal`='0',`amount_topay`='35000',`last_refund_date`='2016-08-30',`last_refund_amt`='535.00', `od_cal_date`='2016-09-18',`loancomplited`='0' where `loan_accno`='DL1709'");

mysql_query("UPDATE   `transaction` set `interest`='535',`details`='demand_loan Interest' where `accountno`='DL1709' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='74.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='5000',`a_od_int`='76',`a_tot_od`='76',`a_od_pr`='0',`collection`='74.00',`coll_date`='2016-08-11' where `accountno`='DL1711' and `cal_date`='2016-08-13'");

mysql_query("update  `demand_loan` set `odintrest`='76',`odprincipal`='0',`amount_topay`='5000',`last_refund_date`='2016-08-11',`last_refund_amt`='74.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='DL1711'");

mysql_query("UPDATE   `transaction` set `interest`='74',`details`='demand_loan Interest' where `accountno`='DL1711' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='151', `b_od_pri`='0.00',`b_cur_pri`='833.33333333333',`a_pre_pri`='15.666666666667',`tot_pr`='849', `outstanding`='6566',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1000.00',`coll_date`='2016-08-12' where `accountno`='AL1454' and `cal_date`='2016-08-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='6566',`last_refund_date`='2016-08-12',`last_refund_amt`='1000.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='849',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-08-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='151',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-08-12' and `interest`>0 ");









mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='928',`a_tot_od`='5633.88',`a_od_pr`='4705.88' where `accountno`='BL1755' and `cal_date`='2016-08-13'");

mysql_query("update  `businessloan` set `odintrest`='928',`odprincipal`='4705.88',`amount_topay`='40000.00',`od_cal_date`='2016-08-13' where `loan_accno`='BL1755'");
mysql_query("update  `transaction_ledger` set `outstanding`='12446.00', `a_od_int`='0',`a_tot_od`='2439.86',`a_od_pr`='2439.86' where `accountno`='BL1512' and `cal_date`='2016-08-15'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2439.86',`amount_topay`='12446.00',`od_cal_date`='2016-08-15' where `loan_accno`='BL1512'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='928',`a_tot_od`='5633.88',`a_od_pr`='4705.88' where `accountno`='BL1755' and `cal_date`='2016-08-13'");

mysql_query("update  `businessloan` set `odintrest`='928',`odprincipal`='4705.88',`amount_topay`='40000.00',`od_cal_date`='2016-08-13' where `loan_accno`='BL1755'");
mysql_query("update  `transaction_ledger` set `outstanding`='27838.00', `a_od_int`='0',`a_tot_od`='1751.05',`a_od_pr`='1751.05' where `accountno`='BL1717' and `cal_date`='2016-08-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1751.05',`amount_topay`='27838.00',`od_cal_date`='2016-08-12' where `loan_accno`='BL1717'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='1124',`a_tot_od`='6124.0066666667',`a_od_pr`='5000.0066666667' where `accountno`='BL1703' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='1124',`odprincipal`='5000.0066666667',`amount_topay`='20000.00',`od_cal_date`='2016-08-21' where `loan_accno`='BL1703'");
mysql_query("update  `transaction_ledger` set `outstanding`='18488.00', `a_od_int`='0',`a_tot_od`='2124.36',`a_od_pr`='2124.36' where `accountno`='BL1702' and `cal_date`='2016-08-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2124.36',`amount_topay`='18488.00',`od_cal_date`='2016-08-06' where `loan_accno`='BL1702'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='1813',`a_tot_od`='16358.453636364',`a_od_pr`='14545.453636364' where `accountno`='BL1691' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='1813',`odprincipal`='14545.453636364',`amount_topay`='40000.00',`od_cal_date`='2016-08-08' where `loan_accno`='BL1691'");
mysql_query("update  `transaction_ledger` set `outstanding`='47376.00', `a_od_int`='885',`a_tot_od`='9130.5630434783',`a_od_pr`='8245.5630434783' where `accountno`='BL1621' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='885',`odprincipal`='8245.5630434783',`amount_topay`='47376.00',`od_cal_date`='2016-08-21' where `loan_accno`='BL1621'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='3181',`a_tot_od`='21362.82',`a_od_pr`='18181.82' where `accountno`='EL1712' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='3181',`odprincipal`='18181.82',`amount_topay`='100000.00',`od_cal_date`='2016-08-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='91660.00', `a_od_int`='0',`a_tot_od`='24993.78',`a_od_pr`='24993.78' where `accountno`='EL1604' and `cal_date`='2016-08-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='24993.78',`amount_topay`='91660.00',`od_cal_date`='2016-08-12' where `loan_accno`='EL1604'");
mysql_query("update  `transaction_ledger` set `outstanding`='69777.00', `a_od_int`='1363',`a_tot_od`='17806.214444444',`a_od_pr`='16443.214444444' where `accountno`='EL1612' and `cal_date`='2016-08-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='1363',`odprincipal`='16443.214444444',`amount_topay`='69777.00',`od_cal_date`='2016-08-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='91660.00', `a_od_int`='0',`a_tot_od`='24993.78',`a_od_pr`='24993.78' where `accountno`='EL1604' and `cal_date`='2016-08-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='24993.78',`amount_topay`='91660.00',`od_cal_date`='2016-08-12' where `loan_accno`='EL1604'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='3181',`a_tot_od`='21362.82',`a_od_pr`='18181.82' where `accountno`='EL1712' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='3181',`odprincipal`='18181.82',`amount_topay`='100000.00',`od_cal_date`='2016-08-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='69777.00', `a_od_int`='1363',`a_tot_od`='17806.214444444',`a_od_pr`='16443.214444444' where `accountno`='EL1612' and `cal_date`='2016-08-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='1363',`odprincipal`='16443.214444444',`amount_topay`='69777.00',`od_cal_date`='2016-08-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='58401.00', `a_od_int`='4490',`a_tot_od`='27634.051764706',`a_od_pr`='23144.051764706' where `accountno`='EL1550' and `cal_date`='2016-08-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='4490',`odprincipal`='23144.051764706',`amount_topay`='58401.00',`od_cal_date`='2016-08-10' where `loan_accno`='EL1550'");
mysql_query("update  `transaction_ledger` set `outstanding`='56167.00', `a_od_int`='0',`a_tot_od`='9498.66',`a_od_pr`='9498.66' where `accountno`='EL1444' and `cal_date`='2016-08-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='9498.66',`amount_topay`='56167.00',`od_cal_date`='2016-08-12' where `loan_accno`='EL1444'");
mysql_query("update  `transaction_ledger` set `outstanding`='65557.00', `a_od_int`='1336',`a_tot_od`='22445.775555556',`a_od_pr`='21109.775555556' where `accountno`='EL1436' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1336',`odprincipal`='21109.775555556',`amount_topay`='65557.00',`od_cal_date`='2016-08-13' where `loan_accno`='EL1436'");
mysql_query("update  `transaction_ledger` set `outstanding`='7000.00', `a_od_int`='146',`a_tot_od`='146',`a_od_pr`='0' where `accountno`='DL1707' and `cal_date`='2016-08-20'");

mysql_query("update  `demand_loan` set `odintrest`='146',`odprincipal`='0',`amount_topay`='7000.00',`od_cal_date`='2016-08-20' where `loan_accno`='DL1707'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='4833',`a_tot_od`='4833',`a_od_pr`='0' where `accountno`='DL1714' and `cal_date`='2016-08-20'");

mysql_query("update  `demand_loan` set `odintrest`='4833',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-08-20' where `loan_accno`='DL1714'");
mysql_query("update  `transaction_ledger` set `outstanding`='4000.00', `a_od_int`='146',`a_tot_od`='146',`a_od_pr`='0' where `accountno`='DL1730' and `cal_date`='2016-08-12'");

mysql_query("update  `demand_loan` set `odintrest`='146',`odprincipal`='0',`amount_topay`='4000.00',`od_cal_date`='2016-08-12' where `loan_accno`='DL1730'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='299',`a_tot_od`='299',`a_od_pr`='0' where `accountno`='GL1419' and `cal_date`='2016-08-15'");

mysql_query("update  `goldloan` set `odintrest`='299',`odprincipal`='0',`amount_topay`='2500.00',`od_cal_date`='2016-08-15' where `loan_accno`='GL1419'");
mysql_query("update  `transaction_ledger` set `outstanding`='6000.00', `a_od_int`='65',`a_tot_od`='65',`a_od_pr`='0' where `accountno`='GL1815' and `cal_date`='2016-08-21'");

mysql_query("update  `goldloan` set `odintrest`='65',`odprincipal`='0',`amount_topay`='6000.00',`od_cal_date`='2016-08-21' where `loan_accno`='GL1815'");














mysql_query("update  `transaction_ledger` set `b_od_int`='262',`b_cur_int`='262', `b_od_pri`='4480',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4480', `outstanding`='9543',`a_od_int`='0',`a_tot_od`='2725.3745454545',`a_od_pr`='2725.3745454545',`collection`='5004.00',`coll_date`='2016-08-11' where `accountno`='BL1522' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2725.3745454545',`amount_topay`='9543',`last_refund_date`='2016-08-11',`last_refund_amt`='5004.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1522'");

mysql_query("UPDATE   `transaction` set `amount`='4480',`details`='businessloan Refund' where `accountno`='BL1522' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='524',`details`='businessloan Interest' where `accountno`='BL1522' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='39', `b_od_pri`='461',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='461', `outstanding`='1647',`a_od_int`='0',`a_tot_od`='1099.0066666667',`a_od_pr`='1099.0066666667',`collection`='500.00',`coll_date`='2016-08-30' where `accountno`='BL1484' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1099.0066666667',`amount_topay`='1647',`last_refund_date`='2016-08-30',`last_refund_amt`='500.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='461',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='39',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='706', `b_od_pri`='4978',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4978', `outstanding`='31153',`a_od_int`='0',`a_tot_od`='6153',`a_od_pr`='6153',`collection`='5684.00',`coll_date`='2016-08-23' where `accountno`='EL1602' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6153',`amount_topay`='31153',`last_refund_date`='2016-08-23',`last_refund_amt`='5684.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='4978',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-08-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='706',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-08-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='137', `b_od_pri`='908',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='908', `outstanding`='6398',`a_od_int`='0',`a_tot_od`='943.45090909091',`a_od_pr`='943.45090909091',`collection`='1045.00',`coll_date`='2016-08-11' where `accountno`='BL1641' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='943.45090909091',`amount_topay`='6398',`last_refund_date`='2016-08-11',`last_refund_amt`='1045.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='908',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='137',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-08-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='199', `b_od_pri`='1651',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1651', `outstanding`='8982',`a_od_int`='0',`a_tot_od`='2316.3466666667',`a_od_pr`='2316.3466666667',`collection`='1850.00',`coll_date`='2016-08-30' where `accountno`='BL1502' and `cal_date`='2016-08-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2316.3466666667',`amount_topay`='8982',`last_refund_date`='2016-08-30',`last_refund_amt`='1850.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='1651',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='199',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1506', `b_od_pri`='4159',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4159', `outstanding`='89143',`a_od_int`='0',`a_tot_od`='5809.6666666667',`a_od_pr`='5809.6666666667',`collection`='5665.00',`coll_date`='2016-08-25' where `accountno`='EL1698' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5809.6666666667',`amount_topay`='89143',`last_refund_date`='2016-08-25',`last_refund_amt`='5665.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1698'");

mysql_query("UPDATE   `transaction` set `amount`='4159',`details`='enterpriseloan Refund' where `accountno`='EL1698' and `date`='2016-08-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1506',`details`='enterpriseloan Interest' where `accountno`='EL1698' and `date`='2016-08-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1308', `b_od_pri`='1701.68',`b_cur_pri`='2430.32',`a_pre_pri`='0',`tot_pr`='4132', `outstanding`='60039',`a_od_int`='0',`a_tot_od`='1736.3466666667',`a_od_pr`='1736.3466666667',`collection`='5440.00',`coll_date`='2016-08-30' where `accountno`='EL1438' and `cal_date`='2016-08-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='1736.3466666667',`amount_topay`='60039',`last_refund_date`='2016-08-30',`last_refund_amt`='5440.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='4132',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1308',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-08-30' and `interest`>0 ");

?>