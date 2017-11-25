<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);




mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='742', `b_od_pri`='2140',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2140', `outstanding`='46422',`a_od_int`='0',`a_tot_od`='5117.6530434783',`a_od_pr`='5117.6530434783',`collection`='2882.00',`coll_date`='2016-07-22' where `accountno`='BL1679' and `cal_date`='2016-07-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5117.6530434783',`amount_topay`='46422',`last_refund_date`='2016-07-22',`last_refund_amt`='2882.00', `od_cal_date`='2016-08-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2140',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-07-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='742',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-07-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='809',`b_cur_int`='612', `b_od_pri`='1741',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1741', `outstanding`='38259',`a_od_int`='0',`a_tot_od`='2964.8823529412',`a_od_pr`='2964.8823529412',`collection`='3162.00',`coll_date`='2016-07-19' where `accountno`='BL1734' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2964.8823529412',`amount_topay`='38259',`last_refund_date`='2016-07-19',`last_refund_amt`='3162.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='1741',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-07-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1421',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-07-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='197',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='764',`a_tot_od`='9854.9090909091',`a_od_pr`='9090.9090909091',`collection`='197.00',`coll_date`='2016-07-25' where `accountno`='BL1767' and `cal_date`='2016-07-07'");

mysql_query("update  `businessloan` set `odintrest`='764',`odprincipal`='9090.9090909091',`amount_topay`='50000',`last_refund_date`='2016-07-25',`last_refund_amt`='197.00', `od_cal_date`='2016-08-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `interest`='197',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-07-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='313', `b_od_pri`='1801',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1801', `outstanding`='14933',`a_od_int`='0',`a_tot_od`='4023.9018181818',`a_od_pr`='4023.9018181818',`collection`='2114.00',`coll_date`='2016-07-26' where `accountno`='BL1643' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4023.9018181818',`amount_topay`='14933',`last_refund_date`='2016-07-26',`last_refund_amt`='2114.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1801',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-07-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='313',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='403',`b_cur_int`='417', `b_od_pri`='2311',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2311', `outstanding`='24958',`a_od_int`='0',`a_tot_od`='5867.0954545455',`a_od_pr`='5867.0954545455',`collection`='3131.00',`coll_date`='2016-07-12' where `accountno`='BL1692' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5867.0954545455',`amount_topay`='24958',`last_refund_date`='2016-07-12',`last_refund_amt`='3131.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2311',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='820',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-07-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='434',`b_cur_int`='306', `b_od_pri`='1512',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1512', `outstanding`='18488',`a_od_int`='0',`a_tot_od`='2124.3636363636',`a_od_pr`='2124.3636363636',`collection`='2252.00',`coll_date`='2016-07-23' where `accountno`='BL1724' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2124.3636363636',`amount_topay`='18488',`last_refund_date`='2016-07-23',`last_refund_amt`='2252.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1724'");

mysql_query("UPDATE   `transaction` set `amount`='1512',`details`='businessloan Refund' where `accountno`='BL1724' and `date`='2016-07-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='740',`details`='businessloan Interest' where `accountno`='BL1724' and `date`='2016-07-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='64.00',`b_cur_int`='74', `b_od_pri`='0.00',`b_cur_pri`='392',`a_pre_pri`='0',`tot_pr`='392', `outstanding`='4608',`a_od_int`='0',`a_tot_od`='62.545454545455',`a_od_pr`='62.545454545455',`collection`='530.00',`coll_date`='2016-07-12' where `accountno`='BL1715' and `cal_date`='2016-07-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='62.545454545455',`amount_topay`='4608',`last_refund_date`='2016-07-12',`last_refund_amt`='530.00', `od_cal_date`='2016-07-12',`loancomplited`='0' where `loan_accno`='BL1715'");

mysql_query("UPDATE   `transaction` set `amount`='392',`details`='businessloan Refund' where `accountno`='BL1715' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='138',`details`='businessloan Interest' where `accountno`='BL1715' and `date`='2016-07-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='304',`b_cur_int`='314', `b_od_pri`='2382',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2382', `outstanding`='14448',`a_od_int`='0',`a_tot_od`='1506.3511764706',`a_od_pr`='1506.3511764706',`collection`='3000.00',`coll_date`='2016-07-30' where `accountno`='BL1575' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1506.3511764706',`amount_topay`='14448',`last_refund_date`='2016-07-30',`last_refund_amt`='3000.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='2382',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='618',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='60.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='8000',`a_od_int`='180',`a_tot_od`='1121.1764705882',`a_od_pr`='941.17647058824',`collection`='60.00',`coll_date`='2016-07-29' where `accountno`='BL1760' and `cal_date`='2016-07-13'");

mysql_query("update  `businessloan` set `odintrest`='180',`odprincipal`='941.17647058824',`amount_topay`='8000',`last_refund_date`='2016-07-29',`last_refund_amt`='60.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='BL1760'");

