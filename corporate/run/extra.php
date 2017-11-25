<?php


mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);





mysql_query(" update `transaction_ledger` set `b_od_int`='701',`b_cur_int`='678', `b_od_pri`='3491',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3491', `outstanding`='34008',`a_od_int`='0',`a_tot_od`='5599.9090909091',`a_od_pr`='5599.9090909091',`collection`='4870.00',`coll_date`='2016-04-30' where `accountno`='BL1505' and `cal_date`='2016-04-10'");

mysql_query(" update `businessloan` set `odintrest`='0',`odprincipal`='5599.9090909091',`amount_topay`='34008',`last_refund_date`='2016-04-30',`last_refund_amt`='4870.00', `od_cal_date`='2016-05-10',`loancomplited`='0' where `loan_accno`='BL1505'");

mysql_query(" UPDATE `transaction` set `amount`='3491',`details`='businessloan Refund' where `accountno`='BL1505' and `date`='2016-04-30' and `amount`>0 ");


mysql_query(" UPDATE `transaction` set `interest`='1379',`details`='businessloan Interest' where `accountno`='BL1505' and `date`='2016-04-30' and `interest`>0 ");

mysql_query("update `transaction_ledger` set `b_od_int`='0',`b_cur_int`='540', `b_od_pri`='4172',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4172', `outstanding`='25701',`a_od_int`='0',`a_tot_od`='6383.8145454545',`a_od_pr`='6383.8145454545',`collection`='4712.00',`coll_date`='2016-06-30' where `accountno`='BL1505' and `cal_date`='2016-06-10'");

mysql_query("update `businessloan` set `odintrest`='0',`odprincipal`='6383.8145454545',`amount_topay`='25701',`last_refund_date`='2016-06-30',`last_refund_amt`='4712.00', `od_cal_date`='2016-07-10',`loancomplited`='0' where `loan_accno`='BL1505'");

mysql_query("UPDATE `transaction` set `amount`='4172',`details`='businessloan Refund' where `accountno`='BL1505' and `date`='2016-06-30' and `amount`>0 ");

mysql_query("UPDATE `transaction` set `interest`='540',`details`='businessloan Interest' where `accountno`='BL1505' and `date`='2016-06-30' and `interest`>0");

mysql_query("UPDATE `corporate`.`transaction_ledger` SET `outstanding` = '25701.00', `a_od_pr` = '6383.81', `a_tot_od` = '6383.81' WHERE `transaction_ledger`.`id` = 7409");

mysql_query("update `transaction_ledger` set `b_od_int`='480',`b_cur_int`='480', `b_od_pri`='8319',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='8319', `outstanding`='17382',`a_od_int`='0',`a_tot_od`='7155.7190909091',`a_od_pr`='7155.7190909091',`collection`='9279.00',`coll_date`='2016-08-31' where `accountno`='BL1505' and `cal_date`='2016-08-10' and  `id`='7410'");



mysql_query("UPDATE `transaction` set `amount`='8319',`details`='businessloan Refund' where `accountno`='BL1505' and `date`='2016-08-31' and `amount`>0  and `id`='24946'");


mysql_query("UPDATE `transaction` set `interest`='960',`details`='businessloan Interest' where `accountno`='BL1505' and `date`='2016-08-31' and `interest`>0");


mysql_query("DELETE FROM `corporate`.`transaction` WHERE `transaction`.`id` = 24960 ");

mysql_query("UPDATE `corporate`.`transaction` SET `amount` = '17832.00' WHERE `transaction`.`id` = 24961");

mysql_query("UPDATE `corporate`.`transaction_ledger` SET `b_od_pri` = '7155.72', `b_cur_int` = '0.00', `a_pre_pri` = '10676.28' WHERE `transaction_ledger`.`id` = 13298");

mysql_query("UPDATE `corporate`.`businessloan` SET `amount_topay` = '0', `odprincipal` = '0', `pre_principal` = '10676.28', `last_refund_amt` = '17832.00', `od_cal_date` = '2016-09-10' WHERE `businessloan`.`id` = 218");



