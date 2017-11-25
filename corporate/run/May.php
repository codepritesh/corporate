<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);



mysql_query("update  `transaction_ledger` set `b_od_int`='616',`b_cur_int`='4', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='760',`a_tot_od`='5107.8260869565',`a_od_pr`='4347.8260869565',`collection`='620.00',`coll_date`='2016-05-18' where `accountno`='BL1679' and `cal_date`='2016-05-16'");

mysql_query("update  `businessloan` set `odintrest`='760',`odprincipal`='4347.8260869565',`amount_topay`='50000',`last_refund_date`='2016-05-18',`last_refund_amt`='620.00', `od_cal_date`='2016-06-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `interest`='620',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-05-18' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='109', `b_od_pri`='631',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='631', `outstanding`='5212',`a_od_int`='0',`a_tot_od`='757.09363636364',`a_od_pr`='757.09363636364',`collection`='740.00',`coll_date`='2016-05-31' where `accountno`='BL1590' and `cal_date`='2016-05-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='757.09363636364',`amount_topay`='5212',`last_refund_date`='2016-05-31',`last_refund_amt`='740.00', `od_cal_date`='2016-06-21',`loancomplited`='0' where `loan_accno`='BL1590'");

mysql_query("UPDATE   `transaction` set `amount`='631',`details`='businessloan Refund' where `accountno`='BL1590' and `date`='2016-05-31' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='109',`details`='businessloan Interest' where `accountno`='BL1590' and `date`='2016-05-31' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='362',`b_cur_int`='374', `b_od_pri`='1444',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1444', `outstanding`='18556',`a_od_int`='0',`a_tot_od`='4010.5418181818',`a_od_pr`='4010.5418181818',`collection`='2180.00',`coll_date`='2016-05-24' where `accountno`='BL1643' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4010.5418181818',`amount_topay`='18556',`last_refund_date`='2016-05-24',`last_refund_amt`='2180.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1444',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-05-24' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='736',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-05-24' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='178',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='459',`a_tot_od`='5913.5454545455',`a_od_pr`='5454.5454545455',`collection`='178.00',`coll_date`='2016-05-13' where `accountno`='BL1692' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='459',`odprincipal`='5454.5454545455',`amount_topay`='30000',`last_refund_date`='2016-05-13',`last_refund_amt`='178.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `interest`='178',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-05-13' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='390', `b_od_pri`='2253',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2253', `outstanding`='18615',`a_od_int`='0',`a_tot_od`='2706.1772727273',`a_od_pr`='2706.1772727273',`collection`='2643.00',`coll_date`='2016-05-23' where `accountno`='BL1572' and `cal_date`='2016-05-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2706.1772727273',`amount_topay`='18615',`last_refund_date`='2016-05-23',`last_refund_amt`='2643.00', `od_cal_date`='2016-06-07',`loancomplited`='0' where `loan_accno`='BL1572'");

mysql_query("UPDATE   `transaction` set `amount`='2253',`details`='businessloan Refund' where `accountno`='BL1572' and `date`='2016-05-23' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='390',`details`='businessloan Interest' where `accountno`='BL1572' and `date`='2016-05-23' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='337', `b_od_pri`='1182',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1182', `outstanding`='16830',`a_od_int`='0',`a_tot_od`='1535.4105882353',`a_od_pr`='1535.4105882353',`collection`='1519.00',`coll_date`='2016-05-25' where `accountno`='BL1575' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1535.4105882353',`amount_topay`='16830',`last_refund_date`='2016-05-25',`last_refund_amt`='1519.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1182',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-05-25' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='337',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-05-25' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='340',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='459',`a_tot_od`='3988.4117647059',`a_od_pr`='3529.4117647059',`collection`='340.00',`coll_date`='2016-05-31' where `accountno`='BL1690' and `cal_date`='2016-05-21'");

mysql_query("update  `businessloan` set `odintrest`='459',`odprincipal`='3529.4117647059',`amount_topay`='30000',`last_refund_date`='2016-05-31',`last_refund_amt`='340.00', `od_cal_date`='2016-06-21',`loancomplited`='0' where `loan_accno`='BL1690'");

