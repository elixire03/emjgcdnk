
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
      * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }
      body,
      @page,
      html {
        width: 100%;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        text-transform: uppercase;
      }
      body {
        position: relative;
        height: 100%;
      }
      .half {
        display: inline-block;
        margin-right: -4px;
        width: 100%;
        vertical-align: top;
      }
      h2.borderblue {
        border-bottom: 1px solid #e3e3e3;
        color: #303c92;
        font-size: 14px;
        font-weight: bold;
        padding-bottom: 5px;
      }
      h1 {
        color: #303c92;
        font-size: 23px;
        font-weight: bold;
      }
      span.field,
      span.value {
        display: inline-block;
        margin-right: -4px;
        width: 50%;
        vertical-align: top;
        color: #a7a8aa;
        padding: 6px 0px;
        font-size: 12px;
      }
      .b-bottom {
        border-bottom: 1px solid #d8d4db;
      }
      span.value {
        color: #555455;
      }
      section {
        margin: 10px 0px;
      }
      .footer {
        position: absolute;
        bottom: 0px;
        text-align: center;
        color: #ffffff;
        background: #5263aa;
        padding: 10px 0px;
        width: 100%;
        font-size: 10px;
      }

      .signatories {
        position: absolute;
        bottom: 30px;
        text-align: center;
        color: black;
        background: #ffffff;
        padding: 10px 0px;
        width: 100%;
        font-size: 10px;
      }

      th,
      tr,
      td,
      table {
        vertical-align: top;
        width: 100%;
        border: 1;
        margin: 0px;
        padding: 0px;
      }
      td {
        width: 50%;
      }
      .quotation {
        background: white;
        padding: 1px;
        border: 3px solid #d4cfe1;
      }
      h3 {
        color: #5868ad;
        font-size: 11px;
        font-weight: bold;
      }
      .t-right {
        text-align: right;
        padding-right: 20px;
        color: #939597;
        font-size: 11px;
        padding-top: 3px;
        padding-bottom: 6px;
      }
      .t-left {
        color: black;
        padding-top: 3px;
        padding-left: 3px;
        padding-bottom: 6px;
        font-size: 11px;
      }
      .black {
        color: #404041;
      }
      .p-bottom {
        padding-bottom: 12px;
      }
      .p-top {
        padding-top: 12px;
      }
      .p-left {
        padding-left: 10px;
      }
      .b-bottom {
        border-bottom: 1px solid #d8d4db;
      }
    </style>
  </head>

  <body>
  
    <div class="image-container">
    <!-- LOGO BEGIN HERE  -->
    <br>
    <center><img src= "<?php echo DERUSNI_LOGO_PATH; ?>" height = "150" width = "130"></center>
    <!-- LOGO END HERE -->
    </div>
  <!--<div style="color: #303c92;font-size:12px;font-weight:bold;text-align:right;padding-right:40px;">Date Printed: <?php print date('F d, Y'); ?></div>
    -->
    <div style="position:relative;width:100%;padding:0px 30px;">
    
      <div><center><h1>EMJGC DISENO AND KONSTRUCT</h1></center></div>
      <div style="padding-top:-15px"><center>Budget Summary</center></div>
      <br>
      
      <table>
        <tr>
          <td align  = "left" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:60%;">
           PROJECT: <?php foreach($site_info as $s_row): print $s_row->site_code." - ".$s_row->site_name; endforeach;
            $site_code = $s_row->site_code;
          ?>
            
            
          </td>  
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:5%;">
           
          </td>  
          <td align = "right" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:35%;">
            Date: <?php print date('F d, Y',strtotime(date('Y-m-d')))?>
          </td>  
          
         </tr>
        </table>
      <table>
        <tr>
          <td style="padding-left:0px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:60%;">
           
          </td>  
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:5%;">           
          </td>  
          <td style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:35%;">
           
          </td>  
          
         </tr>
        </table>
      <hr>
      
      <table>
      <!-- Panel header Here -->
        
        <tr>
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:25%;">
            <span class = "t-left">PHASE CODE</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:25%;">
            <span class = "t-left">DESCRIPTION</span>
          </th>  
          
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:25%;">
            <span class = "t-left">BUDGET COST</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:25%;">
            <span class = "t-left">EXPENSE COST</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:25%;">
            <span class = "t-left">REMAINING BUDGET</span>
          </th>  
         
         </tr>
         
         
         <?php foreach($project_details as $proj_row):?>
         <tr>
          <td align= "center" style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:25%;">
            <span class = "t-left"><?php print $proj_row->phase_code;?></span>
            
          </td>  
          <td align= "left" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:25%;">
            <span class = "t-left"><?php print $proj_row->phase_description;?></span>
          </td>  
          
          <td align= "right" style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:25%;">
            <span class = "t-left"><?php print "P".number_format($proj_row->budget_cost,2);?></span>
          </td>  
          <td align= "right" style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:25%;">
            <span class = "t-left"><?php
            $total_expences= $this->user_model->total_exp_amount($site_code,$proj_row->id);
							if($total_expences->num_rows()>0):
								$total_expences = $total_expences->result();
								$this_expences = $total_expences[0]->total_amount;
							$remaining = $proj_row->budget_cost - $this_expences;
                print "P ".number_format($this_expences,2);
              else:

                print 'P 0.00';
							endif;
		          ?></span>
          </td>
          <td align= "right" style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:25%;">
            <span class = "t-left"><?php
                    
            print " P&nbsp;&nbsp;".number_format($remaining,2);?></span>
          </td>  
         </tr>
         <tr>
          <td style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:25%;">
            
          </td>  

          <td valign = "center" style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:50%;">
            
            
          </td>  
          <td valign = "center" style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:25%;">
            <span class = "t-left"></span>
            
          </td>  
          
         </tr>
         <?php endforeach;?>
      </table>
      <!--<table>
         <tr>
          <td style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:20%;">
            Audited By:___________________
          </td>  
          <td style="padding-left:10px;padding-right:0px;padding-top:10x;padding-bottom:10px;width:20%;">
          </td>
          
          <td style="padding-left:10px;padding-right:10px;padding-top:1px;padding-bottom:1px;width:20%;">
           Recieved By:____________________  
          </td>  
          <td style="padding-left:10px;padding-right:0px;padding-top:10x;padding-bottom:10px;width:20%;">
          </td>
          <td style="padding-left:10px;padding-right:0px;padding-top:10x;padding-bottom:10px;width:20%;">
           Discount    : 
           <br>
           Vat         :
           <br>
           
          </td>  
         </tr>
        </table>
        -->
      
      <table>
      <tr>
          <td style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:33%;">
            
          </td>  
          <td align= "right" style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:33%;">
        
          </td>  
          <td align= "right" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:34%;">
           
           <span class = "t-left">
            </b></span>
          </td>  
          
         </tr>
        
         <tr>
          <td style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:33%;">
            <hr>
          </td>  
          <td align= "center" style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:33%;">
            ***NOTHING FOLLOW ***
          </td>  
          <td style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:34%;">
            <hr>
          </td>  
          
         </tr>
        </table>
        
      <div class = "signatories">
      <br>
      <hr>
      <table>
      <!-- Panel header Here -->
        
        
         
         <tr>
          <td align = "center" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:0px;width:33%;">
            <span class = "t-left"></span>
          </td>  
          <td align = "center" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:0px;width:33%;">
            
          </td>  
          <td align = "center" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:0px;width:34%;">
            <span class = "t-left">ENG'R. MARK JOSEPH G. CUNTAPAY</span>
          </td>  
          
         </tr>
         
         <tr>
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:33%;">
            <hr>
          </td>  
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:33%;">
            
          </td>  
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:34%;">
            <hr>
          </td>  
          
         </tr>
         <tr>
          <td align = "center" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:33%;">
            <span class = "t-left">Prepared By</span>
          </td>  
          <td align = "center" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:33%;">
           
          </td>  
          <td align = "center" style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:34%;">
            <span class = "t-left">Noted By</span>
          </td>  
          
         </tr>
         
      </table>
      </div>
    </div>
    <div class="footer">
      Copyright <?php print date('Y'); ?> - EMJGC - BUDGET SUMMARY
    </div>

  </body>
</html>
