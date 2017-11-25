<?php

mysql_connect('localhost','root','');
mysql_select_db('corporate1');
ini_set("display_errors",1);



mysql_query("update  `transaction_ledger` set `b_od_int`='352',`b_cur_int`='340', `b_od_pri`='812',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='812', `outstanding`='18012',`a_od_int`='0',`a_tot_od`='1540.9411764706',`a_od_pr`='1540.9411764706',`collection`='1504.00',`coll_date`='2016-04-26' where `accountno`='BL1575' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1540.9411764706',`amount_topay`='18012',`last_refund_date`='2016-04-26',`last_refund_amt`='1504.00', `od_cal_date`='2016-05-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='812',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-04-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='692',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-04-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1720.00',`b_cur_int`='1837', `b_od_pri`='4045',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4045', `outstanding`='90010',`a_od_int`='0',`a_tot_od`='7719.3529411765',`a_od_pr`='7719.3529411765',`collection`='7602.00',`coll_date`='2016-04-04' where `accountno`='EL1559' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='7719.3529411765',`amount_topay`='90010',`last_refund_date`='2016-04-04',`last_refund_amt`='7602.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4045',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3557',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1204.00',`b_cur_int`='1286', `b_od_pri`='2832',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2832', `outstanding`='63005',`a_od_int`='0',`a_tot_od`='5403.6470588235',`a_od_pr`='5403.6470588235',`collection`='5322.00',`coll_date`='2016-04-04' where `accountno`='EL1560' and `cal_date`='2016-04-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='5403.6470588235',`amount_topay`='63005',`last_refund_date`='2016-04-04',`last_refund_amt`='5322.00', `od_cal_date`='2016-04-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2832',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-04-04' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2490',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-04-04' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='874.00',`b_cur_int`='934', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1808.00',`coll_date`='2016-04-08' where `accountno`='GL1511' and `cal_date`='2016-04-11'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='50000',`last_refund_date`='2016-04-08',`last_refund_amt`='1808.00', `od_cal_date`='2016-04-11',`loancomplited`='0' where `loan_accno`='GL1511'");

mysql_query("UPDATE   `transaction` set `interest`='1808',`details`='goldloan Interest' where `accountno`='GL1511' and `date`='2016-04-08' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='787.00',`b_cur_int`='841', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='45000',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1628.00',`coll_date`='2016-04-08' where `accountno`='GL1513' and `cal_date`='2016-04-11'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='45000',`last_refund_date`='2016-04-08',`last_refund_amt`='1628.00', `od_cal_date`='2016-04-11',`loancomplited`='0' where `loan_accno`='GL1513'");

mysql_query("UPDATE   `transaction` set `interest`='1628',`details`='goldloan Interest' where `accountno`='GL1513' and `date`='2016-04-08' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1019',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='49977',`a_od_int`='986',`a_tot_od`='986',`a_od_pr`='0',`collection`='1019.00',`coll_date`='2016-04-30' where `accountno`='GL1343' and `cal_date`='2016-04-08'");

mysql_query("update  `goldloan` set `odintrest`='986',`odprincipal`='0',`amount_topay`='49977',`last_refund_date`='2016-04-30',`last_refund_amt`='1019.00', `od_cal_date`='2016-05-08',`loancomplited`='0' where `loan_accno`='GL1343'");

mysql_query("UPDATE   `transaction` set `interest`='1019',`details`='goldloan Interest' where `accountno`='GL1343' and `date`='2016-04-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `outstanding`='16972.00', `a_od_int`='1791',`a_tot_od`='7853.92',`a_od_pr`='6062.92' where `accountno`='BL1692' and `cal_date`='2016-04-11'");

mysql_query("update  `businessloan` set `odintrest`='1791',`odprincipal`='6062.92',`amount_topay`='16972.00',`od_cal_date`='2016-04-11' where `loan_accno`='BL1692'");
mysql_query("update  `transaction_ledger` set `outstanding`='17706.00', `a_od_int`='699',`a_tot_od`='5074.6666666667',`a_od_pr`='4375.6666666667' where `accountno`='BL1274' and `cal_date`='2016-04-21'");

mysql_query("update  `businessloan` set `odintrest`='699',`odprincipal`='4375.6666666667',`amount_topay`='17706.00',`od_cal_date`='2016-04-21' where `loan_accno`='BL1274'");
mysql_query("update  `transaction_ledger` set `outstanding`='19979.00', `a_od_int`='814',`a_tot_od`='814',`a_od_pr`='0' where `accountno`='GL1402' and `cal_date`='2016-04-12'");

mysql_query("update  `goldloan` set `odintrest`='814',`odprincipal`='0',`amount_topay`='19979.00',`od_cal_date`='2016-04-12' where `loan_accno`='GL1402'");
mysql_query("update  `transaction_ledger` set `outstanding`='15000.00', `a_od_int`='271',`a_tot_od`='271',`a_od_pr`='0' where `accountno`='DL1640' and `cal_date`='2016-04-10'");

mysql_query("update  `demand_loan` set `odintrest`='271',`odprincipal`='0',`amount_topay`='15000.00',`od_cal_date`='2016-04-10' where `loan_accno`='DL1640'");
mysql_query("update  `transaction_ledger` set `outstanding`='4202.00', `a_od_int`='79',`a_tot_od`='605.54545454545',`a_od_pr`='526.54545454545' where `accountno`='GRL1582' and `cal_date`='2016-04-09'");

mysql_query("update  `grouploan` set `odintrest`='79',`odprincipal`='526.54545454545',`amount_topay`='4202.00',`od_cal_date`='2016-04-09' where `loan_accno`='GRL1582'");




















mysql_query("update  `transaction_ledger` set `b_od_int`='178',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='459',`a_tot_od`='5913.5454545455',`a_od_pr`='5454.5454545455',`collection`='178.00',`coll_date`='2016-05-13' where `accountno`='BL1692' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='459',`odprincipal`='5454.5454545455',`amount_topay`='30000',`last_refund_date`='2016-05-13',`last_refund_amt`='178.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `interest`='178',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-05-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='337', `b_od_pri`='1182',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1182', `outstanding`='16830',`a_od_int`='0',`a_tot_od`='1535.4105882353',`a_od_pr`='1535.4105882353',`collection`='1519.00',`coll_date`='2016-05-25' where `accountno`='BL1575' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1535.4105882353',`amount_topay`='16830',`last_refund_date`='2016-05-25',`last_refund_amt`='1519.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1182',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='337',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1048',`b_cur_int`='361', `b_od_pri`='2549',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2549', `outstanding`='15157',`a_od_int`='0',`a_tot_od`='5160.0033333333',`a_od_pr`='5160.0033333333',`collection`='3958.00',`coll_date`='2016-05-30' where `accountno`='BL1274' and `cal_date`='2016-05-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5160.0033333333',`amount_topay`='15157',`last_refund_date`='2016-05-30',`last_refund_amt`='3958.00', `od_cal_date`='2016-06-21',`loancomplited`='0' where `loan_accno`='BL1274'");

mysql_query("UPDATE   `transaction` set `amount`='2549',`details`='businessloan Refund' where `accountno`='BL1274' and `date`='2016-05-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1409',`details`='businessloan Interest' where `accountno`='BL1274' and `date`='2016-05-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1702',`b_cur_int`='1758', `b_od_pri`='4259',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4259', `outstanding`='85751',`a_od_int`='0',`a_tot_od`='15225.055882353',`a_od_pr`='15225.055882353',`collection`='7719.00',`coll_date`='2016-05-25' where `accountno`='EL1559' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15225.055882353',`amount_topay`='85751',`last_refund_date`='2016-05-25',`last_refund_amt`='7719.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4259',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3460',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1191',`b_cur_int`='1231', `b_od_pri`='2982',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2982', `outstanding`='60023',`a_od_int`='0',`a_tot_od`='10656.944117647',`a_od_pr`='10656.944117647',`collection`='5404.00',`coll_date`='2016-05-25' where `accountno`='EL1560' and `cal_date`='2016-05-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='10656.944117647',`amount_topay`='60023',`last_refund_date`='2016-05-25',`last_refund_amt`='5404.00', `od_cal_date`='2016-06-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='2982',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-05-25' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2422',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1208',`b_cur_int`='407', `b_od_pri`='2982',`b_cur_pri`='0',`a_pre_pri`='186',`tot_pr`='3168', `outstanding`='16811',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1801.00',`coll_date`='2016-05-24' where `accountno`='GL1402' and `cal_date`='2016-05-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='16811',`last_refund_date`='2016-05-24',`last_refund_amt`='1801.00', `od_cal_date`='2016-06-12',`loancomplited`='0' where `loan_accno`='GL1402'");

mysql_query("UPDATE   `transaction` set `amount`='3168',`details`='goldloan Refund' where `accountno`='GL1402' and `date`='2016-05-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1615',`details`='goldloan Interest' where `accountno`='GL1402' and `date`='2016-05-24' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='986',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='49977',`a_od_int`='1019',`a_tot_od`='1019',`a_od_pr`='0',`collection`='986.00',`coll_date`='2016-05-30' where `accountno`='GL1343' and `cal_date`='2016-05-08'");

mysql_query("update  `goldloan` set `odintrest`='1019',`odprincipal`='0',`amount_topay`='49977',`last_refund_date`='2016-05-30',`last_refund_amt`='986.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='GL1343'");

mysql_query("UPDATE   `transaction` set `interest`='986',`details`='goldloan Interest' where `accountno`='GL1343' and `date`='2016-05-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='542',`b_cur_int`='158', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='122',`a_tot_od`='122',`a_od_pr`='0',`collection`='700.00',`coll_date`='2016-05-25' where `accountno`='DL1640' and `cal_date`='2016-05-10'");

mysql_query("update  `demand_loan` set `odintrest`='122',`odprincipal`='0',`amount_topay`='15000',`last_refund_date`='2016-05-25',`last_refund_amt`='700.00', `od_cal_date`='2016-06-10',`loancomplited`='0' where `loan_accno`='DL1640'");

mysql_query("UPDATE   `transaction` set `interest`='700',`details`='demand_loan Interest' where `accountno`='DL1640' and `date`='2016-05-25' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='155',`b_cur_int`='79', `b_od_pri`='706',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='706', `outstanding`='3496',`a_od_int`='0',`a_tot_od`='729.64090909091',`a_od_pr`='729.64090909091',`collection`='940.00',`coll_date`='2016-05-19' where `accountno`='GRL1582' and `cal_date`='2016-05-09'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='729.64090909091',`amount_topay`='3496',`last_refund_date`='2016-05-19',`last_refund_amt`='940.00', `od_cal_date`='2016-06-09',`loancomplited`='0' where `loan_accno`='GRL1582'");

mysql_query("UPDATE   `transaction` set `amount`='706',`details`='grouploan Refund' where `accountno`='GRL1582' and `date`='2016-05-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='234',`details`='grouploan Interest' where `accountno`='GRL1582' and `date`='2016-05-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='904',`a_tot_od`='904',`a_od_pr`='0' where `accountno`='GL1511' and `cal_date`='2016-05-11'");

mysql_query("update  `goldloan` set `odintrest`='904',`odprincipal`='0',`amount_topay`='50000.00',`od_cal_date`='2016-05-11' where `loan_accno`='GL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='45000.00', `a_od_int`='814',`a_tot_od`='814',`a_od_pr`='0' where `accountno`='GL1513' and `cal_date`='2016-05-11'");

mysql_query("update  `goldloan` set `odintrest`='814',`odprincipal`='0',`amount_topay`='45000.00',`od_cal_date`='2016-05-11' where `loan_accno`='GL1513'");






















mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='585', `b_od_pri`='2345',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2345', `outstanding`='35914',`a_od_int`='0',`a_tot_od`='2972.8211764706',`a_od_pr`='2972.8211764706',`collection`='2930.00',`coll_date`='2016-08-12' where `accountno`='BL1734' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2972.8211764706',`amount_topay`='35914',`last_refund_date`='2016-08-12',`last_refund_amt`='2930.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='2345',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-08-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='585',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-08-12' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='764',`b_cur_int`='764', `b_od_pri`='3782',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3782', `outstanding`='46218',`a_od_int`='0',`a_tot_od`='9854.3645454545',`a_od_pr`='9854.3645454545',`collection`='5310.00',`coll_date`='2016-08-09' where `accountno`='BL1767' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9854.3645454545',`amount_topay`='46218',`last_refund_date`='2016-08-09',`last_refund_amt`='5310.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3782',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1528',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-08-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='3102',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3102', `outstanding`='21856',`a_od_int`='0',`a_tot_od`='2765.1',`a_od_pr`='2765.1',`collection`='3102.00',`coll_date`='2016-08-11' where `accountno`='BL1692' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2765.1',`amount_topay`='21856',`last_refund_date`='2016-08-11',`last_refund_amt`='3102.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='3102',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='270', `b_od_pri`='1170',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1170', `outstanding`='13278',`a_od_int`='0',`a_tot_od`='1512.8205882353',`a_od_pr`='1512.8205882353',`collection`='1440.00',`coll_date`='2016-08-22' where `accountno`='BL1575' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1512.8205882353',`amount_topay`='13278',`last_refund_date`='2016-08-22',`last_refund_amt`='1440.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1170',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='270',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='608',`b_cur_int`='309', `b_od_pri`='1023',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1023', `outstanding`='14134',`a_od_int`='0',`a_tot_od`='9137.0033333333',`a_od_pr`='9137.0033333333',`collection`='1940.00',`coll_date`='2016-08-22' where `accountno`='BL1274' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9137.0033333333',`amount_topay`='14134',`last_refund_date`='2016-08-22',`last_refund_amt`='1940.00', `od_cal_date`='2016-09-21',`loancomplited`='0' where `loan_accno`='BL1274'");

mysql_query("UPDATE   `transaction` set `amount`='1023',`details`='businessloan Refund' where `accountno`='BL1274' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='917',`details`='businessloan Interest' where `accountno`='BL1274' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1559',`b_cur_int`='1559', `b_od_pri`='4405',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4405', `outstanding`='75383',`a_od_int`='0',`a_tot_od`='22504.115882353',`a_od_pr`='22504.115882353',`collection`='7523.00',`coll_date`='2016-08-30' where `accountno`='EL1559' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22504.115882353',`amount_topay`='75383',`last_refund_date`='2016-08-30',`last_refund_amt`='7523.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4405',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='3118',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1091',`b_cur_int`='1091', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='52765',`a_od_int`='0',`a_tot_od`='15751.884117647',`a_od_pr`='15751.884117647',`collection`='5266.00',`coll_date`='2016-08-30' where `accountno`='EL1560' and `cal_date`='2016-08-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.884117647',`amount_topay`='52765',`last_refund_date`='2016-08-30',`last_refund_amt`='5266.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2182',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='143', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='1357',`tot_pr`='4441', `outstanding`='2592',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1500.00',`coll_date`='2016-08-30' where `accountno`='GL1402' and `cal_date`='2016-08-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='2592',`last_refund_date`='2016-08-30',`last_refund_amt`='1500.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='GL1402'");