mysql_query("UPDATE   `transaction` set `interest`='60',`details`='businessloan Interest' where `accountno`='BL1760' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='316.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='40000',`a_od_int`='928',`a_tot_od`='5633.8823529412',`a_od_pr`='4705.8823529412',`collection`='316.00',`coll_date`='2016-07-30' where `accountno`='BL1755' and `cal_date`='2016-07-13'");

mysql_query("update  `businessloan` set `odintrest`='928',`odprincipal`='4705.8823529412',`amount_topay`='40000',`last_refund_date`='2016-07-30',`last_refund_amt`='316.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='BL1755'");

mysql_query("UPDATE   `transaction` set `interest`='316',`details`='businessloan Interest' where `accountno`='BL1755' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='438', `b_od_pri`='1745',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1745', `outstanding`='26934',`a_od_int`='0',`a_tot_od`='3992.8258823529',`a_od_pr`='3992.8258823529',`collection`='2183.00',`coll_date`='2016-07-27' where `accountno`='BL1690' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3992.8258823529',`amount_topay`='26934',`last_refund_date`='2016-07-27',`last_refund_amt`='2183.00', `od_cal_date`='2016-08-21',`loancomplited`='0' where `loan_accno`='BL1690'");

mysql_query("UPDATE   `transaction` set `amount`='1745',`details`='businessloan Refund' where `accountno`='BL1690' and `date`='2016-07-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='438',`details`='businessloan Interest' where `accountno`='BL1690' and `date`='2016-07-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='256', `b_od_pri`='1652',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1652', `outstanding`='12027',`a_od_int`='0',`a_tot_od`='2027.3366666667',`a_od_pr`='2027.3366666667',`collection`='1908.00',`coll_date`='2016-07-30' where `accountno`='BL1613' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2027.3366666667',`amount_topay`='12027',`last_refund_date`='2016-07-30',`last_refund_amt`='1908.00', `od_cal_date`='2016-08-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1652',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='256',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='141',`b_cur_int`='3', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='226',`a_tot_od`='1990.7058823529',`a_od_pr`='1764.7058823529',`collection`='144.00',`coll_date`='2016-07-26' where `accountno`='BL1748' and `cal_date`='2016-07-12'");

mysql_query("update  `businessloan` set `odintrest`='226',`odprincipal`='1764.7058823529',`amount_topay`='15000',`last_refund_date`='2016-07-26',`last_refund_amt`='144.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `interest`='144',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='418', `b_od_pri`='2704',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2704', `outstanding`='19679',`a_od_int`='0',`a_tot_od`='3315.3627272727',`a_od_pr`='3315.3627272727',`collection`='3122.00',`coll_date`='2016-07-27' where `accountno`='BL1616' and `cal_date`='2016-07-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3315.3627272727',`amount_topay`='19679',`last_refund_date`='2016-07-27',`last_refund_amt`='3122.00', `od_cal_date`='2016-08-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2704',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-07-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='418',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-07-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1267',`b_cur_int`='260', `b_od_pri`='1473',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1473', `outstanding`='12446',`a_od_int`='0',`a_tot_od`='2439.857826087',`a_od_pr`='2439.857826087',`collection`='3000.00',`coll_date`='2016-07-18' where `accountno`='BL1512' and `cal_date`='2016-07-15'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2439.857826087',`amount_topay`='12446',`last_refund_date`='2016-07-18',`last_refund_amt`='3000.00', `od_cal_date`='2016-08-15',`loancomplited`='0' where `loan_accno`='BL1512'");

mysql_query("UPDATE   `transaction` set `amount`='1473',`details`='businessloan Refund' where `accountno`='BL1512' and `date`='2016-07-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1527',`details`='businessloan Interest' where `accountno`='BL1512' and `date`='2016-07-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='74',`b_cur_int`='76', `b_od_pri`='350',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='350', `outstanding`='4650',`a_od_int`='0',`a_tot_od`='483.33333333333',`a_od_pr`='483.33333333333',`collection`='500.00',`coll_date`='2016-07-22' where `accountno`='BL1737' and `cal_date`='2016-07-20'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='483.33333333333',`amount_topay`='4650',`last_refund_date`='2016-07-22',`last_refund_amt`='500.00', `od_cal_date`='2016-08-20',`loancomplited`='0' where `loan_accno`='BL1737'");

mysql_query("UPDATE   `transaction` set `amount`='350',`details`='businessloan Refund' where `accountno`='BL1737' and `date`='2016-07-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='150',`details`='businessloan Interest' where `accountno`='BL1737' and `date`='2016-07-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='370',`b_cur_int`='382', `b_od_pri`='1775',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1775', `outstanding`='23225',`a_od_int`='0',`a_tot_od`='2391.6666666667',`a_od_pr`='2391.6666666667',`collection`='2527.00',`coll_date`='2016-07-26' where `accountno`='BL1735' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2391.6666666667',`amount_topay`='23225',`last_refund_date`='2016-07-26',`last_refund_amt`='2527.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1735'");

