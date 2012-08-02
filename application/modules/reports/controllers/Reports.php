<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//http://codeigniter.com/forums/viewthread/91996/
class Reports extends MX_Controller
{
	var $pds = array();
	
	function __construct()
    {
        parent::__construct();
    }
	
	function Reports()
	{
		parent::Controller();
	}
	
	function page1($employee_id)
	{
		
		$this->load->helper('settings');
		
		$this->load->library('fpdf');
		
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
					
		$this->load->library('fpdi');
		
		$this->load->model('Personal_Info');
		
		//Get personal info
		$pi = $this->Personal_Info->get_personal_info($employee_id);
		
		//print_r($personal_info);	
		// initiate FPDI   
		$pdf =& new FPDI('P','mm','Legal');
		
		// add a page
		$pdf->AddPage();
		// set the sourcefile
		$pdf->setSourceFile('resources/pdfs/page1.pdf');
		// import page 1
		$tplIdx = $pdf->importPage(1);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		// now write some text above the imported page
		$pdf->SetFont('Arial');
		$pdf->SetTextColor(0,0,0);
		
		/*******************************
		 *START PERSONAL INFORMATION ==
		 ******************************/
		
		$split = str_split($pi['lname']);
		
		// Write something ==LAST NAME =========
		$pdf->SetXY(39, 53);
		$pdf->Write(0, $split[0]);
		$pdf->SetX(44);
		$pdf->Write(0, $split[1]);
		$pdf->SetX(49);
		$pdf->Write(0, $split[2]);
		$pdf->SetX(54);
		$pdf->Write(0, $split[3]);
		$pdf->SetX(60);
		$pdf->Write(0, $split[4]);
		$pdf->SetX(65);
		$pdf->Write(0, $split[5]);
		$pdf->SetX(70);
		$pdf->Write(0, $split[6]);
		$pdf->SetX(75);
		$pdf->Write(0, $split[7]);
		$pdf->SetX(81);
		$pdf->Write(0, $split[8]);
		$pdf->SetX(86);
		$pdf->Write(0, $split[9]);
		$pdf->SetX(91);
		$pdf->Write(0, $split[10]);
		$pdf->SetX(96);
		$pdf->Write(0, $split[11]);
		$pdf->SetX(101);
		$pdf->Write(0, $split[12]);
		$pdf->SetX(106);
		$pdf->Write(0, $split[13]);
		$pdf->SetX(111);
		$pdf->Write(0, $split[14]);
		$pdf->SetX(116);
		$pdf->Write(0, $split[15]);
		$pdf->SetX(121);
		$pdf->Write(0, $split[16]);
		$pdf->SetX(126);
		$pdf->Write(0, $split[17]);
		$pdf->SetX(131);
		$pdf->Write(0, $split[18]);
		$pdf->SetX(137);
		$pdf->Write(0, $split[19]);
		$pdf->SetX(142);
		$pdf->Write(0, $split[20]);
		$pdf->SetX(147);
		$pdf->Write(0, $split[21]);
		$pdf->SetX(152);
		$pdf->Write(0, $split[22]);
		$pdf->SetX(157);
		$pdf->Write(0, $split[23]);
		$pdf->SetX(163);
		$pdf->Write(0, $split[24]);
		$pdf->SetX(168);
		$pdf->Write(0, $split[25]);
		$pdf->SetX(173);
		$pdf->Write(0, $split[26]);
		$pdf->SetX(178);
		$pdf->Write(0, $split[27]);
		$pdf->SetX(183);
		$pdf->Write(0, $split[28]);
		$pdf->SetX(188);
		$pdf->Write(0, $split[29]);
		// line break
		
		//=========FIRST NAME==== 
		$split = str_split($pi['fname']);
		
		$pdf->Ln(6);
		$pdf->SetX(39);
		$pdf->Write(0, $split[0]);
		$pdf->SetX(44);
		$pdf->Write(0, $split[1]);
		$pdf->SetX(49);
		$pdf->Write(0, $split[2]);
		$pdf->SetX(54);
		$pdf->Write(0, $split[3]);
		$pdf->SetX(60);
		$pdf->Write(0, $split[4]);
		$pdf->SetX(65);
		$pdf->Write(0, $split[5]);
		$pdf->SetX(70);
		$pdf->Write(0, $split[6]);
		$pdf->SetX(75);
		$pdf->Write(0, $split[7]);
		$pdf->SetX(81);
		$pdf->Write(0, $split[8]);
		$pdf->SetX(86);
		$pdf->Write(0, $split[9]);
		$pdf->SetX(91);
		$pdf->Write(0, $split[10]);
		$pdf->SetX(96);
		$pdf->Write(0, $split[11]);
		$pdf->SetX(101);
		$pdf->Write(0, $split[12]);
		$pdf->SetX(106);
		$pdf->Write(0, $split[13]);
		$pdf->SetX(111);
		$pdf->Write(0, $split[14]);
		$pdf->SetX(116);
		$pdf->Write(0, $split[15]);
		$pdf->SetX(121);
		$pdf->Write(0, $split[16]);
		$pdf->SetX(126);
		$pdf->Write(0, $split[17]);
		$pdf->SetX(131);
		$pdf->Write(0, $split[18]);
		$pdf->SetX(137);
		$pdf->Write(0, $split[19]);
		$pdf->SetX(142);
		$pdf->Write(0, $split[20]);
		$pdf->SetX(147);
		$pdf->Write(0, $split[21]);
		$pdf->SetX(152);
		$pdf->Write(0, $split[22]);
		$pdf->SetX(157);
		$pdf->Write(0, $split[23]);
		$pdf->SetX(163);
		$pdf->Write(0, $split[24]);
		$pdf->SetX(168);
		$pdf->Write(0, $split[25]);
		$pdf->SetX(173);
		$pdf->Write(0, $split[26]);
		$pdf->SetX(178);
		$pdf->Write(0, $split[27]);
		$pdf->SetX(183);
		$pdf->Write(0, $split[28]);
		$pdf->SetX(188);
		$pdf->Write(0, $split[29]);
		
		
		//======== MNAME
		$split = str_split($pi['mname']);
		// line break
		$pdf->Ln(6);
		$pdf->SetX(39);
		$pdf->Write(0, $split[0]);
		$pdf->SetX(44);
		$pdf->Write(0, $split[1]);
		$pdf->SetX(49);
		$pdf->Write(0, $split[2]);
		$pdf->SetX(54);
		$pdf->Write(0, $split[3]);
		$pdf->SetX(60);
		$pdf->Write(0, $split[4]);
		$pdf->SetX(65);
		$pdf->Write(0, $split[5]);
		$pdf->SetX(70);
		$pdf->Write(0, $split[6]);
		$pdf->SetX(75);
		$pdf->Write(0, $split[7]);
		$pdf->SetX(81);
		$pdf->Write(0, $split[8]);
		$pdf->SetX(86);
		$pdf->Write(0, $split[9]);
		$pdf->SetX(91);
		$pdf->Write(0, $split[10]);
		$pdf->SetX(96);
		$pdf->Write(0, $split[11]);
		$pdf->SetX(101);
		$pdf->Write(0, $split[12]);
		$pdf->SetX(106);
		$pdf->Write(0, $split[13]);
		$pdf->SetX(111);
		$pdf->Write(0, $split[14]);
		$pdf->SetX(116);
		$pdf->Write(0, $split[15]);
		$pdf->SetX(121);
		$pdf->Write(0, $split[16]);
		$pdf->SetX(126);
		$pdf->Write(0, $split[17]);
		$pdf->SetX(131);
		$pdf->Write(0, $split[18]);
		$pdf->SetX(137);
		$pdf->Write(0, $split[19]);
		$pdf->SetX(142);
		$pdf->Write(0, $split[20]);
		$pdf->SetX(147);
		$pdf->Write(0, $split[21]);
		$pdf->SetX(152);
		$pdf->Write(0, $split[22]);
		$pdf->SetX(157);
		$pdf->Write(0, $split[23]);
		$pdf->SetX(163);
		$pdf->Write(0, $split[24]);
		$pdf->SetX(168);
		$pdf->Write(0, $split[25]);
		$pdf->SetX(173);
		$pdf->Write(0, $split[26]);
		$pdf->SetX(178);
		$pdf->Write(0, $split[27]);
		$pdf->SetX(183);
		$pdf->Write(0, $split[28]);
		$pdf->SetX(188);
		$pdf->Write(0, $split[29]);
		
		$pdf->SetX(189);
		$pdf->Write(0, $pi['extension']);
		
		$date = $pi['birth_date'];
		list($year, $month, $day) = split('[-.-]', $date);
		$pdf->Ln(6);
		$pdf->SetX(67);
		$pdf->Write(0, $month.'-'.$day.'-'.$year);
		
		$res_address = splitstroverflow($pi['res_address'], 30);
		
		$pdf->SetX(126);
		$pdf->Write(0, $res_address[0]);
		
		$pdf->Ln(4);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['birth_place']);
		