mysql_query("UPDATE   `transaction` set `amount`='4441',`details`='goldloan Refund' where `accountno`='GL1402' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='143',`details`='goldloan Interest' where `accountno`='GL1402' and `date`='2016-08-30' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1000.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='3610',`a_tot_od`='3610',`a_od_pr`='0',`collection`='1000.00',`coll_date`='2016-08-18' where `accountno`='GL1511' and `cal_date`='2016-08-11'");

mysql_query("update  `goldloan` set `odintrest`='3610',`odprincipal`='0',`amount_topay`='50000',`last_refund_date`='2016-08-18',`last_refund_amt`='1000.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='GL1511'");

mysql_query("UPDATE   `transaction` set `interest`='1000',`details`='goldloan Interest' where `accountno`='GL1511' and `date`='2016-08-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1000.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='45000',`a_od_int`='3151',`a_tot_od`='3151',`a_od_pr`='0',`collection`='1000.00',`coll_date`='2016-08-18' where `accountno`='GL1513' and `cal_date`='2016-08-11'");

mysql_query("update  `goldloan` set `odintrest`='3151',`odprincipal`='0',`amount_topay`='45000',`last_refund_date`='2016-08-18',`last_refund_amt`='1000.00', `od_cal_date`='2016-09-11',`loancomplited`='0' where `loan_accno`='GL1513'");

mysql_query("UPDATE   `transaction` set `interest`='1000',`details`='goldloan Interest' where `accountno`='GL1513' and `date`='2016-08-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='229',`b_cur_int`='1', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='228',`a_tot_od`='228',`a_od_pr`='0',`collection`='230.00',`coll_date`='2016-08-13' where `accountno`='GL1764' and `cal_date`='2016-08-12'");

mysql_query("update  `goldloan` set `odintrest`='228',`odprincipal`='0',`amount_topay`='15000',`last_refund_date`='2016-08-13',`last_refund_amt`='230.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='GL1764'");

mysql_query("UPDATE   `transaction` set `interest`='230',`details`='goldloan Interest' where `accountno`='GL1764' and `date`='2016-08-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='985.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='49977',`a_od_int`='1031',`a_tot_od`='51008',`a_od_pr`='49977',`collection`='985.00',`coll_date`='2016-08-31' where `accountno`='GL1343' and `cal_date`='2016-08-08'");

mysql_query("update  `goldloan` set `odintrest`='1031',`odprincipal`='49977',`amount_topay`='49977',`last_refund_date`='2016-08-31',`last_refund_amt`='985.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='GL1343'");

mysql_query("UPDATE   `transaction` set `interest`='985',`details`='goldloan Interest' where `accountno`='GL1343' and `date`='2016-08-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='696',`b_cur_int`='459', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='55',`tot_pr`='55', `outstanding`='29945',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1210.00',`coll_date`='2016-08-22' where `accountno`='DL1758' and `cal_date`='2016-08-13'");

mysql_query("update  `demand_loan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='29945',`last_refund_date`='2016-08-22',`last_refund_amt`='1210.00', `od_cal_date`='2016-09-13',`loancomplited`='0' where `loan_accno`='DL1758'");

mysql_query("UPDATE   `transaction` set `amount`='55',`details`='demand_loan Refund' where `accountno`='DL1758' and `date`='2016-08-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1155',`details`='demand_loan Interest' where `accountno`='DL1758' and `date`='2016-08-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='140.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='513',`a_tot_od`='513',`a_od_pr`='0',`collection`='140.00',`coll_date`='2016-08-26' where `accountno`='DL1640' and `cal_date`='2016-08-10'");

mysql_query("update  `demand_loan` set `odintrest`='513',`odprincipal`='0',`amount_topay`='15000',`last_refund_date`='2016-08-26',`last_refund_amt`='140.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='DL1640'");

mysql_query("UPDATE   `transaction` set `interest`='140',`details`='demand_loan Interest' where `accountno`='DL1640' and `date`='2016-08-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='50', `b_od_pri`='420',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='420', `outstanding`='2257',`a_od_int`='0',`a_tot_od`='854.28545454545',`a_od_pr`='854.28545454545',`collection`='470.00',`coll_date`='2016-08-19' where `accountno`='GRL1582' and `cal_date`='2016-08-09'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='854.28545454545',`amount_topay`='2257',`last_refund_date`='2016-08-19',`last_refund_amt`='470.00', `od_cal_date`='2016-09-09',`loancomplited`='0' where `loan_accno`='GRL1582'");

mysql_query("UPDATE   `transaction` set `amount`='420',`details`='grouploan Refund' where `accountno`='GRL1582' and `date`='2016-08-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='50',`details`='grouploan Interest' where `accountno`='GRL1582' and `date`='2016-08-19' and `interest`>0 ");



mysql_query("update  `transaction_ledger` set `outstanding`='45000.00', `a_od_int`='1309',`a_tot_od`='1309',`a_od_pr`='0' where `accountno`='GL1741' and `cal_date`='2016-08-15'");

mysql_query("update  `goldloan` set `odintrest`='1309',`odprincipal`='0',`amount_topay`='45000.00',`od_cal_date`='2016-08-15' where `loan_accno`='GL1741'");

























mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='531', `b_od_pri`='2369',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2369', `outstanding`='33545',`a_od_int`='0',`a_tot_od`='2956.7611764706',`a_od_pr`='2956.7611764706',`collection`='2900.00',`coll_date`='2016-09-20' where `accountno`='BL1734' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2956.7611764706',`amount_topay`='33545',`last_refund_date`='2016-09-20',`last_refund_amt`='2900.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='2369',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='531',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-09-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='5241',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5241', `outstanding`='40977',`a_od_int`='0',`a_tot_od`='4613.36',`a_od_pr`='4613.36',`collection`='5241.00',`coll_date`='2016-09-07' where `accountno`='BL1767' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4613.36',`amount_topay`='40977',`last_refund_date`='2016-09-07',`last_refund_amt`='5241.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='5241',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='334',`b_cur_int`='323', `b_od_pri`='2404',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2404', `outstanding`='19452',`a_od_int`='0',`a_tot_od`='5815.6454545455',`a_od_pr`='5815.6454545455',`collection`='3061.00',`coll_date`='2016-09-14' where `accountno`='BL1692' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5815.6454545455',`amount_topay`='19452',`last_refund_date`='2016-09-14',`last_refund_amt`='3061.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2404',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-09-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='657',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-09-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='240', `b_od_pri`='1178',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1178', `outstanding`='12100',`a_od_int`='0',`a_tot_od`='1511.2905882353',`a_od_pr`='1511.2905882353',`collection`='1418.00',`coll_date`='2016-09-26' where `accountno`='BL1575' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1511.2905882353',`amount_topay`='12100',`last_refund_date`='2016-09-26',`last_refund_amt`='1418.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1178',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='240',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1300.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='45000',`a_od_int`='1363',`a_tot_od`='1363',`a_od_pr`='0',`collection`='1300.00',`coll_date`='2016-09-16' where `accountno`='GL1741' and `cal_date`='2016-09-15'");

mysql_query("update  `goldloan` set `odintrest`='1363',`odprincipal`='0',`amount_topay`='45000',`last_refund_date`='2016-09-16',`last_refund_amt`='1300.00', `od_cal_date`='2016-10-15',`loancomplited`='0' where `loan_accno`='GL1741'");

mysql_query("UPDATE   `transaction` set `interest`='1300',`details`='goldloan Interest' where `accountno`='GL1741' and `date`='2016-09-16' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='228',`b_cur_int`='50', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='172',`a_tot_od`='172',`a_od_pr`='0',`collection`='278.00',`coll_date`='2016-09-22' where `accountno`='GL1764' and `cal_date`='2016-09-12'");

mysql_query("update  `goldloan` set `odintrest`='172',`odprincipal`='0',`amount_topay`='15000',`last_refund_date`='2016-09-22',`last_refund_amt`='278.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='GL1764'");

mysql_query("UPDATE   `transaction` set `interest`='278',`details`='goldloan Interest' where `accountno`='GL1764' and `date`='2016-09-22' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1030.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='49977',`a_od_int`='987',`a_tot_od`='50964',`a_od_pr`='49977',`collection`='1030.00',`coll_date`='2016-09-30' where `accountno`='GL1343' and `cal_date`='2016-09-08'");

mysql_query("update  `goldloan` set `odintrest`='987',`odprincipal`='49977',`amount_topay`='49977',`last_refund_date`='2016-09-30',`last_refund_amt`='1030.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='GL1343'");


mysql_query("update  `transaction_ledger` set `outstanding`='14134.00', `a_od_int`='0',`a_tot_od`='9137',`a_od_pr`='9137' where `accountno`='BL1274' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9137',`amount_topay`='14134.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1274'");
mysql_query("update  `transaction_ledger` set `outstanding`='75383.00', `a_od_int`='0',`a_tot_od`='22504.12',`a_od_pr`='22504.12' where `accountno`='EL1559' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='22504.12',`amount_topay`='75383.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1559'");
mysql_query("update  `transaction_ledger` set `outstanding`='52765.00', `a_od_int`='0',`a_tot_od`='15751.88',`a_od_pr`='15751.88' where `accountno`='EL1560' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='15751.88',`amount_topay`='52765.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1560'");
mysql_query("update  `transaction_ledger` set `outstanding`='2592.00', `a_od_int`='0',`a_tot_od`='2592',`a_od_pr`='2592.00' where `accountno`='GL1402' and `cal_date`='2016-09-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='2592.00',`amount_topay`='2592.00',`od_cal_date`='2016-09-12' where `loan_accno`='GL1402'");
mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='3610',`a_tot_od`='3610',`a_od_pr`='0' where `accountno`='GL1511' and `cal_date`='2016-09-11'");

mysql_query("update  `goldloan` set `odintrest`='3610',`odprincipal`='0',`amount_topay`='50000.00',`od_cal_date`='2016-09-11' where `loan_accno`='GL1511'");
mysql_query("update  `transaction_ledger` set `outstanding`='45000.00', `a_od_int`='3151',`a_tot_od`='3151',`a_od_pr`='0' where `accountno`='GL1513' and `cal_date`='2016-09-11'");

mysql_query("update  `goldloan` set `odintrest`='3151',`odprincipal`='0',`amount_topay`='45000.00',`od_cal_date`='2016-09-11' where `loan_accno`='GL1513'");
mysql_query("update  `transaction_ledger` set `outstanding`='29945.00', `a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0' where `accountno`='DL1758' and `cal_date`='2016-09-13'");

mysql_query("update  `demand_loan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='29945.00',`od_cal_date`='2016-09-13' where `loan_accno`='DL1758'");
mysql_query("update  `transaction_ledger` set `outstanding`='15000.00', `a_od_int`='513',`a_tot_od`='15513',`a_od_pr`='15000.00' where `accountno`='DL1640' and `cal_date`='2016-09-10'");

mysql_query("update  `demand_loan` set `odintrest`='513',`odprincipal`='15000.00',`amount_topay`='15000.00',`od_cal_date`='2016-09-10' where `loan_accno`='DL1640'");
mysql_query("update  `transaction_ledger` set `outstanding`='2257.00', `a_od_int`='0',`a_tot_od`='854.29',`a_od_pr`='854.29' where `accountno`='GRL1582' and `cal_date`='2016-09-09'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='854.29',`amount_topay`='2257.00',`od_cal_date`='2016-09-09' where `loan_accno`='GRL1582'");



















mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='513', `b_od_pri`='2327',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2327', `outstanding`='31218',`a_od_int`='0',`a_tot_od`='2982.7011764706',`a_od_pr`='2982.7011764706',`collection`='2840.00',`coll_date`='2016-10-19' where `accountno`='BL1734' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2982.7011764706',`amount_topay`='31218',`last_refund_date`='2016-10-19',`last_refund_amt`='2840.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1734'");

mysql_query("UPDATE   `transaction` set `amount`='2327',`details`='businessloan Refund' where `accountno`='BL1734' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='513',`details`='businessloan Interest' where `accountno`='BL1734' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='606',`b_cur_int`='626', `b_od_pri`='3919',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3919', `outstanding`='37058',`a_od_int`='0',`a_tot_od`='9785.2690909091',`a_od_pr`='9785.2690909091',`collection`='5151.00',`coll_date`='2016-10-19' where `accountno`='BL1767' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='9785.2690909091',`amount_topay`='37058',`last_refund_date`='2016-10-19',`last_refund_amt`='5151.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3919',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1232',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='297', `b_od_pri`='2673',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2673', `outstanding`='16779',`a_od_int`='0',`a_tot_od`='5869.9227272727',`a_od_pr`='5869.9227272727',`collection`='2970.00',`coll_date`='2016-10-26' where `accountno`='BL1692' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5869.9227272727',`amount_topay`='16779',`last_refund_date`='2016-10-26',`last_refund_amt`='2970.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2673',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='297',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-10-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='226', `b_od_pri`='1164',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1164', `outstanding`='10936',`a_od_int`='0',`a_tot_od`='1523.7605882353',`a_od_pr`='1523.7605882353',`collection`='1390.00',`coll_date`='2016-10-28' where `accountno`='BL1575' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1523.7605882353',`amount_topay`='10936',`last_refund_date`='2016-10-28',`last_refund_amt`='1390.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1575'");

mysql_query("UPDATE   `transaction` set `amount`='1164',`details`='businessloan Refund' where `accountno`='BL1575' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='226',`details`='businessloan Interest' where `accountno`='BL1575' and `date`='2016-10-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='279',`b_cur_int`='288', `b_od_pri`='1338',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1338', `outstanding`='12796',`a_od_int`='0',`a_tot_od`='11132.333333333',`a_od_pr`='11132.333333333',`collection`='1905.00',`coll_date`='2016-10-31' where `accountno`='BL1274' and `cal_date`='2016-10-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='11132.333333333',`amount_topay`='12796',`last_refund_date`='2016-10-31',`last_refund_amt`='1905.00', `od_cal_date`='2016-11-21',`loancomplited`='0' where `loan_accno`='BL1274'");

mysql_query("INSERT  into `transaction` set `transactionid`='1480500762',`amount`='1338',`details`='businessloan Refund',`accountno`='BL1274',`date`='2016-10-31' ");