mysql_query("UPDATE   `transaction` set `amount`='1775',`details`='businessloan Refund' where `accountno`='BL1735' and `date`='2016-07-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='752',`details`='businessloan Interest' where `accountno`='BL1735' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='197',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='764',`a_tot_od`='9854.9090909091',`a_od_pr`='9090.9090909091',`collection`='197.00',`coll_date`='2016-07-25' where `accountno`='BL1767' and `cal_date`='2016-07-07'");

mysql_query("update  `businessloan` set `odintrest`='764',`odprincipal`='9090.9090909091',`amount_topay`='50000',`last_refund_date`='2016-07-25',`last_refund_amt`='197.00', `od_cal_date`='2016-08-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `interest`='197',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-07-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='178',`b_cur_int`='2', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='457',`a_tot_od`='5911.5454545455',`a_od_pr`='5454.5454545455',`collection`='180.00',`coll_date`='2016-07-13' where `accountno`='BL1761' and `cal_date`='2016-07-10'");

mysql_query("update  `businessloan` set `odintrest`='457',`odprincipal`='5454.5454545455',`amount_topay`='30000',`last_refund_date`='2016-07-13',`last_refund_amt`='180.00', `od_cal_date`='2016-08-10',`loancomplited`='0' where `loan_accno`='BL1761'");

mysql_query("UPDATE   `transaction` set `interest`='180',`details`='businessloan Interest' where `accountno`='BL1761' and `date`='2016-07-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='316.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='40000',`a_od_int`='928',`a_tot_od`='5633.8823529412',`a_od_pr`='4705.8823529412',`collection`='316.00',`coll_date`='2016-07-30' where `accountno`='BL1755' and `cal_date`='2016-07-13'");

mysql_query("update  `businessloan` set `odintrest`='928',`odprincipal`='4705.8823529412',`amount_topay`='40000',`last_refund_date`='2016-07-30',`last_refund_amt`='316.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='BL1755'");

mysql_query("UPDATE   `transaction` set `interest`='316',`details`='businessloan Interest' where `accountno`='BL1755' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='379',`b_cur_int`='459', `b_od_pri`='2162',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2162', `outstanding`='27838',`a_od_int`='0',`a_tot_od`='1751.047826087',`a_od_pr`='1751.047826087',`collection`='3000.00',`coll_date`='2016-07-30' where `accountno`='BL1717' and `cal_date`='2016-07-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1751.047826087',`amount_topay`='27838',`last_refund_date`='2016-07-30',`last_refund_amt`='3000.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='BL1717'");

mysql_query("UPDATE   `transaction` set `amount`='2162',`details`='businessloan Refund' where `accountno`='BL1717' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='838',`details`='businessloan Interest' where `accountno`='BL1717' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='562',`b_cur_int`='306', `b_od_pri`='1512',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1512', `outstanding`='18488',`a_od_int`='0',`a_tot_od`='2124.3636363636',`a_od_pr`='2124.3636363636',`collection`='2380.00',`coll_date`='2016-07-23' where `accountno`='BL1702' and `cal_date`='2016-07-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2124.3636363636',`amount_topay`='18488',`last_refund_date`='2016-07-23',`last_refund_amt`='2380.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='BL1702'");

mysql_query("UPDATE   `transaction` set `amount`='1512',`details`='businessloan Refund' where `accountno`='BL1702' and `date`='2016-07-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='868',`details`='businessloan Interest' where `accountno`='BL1702' and `date`='2016-07-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='742', `b_od_pri`='2140',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2140', `outstanding`='46422',`a_od_int`='0',`a_tot_od`='5117.6530434783',`a_od_pr`='5117.6530434783',`collection`='2882.00',`coll_date`='2016-07-22' where `accountno`='BL1679' and `cal_date`='2016-07-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5117.6530434783',`amount_topay`='46422',`last_refund_date`='2016-07-22',`last_refund_amt`='2882.00', `od_cal_date`='2016-08-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2140',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-07-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='742',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-07-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='469', `b_od_pri`='2702',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2702', `outstanding`='22397',`a_od_int`='0',`a_tot_od`='6033.3627272727',`a_od_pr`='6033.3627272727',`collection`='3171.00',`coll_date`='2016-07-12' where `accountno`='BL1642' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6033.3627272727',`amount_topay`='22397',`last_refund_date`='2016-07-12',`last_refund_amt`='3171.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2702',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='469',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-07-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='84', `b_od_pri`='547',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='547', `outstanding`='3937',`a_od_int`='0',`a_tot_od`='664.26454545455',`a_od_pr`='664.26454545455',`collection`='631.00',`coll_date`='2016-07-11' where `accountno`='BL1628' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='664.26454545455',`amount_topay`='3937',`last_refund_date`='2016-07-11',`last_refund_amt`='631.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='547',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-07-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='84',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-07-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='1060',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1060', `outstanding`='7306',`a_od_int`='0',`a_tot_od`='942.36',`a_od_pr`='942.36',`collection`='1060.00',`coll_date`='2016-07-11' where `accountno`='BL1641' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='942.36',`amount_topay`='7306',`last_refund_date`='2016-07-11',`last_refund_amt`='1060.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='1060',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-07-11' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='469', `b_od_pri`='2702',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2702', `outstanding`='22397',`a_od_int`='0',`a_tot_od`='6033.3627272727',`a_od_pr`='6033.3627272727',`collection`='3171.00',`coll_date`='2016-07-12' where `accountno`='BL1642' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6033.3627272727',`amount_topay`='22397',`last_refund_date`='2016-07-12',`last_refund_amt`='3171.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2702',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='469',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-07-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='313', `b_od_pri`='1801',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1801', `outstanding`='14933',`a_od_int`='0',`a_tot_od`='4023.9018181818',`a_od_pr`='4023.9018181818',`collection`='2114.00',`coll_date`='2016-07-26' where `accountno`='BL1643' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4023.9018181818',`amount_topay`='14933',`last_refund_date`='2016-07-26',`last_refund_amt`='2114.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1801',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-07-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='313',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1400.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='100000',`a_od_int`='3181',`a_tot_od`='21362.818181818',`a_od_pr`='18181.818181818',`collection`='1400.00',`coll_date`='2016-07-18' where `accountno`='EL1712' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='3181',`odprincipal`='18181.818181818',`amount_topay`='100000',`last_refund_date`='2016-07-18',`last_refund_amt`='1400.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='EL1712'");

