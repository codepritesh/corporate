<?php
$status=$_SESSION['status'];
if($status==2)
{
?>
<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Acccount Opening </span></a>
							<ul>
								<li><a href="fixeddepositeform.php">Fixed Account </a></li>
								<li><a href="deposite_daily.php">Daily Account</a></li>
								<li><a href="saving_acc_form.php">Voluntary Saving Account</a></li>
							    <li><a href="deposite_recurring.php">Recurring Account </a></li>
							    <li><a href="deposite_compulsary.php">compulsory Account </a></li>
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Loan </span></a>
						   <ul>
								<li><a href="loan.php">Apply loan </a></li>
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Demand Loan</span></a>
						   <ul>
								<li><a href="demand_loan.php">Apply Demand Loan </a></li>
						   </ul>
						</li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox">
		    <a class="ajax-link" href="logout.php"><span> Logout </span></a>
		    </label>
                </div>
            </div>
        </div>
<?php
}
else if($status==1)
{
?>
<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
						<li>
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Scheme</span></a>
                            <ul>
								 <li><a href="fixed.php">Fixed </a></li>
								  <li><a href="daily.php">Daily </a></li>
								  <li><a href="savingedit.php">Voluntary Saving </a></li>
								  <li><a href="recurring.php">Recurring </a></li>
								  <li><a href="compulsoryedit.php">compulsory </a></li>
								  <li><a href="loan_plan.php">Loan </a></li>
								  <li><a href="grouploan_plan.php">Group Loan </a></li>
								  <li><a href="agricultureloan_plan.php">Agriculture Loan </a></li>
								  <li><a href="businessloan_plan.php">BusinessLoan </a></li>
								  <li><a href="enterpriseloan_plan.php">EnterpriseLoan </a></li>
								  <li><a href="goldloan_plan.php">GoldLoan </a></li>
								   <li><a href="demandloan_plan.php">Demand Loan </a></li>
								  <li><a href="deposit_amtscheme.php">Set Deposit Amount</a></li>
								  <li><a href="expencestype.php">Expences Heading</a></li>
			
							</ul>
                        </li>
                        <li>
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Create</span></a>
                            <ul>
							  <li><a href="member.php">Member </a></li>
							  <li><a href="customer.php">Customer </a></li> 
							  <li><a href="prefix.php">Prefix</a></li>
							  <li><a href="agent.php">Agent </a></li>
							</ul>
                        </li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Acccount Opening </span></a>
							<ul>
								<li><a href="fixeddepositeform.php">Fixed Account </a></li>
								<li><a href="deposite_daily.php">Daily Account</a></li>
								<li><a href="saving_acc_form.php">Voluntary Saving Account</a></li>
							    <li><a href="deposite_recurring.php">Recurring Account </a></li>
							    <li><a href="deposite_compulsary.php">compulsory Account </a></li>
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Deposit</span></a>
							<ul>
								<li><a href="dailydepo_form.php">Daily Deposit</a></li>
								<li><a href="savingdepo_form.php">Voluntary Saving Deposit</a></li>
								<li><a href="recurringform.php">Recurring Deposit</a></li>
								<li><a href="compulsaryform.php">Compulsary Deposit</a></li> 
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> withdrawal </span></a>
							<ul>
							 <li><a href="recurring_withdraw.php">Recurring withdraw</a></li>
							 <li><a href="fixedwithform.php">Fixed withdraw</a></li>
							 <li><a href="savingwithform.php">Saving withdraw</a></li>
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="intrestcal.php"><i class="glyphicon glyphicon-edit"></i><span>Intrest Calculation</span></a>
						</li>
						
						
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Loan </span></a>
						   <ul>
								<li><a href="loan.php">Apply loan </a></li>
								<li><a href="loan_aprisal.php">Loan Aprisal</a></li>
								<li><a href="loan_despatch.php">Loan Dispatch</a></li>
								<li><a href="loan_refund.php">Loan Refund</a></li>
								<li><a href="loan_report.php">Loan Report</a></li>
								<li><a href="loanrefund_report.php">Loan Details</a></li>
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="schedule.php?table=loan"><i class="glyphicon glyphicon-edit"></i><span>Loan Scheduler</span></a>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Demand Loan</span></a>
						   <ul>
								<li><a href="demand_loan.php">Apply Demand Loan </a></li>
								<li><a href="demandloan_dispatch.php">Demand Loan Dispatch </a></li>
								<li><a href="demandloan_refund.php">Demand Loan Refund</a></li>
								<li><a href="demandloan_report.php">Demand Loan Report</a></li>
								<li><a href="demandloanrefund_report.php">Demand Loan Details</a></li>
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="schedule.php?table=demand_loan"><i class="glyphicon glyphicon-edit"></i><span>Demand Loan Scheduler</span></a>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Report </span></a>
							<ul>
								<li><a href="rd_report.php">RD Report</a></li>
								<!--<li><a href="rdreport.php">Rd Report</a></li>-->
								<li><a href="dailyreport.php">Daily Report</a></li>
								<li><a href="fixedreport.php">Fixed  Report</a></li>
								<li><a href="saving_acc_report.php">Voluntary Saving Report</a></li>
								<li><a href="compulsory_report.php">Compulsory Report</a></li>
								<li><a href="acc_transaction_report.php">Transaction Report</a></li>
								<li><a href="Customer_report.php">Customer Report</a></li>
								<li><a href="agent_report.php">Agent Report</a></li>
								<li><a href="link_report.php">member-customer link Report</a></li>
								<li><a href="legergeneralreport.php">General Leger Report</a></li>
							</ul>
						</li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox">
		    <a class="ajax-link" href="logout.php"><span> Logout </span></a>
		    </label>
                </div>
            </div>
        </div>
<?php
}
else if($status==3)
{
?>
<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Deposit</span></a>
							<ul>
								<li><a href="dailydepo_form.php">Daily Deposit</a></li>
								<li><a href="savingdepo_form.php">Voluntary Saving Deposit</a></li>
								<li><a href="recurringform.php">Recurring Deposit</a></li>
								<li><a href="compulsaryform.php">Compulsary Deposit</a></li> 
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Loan </span></a>
						   <ul>
								<li><a href="loan_refund.php">Loan Refund</a></li>
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Demand Loan</span></a>
						   <ul>
								<li><a href="demandloan_refund.php">Demand Loan Refund</a></li>
						   </ul>
						</li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox">
		    <a class="ajax-link" href="logout.php"><span> Logout </span></a>
		    </label>
                </div>
            </div>
        </div>
<?php
}
else
{
?>
<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
						<li>
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Scheme</span></a>
                            <ul>
								 <li><a href="fixed.php">Fixed </a></li>
								  <li><a href="daily.php">Daily </a></li>
								  <li><a href="savingedit.php">Voluntary Saving </a></li>
                                  <li><a href="recurring.php">Recurring </a></li>
                                  <li><a href="compulsoryedit.php">compulsory </a></li>
								  <li><a href="loan_plan.php">Loan </a></li>
								  <li><a href="grouploan_plan.php">Group Loan </a></li>
								  <li><a href="agricultureloan_plan.php">Agriculture Loan </a></li>
								  <li><a href="businessloan_plan.php">BusinessLoan </a></li>
								  <li><a href="enterpriseloan_plan.php">EnterpriseLoan </a></li>
								  <li><a href="goldloan_plan.php">GoldLoan </a></li>
								   <li><a href="demandloan_plan.php">Demand Loan </a></li>
								  <li><a href="deposit_amtscheme.php">Set Deposit Amount</a></li>
								  <li><a href="expencestype.php">Expences Heading</a></li>
			
							</ul>
                        </li>
                        <li>
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-eye-open"></i><span>Create</span></a>
                            <ul>
							  <li><a href="member.php">Member </a></li>
							  <li><a href="customer.php">Customer </a></li> 
							  <li><a href="prefix.php">Prefix</a></li>
							  <li><a href="agent.php">Agent </a></li>
							</ul>
                        </li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Acccount Opening </span></a>
							<ul>
								<li><a href="fixeddepositeform.php">Fixed Account </a></li>
								<li><a href="deposite_daily.php">Daily Account</a></li>
								<li><a href="saving_acc_form.php">Voluntary Saving Account</a></li>
							    <li><a href="deposite_recurring.php">Recurring Account </a></li>
							    <li><a href="deposite_compulsary.php">compulsory Account </a></li>
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Deposit</span></a>
							<ul>
								<li><a href="dailydepo_form.php">Daily Deposit</a></li>
								<li><a href="savingdepo_form.php">Voluntary Saving Deposit</a></li>
								<li><a href="recurringform.php">Recurring Deposit</a></li>
								<li><a href="compulsaryform.php">Compulsary Deposit</a></li> 
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> withdrawal </span></a>
							<ul>
								 <li><a href="recurring_withdraw.php">Recurring withdraw</a></li>
							 <li><a href="fixedwithform.php">Fixed withdraw</a></li>
							 <li><a href="savingwithform.php">Saving withdraw</a></li>
							</ul>
						</li>
						
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Report </span></a>
							<ul>
								<li><a href="rd_report.php">RD Report</a></li>
								<!--<li><a href="rdreport.php">Rd Report</a></li>-->
								<li><a href="dailyreport.php">Daily Report</a></li>
								<li><a href="fixedreport.php">Fixed Deposit Report</a></li>
								<li><a href="saving_acc_report.php">Voluntary Saving Report</a></li>
								<li><a href="compulsory_report.php">Compulsory Report</a></li>
								<!--<li><a href="acc_transaction_report.php">Deposit Account Transaction Report</a></li>-->
								<!--<li><a href="loantransaction.php">Loan Account Transaction Report</a></li>-->
								<li><a href="Customer_report.php">Customer Report</a></li>
								<li><a href="agent_report.php">Agent Report</a></li>
								<li><a href="link_report.php">Member-Customer link Report</a></li>
								<li><a href="legergeneralreport.php">General Ledger Report</a></li>
							</ul>
						</li>

						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Group Loan </span></a>
						   <ul>
								<li><a href="grouploan.php">Apply Group Loan </a></li>
								<li><a href="loan_aprisal.php?table=grouploan">Group Loan Aprisal</a></li>
								<li><a href="loan_approve.php?table=grouploan">Approve Group Loan </a></li>
								<li><a href="loan_despatch.php?table=grouploan">Group Loan Dispatch</a></li>
								<li><a href="grouploan_refund.php">Group Loan Repayment</a></li>
								<li><a href="loanrefund_report.php?table=grouploan">Group Loan Ledger</a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Agriculture Loan </span></a>
						   <ul>
								<li><a href="agricultureloan.php">Apply Agriculture Loan </a></li>
								<li><a href="loan_aprisal.php?table=agricultureloan">Agriculture Loan Aprisal</a></li>
								<li><a href="loan_approve.php?table=agricultureloan">Approve Agriculture Loan </a></li>
								<li><a href="loan_despatch.php?table=agricultureloan">Agriculture Loan Dispatch</a></li>
								<li><a href="agricultureloan_refund.php">Agriculture Loan Repayment</a></li>
								<li><a href="loanrefund_report.php?table=agricultureloan">Agriculture Loan Ledger</a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Business Loan </span></a>
						   <ul>
								<li><a href="businessloan.php">Apply Business Loan </a></li>
								<li><a href="loan_aprisal.php?table=businessloan">Business Loan Aprisal</a></li>
								<li><a href="loan_approve.php?table=businessloan">Approve Business Loan </a></li>
								<li><a href="loan_despatch.php?table=businessloan">Business Loan Dispatch</a></li>
								<li><a href="businessloan_refund.php">Business Loan Repayment</a></li>
							        <li><a href="loanrefund_report.php?table=businessloan">Business Loan Ledger</a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Enterprise Loan </span></a>
						   <ul>
								<li><a href="enterpriseloan.php">Apply Enterprise loan </a></li>
								<li><a href="loan_aprisal.php?table=enterpriseloan">Enterprise loanAprisal</a></li>
								<li><a href="loan_approve.php?table=enterpriseloan">Approve Enterprise loan </a></li>
								<li><a href="loan_despatch.php?table=enterpriseloan">Enterprise loan Dispatch</a></li>
								<li><a href="enterpriseloan_refund.php">Enterprise loan Repayment</a></li>
								<li><a href="loanrefund_report.php?table=enterpriseloan">Enterprise loan Ledger</a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Gold Loan </span></a>
						   <ul>
								<li><a href="goldloan.php">Apply Gold loan </a></li>
								<li><a href="loan_aprisal.php?table=goldloan">Gold loan Aprisal</a></li>
								<li><a href="loan_approve.php?table=goldloan">Approve Gold loan </a></li>
								<li><a href="loan_despatch.php?table=goldloan">Gold loan Dispatch</a></li>
								<li><a href="goldloan_refund.php">Gold loan Repayment</a></li>
								<li><a href="loanrefund_report.php?table=goldloan">Gold loan Ledger</a></li>
								<!--<li><a href="loan_report.php">Loan Report</a></li>-->
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Loan </span></a>
						   <ul>
								<li><a href="loan.php">Apply loan </a></li>
								<li><a href="loan_aprisal.php?table=loan">Loan Aprisal</a></li>
								<li><a href="loan_approve.php?table=loan">Approve loan </a></li>
								<li><a href="loan_despatch.php?table=loan">Loan Dispatch</a></li>
								<li><a href="loan_refund.php">Loan Refund</a></li>
								<li><a href="loan_report.php">Loan Report</a></li>
								<li><a href="loanrefund_report.php?table=loan">Loan Ledger</a></li>
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="schedule.php?table=loan"><i class="glyphicon glyphicon-edit"></i><span>Loan Scheduler</span></a>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Demand Loan</span></a>
						   <ul>
								<li><a href="demand_loan.php">Apply Demand Loan </a></li>
								<li><a href="approve_demandloan.php">Approve Demand Loan </a></li>
								<li><a href="demandloan_dispatch.php">Demand Loan Dispatch </a></li>
								<li><a href="demandloan_refund.php">Demand Loan Refund</a></li>
								<li><a href="demandloan_report.php">Demand Loan Report</a></li>
								<li><a href="demandloanrefund_report.php">Demand Loan Ledger</a></li>
						   </ul>
						</li>
						<li>
						   <a class="ajax-link" href="schedule.php?table=demand_loan"><i class="glyphicon glyphicon-edit"></i><span>Demand Loan Scheduler</span></a>
						</li>
						<li>
						   <a class="ajax-link" href="intrestcal.php"><i class="glyphicon glyphicon-edit"></i><span>Intrest Calculation</span></a>
						</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span>Transaction Report </span></a>
							<ul>
								<li><a href="rdtranreport.php?table=recurringdiposite">RD Transaction Report</a></li>
								<li><a href="dailytranreport.php?table=dailydeposit">Daily Transaction Report</a></li>
								<li><a href="fixedtranreport.php?table=fixeddeposite">Fixed Transaction Report</a></li>
								<li><a href="savingtranreport.php?table=savingaccount">Voluntary Saving Transaction Report</a></li>
								<li><a href="compulsorytranreport.php?table=compulsarydeposite">Compulsory Transaction Report</a></li>
								<li><a href="loantranreport.php?table=loan">Loan Transaction Report</a></li>
								<li><a href="demandloantranreport.php?table=demand_loan">Demand Loan Transaction Report</a></li>
							</ul>
						</li>
						<li>
						   <a class="ajax-link" href="extraexpences.php?table=loan"><i class="glyphicon glyphicon-edit"></i><span>Extra Expences</span></a>
						</li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox">
		    <a class="ajax-link" href="logout.php"><span> Logout </span></a>
		    </label>
                </div>
            </div>
        </div>
		<?php
		}
		?>