mysql_query("UPDATE   `transaction` set `interest`='567',`details`='businessloan Interest' where `accountno`='BL1274' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='1425',`b_cur_int`='1473', `b_od_pri`='4114',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4114', `outstanding`='71269',`a_od_int`='0',`a_tot_od`='30154.825882353',`a_od_pr`='30154.825882353',`collection`='7012.00',`coll_date`='2016-10-31' where `accountno`='EL1559' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='30154.825882353',`amount_topay`='71269',`last_refund_date`='2016-10-31',`last_refund_amt`='7012.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1559'");

mysql_query("UPDATE   `transaction` set `amount`='4114',`details`='enterpriseloan Refund' where `accountno`='EL1559' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2898',`details`='enterpriseloan Interest' where `accountno`='EL1559' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='997',`b_cur_int`='1031', `b_od_pri`='3095',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3095', `outstanding`='49670',`a_od_int`='0',`a_tot_od`='20892.174117647',`a_od_pr`='20892.174117647',`collection`='5123.00',`coll_date`='2016-10-31' where `accountno`='EL1560' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='20892.174117647',`amount_topay`='49670',`last_refund_date`='2016-10-31',`last_refund_amt`='5123.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='EL1560'");

mysql_query("UPDATE   `transaction` set `amount`='3095',`details`='enterpriseloan Refund' where `accountno`='EL1560' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='2028',`details`='enterpriseloan Interest' where `accountno`='EL1560' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='3500.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='1948',`a_tot_od`='1948',`a_od_pr`='0',`collection`='3500.00',`coll_date`='2016-10-18' where `accountno`='GL1511' and `cal_date`='2016-10-11'");

mysql_query("update  `goldloan` set `odintrest`='1948',`odprincipal`='0',`amount_topay`='50000',`last_refund_date`='2016-10-18',`last_refund_amt`='3500.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='GL1511'");

mysql_query("UPDATE   `transaction` set `interest`='3500',`details`='goldloan Interest' where `accountno`='GL1511' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='3500.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='45000',`a_od_int`='1306',`a_tot_od`='1306',`a_od_pr`='0',`collection`='3500.00',`coll_date`='2016-10-18' where `accountno`='GL1513' and `cal_date`='2016-10-11'");

mysql_query("update  `goldloan` set `odintrest`='1306',`odprincipal`='0',`amount_topay`='45000',`last_refund_date`='2016-10-18',`last_refund_amt`='3500.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='GL1513'");

mysql_query("UPDATE   `transaction` set `interest`='3500',`details`='goldloan Interest' where `accountno`='GL1513' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='900.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='45000',`a_od_int`='1151',`a_tot_od`='1151',`a_od_pr`='0',`collection`='900.00',`coll_date`='2016-10-18' where `accountno`='GL1741' and `cal_date`='2016-10-15'");

mysql_query("update  `goldloan` set `odintrest`='1151',`odprincipal`='0',`amount_topay`='45000',`last_refund_date`='2016-10-18',`last_refund_amt`='900.00', `od_cal_date`='2016-11-15',`loancomplited`='0' where `loan_accno`='GL1741'");

mysql_query("UPDATE   `transaction` set `interest`='900',`details`='goldloan Interest' where `accountno`='GL1741' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='172',`b_cur_int`='229', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='2111',`tot_pr`='2111', `outstanding`='12889',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='2512.00',`coll_date`='2016-10-31' where `accountno`='GL1764' and `cal_date`='2016-10-12'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='12889',`last_refund_date`='2016-10-31',`last_refund_amt`='2512.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='GL1764'");

mysql_query("UPDATE   `transaction` set `amount`='2111',`details`='goldloan Refund' where `accountno`='GL1764' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='401',`details`='goldloan Interest' where `accountno`='GL1764' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='443',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='29945',`a_od_int`='458',`a_tot_od`='458',`a_od_pr`='0',`collection`='443.00',`coll_date`='2016-10-20' where `accountno`='DL1758' and `cal_date`='2016-10-13'");

mysql_query("update  `demand_loan` set `odintrest`='458',`odprincipal`='0',`amount_topay`='29945',`last_refund_date`='2016-10-20',`last_refund_amt`='443.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='DL1758'");

mysql_query("UPDATE   `transaction` set `interest`='443',`details`='demand_loan Interest' where `accountno`='DL1758' and `date`='2016-10-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='784',`b_cur_int`='146', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='134',`a_tot_od`='15134',`a_od_pr`='15000',`collection`='930.00',`coll_date`='2016-10-20' where `accountno`='DL1640' and `cal_date`='2016-10-10'");

mysql_query("update  `demand_loan` set `odintrest`='134',`odprincipal`='15000',`amount_topay`='15000',`last_refund_date`='2016-10-20',`last_refund_amt`='930.00', `od_cal_date`='2016-11-10',`loancomplited`='0' where `loan_accno`='DL1640'");

mysql_query("UPDATE   `transaction` set `interest`='930',`details`='demand_loan Interest' where `accountno`='DL1640' and `date`='2016-10-20' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='41',`b_cur_int`='42', `b_od_pri`='417',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='417', `outstanding`='1840',`a_od_int`='0',`a_tot_od`='1346.3809090909',`a_od_pr`='1346.3809090909',`collection`='500.00',`coll_date`='2016-10-13' where `accountno`='GRL1582' and `cal_date`='2016-10-09'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1346.3809090909',`amount_topay`='1840',`last_refund_date`='2016-10-13',`last_refund_amt`='500.00', `od_cal_date`='2016-11-09',`loancomplited`='0' where `loan_accno`='GRL1582'");

mysql_query("INSERT  into `transaction` set `transactionid`='1480500762',`amount`='417',`details`='grouploan Refund',`accountno`='GRL1582',`date`='2016-10-13' ");


mysql_query("UPDATE   `transaction` set `interest`='83',`details`='grouploan Interest' where `accountno`='GRL1582' and `date`='2016-10-13' and `interest`>0 ");



















mysql_query("update  `transaction_ledger` set `b_od_int`='141',`b_cur_int`='3', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='15000',`a_od_int`='226',`a_tot_od`='1108.3529411765',`a_od_pr`='882.35294117647',`collection`='144.00',`coll_date`='2016-07-26' where `accountno`='BL1748' and `cal_date`='2016-07-12'");

mysql_query("update  `businessloan` set `odintrest`='226',`odprincipal`='882.35294117647',`amount_topay`='15000',`last_refund_date`='2016-07-26',`last_refund_amt`='144.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `interest`='144',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-07-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='226',`b_cur_int`='229', `b_od_pri`='708',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='708', `outstanding`='14292',`a_od_int`='0',`a_tot_od`='1056.7029411765',`a_od_pr`='1056.7029411765',`collection`='1163.00',`coll_date`='2016-08-13' where `accountno`='BL1748' and `cal_date`='2016-08-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1056.7029411765',`amount_topay`='14292',`last_refund_date`='2016-08-13',`last_refund_amt`='1163.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `amount`='708',`details`='businessloan Refund' where `accountno`='BL1748' and `date`='2016-08-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='455',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-08-13' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='211', `b_od_pri`='887',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='887', `outstanding`='13405',`a_od_int`='0',`a_tot_od`='1052.0529411765',`a_od_pr`='1052.0529411765',`collection`='1098.00',`coll_date`='2016-09-22' where `accountno`='BL1748' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1052.0529411765',`amount_topay`='13405',`last_refund_date`='2016-09-22',`last_refund_amt`='1098.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `amount`='887',`details`='businessloan Refund' where `accountno`='BL1748' and `date`='2016-09-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='211',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-09-22' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='205', `b_od_pri`='873',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='873', `outstanding`='12532',`a_od_int`='0',`a_tot_od`='1061.4029411765',`a_od_pr`='1061.4029411765',`collection`='1078.00',`coll_date`='2016-10-31' where `accountno`='BL1748' and `cal_date`='2016-10-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1061.4029411765',`amount_topay`='12532',`last_refund_date`='2016-10-31',`last_refund_amt`='1078.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='BL1748'");

mysql_query("UPDATE   `transaction` set `amount`='873',`details`='businessloan Refund' where `accountno`='BL1748' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='205',`details`='businessloan Interest' where `accountno`='BL1748' and `date`='2016-10-31' and `interest`>0 ");


mysql_query("insert  into `transaction_ledger` set `outstanding`='7837.00', `a_od_int`='1583',`a_tot_od`='9420',`a_od_pr`='7837.00', `accountno`='GL1092',`cal_date`='2016-09-16' ");


mysql_query("update  `goldloan` set `odintrest`='1583',`odprincipal`='7837.00',`amount_topay`='7837.00',`od_cal_date`='2016-09-16' where `loan_accno`='GL1092' ");

mysql_query("insert  into `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='163',`a_tot_od`='8140',`a_od_pr`='7977.00', `accountno`='GL972',`cal_date`='2016-04-08' ");

mysql_query("update  `goldloan` set `odintrest`='163',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-04-08' where `loan_accno`='GL972' ");

mysql_query("insert  into `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='320',`a_tot_od`='8297',`a_od_pr`='7977.00', `accountno`='GL972',`cal_date`='2016-05-08'");

mysql_query("update  `goldloan` set `odintrest`='320',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-05-08' where `loan_accno`='GL972'");

mysql_query("insert into `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='483',`a_tot_od`='8460',`a_od_pr`='7977.00', `accountno`='GL972',`cal_date`='2016-06-08'");

mysql_query("update  `goldloan` set `odintrest`='483',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-06-08' where `loan_accno`='GL972'");

mysql_query("INSERT  INTO `corporate1`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '', 'GL972', '2016-07-08', '2016-07-29', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '0', '266', '2016-11-30 17:53:46')");

mysql_query("update  `transaction_ledger` set `b_od_int`='226.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='7977',`a_od_int`='577',`a_tot_od`='8554',`a_od_pr`='7977',`collection`='226.00',`coll_date`='2016-07-29' where `accountno`='GL972' and `cal_date`='2016-07-08'");

mysql_query("update  `goldloan` set `odintrest`='577',`odprincipal`='7977',`amount_topay`='7977',`last_refund_date`='2016-07-29',`last_refund_amt`='226.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='GL972'");

mysql_query("UPDATE   `transaction` set `interest`='226',`details`='goldloan Interest' where `accountno`='GL972' and `date`='2016-07-29' and `interest`>0 ");

mysql_query("insert  into `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='577',`a_tot_od`='8554',`a_od_pr`='7977.00', `accountno`='GL972',`cal_date`='2016-08-08' ");

mysql_query("update  `goldloan` set `odintrest`='577',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-08-08' where `loan_accno`='GL972' ");

mysql_query("insert  into `transaction_ledger` set `outstanding`='7977.00', `a_od_int`='740',`a_tot_od`='8717',`a_od_pr`='7977.00', `accountno`='GL972',`cal_date`='2016-09-08'");

mysql_query("update  `goldloan` set `odintrest`='740',`odprincipal`='7977.00',`amount_topay`='7977.00',`od_cal_date`='2016-09-08' where `loan_accno`='GL972' ");

mysql_query("update  `transaction_ledger` set `b_od_int`='197',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='764',`a_tot_od`='5309.4545454545',`a_od_pr`='4545.4545454545',`collection`='197.00',`coll_date`='2016-07-25' where `accountno`='BL1767' and `cal_date`='2016-07-07'");

mysql_query("update  `businessloan` set `odintrest`='764',`odprincipal`='4545.4545454545',`amount_topay`='50000',`last_refund_date`='2016-07-25',`last_refund_amt`='197.00', `od_cal_date`='2016-08-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `interest`='197',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-07-25' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='764',`b_cur_int`='764', `b_od_pri`='3782',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3782', `outstanding`='46218',`a_od_int`='0',`a_tot_od`='5308.9045454545',`a_od_pr`='5308.9045454545',`collection`='5310.00',`coll_date`='2016-08-09' where `accountno`='BL1767' and `cal_date`='2016-08-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5308.9045454545',`amount_topay`='46218',`last_refund_date`='2016-08-09',`last_refund_amt`='5310.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3782',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1528',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-08-09' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='5241',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5241', `outstanding`='40977',`a_od_int`='0',`a_tot_od`='67.9',`a_od_pr`='67.9',`collection`='5241.00',`coll_date`='2016-09-07' where `accountno`='BL1767' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='67.9',`amount_topay`='40977',`last_refund_date`='2016-09-07',`last_refund_amt`='5241.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='5241',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-09-07' and `amount`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='606',`b_cur_int`='626', `b_od_pri`='3919',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3919', `outstanding`='37058',`a_od_int`='0',`a_tot_od`='5239.8090909091',`a_od_pr`='5239.8090909091',`collection`='5151.00',`coll_date`='2016-10-19' where `accountno`='BL1767' and `cal_date`='2016-10-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5239.8090909091',`amount_topay`='37058',`last_refund_date`='2016-10-19',`last_refund_amt`='5151.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='BL1767'");

mysql_query("UPDATE   `transaction` set `amount`='3919',`details`='businessloan Refund' where `accountno`='BL1767' and `date`='2016-10-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1232',`details`='businessloan Interest' where `accountno`='BL1767' and `date`='2016-10-19' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='95',`b_cur_int`='92', `b_od_pri`='453',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='453', `outstanding`='5547',`a_od_int`='0',`a_tot_od`='637.90454545455',`a_od_pr`='637.90454545455',`collection`='640.00',`coll_date`='2016-10-28' where `accountno`='GRL1832' and `cal_date`='2016-10-11'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='637.90454545455',`amount_topay`='5547',`last_refund_date`='2016-10-28',`last_refund_amt`='640.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='GRL1832'");

mysql_query("UPDATE   `transaction` set `amount`='453',`details`='grouploan Refund' where `accountno`='GRL1832' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='187',`details`='grouploan Interest' where `accountno`='GRL1832' and `date`='2016-10-28' and `interest`>0 ");

mysql_query("INSERT  INTO `corporate1`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '1470025448', 'GL1817', '2016-08-14', '0000-00-00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50000.00', '321', '0.00', '321', '0.00', '2016-07-31 11:54:08') ");

mysql_query("update  `transaction_ledger` set `b_od_int`='750.00',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='1075',`a_tot_od`='1075',`a_od_pr`='0',`collection`='750.00',`coll_date`='2016-09-29' where `accountno`='GL1817' and `cal_date`='2016-09-14'");

mysql_query("update  `goldloan` set `odintrest`='1075',`odprincipal`='0',`amount_topay`='50000',`last_refund_date`='2016-09-29',`last_refund_amt`='750.00', `od_cal_date`='2016-10-14',`loancomplited`='0' where `loan_accno`='GL1817'");

mysql_query("UPDATE   `transaction` set `interest`='750',`details`='goldloan Interest' where `accountno`='GL1817' and `date`='2016-09-29' and `interest`>0 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `b_od_int` = '700', `b_cur_int` = '0.00' WHERE `transaction_ledger`.`id` = 12766 ");