mysql_query("UPDATE   `transaction` set `interest`='340',`details`='businessloan Interest' where `accountno`='BL1690' and `date`='2016-05-31' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='318', `b_od_pri`='1650',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1650', `outstanding`='15348',`a_od_int`='0',`a_tot_od`='2014.9966666667',`a_od_pr`='2014.9966666667',`collection`='1968.00',`coll_date`='2016-05-25' where `accountno`='BL1613' and `cal_date`='2016-05-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2014.9966666667',`amount_topay`='15348',`last_refund_date`='2016-05-25',`last_refund_amt`='1968.00', `od_cal_date`='2016-06-21',`loancomplited`='0' where `loan_accno`='BL1613'");

mysql_query("UPDATE   `transaction` set `amount`='1650',`details`='businessloan Refund' where `accountno`='BL1613' and `date`='2016-05-25' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='318',`details`='businessloan Interest' where `accountno`='BL1613' and `date`='2016-05-25' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='520', `b_od_pri`='2700',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2700', `outstanding`='25115',`a_od_int`='0',`a_tot_od`='3296.8227272727',`a_od_pr`='3296.8227272727',`collection`='3220.00',`coll_date`='2016-05-25' where `accountno`='BL1616' and `cal_date`='2016-05-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3296.8227272727',`amount_topay`='25115',`last_refund_date`='2016-05-25',`last_refund_amt`='3220.00', `od_cal_date`='2016-06-18',`loancomplited`='0' where `loan_accno`='BL1616'");

mysql_query("UPDATE   `transaction` set `amount`='2700',`details`='businessloan Refund' where `accountno`='BL1616' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='520',`details`='businessloan Interest' where `accountno`='BL1616' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='197',`b_cur_int`='3', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='40000',`a_od_int`='609',`a_tot_od`='7881.7272727273',`a_od_pr`='7272.7272727273',`collection`='200.00',`coll_date`='2016-05-28' where `accountno`='BL1691' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='609',`odprincipal`='7272.7272727273',`amount_topay`='40000',`last_refund_date`='2016-05-28',`last_refund_amt`='200.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='BL1691'");

mysql_query("UPDATE   `transaction` set `interest`='200',`details`='businessloan Interest' where `accountno`='BL1691' and `date`='2016-05-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='616',`b_cur_int`='4', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='760',`a_tot_od`='5107.8260869565',`a_od_pr`='4347.8260869565',`collection`='620.00',`coll_date`='2016-05-18' where `accountno`='BL1679' and `cal_date`='2016-05-16'");

mysql_query("update  `businessloan` set `odintrest`='760',`odprincipal`='4347.8260869565',`amount_topay`='50000',`last_refund_date`='2016-05-18',`last_refund_amt`='620.00', `od_cal_date`='2016-06-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `interest`='620',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-05-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='542',`b_cur_int`='561', `b_od_pri`='2167',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2167', `outstanding`='27833',`a_od_int`='0',`a_tot_od`='6014.8227272727',`a_od_pr`='6014.8227272727',`collection`='3270.00',`coll_date`='2016-05-09' where `accountno`='BL1642' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6014.8227272727',`amount_topay`='27833',`last_refund_date`='2016-05-09',`last_refund_amt`='3270.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2167',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-05-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1103',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-05-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='104', `b_od_pri`='540',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='540', `outstanding`='5023',`a_od_int`='0',`a_tot_od`='659.36454545455',`a_od_pr`='659.36454545455',`collection`='644.00',`coll_date`='2016-05-24' where `accountno`='BL1628' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='659.36454545455',`amount_topay`='5023',`last_refund_date`='2016-05-24',`last_refund_amt`='644.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='540',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-05-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='104',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-05-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='512', `b_od_pri`='0.00',`b_cur_pri`='1666.6666666667',`a_pre_pri`='1.3333333333333',`tot_pr`='1668', `outstanding`='26665',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2180.00',`coll_date`='2016-05-09' where `accountno`='BL1636' and `cal_date`='2016-05-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='26665',`last_refund_date`='2016-05-09',`last_refund_amt`='2180.00', `od_cal_date`='2016-05-10',`loancomplited`='0' where `loan_accno`='BL1636'");

