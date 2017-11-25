<?php

mysql_connect('localhost','root','');
mysql_select_db('corporate1');

ini_set("display_errors",1);

mysql_query("update  `transaction_ledger` set `b_od_int`='119',`b_cur_int`='115', `b_od_pri`='529',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='529', `outstanding`='5843',`a_od_int`='0',`a_tot_od`='751.72727272727',`a_od_pr`='751.72727272727',`collection`='763.00',`coll_date`='2016-04-30' where `accountno`='BL1590' and `cal_date`='2016-04-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='751.72727272727',`amount_topay`='5843',`last_refund_date`='2016-04-30',`last_refund_amt`='763.00', `od_cal_date`='2016-05-21',`loancomplited`='0' where `loan_accno`='BL1590'");

mysql_query("UPDATE   `transaction` set `amount`='529',`details`='businessloan Refund' where `accountno`='BL1590' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='234',`details`='businessloan Interest' where `accountno`='BL1590' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='338',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='20000',`a_od_int`='362',`a_tot_od`='3998.3636363636',`a_od_pr`='3636.3636363636',`collection`='338.00',`coll_date`='2016-04-28' where `accountno`='BL1643' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='362',`odprincipal`='3636.3636363636',`amount_topay`='20000',`last_refund_date`='2016-04-28',`last_refund_amt`='338.00', `od_cal_date`='2016-05-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `interest`='338',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-04-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='429',`b_cur_int`='415', `b_od_pri`='2086',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2086', `outstanding`='20868',`a_od_int`='0',`a_tot_od`='2686.4545454545',`a_od_pr`='2686.4545454545',`collection`='2930.00',`coll_date`='2016-04-30' where `accountno`='BL1572' and `cal_date`='2016-04-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2686.4545454545',`amount_topay`='20868',`last_refund_date`='2016-04-30',`last_refund_amt`='2930.00', `od_cal_date`='2016-05-07',`loancomplited`='0' where `loan_accno`='BL1572'");

mysql_query("UPDATE   `transaction` set `amount`='2086',`details`='businessloan Refund' where `accountno`='BL1572' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='844',`details`='businessloan Interest' where `accountno`='BL1572' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='352',`b_cur_int`='340', `b_od_pri`='812',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='812', `outstanding`='18012',`a_od_int`='0',`a_tot_od`='1540.9411764706',`a_od_pr`='1540.9411764706',`collection`='1504.00',`coll_date`='2016-04-26' where `accountno`='BL1575' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1540.9411764706',`amount_topay`='18012',`last_refund_date`='2016-04-26',`last_refund_amt`='1504.00', `od_cal_date`='2016-05-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='812',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-04-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='692',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-04-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='343',`b_cur_int`='332', `b_od_pri`='1335',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1335', `outstanding`='16998',`a_od_int`='0',`a_tot_od`='1998.3333333333',`a_od_pr`='1998.3333333333',`collection`='2010.00',`coll_date`='2016-04-25' where `accountno`='BL1613' and `cal_date`='2016-04-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1998.3333333333',`amount_topay`='16998',`last_refund_date`='2016-04-25',`last_refund_amt`='2010.00', `od_cal_date`='2016-05-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1335',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-04-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='675',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-04-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='977',`b_cur_int`='542', `b_od_pri`='2185',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2185', `outstanding`='27815',`a_od_int`='0',`a_tot_od`='3269.5454545455',`a_od_pr`='3269.5454545455',`collection`='3704.00',`coll_date`='2016-04-28' where `accountno`='BL1616' and `cal_date`='2016-04-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3269.5454545455',`amount_topay`='27815',`last_refund_date`='2016-04-28',`last_refund_amt`='3704.00', `od_cal_date`='2016-05-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2185',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-04-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1519',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-04-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='452',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='542',`a_tot_od`='5996.5454545455',`a_od_pr`='5454.5454545455',`collection`='452.00',`coll_date`='2016-04-09' where `accountno`='BL1642' and `cal_date`='2016-04-08'");

