<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="container">
        <div class="row">
		
		
		<!-- Static calc ui starts here -->
		<div class="col-lg-12 col-md-12 col-sm-12 colxs-12">
			<div class="calc-main clearfix">
				<h1>Mortgage Calculator</h1>
			
		<!-- Static calc ui ends here -->
		
		
		
<?php
    /*
        PHP Mortgage Calculator
        version: 1.1
        last update: Jan 1, 2003
        ----------------------------------------------------
        The PHP Mortgage Calculator tries to figure out a home 
        owners mortgage payments, and the breakdown of each monthly
        payment.
        
        The calculator accepts:
            Price (cost of home in US Dollars)
            Percentage of Down Payment
            Length of Mortgage
            Annual Interest Rate
        
        Based on the four items that the user enters, we can figure
        out the down payment (in US Dollars), the ammount that the 
        buyer needs to finance, and the monthly finance payment. 
        The calculator can also break down the monthly payments 
        so we know how much goes towards the mortgage's interest, 
        the mortgage's principal, the loan's Private Mortgage Insurance 
        (if less that 20% was used as a down payment), and an rough 
        estimate of the property's residential tax
        
        [ See below for LICENSE ]
    */
    
    /* --------------------------------------------------- *
     * Set Form DEFAULT values
     * --------------------------------------------------- */
    $default_sale_price              = "150000";
    $default_annual_interest_percent = 7.0;
    $default_year_term               = 30;
    $default_down_percent            = 10;
    $default_show_progress           = TRUE;
    /* --------------------------------------------------- */
    


    /* --------------------------------------------------- *
     * Initialize Variables
     * --------------------------------------------------- */
    $sale_price                      = 0;
    $annual_interest_percent         = 0;
    $year_term                       = 0;
    $down_percent                    = 0;
    $this_year_interest_paid         = 0;
    $this_year_principal_paid        = 0;
    $form_complete                   = false;
    $show_progress                   = false;
    $monthly_payment                 = false;
    $show_progress                   = false;
    $error                           = false;
    /* --------------------------------------------------- */


    /* --------------------------------------------------- *
     * Set the USER INPUT values
     * --------------------------------------------------- */
    if (isset($_REQUEST['form_complete'])) {
        $sale_price                      = $_REQUEST['sale_price'];
        $annual_interest_percent         = $_REQUEST['annual_interest_percent'];
        $year_term                       = $_REQUEST['year_term'];
        $down_percent                    = $_REQUEST['down_percent'];
        $show_progress                   = (isset($_REQUEST['show_progress'])) ? $_REQUEST['show_progress'] : false;
        $form_complete                   = $_REQUEST['form_complete'];
    }
    /* --------------------------------------------------- */
    
    
    // If HTML headers have not already been sent, we'll print some here    
    if (!headers_sent()) {
       // print("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'><HTML>");
       // print("<head><title>Mortgage Calculator</title></HEAD><BODY>");
       // print("<body bgcolor='#ffffff'>");
       //print("<H1 style='margin-bottom: 35px;'> Mortgage Calculator</h1>");
        //print("<hr>\n\n");
        $print_footer = TRUE;
    } else {
       $print_footer = FALSE;
    }
    
    // Style Sheet
    ?>
    <style type="text/css">
        <!--
            td {
                font-size : 11px; 
                font-family : tahoma, helvetica, arial, lucidia, sans-serif; 
                color : #000000; 
            }
        -->
    </style> 


    <?php    
    /* --------------------------------------------------- */
    // This function does the actual mortgage calculations
    // by plotting a PVIFA (Present Value Interest Factor of Annuity)
    // table...
    function get_interest_factor($year_term, $monthly_interest_rate) {
        global $base_rate;
        
        $factor      = 0;
        $base_rate   = 1 + $monthly_interest_rate;
        $denominator = $base_rate;
        for ($i=0; $i < ($year_term * 12); $i++) {
            $factor += (1 / $denominator);
            $denominator *= $base_rate;
        }
        return $factor;
    }        
    /* --------------------------------------------------- */

    // If the form is complete, we'll start the math
    if ($form_complete) {
        // We'll set all the numeric values to JUST
        // numbers - this will delete any dollars signs,
        // commas, spaces, and letters, without invalidating
        // the value of the number
        $sale_price              = preg_replace( "[^0-9.]", "", $sale_price);
        $annual_interest_percent = preg_replace("[^0-9.]", "", $annual_interest_percent);
        $year_term               = preg_replace("[^0-9.]", "", $year_term);
        $down_percent            = preg_replace("[^0-9.]", "", $down_percent);
        
        if (((float) $year_term <= 0) || ((float) $sale_price <= 0) || ((float) $annual_interest_percent <= 0)) {
            $error = "You must enter a <b>Sale Price of Home</b>, <b>Length of Motgage</b> <i>and</i> <b>Annual Interest Rate</b>";
        }
        
        if (!$error) {
            $month_term              = $year_term * 12;
            $down_payment            = $sale_price * ($down_percent / 100);
            $annual_interest_rate    = $annual_interest_percent / 100;
            $monthly_interest_rate   = $annual_interest_rate / 12;
            $financing_price         = $sale_price - $down_payment;
            $monthly_factor          = get_interest_factor($year_term, $monthly_interest_rate);
            $monthly_payment         = $financing_price / $monthly_factor;
        }
    } else {
        if (!$sale_price)              { $sale_price              = $default_sale_price;              }
        if (!$annual_interest_percent) { $annual_interest_percent = $default_annual_interest_percent; }
        if (!$year_term)               { $year_term               = $default_year_term;               }
        if (!$down_percent)            { $down_percent            = $default_down_percent;            }
        if (!$show_progress)           { $show_progress           = $default_show_progress;           }
    }
    
    if ($error) {
        print("<font color=\"red\">" . $error . "</font><br><br>\n");
        $form_complete   = false;
    }
