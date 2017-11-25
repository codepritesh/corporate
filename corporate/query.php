<?php
mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);

mysql_query("INSERT  INTO `corporate1`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '1466854324', 'BL1484', '2016-05-08', '2016-05-31', '118.00', '122.00', '60.00', '0.00', '0.00', '122.00', '3104.00', '0.00', '1306.00', '1306.00', '300.00', '2016-11-28 12:18:48')");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '2016-05-04', `collection` = '500.00' WHERE `transaction_ledger`.`id` = 7244");

mysql_query("update  `transaction_ledger` set `b_od_int`='60.00',`b_cur_int`='58', `b_od_pri`='382',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='382', `outstanding`='2844',`a_od_int`='0',`a_tot_od`='629.33666666667',`a_od_pr`='629.33666666667',`collection`='500.00',`coll_date`='2016-05-04' where `accountno`='BL1484' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='629.33666666667',`amount_topay`='2844',`last_refund_date`='2016-05-04',`last_refund_amt`='500.00', `od_cal_date`='2016-05-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("INSERT  into `transaction` set `transactionid`='1480761445',`amount`='382',`details`='businessloan Refund',`accountno`='BL1484',`date`='2016-05-04' ");


mysql_query("INSERT  into `transaction` set `transactionid`='1480761445',`interest`='118',`details`='businessloan Interest',`accountno`='BL1484',`date`='2016-05-04' ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '2016-05-31', `b_od_int` = '0', `b_od_pri` = '300', `b_cur_int` = '0', `tot_pr` = '300', `outstanding` = '2544.00', `a_od_pr` = '229.34', `a_tot_od` = '229.34', `collection` = '300' WHERE `transaction_ledger`.`id` = 14709");

mysql_query("update  `transaction_ledger` set `b_od_int`='48',`b_cur_int`='46', `b_od_pri`='506',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='506', `outstanding`='2038',`a_od_int`='0',`a_tot_od`='556.67333333333',`a_od_pr`='556.67333333333',`collection`='600.00',`coll_date`='2016-06-29' where `accountno`='BL1484' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='556.67333333333',`amount_topay`='2038',`last_refund_date`='2016-06-29',`last_refund_amt`='600.00', `od_cal_date`='2016-07-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='506',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-06-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='94',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-06-29' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='38', `b_od_pri`='462',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='462', `outstanding`='1576',`a_od_int`='0',`a_tot_od`='511.33666666667',`a_od_pr`='511.33666666667',`collection`='500.00',`coll_date`='2016-07-12' where `accountno`='BL1484' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='511.33666666667',`amount_topay`='1576',`last_refund_date`='2016-07-12',`last_refund_amt`='500.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='462',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='38',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-07-12' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='29', `b_od_pri`='471',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='471', `outstanding`='1105',`a_od_int`='0',`a_tot_od`='457.00666666667',`a_od_pr`='457.00666666667',`collection`='500.00',`coll_date`='2016-08-30' where `accountno`='BL1484' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='457.00666666667',`amount_topay`='1105',`last_refund_date`='2016-08-30',`last_refund_amt`='500.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='471',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='29',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-08-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='20', `b_od_pri`='280',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='280', `outstanding`='825',`a_od_int`='0',`a_tot_od`='593.67666666667',`a_od_pr`='593.67666666667',`collection`='300.00',`coll_date`='2016-09-30' where `accountno`='BL1484' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='593.67666666667',`amount_topay`='825',`last_refund_date`='2016-09-30',`last_refund_amt`='300.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1484'");

mysql_query("UPDATE   `transaction` set `amount`='280',`details`='businessloan Refund' where `accountno`='BL1484' and `date`='2016-09-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='20',`details`='businessloan Interest' where `accountno`='BL1484' and `date`='2016-09-30' and `interest`>0 ");










mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '2016-07-31', `collection` = '600' WHERE `transaction_ledger`.`id` = 6334");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='58', `b_od_pri`='542',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='542', `outstanding`='2301',`a_od_int`='0',`a_tot_od`='642.79555555556',`a_od_pr`='642.79555555556',`collection`='600.00',`coll_date`='2016-07-31' where `accountno`='BL1214' and `cal_date`='2016-07-09'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='642.79555555556',`amount_topay`='2301',`last_refund_date`='2016-07-31',`last_refund_amt`='600.00', `od_cal_date`='2016-08-09',`loancomplited`='0' where `loan_accno`='BL1214'");

mysql_query("INSERT  into `transaction` set `transactionid`='1480757197',`amount`='542',`details`='businessloan Refund',`agentid`=5,`accountno`='BL1214',`date`='2016-07-31' ");


