<style>
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu {
  width: 200px;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
}
#cssmenu ul ul {
  display: none;
}
.align-right {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 15px 20px;
  border-left: 1px solid #1682ba;
  border-right: 1px solid #1682ba;
  border-top: 1px solid #1682ba;
  cursor: pointer;
  z-index: 2;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
  color: #ffffff;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.35);
  background: #36aae7;
  background: -webkit-linear-gradient(#36aae7, #1fa0e4);
  background: -moz-linear-gradient(#36aae7, #1fa0e4);
  background: -o-linear-gradient(#36aae7, #1fa0e4);
  background: -ms-linear-gradient(#36aae7, #1fa0e4);
  background: linear-gradient(#36aae7, #1fa0e4);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15);
}
#cssmenu > ul > li > a:hover,
#cssmenu > ul > li.active > a,
#cssmenu > ul > li.open > a {
  color: #eeeeee;
  background: #1fa0e4;
  background: -webkit-linear-gradient(#1fa0e4, #1992d1);
  background: -moz-linear-gradient(#1fa0e4, #1992d1);
  background: -o-linear-gradient(#1fa0e4, #1992d1);
  background: -ms-linear-gradient(#1fa0e4, #1992d1);
  background: linear-gradient(#1fa0e4, #1992d1);
}
#cssmenu > ul > li.open > a {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.15);
  border-bottom: 1px solid #1682ba;
}
#cssmenu > ul > li:last-child > a,
#cssmenu > ul > li.last > a {
  border-bottom: 1px solid #1682ba;
}
.holder {
  width: 0;
  height: 0;
  position: absolute;
  top: 0;
  right: 0;
}
.holder::after,
.holder::before {
  display: block;
  position: absolute;
  content: "";
  width: 6px;
  height: 6px;
  right: 20px;
  z-index: 10;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
.holder::after {
  top: 17px;
  border-top: 2px solid #ffffff;
  border-left: 2px solid #ffffff;
}
#cssmenu > ul > li > a:hover > span::after,
#cssmenu > ul > li.active > a > span::after,
#cssmenu > ul > li.open > a > span::after {
  border-color: #eeeeee;
}
.holder::before {
  top: 18px;
  border-top: 2px solid;
  border-left: 2px solid;
  border-top-color: inherit;
  border-left-color: inherit;
}
#cssmenu ul ul li a {
  cursor: pointer;
  border-bottom: 1px solid #32373e;
  border-left: 1px solid #32373e;
  border-right: 1px solid #32373e;
  padding: 10px 20px;
  z-index: 1;
  text-decoration: none;
  font-size: 13px;
  color: #eeeeee;
  background: #356DBB;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
}
#cssmenu ul ul li:hover > a,
#cssmenu ul ul li.open > a,
#cssmenu ul ul li.active > a {
  background: #424852;
  color: #ffffff;
}
#cssmenu ul ul li:first-child > a {
  box-shadow: none;
}
#cssmenu ul ul ul li:first-child > a {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
}
#cssmenu ul ul ul li a {
  padding-left: 30px;
}
#cssmenu > ul > li > ul > li:last-child > a,
#cssmenu > ul > li > ul > li.last > a {
  border-bottom: 0;
}
#cssmenu > ul > li > ul > li.open:last-child > a,
#cssmenu > ul > li > ul > li.last.open > a {
  border-bottom: 1px solid #32373e;
}
#cssmenu > ul > li > ul > li.open:last-child > ul > li:last-child > a {
  border-bottom: 0;
}
#cssmenu ul ul li.has-sub > a::after {
  display: block;
  position: absolute;
  content: "";
  width: 5px;
  height: 5px;
  right: 20px;
  z-index: 10;
  top: 11.5px;
  border-top: 2px solid #eeeeee;
  border-left: 2px solid #eeeeee;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
#cssmenu ul ul li.active > a::after,
#cssmenu ul ul li.open > a::after,
#cssmenu ul ul li > a:hover::after {
  border-color: #ffffff;
}
</style>
<script src="js/script.js"></script>
<script>
  function dayend()
  {
   var con=confirm("Do you want to end day");
   if (con)
   {
  window.location = "dayend.php";
   }
  }