mysql_query("UPDATE   `transaction` set `interest`='1400',`details`='enterpriseloan Interest' where `accountno`='EL1712' and `date`='2016-07-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1760',`b_cur_int`='1818', `b_od_pri`='1422',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1422', `outstanding`='91660',`a_od_int`='0',`a_tot_od`='24993.781111111',`a_od_pr`='24993.781111111',`collection`='5000.00',`coll_date`='2016-07-27' where `accountno`='EL1604' and `cal_date`='2016-07-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='24993.781111111',`amount_topay`='91660',`last_refund_date`='2016-07-27',`last_refund_amt`='5000.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='1422',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-07-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3578',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-07-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1748', `b_od_pri`='3252',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3252', `outstanding`='86214',`a_od_int`='0',`a_tot_od`='7047.3366666667',`a_od_pr`='7047.3366666667',`collection`='5000.00',`coll_date`='2016-07-30' where `accountno`='EL1632' and `cal_date`='2016-07-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7047.3366666667',`amount_topay`='86214',`last_refund_date`='2016-07-30',`last_refund_amt`='5000.00', `od_cal_date`='2016-08-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='3252',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1748',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1760',`b_cur_int`='1818', `b_od_pri`='1422',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1422', `outstanding`='91660',`a_od_int`='0',`a_tot_od`='24993.781111111',`a_od_pr`='24993.781111111',`collection`='5000.00',`coll_date`='2016-07-27' where `accountno`='EL1604' and `cal_date`='2016-07-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='24993.781111111',`amount_topay`='91660',`last_refund_date`='2016-07-27',`last_refund_amt`='5000.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='1422',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-07-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3578',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-07-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1392', `b_od_pri`='4089',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4089', `outstanding`='64205',`a_od_int`='0',`a_tot_od`='5873.3366666667',`a_od_pr`='5873.3366666667',`collection`='5481.00',`coll_date`='2016-07-29' where `accountno`='EL1439' and `cal_date`='2016-07-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5873.3366666667',`amount_topay`='64205',`last_refund_date`='2016-07-29',`last_refund_amt`='5481.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4089',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1392',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1392', `b_od_pri`='4089',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4089', `outstanding`='64190',`a_od_int`='0',`a_tot_od`='5869.3366666667',`a_od_pr`='5869.3366666667',`collection`='5481.00',`coll_date`='2016-07-29' where `accountno`='EL1440' and `cal_date`='2016-07-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5869.3366666667',`amount_topay`='64190',`last_refund_date`='2016-07-29',`last_refund_amt`='5481.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4089',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1392',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1562',`b_cur_int`='1614', `b_od_pri`='2733',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2733', `outstanding`='97267',`a_od_int`='0',`a_tot_od`='10310.476086957',`a_od_pr`='10310.476086957',`collection`='5909.00',`coll_date`='2016-07-29' where `accountno`='EL1726' and `cal_date`='2016-07-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10310.476086957',`amount_topay`='97267',`last_refund_date`='2016-07-29',`last_refund_amt`='5909.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='EL1726'");