mysql_query("UPDATE   `transaction` set `amount`='1668',`details`='businessloan Refund' where `accountno`='BL1636' and `date`='2016-05-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='512',`details`='businessloan Interest' where `accountno`='BL1636' and `date`='2016-05-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='180',`b_cur_int`='187', `b_od_pri`='723',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='723', `outstanding`='9277',`a_od_int`='0',`a_tot_od`='2004.2709090909',`a_od_pr`='2004.2709090909',`collection`='1090.00',`coll_date`='2016-05-19' where `accountno`='BL1641' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2004.2709090909',`amount_topay`='9277',`last_refund_date`='2016-05-19',`last_refund_amt`='1090.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='723',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-05-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='367',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-05-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='542',`b_cur_int`='561', `b_od_pri`='2167',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2167', `outstanding`='27833',`a_od_int`='0',`a_tot_od`='6014.8227272727',`a_od_pr`='6014.8227272727',`collection`='3270.00',`coll_date`='2016-05-09' where `accountno`='BL1642' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6014.8227272727',`amount_topay`='27833',`last_refund_date`='2016-05-09',`last_refund_amt`='3270.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2167',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-05-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1103',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-05-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='362',`b_cur_int`='374', `b_od_pri`='1444',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1444', `outstanding`='18556',`a_od_int`='0',`a_tot_od`='4010.5418181818',`a_od_pr`='4010.5418181818',`collection`='2180.00',`coll_date`='2016-05-24' where `accountno`='BL1643' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4010.5418181818',`amount_topay`='18556',`last_refund_date`='2016-05-24',`last_refund_amt`='2180.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1643'");

mysql_query("UPDATE   `transaction` set `amount`='1444',`details`='businessloan Refund' where `accountno`='BL1643' and `date`='2016-05-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='736',`details`='businessloan Interest' where `accountno`='BL1643' and `date`='2016-05-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1191',`b_cur_int`='1231', `b_od_pri`='2982',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2982', `outstanding`='60023',`a_od_int`='0',`a_tot_od`='10656.944117647',`a_od_pr`='10656.944117647',`collection`='5404.00',`coll_date`='2016-05-25' where `accountno`='EL1560' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10656.944117647',`amount_topay`='60023',`last_refund_date`='2016-05-25',`last_refund_amt`='5404.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2982',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2422',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1879', `b_od_pri`='3121',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3121', `outstanding`='93082',`a_od_int`='0',`a_tot_od`='15304.665555556',`a_od_pr`='15304.665555556',`collection`='5000.00',`coll_date`='2016-05-31' where `accountno`='EL1604' and `cal_date`='2016-05-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15304.665555556',`amount_topay`='93082',`last_refund_date`='2016-05-31',`last_refund_amt`='5000.00', `od_cal_date`='2016-06-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='3121',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-05-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1879',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-05-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1909', `b_od_pri`='4070',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4070', `outstanding`='93654',`a_od_int`='0',`a_tot_od`='6153.9966666667',`a_od_pr`='6153.9966666667',`collection`='5979.00',`coll_date`='2016-05-17' where `accountno`='EL1632' and `cal_date`='2016-05-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6153.9966666667',`amount_topay`='93654',`last_refund_date`='2016-05-17',`last_refund_amt`='5979.00', `od_cal_date`='2016-06-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4070',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-05-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1909',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-05-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2904',`b_cur_int`='1476', `b_od_pri`='1430',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1430', `outstanding`='74126',`a_od_int`='0',`a_tot_od`='11903.328888889',`a_od_pr`='11903.328888889',`collection`='5810.00',`coll_date`='2016-05-23' where `accountno`='EL1612' and `cal_date`='2016-05-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='11903.328888889',`amount_topay`='74126',`last_refund_date`='2016-05-23',`last_refund_amt`='5810.00', `od_cal_date`='2016-06-20',`loancomplited`='0' where `loan_accno`='EL1612'");

mysql_query("UPDATE   `transaction` set `amount`='1430',`details`='enterpriseloan Refund' where `accountno`='EL1612' and `date`='2016-05-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4380',`details`='enterpriseloan Interest' where `accountno`='EL1612' and `date`='2016-05-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1702',`b_cur_int`='1758', `b_od_pri`='4259',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4259', `outstanding`='85751',`a_od_int`='0',`a_tot_od`='15225.055882353',`a_od_pr`='15225.055882353',`collection`='7719.00',`coll_date`='2016-05-25' where `accountno`='EL1559' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15225.055882353',`amount_topay`='85751',`last_refund_date`='2016-05-25',`last_refund_amt`='7719.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4259',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3460',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1191',`b_cur_int`='1231', `b_od_pri`='2982',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2982', `outstanding`='60023',`a_od_int`='0',`a_tot_od`='10656.944117647',`a_od_pr`='10656.944117647',`collection`='5404.00',`coll_date`='2016-05-25' where `accountno`='EL1560' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10656.944117647',`amount_topay`='60023',`last_refund_date`='2016-05-25',`last_refund_amt`='5404.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2982',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2422',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1879', `b_od_pri`='3121',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3121', `outstanding`='93082',`a_od_int`='0',`a_tot_od`='15304.665555556',`a_od_pr`='15304.665555556',`collection`='5000.00',`coll_date`='2016-05-31' where `accountno`='EL1604' and `cal_date`='2016-05-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15304.665555556',`amount_topay`='93082',`last_refund_date`='2016-05-31',`last_refund_amt`='5000.00', `od_cal_date`='2016-06-12',`loancomplited`='0' where `loan_accno`='EL1604'");

