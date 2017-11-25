<?php
include_once("function.php");
ini_set("display_errors",1);

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='332', `b_od_pri`='',`b_cur_pri`='',`a_pre_pri`='1058',`tot_pr`='1058', `outstanding`='15753',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1390.00',`coll_date`='2016-06-27' where `accountno`='GL1402' and `cal_date`='2016-06-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='15753',`last_refund_date`='2016-06-27',`last_refund_amt`='1390.00', `od_cal_date`='2016-07-12',`loancomplited`='0' where `loan_accno`='GL1402'");

mysql_query("UPDATE   `transaction` set `amount`='1058',`details`='goldloan Refund' where `accountno`='GL1402' and `date`='2016-06-27' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='332',`details`='goldloan Interest' where `accountno`='GL1402' and `date`='2016-06-27' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='321', `b_od_pri`='',`b_cur_pri`='',`a_pre_pri`='2079',`tot_pr`='2079', `outstanding`='13674',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2400.00',`coll_date`='2016-07-26' where `accountno`='GL1402' and `cal_date`='2016-07-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='13674',`last_refund_date`='2016-07-26',`last_refund_amt`='2400.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='GL1402'");

mysql_query("UPDATE   `transaction` set `amount`='2079',`details`='goldloan Refund' where `accountno`='GL1402' and `date`='2016-07-26' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='321',`details`='goldloan Interest' where `accountno`='GL1402' and `date`='2016-07-26' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='279', `b_od_pri`='',`b_cur_pri`='',`a_pre_pri`='1221',`tot_pr`='1221', `outstanding`='12453',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1500.00',`coll_date`='2016-08-30' where `accountno`='GL1402' and `cal_date`='2016-08-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='12453',`last_refund_date`='2016-08-30',`last_refund_amt`='1500.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='GL1402'");

mysql_query("UPDATE   `transaction` set `amount`='1221',`details`='goldloan Refund' where `accountno`='GL1402' and `date`='2016-08-30' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='279',`details`='goldloan Interest' where `accountno`='GL1402' and `date`='2016-08-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='12453.00', `a_od_int`='0',`a_tot_od`='12453',`a_od_pr`='12453.00' where `accountno`='GL1402' and `cal_date`='2016-09-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='12453.00',`amount_topay`='12453.00',`od_cal_date`='2016-09-12' where `loan_accno`='GL1402'");

mysql_query("INSERT  INTO `corporate`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '1466854119', 'GL1402', '2016-10-12', '2016-10-13', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0', '0', '600', '2016-12-09 12:38:55') ");

mysql_query("update  `transaction_ledger` set `b_od_int`='246',`b_cur_int`='254', `b_od_pri`='',`b_cur_pri`='',`a_pre_pri`='100',`tot_pr`='100', `outstanding`='12353',`a_od_int`='0',`a_tot_od`='12353',`a_od_pr`='12353',`collection`='600.00',`coll_date`='2016-10-13' where `accountno`='GL1402' and `cal_date`='2016-10-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='12353',`amount_topay`='12353',`last_refund_date`='2016-10-13',`last_refund_amt`='600.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='GL1402'");


mysql_query("INSERT  into `transaction` set `transactionid`='1481267527',`amount`='100',`details`='goldloan Refund',`accountno`='GL1402',`date`='2016-10-13' ");


mysql_query("UPDATE   `transaction` set `interest`='500',`details`='goldloan Interest' where `accountno`='GL1402' and `date`='2016-10-13' and `interest`>0 ");

mysql_query("INSERT  INTO `corporate`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '', 'GL1343', '2016-10-08', '2016-10-31', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '986', '2016-12-03 11:57:14') ");

mysql_query("update  `transaction_ledger` set `b_od_int`='986.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='49977',`a_od_int`='1020',`a_tot_od`='50997',`a_od_pr`='49977',`collection`='986.00',`coll_date`='2016-10-31' where `accountno`='GL1343' and `cal_date`='2016-10-08'");

mysql_query("update  `goldloan` set `odintrest`='1020',`odprincipal`='49977',`amount_topay`='49977',`last_refund_date`='2016-10-31',`last_refund_amt`='986.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='GL1343'");

mysql_query("INSERT  into `transaction` set `transactionid`='1481270944',`interest`='986',`details`='goldloan Interest',`accountno`='GL1343',`date`='2016-10-31' ");

mysql_query("INSERT  INTO `corporate`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '', 'GL1092', '2016-10-16', '2016-10-31', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000', '2016-11-01 04:47:36')");


mysql_query("update  `goldloan` set `odintrest`='1583.00',`odprincipal`='7837.00',`amount_topay`='7837.00',`od_cal_date`='2016-09-16' , `last_refund_date` =  '2016-10-31' where `loan_accno`='GL1092'");

mysql_query("update  `transaction_ledger` set `outstanding`='7837.00', `a_od_int`='1738',`a_tot_od`='9575',`a_od_pr`='7837.00' where `accountno`='GL1092' and `cal_date`='2016-10-16'");

mysql_query("update  `goldloan` set `odintrest`='1738',`odprincipal`='7837.00',`amount_topay`='7837.00',`od_cal_date`='2016-10-16' where `loan_accno`='GL1092'");


mysql_query("update  `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='577',`a_tot_od`='8554',`a_od_pr`='7977.00' where `accountno`='GL972' and `cal_date`='2016-08-08'");

mysql_query("update  `goldloan` set `odintrest`='577',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-08-08' where `loan_accno`='GL972'");

mysql_query("update  `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='740',`a_tot_od`='8717',`a_od_pr`='7977.00' where `accountno`='GL972' and `cal_date`='2016-09-08'");

mysql_query("update  `goldloan` set `odintrest`='740',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-09-08' where `loan_accno`='GL972'");

mysql_query("INSERT  INTO `corporate`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '', 'GL972', '2016-10-08', '2016-10-31', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '200', '2016-12-03 11:57:20') ");

mysql_query("update  `transaction_ledger` set `b_od_int`='200.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='7977',`a_od_int`='860',`a_tot_od`='8837',`a_od_pr`='7977',`collection`='200.00',`coll_date`='2016-10-31' where `accountno`='GL972' and `cal_date`='2016-10-08'");

mysql_query("update  `goldloan` set `odintrest`='860',`odprincipal`='7977',`amount_topay`='7977',`last_refund_date`='2016-10-31',`last_refund_amt`='200.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='GL972'");

mysql_query("UPDATE   `transaction` set `interest`='200',`details`='goldloan Interest' where `accountno`='GL972' and `date`='2016-10-31' and `interest`>0 ");


?>