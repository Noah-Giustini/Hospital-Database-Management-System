<?php
session_start();
if(!isset($_SESSION['login'])){
	header("Location: /index.php");
}
$PatientID  = $_GET["PatientID"];
$DocID = $_GET["DocID"];

echo '<form action="addPrescriptionQuery.php"  method="post">
   <input type = "hidden" name = "DoctorID" value =' . $DocID. '>
   <input type = "hidden" name = "PatientID" value =' . $PatientID. '>
   MedicineID: <input type="text" name="MedicineID" required><br>
   Dosage: <input type="text" name="Dosage" required><br>
   Frequency: <input type="text" name= "Frequency" required><br>
   IsRefillable<input type="checkbox" name = "IsRefillable" value = "1">
   <input type="submit" value="Add">
</form>
<br>
<a href="viewPatientList.php">Back</a>
<br>
'
?>