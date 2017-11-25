<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);




mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='343', `b_od_pri`='2357',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2357', `outstanding`='20850',`a_od_int`='0',`a_tot_od`='2668.4572727273',`a_od_pr`='2668.4572727273',`collection`='2700.00',`coll_date`='2016-09-22' where `accountno`='BL1772' and `cal_date`='2016-09-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2668.4572727273',`amount_topay`='20850',`last_refund_date`='2016-09-22',`last_refund_amt`='2700.00', `od_cal_date`='2016-10-10',`loancomplited`='0' where `loan_accno`='BL1772'");

mysql_query("UPDATE   `transaction` set `amount`='2357',`details`='businessloan Refund' where `accountno`='BL1772' and `date`='2016-09-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='343',`details`='businessloan Interest' where `accountno`='BL1772' and `date`='2016-09-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='2839',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2839', `outstanding`='41421',`a_od_int`='0',`a_tot_od`='116.64',`a_od_pr`='116.64',`collection`='2839.00',`coll_date`='2016-09-16' where `accountno`='BL1679' and `cal_date`='2016-09-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='116.64',`amount_topay`='41421',`last_refund_date`='2016-09-16',`last_refund_amt`='2839.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2839',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-09-16' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='531', `b_od_pri`='2369',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2369', `outstanding`='33545',`a_od_int`='0',`a_tot_od`='5309.8811764706',`a_od_pr`='5309.8811764706',`collection`='2900.00',`coll_date`='2016-09-20' where `accountno`='BL1734' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5309.8811764706',`amount_topay`='33545',`last_refund_date`='2016-09-20',`last_refund_amt`='2900.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='2369',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='531',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='5241',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5241', `outstanding`='40977',`a_od_int`='0',`a_tot_od`='4613.45',`a_od_pr`='4613.45',`collection`='5241.00',`coll_date`='2016-09-07' where `accountno`='BL1767' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4613.45',`amount_topay`='40977',`last_refund_date`='2016-09-07',`last_refund_amt`='5241.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='5241',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='237', `b_od_pri`='1819',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1819', `outstanding`='11303',`a_od_int`='0',`a_tot_od`='2212.0818181818',`a_od_pr`='2212.0818181818',`collection`='2056.00',`coll_date`='2016-09-19' where `accountno`='BL1643' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2212.0818181818',`amount_topay`='11303',`last_refund_date`='2016-09-19',`last_refund_amt`='2056.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1819',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-09-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='237',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-09-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='283', `b_od_pri`='1181',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1181', `outstanding`='17949',`a_od_int`='0',`a_tot_od`='1477.9405882353',`a_od_pr`='1477.9405882353',`collection`='1464.00',`coll_date`='2016-09-09' where `accountno`='BL1753' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1477.9405882353',`amount_topay`='17949',`last_refund_date`='2016-09-09',`last_refund_amt`='1464.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1753'");

mysql_query("UPDATE   `transaction` set `amount`='1181',`details`='businessloan Refund' where `accountno`='BL1753' and `date`='2016-09-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='283',`details`='businessloan Interest' where `accountno`='BL1753' and `date`='2016-09-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='337',`b_cur_int`='326', `b_od_pri`='2398',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2398', `outstanding`='19642',`a_od_int`='0',`a_tot_od`='6005.6454545455',`a_od_pr`='6005.6454545455',`collection`='3061.00',`coll_date`='2016-09-14' where `accountno`='BL1692' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6005.6454545455',`amount_topay`='19642',`last_refund_date`='2016-09-14',`last_refund_amt`='3061.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2398',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-09-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='663',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-09-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='247', `b_od_pri`='1821',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1821', `outstanding`='14854',`a_od_int`='0',`a_tot_od`='2126.7218181818',`a_od_pr`='2126.7218181818',`collection`='2068.00',`coll_date`='2016-09-13' where `accountno`='BL1724' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2126.7218181818',`amount_topay`='14854',`last_refund_date`='2016-09-13',`last_refund_amt`='2068.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1724'");

mysql_query("UPDATE   `transaction` set `amount`='1821',`details`='businessloan Refund' where `accountno`='BL1724' and `date`='2016-09-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='247',`details`='businessloan Interest' where `accountno`='BL1724' and `date`='2016-09-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='62', `b_od_pri`='458',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='458', `outstanding`='3715',`a_od_int`='0',`a_tot_od`='533.09545454545',`a_od_pr`='533.09545454545',`collection`='520.00',`coll_date`='2016-09-29' where `accountno`='BL1715' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='533.09545454545',`amount_topay`='3715',`last_refund_date`='2016-09-29',`last_refund_amt`='520.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='BL1715'");