		$pdf->SetX(126);
		$pdf->Write(0, $res_address[1]);
		
		
		$pdf->Ln(5);
		if ($pi['sex'] == 'M')
		{
			$setx = 41.5;
		}
		
		if ($pi['sex'] == 'F')
		{
			$setx = 58;
		}
		$pdf->SetX($setx);
		$pdf->Write(0, 'X');
		
		//$pdf->SetX(126);
		//$pdf->Write(0, $res_address[2]);
		
		if ($pi['civil_status'] == 1)
		{
			$pdf->SetXY(41.5, 85);
			$pdf->Write(0, 'X');
		}
		
		if ($pi['civil_status'] == 2)
		{
			$pdf->SetXY(41.5, 89);
			$pdf->Write(0, 'X');
		}
		if ($pi['civil_status'] == 3)
		{
			$pdf->SetXY(41.5, 94.5);
			$pdf->Write(0, 'X');
		}
		
		if ($pi['civil_status'] == 4)
		{
			$pdf->SetXY(64, 85);
			$pdf->Write(0, 'X');
		}
		
		if ($pi['civil_status'] == 5)
		{
			$pdf->SetXY(64, 89);
			$pdf->Write(0, 'X');
		}
		
		if ($pi['civil_status'] == 6)
		{
			$pdf->SetXY(64, 94.5);
			$pdf->Write(0, 'X');
		}
		