mysql_query("update  `businessloan` set `odintrest`='542',`odprincipal`='5454.5454545455',`amount_topay`='30000',`last_refund_date`='2016-04-09',`last_refund_amt`='452.00', `od_cal_date`='2016-05-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `interest`='452',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-04-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='112',`b_cur_int`='108', `b_od_pri`='437',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='437', `outstanding`='5563',`a_od_int`='0',`a_tot_od`='653.90909090909',`a_od_pr`='653.90909090909',`collection`='657.00',`coll_date`='2016-04-22' where `accountno`='BL1628' and `cal_date`='2016-04-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='653.90909090909',`amount_topay`='5563',`last_refund_date`='2016-04-22',`last_refund_amt`='657.00', `od_cal_date`='2016-05-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='437',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-04-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='220',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-04-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='597', `b_od_pri`='0.00',`b_cur_pri`='1666.6666666667',`a_pre_pri`='0.33333333333326',`tot_pr`='1667', `outstanding`='28333',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2264.00',`coll_date`='2016-04-08' where `accountno`='BL1636' and `cal_date`='2016-04-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='28333',`last_refund_date`='2016-04-08',`last_refund_amt`='2264.00', `od_cal_date`='2016-04-10',`loancomplited`='0' where `loan_accno`='BL1636'");

mysql_query("UPDATE   `transaction` set `amount`='1667',`details`='businessloan Refund' where `accountno`='BL1636' and `date`='2016-04-08' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='597',`details`='businessloan Interest' where `accountno`='BL1636' and `date`='2016-04-08' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='169',`b_cur_int`='1', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='10000',`a_od_int`='180',`a_tot_od`='1998.1818181818',`a_od_pr`='1818.1818181818',`collection`='170.00',`coll_date`='2016-04-18' where `accountno`='BL1641' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='180',`odprincipal`='1818.1818181818',`amount_topay`='10000',`last_refund_date`='2016-04-18',`last_refund_amt`='170.00', `od_cal_date`='2016-05-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `interest`='170',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-04-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='452',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='542',`a_tot_od`='5996.5454545455',`a_od_pr`='5454.5454545455',`collection`='452.00',`coll_date`='2016-04-09' where `accountno`='BL1642' and `cal_date`='2016-04-08'");