mysql_query("UPDATE   `corporate1`.`goldloan` SET `amount_topay` = '0.00', `odintrest` = '0.00', `last_refund_amt` = '50700', `od_cal_date` = '2016-11-14', `last_refund_date` = '2016-10-15' WHERE `goldloan`.`id` = 1603 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `b_od_pri` = '5082.00', `b_cur_int` = '0.00', `tot_pr` = '5082.00', `outstanding` = '57795', `a_od_pr` = '147.95', `a_tot_od` = '147.95' WHERE `transaction_ledger`.`id` = 14466 ");

mysql_query("UPDATE   `corporate1`.`enterpriseloan` SET `amount_topay` = '57795.00', `last_refund_date` = '2016-10-31' WHERE `enterpriseloan`.`id` = 1538 ");

mysql_query("UPDATE   `corporate1`.`transaction` SET `amount` = '5082.00' WHERE `transaction`.`id` = 31170 ");

mysql_query("DELETE  FROM `corporate1`.`transaction` WHERE `transaction`.`id` = 31169 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `a_od_int` = '0', `a_tot_od` = '0' WHERE `transaction_ledger`.`id` = 11575 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `a_od_int` = '397.00', `a_tot_od` = '397.00' WHERE `transaction_ledger`.`id` = 11577 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='397.00',`b_cur_int`='0', `b_od_pri`='',`b_cur_pri`='',`a_pre_pri`='9000',`tot_pr`='9000', `outstanding`='17000',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='9397.00',`coll_date`='2016-09-07' where `accountno`='GL1744' and `cal_date`='2016-09-16'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='17000',`last_refund_date`='2016-09-07',`last_refund_amt`='9397.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='GL1744'");


mysql_query("UPDATE   `transaction` set `amount`='9000',`details`='goldloan Refund' where `accountno`='GL1744' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='397',`details`='goldloan Interest' where `accountno`='GL1744' and `date`='2016-09-07' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `outstanding`='80000.00', `a_od_int`='1249',`a_tot_od`='4727.26',`a_od_pr`='3478.26' where `accountno`='EL1713' and `cal_date`='2016-07-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='1249',`odprincipal`='3478.26',`amount_topay`='80000.00',`od_cal_date`='2016-07-13' where `loan_accno`='EL1713'");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='1212', `b_od_pri`='3385',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3385', `outstanding`='74255',`a_od_int`='0',`a_tot_od`='4689.5208695652',`a_od_pr`='4689.5208695652',`collection`='4597.00',`coll_date`='2016-09-30' where `accountno`='EL1713' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='4689.5208695652',`amount_topay`='74255',`last_refund_date`='2016-09-30',`last_refund_amt`='4597.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1713'");

mysql_query("UPDATE   `transaction` set `amount`='3385',`details`='enterpriseloan Refund' where `accountno`='EL1713' and `date`='2016-09-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1212',`details`='enterpriseloan Interest' where `accountno`='EL1713' and `date`='2016-09-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='100000.00', `a_od_int`='4795',`a_tot_od`='32067.729090909',`a_od_pr`='27272.729090909' where `accountno`='EL1712' and `cal_date`='2016-09-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='4795',`odprincipal`='27272.729090909',`amount_topay`='100000.00',`od_cal_date`='2016-09-13' where `loan_accno`='EL1712'");

mysql_query("update  `transaction_ledger` set `b_od_int`='4795.00',`b_cur_int`='1562', `b_od_pri`='643',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='643', `outstanding`='99357',`a_od_int`='0',`a_tot_od`='35720.639090909',`a_od_pr`='35720.639090909',`collection`='7000.00',`coll_date`='2016-10-03' where `accountno`='EL1712' and `cal_date`='2016-10-13'");

mysql_query("update  `enterpriseloan` set `odintrest`='0',`odprincipal`='35720.639090909',`amount_topay`='99357',`last_refund_date`='2016-10-03',`last_refund_amt`='7000.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='EL1712'");

mysql_query("INSERT  into `transaction` set `transactionid`='1480584123',`amount`='643',`details`='enterpriseloan Refund',`accountno`='EL1712',`date`='2016-10-03' ");


mysql_query("UPDATE   `transaction` set `interest`='6357',`details`='enterpriseloan Interest' where `accountno`='EL1712' and `date`='2016-10-03' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='146.00',`b_cur_int`='74', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='7000',`a_od_int`='33',`a_tot_od`='33',`a_od_pr`='0',`collection`='220.00',`coll_date`='2016-09-14' where `accountno`='DL1707' and `cal_date`='2016-09-20'");

mysql_query("update  `demand_loan` set `odintrest`='33',`odprincipal`='0',`amount_topay`='7000',`last_refund_date`='2016-09-14',`last_refund_amt`='220.00', `od_cal_date`='2016-09-20',`loancomplited`='0' where `loan_accno`='DL1707'");

mysql_query("UPDATE   `transaction` set `interest`='220',`details`='demand_loan Interest' where `accountno`='DL1707' and `date`='2016-09-14' and `interest`>0 ");

mysql_query("DELETE  FROM `corporate1`.`transaction` WHERE `transaction`.`id` = 28372 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='178',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='459',`a_tot_od`='3186.2727272727',`a_od_pr`='2727.2727272727',`collection`='178.00',`coll_date`='2016-05-13' where `accountno`='BL1692' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='459',`odprincipal`='2727.2727272727',`amount_topay`='30000',`last_refund_date`='2016-05-13',`last_refund_amt`='178.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `interest`='178',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-05-13' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='459.00',`b_cur_int`='0', `b_od_pri`='2727.27',`b_cur_pri`='0',`a_pre_pri`='3.73',`tot_pr`='2731', `outstanding`='27269',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='3190.00',`coll_date`='2016-06-11' where `accountno`='BL1692' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='27269',`last_refund_date`='2016-06-11',`last_refund_amt`='3190.00', `od_cal_date`='2016-06-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2731',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-06-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='459',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-06-11' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='403',`b_cur_int`='417', `b_od_pri`='2311',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2311', `outstanding`='24958',`a_od_int`='0',`a_tot_od`='3143.5454545455',`a_od_pr`='3143.5454545455',`collection`='3131.00',`coll_date`='2016-07-12' where `accountno`='BL1692' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3143.5454545455',`amount_topay`='24958',`last_refund_date`='2016-07-12',`last_refund_amt`='3131.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2311',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='820',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-07-12' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='3102',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3102', `outstanding`='21856',`a_od_int`='0',`a_tot_od`='41.55',`a_od_pr`='41.55',`collection`='3102.00',`coll_date`='2016-08-11' where `accountno`='BL1692' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='41.55',`amount_topay`='21856',`last_refund_date`='2016-08-11',`last_refund_amt`='3102.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='3102',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-08-11' and `amount`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='334',`b_cur_int`='323', `b_od_pri`='2404',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2404', `outstanding`='19452',`a_od_int`='0',`a_tot_od`='3092.0954545455',`a_od_pr`='3092.0954545455',`collection`='3061.00',`coll_date`='2016-09-14' where `accountno`='BL1692' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3092.0954545455',`amount_topay`='19452',`last_refund_date`='2016-09-14',`last_refund_amt`='3061.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2404',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-09-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='657',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-09-14' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='297', `b_od_pri`='2673',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2673', `outstanding`='16779',`a_od_int`='0',`a_tot_od`='3146.3727272727',`a_od_pr`='3146.3727272727',`collection`='2970.00',`coll_date`='2016-10-26' where `accountno`='BL1692' and `cal_date`='2016-10-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3146.3727272727',`amount_topay`='16779',`last_refund_date`='2016-10-26',`last_refund_amt`='2970.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='BL1692'");

mysql_query("UPDATE   `transaction` set `amount`='2673',`details`='businessloan Refund' where `accountno`='BL1692' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='297',`details`='businessloan Interest' where `accountno`='BL1692' and `date`='2016-10-26' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='616',`b_cur_int`='4', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='50000',`a_od_int`='760',`a_tot_od`='2933.9130434783',`a_od_pr`='2173.9130434783',`collection`='620.00',`coll_date`='2016-05-18' where `accountno`='BL1679' and `cal_date`='2016-05-16'");

mysql_query("update  `businessloan` set `odintrest`='760',`odprincipal`='2173.9130434783',`amount_topay`='50000',`last_refund_date`='2016-05-18',`last_refund_amt`='620.00', `od_cal_date`='2016-06-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `interest`='620',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-05-18' and `interest`>0 ");



mysql_query("update  `transaction_ledger` set `b_od_int`='760',`b_cur_int`='740', `b_od_pri`='1438',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1438', `outstanding`='48562',`a_od_int`='0',`a_tot_od`='2909.8230434783',`a_od_pr`='2909.8230434783',`collection`='2938.00',`coll_date`='2016-06-27' where `accountno`='BL1679' and `cal_date`='2016-06-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2909.8230434783',`amount_topay`='48562',`last_refund_date`='2016-06-27',`last_refund_amt`='2938.00', `od_cal_date`='2016-07-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='1438',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1500',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='742', `b_od_pri`='2140',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2140', `outstanding`='46422',`a_od_int`='0',`a_tot_od`='2943.7330434783',`a_od_pr`='2943.7330434783',`collection`='2882.00',`coll_date`='2016-07-22' where `accountno`='BL1679' and `cal_date`='2016-07-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2943.7330434783',`amount_topay`='46422',`last_refund_date`='2016-07-22',`last_refund_amt`='2882.00', `od_cal_date`='2016-08-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2140',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-07-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='742',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-07-22' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='710', `b_od_pri`='2162',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2162', `outstanding`='44260',`a_od_int`='0',`a_tot_od`='2955.6430434783',`a_od_pr`='2955.6430434783',`collection`='2872.00',`coll_date`='2016-08-30' where `accountno`='BL1679' and `cal_date`='2016-08-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2955.6430434783',`amount_topay`='44260',`last_refund_date`='2016-08-30',`last_refund_amt`='2872.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2162',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='710',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-08-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='2839',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2839', `outstanding`='41421',`a_od_int`='0',`a_tot_od`='116.64',`a_od_pr`='116.64',`collection`='2839.00',`coll_date`='2016-09-16' where `accountno`='BL1679' and `cal_date`='2016-09-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='116.64',`amount_topay`='41421',`last_refund_date`='2016-09-16',`last_refund_amt`='2839.00', `od_cal_date`='2016-09-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='2839',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-09-16' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='613',`b_cur_int`='633', `b_od_pri`='1539',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1539', `outstanding`='39882',`a_od_int`='0',`a_tot_od`='2925.4660869565',`a_od_pr`='2925.4660869565',`collection`='2785.00',`coll_date`='2016-10-18' where `accountno`='BL1679' and `cal_date`='2016-10-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2925.4660869565',`amount_topay`='39882',`last_refund_date`='2016-10-18',`last_refund_amt`='2785.00', `od_cal_date`='2016-11-16',`loancomplited`='0' where `loan_accno`='BL1679'");

mysql_query("UPDATE   `transaction` set `amount`='1539',`details`='businessloan Refund' where `accountno`='BL1679' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1246',`details`='businessloan Interest' where `accountno`='BL1679' and `date`='2016-10-18' and `interest`>0 ");

mysql_query("UPDATE    `corporate1`.`transaction_ledger` SET  `cal_date` =  '2016-09-21' WHERE  `transaction_ledger`.`id` =13735 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='83', `b_od_pri`='637',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='637', `outstanding`='3967',`a_od_int`='0',`a_tot_od`='784.72363636364',`a_od_pr`='784.72363636364',`collection`='720.00',`coll_date`='2016-09-13' where `accountno`='GRL1648' and `cal_date`='2016-09-11'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='784.72363636364',`amount_topay`='3967',`last_refund_date`='2016-09-13',`last_refund_amt`='720.00', `od_cal_date`='2016-10-11',`loancomplited`='0' where `loan_accno`='GRL1648'");

mysql_query("UPDATE   `transaction` set `amount`='637',`details`='grouploan Refund' where `accountno`='GRL1648' and `date`='2016-09-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='83',`details`='grouploan Interest' where `accountno`='GRL1648' and `date`='2016-09-13' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='74', `b_od_pri`='626',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='626', `outstanding`='3341',`a_od_int`='0',`a_tot_od`='795.08363636364',`a_od_pr`='795.08363636364',`collection`='700.00',`coll_date`='2016-10-26' where `accountno`='GRL1648' and `cal_date`='2016-10-11'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='795.08363636364',`amount_topay`='3341',`last_refund_date`='2016-10-26',`last_refund_amt`='700.00', `od_cal_date`='2016-11-11',`loancomplited`='0' where `loan_accno`='GRL1648'");

mysql_query("UPDATE   `transaction` set `amount`='626',`details`='grouploan Refund' where `accountno`='GRL1648' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='74',`details`='grouploan Interest' where `accountno`='GRL1648' and `date`='2016-10-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='452',`b_cur_int`='0', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='30000',`a_od_int`='542',`a_tot_od`='3269.2727272727',`a_od_pr`='2727.2727272727',`collection`='452.00',`coll_date`='2016-04-09' where `accountno`='BL1642' and `cal_date`='2016-04-08'");

mysql_query("update  `businessloan` set `odintrest`='542',`odprincipal`='2727.2727272727',`amount_topay`='30000',`last_refund_date`='2016-04-09',`last_refund_amt`='452.00', `od_cal_date`='2016-05-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `interest`='452',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-04-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='542',`b_cur_int`='561', `b_od_pri`='2167',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2167', `outstanding`='27833',`a_od_int`='0',`a_tot_od`='3287.5427272727',`a_od_pr`='3287.5427272727',`collection`='3270.00',`coll_date`='2016-05-09' where `accountno`='BL1642' and `cal_date`='2016-05-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3287.5427272727',`amount_topay`='27833',`last_refund_date`='2016-05-09',`last_refund_amt`='3270.00', `od_cal_date`='2016-06-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2167',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-05-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1103',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-05-09' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='503', `b_od_pri`='2734',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2734', `outstanding`='25099',`a_od_int`='0',`a_tot_od`='3280.8127272727',`a_od_pr`='3280.8127272727',`collection`='3237.00',`coll_date`='2016-06-27' where `accountno`='BL1642' and `cal_date`='2016-06-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3280.8127272727',`amount_topay`='25099',`last_refund_date`='2016-06-27',`last_refund_amt`='3237.00', `od_cal_date`='2016-07-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2734',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-06-27' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='503',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-06-27' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='469', `b_od_pri`='2702',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2702', `outstanding`='22397',`a_od_int`='0',`a_tot_od`='3306.0827272727',`a_od_pr`='3306.0827272727',`collection`='3171.00',`coll_date`='2016-07-12' where `accountno`='BL1642' and `cal_date`='2016-07-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3306.0827272727',`amount_topay`='22397',`last_refund_date`='2016-07-12',`last_refund_amt`='3171.00', `od_cal_date`='2016-08-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2702',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-07-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='469',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-07-12' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='418', `b_od_pri`='2722',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2722', `outstanding`='19675',`a_od_int`='0',`a_tot_od`='3311.3527272727',`a_od_pr`='3311.3527272727',`collection`='3140.00',`coll_date`='2016-08-09' where `accountno`='BL1642' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3311.3527272727',`amount_topay`='19675',`last_refund_date`='2016-08-09',`last_refund_amt`='3140.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2722',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-08-09' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='418',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-08-09' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='3084',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='3084', `outstanding`='16591',`a_od_int`='0',`a_tot_od`='227.35',`a_od_pr`='227.35',`collection`='3084.00',`coll_date`='2016-09-07' where `accountno`='BL1642' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='227.35',`amount_topay`='16591',`last_refund_date`='2016-09-07',`last_refund_amt`='3084.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='3084',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-09-07' and `amount`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='300',`b_cur_int`='310', `b_od_pri`='2413',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2413', `outstanding`='14178',`a_od_int`='0',`a_tot_od`='3268.8954545455',`a_od_pr`='3268.8954545455',`collection`='3023.00',`coll_date`='2016-10-18' where `accountno`='BL1642' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3268.8954545455',`amount_topay`='14178',`last_refund_date`='2016-10-18',`last_refund_amt`='3023.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1642'");