mysql_query("UPDATE   `transaction` set `amount`='2733',`details`='enterpriseloan Refund' where `accountno`='EL1726' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3176',`details`='enterpriseloan Interest' where `accountno`='EL1726' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1748', `b_od_pri`='3252',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3252', `outstanding`='86214',`a_od_int`='0',`a_tot_od`='7047.3366666667',`a_od_pr`='7047.3366666667',`collection`='5000.00',`coll_date`='2016-07-30' where `accountno`='EL1632' and `cal_date`='2016-07-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7047.3366666667',`amount_topay`='86214',`last_refund_date`='2016-07-30',`last_refund_amt`='5000.00', `od_cal_date`='2016-08-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='3252',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1748',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='875.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='70000',`a_od_int`='2005',`a_tot_od`='10240.294117647',`a_od_pr`='8235.2941176471',`collection`='875.00',`coll_date`='2016-07-30' where `accountno`='EL1757' and `cal_date`='2016-07-21'");

mysql_query("update  `enterpriseloan` set `odintrest`='2005',`odprincipal`='8235.2941176471',`amount_topay`='70000',`last_refund_date`='2016-07-30',`last_refund_amt`='875.00', `od_cal_date`='2016-08-21',`loancomplited`='0' where `loan_accno`='EL1757'");

mysql_query("UPDATE   `transaction` set `interest`='875',`details`='enterpriseloan Interest' where `accountno`='EL1757' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1400.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='100000',`a_od_int`='3181',`a_tot_od`='21362.818181818',`a_od_pr`='18181.818181818',`collection`='1400.00',`coll_date`='2016-07-18' where `accountno`='EL1712' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='3181',`odprincipal`='18181.818181818',`amount_topay`='100000',`last_refund_date`='2016-07-18',`last_refund_amt`='1400.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='EL1712'");

mysql_query("UPDATE   `transaction` set `interest`='1400',`details`='enterpriseloan Interest' where `accountno`='EL1712' and `date`='2016-07-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1212', `b_od_pri`='3270',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3270', `outstanding`='56167',`a_od_int`='0',`a_tot_od`='9498.6633333333',`a_od_pr`='9498.6633333333',`collection`='4482.00',`coll_date`='2016-07-19' where `accountno`='EL1444' and `cal_date`='2016-07-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='9498.6633333333',`amount_topay`='56167',`last_refund_date`='2016-07-19',`last_refund_amt`='4482.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='EL1444'");

mysql_query("UPDATE   `transaction` set `amount`='3270',`details`='enterpriseloan Refund' where `accountno`='EL1444' and `date`='2016-07-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1212',`details`='enterpriseloan Interest' where `accountno`='EL1444' and `date`='2016-07-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1392', `b_od_pri`='4089',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4089', `outstanding`='64190',`a_od_int`='0',`a_tot_od`='5869.3366666667',`a_od_pr`='5869.3366666667',`collection`='5481.00',`coll_date`='2016-07-29' where `accountno`='EL1440' and `cal_date`='2016-07-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5869.3366666667',`amount_topay`='64190',`last_refund_date`='2016-07-29',`last_refund_amt`='5481.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4089',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1392',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1392', `b_od_pri`='4089',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4089', `outstanding`='64205',`a_od_int`='0',`a_tot_od`='5873.3366666667',`a_od_pr`='5873.3366666667',`collection`='5481.00',`coll_date`='2016-07-29' where `accountno`='EL1439' and `cal_date`='2016-07-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5873.3366666667',`amount_topay`='64205',`last_refund_date`='2016-07-29',`last_refund_amt`='5481.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4089',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1392',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='116',`b_cur_int`='122', `b_od_pri`='612',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='612', `outstanding`='7388',`a_od_int`='0',`a_tot_od`='1569.8227272727',`a_od_pr`='1569.8227272727',`collection`='850.00',`coll_date`='2016-07-27' where `accountno`='GRL1706' and `cal_date`='2016-07-10'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1569.8227272727',`amount_topay`='7388',`last_refund_date`='2016-07-27',`last_refund_amt`='850.00', `od_cal_date`='2016-08-10',`loancomplited`='0' where `loan_accno`='GRL1706'");

mysql_query("UPDATE   `transaction` set `amount`='612',`details`='grouploan Refund' where `accountno`='GRL1706' and `date`='2016-07-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='238',`details`='grouploan Interest' where `accountno`='GRL1706' and `date`='2016-07-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='155.00',`b_cur_int`='65', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='7000',`a_od_int`='39',`a_tot_od`='39',`a_od_pr`='0',`collection`='220.00',`coll_date`='2016-07-18' where `accountno`='DL1707' and `cal_date`='2016-07-20'");

mysql_query("update  `demand_loan` set `odintrest`='39',`odprincipal`='0',`amount_topay`='7000',`last_refund_date`='2016-07-18',`last_refund_amt`='220.00', `od_cal_date`='2016-07-20',`loancomplited`='0' where `loan_accno`='DL1707'");