mysql_query("update  `businessloan` set `odintrest`='542',`odprincipal`='5454.5454545455',`amount_topay`='30000',`last_refund_date`='2016-04-09',`last_refund_amt`='452.00', `od_cal_date`='2016-05-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `interest`='452',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-04-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='338',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='20000',`a_od_int`='362',`a_tot_od`='3998.3636363636',`a_od_pr`='3636.3636363636',`collection`='338.00',`coll_date`='2016-04-28' where `accountno`='BL1643' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='362',`odprincipal`='3636.3636363636',`amount_topay`='20000',`last_refund_date`='2016-04-28',`last_refund_amt`='338.00', `od_cal_date`='2016-05-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `interest`='338',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-04-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1204.00',`b_cur_int`='1286', `b_od_pri`='2832',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2832', `outstanding`='63005',`a_od_int`='0',`a_tot_od`='5403.6470588235',`a_od_pr`='5403.6470588235',`collection`='5322.00',`coll_date`='2016-04-04' where `accountno`='EL1560' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5403.6470588235',`amount_topay`='63005',`last_refund_date`='2016-04-04',`last_refund_amt`='5322.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2832',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2490',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1904',`b_cur_int`='1842', `b_od_pri`='1254',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1254', `outstanding`='96203',`a_od_int`='0',`a_tot_od`='12870.111111111',`a_od_pr`='12870.111111111',`collection`='5000.00',`coll_date`='2016-04-30' where `accountno`='EL1604' and `cal_date`='2016-04-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='12870.111111111',`amount_topay`='96203',`last_refund_date`='2016-04-30',`last_refund_amt`='5000.00', `od_cal_date`='2016-05-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='1254',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3746',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2647',`b_cur_int`='1890', `b_od_pri`='2276',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2276', `outstanding`='97724',`a_od_int`='0',`a_tot_od`='6057.3333333333',`a_od_pr`='6057.3333333333',`collection`='6813.00',`coll_date`='2016-04-30' where `accountno`='EL1632' and `cal_date`='2016-04-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6057.3333333333',`amount_topay`='97724',`last_refund_date`='2016-04-30',`last_refund_amt`='6813.00', `od_cal_date`='2016-05-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='2276',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4537',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1720.00',`b_cur_int`='1837', `b_od_pri`='4045',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4045', `outstanding`='90010',`a_od_int`='0',`a_tot_od`='7719.3529411765',`a_od_pr`='7719.3529411765',`collection`='7602.00',`coll_date`='2016-04-04' where `accountno`='EL1559' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7719.3529411765',`amount_topay`='90010',`last_refund_date`='2016-04-04',`last_refund_amt`='7602.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4045',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3557',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1204.00',`b_cur_int`='1286', `b_od_pri`='2832',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2832', `outstanding`='63005',`a_od_int`='0',`a_tot_od`='5403.6470588235',`a_od_pr`='5403.6470588235',`collection`='5322.00',`coll_date`='2016-04-04' where `accountno`='EL1560' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5403.6470588235',`amount_topay`='63005',`last_refund_date`='2016-04-04',`last_refund_amt`='5322.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2832',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2490',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1904',`b_cur_int`='1842', `b_od_pri`='1254',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1254', `outstanding`='96203',`a_od_int`='0',`a_tot_od`='12870.111111111',`a_od_pr`='12870.111111111',`collection`='5000.00',`coll_date`='2016-04-30' where `accountno`='EL1604' and `cal_date`='2016-04-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='12870.111111111',`amount_topay`='96203',`last_refund_date`='2016-04-30',`last_refund_amt`='5000.00', `od_cal_date`='2016-05-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='1254',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3746',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1614',`b_cur_int`='1562', `b_od_pri`='2605',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2605', `outstanding`='76560',`a_od_int`='0',`a_tot_od`='5728.3333333333',`a_od_pr`='5728.3333333333',`collection`='5781.00',`coll_date`='2016-04-26' where `accountno`='EL1439' and `cal_date`='2016-04-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5728.3333333333',`amount_topay`='76560',`last_refund_date`='2016-04-26',`last_refund_amt`='5781.00', `od_cal_date`='2016-05-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='2605',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-04-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3176',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-04-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1613',`b_cur_int`='1561', `b_od_pri`='2607',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2607', `outstanding`='76547',`a_od_int`='0',`a_tot_od`='5726.3333333333',`a_od_pr`='5726.3333333333',`collection`='5781.00',`coll_date`='2016-04-26' where `accountno`='EL1440' and `cal_date`='2016-04-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5726.3333333333',`amount_topay`='76547',`last_refund_date`='2016-04-26',`last_refund_amt`='5781.00', `od_cal_date`='2016-05-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='2607',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-04-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3174',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-04-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2647',`b_cur_int`='1890', `b_od_pri`='2276',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2276', `outstanding`='97724',`a_od_int`='0',`a_tot_od`='6057.3333333333',`a_od_pr`='6057.3333333333',`collection`='6813.00',`coll_date`='2016-04-30' where `accountno`='EL1632' and `cal_date`='2016-04-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6057.3333333333',`amount_topay`='97724',`last_refund_date`='2016-04-30',`last_refund_amt`='6813.00', `od_cal_date`='2016-05-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='2276',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4537',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1845',`b_cur_int`='1785', `b_od_pri`='3770',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3770', `outstanding`='90674',`a_od_int`='0',`a_tot_od`='7341.1111111111',`a_od_pr`='7341.1111111111',`collection`='7400.00',`coll_date`='2016-04-30' where `accountno`='EL1603' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7341.1111111111',`amount_topay`='90674',`last_refund_date`='2016-04-30',`last_refund_amt`='7400.00', `od_cal_date`='2016-05-13',`loancomplited`='0' where `loan_accno`='EL1603'");