mysql_query("UPDATE   `transaction` set `amount`='458',`details`='businessloan Refund' where `accountno`='BL1715' and `date`='2016-09-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='62',`details`='businessloan Interest' where `accountno`='BL1715' and `date`='2016-09-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='252', `b_od_pri`='2248',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2248', `outstanding`='11704',`a_od_int`='0',`a_tot_od`='4886.4572727273',`a_od_pr`='4886.4572727273',`collection`='2500.00',`coll_date`='2016-09-20' where `accountno`='BL1572' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4886.4572727273',`amount_topay`='11704',`last_refund_date`='2016-09-20',`last_refund_amt`='2500.00', `od_cal_date`='2016-10-07',`loancomplited`='0' where `loan_accno`='BL1572'");

mysql_query("UPDATE   `transaction` set `amount`='2248',`details`='businessloan Refund' where `accountno`='BL1572' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='252',`details`='businessloan Interest' where `accountno`='BL1572' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='240', `b_od_pri`='1178',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1178', `outstanding`='12100',`a_od_int`='0',`a_tot_od`='2687.9405882353',`a_od_pr`='2687.9405882353',`collection`='1418.00',`coll_date`='2016-09-26' where `accountno`='BL1575' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2687.9405882353',`amount_topay`='12100',`last_refund_date`='2016-09-26',`last_refund_amt`='1418.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1178',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='240',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='113', `b_od_pri`='473',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='473', `outstanding`='7177',`a_od_int`='0',`a_tot_od`='588.76823529412',`a_od_pr`='588.76823529412',`collection`='586.00',`coll_date`='2016-09-27' where `accountno`='BL1760' and `cal_date`='2016-09-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='588.76823529412',`amount_topay`='7177',`last_refund_date`='2016-09-27',`last_refund_amt`='586.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='BL1760'");

mysql_query("UPDATE   `transaction` set `amount`='473',`details`='businessloan Refund' where `accountno`='BL1760' and `date`='2016-09-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='113',`details`='businessloan Interest' where `accountno`='BL1760' and `date`='2016-09-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='187', `b_od_pri`='1667',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1667', `outstanding`='8700',`a_od_int`='0',`a_tot_od`='2033.6866666667',`a_od_pr`='2033.6866666667',`collection`='1854.00',`coll_date`='2016-09-29' where `accountno`='BL1613' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2033.6866666667',`amount_topay`='8700',`last_refund_date`='2016-09-29',`last_refund_amt`='1854.00', `od_cal_date`='2016-10-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1667',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-09-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='187',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-09-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='213', `b_od_pri`='885',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='885', `outstanding`='13540',`a_od_int`='0',`a_tot_od`='2069.7029411765',`a_od_pr`='2069.7029411765',`collection`='1098.00',`coll_date`='2016-09-22' where `accountno`='BL1748' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2069.7029411765',`amount_topay`='13540',`last_refund_date`='2016-09-22',`last_refund_amt`='1098.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `amount`='885',`details`='businessloan Refund' where `accountno`='BL1748' and `date`='2016-09-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='213',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-09-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='306', `b_od_pri`='2710',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2710', `outstanding`='14237',`a_od_int`='0',`a_tot_od`='3327.8927272727',`a_od_pr`='3327.8927272727',`collection`='3016.00',`coll_date`='2016-09-28' where `accountno`='BL1616' and `cal_date`='2016-09-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3327.8927272727',`amount_topay`='14237',`last_refund_date`='2016-09-28',`last_refund_amt`='3016.00', `od_cal_date`='2016-10-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2710',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-09-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='306',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-09-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='233', `b_od_pri`='2439.87',`b_cur_pri`='627.13',`a_pre_pri`='0',`tot_pr`='3067', `outstanding`='9379',`a_od_int`='0',`a_tot_od`='25.043913043478',`a_od_pr`='25.043913043478',`collection`='3300.00',`coll_date`='2016-09-15' where `accountno`='BL1512' and `cal_date`='2016-09-15'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='25.043913043478',`amount_topay`='9379',`last_refund_date`='2016-09-15',`last_refund_amt`='3300.00', `od_cal_date`='2016-09-15',`loancomplited`='0' where `loan_accno`='BL1512'");

mysql_query("UPDATE   `transaction` set `amount`='3067',`details`='businessloan Refund' where `accountno`='BL1512' and `date`='2016-09-15' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='233',`details`='businessloan Interest' where `accountno`='BL1512' and `date`='2016-09-15' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='63', `b_od_pri`='417',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='417', `outstanding`='3826',`a_od_int`='0',`a_tot_od`='492.33666666667',`a_od_pr`='492.33666666667',`collection`='480.00',`coll_date`='2016-09-26' where `accountno`='BL1737' and `cal_date`='2016-09-20'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='492.33666666667',`amount_topay`='3826',`last_refund_date`='2016-09-26',`last_refund_amt`='480.00', `od_cal_date`='2016-10-20',`loancomplited`='0' where `loan_accno`='BL1737'");

