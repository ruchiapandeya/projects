<?php 

$tot_loc = count($loc);
if($tot_loc=='2'){
	$check_loc = "and location like '%$loc[1]%'";
}elseif($tot_loc=='3'){
	$check_loc = "and location like '%$loc[1]%' and location like '%$loc[2]%'";
}elseif($tot_loc=='4'){
	$check_loc = "and location like '%$loc[1]%' and location like '%$loc[2]%' and location like '%$loc[3]%'";
}elseif($tot_loc=='5'){
	$check_loc = "and location like '%$loc[1]%' and location like '%$loc[2]%' and location like '%$loc[3]%' and location like '%$loc[4]%'";
}elseif($tot_loc=='6'){
	$check_loc = "and location like '%$loc[1]%' and location like '%$loc[2]%' and location like '%$loc[3]%' and location like '%$loc[4]%' and location like '%$loc[4]%'";
}
/*-----------------------------------------------------------------------------------------------------------------------------*/

$searchTxt = "";
$searchCon = "";
$searchWhere = "";

if($jobID!=""){
	$searchTxt .= $searchCon . "id = '$jobID'";
	$searchCon = " AND ";
}
if($keyword!=""){
	$replace_key1=str_replace(", ",",",$keyword);
	$replace_key2=str_replace(" ",",",$keyword);
	
	$replace_key2=str_replace(",,",",",$replace_key2);
	//echo "<br>";
	$replace_key2=rtrim($replace_key2,",");
	//echo $replace_key2;
	
	$check_keyword = explode(',',$replace_key2);
	$id="";
	count($check_keyword);
	
	foreach($check_keyword as $key)
	{
		if($key!=""){
			$sid = "select * from job_post where keyword like '%$key%' || job_profile like '%$key%' || industry like '%$key%' || role like '%$key%' || functional_area like '%$key%' || candidate_profile like '%$key%' || job_desc like '%$key%' || comp_profile like '%$key%' || comp_name like '%$key%'";
		
			$find=mysql_query($sid);
		    $find_record=mysql_num_rows($find);
			
			while($sid_r=mysql_fetch_array($find)){
				$id .= $sid_r[id];
				$id .=",";
			
				$query .= "id = '".$sid_r[$id]."'";
				$query .= " AND ";
							
			}
		}
		//echo $id;die;
		
		if($id){
			$sid1 = explode(',',$id);
		}
		
		$count = count($sid1);
		
		//print_r($sid1);die;
		
		//$query="SELECT * from job_post WHERE ";
		$query="";	
		$query .="(";
		for($i=0;$i<$count-1;$i++){
			$show="1";
			$query .= "id = '$sid1[$i]'";
					
			if($i<$count-2){
				$query .= " OR ";
			}
		}$query .=")";
		//echo $show;
	}
	
	//$searchTxt .= $searchCon . "(keyword like '%$keyword%' or job_profile like '%$keyword%' or industry like '%$keyword%' or role like '%$keyword%' or functional_area like '%$keyword%' or candidate_profile like '%$keyword%' or job_desc like '%$keyword%' or comp_profile like '%$keyword%' or comp_name like '%$keyword%')";
	if($show!=""){
		$searchTxt .= $searchCon . $query;
		$searchCon = " AND ";
	}else{
		$searchTxt .= $searchCon . "(keyword like 'asbndjbasdbbashbhasbdhbasdkabsdvsdsdfbshdb')";
		$searchCon = " AND ";
	}
}
if($functional_area!=""){
	$searchTxt .= $searchCon . "functional_area like '%$functional_area%'";
	$searchCon = " AND ";
}
if($_GET[location]!=""){
	$searchTxt .= $searchCon . "location like '%$loc[0]%' $check_loc";
	$searchCon = " AND ";
}
if($exp_min!=""){
	$searchTxt .= $searchCon . "exp_min = '$exp_min'";
	$searchCon = " AND ";
}
if($exp_max!=""){
	$searchTxt .= $searchCon . "exp_max = '$exp_max'";
	$searchCon = " AND ";
}
if($sal_min!=""){
	$searchTxt .= $searchCon . "sal_min = '$sal_min'";
	$searchCon = " AND ";
}
if($sal_max!=""){
	$searchTxt .= $searchCon . "sal_max = '$sal_max'";
	$searchCon = " AND ";
}
if($role!=""){
	$searchTxt .= $searchCon . "role = '$role'";
	$searchCon = " AND ";
}
if($industry!=""){
	$searchTxt .= $searchCon . "industry = '$industry'";
	$searchCon = " AND ";
}
if($type!=""){
	$searchTxt .= $searchCon . "type = '$type'";
	$searchCon = " AND ";
}


if($searchTxt!=""){
	$searchWhere = " AND " . $searchTxt;
}

 $query = "select * from job_post where active = 'yes' and jobValidity != 'fail'";
if($searchWhere!="")
{
  $query .= $searchWhere;
}

$query .= " order by date_check $sorting";

//echo $query;

$result = mysql_query($query);
$nume = mysql_num_rows($result);



/*for 'role' refine search*/
$query1 = "select distinct role from job_post where active = 'yes' and jobValidity != 'fail'";
if($searchWhere!="")
{
  $query1 .= $searchWhere;
}

$query1 .= "order by posted_date desc";
$result1 = mysql_query($query1);
$nume1 = mysql_num_rows($result1);
/*for 'role' refine search*/


/*for 'industry' refine search*/
$query2 = "select distinct industry from job_post where active = 'yes' and jobValidity != 'fail'";
if($searchWhere!="")
{
  $query2 .= $searchWhere;
}

$query2 .= "order by posted_date desc";
$result2 = mysql_query($query2);
$nume2 = mysql_num_rows($result2);
/*for 'industry' refine search*/


/*for 'job type' refine search*/
$query3 = "select distinct type from job_post where active = 'yes' and jobValidity != 'fail'";
if($searchWhere!="")
{
  $query3 .= $searchWhere;
}

$query3 .= "order by posted_date desc";
$result3 = mysql_query($query3);
$nume3 = mysql_num_rows($result3);
/*for 'job type' refine search*/


?>