mysql_query("UPDATE   `transaction` set `amount`='3770',`details`='enterpriseloan Refund' where `accountno`='EL1603' and `date`='2016-04-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3630',`details`='enterpriseloan Interest' where `accountno`='EL1603' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1204.00',`b_cur_int`='1286', `b_od_pri`='2832',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2832', `outstanding`='63005',`a_od_int`='0',`a_tot_od`='5403.6470588235',`a_od_pr`='5403.6470588235',`collection`='5322.00',`coll_date`='2016-04-04' where `accountno`='EL1560' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5403.6470588235',`amount_topay`='63005',`last_refund_date`='2016-04-04',`last_refund_amt`='5322.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2832',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2490',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1720.00',`b_cur_int`='1837', `b_od_pri`='4045',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4045', `outstanding`='90010',`a_od_int`='0',`a_tot_od`='7719.3529411765',`a_od_pr`='7719.3529411765',`collection`='7602.00',`coll_date`='2016-04-04' where `accountno`='EL1559' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7719.3529411765',`amount_topay`='90010',`last_refund_date`='2016-04-04',`last_refund_amt`='7602.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4045',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3557',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2268.00',`b_cur_int`='1171', `b_od_pri`='1561',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1561', `outstanding`='58401',`a_od_int`='0',`a_tot_od`='9026.4117647059',`a_od_pr`='9026.4117647059',`collection`='5000.00',`coll_date`='2016-04-01' where `accountno`='EL1550' and `cal_date`='2016-04-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='9026.4117647059',`amount_topay`='58401',`last_refund_date`='2016-04-01',`last_refund_amt`='5000.00', `od_cal_date`='2016-04-10',`loancomplited`='0' where `loan_accno`='EL1550'");

mysql_query("UPDATE   `transaction` set `amount`='1561',`details`='enterpriseloan Refund' where `accountno`='EL1550' and `date`='2016-04-01' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3439',`details`='enterpriseloan Interest' where `accountno`='EL1550' and `date`='2016-04-01' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1386',`b_cur_int`='1341', `b_od_pri`='1943',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1943', `outstanding`='66060',`a_od_int`='0',`a_tot_od`='9391.6666666667',`a_od_pr`='9391.6666666667',`collection`='4670.00',`coll_date`='2016-04-23' where `accountno`='EL1444' and `cal_date`='2016-04-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='9391.6666666667',`amount_topay`='66060',`last_refund_date`='2016-04-23',`last_refund_amt`='4670.00', `od_cal_date`='2016-05-12',`loancomplited`='0' where `loan_accno`='EL1444'");

mysql_query("UPDATE   `transaction` set `amount`='1943',`details`='enterpriseloan Refund' where `accountno`='EL1444' and `date`='2016-04-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2727',`details`='enterpriseloan Interest' where `accountno`='EL1444' and `date`='2016-04-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1613',`b_cur_int`='1561', `b_od_pri`='2607',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2607', `outstanding`='76547',`a_od_int`='0',`a_tot_od`='5726.3333333333',`a_od_pr`='5726.3333333333',`collection`='5781.00',`coll_date`='2016-04-26' where `accountno`='EL1440' and `cal_date`='2016-04-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5726.3333333333',`amount_topay`='76547',`last_refund_date`='2016-04-26',`last_refund_amt`='5781.00', `od_cal_date`='2016-05-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='2607',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-04-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3174',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-04-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1614',`b_cur_int`='1562', `b_od_pri`='2605',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2605', `outstanding`='76560',`a_od_int`='0',`a_tot_od`='5728.3333333333',`a_od_pr`='5728.3333333333',`collection`='5781.00',`coll_date`='2016-04-26' where `accountno`='EL1439' and `cal_date`='2016-04-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5728.3333333333',`amount_topay`='76560',`last_refund_date`='2016-04-26',`last_refund_amt`='5781.00', `od_cal_date`='2016-05-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='2605',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-04-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3176',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-04-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='5428',`b_cur_int`='572', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='90702',`a_od_int`='1217',`a_tot_od`='30805.111111111',`a_od_pr`='29588.111111111',`collection`='6000.00',`coll_date`='2016-04-30' where `accountno`='EL1436' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1217',`odprincipal`='29588.111111111',`amount_topay`='90702',`last_refund_date`='2016-04-30',`last_refund_amt`='6000.00', `od_cal_date`='2016-05-13',`loancomplited`='0' where `loan_accno`='EL1436'");

mysql_query("UPDATE   `transaction` set `interest`='6000',`details`='enterpriseloan Interest' where `accountno`='EL1436' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='220', `b_od_pri`='0.00',`b_cur_pri`='833.33333333333',`a_pre_pri`='17.666666666667',`tot_pr`='851', `outstanding`='9951',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1071.00',`coll_date`='2016-04-12' where `accountno`='AL1454' and `cal_date`='2016-04-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='9951',`last_refund_date`='2016-04-12',`last_refund_amt`='1071.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='851',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-04-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='220',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-04-12' and `interest`>0 ");