mysql_query("INSERT  into `transaction` set `transactionid`='1480757197',`interest`='58',`details`='businessloan Interest',`agentid`=5,`accountno`='BL1214',`date`='2016-07-31' ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='47', `b_od_pri`='553',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='553', `outstanding`='1748',`a_od_int`='0',`a_tot_od`='645.35555555556',`a_od_pr`='645.35555555556',`collection`='600.00',`coll_date`='2016-08-10' where `accountno`='BL1214' and `cal_date`='2016-08-09'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='645.35555555556',`amount_topay`='1748',`last_refund_date`='2016-08-10',`last_refund_amt`='600.00', `od_cal_date`='2016-09-09',`loancomplited`='0' where `loan_accno`='BL1214'");

mysql_query("UPDATE   `transaction` set `amount`='553',`details`='businessloan Refund' where `accountno`='BL1214' and `date`='2016-08-10' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='47',`details`='businessloan Interest' where `accountno`='BL1214' and `date`='2016-08-10' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='34', `b_od_pri`='564',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='564', `outstanding`='1184',`a_od_int`='0',`a_tot_od`='636.91555555556',`a_od_pr`='636.91555555556',`collection`='598.00',`coll_date`='2016-09-17' where `accountno`='BL1214' and `cal_date`='2016-09-09'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='636.91555555556',`amount_topay`='1184',`last_refund_date`='2016-09-17',`last_refund_amt`='598.00', `od_cal_date`='2016-10-09',`loancomplited`='0' where `loan_accno`='BL1214'");

mysql_query("UPDATE   `transaction` set `amount`='564',`details`='businessloan Refund' where `accountno`='BL1214' and `date`='2016-09-17' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='34',`details`='businessloan Interest' where `accountno`='BL1214' and `date`='2016-09-17' and `interest`>0 ");











mysql_query("INSERT  INTO `corporate1`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '1466854324', 'BL1566', '2016-05-10', '2016-05-31', '515.00', '2053.00', '532.00', '0.00', '0.00', '2053.00', '26438.00', '0.00', '8938.00', '8938.00', '3100.00', '2016-10-21 04:21:34')");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '2016-05-10', `collection` = '3000.00' WHERE `transaction_ledger`.`id` = 7990");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='515', `b_od_pri`='2485',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2485', `outstanding`='26006',`a_od_int`='0',`a_tot_od`='6006',`a_od_pr`='6006',`collection`='3000.00',`coll_date`='2016-05-10' where `accountno`='BL1566' and `cal_date`='2016-05-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='6006',`amount_topay`='26006',`last_refund_date`='2016-05-10',`last_refund_amt`='3000.00', `od_cal_date`='2016-05-10',`loancomplited`='0' where `loan_accno`='BL1566'");

mysql_query("UPDATE   `transaction` set `amount`='2485',`details`='businessloan Refund' where `accountno`='BL1566' and `date`='2016-05-10' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='515',`details`='businessloan Interest' where `accountno`='BL1566' and `date`='2016-05-10' and `interest`>0 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '2016-05-31', `b_od_pri` = '3100', `b_cur_int` = '0.00', `tot_pr` = '3100', `a_od_pr` = '2906', `a_tot_od` = '2906', `collection` = '3100',`outstanding` =  '22906.00' WHERE `transaction_ledger`.`id` = 14710");

mysql_query("update  `transaction_ledger` set `b_od_int`='428',`b_cur_int`='414', `b_od_pri`='3958',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3958', `outstanding`='18948',`a_od_int`='0',`a_tot_od`='3948',`a_od_pr`='3948',`collection`='4800.00',`coll_date`='2016-06-29' where `accountno`='BL1566' and `cal_date`='2016-06-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3948',`amount_topay`='18948',`last_refund_date`='2016-06-29',`last_refund_amt`='4800.00', `od_cal_date`='2016-07-10',`loancomplited`='0' where `loan_accno`='BL1566'");

mysql_query("UPDATE   `transaction` set `amount`='3958',`details`='businessloan Refund' where `accountno`='BL1566' and `date`='2016-06-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='842',`details`='businessloan Interest' where `accountno`='BL1566' and `date`='2016-06-29' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='354', `b_od_pri`='2646',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2646', `outstanding`='16302',`a_od_int`='0',`a_tot_od`='3802',`a_od_pr`='3802',`collection`='3000.00',`coll_date`='2016-07-30' where `accountno`='BL1566' and `cal_date`='2016-07-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3802',`amount_topay`='16302',`last_refund_date`='2016-07-30',`last_refund_amt`='3000.00', `od_cal_date`='2016-08-10',`loancomplited`='0' where `loan_accno`='BL1566'");