mysql_query("UPDATE   `transaction` set `amount`='417',`details`='businessloan Refund' where `accountno`='BL1737' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='63',`details`='businessloan Interest' where `accountno`='BL1737' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='314', `b_od_pri`='2088',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2088', `outstanding`='19127',`a_od_int`='0',`a_tot_od`='2460.6633333333',`a_od_pr`='2460.6633333333',`collection`='2402.00',`coll_date`='2016-09-14' where `accountno`='BL1735' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2460.6633333333',`amount_topay`='19127',`last_refund_date`='2016-09-14',`last_refund_amt`='2402.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1735'");

mysql_query("UPDATE   `transaction` set `amount`='2088',`details`='businessloan Refund' where `accountno`='BL1735' and `date`='2016-09-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='314',`details`='businessloan Interest' where `accountno`='BL1735' and `date`='2016-09-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='612',`b_cur_int`='592', `b_od_pri`='3044',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3044', `outstanding`='36956',`a_od_int`='0',`a_tot_od`='4228.7236363636',`a_od_pr`='4228.7236363636',`collection`='4248.00',`coll_date`='2016-09-10' where `accountno`='BL1799' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4228.7236363636',`amount_topay`='36956',`last_refund_date`='2016-09-10',`last_refund_amt`='4248.00', `od_cal_date`='2016-10-07',`loancomplited`='0' where `loan_accno`='BL1799'");

mysql_query("UPDATE   `transaction` set `amount`='3044',`details`='businessloan Refund' where `accountno`='BL1799' and `date`='2016-09-10' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1204',`details`='businessloan Interest' where `accountno`='BL1799' and `date`='2016-09-10' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='5241',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5241', `outstanding`='40977',`a_od_int`='0',`a_tot_od`='4613.45',`a_od_pr`='4613.45',`collection`='5241.00',`coll_date`='2016-09-07' where `accountno`='BL1767' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4613.45',`amount_topay`='40977',`last_refund_date`='2016-09-07',`last_refund_amt`='5241.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='5241',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='417',`b_cur_int`='403', `b_od_pri`='2324',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2324', `outstanding`='24943',`a_od_int`='0',`a_tot_od`='5851.8154545455',`a_od_pr`='5851.8154545455',`collection`='3144.00',`coll_date`='2016-09-13' where `accountno`='BL1761' and `cal_date`='2016-09-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5851.8154545455',`amount_topay`='24943',`last_refund_date`='2016-09-13',`last_refund_amt`='3144.00', `od_cal_date`='2016-10-10',`loancomplited`='0' where `loan_accno`='BL1761'");

mysql_query("UPDATE   `transaction` set `amount`='2324',`details`='businessloan Refund' where `accountno`='BL1761' and `date`='2016-09-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='820',`details`='businessloan Interest' where `accountno`='BL1761' and `date`='2016-09-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='283',`b_cur_int`='274', `b_od_pri`='1543',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1543', `outstanding`='16945',`a_od_int`='0',`a_tot_od`='4217.7236363636',`a_od_pr`='4217.7236363636',`collection`='2100.00',`coll_date`='2016-09-09' where `accountno`='BL1702' and `cal_date`='2016-09-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4217.7236363636',`amount_topay`='16945',`last_refund_date`='2016-09-09',`last_refund_amt`='2100.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='BL1702'");

mysql_query("UPDATE   `transaction` set `amount`='1543',`details`='businessloan Refund' where `accountno`='BL1702' and `date`='2016-09-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='557',`details`='businessloan Interest' where `accountno`='BL1702' and `date`='2016-09-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='2839',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2839', `outstanding`='41421',`a_od_int`='0',`a_tot_od`='116.64',`a_od_pr`='116.64',`collection`='2839.00',`coll_date`='2016-09-16' where `accountno`='BL1679' and `cal_date`='2016-09-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='116.64',`amount_topay`='41421',`last_refund_date`='2016-09-16',`last_refund_amt`='2839.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2839',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-09-16' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='16591',`a_od_int`='0',`a_tot_od`='2954.27',`a_od_pr`='2954.27',`collection`='3084.00',`coll_date`='2016-09-07' where `accountno`='BL1642' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2954.27',`amount_topay`='16591',`last_refund_date`='2016-09-07',`last_refund_amt`='3084.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='885.00',`b_cur_int`='885', `b_od_pri`='104',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='104', `outstanding`='47273',`a_od_int`='0',`a_tot_od`='10316.473043478',`a_od_pr`='10316.473043478',`collection`='1874.00',`coll_date`='2016-09-10' where `accountno`='BL1621' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='10316.473043478',`amount_topay`='47273',`last_refund_date`='2016-09-10',`last_refund_amt`='1874.00', `od_cal_date`='2016-09-21',`loancomplited`='0' where `loan_accno`='BL1621'");

