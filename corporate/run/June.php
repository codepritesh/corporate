<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);



mysql_query("update  `transaction_ledger` set `b_od_int`='760',`b_cur_int`='740', `b_od_pri`='1438',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1438', `outstanding`='48562',`a_od_int`='0',`a_tot_od`='5083.7430434783',`a_od_pr`='5083.7430434783',`collection`='2938.00',`coll_date`='2016-06-27' where `accountno`='BL1679' and `cal_date`='2016-06-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5083.7430434783',`amount_topay`='48562',`last_refund_date`='2016-06-27',`last_refund_amt`='2938.00', `od_cal_date`='2016-07-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='1438',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1500',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='336', `b_od_pri`='1822',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1822', `outstanding`='16734',`a_od_int`='0',`a_tot_od`='4006.7218181818',`a_od_pr`='4006.7218181818',`collection`='2158.00',`coll_date`='2016-06-27' where `accountno`='BL1643' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4006.7218181818',`amount_topay`='16734',`last_refund_date`='2016-06-27',`last_refund_amt`='2158.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1822',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='336',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='459.00',`b_cur_int`='0', `b_od_pri`='2731',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2731', `outstanding`='27269',`a_od_int`='0',`a_tot_od`='2723.55',`a_od_pr`='2723.55',`collection`='3190.00',`coll_date`='2016-06-11' where `accountno`='BL1692' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2723.55',`amount_topay`='27269',`last_refund_date`='2016-06-11',`last_refund_amt`='3190.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2731',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-06-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='459',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-06-11' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='337', `b_od_pri`='2273',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2273', `outstanding`='16342',`a_od_int`='0',`a_tot_od`='2705.9072727273',`a_od_pr`='2705.9072727273',`collection`='2610.00',`coll_date`='2016-06-28' where `accountno`='BL1572' and `cal_date`='2016-06-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2705.9072727273',`amount_topay`='16342',`last_refund_date`='2016-06-28',`last_refund_amt`='2610.00', `od_cal_date`='2016-07-07',`loancomplited`='0' where `loan_accno`='BL1572'");

mysql_query("UPDATE   `transaction` set `amount`='2273',`details`='businessloan Refund' where `accountno`='BL1572' and `date`='2016-06-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='337',`details`='businessloan Interest' where `accountno`='BL1572' and `date`='2016-06-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='459',`b_cur_int`='444', `b_od_pri`='1321',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1321', `outstanding`='28679',`a_od_int`='0',`a_tot_od`='3973.1158823529',`a_od_pr`='3973.1158823529',`collection`='2224.00',`coll_date`='2016-06-27' where `accountno`='BL1690' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3973.1158823529',`amount_topay`='28679',`last_refund_date`='2016-06-27',`last_refund_amt`='2224.00', `od_cal_date`='2016-07-21',`loancomplited`='0' where `loan_accno`='BL1690'");

mysql_query("UPDATE   `transaction` set `amount`='1321',`details`='businessloan Refund' where `accountno`='BL1690' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='903',`details`='businessloan Interest' where `accountno`='BL1690' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='278', `b_od_pri`='1669',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1669', `outstanding`='13679',`a_od_int`='0',`a_tot_od`='2012.6666666667',`a_od_pr`='2012.6666666667',`collection`='1947.00',`coll_date`='2016-06-30' where `accountno`='BL1613' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2012.6666666667',`amount_topay`='13679',`last_refund_date`='2016-06-30',`last_refund_amt`='1947.00', `od_cal_date`='2016-07-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1669',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='278',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='454', `b_od_pri`='2732',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2732', `outstanding`='22383',`a_od_int`='0',`a_tot_od`='3292.0927272727',`a_od_pr`='3292.0927272727',`collection`='3186.00',`coll_date`='2016-06-29' where `accountno`='BL1616' and `cal_date`='2016-06-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3292.0927272727',`amount_topay`='22383',`last_refund_date`='2016-06-29',`last_refund_amt`='3186.00', `od_cal_date`='2016-07-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2732',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-06-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='454',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-06-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='325',`b_cur_int`='65', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='379',`a_tot_od`='2987.6956521739',`a_od_pr`='2608.6956521739',`collection`='390.00',`coll_date`='2016-06-24' where `accountno`='BL1717' and `cal_date`='2016-06-12'");

mysql_query("update  `businessloan` set `odintrest`='379',`odprincipal`='2608.6956521739',`amount_topay`='30000',`last_refund_date`='2016-06-24',`last_refund_amt`='390.00', `od_cal_date`='2016-07-12',`loancomplited`='0' where `loan_accno`='BL1717'");