mysql_query("UPDATE   `transaction` set `amount`='2646',`details`='businessloan Refund' where `accountno`='BL1566' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='354',`details`='businessloan Interest' where `accountno`='BL1566' and `date`='2016-07-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='305', `b_od_pri`='3381',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3381', `outstanding`='12921',`a_od_int`='0',`a_tot_od`='2921',`a_od_pr`='2921',`collection`='3686.00',`coll_date`='2016-08-23' where `accountno`='BL1566' and `cal_date`='2016-08-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2921',`amount_topay`='12921',`last_refund_date`='2016-08-23',`last_refund_amt`='3686.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='BL1566'");

mysql_query("UPDATE   `transaction` set `amount`='3381',`details`='businessloan Refund' where `accountno`='BL1566' and `date`='2016-08-23' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='305',`details`='businessloan Interest' where `accountno`='BL1566' and `date`='2016-08-23' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='234', `b_od_pri`='2921',`b_cur_pri`='2500',`a_pre_pri`='7524',`tot_pr`='12945', `outstanding`='0',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='13179.00',`coll_date`='2016-09-28' where `accountno`='BL1566' and `cal_date`='2016-09-10'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='0',`last_refund_date`='2016-09-28',`last_refund_amt`='13179.00', `od_cal_date`='2016-10-10',`loancomplited`='1' where `loan_accno`='BL1566'");

mysql_query("UPDATE   `transaction` set `amount`='12945',`details`='businessloan Refund' where `accountno`='BL1566' and `date`='2016-09-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='234',`details`='businessloan Interest' where `accountno`='BL1566' and `date`='2016-09-28' and `interest`>0 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `b_cur_int` = '258.00', `a_pre_pri` = '7500.00', `tot_pr` = '12921.00' WHERE `transaction_ledger`.`id` = 7994");







mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '2016-08-13', `collection` = '2834' WHERE `transaction_ledger`.`id` = 11749");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `a_od_int` = '316.00', `a_od_pr` = '2352.94', `a_tot_od` = '2668.94' WHERE `transaction_ledger`.`id` = 11748");

mysql_query("update  `transaction_ledger` set `b_od_int`='316.00',`b_cur_int`='0', `b_od_pri`='2352.94',`b_cur_pri`='0',`a_pre_pri`='165.06',`tot_pr`='2518', `outstanding`='37482',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2834.00',`coll_date`='2016-08-13' where `accountno`='BL1755' and `cal_date`='2016-08-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='37482',`last_refund_date`='2016-08-13',`last_refund_amt`='2834.00', `od_cal_date`='2016-08-13',`loancomplited`='0' where `loan_accno`='BL1755'");

mysql_query("INSERT  into `transaction` set `transactionid`='1480762442',`amount`='2518',`details`='businessloan Refund',`accountno`='BL1755',`date`='2016-08-13' ");


mysql_query("INSERT  into `transaction` set `transactionid`='1480762442',`interest`='316',`details`='businessloan Interest',`accountno`='BL1755',`date`='2016-08-13' ");


mysql_query("update  `transaction_ledger` set `outstanding`='37482.00', `a_od_int`='573',`a_tot_od`='2925.9411764706',`a_od_pr`='2352.9411764706' where `accountno`='BL1755' and `cal_date`='2016-09-13'");

mysql_query("update  `businessloan` set `odintrest`='573',`odprincipal`='2352.9411764706',`amount_topay`='37482.00',`od_cal_date`='2016-09-13' where `loan_accno`='BL1755'");


mysql_query("update  `transaction_ledger` set `b_od_int`='1128',`b_cur_int`='573', `b_od_pri`='1299',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1299', `outstanding`='36183',`a_od_int`='0',`a_tot_od`='5759.8223529412',`a_od_pr`='5759.8223529412',`collection`='3000.00',`coll_date`='2016-10-31' where `accountno`='BL1755' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5759.8223529412',`amount_topay`='36183',`last_refund_date`='2016-10-31',`last_refund_amt`='3000.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='BL1755'");

mysql_query("UPDATE   `transaction` set `amount`='1299',`details`='businessloan Refund' where `accountno`='BL1755' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1701',`details`='businessloan Interest' where `accountno`='BL1755' and `date`='2016-10-31' and `interest`>0 ");

mysql_query("DELETE  FROM `corporate1`.`transaction` WHERE `transaction`.`id` = 4536 ");

mysql_query("DELETE  FROM `corporate1`.`transaction` WHERE `transaction`.`id` = 4537 ");

mysql_query("UPDATE   `corporate1`.`transaction` SET `interest` = '300', `details` = 'businessloan Refund' WHERE `transaction`.`id` = 7446 ");





?>