		//citizeship
		$pdf->SetXY(39, 103);
		$pdf->Write(0, $pi['citizenship']);
		
		$pdf->Ln(5.2);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['height']);
		
		$pdf->Ln(5.2);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['weight']);
		
		$pdf->Ln(5.2);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['blood_type']);
		
		$pdf->Ln(4);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['gsis']);
		
		$pdf->Ln(5);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['pagibig']);
		
		$pdf->Ln(4);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['philhealth']);
		
		$pdf->Ln(5);
		$pdf->SetX(39);
		$pdf->Write(0, $pi['sss']);
		
		$pdf->SetXY(126, 85);
		$pdf->Write(0, $pi['res_zip']);
		
		$pdf->Ln(5);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['res_tel']);
		
		$pdf->Ln(5);
		$pdf->SetX(126);
		$permanent_address = splitstroverflow($pi['permanent_address'], 30);
		$pdf->Write(0, $permanent_address[0]);
		
		$pdf->Ln(4);
		$pdf->SetX(126);
		$pdf->Write(0, $permanent_address[1]);
		
		$pdf->Ln(15);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['permanent_zip']);
		
		$pdf->Ln(4);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['permanent_tel']);
		
		$pdf->Ln(4.3);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['email']);
		
		$pdf->Ln(4.9);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['cp']);
		
		$pdf->Ln(4.3);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['agency_employee_no']);
		
		$pdf->Ln(4.3);
		$pdf->SetX(126);
		$pdf->Write(0, $pi['tin']);
		
		
		/*******************************
		 *END PERSONAL INFORMATION =====
		 ******************************/
		 
		 //======================================================================
		 
		 /*******************************
		 *START FAMILY BACK GROUND=======
		 ******************************/
		
		//Get family background 
		$fb = $this->Family_Background->get_family_background($employee_id);
		
		$pdf->SetXY(39, 146);
		$pdf->Write(0, $fb['spouse_lname']);
		
		$pdf->Ln(4.3);
		$pdf->SetX(39);
		$pdf->Write(0, $fb['spouse_fname']);
		
		$pdf->Ln(4.3);
		$pdf->SetX(39);
		$pdf->Write(0, $fb['spouse_mname']);
		
		$pdf->Ln(5);
		$pdf->SetX(39);
		$pdf->Write(0, $fb['spouse_occupation']);
		
		$pdf->Ln(5);
		$pdf->SetX(39);
		$pdf->Write(0, $fb['spouse_employer']);
		
		$pdf->Ln(5);
		$pdf->SetX(39);
		$pdf->Write(0, $fb['spouse_biz_ad']);
		
		$pdf->Ln(5);
		$pdf->SetX(39);
		$pdf->Write(0, $fb['spouse_tel']);
		
		$pdf->Ln(9);
		$pdf->SetX(57);
		$pdf->Write(0, $fb['father_lname']);
		
		$pdf->Ln(4.5);
		$pdf->SetX(57);
		$pdf->Write(0, $fb['father_fname']);
		
		$pdf->Ln(4.5);
		$pdf->SetX(57);
		$pdf->Write(0, $fb['father_mname']);
		
		$pdf->Ln(4.5);
		$pdf->SetX(57);
		$pdf->Write(0, $fb['mother_lname']);
		
		$pdf->Ln(4.5);
		$pdf->SetX(57);
		$pdf->Write(0, $fb['mother_fname']);
		
		$pdf->Ln(4.5);
		$pdf->SetX(57);
		$pdf->Write(0, $fb['mother_mname']);
		
		/*******************************
		 *END FAMILY BACK GROUND=======
		 ******************************/
		 
		 //=============================================================================
		 
		 /*******************************
		 *START CHILDREN================
		 ******************************/
		 
		$children = $this->Children->get_child($employee_id);
		$pdf->SetXY(110, 145);
		
		$i = 1;
		
		foreach ($children as $child)
		{
			if ($i == 7 || $i == 9 || $i == 11)
			{
				$pdf->Ln(4.5);
			}
			else
			{
				$pdf->Ln(5);
			}
			
			
			
			$pdf->SetX(110);
			$pdf->Write(0, $child['children']);
			
			$date = $child['birth_date'];
			list($year, $month, $day) = split('[-.-]', $date);
			$pdf->SetX(170);
			$pdf->Write(0, $month.'/'.$day.'/'.$year);
			
			$i ++;
		}
		
		
		 /*******************************
		 *END CHILDREN==================
		 ******************************/
		 
		 //=====================================================================
		 
		  /*******************************
		   *START EDUC==================
		   ******************************/
		 
		 $educs = $this->Educational_Background->get_educ($employee_id, $level = 1);
		 $pdf->SetFont('Arial', '', 10);		
		 $pdf->SetXY(39, 233);
		// 
		/*******************************
		 *END EDUC==================
		 ******************************/  
		 foreach($educs as $educ)
		 {
			$sch = wordwrap($educ['school_name'], 23, "|");
			$sch = explode("|", $sch);
			
			$degree = wordwrap($educ['degree_course'], 15, "|");
			$degree = explode("|", $degree);
			
			$pdf->Write(0, $sch[0]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[0]);
			$pdf->SetX(107);
			$pdf->Write(0, $educ['year_graduated']);
			$pdf->SetX(130);
			$pdf->Write(0, $educ['highest_grade']);
			$pdf->SetX(150);
			$pdf->Write(0, $educ['attend_from']);
			$pdf->SetX(163);
			$pdf->Write(0, $educ['attend_to']);
			$pdf->SetX(177);
			$pdf->Write(0, $educ['scholarship']);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[1]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[1]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[2]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[2]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[3]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[3]);
		 }
		 
		 //secondary
		 $educs = $this->Educational_Background->get_educ($employee_id, $level = 2);
		 $pdf->SetXY(39, 246);
		 foreach($educs as $educ)
		 {
			$sch = wordwrap($educ['school_name'], 23, "|");
			$sch = explode("|", $sch);
			
			$degree = wordwrap($educ['degree_course'], 15, "|");
			$degree = explode("|", $degree);
			
			$pdf->Write(0, $sch[0]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[0]);
			$pdf->SetX(107);
			$pdf->Write(0, $educ['year_graduated']);
			$pdf->SetX(130);
			$pdf->Write(0, $educ['highest_grade']);
			$pdf->SetX(150);
			$pdf->Write(0, $educ['attend_from']);
			$pdf->SetX(163);
			$pdf->Write(0, $educ['attend_to']);
			$pdf->SetX(177);
			$pdf->Write(0, $educ['scholarship']);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[1]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[1]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[2]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[2]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[3]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[3]);
		 }
		 
		 //vocational
		 $educs = $this->Educational_Background->get_educ($employee_id, $level = 3);
		 $pdf->SetXY(39, 259);
		 foreach($educs as $educ)
		 {
			$sch = wordwrap($educ['school_name'], 23, "|");
			$sch = explode("|", $sch);
			
			$degree = wordwrap($educ['degree_course'], 15, "|");
			$degree = explode("|", $degree);
			
			$pdf->Write(0, $sch[0]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[0]);
			$pdf->SetX(107);
			$pdf->Write(0, $educ['year_graduated']);
			$pdf->SetX(130);
			$pdf->Write(0, $educ['highest_grade']);
			$pdf->SetX(150);
			$pdf->Write(0, $educ['attend_from']);
			$pdf->SetX(163);
			$pdf->Write(0, $educ['attend_to']);
			$pdf->SetX(177);
			$pdf->Write(0, $educ['scholarship']);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[1]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[1]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[2]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[2]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[3]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[3]);
		 }
		 
		 //college
		 $educs = $this->Educational_Background->get_educ($employee_id, $level = 4);
		 $pdf->SetXY(39, 274);
		 foreach($educs as $educ)
		 {
			$sch = wordwrap($educ['school_name'], 23, "|");
			$sch = explode("|", $sch);
			
			$degree = wordwrap($educ['degree_course'], 15, "|");
			$degree = explode("|", $degree);
			
			$pdf->Write(0, $sch[0]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[0]);
			$pdf->SetX(107);
			$pdf->Write(0, $educ['year_graduated']);
			$pdf->SetX(130);
			$pdf->Write(0, $educ['highest_grade']);
			$pdf->SetX(150);
			$pdf->Write(0, $educ['attend_from']);
			$pdf->SetX(163);
			$pdf->Write(0, $educ['attend_to']);
			$pdf->SetX(177);
			$pdf->Write(0, $educ['scholarship']);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[1]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[1]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[2]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[2]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[3]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[3]);
		 }
		 
		 //graduate studies
		 $educs = $this->Educational_Background->get_educ($employee_id, $level = 5);
		 $pdf->SetXY(39, 290);
		 foreach($educs as $educ)
		 {
			$sch = wordwrap($educ['school_name'], 23, "|");
			$sch = explode("|", $sch);
			
			$degree = wordwrap($educ['degree_course'], 15, "|");
			$degree = explode("|", $degree);
			
			$pdf->Write(0, $sch[0]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[0]);
			$pdf->SetX(107);
			$pdf->Write(0, $educ['year_graduated']);
			$pdf->SetX(130);
			$pdf->Write(0, $educ['highest_grade']);
			$pdf->SetX(150);
			$pdf->Write(0, $educ['attend_from']);
			$pdf->SetX(163);
			$pdf->Write(0, $educ['attend_to']);
			$pdf->SetX(177);
			$pdf->Write(0, $educ['scholarship']);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[1]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[1]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[2]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[2]);
			
			$pdf->Ln(3);
			$pdf->SetX(39);
			$pdf->Write(0, $sch[3]);
			$pdf->SetX(78);
			$pdf->Write(0, $degree[3]);
		 }
		
		// Output
		$pdf->Output('resources/pdfs/archives/page1_'.$employee_id.'.pdf', 'F'); 
		$this->pds[] = 'resources/pdfs/archives/page1_'.$employee_id.'.pdf';
		//header("location:".base_url()."resources/pdfs/archives/page1_".$employee_id.'.pdf');
		
	}
	
	function page2($employee_id)
	{
		
		$this->load->helper('settings');
		
		$this->load->library('fpdf');
		
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
					
		$this->load->library('fpdi');
		
		//print_r($personal_info);	
		// initiate FPDI   
		$pdf =& new FPDI('P','mm','Legal');
		
		// add a page
		$pdf->AddPage();
		// set the sourcefile
		$pdf->setSourceFile('resources/pdfs/page2.pdf');
		// import page 1
		$tplIdx = $pdf->importPage(1);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		// now write some text above the imported page
		$pdf->SetFont('Arial');
		$pdf->SetTextColor(0,0,0);
		
		
		$pdf->SetXY(8, 31);
		
		$eligs = $this->Eligibility->get_eligibility($employee_id);
		
		
		$i = 1;
		
		 foreach($eligs as $elig)
		 {
			$pdf->SetX(8);
			$pdf->Write(0, $elig['type']);
			$pdf->SetX(62);
			$pdf->Write(0, $elig['rating']);
			
			$pdf->SetX(75);
			$pdf->Write(0, $elig['date_exam_conferment']);
			
			$pdf->SetX(98);
			$pdf->Write(0, $elig['place_exam_conferment']);
			
			$pdf->SetX(167);
			$pdf->Write(0, $elig['license_no']);
			
			$pdf->SetFont('Arial', '', 8);	
			$pdf->SetX(188);
			$pdf->Write(0, $elig['license_release_date']);
			
			  	    	 
			$pdf->SetFont('Arial', '', 12);	
			
			
			if ($i == 2 || $i == 6)
			{
				$pdf->Ln(8);
			}
			else
			{
				$pdf->Ln(7);
			}
			
			$i++;
			
		 }
		 
		 
		 
		 //work ===================================================================================================
		 $pdf->SetXY(8, 115);
		 $works = $this->Work_Experience->get_work($employee_id);
		
		
		$i = 1;
		
		 foreach($works as $work)
		 {
			$pdf->SetFont('Arial', '', 8);
			$pdf->SetX(7);
			
			list($year, $month, $day) = split('[-.-]', $work['inclusive_date_from']);
			
			$inclusive_date_from = $month.'/'.$day.'/'.$year;
			
			$pdf->Write(0, $inclusive_date_from);
			
			list($year, $month, $day) = split('[-.-]', $work['inclusive_date_to']);
			
			$inclusive_date_to = $month.'/'.$day.'/'.$year;
			
			if ($work['inclusive_date_to'] == 'Present')
			{
				$inclusive_date_to = 'Present';
			}
			
			$pdf->SetX(22);
			$pdf->Write(0, $inclusive_date_to);
			
			
			$pdf->SetFont('Arial', '', 8);
			$pdf->SetX(39);
			$pdf->Write(0, $work['position']);
			
			$pdf->SetX(75);
			$pdf->Write(0, $work['company']);
			
			//$pdf->SetFont('Arial', '', 12);
			$pdf->SetX(132);
			$pdf->Write(0, $work['monthly_salary']);
			
			$pdf->SetX(150);
			$pdf->Write(0, $work['salary_grade']);
			
			$pdf->SetFont('Arial', '', 8);
			$pdf->SetX(166);
			$pdf->Write(0, $work['status']);
			
			if ($work['govt_service'] == 1)
			{
				$work['govt_service'] = 'Yes';
			}
			else
			{
				$work['govt_service'] = 'No';
			}
			
			$pdf->SetX(190);
			$pdf->Write(0, $work['govt_service']);
			
			//$pdf->SetFont('Arial', '', 8);	
			//$pdf->SetX(188);
			//$pdf->Write(0, $work['license_release_date']);
			
			  	    	 
			$pdf->SetFont('Arial', '', 12);	
			
			
			if ($i == 6 || $i == 10  || $i == 13 || $i == 16 || $i == 19 || $i == 22)
			{
				$pdf->Ln(8);
			}
			else
			{
				$pdf->Ln(7);
			}
			
			$i++;
			
		 }
		 
		
		// Output
		$pdf->Output('resources/pdfs/archives/page2_'.$employee_id.'.pdf', 'F'); 
		//header("location:".base_url()."resources/pdfs/archives/page2_".$employee_id.'.pdf');
		$this->pds[] = 'resources/pdfs/archives/page2_'.$employee_id.'.pdf';
		
	}
	
	function page3($employee_id)
	{
		
		$this->load->helper('settings');
		
		$this->load->library('fpdf');
		
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
					
		$this->load->library('fpdi');
		
		//print_r($personal_info);	
		// initiate FPDI   
		$pdf =& new FPDI('P','mm','Legal');
		
		// add a page
		$pdf->AddPage();
		// set the sourcefile
		$pdf->setSourceFile('resources/pdfs/page3.pdf');
		// import page 1
		$tplIdx = $pdf->importPage(1);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		// now write some text above the imported page
		$pdf->SetFont('Arial');
		$pdf->SetTextColor(0,0,0);
		
		
		$pdf->SetXY(8, 31);
		
		$orgs = $this->Organization->get_org($employee_id);
		
		
		$i = 1;
		
		 foreach($orgs as $org)
		 {
			$pdf->SetX(8);
			$pdf->Write(0, $org['name']);

			$pdf->SetFont('Arial', '', 8);	
			$pdf->SetX(95);
			$pdf->Write(0, $org['inclusive_date_from']);
			
			$pdf->SetX(117);
			$pdf->Write(0, $org['inclusive_date_from']);
			
			$pdf->SetFont('Arial', '', 12);	
			$pdf->SetX(138);
			$pdf->Write(0, $org['number_of_hours']);
			
			$pdf->SetX(155);
			$pdf->Write(0, $org['position']);
			
			
			$pdf->SetX(188);
			$pdf->Write(0, $org['license_release_date']);
			
			  	    	 
			$pdf->SetFont('Arial', '', 12);	
			
			
			if ($i == 2 || $i == 6)
			{
				$pdf->Ln(8);
			}
			else
			{
				$pdf->Ln(7);
			}
			
			$i++;
			
		 }
		 
		 
		//Training
		 
		$pdf->SetXY(8, 105);
		
		$trainings = $this->Training->get_training($employee_id);
		
		
		$i = 1;
		
		 foreach($trainings as $training)
		 {
			$pdf->SetFont('Arial', '', 8);	
			$pdf->SetX(8);
			$pdf->Write(0, $training['name']);

			
			$pdf->SetX(95);
			$pdf->Write(0, $training['date_from']);
			
			$pdf->SetX(117);
			$pdf->Write(0, $training['date_to']);
			
			
			$pdf->SetX(138);
			$pdf->Write(0, $training['number_hours']);
			
			$pdf->SetX(155);
			$pdf->Write(0, $training['conducted_by']);
			
			
			  	    	 
			$pdf->SetFont('Arial', '', 12);	
			
			
			if ($i == 6 || $i == 10 || $i == 11 || $i == 16)
			{
				$pdf->Ln(8);
			}
			else
			{
				$pdf->Ln(7);
			}
			
			$i++;
			
		 }
		 
		 //other info
		 
		$pdf->SetXY(8, 258);
		
		$infos = $this->Other_Info->get_other_info($employee_id);
		
		
		$i = 1;
		
		 foreach($infos as $info)
		 {
			$pdf->SetX(8);
			$pdf->Write(0, $info['special_skills']);

			$pdf->SetX(58);
			$pdf->Write(0, $info['recognition']);
			
			$pdf->SetX(155);
			$pdf->Write(0, $info['membership_organization']);
			
			$pdf->SetX(138);
			$pdf->Write(0, $info['number_hours']);
			
			$pdf->SetX(155);
			$pdf->Write(0, $info['conducted_by']);
			
			
			  	    	 
			$pdf->SetFont('Arial', '', 12);	
			
			
			if ($i == 6 || $i == 10 || $i == 11 || $i == 16)
			{
				$pdf->Ln(8);
			}
			else
			{
				$pdf->Ln(7);
			}
			
			$i++;
			
		 }
		
		// Output
		$pdf->Output('resources/pdfs/archives/page3_'.$employee_id.'.pdf', 'F'); 
		//header("location:".base_url()."resources/pdfs/archives/page3_".$employee_id.'.pdf');
		$this->pds[] = 'resources/pdfs/archives/page3_'.$employee_id.'.pdf';
		
	}
	
	//page 4 ====================================================================================================================
	function page4($employee_id)
	{
		
		$this->load->helper('settings');
		
		$this->load->library('fpdf');
		
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
					
		$this->load->library('fpdi');
		
		//print_r($personal_info);	
		// initiate FPDI   
		$pdf =& new FPDI('P','mm','Legal');
		
		// add a page
		$pdf->AddPage();
		// set the sourcefile
		$pdf->setSourceFile('resources/pdfs/page4.pdf');
		// import page 1
		$tplIdx = $pdf->importPage(1);
		// use the imported page and place it at point 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		// now write some text above the imported page
		$pdf->SetFont('Arial');
		$pdf->SetTextColor(0,0,0);
		
		
		$pdf->SetXY(8, 14);
		
		$questions = $this->Questions->get_questions($employee_id);
		
		
		 foreach($questions as $question)
		 {
			if ($question['question_no'] == 1)
			{
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			
			if ($question['question_no'] == 2)
			{
				
				$pdf->Ln(21);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			if ($question['question_no'] == 3)
			{
				
				$pdf->Ln(26);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			
			if ($question['question_no'] == 4)
			{
				
				$pdf->Ln(21);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			
			if ($question['question_no'] == 5)
			{
				
				$pdf->Ln(26);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			if ($question['question_no'] == 6)
			{
				
				$pdf->Ln(26);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			if ($question['question_no'] == 7)
			{
				
				$pdf->Ln(21);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			if ($question['question_no'] == 8)
			{
				
				$pdf->Ln(35);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			if ($question['question_no'] == 9)
			{
				
				$pdf->Ln(12);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			if ($question['question_no'] == 10)
			{
				
				$pdf->Ln(13);
				
				if ($question['answer'] == 1)
				{
					$setx = 138.5;
				}
				else
				{
					$setx = 164;
				}
				$pdf->SetX($setx);
				$pdf->Write(0, 'X');
			}
			
		 }
		 
		
		$pdf->SetXY(8, 233);
		//$pdf->Write(0, 'X');
		
		$references = $this->References->get_references($employee_id);
		
		
		 foreach($references as $reference)
		 {
			$pdf->SetX(8);
			$pdf->Write(0, $reference['name']);
			$pdf->SetX(72);
			$pdf->Write(0, $reference['address']);
			$pdf->SetX(134);
			$pdf->Write(0, $reference['tel_no']);
			
			$pdf->Ln(4);
		
		 }
		
		
		// Output
		$pdf->Output('resources/pdfs/archives/page4_'.$employee_id.'.pdf', 'F'); 
		//header("location:".base_url()."resources/pdfs/archives/page4_".$employee_id.'.pdf');
		$this->pds[] = 'resources/pdfs/archives/page4_'.$employee_id.'.pdf';
		
	}
	
	function pds($employee_id)
	{
		$this->load->helper('settings');
		
		$this->load->library('fpdf');
		
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
					
		$this->load->library('fpdi');
		
		$this->page1($employee_id);
		$this->page2($employee_id);
		$this->page3($employee_id);
		$this->page4($employee_id);
		
		//if training is excess to page
		
		
		//Concatenate the pdf files
		$pdf =& new FPDI('P','mm','Legal');
		
		$pdf->setFiles($this->pds); 
		$pdf->concat();
		
		$pdf->Output("resources/pdfs/archives/".$employee_id.".pdf", 'F');
		header("location:".base_url()."resources/pdfs/archives/".$employee_id.".pdf");
		unlink('resources/pdfs/archives/page1_'.$employee_id.'.pdf');
		unlink('resources/pdfs/archives/page2_'.$employee_id.'.pdf');
		unlink('resources/pdfs/archives/page3_'.$employee_id.'.pdf');
		unlink('resources/pdfs/archives/page4_'.$employee_id.'.pdf');
	}
	
	function sr()
	{
		echo 'Under construction.';
	}
}