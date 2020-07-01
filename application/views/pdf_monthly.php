
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
        margin: 100px 25px;
        size: letter portrait;
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
      header{
        position: static;
        
      }

      result{
        position: absolute;
      }

      footer{
        position: fixed;
        

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
        color: red;
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
      .header {
        position: fixed;
      }

      .footer .page-number:after { content: counter(page); }

      .footer {
        position: fixed;
        bottom: 30px;
        text-align: center;
        color: #ffffff;
        background: red;
        padding: 10px 0px;
        width: 100%;
        font-size: 10px;
      }

      .signatories {
        position: fixed;
        bottom: 120px;
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
        font-size: 9px;
      }
      .t-left2 {
        color: black;
        padding-top: 3px;
        padding-left: 3px;
        padding-bottom: 6px;
        font-size: 9px;
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
  <header>
    <div class="image-container">
    <!-- LOGO BEGIN HERE  -->
    
    <center><img  src= "<?php echo DERUSNI_LOGO_PATH; ?>" height = "150" width = "130"></center>
    <!-- LOGO END HERE -->
    </div>
  <!--<div style="color: #303c92;font-size:12px;font-weight:bold;text-align:right;padding-right:40px;">Date Printed: <?php print date('F d, Y'); ?></div>
    -->
    <div>
    
    <div style="position:fixed;width:100%;padding:0px 30px;">
    
      <div style="position:fixed;padding-top:130px;"><center><h1>EMJGC DISENO AND KONSTRUCT</h1></center></div>
      <div style="position:fixed;padding-top:170px;"><center>EXPENSES OF <?php foreach($site_info as $s_row): print $s_row->site_name; endforeach?></center></div>
      <br>
      
      <table style="position:fixed;padding-top:190px;padding-left:40px; width:100%;">
        <tr>
          <td align  = "left" style="width:40%;">
           <span class = "t-left">DATE FROM: <?php print date('F d, Y',strtotime(date($date_from)))?></span>
          </td>  
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:30%;">
           
          </td>  
          <td align = "right" style="width:30%;">
           <span class = "t-left">DATE TO: <?php print date('F d, Y',strtotime(date($date_to)))?></span>
          </td>  
          
         </tr>
         
        </table>
      <table>
        <tr>
          <td style="padding-left:0px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:40%;">
           
          </td>  
          <td style="padding-left:10px;padding-right:10px;padding-top:0px;padding-bottom:0px;width:30%;">           
          </td>  
          <td style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;width:40%;">
           
          </td>  
          
         </tr>
        </table>
      <hr style="position:fixed;padding-top:220px;padding-left:90px;padding-right:90px;">
    </div>
      <table style="position:fixed;padding-top:230px;padding-left:5px;padding-right:5px;">
      <!-- Panel header Here -->
        
        <tr>
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">SUPPLIER</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">ADDRESS</span>
          </th>  
          
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">TIN #</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">DESCRIPTION</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">DETAILS</span>
          </th>  
            <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">QUANTITY</span>
          </th>  
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">UNIT COST</span>
          </th>
          <th class= "quotation" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left">AMOUNT</span>
          </th>  
         
         </tr>
        </table>
  </div>
</header>
      
        <table style="position:relative;padding-top:120px;padding-left:5px;padding-right:5px;padding-bottom:100px;">
         <?php foreach($project_details as $proj_row):?>
         <tr>
          <td  style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print $proj_row->supplier_name;?></span>
          </td>  
          <td align = "left" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print $proj_row->address;?></span>
            
          </td>
          <td align = "left" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print $proj_row->tin;?></span>
            
          </td>
          <td align = "left" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print $proj_row->phase_description;?></span>
            
          </td>
          <td align = "left" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print $proj_row->details;?></span>
            
          </td>
          <td align = "right" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print number_format($proj_row->qty,2);?></span>
            
          </td>
          <td align = "right" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print "P ".number_format($proj_row->unit_cost,2);?></span>
            
          </td>
          <td align = "right" style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;width:12.5%;">
            <span class = "t-left2"><?php print "P ".number_format($proj_row->total_amount,2);?></span>
            
          </td>
         </tr>
         
         <?php 
         endforeach;?>
      </table>
      
      
      <footer>
      <div class = "signatories" style="padding-left:10px;padding-right:10px;">
      <br>
      <hr>
      
      <table >
      
         
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
      Copyright <?php print date('Y'); ?> - EMJGC - DATE RANGE EXPENSES 
    </div>
  </footer>  

  </body>
</html>