mysql_query("UPDATE   `transaction` set `interest`='390',`details`='businessloan Interest' where `accountno`='BL1717' and `date`='2016-06-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='760',`b_cur_int`='740', `b_od_pri`='1438',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1438', `outstanding`='48562',`a_od_int`='0',`a_tot_od`='5083.7430434783',`a_od_pr`='5083.7430434783',`collection`='2938.00',`coll_date`='2016-06-27' where `accountno`='BL1679' and `cal_date`='2016-06-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5083.7430434783',`amount_topay`='48562',`last_refund_date`='2016-06-27',`last_refund_amt`='2938.00', `od_cal_date`='2016-07-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='1438',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1500',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='503', `b_od_pri`='2734',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2734', `outstanding`='25099',`a_od_int`='0',`a_tot_od`='6008.0927272727',`a_od_pr`='6008.0927272727',`collection`='3237.00',`coll_date`='2016-06-27' where `accountno`='BL1642' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6008.0927272727',`amount_topay`='25099',`last_refund_date`='2016-06-27',`last_refund_amt`='3237.00', `od_cal_date`='2016-07-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2734',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='503',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2772',`b_cur_int`='904', `b_od_pri`='2624',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2624', `outstanding`='47376',`a_od_int`='0',`a_tot_od`='6071.6460869565',`a_od_pr`='6071.6460869565',`collection`='6300.00',`coll_date`='2016-06-27' where `accountno`='BL1621' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6071.6460869565',`amount_topay`='47376',`last_refund_date`='2016-06-27',`last_refund_amt`='6300.00', `od_cal_date`='2016-07-21',`loancomplited`='0' where `loan_accno`='BL1621'");

mysql_query("UPDATE   `transaction` set `amount`='2624',`details`='businessloan Refund' where `accountno`='BL1621' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3676',`details`='businessloan Interest' where `accountno`='BL1621' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='91', `b_od_pri`='539',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='539', `outstanding`='4484',`a_od_int`='0',`a_tot_od`='665.81454545455',`a_od_pr`='665.81454545455',`collection`='630.00',`coll_date`='2016-06-22' where `accountno`='BL1628' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='665.81454545455',`amount_topay`='4484',`last_refund_date`='2016-06-22',`last_refund_amt`='630.00', `od_cal_date`='2016-07-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='539',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-06-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='91',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-06-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='498',`b_cur_int`='482', `b_od_pri`='1185',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1185', `outstanding`='25480',`a_od_int`='0',`a_tot_od`='2148.3333333333',`a_od_pr`='2148.3333333333',`collection`='2165.00',`coll_date`='2016-06-22' where `accountno`='BL1636' and `cal_date`='2016-06-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2148.3333333333',`amount_topay`='25480',`last_refund_date`='2016-06-22',`last_refund_amt`='2165.00', `od_cal_date`='2016-07-10',`loancomplited`='0' where `loan_accno`='BL1636'");

mysql_query("UPDATE   `transaction` set `amount`='1185',`details`='businessloan Refund' where `accountno`='BL1636' and `date`='2016-06-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='980',`details`='businessloan Interest' where `accountno`='BL1636' and `date`='2016-06-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='168', `b_od_pri`='911',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='911', `outstanding`='8366',`a_od_int`='0',`a_tot_od`='2002.3609090909',`a_od_pr`='2002.3609090909',`collection`='1079.00',`coll_date`='2016-06-20' where `accountno`='BL1641' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2002.3609090909',`amount_topay`='8366',`last_refund_date`='2016-06-20',`last_refund_amt`='1079.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='911',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-06-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='168',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-06-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='503', `b_od_pri`='2734',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2734', `outstanding`='25099',`a_od_int`='0',`a_tot_od`='6008.0927272727',`a_od_pr`='6008.0927272727',`collection`='3237.00',`coll_date`='2016-06-27' where `accountno`='BL1642' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6008.0927272727',`amount_topay`='25099',`last_refund_date`='2016-06-27',`last_refund_amt`='3237.00', `od_cal_date`='2016-07-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2734',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='503',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='336', `b_od_pri`='1822',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1822', `outstanding`='16734',`a_od_int`='0',`a_tot_od`='4006.7218181818',`a_od_pr`='4006.7218181818',`collection`='2158.00',`coll_date`='2016-06-27' where `accountno`='BL1643' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4006.7218181818',`amount_topay`='16734',`last_refund_date`='2016-06-27',`last_refund_amt`='2158.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1822',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='336',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1135', `b_od_pri`='4174',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4174', `outstanding`='55849',`a_od_int`='0',`a_tot_od`='10600.587058824',`a_od_pr`='10600.587058824',`collection`='5309.00',`coll_date`='2016-06-30' where `accountno`='EL1560' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10600.587058824',`amount_topay`='55849',`last_refund_date`='2016-06-30',`last_refund_amt`='5309.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='4174',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1135',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1770', `b_od_pri`='4188',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4188', `outstanding`='89466',`a_od_int`='0',`a_tot_od`='6132.6666666667',`a_od_pr`='6132.6666666667',`collection`='5958.00',`coll_date`='2016-06-22' where `accountno`='EL1632' and `cal_date`='2016-06-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6132.6666666667',`amount_topay`='89466',`last_refund_date`='2016-06-22',`last_refund_amt`='5958.00', `od_cal_date`='2016-07-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4188',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-06-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1770',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-06-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1401', `b_od_pri`='4349',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4349', `outstanding`='69777',`a_od_int`='0',`a_tot_od`='11998.774444444',`a_od_pr`='11998.774444444',`collection`='5750.00',`coll_date`='2016-06-30' where `accountno`='EL1612' and `cal_date`='2016-06-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='11998.774444444',`amount_topay`='69777',`last_refund_date`='2016-06-30',`last_refund_amt`='5750.00', `od_cal_date`='2016-07-20',`loancomplited`='0' where `loan_accno`='EL1612'");