mysql_query("UPDATE   `transaction` set `amount`='2413',`details`='businessloan Refund' where `accountno`='BL1642' and `date`='2016-10-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='610',`details`='businessloan Interest' where `accountno`='BL1642' and `date`='2016-10-18' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='102', `b_od_pri`='909',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='909', `outstanding`='4745',`a_od_int`='0',`a_tot_od`='1108.6309090909',`a_od_pr`='1108.6309090909',`collection`='1011.00',`coll_date`='2016-09-30' where `accountno`='GRL1622' and `cal_date`='2016-09-21'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1108.6309090909',`amount_topay`='4745',`last_refund_date`='2016-09-30',`last_refund_amt`='1011.00', `od_cal_date`='2016-10-21',`loancomplited`='0' where `loan_accno`='GRL1622'");

mysql_query("UPDATE   `transaction` set `amount`='909',`details`='grouploan Refund' where `accountno`='GRL1622' and `date`='2016-09-30' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='102',`details`='grouploan Interest' where `accountno`='GRL1622' and `date`='2016-09-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='89', `b_od_pri`='902',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='902', `outstanding`='3843',`a_od_int`='0',`a_tot_od`='1115.7209090909',`a_od_pr`='1115.7209090909',`collection`='991.00',`coll_date`='2016-10-28' where `accountno`='GRL1622' and `cal_date`='2016-10-21'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1115.7209090909',`amount_topay`='3843',`last_refund_date`='2016-10-28',`last_refund_amt`='991.00', `od_cal_date`='2016-11-21',`loancomplited`='0' where `loan_accno`='GRL1622'");

mysql_query("UPDATE   `transaction` set `amount`='902',`details`='grouploan Refund' where `accountno`='GRL1622' and `date`='2016-10-28' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='89',`details`='grouploan Interest' where `accountno`='GRL1622' and `date`='2016-10-28' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='39', `b_od_pri`='341',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='341', `outstanding`='1802',`a_od_int`='0',`a_tot_od`='659.46636363636',`a_od_pr`='659.46636363636',`collection`='380.00',`coll_date`='2016-09-30' where `accountno`='GRL1608' and `cal_date`='2016-09-10'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='659.46636363636',`amount_topay`='1802',`last_refund_date`='2016-09-30',`last_refund_amt`='380.00', `od_cal_date`='2016-10-10',`loancomplited`='0' where `loan_accno`='GRL1608'");

mysql_query("UPDATE   `transaction` set `amount`='341',`details`='grouploan Refund' where `accountno`='GRL1608' and `date`='2016-09-30' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='39',`details`='grouploan Interest' where `accountno`='GRL1608' and `date`='2016-09-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='85', `b_od_pri`='915',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='915', `outstanding`='3802',`a_od_int`='0',`a_tot_od`='1074.6309090909',`a_od_pr`='1074.6309090909',`collection`='1000.00',`coll_date`='2016-09-26' where `accountno`='GRL1583' and `cal_date`='2016-09-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1074.6309090909',`amount_topay`='3802',`last_refund_date`='2016-09-26',`last_refund_amt`='1000.00', `od_cal_date`='2016-10-07',`loancomplited`='0' where `loan_accno`='GRL1583'");

mysql_query("UPDATE   `transaction` set `amount`='915',`details`='grouploan Refund' where `accountno`='GRL1583' and `date`='2016-09-26' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='85',`details`='grouploan Interest' where `accountno`='GRL1583' and `date`='2016-09-26' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='3407.00', `a_od_int`='0',`a_tot_od`='905.32',`a_od_pr`='905.32' where `accountno`='GRL1433' and `cal_date`='2016-07-20'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='905.32',`amount_topay`='3407.00',`od_cal_date`='2016-07-20' where `loan_accno`='GRL1433'");


mysql_query("update  `transaction_ledger` set `b_od_int`='69',`b_cur_int`='69', `b_od_pri`='1738.6533333333',`b_cur_pri`='23.346666666667',`a_pre_pri`='0',`tot_pr`='1762', `outstanding`='1645',`a_od_int`='0',`a_tot_od`='809.98666666667',`a_od_pr`='809.98666666667',`collection`='1900.00',`coll_date`='2016-08-31' where `accountno`='GRL1433' and `cal_date`='2016-08-20'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='809.98666666667',`amount_topay`='1645',`last_refund_date`='2016-08-31',`last_refund_amt`='1900.00', `od_cal_date`='2016-09-20',`loancomplited`='0' where `loan_accno`='GRL1433'");

mysql_query("UPDATE   `transaction` set `amount`='1762',`details`='grouploan Refund' where `accountno`='GRL1433' and `date`='2016-08-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='138',`details`='grouploan Interest' where `accountno`='GRL1433' and `date`='2016-08-31' and `interest`>0 ");



mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='126', `b_od_pri`='554',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='554', `outstanding`='5840',`a_od_int`='0',`a_tot_od`='1836.6666666667',`a_od_pr`='1836.6666666667',`collection`='680.00',`coll_date`='2016-06-30' where `accountno`='GRL1385' and `cal_date`='2016-06-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1836.6666666667',`amount_topay`='5840',`last_refund_date`='2016-06-30',`last_refund_amt`='680.00', `od_cal_date`='2016-07-07',`loancomplited`='0' where `loan_accno`='GRL1385'");

mysql_query("UPDATE   `transaction` set `amount`='554',`details`='grouploan Refund' where `accountno`='GRL1385' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='126',`details`='grouploan Interest' where `accountno`='GRL1385' and `date`='2016-06-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='5840.00', `a_od_int`='0',`a_tot_od`='1836.67',`a_od_pr`='1836.67' where `accountno`='GRL1385' and `cal_date`='2016-07-07'");


mysql_query("update  `transaction_ledger` set `b_od_int`='119',`b_cur_int`='119', `b_od_pri`='1122',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1122', `outstanding`='4718',`a_od_int`='0',`a_tot_od`='2048.0033333333',`a_od_pr`='2048.0033333333',`collection`='1360.00',`coll_date`='2016-08-18' where `accountno`='GRL1385' and `cal_date`='2016-08-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2048.0033333333',`amount_topay`='4718',`last_refund_date`='2016-08-18',`last_refund_amt`='1360.00', `od_cal_date`='2016-09-07',`loancomplited`='0' where `loan_accno`='GRL1385'");

mysql_query("UPDATE   `transaction` set `amount`='1122',`details`='grouploan Refund' where `accountno`='GRL1385' and `date`='2016-08-18' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='238',`details`='grouploan Interest' where `accountno`='GRL1385' and `date`='2016-08-18' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='93', `b_od_pri`='587',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='587', `outstanding`='4131',`a_od_int`='0',`a_tot_od`='2127.6666666667',`a_od_pr`='2127.6666666667',`collection`='680.00',`coll_date`='2016-09-28' where `accountno`='GRL1385' and `cal_date`='2016-09-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2127.6666666667',`amount_topay`='4131',`last_refund_date`='2016-09-28',`last_refund_amt`='680.00', `od_cal_date`='2016-10-07',`loancomplited`='0' where `loan_accno`='GRL1385'");

mysql_query("UPDATE   `transaction` set `amount`='587',`details`='grouploan Refund' where `accountno`='GRL1385' and `date`='2016-09-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='93',`details`='grouploan Interest' where `accountno`='GRL1385' and `date`='2016-09-28' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='84', `b_od_pri`='596',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='596', `outstanding`='3535',`a_od_int`='0',`a_tot_od`='2198.3366666667',`a_od_pr`='2198.3366666667',`collection`='680.00',`coll_date`='2016-10-08' where `accountno`='GRL1385' and `cal_date`='2016-10-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2198.3366666667',`amount_topay`='3535',`last_refund_date`='2016-10-08',`last_refund_amt`='680.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='GRL1385'");

mysql_query("UPDATE   `transaction` set `amount`='596',`details`='grouploan Refund' where `accountno`='GRL1385' and `date`='2016-10-08' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='84',`details`='grouploan Interest' where `accountno`='GRL1385' and `date`='2016-10-08' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='6912.00', `a_od_int`='141',`a_tot_od`='2056.5555555556',`a_od_pr`='1915.5555555556' where `accountno`='GRL1310' and `cal_date`='2016-04-21'");

mysql_query("update  `grouploan` set `odintrest`='141',`odprincipal`='1915.5555555556',`amount_topay`='6912.00',`od_cal_date`='2016-04-21' where `loan_accno`='GRL1310'");


mysql_query("update  `transaction_ledger` set `b_od_int`='277',`b_cur_int`='141', `b_od_pri`='262',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='262', `outstanding`='6650',`a_od_int`='0',`a_tot_od`='2764.6711111111',`a_od_pr`='2764.6711111111',`collection`='680.00',`coll_date`='2016-05-31' where `accountno`='GRL1310' and `cal_date`='2016-05-21'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2764.6711111111',`amount_topay`='6650',`last_refund_date`='2016-05-31',`last_refund_amt`='680.00', `od_cal_date`='2016-06-21',`loancomplited`='0' where `loan_accno`='GRL1310'");

mysql_query("UPDATE   `transaction` set `amount`='262',`details`='grouploan Refund' where `accountno`='GRL1310' and `date`='2016-05-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='418',`details`='grouploan Interest' where `accountno`='GRL1310' and `date`='2016-05-31' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='6237.00', `a_od_int`='0',`a_tot_od`='2907.23',`a_od_pr`='2907.23' where `accountno`='GRL1310' and `cal_date`='2016-06-21'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2907.23',`amount_topay`='6237.00',`od_cal_date`='2016-06-21' where `loan_accno`='GRL1310'");

mysql_query("update  `transaction_ledger` set `b_od_int`='123',`b_cur_int`='127', `b_od_pri`='1250',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1250', `outstanding`='4987',`a_od_int`='0',`a_tot_od`='2768.3411111111',`a_od_pr`='2768.3411111111',`collection`='1500.00',`coll_date`='2016-07-30' where `accountno`='GRL1310' and `cal_date`='2016-07-21'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2768.3411111111',`amount_topay`='4987',`last_refund_date`='2016-07-30',`last_refund_amt`='1500.00', `od_cal_date`='2016-08-21',`loancomplited`='0' where `loan_accno`='GRL1310'");

mysql_query("UPDATE   `transaction` set `amount`='1250',`details`='grouploan Refund' where `accountno`='GRL1310' and `date`='2016-07-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='250',`details`='grouploan Interest' where `accountno`='GRL1310' and `date`='2016-07-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='4987.00', `a_od_int`='0',`a_tot_od`='2768.34',`a_od_pr`='2768.34' where `accountno`='GRL1310' and `cal_date`='2016-08-21'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='2768.34',`amount_topay`='4987.00',`od_cal_date`='2016-08-21' where `loan_accno`='GRL1310'");

mysql_query("update  `transaction_ledger` set `outstanding`='4987.00', `a_od_int`='102',`a_tot_od`='3425.8955555556',`a_od_pr`='3323.8955555556' where `accountno`='GRL1310' and `cal_date`='2016-09-21'");

mysql_query("update  `grouploan` set `odintrest`='102',`odprincipal`='3323.8955555556',`amount_topay`='4987.00',`od_cal_date`='2016-09-21' where `loan_accno`='GRL1310'");

mysql_query("update  `transaction_ledger` set `b_od_int`='68',`b_cur_int`='66', `b_od_pri`='546',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='546', `outstanding`='2782',`a_od_int`='0',`a_tot_od`='1118.9111111111',`a_od_pr`='1118.9111111111',`collection`='680.00',`coll_date`='2016-09-27' where `accountno`='GRL1309' and `cal_date`='2016-09-20'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='1118.9111111111',`amount_topay`='2782',`last_refund_date`='2016-09-27',`last_refund_amt`='680.00', `od_cal_date`='2016-10-20',`loancomplited`='0' where `loan_accno`='GRL1309'");

mysql_query("UPDATE   `transaction` set `amount`='546',`details`='grouploan Refund' where `accountno`='GRL1309' and `date`='2016-09-27' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='134',`details`='grouploan Interest' where `accountno`='GRL1309' and `date`='2016-09-27' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='77',`b_cur_int`='75', `b_od_pri`='549',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='549', `outstanding`='3253',`a_od_int`='0',`a_tot_od`='763',`a_od_pr`='763',`collection`='701.00',`coll_date`='2016-09-20' where `accountno`='GRL1074' and `cal_date`='2016-09-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='763',`amount_topay`='3253',`last_refund_date`='2016-09-20',`last_refund_amt`='701.00', `od_cal_date`='2016-10-07',`loancomplited`='0' where `loan_accno`='GRL1074'");

mysql_query("UPDATE   `transaction` set `amount`='549',`details`='grouploan Refund' where `accountno`='GRL1074' and `date`='2016-09-20' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='152',`details`='grouploan Interest' where `accountno`='GRL1074' and `date`='2016-09-20' and `interest`>0 ");



mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='66', `b_od_pri`='620',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='620', `outstanding`='2633',`a_od_int`='0',`a_tot_od`='768',`a_od_pr`='768',`collection`='686.00',`coll_date`='2016-10-08' where `accountno`='GRL1074' and `cal_date`='2016-10-07'");

mysql_query("update  `grouploan` set `odintrest`='0',`odprincipal`='768',`amount_topay`='2633',`last_refund_date`='2016-10-08',`last_refund_amt`='686.00', `od_cal_date`='2016-11-07',`loancomplited`='0' where `loan_accno`='GRL1074'");