mysql_query("UPDATE   `transaction` set `amount`='104',`details`='businessloan Refund' where `accountno`='BL1621' and `date`='2016-09-10' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1770',`details`='businessloan Interest' where `accountno`='BL1621' and `date`='2016-09-10' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='62', `b_od_pri`='544',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='544', `outstanding`='2862',`a_od_int`='0',`a_tot_od`='1225.9045454545',`a_od_pr`='1225.9045454545',`collection`='606.00',`coll_date`='2016-09-26' where `accountno`='BL1628' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1225.9045454545',`amount_topay`='2862',`last_refund_date`='2016-09-26',`last_refund_amt`='606.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='544',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='62',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='2072',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2072', `outstanding`='20107',`a_od_int`='0',`a_tot_od`='108.66',`a_od_pr`='108.66',`collection`='2072.00',`coll_date`='2016-09-10' where `accountno`='BL1636' and `cal_date`='2016-09-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='108.66',`amount_topay`='20107',`last_refund_date`='2016-09-10',`last_refund_amt`='2072.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='BL1636'");

mysql_query("UPDATE   `transaction` set `amount`='2072',`details`='businessloan Refund' where `accountno`='BL1636' and `date`='2016-09-10' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='120',`b_cur_int`='116', `b_od_pri`='792',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='792', `outstanding`='5606',`a_od_int`='0',`a_tot_od`='1060.2718181818',`a_od_pr`='1060.2718181818',`collection`='1028.00',`coll_date`='2016-09-20' where `accountno`='BL1641' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1060.2718181818',`amount_topay`='5606',`last_refund_date`='2016-09-20',`last_refund_amt`='1028.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='792',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='236',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='16591',`a_od_int`='0',`a_tot_od`='2954.27',`a_od_pr`='2954.27',`collection`='3084.00',`coll_date`='2016-09-07' where `accountno`='BL1642' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2954.27',`amount_topay`='16591',`last_refund_date`='2016-09-07',`last_refund_amt`='3084.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='237', `b_od_pri`='1819',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1819', `outstanding`='11303',`a_od_int`='0',`a_tot_od`='2212.0818181818',`a_od_pr`='2212.0818181818',`collection`='2056.00',`coll_date`='2016-09-19' where `accountno`='BL1643' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2212.0818181818',`amount_topay`='11303',`last_refund_date`='2016-09-19',`last_refund_amt`='2056.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1819',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-09-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='237',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-09-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1791',`b_cur_int`='1733', `b_od_pri`='1476',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1476', `outstanding`='90184',`a_od_int`='0',`a_tot_od`='34628.901111111',`a_od_pr`='34628.901111111',`collection`='5000.00',`coll_date`='2016-09-26' where `accountno`='EL1604' and `cal_date`='2016-09-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='34628.901111111',`amount_topay`='90184',`last_refund_date`='2016-09-26',`last_refund_amt`='5000.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='1476',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3524',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1505', `b_od_pri`='431.67',`b_cur_pri`='3793.33',`a_pre_pri`='0',`tot_pr`='4225', `outstanding`='75373',`a_od_int`='0',`a_tot_od`='373.33666666667',`a_od_pr`='373.33666666667',`collection`='5730.00',`coll_date`='2016-09-17' where `accountno`='EL1632' and `cal_date`='2016-09-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='373.33666666667',`amount_topay`='75373',`last_refund_date`='2016-09-17',`last_refund_amt`='5730.00', `od_cal_date`='2016-10-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4225',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-09-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1505',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-09-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1791',`b_cur_int`='1733', `b_od_pri`='1476',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1476', `outstanding`='90184',`a_od_int`='0',`a_tot_od`='34628.901111111',`a_od_pr`='34628.901111111',`collection`='5000.00',`coll_date`='2016-09-26' where `accountno`='EL1604' and `cal_date`='2016-09-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='34628.901111111',`amount_topay`='90184',`last_refund_date`='2016-09-26',`last_refund_amt`='5000.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='1476',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3524',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1185', `b_od_pri`='4171',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4171', `outstanding`='55902',`a_od_int`='0',`a_tot_od`='5903.6866666667',`a_od_pr`='5903.6866666667',`collection`='5356.00',`coll_date`='2016-09-26' where `accountno`='EL1439' and `cal_date`='2016-09-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5903.6866666667',`amount_topay`='55902',`last_refund_date`='2016-09-26',`last_refund_amt`='5356.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4171',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1185',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1185', `b_od_pri`='4171',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4171', `outstanding`='55886',`a_od_int`='0',`a_tot_od`='5898.6866666667',`a_od_pr`='5898.6866666667',`collection`='5356.00',`coll_date`='2016-09-26' where `accountno`='EL1440' and `cal_date`='2016-09-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5898.6866666667',`amount_topay`='55886',`last_refund_date`='2016-09-26',`last_refund_amt`='5356.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4171',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1185',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1451', `b_od_pri`='4369',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4369', `outstanding`='88577',`a_od_int`='0',`a_tot_od`='5968.3160869565',`a_od_pr`='5968.3160869565',`collection`='5820.00',`coll_date`='2016-09-26' where `accountno`='EL1726' and `cal_date`='2016-09-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5968.3160869565',`amount_topay`='88577',`last_refund_date`='2016-09-26',`last_refund_amt`='5820.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='EL1726'");