mysql_query("UPDATE   `transaction` set `amount`='4349',`details`='enterpriseloan Refund' where `accountno`='EL1612' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1401',`details`='enterpriseloan Interest' where `accountno`='EL1612' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1621', `b_od_pri`='5963',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5963', `outstanding`='79788',`a_od_int`='0',`a_tot_od`='15144.412941176',`a_od_pr`='15144.412941176',`collection`='7584.00',`coll_date`='2016-06-30' where `accountno`='EL1559' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15144.412941176',`amount_topay`='79788',`last_refund_date`='2016-06-30',`last_refund_amt`='7584.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='5963',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1621',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1135', `b_od_pri`='4174',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4174', `outstanding`='55849',`a_od_int`='0',`a_tot_od`='10600.587058824',`a_od_pr`='10600.587058824',`collection`='5309.00',`coll_date`='2016-06-30' where `accountno`='EL1560' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10600.587058824',`amount_topay`='55849',`last_refund_date`='2016-06-30',`last_refund_amt`='5309.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='4174',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1135',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1430', `b_od_pri`='4181',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4181', `outstanding`='68294',`a_od_int`='0',`a_tot_od`='5795.6666666667',`a_od_pr`='5795.6666666667',`collection`='5611.00',`coll_date`='2016-06-17' where `accountno`='EL1439' and `cal_date`='2016-06-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5795.6666666667',`amount_topay`='68294',`last_refund_date`='2016-06-17',`last_refund_amt`='5611.00', `od_cal_date`='2016-07-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4181',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-06-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1430',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-06-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1429', `b_od_pri`='4182',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4182', `outstanding`='68279',`a_od_int`='0',`a_tot_od`='5791.6666666667',`a_od_pr`='5791.6666666667',`collection`='5611.00',`coll_date`='2016-06-17' where `accountno`='EL1440' and `cal_date`='2016-06-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5791.6666666667',`amount_topay`='68279',`last_refund_date`='2016-06-17',`last_refund_amt`='5611.00', `od_cal_date`='2016-07-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4182',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-06-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1429',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-06-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='521',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='100000',`a_od_int`='1562',`a_tot_od`='10257.652173913',`a_od_pr`='8695.652173913',`collection`='521.00',`coll_date`='2016-06-17' where `accountno`='EL1726' and `cal_date`='2016-06-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='1562',`odprincipal`='8695.652173913',`amount_topay`='100000',`last_refund_date`='2016-06-17',`last_refund_amt`='521.00', `od_cal_date`='2016-07-06',`loancomplited`='0' where `loan_accno`='EL1726'");

