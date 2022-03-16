<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form id="form1" name="form1" method="get">
        
       
        <label>Phone Number:
        <input pattern="[6-9]{1}[0-9]{9}" name="phone" type="text" title="phone no starting on 6-9 and 10 digit no ."/></label><br><br>
        <label>Your favorite fruit: 
        <datalist id="fruits">
        <option value="Blackberry">Blackberry</option>
        <option value="Blackcurrant">Blackcurrant</option>
        <option value="Blueberry">Blueberry</option>
        <!-- … --><br>
        </datalist>
         If other, please specify:
        <input type="text" name="fruit" list="fruits">
        </label>
        <br>
        <label>Upload files:
<input type="file" multiple name="upload"></label><br>
<form action="process.php">
  <label for="email">Email:</label>
  <input type="text" name="email" value="gordo@example.com">
  <input type="submit" formnovalidate value="Submit">
        
</form>
<br>

        <input type="submit" value="Submit" formaction="demo.php">
        <br>

    </form>
</body>
</html>