?>

<form method="GET" name="information" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="form_complete" value="1">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="top-head">
			Purchase &amp; Financing Information
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="white-box">
			<label>Sale Price of Home:</label>
			<input type="text" class="input" size="10" name="sale_price" value="<?php echo $sale_price; ?>"><span class="value-sec">(In $)</span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="white-box">
			<label>Percentage Down:</label>
			<input type="text" class="input" size="5" name="down_percent" value="<?php echo $down_percent; ?>"><span class="value-sec">%</span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="white-box">
			<label>Length of Mortgage:</label>
			<input type="text" class="input" size="3" name="year_term" value="<?php echo $year_term; ?>"><span class="value-sec">years</span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="white-box">
			<label>Annual Interest Rate:</label>
			<input type="text" class="input" size="5" name="annual_interest_percent" value="<?php echo $annual_interest_percent; ?>"><span class="value-sec">%</span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="chk-box">
			<label>Explain Calculations:</label>
			<input type="checkbox" class="chk-input" name="show_progress" value="1" <?php if ($show_progress) { print("checked"); } ?>> 
			<span class="value-sec">Show me the calculations and amortization</span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="chk-box text-right">
			<input type="submit" value="Calculate" class="btn-calc"/>
		</div>
	</div>
</div>
<!--<table cellpadding="2" cellspacing="0" border="0" >-->
    <!--<tr valign="top">
        <td align="right"><img src="/images/clear.gif" width="225" height="1" border="0" alt=""></td>
        <td align="smalltext" ><img src="/images/clear.gif" width="250" height="1" border="0" alt=""></td>
    </tr>
    <tr valign="top">
        <td colspan="2" class="top-head">Purchase &amp; Financing Information</td>
    </tr>
    <tr valign="top">
        <td align="left">Sale Price of Home:</td>
        <td><input type="text" size="10" name="sale_price" value="<?php //echo $sale_price; ?>">(In Dollars)</td>
    </tr>
    <tr valign="top">
        <td align="left">Percentage Down:</td>
        <td><input type="text" size="5" name="down_percent" value="<?php //echo $down_percent; ?>">%</td>
    </tr>
    <tr valign="top">
        <td align="left">Length of Mortgage:</td>
        <td><input type="text" size="3" name="year_term" value="<?php //echo $year_term; ?>">years</td>
    </tr>
    <tr valign="top">
        <td align="left">Annual Interest Rate:</td>
        <td><input type="text" size="5" name="annual_interest_percent" value="<?php //echo $annual_interest_percent; ?>">%</td>
    </tr>
    <tr valign="top">
        <td align="left">Explain Calculations:</td>
        <td><input type="checkbox" name="show_progress" value="1" <?php //if ($show_progress) { print("checked"); } ?>> 
        Show me the calculations and amortization</td>
    </tr>
    <tr valign="top" >
        <td>&nbsp;</td>
        <td><input type="submit" value="Calculate"><br>
        <?php //if ($form_complete) { print("<a href=\"" . $_SERVER['PHP_SELF'] . "\">Start Over</a><br>"); } ?><br></td>
    </tr>-->