mysql_query("update  `transaction_ledger` set `outstanding`='39882.00', `a_od_int`='4209',`a_tot_od`='9308.74',`a_od_pr`='5099.74' where `accountno`='BL1679' and `cal_date`='2016-04-16'");

mysql_query("update  `businessloan` set `odintrest`='4209',`odprincipal`='5099.74',`amount_topay`='39882.00',`od_cal_date`='2016-04-16' where `loan_accno`='BL1679'");
mysql_query("update  `transaction_ledger` set `outstanding`='16972.00', `a_od_int`='1791',`a_tot_od`='7853.92',`a_od_pr`='6062.92' where `accountno`='BL1692' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='1791',`odprincipal`='6062.92',`amount_topay`='16972.00',`od_cal_date`='2016-04-11' where `loan_accno`='BL1692'");
mysql_query("update  `transaction_ledger` set `outstanding`='17706.00', `a_od_int`='699',`a_tot_od`='5074.6666666667',`a_od_pr`='4375.6666666667' where `accountno`='BL1274' and `cal_date`='2016-04-21'");

mysql_query("update  `businessloan` set `odintrest`='699',`odprincipal`='4375.6666666667',`amount_topay`='17706.00',`od_cal_date`='2016-04-21' where `loan_accno`='BL1274'");
mysql_query("update  `transaction_ledger` set `outstanding`='23829.00', `a_od_int`='2515',`a_tot_od`='9167.09',`a_od_pr`='6652.09' where `accountno`='BL1690' and `cal_date`='2016-04-21'");

mysql_query("update  `businessloan` set `odintrest`='2515',`odprincipal`='6652.09',`amount_topay`='23829.00',`od_cal_date`='2016-04-21' where `loan_accno`='BL1690'");
mysql_query("update  `transaction_ledger` set `outstanding`='13919.00', `a_od_int`='503',`a_tot_od`='1807.1739130435',`a_od_pr`='1304.1739130435' where `accountno`='BL1512' and `cal_date`='2016-04-15'");

mysql_query("update  `businessloan` set `odintrest`='503',`odprincipal`='1304.1739130435',`amount_topay`='13919.00',`od_cal_date`='2016-04-15' where `loan_accno`='BL1512'");
mysql_query("update  `transaction_ledger` set `outstanding`='40000.00', `a_od_int`='7867',`a_tot_od`='36957.89',`a_od_pr`='29090.89' where `accountno`='BL1691' and `cal_date`='2016-04-08'");

mysql_query("update  `businessloan` set `odintrest`='7867',`odprincipal`='29090.89',`amount_topay`='40000.00',`od_cal_date`='2016-04-08' where `loan_accno`='BL1691'");
mysql_query("update  `transaction_ledger` set `outstanding`='39882.00', `a_od_int`='4209',`a_tot_od`='9308.74',`a_od_pr`='5099.74' where `accountno`='BL1679' and `cal_date`='2016-04-16'");

mysql_query("update  `businessloan` set `odintrest`='4209',`odprincipal`='5099.74',`amount_topay`='39882.00',`od_cal_date`='2016-04-16' where `loan_accno`='BL1679'");
mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='934',`a_tot_od`='3107.9130434783',`a_od_pr`='2173.9130434783' where `accountno`='BL1621' and `cal_date`='2016-04-21'");

