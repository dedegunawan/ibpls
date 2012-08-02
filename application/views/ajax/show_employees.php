<table width="100%" border="0" class="type-one">
    <tr class="type-one-header">
      <th width="2%" bgcolor="#D6D6D6"><input name="checkall" type="checkbox" id="checkall" value="1"/>
      </td>              </th>
      <th width="15%" bgcolor="#D6D6D6"><strong>Employee No.</strong></th>
      <th width="26%" bgcolor="#D6D6D6"><strong>Employee Name</strong></th>
      <th width="57%" bgcolor="#D6D6D6"><strong>Department / Office</strong></th>
    </tr>
    <?php 
   
foreach($rows as $row)
{
    $fname 			= $row['fname'];
    $mname 			= $row['mname'];
    $lname 			= $row['lname'];
    $employee_id	= $row['employee_id'];
    $office_id		= $row['office_id'];
    $office_name 	= $this->Office->get_office_name($office_id);
    $bg 			= $this->Helps->set_line_colors();
    
    ?>
        <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '<?php echo $this->config->item('mouseover_linecolor')?>';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';">
          <td><input name="employee[]" type="checkbox" value="<?php echo $employee_id;?>" ONCLICK="highlightRow(this,'#ABC7E9');" class="employee_checked"/></td>
          <td><?php echo $employee_id;?></td>
          <td><?php echo $lname.', '.$fname.' '.$mname;?></td>
          <td><?php echo $office_name;?></td>
        </tr>
        <?php
    
    }
  ?>
    <tr>
      <td colspan="2">
      <input type="submit" name="Submit2" value="View DTR" class="button"/></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
  </table>
<script>
$('#checkall').click(function(){

	if ($('#checkall').attr("checked") == "checked")
	{
		$('.employee_checked').attr("checked", true);
	}
	else
	{
		$('.employee_checked').attr("checked", false);
	}
	
});
</script>