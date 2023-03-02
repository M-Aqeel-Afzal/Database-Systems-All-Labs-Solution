<HTML>
<body>
 <HEAD>
	<TITLE<tr align=middle ><td>> EMPLOYEE INFORMANTION </TITLE>
<form action="q2.php" method= "post">
<h> EMPLOYEE INFORMANTION:          </h>
</br>

<label for=""EMPLOYEE ID">EMPLOYEE ID:	<input type="number" name="empID" id="empID"></input></label>
</br></br>

	<label for=""EMPLOYEE FName">EMPLOYEE FName:	<input type="text" name="FName" id="FName"></input></label>
	<label for=""EMPLOYEE LName">EMPLOYEE LName:	<input type="text" name="LName" id="LName"></input></label>
	</br></br>
	<label for=""EMPLOYEE Number">EMPLOYEE Number:	<input type="number" name="Number" id="Number"></input></label>
	<label for=""EMPLOYEE Email">EMPLOYEE Email:	<input type="text" name="email" id="emil"></input></label>
	</br></br>
	<label for=""JOBTITLE">JOB-----------TITLE:	<input type="text" name="JOb" id="Job"></input></label>
	<label for=""MANAGER ID">MANAGER---------ID:	<input type="number" name="managerid" id="managerid"></input></label>

	</br></br>
	<label for=""HIRE DATE">HIRE---------DATE:	<input type="date" name="hiredate" id="hiredate"></input></label>
	<label for=""SALARY">SALARY-----------------------:	<input type="number" name="salary" id="salary"></input></label>

	</br></br>
	<label for=""COMMISSION">COMMISSION---:	<input type="number" name="commission" id="commission"></input></label>
	<label for=""DEPT NO">DEPT----------------NO:	<input type="number" name="DeptID" id="DeptID"></input></label>
		</br></br>
	
	<TABLE>
	<tr align=middle ><td>
<TD></TD>
       </br>
</br>
<label for=""save">save:
        <input type="submit" name="sub" value="Save to DataBase" /></td>
		</label>
        </table>
		
</form>

<?php
$db_sid =
 "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-0V5JOQE)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = aqeel)
    )
  )"; // Your oracle SID, can be found in tnsnames.ora
//((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN)

 $db_user = "scott"; // Oracle username e.g "scott"
 $db_pass = "aq4427"; // Password for user e.g "1234"
 $con = oci_connect($db_user,$db_pass,$db_sid);
 if($con)
 { echo "Oracle Connection Successful."; }
 else
 { die('Could not connect to Oracle: '); }
 if(isset($_get["sub"]))
 { echo "yes";}
 else
 {  
 $empID=$_REQUEST["empID"];
 $FName=$_REQUEST["FName"];
 $LName=$_REQUEST["LName"];
 $Number=$_REQUEST["Number"];
 $email=$_REQUEST["email"];
 $JOb=$_REQUEST["JOb"];
 $managerid=$_REQUEST["managerid"];
 $hiredate=$_REQUEST["hiredate"];
 $salary=$_REQUEST["salary"];
 $commission=$_REQUEST["commission"];
 $DeptID=$_REQUEST["DeptID"];

  $qr1="UPDATE employees 
  set EMPLOYEE_ID=$empID,FIRST_NAME=$FName,LAST_NAME=$LName,EMAIL=$email,PHONE_NUMBER=$Number,HIRE_DATE=$hiredate,JOB_ID=$JOb,SALARY=$salary,COMMISSION_PCT=$commission,MANAGER_ID=$managerid,DEPARTMENT_ID=$DeptID ";
 $query_id = oci_parse($con, $qr1);
 $r = oci_execute($query_id);
 echo "UPDATE Successful";

 
 }

?>
	</body>
 </HEAD>
</HTML>