mysql_query("update `transaction_ledger` set `b_od_int`='875',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='70000',`a_od_int`='1130',`a_tot_od`='5247.6470588235',`a_od_pr`='4117.6470588235',`collection`='875.00',`coll_date`='2016-07-30' where `accountno`='EL1757' and `cal_date`='2016-07-21' ");

mysql_query("update `enterpriseloan` set `odintrest`='1130',`odprincipal`='4117.6470588235',`amount_topay`='70000',`last_refund_date`='2016-07-30',`last_refund_amt`='875.00', `od_cal_date`='2016-08-21',`loancomplited`='0' where `loan_accno`='EL1757' ");

mysql_query("UPDATE `transaction` set `interest`='875',`details`='enterpriseloan Interest' where `accountno`='EL1757' and `date`='2016-07-30' and `interest`>0 ");


mysql_query("update `transaction_ledger` set `b_od_int`='1130',`b_cur_int`='1130', `b_od_pri`='2988',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2988', `outstanding`='67012',`a_od_int`='0',`a_tot_od`='5247.2970588235',`a_od_pr`='5247.2970588235',`collection`='5248.00',`coll_date`='2016-08-29' where `accountno`='EL1757' and `cal_date`='2016-08-21' ");

mysql_query("update `enterpriseloan` set `odintrest`='0',`odprincipal`='5247.2970588235',`amount_topay`='67012',`last_refund_date`='2016-08-29',`last_refund_amt`='5248.00', `od_cal_date`='2016-09-21',`loancomplited`='0' where `loan_accno`='EL1757' ");

mysql_query("UPDATE `transaction` set `amount`='2988',`details`='enterpriseloan Refund' where `accountno`='EL1757' and `date`='2016-08-29' and `amount`>0 ");


mysql_query("UPDATE `transaction` set `interest`='2260',`details`='enterpriseloan Interest' where `accountno`='EL1757' and `date`='2016-08-29' and `interest`>0 ");

mysql_query("update `enterpriseloan` set `odintrest`='0.00',`odprincipal`='147.95',`amount_topay`='57647.05',`od_cal_date`='2016-11-21' where `loan_accno`='EL1757' ");

mysql_query("UPDATE `corporate`.`transaction_ledger` SET `a_od_pr` = '5247.30', `a_tot_od` = '5247.30' WHERE `transaction_ledger`.`id` = 11790 ");

mysql_query("update `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='1046', `b_od_pri`='4135',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4135', `outstanding`='62877',`a_od_int`='0',`a_tot_od`='5229.9470588235',`a_od_pr`='5229.9470588235',`collection`='5181.00',`coll_date`='2016-10-04' where `accountno`='EL1757' and `cal_date`='2016-10-21' and `id`='11791' ");

mysql_query("update `enterpriseloan` set `odintrest`='0',`odprincipal`='5229.9470588235',`amount_topay`='62877',`last_refund_date`='2016-10-04',`last_refund_amt`='5181.00', `od_cal_date`='2016-10-21',`loancomplited`='0' where `loan_accno`='EL1757' ");

mysql_query("UPDATE `transaction` set `amount`='4135',`details`='enterpriseloan Refund' where `accountno`='EL1757' and `date`='2016-10-04' and `amount`>0 ");


mysql_query("UPDATE `transaction` set `interest`='1046',`details`='enterpriseloan Interest' where `accountno`='EL1757' and `date`='2016-10-04' and `interest`>0 ");

mysql_query("UPDATE `corporate`.`transaction_ledger` SET `b_od_pri` = '5082.00', `tot_pr` = '5082.00', `outstanding` = '57647.05', `a_od_pr` = '147.95', `a_tot_od` = '147.95' WHERE `transaction_ledger`.`id` = 14466 ");

mysql_query("update `enterpriseloan` set `odintrest`='0.00',`odprincipal`='147.95',`amount_topay`='57647.05',`od_cal_date`='2016-11-21' where `loan_accno`='EL1757' ");

mysql_query(" DELETE FROM `corporate`.`transaction_ledger` WHERE `transaction_ledger`.`id` = 12867 ");