mysql_query("UPDATE   `transaction` set `amount`='620',`details`='grouploan Refund' where `accountno`='GRL1074' and `date`='2016-10-08' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='66',`details`='grouploan Interest' where `accountno`='GRL1074' and `date`='2016-10-08' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `outstanding`='1735.00', `a_od_int`='35',`a_tot_od`='938.00666666667',`a_od_pr`='903.00666666667' where `accountno`='AL1470' and `cal_date`='2016-09-08'");

mysql_query("update  `agricultureloan` set `odintrest`='35',`odprincipal`='903.00666666667',`amount_topay`='1735.00',`od_cal_date`='2016-09-08' where `loan_accno`='AL1470'");


mysql_query("update  `transaction_ledger` set `b_od_int`='69',`b_cur_int`='35', `b_od_pri`='1696',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1696', `outstanding`='39',`a_od_int`='0',`a_tot_od`='39',`a_od_pr`='39',`collection`='1800.00',`coll_date`='2016-10-31' where `accountno`='AL1470' and `cal_date`='2016-10-08'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='39',`amount_topay`='39',`last_refund_date`='2016-10-31',`last_refund_amt`='1800.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='AL1470'");

mysql_query("UPDATE   `transaction` set `amount`='1696',`details`='agricultureloan Refund' where `accountno`='AL1470' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='104',`details`='agricultureloan Interest' where `accountno`='AL1470' and `date`='2016-10-31' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='825',`b_cur_int`='278', `b_od_pri`='287',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='287', `outstanding`='13363',`a_od_int`='0',`a_tot_od`='5585.7722222222',`a_od_pr`='5585.7722222222',`collection`='1390.00',`coll_date`='2016-08-19' where `accountno`='AL1466' and `cal_date`='2016-08-10'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='5585.7722222222',`amount_topay`='13363',`last_refund_date`='2016-08-19',`last_refund_amt`='1390.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='AL1466'");

mysql_query("UPDATE   `transaction` set `amount`='287',`details`='agricultureloan Refund' where `accountno`='AL1466' and `date`='2016-08-19' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='1103',`details`='agricultureloan Interest' where `accountno`='AL1466' and `date`='2016-08-19' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='13363.00', `a_od_int`='0',`a_tot_od`='5585.77',`a_od_pr`='5585.77' where `accountno`='AL1466' and `cal_date`='2016-09-10'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='5585.77',`amount_topay`='13363.00',`od_cal_date`='2016-09-10' where `loan_accno`='AL1466'");


mysql_query("update  `transaction_ledger` set `b_od_int`='134',`b_cur_int`='130', `b_od_pri`='722',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='722', `outstanding`='5844',`a_od_int`='0',`a_tot_od`='944.66666666667',`a_od_pr`='944.66666666667',`collection`='986.00',`coll_date`='2016-09-14' where `accountno`='AL1454' and `cal_date`='2016-09-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='944.66666666667',`amount_topay`='5844',`last_refund_date`='2016-09-14',`last_refund_amt`='986.00', `od_cal_date`='2016-10-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='722',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-09-14' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='264',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-09-14' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='119', `b_od_pri`='846',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='846', `outstanding`='4998',`a_od_int`='0',`a_tot_od`='932.00333333333',`a_od_pr`='932.00333333333',`collection`='965.00',`coll_date`='2016-10-14' where `accountno`='AL1454' and `cal_date`='2016-10-13'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='932.00333333333',`amount_topay`='4998',`last_refund_date`='2016-10-14',`last_refund_amt`='965.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='AL1454'");

mysql_query("UPDATE   `transaction` set `amount`='846',`details`='agricultureloan Refund' where `accountno`='AL1454' and `date`='2016-10-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='119',`details`='agricultureloan Interest' where `accountno`='AL1454' and `date`='2016-10-14' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='186.00',`b_cur_int`='186', `b_od_pri`='918',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='918', `outstanding`='8223',`a_od_int`='0',`a_tot_od`='2666.6611111111',`a_od_pr`='2666.6611111111',`collection`='1290.00',`coll_date`='2016-09-10' where `accountno`='AL1336' and `cal_date`='2016-09-10'");

mysql_query("update  `agricultureloan` set `odintrest`='0',`odprincipal`='2666.6611111111',`amount_topay`='8223',`last_refund_date`='2016-09-10',`last_refund_amt`='1290.00', `od_cal_date`='2016-09-10',`loancomplited`='0' where `loan_accno`='AL1336'");

mysql_query("UPDATE   `transaction` set `amount`='918',`details`='agricultureloan Refund' where `accountno`='AL1336' and `date`='2016-09-10' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='372',`details`='agricultureloan Interest' where `accountno`='AL1336' and `date`='2016-09-10' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='62', `b_od_pri`='544',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='544', `outstanding`='2862',`a_od_int`='0',`a_tot_od`='680.16454545455',`a_od_pr`='680.16454545455',`collection`='606.00',`coll_date`='2016-09-26' where `accountno`='BL1628' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='680.16454545455',`amount_topay`='2862',`last_refund_date`='2016-09-26',`last_refund_amt`='606.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='544',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='62',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='53', `b_od_pri`='680.16',`b_cur_pri`='545.45454545455',`a_pre_pri`='431.38545454545',`tot_pr`='1657', `outstanding`='1205',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`collection`='1710.00',`coll_date`='2016-10-28' where `accountno`='BL1628' and `cal_date`='2016-10-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='0',`amount_topay`='1205',`last_refund_date`='2016-10-28',`last_refund_amt`='1710.00', `od_cal_date`='2016-11-08',`loancomplited`='0' where `loan_accno`='BL1628'");

mysql_query("UPDATE   `transaction` set `amount`='1657',`details`='businessloan Refund' where `accountno`='BL1628' and `date`='2016-10-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='53',`details`='businessloan Interest' where `accountno`='BL1628' and `date`='2016-10-28' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='42', `b_od_pri`='455',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='455', `outstanding`='1893',`a_od_int`='0',`a_tot_od`='530.82545454545',`a_od_pr`='530.82545454545',`collection`='497.00',`coll_date`='2016-09-13' where `accountno`='BL1595' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='530.82545454545',`amount_topay`='1893',`last_refund_date`='2016-09-13',`last_refund_amt`='497.00', `od_cal_date`='2016-10-12',`loancomplited`='0' where `loan_accno`='BL1595'");

mysql_query("UPDATE   `transaction` set `amount`='455',`details`='businessloan Refund' where `accountno`='BL1595' and `date`='2016-09-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='42',`details`='businessloan Interest' where `accountno`='BL1595' and `date`='2016-09-13' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='5500',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5500', `outstanding`='41794',`a_od_int`='0',`a_tot_od`='5429.91',`a_od_pr`='5429.91',`collection`='5500.00',`coll_date`='2016-05-14' where `accountno`='BL1594' and `cal_date`='2016-05-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5429.91',`amount_topay`='41794',`last_refund_date`='2016-05-14',`last_refund_amt`='5500.00', `od_cal_date`='2016-05-16',`loancomplited`='0' where `loan_accno`='BL1594'");

mysql_query("UPDATE   `transaction` set `amount`='5500',`details`='businessloan Refund' where `accountno`='BL1594' and `date`='2016-05-14' and `amount`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='781', `b_od_pri`='4619',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4619', `outstanding`='37175',`a_od_int`='0',`a_tot_od`='5356.3645454545',`a_od_pr`='5356.3645454545',`collection`='5400.00',`coll_date`='2016-06-14' where `accountno`='BL1594' and `cal_date`='2016-06-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5356.3645454545',`amount_topay`='37175',`last_refund_date`='2016-06-14',`last_refund_amt`='5400.00', `od_cal_date`='2016-06-16',`loancomplited`='0' where `loan_accno`='BL1594'");

mysql_query("UPDATE   `transaction` set `amount`='4619',`details`='businessloan Refund' where `accountno`='BL1594' and `date`='2016-06-14' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='781',`details`='businessloan Interest' where `accountno`='BL1594' and `date`='2016-06-14' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='672',`b_cur_int`='695', `b_od_pri`='4133',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='4133', `outstanding`='33042',`a_od_int`='0',`a_tot_od`='10314.269090909',`a_od_pr`='10314.269090909',`collection`='5500.00',`coll_date`='2016-07-19' where `accountno`='BL1594' and `cal_date`='2016-07-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='10314.269090909',`amount_topay`='33042',`last_refund_date`='2016-07-19',`last_refund_amt`='5500.00', `od_cal_date`='2016-08-16',`loancomplited`='0' where `loan_accno`='BL1594'");

mysql_query("UPDATE   `transaction` set `amount`='4133',`details`='businessloan Refund' where `accountno`='BL1594' and `date`='2016-07-19' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='1367',`details`='businessloan Interest' where `accountno`='BL1594' and `date`='2016-07-19' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='5000',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5000', `outstanding`='28042',`a_od_int`='0',`a_tot_od`='5314.27',`a_od_pr`='5314.27',`collection`='5000.00',`coll_date`='2016-08-16' where `accountno`='BL1594' and `cal_date`='2016-08-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='5314.27',`amount_topay`='28042',`last_refund_date`='2016-08-16',`last_refund_amt`='5000.00', `od_cal_date`='2016-08-16',`loancomplited`='0' where `loan_accno`='BL1594'");

mysql_query("UPDATE   `transaction` set `amount`='5000',`details`='businessloan Refund' where `accountno`='BL1594' and `date`='2016-08-16' and `amount`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='524',`b_cur_int`='507', `b_od_pri`='2969',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2969', `outstanding`='25073',`a_od_int`='0',`a_tot_od`='11436.179090909',`a_od_pr`='11436.179090909',`collection`='4000.00',`coll_date`='2016-09-26' where `accountno`='BL1594' and `cal_date`='2016-09-16'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='11436.179090909',`amount_topay`='25073',`last_refund_date`='2016-09-26',`last_refund_amt`='4000.00', `od_cal_date`='2016-10-16',`loancomplited`='0' where `loan_accno`='BL1594'");

mysql_query("UPDATE   `transaction` set `amount`='2969',`details`='businessloan Refund' where `accountno`='BL1594' and `date`='2016-09-26' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='1031',`details`='businessloan Interest' where `accountno`='BL1594' and `date`='2016-09-26' and `interest`>0 ");

mysql_query("DELETE  FROM `transaction` WHERE `transaction`.`id` = 5637");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `cal_date` = '2016-06-17' WHERE `transaction_ledger`.`id` = 11437 ");

mysql_query("update  `transaction_ledger` set `outstanding`='11484.00', `a_od_int`='0',`a_tot_od`='4211.08',`a_od_pr`='4211.08' where `accountno`='BL1569' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4211.08',`amount_topay`='11484.00',`od_cal_date`='2016-09-07' where `loan_accno`='BL1569'");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='0', `b_od_pri`='2800',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2800', `outstanding`='23703',`a_od_int`='0',`a_tot_od`='197.7',`a_od_pr`='197.7',`collection`='2800.00',`coll_date`='2016-08-12' where `accountno`='BL1553' and `cal_date`='2016-08-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='197.7',`amount_topay`='23703',`last_refund_date`='2016-08-12',`last_refund_amt`='2800.00', `od_cal_date`='2016-08-12',`loancomplited`='0' where `loan_accno`='BL1553'");

mysql_query("UPDATE   `transaction` set `amount`='2800',`details`='businessloan Refund' where `accountno`='BL1553' and `date`='2016-08-12' and `amount`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0.00',`b_cur_int`='443', `b_od_pri`='197.70',`b_cur_pri`='2149.3',`a_pre_pri`='0',`tot_pr`='2347', `outstanding`='21356',`a_od_int`='0',`a_tot_od`='203.64117647059',`a_od_pr`='203.64117647059',`collection`='2790.00',`coll_date`='2016-09-12' where `accountno`='BL1553' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='203.64117647059',`amount_topay`='21356',`last_refund_date`='2016-09-12',`last_refund_amt`='2790.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='BL1553'");

mysql_query("UPDATE   `transaction` set `amount`='2347',`details`='businessloan Refund' where `accountno`='BL1553' and `date`='2016-09-12' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='443',`details`='businessloan Interest' where `accountno`='BL1553' and `date`='2016-09-12' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='386',`b_cur_int`='399', `b_od_pri`='1945',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1945', `outstanding`='19411',`a_od_int`='0',`a_tot_od`='2964.5223529412',`a_od_pr`='2964.5223529412',`collection`='2730.00',`coll_date`='2016-10-13' where `accountno`='BL1553' and `cal_date`='2016-10-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2964.5223529412',`amount_topay`='19411',`last_refund_date`='2016-10-13',`last_refund_amt`='2730.00', `od_cal_date`='2016-11-12',`loancomplited`='0' where `loan_accno`='BL1553'");

mysql_query("UPDATE   `transaction` set `amount`='1945',`details`='businessloan Refund' where `accountno`='BL1553' and `date`='2016-10-13' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='785',`details`='businessloan Interest' where `accountno`='BL1553' and `date`='2016-10-13' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='9444.00', `a_od_int`='176',`a_tot_od`='4165.3618181818',`a_od_pr`='3989.3618181818' where `accountno`='BL1526' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='176',`odprincipal`='3989.3618181818',`amount_topay`='9444.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1526'");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='69', `b_od_pri`='908',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='908', `outstanding`='2895',`a_od_int`='0',`a_tot_od`='1076.6309090909',`a_od_pr`='1076.6309090909',`collection`='977.00',`coll_date`='2016-09-26' where `accountno`='BL1516' and `cal_date`='2016-09-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1076.6309090909',`amount_topay`='2895',`last_refund_date`='2016-09-26',`last_refund_amt`='977.00', `od_cal_date`='2016-10-18',`loancomplited`='0' where `loan_accno`='BL1516'");

mysql_query("UPDATE   `transaction` set `amount`='908',`details`='businessloan Refund' where `accountno`='BL1516' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='69',`details`='businessloan Interest' where `accountno`='BL1516' and `date`='2016-09-26' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='54', `b_od_pri`='904',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='904', `outstanding`='1991',`a_od_int`='0',`a_tot_od`='1081.7209090909',`a_od_pr`='1081.7209090909',`collection`='958.00',`coll_date`='2016-10-24' where `accountno`='BL1516' and `cal_date`='2016-10-18'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1081.7209090909',`amount_topay`='1991',`last_refund_date`='2016-10-24',`last_refund_amt`='958.00', `od_cal_date`='2016-11-18',`loancomplited`='0' where `loan_accno`='BL1516'");

mysql_query("UPDATE   `transaction` set `amount`='904',`details`='businessloan Refund' where `accountno`='BL1516' and `date`='2016-10-24' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='54',`details`='businessloan Interest' where `accountno`='BL1516' and `date`='2016-10-24' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='364',`a_tot_od`='15069.53',`a_od_pr`='14705.53' where `accountno`='BL1515' and `cal_date`='2016-06-14'");