mysql_query("UPDATE   `transaction` set `amount`='3121',`details`='enterpriseloan Refund' where `accountno`='EL1604' and `date`='2016-05-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1879',`details`='enterpriseloan Interest' where `accountno`='EL1604' and `date`='2016-05-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1561', `b_od_pri`='4085',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4085', `outstanding`='72475',`a_od_int`='0',`a_tot_od`='5809.9966666667',`a_od_pr`='5809.9966666667',`collection`='5646.00',`coll_date`='2016-05-27' where `accountno`='EL1439' and `cal_date`='2016-05-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5809.9966666667',`amount_topay`='72475',`last_refund_date`='2016-05-27',`last_refund_amt`='5646.00', `od_cal_date`='2016-06-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4085',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-05-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1561',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-05-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1560', `b_od_pri`='4086',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4086', `outstanding`='72461',`a_od_int`='0',`a_tot_od`='5806.9966666667',`a_od_pr`='5806.9966666667',`collection`='5646.00',`coll_date`='2016-05-27' where `accountno`='EL1440' and `cal_date`='2016-05-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5806.9966666667',`amount_topay`='72461',`last_refund_date`='2016-05-27',`last_refund_amt`='5646.00', `od_cal_date`='2016-06-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4086',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-05-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1560',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-05-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1909', `b_od_pri`='4070',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4070', `outstanding`='93654',`a_od_int`='0',`a_tot_od`='6153.9966666667',`a_od_pr`='6153.9966666667',`collection`='5979.00',`coll_date`='2016-05-17' where `accountno`='EL1632' and `cal_date`='2016-05-15'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6153.9966666667',`amount_topay`='93654',`last_refund_date`='2016-05-17',`last_refund_amt`='5979.00', `od_cal_date`='2016-06-15',`loancomplited`='0' where `loan_accno`='EL1632'");