mysql_query("UPDATE   `transaction` set `amount`='4369',`details`='enterpriseloan Refund' where `accountno`='EL1726' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1451',`details`='enterpriseloan Interest' where `accountno`='EL1726' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1505', `b_od_pri`='431.67',`b_cur_pri`='3793.33',`a_pre_pri`='0',`tot_pr`='4225', `outstanding`='75373',`a_od_int`='0',`a_tot_od`='373.33666666667',`a_od_pr`='373.33666666667',`collection`='5730.00',`coll_date`='2016-09-17' where `accountno`='EL1632' and `cal_date`='2016-09-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='373.33666666667',`amount_topay`='75373',`last_refund_date`='2016-09-17',`last_refund_amt`='5730.00', `od_cal_date`='2016-10-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4225',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-09-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1505',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-09-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2290',`b_cur_int`='1108', `b_od_pri`='2102',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2102', `outstanding`='54065',`a_od_int`='0',`a_tot_od`='17396.646666667',`a_od_pr`='17396.646666667',`collection`='5500.00',`coll_date`='2016-09-20' where `accountno`='EL1444' and `cal_date`='2016-09-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='17396.646666667',`amount_topay`='54065',`last_refund_date`='2016-09-20',`last_refund_amt`='5500.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='EL1444'");

mysql_query("UPDATE   `transaction` set `amount`='2102',`details`='enterpriseloan Refund' where `accountno`='EL1444' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3398',`details`='enterpriseloan Interest' where `accountno`='EL1444' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1185', `b_od_pri`='4171',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4171', `outstanding`='55886',`a_od_int`='0',`a_tot_od`='5898.6866666667',`a_od_pr`='5898.6866666667',`collection`='5356.00',`coll_date`='2016-09-26' where `accountno`='EL1440' and `cal_date`='2016-09-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5898.6866666667',`amount_topay`='55886',`last_refund_date`='2016-09-26',`last_refund_amt`='5356.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4171',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1185',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1185', `b_od_pri`='4171',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4171', `outstanding`='55902',`a_od_int`='0',`a_tot_od`='5903.6866666667',`a_od_pr`='5903.6866666667',`collection`='5356.00',`coll_date`='2016-09-26' where `accountno`='EL1439' and `cal_date`='2016-09-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5903.6866666667',`amount_topay`='55902',`last_refund_date`='2016-09-26',`last_refund_amt`='5356.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4171',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1185',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2722',`b_cur_int`='1317', `b_od_pri`='2459',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2459', `outstanding`='64315',`a_od_int`='0',`a_tot_od`='30978.891111111',`a_od_pr`='30978.891111111',`collection`='6498.00',`coll_date`='2016-09-29' where `accountno`='EL1436' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='30978.891111111',`amount_topay`='64315',`last_refund_date`='2016-09-29',`last_refund_amt`='6498.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1436'");

mysql_query("UPDATE   `transaction` set `amount`='2459',`details`='enterpriseloan Refund' where `accountno`='EL1436' and `date`='2016-09-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4039',`details`='enterpriseloan Interest' where `accountno`='EL1436' and `date`='2016-09-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='99', `b_od_pri`='728',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='728', `outstanding`='5933',`a_od_int`='0',`a_tot_od`='1569.5427272727',`a_od_pr`='1569.5427272727',`collection`='827.00',`coll_date`='2016-09-12' where `accountno`='GRL1706' and `cal_date`='2016-09-10'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1569.5427272727',`amount_topay`='5933',`last_refund_date`='2016-09-12',`last_refund_amt`='827.00', `od_cal_date`='2016-10-10',`loancomplited`='0' where `loan_accno`='GRL1706'");

mysql_query("UPDATE   `transaction` set `amount`='728',`details`='grouploan Refund' where `accountno`='GRL1706' and `date`='2016-09-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='99',`details`='grouploan Interest' where `accountno`='GRL1706' and `date`='2016-09-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='106.00',`b_cur_int`='106', `b_od_pri`='728',`b_cur_pri`='0',`a_pre_pri`='8',`tot_pr`='736', `outstanding`='6199',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='220.00',`coll_date`='2016-09-14' where `accountno`='DL1707' and `cal_date`='2016-09-20'");

