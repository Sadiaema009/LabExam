<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="createEmployee.php" method="post" enctype="multipart/form-data">   
                    
                    <h1>Please fill up the form</h1>

                    <label for="firstname">First Name :</label>  
                    <input type="text" id="firstname" name="firstname"><br/>
                    <label for="lastname">Last Name</label>  
                     <input type="text" id="lastname" name="lastname"><br/>  
                     <label for="email">E-mail</label>  
                     <input type="text" id="email" name="email"><br/>   
                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                    </fieldset>
                    <label for="mobile">Mobile No</label>  
                     <input type="text" id="mobile" name="mobile"><br/>
                     <legend>Date Of Birth</legend>
                    <input type="date" name="dob"><br>

                     <label for="hsc">HSC results</label>  
                     <input type="text" id="hsc" name="hsc"><br/>
                     <label for="ssc">SSC results</label>  
                     <input type="text" id="ssc" name="ssc"><br/>
                    <fieldset>
                    <label for="course">Select a course you want to enroll:</label>
                    <select name="course" id="course">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    </select>
                    </fieldset>

                    <fieldset>
                    <label for="course">Choose a year enrolling a year:</label>
                    <select name="enroll_year" id="enroll_year">
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    </select>
                    </fieldset>

                    <fieldset>
                    <label for="course">Choose a semester enrolling a semester:</label>
                    <select name="enroll_semester" id="enroll_semester">
                    <option value="summer">summer</option>
                    <option value="fall">fall</option>
                    <option value="spring">spring</option>
                    </select>
                    </fieldset>
                     <input type="submit" name="submit" value="Insert data"><br /> 
                     
                </form> 
                  
</body>
</html>