mysql_query("update  `businessloan` set `odintrest`='364',`odprincipal`='14705.53',`amount_topay`='50000.00',`od_cal_date`='2016-06-14' where `loan_accno`='BL1515'");

mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='1268',`a_tot_od`='18914.706470588',`a_od_pr`='17646.706470588' where `accountno`='BL1515' and `cal_date`='2016-07-14'");

mysql_query("update  `businessloan` set `odintrest`='1268',`odprincipal`='17646.706470588',`amount_topay`='50000.00',`od_cal_date`='2016-07-14' where `loan_accno`='BL1515'");

mysql_query("update  `transaction_ledger` set `outstanding`='50000.00', `a_od_int`='2202',`a_tot_od`='22789.886470588',`a_od_pr`='20587.886470588' where `accountno`='BL1515' and `cal_date`='2016-08-14'");

mysql_query("update  `businessloan` set `odintrest`='2202',`odprincipal`='20587.886470588',`amount_topay`='50000.00',`od_cal_date`='2016-08-14' where `loan_accno`='BL1515'");

mysql_query("update  `transaction_ledger` set `b_od_int`='3136',`b_cur_int`='904', `b_od_pri`='5960',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='5960', `outstanding`='44040',`a_od_int`='0',`a_tot_od`='20510.242941176',`a_od_pr`='20510.242941176',`collection`='10000.00',`coll_date`='2016-09-22' where `accountno`='BL1515' and `cal_date`='2016-09-14'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='20510.242941176',`amount_topay`='44040',`last_refund_date`='2016-09-22',`last_refund_amt`='10000.00', `od_cal_date`='2016-10-14',`loancomplited`='0' where `loan_accno`='BL1515'");

mysql_query("UPDATE   `transaction` set `amount`='5960',`details`='businessloan Refund' where `accountno`='BL1515' and `date`='2016-09-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='4040',`details`='businessloan Interest' where `accountno`='BL1515' and `date`='2016-09-22' and `interest`>0 ");

mysql_query("DELETE  FROM `corporate1`.`transaction` WHERE `transaction`.`id` = 7653");

mysql_query("DELETE  FROM `corporate1`.`transaction_ledger` WHERE `transaction_ledger`.`id` = 12841 ");

mysql_query("UPDATE   `corporate1`.`transaction` SET `type` = 'cash', `folio_no` = '10169' WHERE `transaction`.`id` = 31192");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='175', `b_od_pri`='1828',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1828', `outstanding`='7558',`a_od_int`='0',`a_tot_od`='2128.0818181818',`a_od_pr`='2128.0818181818',`collection`='2003.00',`coll_date`='2016-08-11' where `accountno`='BL1509' and `cal_date`='2016-08-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2128.0818181818',`amount_topay`='7558',`last_refund_date`='2016-08-11',`last_refund_amt`='2003.00', `od_cal_date`='2016-09-06',`loancomplited`='0' where `loan_accno`='BL1509'");

mysql_query("UPDATE   `transaction` set `amount`='1828',`details`='businessloan Refund' where `accountno`='BL1509' and `date`='2016-08-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='175',`details`='businessloan Interest' where `accountno`='BL1509' and `date`='2016-08-11' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='7558.00', `a_od_int`='0',`a_tot_od`='2128.08',`a_od_pr`='2128.08' where `accountno`='BL1509' and `cal_date`='2016-09-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='2128.08',`amount_topay`='7558.00',`od_cal_date`='2016-09-06' where `loan_accno`='BL1509'");

mysql_query("update  `transaction_ledger` set `b_od_int`='137',`b_cur_int`='141', `b_od_pri`='1672',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1672', `outstanding`='5886',`a_od_int`='0',`a_tot_od`='4092.4436363636',`a_od_pr`='4092.4436363636',`collection`='1950.00',`coll_date`='2016-10-07' where `accountno`='BL1509' and `cal_date`='2016-10-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4092.4436363636',`amount_topay`='5886',`last_refund_date`='2016-10-07',`last_refund_amt`='1950.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='BL1509'");

mysql_query("UPDATE   `transaction` set `amount`='1672',`details`='businessloan Refund' where `accountno`='BL1509' and `date`='2016-10-07' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='278',`details`='businessloan Interest' where `accountno`='BL1509' and `date`='2016-10-07' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='137',`b_cur_int`='141', `b_od_pri`='1672',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1672', `outstanding`='5886',`a_od_int`='0',`a_tot_od`='4092.4436363636',`a_od_pr`='4092.4436363636',`collection`='1950.00',`coll_date`='2016-10-07' where `accountno`='BL1509' and `cal_date`='2016-10-06'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='4092.4436363636',`amount_topay`='5886',`last_refund_date`='2016-10-07',`last_refund_amt`='1950.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='BL1509'");

mysql_query("UPDATE   `transaction` set `amount`='1672',`details`='businessloan Refund' where `accountno`='BL1509' and `date`='2016-10-07' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='278',`details`='businessloan Interest' where `accountno`='BL1509' and `date`='2016-10-07' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='279', `b_od_pri`='826',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='826', `outstanding`='12859',`a_od_int`='0',`a_tot_od`='1202.9833333333',`a_od_pr`='1202.9833333333',`collection`='1105.00',`coll_date`='2016-08-31' where `accountno`='BL1469' and `cal_date`='2016-08-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1202.9833333333',`amount_topay`='12859',`last_refund_date`='2016-08-31',`last_refund_amt`='1105.00', `od_cal_date`='2016-09-08',`loancomplited`='0' where `loan_accno`='BL1469'");

mysql_query("UPDATE   `transaction` set `amount`='826',`details`='businessloan Refund' where `accountno`='BL1469' and `date`='2016-08-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='279',`details`='businessloan Interest' where `accountno`='BL1469' and `date`='2016-08-31' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='254', `b_od_pri`='834',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='834', `outstanding`='12025',`a_od_int`='0',`a_tot_od`='1202.3133333333',`a_od_pr`='1202.3133333333',`collection`='1088.00',`coll_date`='2016-09-26' where `accountno`='BL1469' and `cal_date`='2016-09-08'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1202.3133333333',`amount_topay`='12025',`last_refund_date`='2016-09-26',`last_refund_amt`='1088.00', `od_cal_date`='2016-10-08',`loancomplited`='0' where `loan_accno`='BL1469'");

mysql_query("UPDATE   `transaction` set `amount`='834',`details`='businessloan Refund' where `accountno`='BL1469' and `date`='2016-09-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='254',`details`='businessloan Interest' where `accountno`='BL1469' and `date`='2016-09-26' and `interest`>0 ");


mysql_query("update  `transaction_ledger` set `b_od_int`='311.00',`b_cur_int`='301', `b_od_pri`='1176.47',`b_cur_pri`='1045.53',`a_pre_pri`='0',`tot_pr`='2222', `outstanding`='14445',`a_od_int`='0',`a_tot_od`='130.94058823529',`a_od_pr`='130.94058823529',`collection`='2834.00',`coll_date`='2016-05-11' where `accountno`='BL1506' and `cal_date`='2016-05-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='130.94058823529',`amount_topay`='14445',`last_refund_date`='2016-05-11',`last_refund_amt`='2834.00', `od_cal_date`='2016-05-11',`loancomplited`='0' where `loan_accno`='BL1506'");

mysql_query("UPDATE   `transaction` set `amount`='2222',`details`='businessloan Refund' where `accountno`='BL1506' and `date`='2016-05-11' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='612',`details`='businessloan Interest' where `accountno`='BL1506' and `date`='2016-05-11' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='270',`b_cur_int`='261', `b_od_pri`='850',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='850', `outstanding`='13595',`a_od_int`='0',`a_tot_od`='1633.8811764706',`a_od_pr`='1633.8811764706',`collection`='1381.00',`coll_date`='2016-06-30' where `accountno`='BL1506' and `cal_date`='2016-06-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1633.8811764706',`amount_topay`='13595',`last_refund_date`='2016-06-30',`last_refund_amt`='1381.00', `od_cal_date`='2016-07-11',`loancomplited`='0' where `loan_accno`='BL1506'");

mysql_query("UPDATE   `transaction` set `amount`='850',`details`='businessloan Refund' where `accountno`='BL1506' and `date`='2016-06-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='531',`details`='businessloan Interest' where `accountno`='BL1506' and `date`='2016-06-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='254', `b_od_pri`='1098',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1098', `outstanding`='12497',`a_od_int`='0',`a_tot_od`='1712.3505882353',`a_od_pr`='1712.3505882353',`collection`='1352.00',`coll_date`='2016-07-22' where `accountno`='BL1506' and `cal_date`='2016-07-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1712.3505882353',`amount_topay`='12497',`last_refund_date`='2016-07-22',`last_refund_amt`='1352.00', `od_cal_date`='2016-08-11',`loancomplited`='0' where `loan_accno`='BL1506'");

mysql_query("UPDATE   `transaction` set `amount`='1098',`details`='businessloan Refund' where `accountno`='BL1506' and `date`='2016-07-22' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='254',`details`='businessloan Interest' where `accountno`='BL1506' and `date`='2016-07-22' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='12497.00', `a_od_int`='0',`a_tot_od`='1712.35',`a_od_pr`='1712.35' where `accountno`='BL1506' and `cal_date`='2016-08-11'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1712.35',`amount_topay`='12497.00',`od_cal_date`='2016-08-11' where `loan_accno`='BL1506'");

mysql_query("update  `transaction_ledger` set `outstanding`='12497.00', `a_od_int`='234',`a_tot_od`='3122.8205882353',`a_od_pr`='2888.8205882353' where `accountno`='BL1506' and `cal_date`='2016-09-11'");

mysql_query("update  `businessloan` set `odintrest`='234',`odprincipal`='2888.8205882353',`amount_topay`='12497.00',`od_cal_date`='2016-09-11' where `loan_accno`='BL1506'");

mysql_query("update  `transaction_ledger` set `outstanding`='8599.00', `a_od_int`='0',`a_tot_od`='1098.33',`a_od_pr`='1098.33' where `accountno`='BL1503' and `cal_date`='2016-09-15'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1098.33',`amount_topay`='8599.00',`od_cal_date`='2016-09-15' where `loan_accno`='BL1503'");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='88', `b_od_pri`='912',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='912', `outstanding`='3416',`a_od_int`='0',`a_tot_od`='1747.9833333333',`a_od_pr`='1747.9833333333',`collection`='1000.00',`coll_date`='2016-08-30' where `accountno`='BL1464' and `cal_date`='2016-08-14'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1747.9833333333',`amount_topay`='3416',`last_refund_date`='2016-08-30',`last_refund_amt`='1000.00', `od_cal_date`='2016-09-14',`loancomplited`='0' where `loan_accno`='BL1464'");

mysql_query("UPDATE   `transaction` set `amount`='912',`details`='businessloan Refund' where `accountno`='BL1464' and `date`='2016-08-30' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='88',`details`='businessloan Interest' where `accountno`='BL1464' and `date`='2016-08-30' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='67', `b_od_pri`='933',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='933', `outstanding`='2483',`a_od_int`='0',`a_tot_od`='1648.3133333333',`a_od_pr`='1648.3133333333',`collection`='1000.00',`coll_date`='2016-09-29' where `accountno`='BL1464' and `cal_date`='2016-09-14'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1648.3133333333',`amount_topay`='2483',`last_refund_date`='2016-09-29',`last_refund_amt`='1000.00', `od_cal_date`='2016-10-14',`loancomplited`='0' where `loan_accno`='BL1464'");

mysql_query("UPDATE   `transaction` set `amount`='933',`details`='businessloan Refund' where `accountno`='BL1464' and `date`='2016-09-29' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='67',`details`='businessloan Interest' where `accountno`='BL1464' and `date`='2016-09-29' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='51', `b_od_pri`='1349',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1349', `outstanding`='1134',`a_od_int`='0',`a_tot_od`='1132.6433333333',`a_od_pr`='1132.6433333333',`collection`='1400.00',`coll_date`='2016-10-26' where `accountno`='BL1464' and `cal_date`='2016-10-14'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1132.6433333333',`amount_topay`='1134',`last_refund_date`='2016-10-26',`last_refund_amt`='1400.00', `od_cal_date`='2016-11-14',`loancomplited`='0' where `loan_accno`='BL1464'");

mysql_query("UPDATE   `transaction` set `amount`='1349',`details`='businessloan Refund' where `accountno`='BL1464' and `date`='2016-10-26' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='51',`details`='businessloan Interest' where `accountno`='BL1464' and `date`='2016-10-26' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='357',`a_tot_od`='2857',`a_od_pr`='2500' where `accountno`='BL1443' and `cal_date`='2016-04-16'");

mysql_query("update  `businessloan` set `odintrest`='357',`odprincipal`='2500',`amount_topay`='17500.00',`od_cal_date`='2016-04-16' where `loan_accno`='BL1443'");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='702',`a_tot_od`='5702',`a_od_pr`='5000' where `accountno`='BL1443' and `cal_date`='2016-05-16'");

mysql_query("update  `businessloan` set `odintrest`='702',`odprincipal`='5000',`amount_topay`='17500.00',`od_cal_date`='2016-05-16' where `loan_accno`='BL1443'");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='1059',`a_tot_od`='8559',`a_od_pr`='7500' where `accountno`='BL1443' and `cal_date`='2016-06-16'");

mysql_query("update  `businessloan` set `odintrest`='1059',`odprincipal`='7500',`amount_topay`='17500.00',`od_cal_date`='2016-06-16' where `loan_accno`='BL1443'");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='1404',`a_tot_od`='11404',`a_od_pr`='10000' where `accountno`='BL1443' and `cal_date`='2016-07-16'");

mysql_query("update  `businessloan` set `odintrest`='1404',`odprincipal`='10000',`amount_topay`='17500.00',`od_cal_date`='2016-07-16' where `loan_accno`='BL1443'");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='1761',`a_tot_od`='14261',`a_od_pr`='12500' where `accountno`='BL1443' and `cal_date`='2016-08-16'");

mysql_query("update  `businessloan` set `odintrest`='1761',`odprincipal`='12500',`amount_topay`='17500.00',`od_cal_date`='2016-08-16' where `loan_accno`='BL1443'");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='2118',`a_tot_od`='17118',`a_od_pr`='15000' where `accountno`='BL1443' and `cal_date`='2016-09-16'");

mysql_query("update  `businessloan` set `odintrest`='2118',`odprincipal`='15000',`amount_topay`='17500.00',`od_cal_date`='2016-09-16' where `loan_accno`='BL1443'");

