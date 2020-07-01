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
      <div style="position:fixed;padding-top:170px;"><center>EXPENCES OF <?php foreach($site_info as $s_row): print $s_row->site_name; endforeach?></center></div>
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