mysql_query("update  `demand_loan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='6199',`last_refund_date`='2016-09-14',`last_refund_amt`='220.00', `od_cal_date`='2016-09-20',`loancomplited`='0' where `loan_accno`='DL1707'");

mysql_query("UPDATE   `transaction` set `amount`='736',`details`='demand_loan Refund' where `accountno`='DL1707' and `date`='2016-09-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='212',`details`='demand_loan Interest' where `accountno`='DL1707' and `date`='2016-09-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='535.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='35000',`a_od_int`='618',`a_tot_od`='618',`a_od_pr`='0',`collection`='535.00',`coll_date`='2016-09-30' where `accountno`='DL1709' and `cal_date`='2016-09-18'");

mysql_query("update  `demand_loan` set `odintrest`='618',`odprincipal`='0',`amount_topay`='35000',`last_refund_date`='2016-09-30',`last_refund_amt`='535.00', `od_cal_date`='2016-10-18',`loancomplited`='0' where `loan_accno`='DL1709'");

mysql_query("UPDATE   `transaction` set `interest`='535',`details`='demand_loan Interest' where `accountno`='DL1709' and `date`='2016-09-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='152.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='5000',`a_od_int`='148',`a_tot_od`='148',`a_od_pr`='0',`collection`='152.00',`coll_date`='2016-09-21' where `accountno`='DL1711' and `cal_date`='2016-09-13'");

mysql_query("update  `demand_loan` set `odintrest`='148',`odprincipal`='0',`amount_topay`='5000',`last_refund_date`='2016-09-21',`last_refund_amt`='152.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='DL1711'");

mysql_query("UPDATE   `transaction` set `interest`='152',`details`='demand_loan Interest' where `accountno`='DL1711' and `date`='2016-09-21' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='138',`b_cur_int`='133', `b_od_pri`='715',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='715', `outstanding`='6042.67',`a_od_int`='0',`a_tot_od`='1924.9966666667',`a_od_pr`='1924.9966666667',`collection`='986.00',`coll_date`='2016-09-14' where `accountno`='AL1454' and `cal_date`='2016-09-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='1924.9966666667',`amount_topay`='6042.67',`last_refund_date`='2016-09-14',`last_refund_amt`='986.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='715',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-09-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='271',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-09-14' and `interest`>0 ");













mysql_query("update  `transaction_ledger` set `outstanding`='3103.00', `a_od_int`='58',`a_tot_od`='694.36363636364',`a_od_pr`='636.36363636364' where `accountno`='BL1590' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='58',`odprincipal`='636.36363636364',`amount_topay`='3103.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1590'");
mysql_query("update  `transaction_ledger` set `outstanding`='14134.00', `a_od_int`='0',`a_tot_od`='9136.67',`a_od_pr`='9136.67' where `accountno`='BL1274' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9136.67',`amount_topay`='14134.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1274'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='1224',`a_tot_od`='5929.8811764706',`a_od_pr`='4705.8811764706' where `accountno`='BL1755' and `cal_date`='2016-09-13'");

mysql_query("update  `businessloan` set `odintrest`='1224',`odprincipal`='4705.8811764706',`amount_topay`='40000.00',`od_cal_date`='2016-09-13' where `loan_accno`='BL1755'");
mysql_query("update  `transaction_ledger` set `outstanding`='25176.00', `a_od_int`='0',`a_tot_od`='2234.84',`a_od_pr`='2234.84' where `accountno`='BL1690' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2234.84',`amount_topay`='25176.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1690'");
mysql_query("update  `transaction_ledger` set `outstanding`='17382.00', `a_od_int`='105',`a_tot_od`='11805.904545455',`a_od_pr`='11700.904545455' where `accountno`='BL1505' and `cal_date`='2016-09-10'");

mysql_query("update  `businessloan` set `odintrest`='105',`odprincipal`='11700.904545455',`amount_topay`='17382.00',`od_cal_date`='2016-09-10' where `loan_accno`='BL1505'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='306',`a_tot_od`='1482.47',`a_od_pr`='1176.47' where `accountno`='BL1789' and `cal_date`='2016-09-15'");

mysql_query("update  `businessloan` set `odintrest`='306',`odprincipal`='1176.47',`amount_topay`='20000.00',`od_cal_date`='2016-09-15' where `loan_accno`='BL1789'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='1224',`a_tot_od`='5929.8811764706',`a_od_pr`='4705.8811764706' where `accountno`='BL1755' and `cal_date`='2016-09-13'");