mysql_query("UPDATE   `transaction` set `interest`='220',`details`='demand_loan Interest' where `accountno`='DL1707' and `date`='2016-07-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='504.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='35000',`a_od_int`='635',`a_tot_od`='635',`a_od_pr`='0',`collection`='504.00',`coll_date`='2016-07-26' where `accountno`='DL1709' and `cal_date`='2016-07-18'");

mysql_query("update  `demand_loan` set `odintrest`='635',`odprincipal`='0',`amount_topay`='35000',`last_refund_date`='2016-07-26',`last_refund_amt`='504.00', `od_cal_date`='2016-08-18',`loancomplited`='0' where `loan_accno`='DL1709'");

mysql_query("UPDATE   `transaction` set `interest`='504',`details`='demand_loan Interest' where `accountno`='DL1709' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='163', `b_od_pri`='0.00',`b_cur_pri`='833.33333333333',`a_pre_pri`='17.666666666667',`tot_pr`='851', `outstanding`='7415',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1014.00',`coll_date`='2016-07-12' where `accountno`='AL1454' and `cal_date`='2016-07-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='7415',`last_refund_date`='2016-07-12',`last_refund_amt`='1014.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='851',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='163',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-07-12' and `interest`>0 ");





mysql_query("update  `transaction_ledger` set `outstanding`='25000.00', `a_od_int`='123',`a_tot_od`='123',`a_od_pr`='0' where `accountno`='BL1772' and `cal_date`='2016-07-10'");

mysql_query("update  `businessloan` set `odintrest`='123',`odprincipal`='0',`amount_topay`='25000.00',`od_cal_date`='2016-07-10' where `loan_accno`='BL1772'");
mysql_query("update  `transaction_ledger` set `outstanding`='5212.00', `a_od_int`='94',`a_tot_od`='1487.4536363636',`a_od_pr`='1393.4536363636' where `accountno`='BL1590' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='94',`odprincipal`='1393.4536363636',`amount_topay`='5212.00',`od_cal_date`='2016-07-21' where `loan_accno`='BL1590'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='138',`a_tot_od`='138',`a_od_pr`='0' where `accountno`='BL1753' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='138',`odprincipal`='0',`amount_topay`='20000.00',`od_cal_date`='2016-07-08' where `loan_accno`='BL1753'");
mysql_query("update  `transaction_ledger` set `outstanding`='16342.00', `a_od_int`='0',`a_tot_od`='2705.91',`a_od_pr`='2705.91' where `accountno`='BL1572' and `cal_date`='2016-07-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2705.91',`amount_topay`='16342.00',`od_cal_date`='2016-07-07' where `loan_accno`='BL1572'");
mysql_query("update  `transaction_ledger` set `outstanding`='15157.00', `a_od_int`='299',`a_tot_od`='7125.6666666667',`a_od_pr`='6826.6666666667' where `accountno`='BL1274' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='299',`odprincipal`='6826.6666666667',`amount_topay`='15157.00',`od_cal_date`='2016-07-21' where `loan_accno`='BL1274'");
mysql_query("update  `transaction_ledger` set `outstanding`='25701.00', `a_od_int`='0',`a_tot_od`='6383.8',`a_od_pr`='6383.8' where `accountno`='BL1505' and `cal_date`='2016-07-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6383.8',`amount_topay`='25701.00',`od_cal_date`='2016-07-10' where `loan_accno`='BL1505'");
mysql_query("update  `transaction_ledger` set `outstanding`='36956.00', `a_od_int`='1677',`a_tot_od`='9542.36',`a_od_pr`='7865.36' where `accountno`='BL1799' and `cal_date`='2016-07-07'");

mysql_query("update  `businessloan` set `odintrest`='1677',`odprincipal`='7865.36',`amount_topay`='36956.00',`od_cal_date`='2016-07-07' where `loan_accno`='BL1799'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='1224',`a_tot_od`='3576.94',`a_od_pr`='2352.94' where `accountno`='BL1789' and `cal_date`='2016-07-15'");