<?php
    // If the form has already been calculated, the $down_payment
    // and $monthly_payment variables will be figured out, so we
    // can show them in this table
    if ($form_complete && $monthly_payment) {
?>	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="top-head">
				Mortgage Payment Information
			</div>
			<div class="cont-box clearfix">
				<label>Down Payment:</label>
				<div class="cont"><?php echo "\$" . number_format($down_payment, "2", ".", ","); ?></div>
			</div>
			<div class="cont-box clearfix">
				<label>Amount Financed:</label>
				<div class="cont"><?php echo "\$" . number_format($financing_price, "2", ".", ","); ?></div>
			</div>
			<div class="cont-box clearfix">
				<label>Monthly Payment (Principal &amp; Interest only):</label>
				<div class="cont"><?php echo "\$" . number_format($monthly_payment, "2", ".", ","); ?></div>
			</div>
			<?php
				if ($down_percent < 20) {
					$pmi_per_month = 55 * ($financing_price / 100000);
			?>
					<div class="cont-box clearfix">
						<label><?php echo "\$" . number_format($pmi_per_month, "2", ".", ","); ?> to your monthly payment.</label>
					</div>
					<div class="cont-box clearfix">
						<label>Monthly Payment (Principal &amp; Interest, and PMI):</label>
						<div class="cont"><?php echo "\$" . number_format(($monthly_payment + $pmi_per_month), "2", ".", ","); ?></div>
					</div>
			<?php
				}
			?>
		
        <!--<tr valign="top">
            <td align="center" colspan="2" class="top-head">Mortgage Payment Information</td>
        </tr>
        <tr valign="top" >
            <td align="right">Down Payment:</td>
            <td><b><?php //echo "\$" . number_format($down_payment, "2", ".", ","); ?></b></td>
        </tr>
        <tr valign="top" >
            <td align="right">Amount Financed:</td>
            <td><b><?php //echo "\$" . number_format($financing_price, "2", ".", ","); ?></b></td>
        </tr>
        <tr valign="top">
            <td align="right">Monthly Payment:</td>
            <td><b><?php //echo "\$" . number_format($monthly_payment, "2", ".", ","); ?></b><br><font>(Principal &amp; Interest ONLY)</font></td>
        </tr>-->
        <?php
            //if ($down_percent < 20) {
                //$pmi_per_month = 55 * ($financing_price / 100000);
        ?>
                <!--<tr valign="top">
                    <td align="right">&nbsp;</td>
                    <td>
                        <br>
                        <?php //echo "\$" . number_format($pmi_per_month, "2", ".", ","); ?> to your monthly payment.
                    </td>
                </tr>
                <tr valign="top">
                    <td align="right">Monthly Payment:</td>
                    <td><b><?php //echo "\$" . number_format(($monthly_payment + $pmi_per_month), "2", ".", ","); ?></b><br><font>
                    (Principal &amp; Interest, and PMI)</td>
                </tr>-->
        <?php
            //}
        ?>
        <!--<tr valign="top">-->
            <!--<td align="right">&nbsp;</td>-->
            <!--<td>-->
                <!--<br>-->
                <?php
                    $assessed_price          = ($sale_price * .85);
                    $residential_yearly_tax  = ($assessed_price / 1000) * 14;
                    $residential_monthly_tax = $residential_yearly_tax / 12;
                    
                    if ($pmi_per_month) {
                        $pmi_text = "PMI and ";
                    }
                ?>
				<div class="cont-box clearfix">
					<label>
						Residential (or Property) Taxes are a little harder to figure out... In Massachusetts, the average resedential tax rate seems
						 to be around $14 per year for every $1,000 of your property's assessed value.
						<br><br>
						Let's say that your property's <i>assessed value</i> is 85% of what you actually paid for it - 
						<?php echo "\$" . number_format($assessed_price, "2", ".", ","); ?>. This would mean that your yearly residential taxes will be around
						 <?php echo "\$" . number_format($residential_yearly_tax, "2", ".", ","); ?>
						This could add <?php echo "\$" . number_format($residential_monthly_tax, "2", ".", ","); ?> to your monthly payment.
					</label>
				</div>
                <!--Residential (or Property) Taxes are a little harder to figure out... In Massachusetts, the average resedential tax rate seems
                 to be around $14 per year for every $1,000 of your property's assessed value.
                <br><br>
                Let's say that your property's <i>assessed value</i> is 85% of what you actually paid for it - 
                <?php //echo "\$" . number_format($assessed_price, "2", ".", ","); ?>. This would mean that your yearly residential taxes will be around
                 <?php //echo "\$" . number_format($residential_yearly_tax, "2", ".", ","); ?>
                This could add <?php //echo "\$" . number_format($residential_monthly_tax, "2", ".", ","); ?> to your monthly payment.-->
            <!--</td>
        </tr>-->
			<div class="cont-box total clearfix">
				<label>TOTAL Monthly Payment (including <?php echo $pmi_text; ?> residential tax):</label>
				<div class="cont"><?php echo "\$" . number_format(($monthly_payment + $pmi_per_month + $residential_monthly_tax), "2", ".", ","); ?>
            </div>
			</div>
        <!--<tr valign="top">
            <td align="right">TOTAL Monthly Payment:</td>
            <td><b><?php echo "\$" . number_format(($monthly_payment + $pmi_per_month + $residential_monthly_tax), "2", ".", ","); ?></b><br><font>
            (including <?php echo $pmi_text; ?> residential tax)</font></td>
        </tr>-->
		</div>
	</div>
<?php    
    }