mysql_query(" update `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1470', `b_od_pri`='5882.35',`b_cur_pri`='48.65',`a_pre_pri`='0',`tot_pr`='5931', `outstanding`='88187',`a_od_int`='0',`a_tot_od`='5833.7029411765',`a_od_pr`='5833.7029411765',`collection`='7401.00',`coll_date`='2016-09-30' where `accountno`='EL1752' and `cal_date`='2016-09-10' ");

mysql_query(" update `enterpriseloan` set `odintrest`='0',`odprincipal`='5833.7029411765',`amount_topay`='88187',`last_refund_date`='2016-09-30',`last_refund_amt`='7401.00', `od_cal_date`='2016-10-10',`loancomplited`='0' where `loan_accno`='EL1752' ");

mysql_query(" UPDATE `transaction` set `amount`='5931',`details`='enterpriseloan Refund' where `accountno`='EL1752' and `date`='2016-09-30' and `amount`>0  ");


mysql_query(" UPDATE `transaction` set `interest`='1470',`details`='enterpriseloan Interest' where `accountno`='EL1752' and `date`='2016-09-30' and `interest`>0 ");

mysql_query(" update `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1423', `b_od_pri`='5833.7',`b_cur_pri`='3.3000000000002',`a_pre_pri`='0',`tot_pr`='5837', `outstanding`='82350',`a_od_int`='0',`a_tot_od`='5879.0529411765',`a_od_pr`='5879.0529411765',`collection`='7260.00',`coll_date`='2016-10-27' where `accountno`='EL1752' and `cal_date`='2016-10-10' ");

mysql_query(" update `enterpriseloan` set `odintrest`='0',`odprincipal`='5879.0529411765',`amount_topay`='82350',`last_refund_date`='2016-10-27',`last_refund_amt`='7260.00', `od_cal_date`='2016-11-10',`loancomplited`='0' where `loan_accno`='EL1752' ");

mysql_query(" UPDATE `transaction` set `amount`='5837',`details`='enterpriseloan Refund' where `accountno`='EL1752' and `date`='2016-10-27' and `amount`>0  ");


mysql_query(" UPDATE `transaction` set `interest`='1423',`details`='enterpriseloan Interest' where `accountno`='EL1752' and `date`='2016-10-27' and `interest`>0 ");




















mysql_query("UPDATE   `corporate`.`transaction` SET `interest` = '0', `details` = 'goldloan Refund' WHERE `transaction`.`id` = 3548");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =3566");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7157");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7867");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =18512");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =4565");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7916");

mysql_query("DELETE   FROM `corporate`.`transaction` WHERE `transaction`.`id` = 8741");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =16643");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'enterpriseloan Refund' WHERE  `transaction`.`id` =5751");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'enterpriseloan Refund' WHERE  `transaction`.`id` =7831");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'enterpriseloan Refund' WHERE  `transaction`.`id` =8749");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'enterpriseloan Refund'  WHERE  `transaction`.`id` =18281");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'demand_loan Refund' WHERE  `transaction`.`id` =6459");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'enterpriseloan Refund' WHERE  `transaction`.`id` =6878");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'enterpriseloan Refund' WHERE  `transaction`.`id` =16652");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'grouploan Refund' WHERE  `transaction`.`id` =7607");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'grouploan Refund' WHERE  `transaction`.`id` =18597");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7663");

mysql_query("DELETE   FROM `corporate`.`transaction` WHERE `transaction`.`id` = 7672");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7665");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =16619");

mysql_query("DELETE   FROM `corporate`.`transaction` WHERE `transaction`.`id` = 7674");

mysql_query("DELETE   FROM `corporate`.`transaction` WHERE `transaction`.`id` = 29347");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7791");

mysql_query("DELETE   FROM `corporate`.`transaction` WHERE `transaction`.`id` = 7447");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =7991");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'businessloan Refund' WHERE  `transaction`.`id` =16656");

mysql_query("UPDATE    `corporate`.`transaction` SET  `interest` =  '0',`details` =  'grouploan Refund' WHERE  `transaction`.`id` =18377");