mysql_query("update  `businessloan` set `odintrest`='1224',`odprincipal`='2352.94',`amount_topay`='20000.00',`od_cal_date`='2016-07-15' where `loan_accno`='BL1789'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='818',`a_tot_od`='4151.3366666667',`a_od_pr`='3333.3366666667' where `accountno`='BL1703' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='818',`odprincipal`='3333.3366666667',`amount_topay`='20000.00',`od_cal_date`='2016-07-21' where `loan_accno`='BL1703'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='1201',`a_tot_od`='12110.093636364',`a_od_pr`='10909.093636364' where `accountno`='BL1691' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='1201',`odprincipal`='10909.093636364',`amount_topay`='40000.00',`od_cal_date`='2016-07-08' where `loan_accno`='BL1691'");
mysql_query("update  `transaction_ledger` set `outstanding`='47376.00', `a_od_int`='0',`a_tot_od`='6071.65',`a_od_pr`='6071.65' where `accountno`='BL1621' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6071.65',`amount_topay`='47376.00',`od_cal_date`='2016-07-21' where `loan_accno`='BL1621'");
mysql_query("update  `transaction_ledger` set `outstanding`='25480.00', `a_od_int`='0',`a_tot_od`='2148.33',`a_od_pr`='2148.33' where `accountno`='BL1636' and `cal_date`='2016-07-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2148.33',`amount_topay`='25480.00',`od_cal_date`='2016-07-10' where `loan_accno`='BL1636'");
mysql_query("update  `transaction_ledger` set `outstanding`='55849.00', `a_od_int`='0',`a_tot_od`='10600.59',`a_od_pr`='10600.59' where `accountno`='EL1560' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10600.59',`amount_topay`='55849.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='885',`a_tot_od`='885',`a_od_pr`='0' where `accountno`='EL1752' and `cal_date`='2016-07-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='885',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-07-10' where `loan_accno`='EL1752'");
mysql_query("update  `transaction_ledger` set `outstanding`='69777.00', `a_od_int`='0',`a_tot_od`='11998.77',`a_od_pr`='11998.77' where `accountno`='EL1612' and `cal_date`='2016-07-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='11998.77',`amount_topay`='69777.00',`od_cal_date`='2016-07-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='79788.00', `a_od_int`='0',`a_tot_od`='15144.41',`a_od_pr`='15144.41' where `accountno`='EL1559' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15144.41',`amount_topay`='79788.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1559'");
mysql_query("update  `transaction_ledger` set `outstanding`='55849.00', `a_od_int`='0',`a_tot_od`='10600.59',`a_od_pr`='10600.59' where `accountno`='EL1560' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10600.59',`amount_topay`='55849.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='72190.00', `a_od_int`='0',`a_tot_od`='7537.41',`a_od_pr`='7537.41' where `accountno`='EL1511' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7537.41',`amount_topay`='72190.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='885',`a_tot_od`='885',`a_od_pr`='0' where `accountno`='EL1752' and `cal_date`='2016-07-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='885',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-07-10' where `loan_accno`='EL1752'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='885',`a_tot_od`='885',`a_od_pr`='0' where `accountno`='EL1752' and `cal_date`='2016-07-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='885',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-07-10' where `loan_accno`='EL1752'");
mysql_query("update  `transaction_ledger` set `outstanding`='69777.00', `a_od_int`='0',`a_tot_od`='11998.77',`a_od_pr`='11998.77' where `accountno`='EL1612' and `cal_date`='2016-07-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='11998.77',`amount_topay`='69777.00',`od_cal_date`='2016-07-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='90674.00', `a_od_int`='3485',`a_tot_od`='21937.225555556',`a_od_pr`='18452.225555556' where `accountno`='EL1603' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='3485',`odprincipal`='18452.225555556',`amount_topay`='90674.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1603'");
mysql_query("update  `transaction_ledger` set `outstanding`='55849.00', `a_od_int`='0',`a_tot_od`='10600.59',`a_od_pr`='10600.59' where `accountno`='EL1560' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10600.59',`amount_topay`='55849.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='79788.00', `a_od_int`='0',`a_tot_od`='15144.41',`a_od_pr`='15144.41' where `accountno`='EL1559' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15144.41',`amount_topay`='79788.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1559'");
mysql_query("update  `transaction_ledger` set `outstanding`='58401.00', `a_od_int`='3349',`a_tot_od`='22963.641764706',`a_od_pr`='19614.641764706' where `accountno`='EL1550' and `cal_date`='2016-07-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='3349',`odprincipal`='19614.641764706',`amount_topay`='58401.00',`od_cal_date`='2016-07-10' where `loan_accno`='EL1550'");
mysql_query("update  `transaction_ledger` set `outstanding`='72190.00', `a_od_int`='0',`a_tot_od`='7537.41',`a_od_pr`='7537.41' where `accountno`='EL1511' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7537.41',`amount_topay`='72190.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='65557.00', `a_od_int`='0',`a_tot_od`='15554.22',`a_od_pr`='15554.22' where `accountno`='EL1436' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15554.22',`amount_topay`='65557.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1436'");
mysql_query("update  `transaction_ledger` set `outstanding`='5000.00', `a_od_int`='74',`a_tot_od`='74',`a_od_pr`='0' where `accountno`='DL1711' and `cal_date`='2016-07-13'");

mysql_query("update  `demand_loan` set `odintrest`='74',`odprincipal`='0',`amount_topay`='5000.00',`od_cal_date`='2016-07-13' where `loan_accno`='DL1711'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='3304',`a_tot_od`='3304',`a_od_pr`='0' where `accountno`='DL1714' and `cal_date`='2016-07-20'");

mysql_query("update  `demand_loan` set `odintrest`='3304',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-07-20' where `loan_accno`='DL1714'");
mysql_query("update  `transaction_ledger` set `outstanding`='4000.00', `a_od_int`='85',`a_tot_od`='85',`a_od_pr`='0' where `accountno`='DL1730' and `cal_date`='2016-07-12'");