mysql_query("UPDATE   `transaction` set `interest`='521',`details`='enterpriseloan Interest' where `accountno`='EL1726' and `date`='2016-06-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1770', `b_od_pri`='4188',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4188', `outstanding`='89466',`a_od_int`='0',`a_tot_od`='6132.6666666667',`a_od_pr`='6132.6666666667',`collection`='5958.00',`coll_date`='2016-06-22' where `accountno`='EL1632' and `cal_date`='2016-06-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6132.6666666667',`amount_topay`='89466',`last_refund_date`='2016-06-22',`last_refund_amt`='5958.00', `od_cal_date`='2016-07-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4188',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-06-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1770',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-06-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1640',`b_cur_int`='1587', `b_od_pri`='11773',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='11773', `outstanding`='72190',`a_od_int`='0',`a_tot_od`='7537.4058823529',`a_od_pr`='7537.4058823529',`collection`='15000.00',`coll_date`='2016-06-27' where `accountno`='EL1511' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7537.4058823529',`amount_topay`='72190',`last_refund_date`='2016-06-27',`last_refund_amt`='15000.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("UPDATE   `transaction` set `amount`='11773',`details`='enterpriseloan Refund' where `accountno`='EL1511' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3227',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1401', `b_od_pri`='4349',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4349', `outstanding`='69777',`a_od_int`='0',`a_tot_od`='11998.774444444',`a_od_pr`='11998.774444444',`collection`='5750.00',`coll_date`='2016-06-30' where `accountno`='EL1612' and `cal_date`='2016-06-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='11998.774444444',`amount_topay`='69777',`last_refund_date`='2016-06-30',`last_refund_amt`='5750.00', `od_cal_date`='2016-07-20',`loancomplited`='0' where `loan_accno`='EL1612'");

mysql_query("UPDATE   `transaction` set `amount`='4349',`details`='enterpriseloan Refund' where `accountno`='EL1612' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1401',`details`='enterpriseloan Interest' where `accountno`='EL1612' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1135', `b_od_pri`='4174',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4174', `outstanding`='55849',`a_od_int`='0',`a_tot_od`='10600.587058824',`a_od_pr`='10600.587058824',`collection`='5309.00',`coll_date`='2016-06-30' where `accountno`='EL1560' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10600.587058824',`amount_topay`='55849',`last_refund_date`='2016-06-30',`last_refund_amt`='5309.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='4174',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1135',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1621', `b_od_pri`='5963',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5963', `outstanding`='79788',`a_od_int`='0',`a_tot_od`='15144.412941176',`a_od_pr`='15144.412941176',`collection`='7584.00',`coll_date`='2016-06-30' where `accountno`='EL1559' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15144.412941176',`amount_topay`='79788',`last_refund_date`='2016-06-30',`last_refund_amt`='7584.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='5963',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1621',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-06-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1640',`b_cur_int`='1587', `b_od_pri`='11773',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='11773', `outstanding`='72190',`a_od_int`='0',`a_tot_od`='7537.4058823529',`a_od_pr`='7537.4058823529',`collection`='15000.00',`coll_date`='2016-06-27' where `accountno`='EL1511' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7537.4058823529',`amount_topay`='72190',`last_refund_date`='2016-06-27',`last_refund_amt`='15000.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("UPDATE   `transaction` set `amount`='11773',`details`='enterpriseloan Refund' where `accountno`='EL1511' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3227',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1237', `b_od_pri`='3253',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3253', `outstanding`='59437',`a_od_int`='0',`a_tot_od`='9435.3333333333',`a_od_pr`='9435.3333333333',`collection`='4490.00',`coll_date`='2016-06-29' where `accountno`='EL1444' and `cal_date`='2016-06-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='9435.3333333333',`amount_topay`='59437',`last_refund_date`='2016-06-29',`last_refund_amt`='4490.00', `od_cal_date`='2016-07-12',`loancomplited`='0' where `loan_accno`='EL1444'");

mysql_query("UPDATE   `transaction` set `amount`='3253',`details`='enterpriseloan Refund' where `accountno`='EL1444' and `date`='2016-06-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1237',`details`='enterpriseloan Interest' where `accountno`='EL1444' and `date`='2016-06-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1429', `b_od_pri`='4182',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4182', `outstanding`='68279',`a_od_int`='0',`a_tot_od`='5791.6666666667',`a_od_pr`='5791.6666666667',`collection`='5611.00',`coll_date`='2016-06-17' where `accountno`='EL1440' and `cal_date`='2016-06-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5791.6666666667',`amount_topay`='68279',`last_refund_date`='2016-06-17',`last_refund_amt`='5611.00', `od_cal_date`='2016-07-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4182',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-06-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1429',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-06-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1430', `b_od_pri`='4181',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4181', `outstanding`='68294',`a_od_int`='0',`a_tot_od`='5795.6666666667',`a_od_pr`='5795.6666666667',`collection`='5611.00',`coll_date`='2016-06-17' where `accountno`='EL1439' and `cal_date`='2016-06-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5795.6666666667',`amount_topay`='68294',`last_refund_date`='2016-06-17',`last_refund_amt`='5611.00', `od_cal_date`='2016-07-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4181',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-06-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1430',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-06-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='3066',`b_cur_int`='1789', `b_od_pri`='25145',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='25145', `outstanding`='65557',`a_od_int`='0',`a_tot_od`='15554.221111111',`a_od_pr`='15554.221111111',`collection`='30000.00',`coll_date`='2016-06-27' where `accountno`='EL1436' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15554.221111111',`amount_topay`='65557',`last_refund_date`='2016-06-27',`last_refund_amt`='30000.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1436'");

mysql_query("UPDATE   `transaction` set `amount`='25145',`details`='enterpriseloan Refund' where `accountno`='EL1436' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4855',`details`='enterpriseloan Interest' where `accountno`='EL1436' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='118',`b_cur_int`='2', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='8000',`a_od_int`='116',`a_tot_od`='1570.5454545455',`a_od_pr`='1454.5454545455',`collection`='120.00',`coll_date`='2016-06-22' where `accountno`='GRL1706' and `cal_date`='2016-06-10'");

mysql_query("update  `grouploan` set `odintrest`='116',`odprincipal`='1454.5454545455',`amount_topay`='8000',`last_refund_date`='2016-06-22',`last_refund_amt`='120.00', `od_cal_date`='2016-07-10',`loancomplited`='0' where `loan_accno`='GRL1706'");

mysql_query("UPDATE   `transaction` set `interest`='120',`details`='grouploan Interest' where `accountno`='GRL1706' and `date`='2016-06-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='621.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='35000',`a_od_int`='604',`a_tot_od`='604',`a_od_pr`='0',`collection`='621.00',`coll_date`='2016-06-29' where `accountno`='DL1709' and `cal_date`='2016-06-18'");

mysql_query("update  `demand_loan` set `odintrest`='604',`odprincipal`='0',`amount_topay`='35000',`last_refund_date`='2016-06-29',`last_refund_amt`='621.00', `od_cal_date`='2016-07-18',`loancomplited`='0' where `loan_accno`='DL1709'");

mysql_query("UPDATE   `transaction` set `interest`='621',`details`='demand_loan Interest' where `accountno`='DL1709' and `date`='2016-06-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='69', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='5000',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='69.00',`coll_date`='2016-06-13' where `accountno`='DL1711' and `cal_date`='2016-06-13'");

mysql_query("update  `demand_loan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='5000',`last_refund_date`='2016-06-13',`last_refund_amt`='69.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='DL1711'");

mysql_query("UPDATE   `transaction` set `interest`='69',`details`='demand_loan Interest' where `accountno`='DL1711' and `date`='2016-06-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='1018.67',`b_cur_pri`='0',`a_pre_pri`='18.33',`tot_pr`='1037', `outstanding`='8266',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1037.00',`coll_date`='2016-06-13' where `accountno`='AL1454' and `cal_date`='2016-06-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='8266',`last_refund_date`='2016-06-13',`last_refund_amt`='1037.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='1037',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-06-13' and `amount`>0 ");







mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='217',`a_tot_od`='217',`a_od_pr`='0' where `accountno`='BL1734' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='217',`odprincipal`='0',`amount_topay`='40000.00',`od_cal_date`='2016-06-11' where `loan_accno`='BL1734'");
mysql_query("update  `transaction_ledger` set `outstanding`='5212.00', `a_od_int`='0',`a_tot_od`='757.09',`a_od_pr`='757.09' where `accountno`='BL1590' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='757.09',`amount_topay`='5212.00',`od_cal_date`='2016-06-21' where `loan_accno`='BL1590'");
mysql_query("update  `transaction_ledger` set `outstanding`='37058.00', `a_od_int`='2796',`a_tot_od`='17126.36',`a_od_pr`='14330.36' where `accountno`='BL1767' and `cal_date`='2016-06-07'");

mysql_query("update  `businessloan` set `odintrest`='2796',`odprincipal`='14330.36',`amount_topay`='37058.00',`od_cal_date`='2016-06-07' where `loan_accno`='BL1767'");
mysql_query("update  `transaction_ledger` set `outstanding`='16785.00', `a_od_int`='1266',`a_tot_od`='3932.94',`a_od_pr`='2666.94' where `accountno`='BL1753' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='1266',`odprincipal`='2666.94',`amount_topay`='16785.00',`od_cal_date`='2016-06-08' where `loan_accno`='BL1753'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='138',`a_tot_od`='138',`a_od_pr`='0' where `accountno`='BL1724' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='138',`odprincipal`='0',`amount_topay`='20000.00',`od_cal_date`='2016-06-08' where `loan_accno`='BL1724'");
mysql_query("update  `transaction_ledger` set `outstanding`='5000.00', `a_od_int`='64',`a_tot_od`='64',`a_od_pr`='0' where `accountno`='BL1715' and `cal_date`='2016-06-12'");

mysql_query("update  `businessloan` set `odintrest`='64',`odprincipal`='0',`amount_topay`='5000.00',`od_cal_date`='2016-06-12' where `loan_accno`='BL1715'");
mysql_query("update  `transaction_ledger` set `outstanding`='16830.00', `a_od_int`='0',`a_tot_od`='1535.41',`a_od_pr`='1535.41' where `accountno`='BL1575' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1535.41',`amount_topay`='16830.00',`od_cal_date`='2016-06-11' where `loan_accno`='BL1575'");
mysql_query("update  `transaction_ledger` set `outstanding`='6712.00', `a_od_int`='506',`a_tot_od`='1571.18',`a_od_pr`='1065.18' where `accountno`='BL1760' and `cal_date`='2016-06-13'");

mysql_query("update  `businessloan` set `odintrest`='506',`odprincipal`='1065.18',`amount_topay`='6712.00',`od_cal_date`='2016-06-13' where `loan_accno`='BL1760'");
mysql_query("update  `transaction_ledger` set `outstanding`='15157.00', `a_od_int`='0',`a_tot_od`='5160',`a_od_pr`='5160' where `accountno`='BL1274' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5160',`amount_topay`='15157.00',`od_cal_date`='2016-06-21' where `loan_accno`='BL1274'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='4282',`a_tot_od`='20752.58',`a_od_pr`='16470.58' where `accountno`='BL1755' and `cal_date`='2016-06-13'");

mysql_query("update  `businessloan` set `odintrest`='4282',`odprincipal`='16470.58',`amount_topay`='40000.00',`od_cal_date`='2016-06-13' where `loan_accno`='BL1755'");
mysql_query("update  `transaction_ledger` set `outstanding`='12669.00', `a_od_int`='956',`a_tot_od`='3919.7',`a_od_pr`='2963.7' where `accountno`='BL1748' and `cal_date`='2016-06-12'");

mysql_query("update  `businessloan` set `odintrest`='956',`odprincipal`='2963.7',`amount_topay`='12669.00',`od_cal_date`='2016-06-12' where `loan_accno`='BL1748'");
mysql_query("update  `transaction_ledger` set `outstanding`='13919.00', `a_od_int`='1015',`a_tot_od`='3623.5139130435',`a_od_pr`='2608.5139130435' where `accountno`='BL1512' and `cal_date`='2016-06-15'");

mysql_query("update  `businessloan` set `odintrest`='1015',`odprincipal`='2608.5139130435',`amount_topay`='13919.00',`od_cal_date`='2016-06-15' where `loan_accno`='BL1512'");
mysql_query("update  `transaction_ledger` set `outstanding`='3826.00', `a_od_int`='230',`a_tot_od`='1138.67',`a_od_pr`='908.67' where `accountno`='BL1737' and `cal_date`='2016-06-20'");

mysql_query("update  `businessloan` set `odintrest`='230',`odprincipal`='908.67',`amount_topay`='3826.00',`od_cal_date`='2016-06-20' where `loan_accno`='BL1737'");
mysql_query("update  `transaction_ledger` set `outstanding`='19127.00', `a_od_int`='1151',`a_tot_od`='5695.33',`a_od_pr`='4544.33' where `accountno`='BL1735' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='1151',`odprincipal`='4544.33',`amount_topay`='19127.00',`od_cal_date`='2016-06-08' where `loan_accno`='BL1735'");
mysql_query("update  `transaction_ledger` set `outstanding`='37058.00', `a_od_int`='2796',`a_tot_od`='17126.36',`a_od_pr`='14330.36' where `accountno`='BL1767' and `cal_date`='2016-06-07'");

mysql_query("update  `businessloan` set `odintrest`='2796',`odprincipal`='14330.36',`amount_topay`='37058.00',`od_cal_date`='2016-06-07' where `loan_accno`='BL1767'");
mysql_query("update  `transaction_ledger` set `outstanding`='22234.00', `a_od_int`='1678',`a_tot_od`='7548.54',`a_od_pr`='5870.54' where `accountno`='BL1761' and `cal_date`='2016-06-10'");

mysql_query("update  `businessloan` set `odintrest`='1678',`odprincipal`='5870.54',`amount_topay`='22234.00',`od_cal_date`='2016-06-10' where `loan_accno`='BL1761'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='4282',`a_tot_od`='20752.58',`a_od_pr`='16470.58' where `accountno`='BL1755' and `cal_date`='2016-06-13'");

mysql_query("update  `businessloan` set `odintrest`='4282',`odprincipal`='16470.58',`amount_topay`='40000.00',`od_cal_date`='2016-06-13' where `loan_accno`='BL1755'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='522',`a_tot_od`='2188.6666666667',`a_od_pr`='1666.6666666667' where `accountno`='BL1703' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='522',`odprincipal`='1666.6666666667',`amount_topay`='20000.00',`od_cal_date`='2016-06-21' where `loan_accno`='BL1703'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='266',`a_tot_od`='266',`a_od_pr`='0' where `accountno`='BL1702' and `cal_date`='2016-06-06'");

mysql_query("update  `businessloan` set `odintrest`='266',`odprincipal`='0',`amount_topay`='20000.00',`od_cal_date`='2016-06-06' where `loan_accno`='BL1702'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='609',`a_tot_od`='7881.73',`a_od_pr`='7272.73' where `accountno`='BL1691' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='609',`odprincipal`='7272.73',`amount_topay`='40000.00',`od_cal_date`='2016-06-08' where `loan_accno`='BL1691'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='1405',`a_tot_od`='1405',`a_od_pr`='0' where `accountno`='EL1712' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1405',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-06-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='93082.00', `a_od_int`='0',`a_tot_od`='15304.67',`a_od_pr`='15304.67' where `accountno`='EL1604' and `cal_date`='2016-06-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15304.67',`amount_topay`='93082.00',`od_cal_date`='2016-06-12' where `loan_accno`='EL1604'");
mysql_query("update  `transaction_ledger` set `outstanding`='83894.00', `a_od_int`='6682',`a_tot_od`='19987.7',`a_od_pr`='13305.7' where `accountno`='EL1752' and `cal_date`='2016-06-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='6682',`odprincipal`='13305.7',`amount_topay`='83894.00',`od_cal_date`='2016-06-10' where `loan_accno`='EL1752'");
mysql_query("update  `transaction_ledger` set `outstanding`='93082.00', `a_od_int`='0',`a_tot_od`='15304.67',`a_od_pr`='15304.67' where `accountno`='EL1604' and `cal_date`='2016-06-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15304.67',`amount_topay`='93082.00',`od_cal_date`='2016-06-12' where `loan_accno`='EL1604'");
mysql_query("update  `transaction_ledger` set `outstanding`='83894.00', `a_od_int`='6682',`a_tot_od`='19987.7',`a_od_pr`='13305.7' where `accountno`='EL1752' and `cal_date`='2016-06-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='6682',`odprincipal`='13305.7',`amount_topay`='83894.00',`od_cal_date`='2016-06-10' where `loan_accno`='EL1752'");
mysql_query("update  `transaction_ledger` set `outstanding`='67012.00', `a_od_int`='3209',`a_tot_od`='13703.6',`a_od_pr`='10494.6' where `accountno`='EL1757' and `cal_date`='2016-06-21'");

mysql_query("update  `enterpriseloan` set `odintrest`='3209',`odprincipal`='10494.6',`amount_topay`='67012.00',`od_cal_date`='2016-06-21' where `loan_accno`='EL1757'");
mysql_query("update  `transaction_ledger` set `outstanding`='83894.00', `a_od_int`='6682',`a_tot_od`='19987.7',`a_od_pr`='13305.7' where `accountno`='EL1752' and `cal_date`='2016-06-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='6682',`odprincipal`='13305.7',`amount_topay`='83894.00',`od_cal_date`='2016-06-10' where `loan_accno`='EL1752'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='1405',`a_tot_od`='1405',`a_od_pr`='0' where `accountno`='EL1712' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1405',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-06-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='90674.00', `a_od_int`='1771',`a_tot_od`='14667.665555556',`a_od_pr`='12896.665555556' where `accountno`='EL1603' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1771',`odprincipal`='12896.665555556',`amount_topay`='90674.00',`od_cal_date`='2016-06-13' where `loan_accno`='EL1603'");
mysql_query("update  `transaction_ledger` set `outstanding`='58401.00', `a_od_int`='2245',`a_tot_od`='18330.231764706',`a_od_pr`='16085.231764706' where `accountno`='EL1550' and `cal_date`='2016-06-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='2245',`odprincipal`='16085.231764706',`amount_topay`='58401.00',`od_cal_date`='2016-06-10' where `loan_accno`='EL1550'");
mysql_query("update  `transaction_ledger` set `outstanding`='7000.00', `a_od_int`='155',`a_tot_od`='155',`a_od_pr`='0' where `accountno`='DL1707' and `cal_date`='2016-06-20'");

mysql_query("update  `demand_loan` set `odintrest`='155',`odprincipal`='0',`amount_topay`='7000.00',`od_cal_date`='2016-06-20' where `loan_accno`='DL1707'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='1825',`a_tot_od`='1825',`a_od_pr`='0' where `accountno`='DL1714' and `cal_date`='2016-06-20'");

mysql_query("update  `demand_loan` set `odintrest`='1825',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-06-20' where `loan_accno`='DL1714'");
mysql_query("update  `transaction_ledger` set `outstanding`='4000.00', `a_od_int`='26',`a_tot_od`='26',`a_od_pr`='0' where `accountno`='DL1730' and `cal_date`='2016-06-12'");

mysql_query("update  `demand_loan` set `odintrest`='26',`odprincipal`='0',`amount_topay`='4000.00',`od_cal_date`='2016-06-12' where `loan_accno`='DL1730'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='199',`a_tot_od`='199',`a_od_pr`='0' where `accountno`='GL1419' and `cal_date`='2016-06-15'");

mysql_query("update  `goldloan` set `odintrest`='199',`odprincipal`='0',`amount_topay`='2500.00',`od_cal_date`='2016-06-15' where `loan_accno`='GL1419'");














mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='295', `b_od_pri`='2275',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2275', `outstanding`='14023',`a_od_int`='0',`a_tot_od`='2659.9172727273',`a_od_pr`='2659.9172727273',`collection`='2570.00',`coll_date`='2016-06-13' where `accountno`='BL1522' and `cal_date`='2016-06-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2659.9172727273',`amount_topay`='14023',`last_refund_date`='2016-06-13',`last_refund_amt`='2570.00', `od_cal_date`='2016-07-07',`loancomplited`='0' where `loan_accno`='BL1522'");

mysql_query("UPDATE   `transaction` set `amount`='2275',`details`='businessloan Refund' where `accountno`='BL1522' and `date`='2016-06-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='295',`details`='businessloan Interest' where `accountno`='BL1522' and `date`='2016-06-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='56', `b_od_pri`='544',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='544', `outstanding`='2560',`a_od_int`='0',`a_tot_od`='1178.6666666667',`a_od_pr`='1178.6666666667',`collection`='600.00',`coll_date`='2016-06-29' where `accountno`='BL1484' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1178.6666666667',`amount_topay`='2560',`last_refund_date`='2016-06-29',`last_refund_amt`='600.00', `od_cal_date`='2016-07-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='544',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-06-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='56',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-06-29' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='871', `b_od_pri`='5008',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5008', `outstanding`='41084',`a_od_int`='0',`a_tot_od`='6084',`a_od_pr`='6084',`collection`='5879.00',`coll_date`='2016-06-22' where `accountno`='EL1602' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6084',`amount_topay`='41084',`last_refund_date`='2016-06-22',`last_refund_amt`='5879.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='5008',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-06-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='871',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-06-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='168', `b_od_pri`='911',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='911', `outstanding`='8366',`a_od_int`='0',`a_tot_od`='2002.3609090909',`a_od_pr`='2002.3609090909',`collection`='1079.00',`coll_date`='2016-06-20' where `accountno`='BL1641' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2002.3609090909',`amount_topay`='8366',`last_refund_date`='2016-06-20',`last_refund_amt`='1079.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='911',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-06-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='168',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-06-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='253', `b_od_pri`='1747',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1747', `outstanding`='12254',`a_od_int`='0',`a_tot_od`='2255.0066666667',`a_od_pr`='2255.0066666667',`collection`='2000.00',`coll_date`='2016-06-24' where `accountno`='BL1502' and `cal_date`='2016-06-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2255.0066666667',`amount_topay`='12254',`last_refund_date`='2016-06-24',`last_refund_amt`='2000.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='1747',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-06-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='253',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-06-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='26',`b_cur_int`='25', `b_od_pri`='842.00666666667',`b_cur_pri`='56.993333333333',`a_pre_pri`='0',`tot_pr`='899', `outstanding`='357',`a_od_int`='0',`a_tot_od`='357',`a_od_pr`='357',`collection`='950.00',`coll_date`='2016-06-27' where `accountno`='GRL1311' and `cal_date`='2016-06-20'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='357',`amount_topay`='357',`last_refund_date`='2016-06-27',`last_refund_amt`='950.00', `od_cal_date`='2016-07-20',`loancomplited`='0' where `loan_accno`='GRL1311'");

mysql_query("UPDATE   `transaction` set `amount`='899',`details`='grouploan Refund' where `accountno`='GRL1311' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='51',`details`='grouploan Interest' where `accountno`='GRL1311' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2134',`b_cur_int`='1562', `b_od_pri`='1438',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1438', `outstanding`='98562',`a_od_int`='0',`a_tot_od`='6895.3333333333',`a_od_pr`='6895.3333333333',`collection`='5134.00',`coll_date`='2016-06-28' where `accountno`='EL1698' and `cal_date`='2016-06-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6895.3333333333',`amount_topay`='98562',`last_refund_date`='2016-06-28',`last_refund_amt`='5134.00', `od_cal_date`='2016-07-13',`loancomplited`='0' where `loan_accno`='EL1698'");

mysql_query("UPDATE   `transaction` set `amount`='1438',`details`='enterpriseloan Refund' where `accountno`='EL1698' and `date`='2016-06-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3696',`details`='enterpriseloan Interest' where `accountno`='EL1698' and `date`='2016-06-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1429', `b_od_pri`='1640.34',`b_cur_pri`='2541.66',`a_pre_pri`='0',`tot_pr`='4182', `outstanding`='68261',`a_od_int`='0',`a_tot_od`='1625.0066666667',`a_od_pr`='1625.0066666667',`collection`='5611.00',`coll_date`='2016-06-17' where `accountno`='EL1438' and `cal_date`='2016-06-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='1625.0066666667',`amount_topay`='68261',`last_refund_date`='2016-06-17',`last_refund_amt`='5611.00', `od_cal_date`='2016-07-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='4182',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-06-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1429',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-06-17' and `interest`>0 ");




?>