mysql_query("update  `businessloan` set `odintrest`='1224',`odprincipal`='4705.8811764706',`amount_topay`='40000.00',`od_cal_date`='2016-09-13' where `loan_accno`='BL1755'");
mysql_query("update  `transaction_ledger` set `outstanding`='27838.00', `a_od_int`='426',`a_tot_od`='2177.047826087',`a_od_pr`='1751.047826087' where `accountno`='BL1717' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='426',`odprincipal`='1751.047826087',`amount_topay`='27838.00',`od_cal_date`='2016-09-12' where `loan_accno`='BL1717'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='1952',`a_tot_od`='8618.6766666667',`a_od_pr`='6666.6766666667' where `accountno`='BL1703' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='1952',`odprincipal`='6666.6766666667',`amount_topay`='20000.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1703'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='2425',`a_tot_od`='16970.443636364',`a_od_pr`='14545.443636364' where `accountno`='BL1691' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='2425',`odprincipal`='14545.443636364',`amount_topay`='40000.00',`od_cal_date`='2016-09-08' where `loan_accno`='BL1691'");
mysql_query("update  `transaction_ledger` set `outstanding`='52765.00', `a_od_int`='0',`a_tot_od`='15751.88',`a_od_pr`='15751.88' where `accountno`='EL1560' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.88',`amount_topay`='52765.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='6409',`a_tot_od`='42772.639090909',`a_od_pr`='36363.639090909' where `accountno`='EL1712' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='6409',`odprincipal`='36363.639090909',`amount_topay`='100000.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='69777.00', `a_od_int`='2726',`a_tot_od`='23613.654444444',`a_od_pr`='20887.654444444' where `accountno`='EL1612' and `cal_date`='2016-09-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='2726',`odprincipal`='20887.654444444',`amount_topay`='69777.00',`od_cal_date`='2016-09-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='75383.00', `a_od_int`='0',`a_tot_od`='22504.12',`a_od_pr`='22504.12' where `accountno`='EL1559' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22504.12',`amount_topay`='75383.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1559'");
mysql_query("update  `transaction_ledger` set `outstanding`='52765.00', `a_od_int`='0',`a_tot_od`='15751.88',`a_od_pr`='15751.88' where `accountno`='EL1560' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.88',`amount_topay`='52765.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='67790.00', `a_od_int`='0',`a_tot_od`='14902.12',`a_od_pr`='14902.12' where `accountno`='EL1511' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='14902.12',`amount_topay`='67790.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='67012.00', `a_od_int`='0',`a_tot_od`='5247.3',`a_od_pr`='5247.3' where `accountno`='EL1757' and `cal_date`='2016-09-21'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5247.3',`amount_topay`='67012.00',`od_cal_date`='2016-09-21' where `loan_accno`='EL1757'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='6409',`a_tot_od`='42772.639090909',`a_od_pr`='36363.639090909' where `accountno`='EL1712' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='6409',`odprincipal`='36363.639090909',`amount_topay`='100000.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='69777.00', `a_od_int`='2726',`a_tot_od`='23613.654444444',`a_od_pr`='20887.654444444' where `accountno`='EL1612' and `cal_date`='2016-09-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='2726',`odprincipal`='20887.654444444',`amount_topay`='69777.00',`od_cal_date`='2016-09-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='88930.00', `a_od_int`='0',`a_tot_od`='22263.56',`a_od_pr`='22263.56' where `accountno`='EL1603' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22263.56',`amount_topay`='88930.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1603'");
mysql_query("update  `transaction_ledger` set `outstanding`='52765.00', `a_od_int`='0',`a_tot_od`='15751.88',`a_od_pr`='15751.88' where `accountno`='EL1560' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.88',`amount_topay`='52765.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='75383.00', `a_od_int`='0',`a_tot_od`='22504.12',`a_od_pr`='22504.12' where `accountno`='EL1559' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22504.12',`amount_topay`='75383.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1559'");
mysql_query("update  `transaction_ledger` set `outstanding`='58401.00', `a_od_int`='5631',`a_tot_od`='32304.461764706',`a_od_pr`='26673.461764706' where `accountno`='EL1550' and `cal_date`='2016-09-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='5631',`odprincipal`='26673.461764706',`amount_topay`='58401.00',`od_cal_date`='2016-09-10' where `loan_accno`='EL1550'");
mysql_query("update  `transaction_ledger` set `outstanding`='67790.00', `a_od_int`='0',`a_tot_od`='14902.12',`a_od_pr`='14902.12' where `accountno`='EL1511' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='14902.12',`amount_topay`='67790.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='6214',`a_tot_od`='6214',`a_od_pr`='0' where `accountno`='DL1714' and `cal_date`='2016-09-20'");

mysql_query("update  `demand_loan` set `odintrest`='6214',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-09-20' where `loan_accno`='DL1714'");
mysql_query("update  `transaction_ledger` set `outstanding`='4000.00', `a_od_int`='207',`a_tot_od`='207',`a_od_pr`='0' where `accountno`='DL1730' and `cal_date`='2016-09-12'");