mysql_query("update  `transaction_ledger` set `outstanding`='17500.00', `a_od_int`='2463',`a_tot_od`='19963',`a_od_pr`='17500.00' where `accountno`='BL1443' and `cal_date`='2016-10-16'");

mysql_query("update  `businessloan` set `odintrest`='2463',`odprincipal`='17500.00',`amount_topay`='17500.00',`od_cal_date`='2016-10-16' where `loan_accno`='BL1443'");

mysql_query("UPDATE    `corporate1`.`transaction` SET  `mode_of_payment` =  'cash',`voucher` =  '10169' WHERE  `transaction`.`id` =31192 ");

mysql_query("DELETE  FROM `corporate1`.`transaction_ledger` WHERE `transaction_ledger`.`id` = 12836 ");

mysql_query("update  `transaction_ledger` set `outstanding`='4308.00', `a_od_int`='346',`a_tot_od`='4154',`a_od_pr`='3808' where `accountno`='BL1434' and `cal_date`='2016-08-13'");

mysql_query("update  `businessloan` set `odintrest`='346',`odprincipal`='3808',`amount_topay`='4308.00',`od_cal_date`='2016-08-13' where `loan_accno`='BL1434'");

mysql_query("update  `transaction_ledger` set `outstanding`='4308.00', `a_od_int`='434',`a_tot_od`='4742',`a_od_pr`='4308.00' where `accountno`='BL1434' and `cal_date`='2016-09-13'");

mysql_query("update  `businessloan` set `odintrest`='434',`odprincipal`='4308.00',`amount_topay`='4308.00',`od_cal_date`='2016-09-13' where `loan_accno`='BL1434'");

mysql_query("update  `transaction_ledger` set `outstanding`='4308.00', `a_od_int`='519',`a_tot_od`='4827',`a_od_pr`='4308.00' where `accountno`='BL1434' and `cal_date`='2016-10-13'");

mysql_query("update  `businessloan` set `odintrest`='519',`odprincipal`='4308.00',`amount_topay`='4308.00',`od_cal_date`='2016-10-13' where `loan_accno`='BL1434'");

mysql_query("DELETE  FROM `corporate1`.`transaction_ledger` WHERE `transaction_ledger`.`id` = 12835");

mysql_query("update  `transaction_ledger` set `b_od_int`='59',`b_cur_int`='58', `b_od_pri`='363',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='363', `outstanding`='2552',`a_od_int`='0',`a_tot_od`='471.33333333333',`a_od_pr`='471.33333333333',`collection`='480.00',`coll_date`='2016-04-21' where `accountno`='BL1426' and `cal_date`='2016-04-07'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='471.33333333333',`amount_topay`='2552',`last_refund_date`='2016-04-21',`last_refund_amt`='480.00', `od_cal_date`='2016-05-07',`loancomplited`='0' where `loan_accno`='BL1426'");

mysql_query("UPDATE   `transaction` set `amount`='363',`details`='businessloan Refund' where `accountno`='BL1426' and `date`='2016-04-21' and `amount`>0 ");

mysql_query("UPDATE   `transaction` set `interest`='117',`details`='businessloan Interest' where `accountno`='BL1426' and `date`='2016-04-21' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='1363.00', `a_od_int`='28',`a_tot_od`='1391',`a_od_pr`='1363.00' where `accountno`='BL1426' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='28',`odprincipal`='1363.00',`amount_topay`='1363.00',`od_cal_date`='2016-09-07' where `loan_accno`='BL1426'");

mysql_query("update  `transaction_ledger` set `outstanding`='7841.00', `a_od_int`='160',`a_tot_od`='2581.0066666667',`a_od_pr`='2421.0066666667' where `accountno`='BL1417' and `cal_date`='2016-09-07'");

mysql_query("update  `businessloan` set `odintrest`='160',`odprincipal`='2421.0066666667',`amount_topay`='7841.00',`od_cal_date`='2016-09-07' where `loan_accno`='BL1417'");

mysql_query("update  `transaction_ledger` set `outstanding`='10611.00', `a_od_int`='0',`a_tot_od`='671.33',`a_od_pr`='671.33' where `accountno`='BL1381' and `cal_date`='2016-06-21'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='671.33',`amount_topay`='10611.00',`od_cal_date`='2016-06-21' where `loan_accno`='BL1381'");


mysql_query("update  `transaction_ledger` set `outstanding`='10611.00', `a_od_int`='209',`a_tot_od`='1991.4411111111',`a_od_pr`='1782.4411111111' where `accountno`='BL1381' and `cal_date`='2016-07-21'");

mysql_query("update  `businessloan` set `odintrest`='209',`odprincipal`='1782.4411111111',`amount_topay`='10611.00',`od_cal_date`='2016-07-21' where `loan_accno`='BL1381'");

mysql_query("update  `transaction_ledger` set `outstanding`='10611.00', `a_od_int`='425',`a_tot_od`='3318.5511111111',`a_od_pr`='2893.5511111111' where `accountno`='BL1381' and `cal_date`='2016-08-21'");

mysql_query("update  `businessloan` set `odintrest`='425',`odprincipal`='2893.5511111111',`amount_topay`='10611.00',`od_cal_date`='2016-08-21' where `loan_accno`='BL1381'");

mysql_query("update  `transaction_ledger` set `outstanding`='10611.00', `a_od_int`='641',`a_tot_od`='4645.6611111111',`a_od_pr`='4004.6611111111' where `accountno`='BL1381' and `cal_date`='2016-09-21'");

mysql_query("update  `businessloan` set `odintrest`='641',`odprincipal`='4004.6611111111',`amount_topay`='10611.00',`od_cal_date`='2016-09-21' where `loan_accno`='BL1381'");

mysql_query("update  `transaction_ledger` set `b_od_int`='141',`b_cur_int`='136', `b_od_pri`='2217',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2217', `outstanding`='4686',`a_od_int`='0',`a_tot_od`='1352.7722222222',`a_od_pr`='1352.7722222222',`collection`='2494.00',`coll_date`='2016-09-28' where `accountno`='BL1292' and `cal_date`='2016-09-19'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='1352.7722222222',`amount_topay`='4686',`last_refund_date`='2016-09-28',`last_refund_amt`='2494.00', `od_cal_date`='2016-10-19',`loancomplited`='0' where `loan_accno`='BL1292'");

mysql_query("UPDATE   `transaction` set `amount`='2217',`details`='businessloan Refund' where `accountno`='BL1292' and `date`='2016-09-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='277',`details`='businessloan Interest' where `accountno`='BL1292' and `date`='2016-09-28' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `b_od_int`='214',`b_cur_int`='207', `b_od_pri`='1079',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='1079', `outstanding`='9425',`a_od_int`='0',`a_tot_od`='7224.8822222222',`a_od_pr`='7224.8822222222',`collection`='1500.00',`coll_date`='2016-09-28' where `accountno`='BL1290' and `cal_date`='2016-09-20'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='7224.8822222222',`amount_topay`='9425',`last_refund_date`='2016-09-28',`last_refund_amt`='1500.00', `od_cal_date`='2016-10-20',`loancomplited`='0' where `loan_accno`='BL1290'");

mysql_query("UPDATE   `transaction` set `amount`='1079',`details`='businessloan Refund' where `accountno`='BL1290' and `date`='2016-09-28' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='421',`details`='businessloan Interest' where `accountno`='BL1290' and `date`='2016-09-28' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='4942.00', `a_od_int`='0',`a_tot_od`='3270.56',`a_od_pr`='3270.56' where `accountno`='BL1262' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='3270.56',`amount_topay`='4942.00',`od_cal_date`='2016-09-12' where `loan_accno`='BL1262'");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='25', `b_od_pri`='657.8',`b_cur_pri`='472.2',`a_pre_pri`='0',`tot_pr`='1130', `outstanding`='81',`a_od_int`='0',`a_tot_od`='81',`a_od_pr`='81',`collection`='1155.00',`coll_date`='2016-08-16' where `accountno`='BL1125' and `cal_date`='2016-08-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='81',`amount_topay`='81',`last_refund_date`='2016-08-16',`last_refund_amt`='1155.00', `od_cal_date`='2016-09-12',`loancomplited`='0' where `loan_accno`='BL1125'");

mysql_query("UPDATE   `transaction` set `amount`='1130',`details`='businessloan Refund' where `accountno`='BL1125' and `date`='2016-08-16' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='25',`details`='businessloan Interest' where `accountno`='BL1125' and `date`='2016-08-16' and `interest`>0 ");

mysql_query("update  `transaction_ledger` set `outstanding`='81.00', `a_od_int`='0',`a_tot_od`='81',`a_od_pr`='81.00' where `accountno`='BL1125' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='81.00',`amount_topay`='81.00',`od_cal_date`='2016-09-12' where `loan_accno`='BL1125'");

mysql_query("update  `transaction_ledger` set `outstanding`='27087.00', `a_od_int`='3885',`a_tot_od`='24716.983333333',`a_od_pr`='20831.983333333' where `accountno`='BL1045' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='3885',`odprincipal`='20831.983333333',`amount_topay`='27087.00',`od_cal_date`='2016-09-12' where `loan_accno`='BL1045'");

mysql_query("update  `transaction_ledger` set `outstanding`='23741.00', `a_od_int`='1436',`a_tot_od`='18921.993333333',`a_od_pr`='17485.993333333' where `accountno`='BL1044' and `cal_date`='2016-09-12'");

mysql_query("update  `businessloan` set `odintrest`='1436',`odprincipal`='17485.993333333',`amount_topay`='23741.00',`od_cal_date`='2016-09-12' where `loan_accno`='BL1044'");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='205', `b_od_pri`='2636',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='2636', `outstanding`='7399',`a_od_int`='0',`a_tot_od`='7399',`a_od_pr`='7399',`collection`='2841.00',`coll_date`='2016-10-31' where `accountno`='BL1021' and `cal_date`='2016-10-19'");

mysql_query("update  `businessloan` set `odintrest`='0',`odprincipal`='7399',`amount_topay`='7399',`last_refund_date`='2016-10-31',`last_refund_amt`='2841.00', `od_cal_date`='2016-11-19',`loancomplited`='0' where `loan_accno`='BL1021'");

mysql_query("UPDATE   `transaction` set `amount`='2636',`details`='businessloan Refund' where `accountno`='BL1021' and `date`='2016-10-31' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='205',`details`='businessloan Interest' where `accountno`='BL1021' and `date`='2016-10-31' and `interest`>0 ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `b_cur_int` = '0.00', `a_pre_pri` = '933.00', `tot_pr` = '933.00', `outstanding` = '39983' WHERE `transaction_ledger`.`id` = 13738");

mysql_query("update  `transaction_ledger` set `b_od_int`='0',`b_cur_int`='723', `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0', `outstanding`='39983',`a_od_int`='24',`a_tot_od`='24',`a_od_pr`='0',`collection`='723.00',`coll_date`='2016-10-31' where `accountno`='GL1518' and `cal_date`='2016-10-13'");

mysql_query("update  `goldloan` set `odintrest`='24',`odprincipal`='0',`amount_topay`='39983',`last_refund_date`='2016-10-31',`last_refund_amt`='723.00', `od_cal_date`='2016-11-13',`loancomplited`='0' where `loan_accno`='GL1518'");

mysql_query("UPDATE   `transaction` set `interest`='723',`details`='goldloan Interest' where `accountno`='GL1518' and `date`='2016-10-31' and `interest`>0 ");

mysql_query("UPDATE    `corporate1`.`transaction` SET  `amount` =  '933.00' WHERE  `transaction`.`id` =29020");

mysql_query("DELETE  FROM `corporate1`.`transaction` WHERE `transaction`.`id` = 29019 ");

mysql_query("UPDATE   `corporate1`.`goldloan` SET `amount_topay` = '0.00', `odintrest` = '0.00', `last_refund_amt` = '10237.00', `last_refund_date` = '2016-09-19' WHERE `goldloan`.`id` = 136  ");

mysql_query("UPDATE    `corporate1`.`transaction_ledger` SET  `outstanding` =  '0.00',`a_od_int` =  '0',`a_tot_od` =  '0' WHERE  `transaction_ledger`.`id` =1800");

mysql_query("update  `transaction_ledger` set `outstanding`='5000.00', `a_od_int`='199',`a_tot_od`='199',`a_od_pr`='0' where `accountno`='GL1407' and `cal_date`='2016-09-06'");

mysql_query("update  `goldloan` set `odintrest`='199',`odprincipal`='0',`amount_topay`='5000.00',`od_cal_date`='2016-09-06' where `loan_accno`='GL1407'");


mysql_query("update  `transaction_ledger` set `b_od_int`='298',`b_cur_int`='102', `b_od_pri`='',`b_cur_pri`='',`a_pre_pri`='4401',`tot_pr`='4401', `outstanding`='599',`a_od_int`='0',`a_tot_od`='599',`a_od_pr`='599',`collection`='4801.00',`coll_date`='2016-10-07' where `accountno`='GL1407' and `cal_date`='2016-10-06'");

mysql_query("update  `goldloan` set `odintrest`='0',`odprincipal`='599',`amount_topay`='599',`last_refund_date`='2016-10-07',`last_refund_amt`='4801.00', `od_cal_date`='2016-11-06',`loancomplited`='0' where `loan_accno`='GL1407'");

mysql_query("UPDATE   `transaction` set `amount`='4401',`details`='goldloan Refund' where `accountno`='GL1407' and `date`='2016-10-07' and `amount`>0 ");


mysql_query("UPDATE   `transaction` set `interest`='400',`details`='goldloan Interest' where `accountno`='GL1407' and `date`='2016-10-07' and `interest`>0 ");

mysql_query("INSERT  INTO `corporate1`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '1466854119', 'GL972', '2016-03-08', '0000-00-00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '7977', '0.00', '7977', '7977', '0.00', '2016-06-24 13:28:52') ");

mysql_query("INSERT  INTO `corporate1`.`transaction_ledger` (`id`, `transactionid`, `accountno`, `cal_date`, `coll_date`, `b_od_int`, `b_od_pri`, `b_cur_int`, `b_cur_pri`, `a_pre_pri`, `tot_pr`, `outstanding`, `a_od_int`, `a_od_pr`, `a_tot_od`, `collection`, `Time`) VALUES (NULL, '', 'GL1092', '2016-03-16', '0000-00-00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '7837.00', '633.00', '7837.00', '8470.00', '0.00', '2016-11-01 04:47:36') ");

mysql_query("UPDATE   `corporate1`.`transaction_ledger` SET `coll_date` = '0000-00-00', `b_od_int` = '0', `b_cur_int` = '0', `outstanding` = '0', `a_od_int` = '0', `a_od_pr` = '0', `a_tot_od` = '0', `collection` = '0' WHERE `transaction_ledger`.`id` = 317 ");


?>