mysql_query("update  `demand_loan` set `odintrest`='85',`odprincipal`='0',`amount_topay`='4000.00',`od_cal_date`='2016-07-12' where `loan_accno`='DL1730'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='248',`a_tot_od`='248',`a_od_pr`='0' where `accountno`='GL1419' and `cal_date`='2016-07-15'");

mysql_query("update  `goldloan` set `odintrest`='248',`odprincipal`='0',`amount_topay`='2500.00',`od_cal_date`='2016-07-15' where `loan_accno`='GL1419'");
mysql_query("update  `transaction_ledger` set `outstanding`='6000.00', `a_od_int`='405',`a_tot_od`='405',`a_od_pr`='0' where `accountno`='GL1815' and `cal_date`='2016-07-21'");

mysql_query("update  `goldloan` set `odintrest`='405',`odprincipal`='0',`amount_topay`='6000.00',`od_cal_date`='2016-07-21' where `loan_accno`='GL1815'");





















mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='48', `b_od_pri`='452',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='452', `outstanding`='2108',`a_od_int`='0',`a_tot_od`='1143.3366666667',`a_od_pr`='1143.3366666667',`collection`='500.00',`coll_date`='2016-07-12' where `accountno`='BL1484' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1143.3366666667',`amount_topay`='2108',`last_refund_date`='2016-07-12',`last_refund_amt`='500.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='452',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='48',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-07-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='803', `b_od_pri`='4953',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4953', `outstanding`='36131',`a_od_int`='0',`a_tot_od`='6131',`a_od_pr`='6131',`collection`='5756.00',`coll_date`='2016-07-19' where `accountno`='EL1602' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6131',`amount_topay`='36131',`last_refund_date`='2016-07-19',`last_refund_amt`='5756.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='4953',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-07-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='803',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-07-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='1060',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1060', `outstanding`='7306',`a_od_int`='0',`a_tot_od`='942.36',`a_od_pr`='942.36',`collection`='1060.00',`coll_date`='2016-07-11' where `accountno`='BL1641' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='942.36',`amount_topay`='7306',`last_refund_date`='2016-07-11',`last_refund_amt`='1060.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='1060',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-07-11' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='229', `b_od_pri`='1621',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1621', `outstanding`='10633',`a_od_int`='0',`a_tot_od`='2300.6766666667',`a_od_pr`='2300.6766666667',`collection`='1850.00',`coll_date`='2016-07-30' where `accountno`='BL1502' and `cal_date`='2016-07-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2300.6766666667',`amount_topay`='10633',`last_refund_date`='2016-07-30',`last_refund_amt`='1850.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='1621',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='229',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='118', `b_od_pri`='357',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='357', `outstanding`='0',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='475.00',`coll_date`='2016-07-26' where `accountno`='GRL1311' and `cal_date`='2016-07-20'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='0',`last_refund_date`='2016-07-26',`last_refund_amt`='475.00', `od_cal_date`='2016-08-20',`loancomplited`='1' where `loan_accno`='GRL1311'");

mysql_query("UPDATE   `transaction` set `amount`='357',`details`='grouploan Refund' where `accountno`='GRL1311' and `date`='2016-07-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='118',`details`='grouploan Interest' where `accountno`='GRL1311' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1590', `b_od_pri`='5260',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5260', `outstanding`='93302',`a_od_int`='0',`a_tot_od`='5801.9966666667',`a_od_pr`='5801.9966666667',`collection`='6850.00',`coll_date`='2016-07-29' where `accountno`='EL1698' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5801.9966666667',`amount_topay`='93302',`last_refund_date`='2016-07-29',`last_refund_amt`='6850.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='EL1698'");

mysql_query("UPDATE   `transaction` set `amount`='5260',`details`='enterpriseloan Refund' where `accountno`='EL1698' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1590',`details`='enterpriseloan Interest' where `accountno`='EL1698' and `date`='2016-07-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1391', `b_od_pri`='1625.01',`b_cur_pri`='2464.99',`a_pre_pri`='0',`tot_pr`='4090', `outstanding`='64171',`a_od_int`='0',`a_tot_od`='1701.6766666667',`a_od_pr`='1701.6766666667',`collection`='5481.00',`coll_date`='2016-07-29' where `accountno`='EL1438' and `cal_date`='2016-07-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='1701.6766666667',`amount_topay`='64171',`last_refund_date`='2016-07-29',`last_refund_amt`='5481.00', `od_cal_date`='2016-08-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='4090',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-07-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1391',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-07-29' and `interest`>0 ");







mysql_query("update  `transaction_ledger` set `outstanding`='14023.00', `a_od_int`='0',`a_tot_od`='2659.92',`a_od_pr`='2659.92' where `accountno`='BL1522' and `cal_date`='2016-07-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2659.92',`amount_topay`='14023.00',`od_cal_date`='2016-07-07' where `loan_accno`='BL1522'");


?>