</script>
<?php
$fetday=mysql_query("select * from day");
$countdaydata=mysql_num_rows($fetday);
$todate=date("Y-m-d");
if($countdaydata==0)
{
  //$fetday=mysql_query("select sum()");
  $ip=$_SERVER['REMOTE_ADDR'];
  mysql_query("insert into day set `ip`='$ip'");
}
$fetday1=mysql_query("select * from day where `date`='$todate' and `start`='0'");
$countdaydata1=mysql_num_rows($fetday1);
if($countdaydata1>0)
{
$status=$_SESSION['status'];
if($status==2)
{ ?>
<div class="col-sm-2 col-lg-2">
          <div id='cssmenu'>
			<ul>
				    <li class='active has-sub'><a href='#'><span>Accounts</span></a>
						<ul>
						  <li class='has-sub'><a href='#'><span>Openings</span></a>
							    <ul>
							    <li><a href="application_fees.php"><span>Application fee</span></a></li>
								<li><a href="deposite_compulsary.php"><span>Compulsory </span></a></li>
							       <li><a href="saving_acc_form.php"><span>Voluntary Saving </span></a></li>
							       <li><a href="deposite_recurring.php"><span>Recurring </span></a></li>
							       <li><a href="fixeddepositeform.php"><span>Fixed </span></a></li>
							       <li  class='last'><a href="deposite_daily.php"><span>Daily </span></a></li>
							      
							    </ul>
						 </li>
						</ul>
				     </li>
				    
				    <li class='active has-sub'><a href='#'><span>Loans</span></a>
						<ul>
						   <li class='has-sub'><a href='#'><span>Loan Applications</span></a>
						      <ul>
                                                         <li><a href="agricultureloan.php"><span>Apply Agriculture Loan </span></a></li>
                                                         <li><a href="enterpriseloan.php"><span>Apply Enterprise Loan </span></a></li>
                                                         <li><a href="businessloan.php"><span>Apply Business Loan </span></a></li>
                                                         <li><a href="goldloan.php"><span>Apply Gold Loan </span></a></li>
                                                         <li><a href="demand_loan.php"><span>Apply Demand Loan </span></a></li>
							 <li><a href="loan.php"><span>Apply Daily loan</span></a></li>
                                                         <li><a href="grouploan.php"><span>Apply Group Loan </span></a></li>
						      </ul>
						   </li>
                                              </ul>
                                    </li>
                                    <li><a href="logout.php">Logout</a></li>
				    
			</ul>
          </div>
 </div>
<?php
}
else if($status==1)
{
?>
<div class="col-sm-2 col-lg-2">
          <div id='cssmenu'>
			<ul>
				  <!--  <li class='active has-sub'><a href='#'><span>Schemes</span></a>
						<ul>
						   <li class='has-sub'><a href='#'><span>Savings</span></a>
						      <ul>
						         <li><a href="compulsoryedit.php"><span>Compulsory</span></a></li>
							 <li><a href="savingedit.php"><span>Voluntary Saving</span></a></li>
							 <li><a href="recurring.php"><span>Recurring</span></a></li>
							 <li><a href="fixed.php"><span>Fixed</span></a></li>
							 <li><a href="daily.php"><span>Daily</span></a></li>
                                                         <li><a href="datupload.php"><span>Daily POS Upload</span></a></li>
						      </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>Loans</span></a>
						      <ul>
							 <li><a href="agricultureloan_plan.php"><span>Agriculture Loan</span></a></li>
							 <li><a href="businessloan_plan.php"><span>Business Loan</span></a></li>
							 <li><a href="enterpriseloan_plan.php"><span>Enterprise Loan</span></a></li>
							 <li><a href="demandloan_plan.php"><span>Demand Loan</span></a></li>
							 <li><a href="goldloan_plan.php"><span>Gold Loan</span></a></li>
							 <li><a href="loan_plan.php"><span>Daily Loan</span></a></li>
							 <li class='last'><a href="grouploan_plan.php"><span>Group Loan</span></a></li>
						     </ul>
						  </li>
						   <li class='has-sub'><a href='#'><span>Others</span></a>
						      <ul>
							 <li><a href="deposit_amtscheme.php"><span>Set Deposit Amount</span></a></li>
							 <li><a href="expencestype.php"><span>Expences Heading</span></a></li>
						         <li><a href="prefix.php"><span>Agent Prefix </span></a></li>
                                                         <li><a href="processingfees.php"><span>Set Processing Fees </span></a></li>
						     </ul>
						  </li>
						</ul>
				    </li>-->
				    
				    <li class='active has-sub'><a href='#'><span>Registrations</span></a>
						      <ul>
							 <li><a href="member.php"><span>Member</span></a></li>
							 <li><a href="customer.php"><span>Customer</span></a></li>
							 <li class='last'><a href="agent.php"><span>Agent</span></a></li>
						      </ul>
				    </li>
				    
				    <li class='active has-sub'><a href='#'><span>Accounts</span></a>
						<ul>
						  <li class='has-sub'><a href='#'><span>Openings</span></a>
							    <ul>
							    <li><a href="application_fees.php"><span>Application fee</span></a></li>
								<li><a href="deposite_compulsary.php"><span>Compulsory </span></a></li>
							       <li><a href="saving_acc_form.php"><span>Voluntary Saving</span></a></li>
							       <li><a href="deposite_recurring.php"><span>Recurring </span></a></li>
							       <li><a href="fixeddepositeform.php"><span>Fixed </span></a></li>
							       <li class='last'><a href="deposite_daily.php"><span>Daily </span></a></li>
							    </ul>
						 </li>
						  <li class='has-sub'><a href='#'><span>Deposits</span></a>
							    <ul>
							       <li><a href="compulsaryform.php"><span>Compulsary Deposit</span></a></li>
							       <li><a href="savingdepo_form.php"><span>Voluntary  Deposit</span></a></li>
							       <li><a href="recurringform.php"><span>Recurring Deposit</span></a></li>
							       <li><a href="dailydepo_form.php"><span>Daily Deposit</span></a></li>
							    </ul>
						 </li>
						  <li class='has-sub'><a href='#'><span>Withdrawls</span></a>
							    <ul>
							       <li><a href="compulsorywithfrom.php"><span>Compulsory </span></a></li>
							       <li><a href="savingwithform.php"><span>Voluntary Saving</span></a></li>
							       <li><a href="recurring_withdraw.php"><span>Recurring Withdrawl</span></a></li>
							       <li><a href="fixedwithform.php"><span>Fixed Withdrawl</span></a></li>
							       <li><a href="dailywithform.php"><span>Daily Withdrawl</span></a></li>
							       <li class='last'><a href="sharewithfrom.php"><span>Share Withdrawl</span></a></li>
							    </ul>
						 </li> 
						</ul>
				     </li>
				    <li class='active has-sub'><a href='#'><span>Loans</span></a>
						<ul>
							    
						   <li class='has-sub'><a href='#'><span>Agriculture Loan</span></a>
						      <ul>
							 <li><a href="agricultureloan.php"><span>Apply Agriculture Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=agricultureloan"><span>Agriculture Loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=agricultureloan"><span>Approve Agriculture Loan </span></a></li>
								<li><a href="loan_despatch.php?table=agricultureloan"><span>Agriculture Loan Dispatch</span></a></li>
								<li><a href="agricultureloan_refund.php"><span>Agriculture Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=agricultureloan"><span>Agriculture Loan Report</span></a></li>
                <li><a href="loanclose.php?table=agricultureloan"><span>Agriculture Loan Close</span></a></li>
								
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						     </ul>
						  </li>
						  
						   <li class='has-sub'><a href='#'><span>Business Loan</span></a>
						      <ul>
                <li><a href="businessloan.php"><span>Apply Business Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=businessloan"><span>Business Loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=businessloan"><span>Approve Business Loan </span></a></li>
								<li><a href="loan_despatch.php?table=businessloan"><span>Business Loan Dispatch</span></a></li>
								<li><a href="businessloan_refund.php"><span>Business Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=businessloan"><span>Business Loan Report</span></a></li>
                <li><a href="loanclose.php?table=businessloan"><span>Business Loan Close</span></a></li>
							        
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						      </ul>
						   </li>
						   
						   
						   <li class='has-sub'><a href='#'><span>Enterprise Loan</span></a>
						      <ul>
                                                                <li><a href="enterpriseloan.php"><span>Apply Enterprise Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=enterpriseloan"><span>Enterprise loanAprisal</span></a></li>
								<li><a href="loan_approve.php?table=enterpriseloan"><span>Approve Enterprise Loan </span></a></li>
								<li><a href="loan_despatch.php?table=enterpriseloan"><span>Enterprise Loan Dispatch</span></a></li>
								<li><a href="enterpriseloan_refund.php"><span>Enterprise Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=enterpriseloan"><span>Enterprise Loan Report</span></a></li>
                                                                <li><a href="loanclose.php?table=enterpriseloan"><span>Enterprise Loan Close</span></a></li>
								
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
                                                      </ul>
						  </li>
						   
						   <li class='has-sub'><a href='#'><span>Gold Loan</span></a>
						      <ul>
                                                                <li><a href="goldloan.php"><span>Apply Gold loan</span> </a></li>
								<li><a href="loan_aprisal.php?table=goldloan"><span>Gold loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=goldloan"><span>Approve Gold loan </span></a></li>
								<li><a href="loan_despatch.php?table=goldloan"><span>Gold loan Dispatch</span></a></li>
								<li><a href="goldloan_refund.php"><span>Gold loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=goldloan"><span>Gold Loan Report</span></a></li>
                                                                <li><a href="loanclose.php?table=goldloan"><span>Gold Loan Close</span></a></li>
                                                      </ul>
						  </li>
						   
						   <li class='has-sub'><a href='#'><span>Demand Loan</span></a>
						      <ul>
							    <li><a href="demand_loan.php"><span>Apply Demand Loan </span></a></li>
							    <li><a href="loan_aprisal.php?table=demand_loan"><span>Demand Loan Aprisal</span></a></li>
							    <li><a href="approve_demandloan.php"><span>Approve Demand Loan </span> </a></li>
							    <li><a href="demandloan_dispatch.php"><span>Demand Loan Dispatch </span></a></li>
							    <li><a href="demandloan_refund.php"><span>Demand Loan RePayment </span></a></li>
							    <li><a href="demandloan_report.php"><span>Demand Loan Report </span></a></li>
                                                            <li><a href="loanclose.php?table=demand_loan"><span>Demand Loan Close</span></a></li>
							   
						      </ul>
						   </li>
						   
						   <li class='has-sub'><a href='#'><span>Daily Loan</span></a>
						      <ul>
							 <li><a href="loan.php"><span>Apply Daily loan</span></a></li>
						         <li><a href="loan_aprisal.php?table=loan"><span>Daily Loan Aprisal</span></a></li>
							 <li><a href="loan_approve.php?table=loan"><span>Daily Approve loan</span></a></li>
						         <li><a href="loan_despatch.php?table=loan"><span>Daily Loan Dispatch</span></a></li>
							 <li><a href="loan_refund.php"><span>Daily Loan Repayment</span></a></li>
						         <li><a href="loan_report.php?table=loan"><span>Daily Loan Report</span></a></li>
                                                         <li><a href="loanclose.php?table=loan"><span>Daily Loan Close</span></a></li>
							 
						      </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>Group Loan</span></a>
						      <ul>
							        <li><a href="grouploan.php"><span>Apply Group Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=grouploan"><span>Group Loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=grouploan"><span>Approve Group Loan</span> </a></li>
								<li><a href="loan_despatch.php?table=grouploan"><span>Group Loan Dispatch</span></a></li>
								<li><a href="grouploan_refund.php"><span>Group Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=grouploan"><span>Group Loan Report</span></a></li>
                                                                <li><a href="loanclose.php?table=grouploan"><span>Group Loan Close</span></a></li>
								
						      </ul>
						   </li>
                <li class='has-sub'><a href='#'><span>Staff Loan</span></a>
						      <ul>
                <li><a href="businessloan.php"><span>Apply Staff Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=staffloan"><span>Staff Loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=staffloan"><span>Approve Staff Loan </span></a></li>
								<li><a href="loan_despatch.php?table=staffloan"><span>Staff Loan Dispatch</span></a></li>
								<li><a href="staffloan_refund.php"><span>Staff Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=staffloan"><span>Staff Loan Report</span></a></li>
                <li><a href="loanclose.php?table=staffloan"><span>Staff Loan Close</span></a></li>
							        
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						      </ul>
						   </li>
						   
                                              </ul>
                                    </li>
                                    <li><a href="extraexpences.php">Extra Expences</a></li>
                                    <li><a href="logout.php">Logout</a></li>
				    
			</ul>
          </div>
 </div>
<?php
}
else if($status==3)
{
?>
<div class="col-sm-2 col-lg-2">
          <div id='cssmenu'>
			<ul>
				    <li class='active has-sub'><a href='#'><span>Accounts</span></a>
						<ul>
						  <li class='has-sub'><a href='#'><span>Deposits</span></a>
							    <ul>
							       <li><a href="application_fees.php"><span>Application fee</span></a></li>
							       <li><a href="compulsaryform.php"><span>Compulsary </span></a></li>
							       <li><a href="savingdepo_form.php"><span>Voluntary Saving </span></a></li>
							       <li><a href="recurringform.php"><span>Recurring </span></a></li>
							       <li><a href="dailydepo_form.php"><span>Daily </span></a></li>
							       
							    </ul>
						 </li>
						</ul>
				     </li>
				    
				     <li class='active has-sub'><a href='#'><span>Loans</span></a>
						<ul>
						   <li class='has-sub'><a href='#'><span>Loan Repayment</span></a>
						      <ul>
                                                         <li><a href="agricultureloan_refund.php"><span>Agriculture Loan </span></a></li>
                                                         <li><a href="businessloan_refund.php"><span>Business Loan </span></a></li>
                                                         <li><a href="enterpriseloan_refund.php"><span>Enterprise Loan </span></a></li>
                                                         <li><a href="goldloan_refund.php"><span>Gold Loan </span></a></li>
                                                         <li><a href="demandloan_refund.php"><span>Demand Loan  </span></a></li>
							 <li><a href="loan_refund.php"><span>Daily Loan </span></a></li>
                                                         <li><a href="grouploan_refund.php"><span>Group Loan </span></a></li>
						      </ul>
						   </li>
                                              </ul>
                                      </li>
                                     
                                      <li><a href="logout.php">Logout</a></li>
				    
			</ul>
          </div>
 </div>
<?php
}
else
{
?>
<div class="col-sm-2 col-lg-2">
          <div id='cssmenu'>
			<ul>
				    <li class='active has-sub'><a href='#'><span>Schemes</span></a>
						<ul>
						   <li class='has-sub'><a href='#'><span>Savings</span></a>
						    <ul>
                                <li><a href="compulsoryedit.php"><span>Compulsory</span></a></li>
                                <li><a href="savingedit.php"><span>Voluntary Saving</span></a></li>
                                <li><a href="recurring.php"><span>Recurring</span></a></li>
                                <li><a href="fixed.php"><span>Fixed</span></a></li>
                                <li><a href="datupload.php"><span>Daily POS Upload</span></a></li>
                                <li><a href="datremove.php"><span>Daily POS Delete</span></a></li>
                            </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>Loans</span></a>
						      <ul>
                                <li><a href="agricultureloan_plan.php"><span>Agriculture Loan</span></a></li>
                                <li><a href="businessloan_plan.php"><span>Business Loan</span></a></li>
                                <li><a href="enterpriseloan_plan.php"><span>Enterprise Loan</span></a></li>
                                <li><a href="goldloan_plan.php"><span>Gold Loan</span></a></li>
                                <li><a href="demandloan_plan.php"><span>Demand Loan</span></a></li>
                                <li><a href="loan_plan.php"><span>Daily Loan</span></a></li>
                                <li><a href="grouploan_plan.php"><span>Group Loan</span></a></li>
                                <li><a href="staffloan_plan.php"><span>Staff Loan</span></a></li>
						     </ul>
						  </li>
						   <li class='has-sub'><a href='#'><span>Others</span></a>
						      <ul>
							 <li><a href="deposit_amtscheme.php"><span>Set Deposit Amount</span></a></li>
							 <li><a href="expencestype.php"><span>Expences Heading</span></a></li>
						     <li><a href="prefix.php"><span>Agent Prefix</span></a></li>
							 <li><a href="bank.php"><span>Add Bank</span></a></li>
							 <li><a href="bankdetails.php"><span>Add Bank Details</span></a></li>
                             <li><a href="processingfees.php"><span>Set Processing Fees </span></a></li>
                             <li><a href="productcode.php"><span>Product Code</span></a></li>
							<!-- <li><a href="calender.php"><span>Calenders</span></a></li>-->
                            <li><a href="extra_head.php?folio=30"><span>Unpaid Amount</span></a></li>
                            <li><a href="extra_head.php?folio=29"><span>Miscelanious Charge</span></a></li>						      
						     </ul>
						  </li>
						</ul>
				    </li>
				    
				    <li class='active has-sub'><a href='#'><span>Registrations</span></a>
						      <ul>
							 <li><a href="member.php"><span>Member</span></a></li>
							 <li><a href="customer.php"><span>Customer</span></a></li>
							 <li class='last'><a href="agent.php"><span>Agent</span></a></li>
                                                         <li class='last'><a href="staff.php"><span>Staff</span></a></li>
						      </ul>
				    </li>
				    
				    <li class='active has-sub'><a href='#'><span>Accounts</span></a>
						<ul>
						  <li class='has-sub'><a href='#'><span>Openings</span></a>
							    <ul>
							       <li><a href="application_fees.php"><span>Application fee</span></a></li>
							       <li><a href="deposite_compulsary.php"><span>Compulsory </span></a></li>
							       <li><a href="saving_acc_form.php"><span>Voluntary Saving </span></a></li>
							       <li><a href="deposite_recurring.php"><span>Recurring </span></a></li>
							       <li><a href="fixeddepositeform.php"><span>Fixed </span></a></li>
							       <li class='last'><a href="deposite_daily.php"><span>Daily </span></a></li>
							    </ul>
						 </li>
						  <li class='has-sub'><a href='#'><span>Deposits</span></a>
							    <ul>
							       <li class='last'><a href="compulsaryform.php"><span>Compulsary</span></a></li>
							       <li><a href="savingdepo_form.php"><span>Voluntary Saving </span></a></li>
							       <li><a href="recurringform.php"><span>Recurring</span></a></li>
							       <li><a href="dailydepo_form.php"><span>Daily </span></a></li>
							    </ul>
						 </li>
						  <li class='has-sub'><a href='#'><span>Withdrawls</span></a>
							    <ul>
							       <li><a href="compulsorywithfrom.php"><span>Compulsory </span></a></li>
							       <li><a href="savingwithform.php"><span>Voluntary Saving </span></a></li>
							       <li><a href="recurring_withdraw.php"><span>Recurring </span></a></li>
							       <li><a href="fixedwithform.php"><span>Fixed </span></a></li>
							       <li><a href="daily_withdrawl.php"><span>Daily </span></a></li>
							       <li class='last'><a href="sharewithfrom.php"><span>Share</span></a></li>
							    </ul>
						 </li>
                                                  <li><a href="compulsory_close.php"><span>Compulsory Account Close </span></a></li>
						</ul>
				     </li>
				    
				     <li class='active has-sub'><a href='#'><span>Loans</span></a>
						<ul>
							    
						  <li class='has-sub'><a href='#'><span>Agriculture Loan</span></a>
						      <ul>
                                                         <li><a href="application_fees.php?folio=7"><span>Agriculture Application  fee</span></a></li>
							 <li><a href="agricultureloan.php"><span>Apply Agriculture Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=agricultureloan"><span>Agriculture Loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=agricultureloan"><span>Approve Agriculture Loan </span></a></li>
								<li><a href="loan_despatch.php?table=agricultureloan"><span>Agriculture Loan Dispatch</span></a></li>
								<li><a href="agricultureloan_refund.php"><span>Agriculture Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=agricultureloan"><span>Agriculture Loan Report</span></a></li>
								<li><a href="loanclose.php?table=agricultureloan"><span>Agriculture Loan Close</span></a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						     </ul>
						  </li>
						   
						  <li class='has-sub'><a href='#'><span>Business Loan</span></a>
						      <ul>
							    <li><a href="application_fees.php?folio=8"><span>Business Application  fee</span></a></li>
                                                                <li><a href="businessloan.php"><span>Apply Business Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=businessloan"><span>Business Loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=businessloan"><span>Approve Business Loan </span></a></li>
								<li><a href="loan_despatch.php?table=businessloan"><span>Business Loan Dispatch</span></a></li>
								<li><a href="businessloan_refund.php"><span>Business Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=businessloan"><span>Business Loan Report</span></a></li>
							        <li><a href="loanclose.php?table=businessloan"><span>Business Loan Close</span></a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						      </ul>
						   </li>
						  
						  <li class='has-sub'><a href='#'><span>Enterprise Loan</span></a>
						      <ul>
							    <li><a href="application_fees.php?folio=9"><span>Enterprise Application  fee</span></a></li>
                                                                <li><a href="enterpriseloan.php"><span>Apply Enterprise Loan </span></a></li>
								<li><a href="loan_aprisal.php?table=enterpriseloan"><span>Enterprise loanAprisal</span></a></li>
								<li><a href="loan_approve.php?table=enterpriseloan"><span>Approve Enterprise Loan </span></a></li>
								<li><a href="loan_despatch.php?table=enterpriseloan"><span>Enterprise Loan Dispatch</span></a></li>
								<li><a href="enterpriseloan_refund.php"><span>Enterprise Loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=enterpriseloan"><span>Enterprise Loan Report</span></a></li>
								<li><a href="loanclose.php?table=enterpriseloan"><span>Enterprise Loan Close</span></a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
                                                      </ul>
						  </li>
						  
						  
						   <li class='has-sub'><a href='#'><span>Gold Loan</span></a>
						      <ul>
							    <li><a href="application_fees.php?folio=11"><span>Gold Application fee</span></a></li>
                                                                <li><a href="goldloan.php"><span>Apply Gold loan</span> </a></li>
								<li><a href="loan_aprisal.php?table=goldloan"><span>Gold loan Aprisal</span></a></li>
								<li><a href="loan_approve.php?table=goldloan"><span>Approve Gold loan </span></a></li>
								<li><a href="loan_despatch.php?table=goldloan"><span>Gold loan Dispatch</span></a></li>
								<li><a href="goldloan_refund.php"><span>Gold loan Repayment</span></a></li>
								<li><a href="loan_report.php?table=goldloan"><span>Gold Loan Report</span></a></li>
                                                                <li><a href="loanclose.php?table=goldloan"><span>Gold Loan Close</span></a></li>
                                                      </ul>
						  </li>
						   
						   <li class='has-sub'><a href='#'><span>Demand Loan</span></a>
						      <ul>
							    <li><a href="application_fees.php?folio=10"><span>Demand Application fee</span></a></li>
							    <li><a href="demand_loan.php"><span>Apply Demand Loan </span></a></li>
							     <li><a href="loan_aprisal.php?table=demand_loan"><span>Demand Loan Aprisal</span></a></li>
							    <li><a href="approve_demandloan.php"><span>Approve Demand Loan </span> </a></li>
							    <li><a href="demandloan_dispatch.php"><span>Demand Loan Dispatch </span></a></li>
							    <li><a href="demandloan_refund.php"><span>Demand Loan RePayment </span></a></li>
							    <li><a href="demandloan_report.php"><span>Demand Loan Report </span></a></li>
                                                            <li><a href="loanclose.php?table=demand_loan"><span>Demand Loan Close</span></a></li>
							   
						      </ul>
						   </li>
						    
						   <li class='has-sub'><a href='#'><span>Daily Loan</span></a>
						      <ul>
						         <li><a href="application_fees.php?folio=12"><span>Daily Application fee</span></a></li>
							 <li><a href="loan.php"><span>Apply Dailyloan</span></a></li>
						         <li><a href="loan_aprisal.php?table=loan"><span>Daily Loan Aprisal</span></a></li>
							 <li><a href="loan_approve.php?table=loan"><span>Daily Approve loan</span></a></li>
						         <li><a href="loan_despatch.php?table=loan"><span>Daily Loan Dispatch</span></a></li>
							 <li><a href="loan_refund.php"><span>Daily Loan Repayment</span></a></li>
						         <li><a href="loan_report.php?table=loan"><span>Daily Loan Report</span></a></li>
							 <li><a href="loanclose.php?table=loan"><span>Daily Loan Close</span></a></li>
						      </ul>
						   </li>
						   
						   <li class='has-sub'><a href='#'><span>Group Loan</span></a>
						      <ul>
							        <li><a href="application_fees.php?folio=6"><span>Group Application fee</span></a></li>	
							        <li><a href="grouploan.php"><span>Apply Group Loan </span></a></li>
                      <li><a href="loan_aprisal.php?table=grouploan"><span>Group Loan Aprisal</span></a></li>
                      <li><a href="loan_approve.php?table=grouploan"><span>Approve Group Loan</span> </a></li>
                      <li><a href="loan_despatch.php?table=grouploan"><span>Group Loan Dispatch</span></a></li>
                      <li><a href="grouploan_refund.php"><span>Group Loan Repayment</span></a></li>
                      <li><a href="loan_report.php?table=grouploan"><span>Group Loan Report</span></a></li>
                      <li><a href="loanclose.php?table=grouploan"><span>Group Loan Close</span></a></li>
						      </ul>
						   </li>
                <li class='has-sub'><a href='#'><span>Staff Loan</span></a>
						    <ul>
                    <li><a href="application_fees.php?folio=23"><span>Staff Application fee</span></a></li>	
                    <li><a href="staffloan.php"><span>Apply Staff Loan </span></a></li>
                    <li><a href="loan_aprisal.php?table=staffloan"><span>Staff Loan Aprisal</span></a></li>
                    <li><a href="loan_approve.php?table=staffloan"><span>Approve Staff Loan </span></a></li>
                    <li><a href="loan_despatch.php?table=staffloan"><span>Staff Loan Dispatch</span></a></li>
                    <li><a href="staffloan_refund.php"><span>Staff Loan Repayment</span></a></li>
                    <li><a href="loan_report.php?table=staffloan"><span>Staff Loan Report</span></a></li>
                    <li><a href="loanclose.php?table=staffloan"><span>Staff Loan Close</span></a></li>
							        
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						      </ul>
						   </li>
						   
						   
                                              </ul>
                                    </li>
                                     <li clhas-sub'><a href='printscheduler.php'><span>Print Scheduler</span></a>
                                       <li clhas-sub'><a href='security.php'><span>Add Security</span></a>
                                      
				    <li class='active has-sub'><a href='#'><span>Reports</span></a>
						<ul>
						   <li class='has-sub'><a href='#'><span>Savings</span></a>
						      <ul>
								<li><a href="compulsory_report.php"><span>Compulsory Report</span></a></li>
								<li><a href="saving_acc_report.php"><span>Voluntary Saving Report</span></a></li>
								<li><a href="rd_report.php"><span>RD Report</span></a></li>
								<li><a href="fixedreport.php"><span>Fixed Deposit Report</span></a></li>
								<li><a href="dailyreport.php"><span>Daily Report</span></a></li>
								<!--<li><a href="rdreport.php"><span>Rd Report</span></a></li>-->
								<!--<li><a href="acc_transaction_report.php"><span>Deposit Account Transaction Report</span></a></li>-->
								<!--<li><a href="loantransaction.php"><span>Loan Account Transaction Report</span></a></li>-->
						      </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>Savings Ledger Reports</span></a>
						      <ul>
								
								<li><a href="compulsorytranreport.php?table=compulsarydeposite"><span>Compulsory </span></a></li>
								<li><a href="savingtranreport.php?table=savingaccount"><span>Voluntary Saving</span></a></li>
								<li><a href="rdtranreport.php?table=recurringdiposite"><span>Recurring</span></a></li>
								<li><a href="fixedtranreport.php?table=fixeddeposite"><span>Fixed</span></a></li>
								<li><a href="dailytranreport.php?table=dailydeposit"><span>Daily</span></a></li>
								<li><a href="all_saving_ledger_report.php"><span>All Savings Report</span></a></li>
						      </ul>
						   </li>
               <li class='has-sub'><a href='#'><span>Loans</span></a>
						      <ul>
                  <li><a href="loan_ledger_report.php?table=agricultureloan"><span>Agriculture Loan Ledger</span></a></li>
                  <li><a href="loan_ledger_report.php?table=businessloan"><span>Business Loan Ledger</span></a></li>
                  <li><a href="loan_ledger_report.php?table=enterpriseloan"><span>Enterprise Loan Ledger</span></a></li>
                  <li><a href="loan_ledger_report.php?table=goldloan"><span>Gold loan Ledger</span></a></li>
				  <li><a href="loan_ledger_report.php?table=demand_loan"><span>Demand Loan Ledger </span></a></li>
				  <li><a href="loan_ledger_report.php?table=loan"><span>Daily Loan Ledger</span></a></li>
                  <li><a href="loan_ledger_report.php?table=grouploan"><span>Group Loan Ledger</span></a></li>
		      <li><a href="all_loan_ledger_report.php"><span>All Loan</span></a></li>					
                  
                    
                  <li><a href="demandsheet.php"><span>Loan Demand Sheet</span></a></li>
                  <li><a href="cum_loan_report.php"><span>Transaction P&I Coll. Report</span></a></li>
                  <li><a href="closed_loan_report.php"><span>Closed Loan Report</span></a></li>
                   <li><a href="closed_loan_reportt.php"><span>Partially Closed Loan Report</span></a></li>
						      </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>Others</span></a>
						      <ul>
							        <li><a href="Customer_report.php">Customers Product Details</a></li>
							        <li><a href="customer_register_report.php">Customer Register</a></li>
                                    <li><a href="agent_report.php">Agent Report</a></li>
                                    <li><a href='saving_demandsheet.php'><span>Saving Demand Sheet</span></a></li>
                                   <!-- <li><a href='agent_demandsheet.php'><span>Agent Demand Sheet</span></a></li>-->
                                    <li><a href="account.php">Productwise Cummulative Report</a></li>
                                    <li><a href="share.php">Share Register</a></li>
                                    <li><a href="link_report.php">Member-Customer Register</a></li>
                                    <!--<li><a href="legergeneralreport.php">General Ledger</a></li>-->
                                    <li><a href="cashledger.php">General Ledger</a></li>
                                    <li><a href='newcashbook.php'><span>Cashbook</span></a></li>
                                    <li><a href='alllonee.php'><span>Loan Report</span></a></li>
                                    <li><a href='acc_report.php'><span>Account Report</span></a></li>
                                    <li><a href='acc_withdrawl_rpt.php'><span>Account Withdrawl Register</span></a></li>
                                    <li><a href='withdrawl_report.php'><span>Loan Index Report</span></a></li>
                                    <li><a href='close_register.php'><span>Close A/C Register </span></a></li>
                                    <li><a href='open_register.php'><span>Active A/C Register </span></a></li>
                                    <li><a href='bankbook.php'><span>Bankbook</span></a></li>
                                    <li><a href='mprreport.php'><span>MPR Report</span></a></li>
                                    <li><a href="expenceincome_report.php"><span>Income Expenditures</span></a></li>
                                    <li><a href="transaction_report.php"><span>Transaction Report</span></a></li>
                                    <li><a href="account_trans_report.php"><span>Transaction(product) Report</span></a></li>
                                    <li><a href="customer_register.php"><span>Productwise customer register</span></a></li>
                             </ul>
						  </li>
						   
						</ul>
				    </li>
				    <li><a href="manuallyloan.php">Manually correction</a></li>
                     <li><a href="village_set.php">Set Village</a></li>
				    <li><a href="intrestcal.php">Intrest Calculation</a></li>
				    <li><a href="extraexpences.php">Extra Expences</a></li>
                                     <li><a href="badloan.php">Bad Loan</a></li> 
                                    <li><a href="backup.php">Back Up</a></li> 
                                    <li><a href="logout.php">Logout</a></li>
                                     <li><a href="daystartingbal.php">Day Starting Balance</a></li>
                                    <li><a href="#" onclick="dayend()">Day end</a></li>
                                    <li><a href="monthend.php">Month End</a></li>
				    
			</ul>
          </div>
 </div>
<?php
}}else{
?>
<div class="col-sm-2 col-lg-2">
          <div id='cssmenu'>
			<ul>
                                    <li><a href="daystart.php">Daystart</a></li>
                                    <li><a href="logout.php">Logout</a></li>
				    
			</ul>
          </div>
 </div>
<?php }?>