mysql_query("INSERT  INTO `corporate`.`transaction` (`id`, `transactionid`, `customerid`, `accountno`, `amount`, `interest`, `date`, `details`, `agentid`, `type`, `mode_of_payment`, `chq_dd_no`, `chq_dd_bank_name`, `chq_dd_date`, `transaction`, `voucher`, `folio_no`, `productfolio`, `previous_amt`, `total_amt`, `ip`, `user`) VALUES (NULL, '1472105363', 'c3618', 'EL1698', '5665.00', '0', '2016-08-25', 'enterpriseloan Refund', '4', '', 'cash', '', '', '0000-00-00', '', '9665', '9', '0', '0.00', '0.00', '', '')");

mysql_query("UPDATE    `corporate`.`transaction` SET  `amount` =  '0' WHERE  `transaction`.`id` =24801");

mysql_query("INSERT  INTO `corporate`.`transaction` (`id`, `transactionid`, `customerid`, `accountno`, `amount`, `interest`, `date`, `details`, `agentid`, `type`, `mode_of_payment`, `chq_dd_no`, `chq_dd_bank_name`, `chq_dd_date`, `transaction`, `voucher`, `folio_no`, `productfolio`, `previous_amt`, `total_amt`, `ip`, `user`) VALUES (NULL, '1472201334', '', 'BL1324', '854.00', '0', '2016-08-26', 'businessloan Refund', '0', '', 'cash', '', '', '0000-00-00', '', '9672', '8', '0', '0.00', '0.00', '', '')");

mysql_query("UPDATE    `corporate`.`transaction` SET  `amount` =  '0' WHERE  `transaction`.`id` =24846");

mysql_query("INSERT  INTO `corporate`.`transaction` (`id`, `transactionid`, `customerid`, `accountno`, `amount`, `interest`, `date`, `details`, `agentid`, `type`, `mode_of_payment`, `chq_dd_no`, `chq_dd_bank_name`, `chq_dd_date`, `transaction`, `voucher`, `folio_no`, `productfolio`, `previous_amt`, `total_amt`, `ip`, `user`) VALUES (NULL, '1472555060', 'c139', 'EL1726', '5891.00', '0', '2016-08-30', 'enterpriseloan Refund', '0', '', 'cash', '', '', '0000-00-00', '', '9698', '9', '0', '0.00', '0.00', '', '')");

mysql_query("UPDATE    `corporate`.`transaction` SET  `amount` =  '0' WHERE  `transaction`.`id` =24927");

mysql_query("INSERT  INTO `corporate`.`transaction` (`id`, `transactionid`, `customerid`, `accountno`, `amount`, `interest`, `date`, `details`, `agentid`, `type`, `mode_of_payment`, `chq_dd_no`, `chq_dd_bank_name`, `chq_dd_date`, `transaction`, `voucher`, `folio_no`, `productfolio`, `previous_amt`, `total_amt`, `ip`, `user`) VALUES (NULL, '1472555109', '', 'EL1439', '5441.00', '0', '2016-08-30', 'enterpriseloan Refund', '8', '', 'cash', '', '', '0000-00-00', '', '9700', '9', '0', '0.00', '0.00', '', '')");

mysql_query("UPDATE    `corporate`.`transaction` SET  `amount` =  '0' WHERE  `transaction`.`id` =24929");

mysql_query("INSERT  INTO `corporate`.`transaction` (`id`, `transactionid`, `customerid`, `accountno`, `amount`, `interest`, `date`, `details`, `agentid`, `type`, `mode_of_payment`, `chq_dd_no`, `chq_dd_bank_name`, `chq_dd_date`, `transaction`, `voucher`, `folio_no`, `productfolio`, `previous_amt`, `total_amt`, `ip`, `user`) VALUES (NULL, '1472555129', '', 'EL1440', '5441.00', '0', '2016-08-30', 'enterpriseloan Refund', '8', '', 'cash', '', '', '0000-00-00', '', '9700', '9', '0', '0.00', '0.00', '', '')");

mysql_query("UPDATE    `corporate`.`transaction` SET  `amount` =  '0' WHERE  `transaction`.`id` =24930");




?>