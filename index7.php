<!DOCTYPE html>
<html>
<head>
    <title>Reg Form</title>
    <style>
        h1{
            text-align:center;
            margin:260px 0px 30px 0px;
        }
     div{
       background-color: rgba(221, 56, 105, 0.466);
       width:30vw;
    font-size:2.5vh;
    color:white;
    text-align: center;
   padding:0px 10px 10px 20px;
    border-radius:30px;
    margin:200px 0px 0px 700px;
     }
     #gender{
        padding-right:130px ;
        border-color:black;
     }
     #fname{
        border-color:black;
     }
     #lname{
        border-color:black;
     }
     #email{
        border-color:black;
     }
     
   body{
    background-image:url(pexels-photo-1205651.webp);
    background-repeat:no-repeat;
    background-size:cover;
   }
        </style>
    <script>
        function validate() {
            var fname = document.reg_form.fname;
            var lname = document.reg_form.lname;
            var gender = document.reg_form.gender;
            var email = document.reg_form.email;
            

            if (fname.value.length <= 0) {
                alert("first name is filled out");
                fname.focus();
                return false;
            }
            if (lname.value.length <= 0) {
                alert("Last Name is filled out");
                lname.focus();
                return false;
            }
            
            if (gender.value.length <= 0) {
                alert("choose one");
                gender.focus();
                return false;
            }
            if (email.value.length <= 0) {
                alert("Email Id is filled out");
                email.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
  
<div>
<form action="index6.php" name="reg_form" onsubmit="return validate()">
    <h1>Registration Form</h1>
    <label>First Name: </label>
                
          <input type="text"id="fname" name="fname" placeholder="First Name"><br><br>
                
   <label>Last Name: </label>
                
          <input type="text" id="lname" name="lname" placeholder="Last Name"><br><br>
               
     <label>Gender: </label>
            <select  id="gender">
            <option value="male">Male</option>
            <option value="Female">Female</option>
            <option value="other">Other</option>
            </select>
             <br><br>
    <label>Email Id: </label>
         <input type="text"id="email" name="email"><br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </div>
    </form>
    
</body>
</html>
