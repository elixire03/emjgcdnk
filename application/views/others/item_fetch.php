<?php 

$conn = mysqli_connect("localhost","root","", "wbibs");
$search = mysqli_real_escape_string($conn, $_POST['search']);
$output = "";
$query = "select * from items where item_code like '%".$search."%' or item_description like '%".$search."%'or item_specification like '%".$search."%' or item_specification2 like '%".$search."%'";
$result = mysqli_query($conn, $query) or die(mysqli_error());


$output .="<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
							
								<th>
									 CODE
								</th>
								<th>
									 DESCRIPTION
								</th>
								<th>
									 SPECIFICATION
								</th>
								<th>
									 SPECIFICATION 2
								</th>
                                <th>
									 BRAND
								</th>
                                <th>
									 UMES
								</th>
                                

								<th>
									 ACTION
								</th>

							</tr>
							</thead>
							";
		if(mysqli_num_rows($result) > 0 ):
			while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
				$output .="<tbody>
							
							<tr>
							
								<td>
							".$row['item_code']."
								</td>
                                <td>
							".$row['item_description']."
								</td>
								<td>
							".$row['item_specification']."
								</td>
								
								<td>
							".$row['item_specification2']."
								</td>
								
								<td>
							".$row['brand']."
								</td>
								<td>
							".$row['umes']."
								</td>
								<td>
							<a style=\"cursor:pointer;\" onclick =\"select_item('$row[id]')\" class =\"btn btn-success\" >Select</a>
								</td>
							</tr>
							</tbody>		
							";
			}
		else:
			$output .="<tbody>
							<tr>
							<td colspan = \"6\">
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .="
				</table>";
		echo $output;

?>