mysql_query("UPDATE   `transaction` set `amount`='4070',`details`='enterpriseloan Refund' where `accountno`='EL1632' and `date`='2016-05-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1909',`details`='enterpriseloan Interest' where `accountno`='EL1632' and `date`='2016-05-17' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1723.00',`b_cur_int`='1667', `b_od_pri`='4220',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4220', `outstanding`='83963',`a_od_int`='0',`a_tot_od`='7545.7029411765',`a_od_pr`='7545.7029411765',`collection`='7610.00',`coll_date`='2016-05-03' where `accountno`='EL1511' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7545.7029411765',`amount_topay`='83963',`last_refund_date`='2016-05-03',`last_refund_amt`='7610.00', `od_cal_date`='2016-05-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("UPDATE   `transaction` set `amount`='4220',`details`='enterpriseloan Refund' where `accountno`='EL1511' and `date`='2016-05-03' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3390',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-05-03' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='2904',`b_cur_int`='1476', `b_od_pri`='1430',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1430', `outstanding`='74126',`a_od_int`='0',`a_tot_od`='11903.328888889',`a_od_pr`='11903.328888889',`collection`='5810.00',`coll_date`='2016-05-23' where `accountno`='EL1612' and `cal_date`='2016-05-20'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='11903.328888889',`amount_topay`='74126',`last_refund_date`='2016-05-23',`last_refund_amt`='5810.00', `od_cal_date`='2016-06-20',`loancomplited`='0' where `loan_accno`='EL1612'");

mysql_query("UPDATE   `transaction` set `amount`='1430',`details`='enterpriseloan Refund' where `accountno`='EL1612' and `date`='2016-05-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4380',`details`='enterpriseloan Interest' where `accountno`='EL1612' and `date`='2016-05-23' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1191',`b_cur_int`='1231', `b_od_pri`='2982',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2982', `outstanding`='60023',`a_od_int`='0',`a_tot_od`='10656.944117647',`a_od_pr`='10656.944117647',`collection`='5404.00',`coll_date`='2016-05-25' where `accountno`='EL1560' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10656.944117647',`amount_topay`='60023',`last_refund_date`='2016-05-25',`last_refund_amt`='5404.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2982',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2422',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1702',`b_cur_int`='1758', `b_od_pri`='4259',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4259', `outstanding`='85751',`a_od_int`='0',`a_tot_od`='15225.055882353',`a_od_pr`='15225.055882353',`collection`='7719.00',`coll_date`='2016-05-25' where `accountno`='EL1559' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15225.055882353',`amount_topay`='85751',`last_refund_date`='2016-05-25',`last_refund_amt`='7719.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4259',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3460',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1723.00',`b_cur_int`='1667', `b_od_pri`='4220',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4220', `outstanding`='83963',`a_od_int`='0',`a_tot_od`='7545.7029411765',`a_od_pr`='7545.7029411765',`collection`='7610.00',`coll_date`='2016-05-03' where `accountno`='EL1511' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7545.7029411765',`amount_topay`='83963',`last_refund_date`='2016-05-03',`last_refund_amt`='7610.00', `od_cal_date`='2016-05-13',`loancomplited`='0' where `loan_accno`='EL1511'");

mysql_query("UPDATE   `transaction` set `amount`='4220',`details`='enterpriseloan Refund' where `accountno`='EL1511' and `date`='2016-05-03' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3390',`details`='enterpriseloan Interest' where `accountno`='EL1511' and `date`='2016-05-03' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1347', `b_od_pri`='3370',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3370', `outstanding`='62690',`a_od_int`='0',`a_tot_od`='9355.0033333333',`a_od_pr`='9355.0033333333',`collection`='4717.00',`coll_date`='2016-05-19' where `accountno`='EL1444' and `cal_date`='2016-05-12'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='9355.0033333333',`amount_topay`='62690',`last_refund_date`='2016-05-19',`last_refund_amt`='4717.00', `od_cal_date`='2016-06-12',`loancomplited`='0' where `loan_accno`='EL1444'");

mysql_query("UPDATE   `transaction` set `amount`='3370',`details`='enterpriseloan Refund' where `accountno`='EL1444' and `date`='2016-05-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1347',`details`='enterpriseloan Interest' where `accountno`='EL1444' and `date`='2016-05-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1560', `b_od_pri`='4086',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4086', `outstanding`='72461',`a_od_int`='0',`a_tot_od`='5806.9966666667',`a_od_pr`='5806.9966666667',`collection`='5646.00',`coll_date`='2016-05-27' where `accountno`='EL1440' and `cal_date`='2016-05-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5806.9966666667',`amount_topay`='72461',`last_refund_date`='2016-05-27',`last_refund_amt`='5646.00', `od_cal_date`='2016-06-06',`loancomplited`='0' where `loan_accno`='EL1440'");

mysql_query("UPDATE   `transaction` set `amount`='4086',`details`='enterpriseloan Refund' where `accountno`='EL1440' and `date`='2016-05-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1560',`details`='enterpriseloan Interest' where `accountno`='EL1440' and `date`='2016-05-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1561', `b_od_pri`='4085',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4085', `outstanding`='72475',`a_od_int`='0',`a_tot_od`='5809.9966666667',`a_od_pr`='5809.9966666667',`collection`='5646.00',`coll_date`='2016-05-27' where `accountno`='EL1439' and `cal_date`='2016-05-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5809.9966666667',`amount_topay`='72475',`last_refund_date`='2016-05-27',`last_refund_amt`='5646.00', `od_cal_date`='2016-06-06',`loancomplited`='0' where `loan_accno`='EL1439'");

mysql_query("UPDATE   `transaction` set `amount`='4085',`details`='enterpriseloan Refund' where `accountno`='EL1439' and `date`='2016-05-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1561',`details`='enterpriseloan Interest' where `accountno`='EL1439' and `date`='2016-05-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='196',`b_cur_int`='203', `b_od_pri`='648',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='648', `outstanding`='9303',`a_od_int`='0',`a_tot_od`='1018.6666666667',`a_od_pr`='1018.6666666667',`collection`='1047.00',`coll_date`='2016-05-14' where `accountno`='AL1454' and `cal_date`='2016-05-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='1018.6666666667',`amount_topay`='9303',`last_refund_date`='2016-05-14',`last_refund_amt`='1047.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='648',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-05-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='399',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-05-14' and `interest`>0 ");










mysql_query("update  `transaction_ledger` set `outstanding`='13048.00', `a_od_int`='1184',`a_tot_od`='5141.36',`a_od_pr`='3957.36' where `accountno`='BL1724' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='1184',`odprincipal`='3957.36',`amount_topay`='13048.00',`od_cal_date`='2016-05-08' where `loan_accno`='BL1724'");
mysql_query("update  `transaction_ledger` set `outstanding`='3264.00', `a_od_int`='296',`a_tot_od`='1287.1',`a_od_pr`='991.1' where `accountno`='BL1715' and `cal_date`='2016-05-12'");

mysql_query("update  `businessloan` set `odintrest`='296',`odprincipal`='991.1',`amount_topay`='3264.00',`od_cal_date`='2016-05-12' where `loan_accno`='BL1715'");
mysql_query("update  `transaction_ledger` set `outstanding`='13919.00', `a_od_int`='755',`a_tot_od`='2711.3439130435',`a_od_pr`='1956.3439130435' where `accountno`='BL1512' and `cal_date`='2016-05-15'");

mysql_query("update  `businessloan` set `odintrest`='755',`odprincipal`='1956.3439130435',`amount_topay`='13919.00',`od_cal_date`='2016-05-15' where `loan_accno`='BL1512'");
mysql_query("update  `transaction_ledger` set `outstanding`='27838.00', `a_od_int`='2115',`a_tot_od`='5206.15',`a_od_pr`='3091.15' where `accountno`='BL1717' and `cal_date`='2016-05-12'");

mysql_query("update  `businessloan` set `odintrest`='2115',`odprincipal`='3091.15',`amount_topay`='27838.00',`od_cal_date`='2016-05-12' where `loan_accno`='BL1717'");
mysql_query("update  `transaction_ledger` set `outstanding`='20000.00', `a_od_int`='9899',`a_tot_od`='21565.69',`a_od_pr`='11666.69' where `accountno`='BL1703' and `cal_date`='2016-05-21'");

mysql_query("update  `businessloan` set `odintrest`='9899',`odprincipal`='11666.69',`amount_topay`='20000.00',`od_cal_date`='2016-05-21' where `loan_accno`='BL1703'");
mysql_query("update  `transaction_ledger` set `outstanding`='16945.00', `a_od_int`='1279',`a_tot_od`='7621.18',`a_od_pr`='6342.18' where `accountno`='BL1702' and `cal_date`='2016-05-06'");

mysql_query("update  `businessloan` set `odintrest`='1279',`odprincipal`='6342.18',`amount_topay`='16945.00',`od_cal_date`='2016-05-06' where `loan_accno`='BL1702'");
mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='1838',`a_tot_od`='6185.8230434783',`a_od_pr`='4347.8230434783' where `accountno`='BL1621' and `cal_date`='2016-05-21'");

mysql_query("update  `businessloan` set `odintrest`='1838',`odprincipal`='4347.8230434783',`amount_topay`='50000.00',`od_cal_date`='2016-05-21' where `loan_accno`='BL1621'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='13730',`a_tot_od`='86457.28',`a_od_pr`='72727.28' where `accountno`='EL1712' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='13730',`odprincipal`='72727.28',`amount_topay`='100000.00',`od_cal_date`='2016-05-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='84300.00', `a_od_int`='8074',`a_tot_od`='18460.66',`a_od_pr`='10386.66' where `accountno`='EL1726' and `cal_date`='2016-05-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='8074',`odprincipal`='10386.66',`amount_topay`='84300.00',`od_cal_date`='2016-05-06' where `loan_accno`='EL1726'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='13730',`a_tot_od`='86457.28',`a_od_pr`='72727.28' where `accountno`='EL1712' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='13730',`odprincipal`='72727.28',`amount_topay`='100000.00',`od_cal_date`='2016-05-13' where `loan_accno`='EL1712'");
mysql_query("update  `transaction_ledger` set `outstanding`='90674.00', `a_od_int`='0',`a_tot_od`='7341.11',`a_od_pr`='7341.11' where `accountno`='EL1603' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7341.11',`amount_topay`='90674.00',`od_cal_date`='2016-05-13' where `loan_accno`='EL1603'");
mysql_query("update  `transaction_ledger` set `outstanding`='58401.00', `a_od_int`='1104',`a_tot_od`='13659.821764706',`a_od_pr`='12555.821764706' where `accountno`='EL1550' and `cal_date`='2016-05-10'");

mysql_query("update  `enterpriseloan` set `odintrest`='1104',`odprincipal`='12555.821764706',`amount_topay`='58401.00',`od_cal_date`='2016-05-10' where `loan_accno`='EL1550'");
mysql_query("update  `transaction_ledger` set `outstanding`='90702.00', `a_od_int`='1217',`a_tot_od`='30805.11',`a_od_pr`='29588.11' where `accountno`='EL1436' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1217',`odprincipal`='29588.11',`amount_topay`='90702.00',`od_cal_date`='2016-05-13' where `loan_accno`='EL1436'");
mysql_query("update  `transaction_ledger` set `outstanding`='5211.00', `a_od_int`='473',`a_tot_od`='2775.54',`a_od_pr`='2302.54' where `accountno`='GRL1706' and `cal_date`='2016-05-10'");

mysql_query("update  `grouploan` set `odintrest`='473',`odprincipal`='2302.54',`amount_topay`='5211.00',`od_cal_date`='2016-05-10' where `loan_accno`='GRL1706'");
mysql_query("update  `transaction_ledger` set `outstanding`='6821.00', `a_od_int`='414',`a_tot_od`='414',`a_od_pr`='0' where `accountno`='DL1707' and `cal_date`='2016-05-20'");

mysql_query("update  `demand_loan` set `odintrest`='414',`odprincipal`='0',`amount_topay`='6821.00',`od_cal_date`='2016-05-20' where `loan_accno`='DL1707'");
mysql_query("update  `transaction_ledger` set `outstanding`='35000.00', `a_od_int`='3259',`a_tot_od`='3259',`a_od_pr`='0' where `accountno`='DL1709' and `cal_date`='2016-05-18'");

mysql_query("update  `demand_loan` set `odintrest`='3259',`odprincipal`='0',`amount_topay`='35000.00',`od_cal_date`='2016-05-18' where `loan_accno`='DL1709'");
mysql_query("update  `transaction_ledger` set `outstanding`='5000.00', `a_od_int`='525',`a_tot_od`='525',`a_od_pr`='0' where `accountno`='DL1711' and `cal_date`='2016-05-13'");

mysql_query("update  `demand_loan` set `odintrest`='525',`odprincipal`='0',`amount_topay`='5000.00',`od_cal_date`='2016-05-13' where `loan_accno`='DL1711'");
mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='23277',`a_tot_od`='23277',`a_od_pr`='0' where `accountno`='DL1714' and `cal_date`='2016-05-20'");

mysql_query("update  `demand_loan` set `odintrest`='23277',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-05-20' where `loan_accno`='DL1714'");
mysql_query("update  `transaction_ledger` set `outstanding`='4000.00', `a_od_int`='476',`a_tot_od`='476',`a_od_pr`='0' where `accountno`='DL1730' and `cal_date`='2016-05-12'");

mysql_query("update  `demand_loan` set `odintrest`='476',`odprincipal`='0',`amount_topay`='4000.00',`od_cal_date`='2016-05-12' where `loan_accno`='DL1730'");
mysql_query("update  `transaction_ledger` set `outstanding`='2500.00', `a_od_int`='148',`a_tot_od`='148',`a_od_pr`='0' where `accountno`='GL1419' and `cal_date`='2016-05-15'");

mysql_query("update  `goldloan` set `odintrest`='148',`odprincipal`='0',`amount_topay`='2500.00',`od_cal_date`='2016-05-15' where `loan_accno`='GL1419'");
















mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='347', `b_od_pri`='2253',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2253', `outstanding`='16298',`a_od_int`='0',`a_tot_od`='2662.1872727273',`a_od_pr`='2662.1872727273',`collection`='2600.00',`coll_date`='2016-05-14' where `accountno`='BL1522' and `cal_date`='2016-05-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2662.1872727273',`amount_topay`='16298',`last_refund_date`='2016-05-14',`last_refund_amt`='2600.00', `od_cal_date`='2016-06-07',`loancomplited`='0' where `loan_accno`='BL1522'");

mysql_query("UPDATE   `transaction` set `amount`='2253',`details`='businessloan Refund' where `accountno`='BL1522' and `date`='2016-05-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='347',`details`='businessloan Interest' where `accountno`='BL1522' and `date`='2016-05-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='118',`b_cur_int`='60', `b_od_pri`='122',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='122', `outstanding`='3104',`a_od_int`='0',`a_tot_od`='1306.0033333333',`a_od_pr`='1306.0033333333',`collection`='300.00',`coll_date`='2016-05-31' where `accountno`='BL1484' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1306.0033333333',`amount_topay`='3104',`last_refund_date`='2016-05-31',`last_refund_amt`='300.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("INSERT into `transaction` set `transactionid`='1479908858',`amount`='122',`details`='businessloan Refund',`accountno`='BL1484',`date`='2016-05-31' ");


mysql_query("UPDATE   `transaction` set `interest`='178',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-05-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='997', `b_od_pri`='4948',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4948', `outstanding`='46092',`a_od_int`='0',`a_tot_od`='6092',`a_od_pr`='6092',`collection`='5945.00',`coll_date`='2016-05-16' where `accountno`='EL1602' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='6092',`amount_topay`='46092',`last_refund_date`='2016-05-16',`last_refund_amt`='5945.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1602'");

mysql_query("UPDATE   `transaction` set `amount`='4948',`details`='enterpriseloan Refund' where `accountno`='EL1602' and `date`='2016-05-16' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='997',`details`='enterpriseloan Interest' where `accountno`='EL1602' and `date`='2016-05-16' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='180',`b_cur_int`='187', `b_od_pri`='723',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='723', `outstanding`='9277',`a_od_int`='0',`a_tot_od`='2004.2709090909',`a_od_pr`='2004.2709090909',`collection`='1090.00',`coll_date`='2016-05-19' where `accountno`='BL1641' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2004.2709090909',`amount_topay`='9277',`last_refund_date`='2016-05-19',`last_refund_amt`='1090.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1641'");

mysql_query("UPDATE   `transaction` set `amount`='723',`details`='businessloan Refund' where `accountno`='BL1641' and `date`='2016-05-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='367',`details`='businessloan Interest' where `accountno`='BL1641' and `date`='2016-05-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='292', `b_od_pri`='1608',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1608', `outstanding`='14001',`a_od_int`='0',`a_tot_od`='2335.3366666667',`a_od_pr`='2335.3366666667',`collection`='1900.00',`coll_date`='2016-05-30' where `accountno`='BL1502' and `cal_date`='2016-05-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2335.3366666667',`amount_topay`='14001',`last_refund_date`='2016-05-30',`last_refund_amt`='1900.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='BL1502'");

mysql_query("UPDATE   `transaction` set `amount`='1608',`details`='businessloan Refund' where `accountno`='BL1502' and `date`='2016-05-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='292',`details`='businessloan Interest' where `accountno`='BL1502' and `date`='2016-05-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1560', `b_od_pri`='1559.67',`b_cur_pri`='2526.33',`a_pre_pri`='0',`tot_pr`='4086', `outstanding`='72443',`a_od_int`='0',`a_tot_od`='1640.3366666667',`a_od_pr`='1640.3366666667',`collection`='5646.00',`coll_date`='2016-05-27' where `accountno`='EL1438' and `cal_date`='2016-05-06'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='1640.3366666667',`amount_topay`='72443',`last_refund_date`='2016-05-27',`last_refund_amt`='5646.00', `od_cal_date`='2016-06-06',`loancomplited`='0' where `loan_accno`='EL1438'");

mysql_query("UPDATE   `transaction` set `amount`='4086',`details`='enterpriseloan Refund' where `accountno`='EL1438' and `date`='2016-05-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1560',`details`='enterpriseloan Interest' where `accountno`='EL1438' and `date`='2016-05-27' and `interest`>0 ");





mysql_query("update  `transaction_ledger` set `outstanding`='1256.00', `a_od_int`='0',`a_tot_od`='425.34',`a_od_pr`='425.34' where `accountno`='GRL1311' and `cal_date`='2016-05-20'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='425.34',`amount_topay`='1256.00',`od_cal_date`='2016-05-20' where `loan_accno`='GRL1311'");


mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='521',`a_tot_od`='521',`a_od_pr`='0' where `accountno`='EL1698' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='521',`odprincipal`='0',`amount_topay`='100000.00',`od_cal_date`='2016-05-13' where `loan_accno`='EL1698'");

?>