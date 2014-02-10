<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to DateConverter AD and BS</title>

	
</head>
<body>
<?php
	//echo base_url();
?>
<div style="margin: 20px; padding: 10px; background: #F3F3F3;">
	<h1>Welcome to Date Converter App</h1>
    <div>
        <form action="<?php echo base_url(); ?>welcome/index" method="post">
            <table>
                <tr>
                    <td>Enter Date (AD)</td>
                    <td>
                        <input type="text" name="english_date" placeholder="YYYY-MM-DD" /> Example: 2001-12-17 
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit_ad" value="Covert Date To Nepali Date (BS)" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
	if(isset($result)){
?>
<div style="margin: 20px; padding: 10px; background: #F3F3F3;">
    <h2>Nepali Date:</h2><br />
    <table>
        <tr>
            <td>Year:</td>
            <td><?php echo $result['year']; ?></td>
        </tr>
        <tr>
            <td>Month:</td>
            <td><?php echo $result['month']; ?></td>
        </tr>
        <tr>
            <td>Date:</td>
            <td><?php echo $result['date']; ?></td>
        </tr>
        <tr>
            <td>Day:</td>
            <td><?php echo $result['day']; ?></td>
        </tr>
    </table>
</div>
<?php
	}
?>
</body>
</html>