mysql_query("update  `businessloan` set `odintrest`='934',`odprincipal`='2173.9130434783',`amount_topay`='50000.00',`od_cal_date`='2016-04-21' where `loan_accno`='BL1621'");
mysql_query("update  `transaction_ledger` set `outstanding`='75556.00', `a_od_int`='1476',`a_tot_od`='5920.4444444444',`a_od_pr`='4444.4444444444' where `accountno`='EL1612' and `cal_date`='2016-04-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='1476',`odprincipal`='4444.4444444444',`amount_topay`='75556.00',`od_cal_date`='2016-04-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='88183.00', `a_od_int`='1723',`a_tot_od`='7606.3529411765',`a_od_pr`='5883.3529411765' where `accountno`='EL1511' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1723',`odprincipal`='5883.3529411765',`amount_topay`='88183.00',`od_cal_date`='2016-04-13' where `loan_accno`='EL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='75556.00', `a_od_int`='1476',`a_tot_od`='5920.4444444444',`a_od_pr`='4444.4444444444' where `accountno`='EL1612' and `cal_date`='2016-04-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='1476',`odprincipal`='4444.4444444444',`amount_topay`='75556.00',`od_cal_date`='2016-04-20' where `loan_accno`='EL1612'");
mysql_query("update  `transaction_ledger` set `outstanding`='88183.00', `a_od_int`='1723',`a_tot_od`='7606.3529411765',`a_od_pr`='5883.3529411765' where `accountno`='EL1511' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1723',`odprincipal`='5883.3529411765',`amount_topay`='88183.00',`od_cal_date`='2016-04-13' where `loan_accno`='EL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='99',`a_tot_od`='99',`a_od_pr`='0' where `accountno`='GL1419' and `cal_date`='2016-04-15'");

mysql_query("update  `goldloan` set `odintrest`='99',`odprincipal`='0',`amount_topay`='2500.00',`od_cal_date`='2016-04-15' where `loan_accno`='GL1419'");













mysql_query("update  `transaction_ledger` set `b_od_int`='370',`b_cur_int`='382', `b_od_pri`='1644',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1644', `outstanding`='18810',`a_od_int`='0',`a_tot_od`='2901.4545454545',`a_od_pr`='2901.4545454545',`collection`='2396.00',`coll_date`='2016-10-13' where `accountno`='BL1522' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2901.4545454545',`amount_topay`='18810',`last_refund_date`='2016-10-13',`last_refund_amt`='2396.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1522'");

mysql_query("UPDATE   `transaction` set `amount`='1644',`details`='businessloan Refund' where `accountno`='BL1522' and `date`='2016-10-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='752',`details`='businessloan Interest' where `accountno`='BL1522' and `date`='2016-10-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1040',`b_cur_int`='1074', `b_od_pri`='3359',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3359', `outstanding`='51641',`a_od_int`='0',`a_tot_od`='6641',`a_od_pr`='6641',`collection`='5473.00',`coll_date`='2016-10-20' where `accountno`='EL1602' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6641',`amount_topay`='51641',`last_refund_date`='2016-10-20',`last_refund_amt`='5473.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='3359',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-10-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2114',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-10-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='181',`b_cur_int`='187', `b_od_pri`='642',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='642', `outstanding`='9358',`a_od_int`='0',`a_tot_od`='1176.1818181818',`a_od_pr`='1176.1818181818',`collection`='1010.00',`coll_date`='2016-10-24' where `accountno`='BL1641' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1176.1818181818',`amount_topay`='9358',`last_refund_date`='2016-10-24',`last_refund_amt`='1010.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='642',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-10-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='368',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-10-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='592',`b_cur_int`='311', `b_od_pri`='857',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='857', `outstanding`='15809',`a_od_int`='0',`a_tot_od`='4143.3333333333',`a_od_pr`='4143.3333333333',`collection`='1760.00',`coll_date`='2016-10-15' where `accountno`='BL1502' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4143.3333333333',`amount_topay`='15809',`last_refund_date`='2016-10-15',`last_refund_amt`='1760.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='857',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-10-15' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='903',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-10-15' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1561',`b_cur_int`='1613', `b_od_pri`='2061',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2061', `outstanding`='77075',`a_od_int`='0',`a_tot_od`='6272.3333333333',`a_od_pr`='6272.3333333333',`collection`='5235.00',`coll_date`='2016-10-31' where `accountno`='EL1438' and `cal_date`='2016-10-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6272.3333333333',`amount_topay`='77075',`last_refund_date`='2016-10-31',`last_refund_amt`='5235.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='2061',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3174',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-10-31' and `interest`>0 ");







mysql_query("update  `transaction_ledger` set `outstanding`='3226.00', `a_od_int`='60',`a_tot_od`='654.66666666667',`a_od_pr`='594.66666666667' where `accountno`='BL1484' and `cal_date`='2016-04-08'");

mysql_query("update  `businessloan` set `odintrest`='60',`odprincipal`='594.66666666667',`amount_topay`='3226.00',`od_cal_date`='2016-04-08' where `loan_accno`='BL1484'");


?>