?>
<!--</table>-->
</form>
<?php
    // This prints the calculation progress and 
    // the instructions of HOW everything is figured
    // out
    if ($form_complete && $show_progress) {
        $step = 1;
?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="formula-sec">
				<div class="formula-inner">
					<span><?php echo $step++; ?>.</span>
					The <b>down payment</b>
                     = The price of the home multiplied by the percentage down divided by 100 (for 5% down becomes 5/100 or 0.05)<br><br>
                    $<?php echo number_format($down_payment,"2",".",","); ?> = $<?php echo number_format($sale_price,"2",".",","); ?> X 
                    (<?php echo $down_percent; ?> / 100)
				</div>
				<div class="formula-inner">
					<span><?php echo $step++; ?>.</span>
					The <b>interest rate</b> = The annual interest percentage divided by 100<br><br>
                    <?php echo $annual_interest_rate; ?> = <?php echo $annual_interest_percent; ?>% / 100
				</div>
				<div class="formula-inner-head">
					The <b>monthly factor</b> = The result of the following formula:
				</div>
				<div class="formula-inner">
					<span><?php echo $step++; ?>.</span>
					The <b>monthly interest rate</b> = The annual interest rate divided by 12 (for the 12 months in a year)<br><br>
                    <?php echo $monthly_interest_rate; ?> = <?php echo $annual_interest_rate; ?> / 12
				</div>
				<div class="formula-inner">
					<span><?php echo $step++; ?>.</span>
					The <b>monthly interest rate</b> = The annual interest rate divided by 12 (for the 12 months in a year)<br><br>
                    <?php echo $monthly_interest_rate; ?> = <?php echo $annual_interest_rate; ?> / 12
				</div>
				<div class="formula-inner">
					<span><?php echo $step++; ?>.</span>
					The montly payment is figured out using the following formula:<br>
                    Monthly Payment = <?php echo number_format($financing_price, "2", "", ""); ?> * 
                    (<?php echo number_format($monthly_interest_rate, "4", "", ""); ?> / 
                    (1 - ((1 + <?php echo number_format($monthly_interest_rate, "4", "", ""); ?>)
                    <sup>-(<?php echo $month_term; ?>)</sup>)))
                    <br><br>
                    The <a href="#amortization">amortization</a> breaks down how much of your monthly payment goes towards the bank's interest,
                     and how much goes into paying off the principal of your loan.
				</div>
			</div>
		</div>
	</div>
        
        <!--<table cellpadding="5" cellspacing="0" border="1" >-->
            <!--<tr valign="top">
                <td><b><?php //echo $step++; ?></b></td>
                <td>
                    The <b>down payment</b>
                     = The price of the home multiplied by the percentage down divided by 100 (for 5% down becomes 5/100 or 0.05)<br><br>
                    $<?php //echo number_format($down_payment,"2",".",","); ?> = $<?php //echo number_format($sale_price,"2",".",","); ?> X 
                    (<?php //echo $down_percent; ?> / 100)
                </td>
            </tr>
            <tr valign="top">
                <td><b><?php //echo $step++; ?></b></td>
                <td>
                    The <b>interest rate</b> = The annual interest percentage divided by 100<br><br>
                    <?php //echo $annual_interest_rate; ?> = <?php //echo $annual_interest_percent; ?>% / 100
                </td>
            </tr>
            <tr valign="top">
                <td colspan="2">
                    The <b>monthly factor</b> = The result of the following formula:
                </td>
            </tr>
            <tr valign="top">
                <td><b><?php //echo $step++; ?></b></td>
                <td>
                    The <b>monthly interest rate</b> = The annual interest rate divided by 12 (for the 12 months in a year)<br><br>
                    <?php //echo $monthly_interest_rate; ?> = <?php //echo $annual_interest_rate; ?> / 12
                </td>
            </tr>
            <tr valign="top">
                <td><b><?php //echo $step++; ?></b></td>
                <td>
                    The <b>month term</b> of the loan in months = The number of years you've taken the loan out for times 12<br><br>
                    <?php //echo $month_term; ?> Months = <?php //echo $year_term; ?> Years X 12
                </td>
            </tr>
            <tr valign="top">
                <td><b><?php //echo $step++; ?></b></td>
                <td>
                    The montly payment is figured out using the following formula:<br>
                    Monthly Payment = <?php //echo number_format($financing_price, "2", "", ""); ?> * 
                    (<?php //echo number_format($monthly_interest_rate, "4", "", ""); ?> / 
                    (1 - ((1 + <?php //echo number_format($monthly_interest_rate, "4", "", ""); ?>)
                    <sup>-(<?php //echo $month_term; ?>)</sup>)))
                    <br><br>
                    The <a href="#amortization">amortization</a> breaks down how much of your monthly payment goes towards the bank's interest,
                     and how much goes into paying off the principal of your loan.
                </td>
            </tr>
        </table>-->
        
<?php
        // Set some base variables
        $principal     = $financing_price;
        $current_month = 1;
        $current_year  = 1;
        // This basically, re-figures out the monthly payment, again.
        $power = -($month_term);
        $denom = pow((1 + $monthly_interest_rate), $power);
        $monthly_payment = $principal * ($monthly_interest_rate / (1 - $denom));
?>		
     <div class="top-head margtop_30">
		<a name="amortization"></a>Amortization For Monthly Payment: <b>$<?php echo number_format($monthly_payment, "2", ".", ","); ?> </b> over <?php echo $year_term; ?> years</div><br>
	
	<div class="table-responsive">	
        <table class="table table-striped table-hover" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
<?php        
        // This LEGEND will get reprinted every 12 months
        $legend  = "\t<tr valign=\"top\">\n";
        $legend .= "\t\t<td align=\"center\"><b>Month</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Interest Paid</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Principal Paid</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Remaing Balance</b></td>\n";
        $legend .= "\t</tr>\n";
        
        echo $legend;
                
        // Loop through and get the current month's payments for 
        // the length of the loan 
        while ($current_month <= $month_term) {        
            $interest_paid     = $principal * $monthly_interest_rate;
            $principal_paid    = $monthly_payment - $interest_paid;
            $remaining_balance = $principal - $principal_paid;
            
            $this_year_interest_paid  = $this_year_interest_paid + $interest_paid;
            $this_year_principal_paid = $this_year_principal_paid + $principal_paid;
            
            print("\t<tr valign=\"top\">\n");
            print("\t\t<td align=\"center\">" . $current_month . "</td>\n");
            print("\t\t<td align=\"right\">\$" . number_format($interest_paid, "2", ".", ",") . "</td>\n");
            print("\t\t<td align=\"right\">\$" . number_format($principal_paid, "2", ".", ",") . "</td>\n");
            print("\t\t<td align=\"right\">\$" . number_format($remaining_balance, "2", ".", ",") . "</td>\n");
            print("\t</tr>\n");
    
            ($current_month % 12) ? $show_legend = FALSE : $show_legend = TRUE;
    
            if ($show_legend) {
                print("\t<tr valign=\"top\" bgcolor=\"#ffffcc\" style=\"background-color:#ffffcc !important;\">\n");
                print("\t\t<td align=\"center\"><b>Totals for year " . $current_year . "</td>\n");
				$total_spent_this_year = $this_year_interest_paid + $this_year_principal_paid;
				print("\t\t<td colspan=\"3\">\n");
                print("\t\t\tYou will spend \$" . number_format($total_spent_this_year, "2", ".", ",") . " on your house in year " . $current_year . "<br>\n");
                print("\t\t\t\$" . number_format($this_year_interest_paid, "2", ".", ",") . " will go towards INTEREST<br>\n");
                print("\t\t\t\$" . number_format($this_year_principal_paid, "2", ".", ",") . " will go towards PRINCIPAL<br>\n");
                print("\t\t</td>\n");
                print("\t</tr>\n");
                
                
                //print("\t<tr valign=\"top\" bgcolor=\"#ffffcc\">\n");
                //print("\t\t<td>&nbsp;</td>\n");
                
                //print("\t</tr>\n");
    
                print("\t<tr valign=\"top\" bgcolor=\"#ffffff\" border=\"0\">\n");
                print("\t\t<td colspan=\"4\" border=\"0\">&nbsp;<br><br></td>\n");
                print("\t</tr>\n");
                
                $current_year++;
                $this_year_interest_paid  = 0;
                $this_year_principal_paid = 0;
                
                if (($current_month + 6) < $month_term) {
                    echo $legend;
                }
            }
    
            $principal = $remaining_balance;
            $current_month++;
        }
        print("</table>\n");
    }
?>
	</div>
<br>

<!-- END BODY -->



<?php
/*
    ///// mortgage_calculator.php /////
    Copyright (c) 2002 David Tufts <http://dave.imarc.net> 
    All rights reserved.
    
    Redistribution and use in source and binary forms, with or without 
    modification, are permitted provided that the following conditions 
    are met:
    
    *    Redistributions of source code must retain the above copyright 
     notice, this list of conditions and the following disclaimer.
    *    Redistributions in binary form must reproduce the above 
     copyright notice, this list of conditions and the following 
     disclaimer in the documentation and/or other materials 
     provided with the distribution.
    *    Neither the name of David Tufts nor the names of its 
     contributors may be used to endorse or promote products 
     derived from this software without specific prior 
     written permission.
    
    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND 
    CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, 
    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF 
    MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS 
    BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, 
    EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED 
    TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, 
    DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON 
    ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, 
    OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY 
    OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
    POSSIBILITY OF SUCH DAMAGE.
*/
?> 
        </div>
		</div>
		</div>
    </div>
</div>