mysql_query("update  `demand_loan` set `odintrest`='207',`odprincipal`='0',`amount_topay`='4000.00',`od_cal_date`='2016-09-12' where `loan_accno`='DL1730'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='350',`a_tot_od`='350',`a_od_pr`='0' where `accountno`='GL1419' and `cal_date`='2016-09-15'");

mysql_query("update  `goldloan` set `odintrest`='350',`odprincipal`='0',`amount_topay`='2500.00',`od_cal_date`='2016-09-15' where `loan_accno`='GL1419'");
mysql_query("update  `transaction_ledger` set `outstanding`='6000.00', `a_od_int`='157',`a_tot_od`='157',`a_od_pr`='0' where `accountno`='GL1815' and `cal_date`='2016-09-21'");

mysql_query("update  `goldloan` set `odintrest`='157',`odprincipal`='0',`amount_topay`='6000.00',`od_cal_date`='2016-09-21' where `loan_accno`='GL1815'");











mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='173', `b_od_pri`='2270',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2270', `outstanding`='7273',`a_od_int`='0',`a_tot_od`='2728.0972727273',`a_od_pr`='2728.0972727273',`collection`='2443.00',`coll_date`='2016-09-12' where `accountno`='BL1522' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2728.0972727273',`amount_topay`='7273',`last_refund_date`='2016-09-12',`last_refund_amt`='2443.00', `od_cal_date`='2016-10-07',`loancomplited`='0' where `loan_accno`='BL1522'");

mysql_query("UPDATE   `transaction` set `amount`='2270',`details`='businessloan Refund' where `accountno`='BL1522' and `date`='2016-09-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='173',`details`='businessloan Interest' where `accountno`='BL1522' and `date`='2016-09-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='30', `b_od_pri`='270',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='270', `outstanding`='1377',`a_od_int`='0',`a_tot_od`='1245.6766666667',`a_od_pr`='1245.6766666667',`collection`='300.00',`coll_date`='2016-09-30' where `accountno`='BL1484' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1245.6766666667',`amount_topay`='1377',`last_refund_date`='2016-09-30',`last_refund_amt`='300.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='270',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-09-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='30',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-09-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='589', `b_od_pri`='4997',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4997', `outstanding`='26156',`a_od_int`='0',`a_tot_od`='6156',`a_od_pr`='6156',`collection`='5586.00',`coll_date`='2016-09-20' where `accountno`='EL1602' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6156',`amount_topay`='26156',`last_refund_date`='2016-09-20',`last_refund_amt`='5586.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='4997',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='589',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='120',`b_cur_int`='116', `b_od_pri`='792',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='792', `outstanding`='5606',`a_od_int`='0',`a_tot_od`='1969.6318181818',`a_od_pr`='1969.6318181818',`collection`='1028.00',`coll_date`='2016-09-20' where `accountno`='BL1641' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1969.6318181818',`amount_topay`='5606',`last_refund_date`='2016-09-20',`last_refund_amt`='1028.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='792',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='236',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='162', `b_od_pri`='1628',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1628', `outstanding`='7354',`a_od_int`='0',`a_tot_od`='2355.0166666667',`a_od_pr`='2355.0166666667',`collection`='1790.00',`coll_date`='2016-09-20' where `accountno`='BL1502' and `cal_date`='2016-09-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2355.0166666667',`amount_topay`='7354',`last_refund_date`='2016-09-20',`last_refund_amt`='1790.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='1628',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='162',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1392', `b_od_pri`='4188',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4188', `outstanding`='84955',`a_od_int`='0',`a_tot_od`='5788.3366666667',`a_od_pr`='5788.3366666667',`collection`='5580.00',`coll_date`='2016-09-30' where `accountno`='EL1698' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5788.3366666667',`amount_topay`='84955',`last_refund_date`='2016-09-30',`last_refund_amt`='5580.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1698'");

mysql_query("UPDATE   `transaction` set `amount`='4188',`details`='enterpriseloan Refund' where `accountno`='EL1698' and `date`='2016-09-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1392',`details`='enterpriseloan Interest' where `accountno`='EL1698' and `date`='2016-09-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1184', `b_od_pri`='1736.35',`b_cur_pri`='2435.65',`a_pre_pri`='0',`tot_pr`='4172', `outstanding`='55867',`a_od_int`='0',`a_tot_od`='1731.0166666667',`a_od_pr`='1731.0166666667',`collection`='5356.00',`coll_date`='2016-09-26' where `accountno`='EL1438' and `cal_date`='2016-09-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='1731.0166666667',`amount_topay`='55867',`last_refund_date`='2016-09-26',`last_refund_amt`='5356.00', `od_cal_date`='2016-10-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='4172',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1184',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-09-26' and `interest`>0 ");

?>