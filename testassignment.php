<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Test</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="testassignment.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <h2 class="text-danger text-center">Form</h2>
         <p>Please fill in this form to create an account.</p>
         <hr>
         <div>
           <form id="form">
              <div class="form-group">
                 <label for="fname">First Name:</label>
                 <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" onchange="return check_fname()" required>
              </div>
              <div class="form-group">
                 <label for="lname">Last Name:</label>
                 <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" onchange="return check_lname()" required>
              </div>
              <div class="form-group">
                 <label for="gender">Gender:</label><br>
                 <div class="styleradio">
                    <label class="radio-inline">
                    <input type="radio" name="gender" id="gender" value="male"> Male
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="gender" id="gender" value="female"> Female
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="gender" id="gender" value="others"> others
                    </label>
                 </div>
              </div>
              <div class="form-group">
                 <label for="hobbie">Hobbies:</label>
                 <div class="stylecheckbox">
                    <div class="form-check">
                       <input  type="checkbox" class="form-check-input hobby" value="readingbooks" name="hobbies" id="hobbies">
                       <label class="form-check-label" for="ReadingBooks">
                       Reading-Books
                       </label>
                    </div>
                    <div class="form-check">
                       <input type="checkbox" class="form-check-input hobby" value="cookingfood"  name="hobbies" id="hobbies">
                       <label class="form-check-label" for="cookingfood">
                       Cooking-Food
                       </label>
                    </div>
                    <div class="form-check">
                       <input type="checkbox" class="form-check-input hobby"  value="playinggames" name="hobbies" id="hobbies">
                       <label class="form-check-label" for="playinggames">
                       Playing-Games
                       </label>
                    </div>
                    <div class="form-check">
                       <input type="checkbox" class="form-check-input hobby" value="drawing" name="hobbies" id="hobbies">
                       <label class="form-check-label" for="drawing">
                       Drawing
                       </label>
                    </div>
                 </div>
              </div>
              <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" onchange="return check_email()" required>
              </div>
              <div class="form-group">
                 <label for="dob">Date Of Birth:</label>
                 <input type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth"min="1960-01-01" max="2011-12-31"  name="dob" required>
              </div>
              <div class="form-group">
                 <label for="phonenum">Phone Number:</label>
                 <input type="tel" class="form-control" id="phonenum" placeholder="Enter Phone Number"min="1960-01-01" max="2011-12-31"  name="phonenum"  pattern="^\d{4}-\d{3}-\d{4}$" onchange="return check_phonenumber()" required >
              </div>
              <div class="form-group">
                 <label for="Designation">Designation:</label>
                 <input type="text" class="form-control" id="Designation" placeholder="Enter Designation" name="Designation" onchange="return check_designation()" required>
              </div>
              <hr>
              <div class="footer">
                 <!--  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
                 <button type="button" name="submit" id="submit"class="btn btn-outline-danger registerbtn">Submit</button>
                 <p class="sigin">Already have an account? <a href="#">Sign in</a>.</p>
              </div>
           </form>
         </div>
      </div>
      <script type="text/javascript">
         $(document).ready(function(){
           $( "#submit ").click(function(){
             
           
            var fname = $("#fname").val();
            var lname=$("#lname").val();
            var gender=$("#gender").val();
            var hobbies= [];
            var email = $("#email").val();
            var dob = $("#dob").val();
            var phonenum = $("#phonenum").val();
            var Designation = $("#Designation").val();
            
         
            $(".hobby").each(function(){
              if($(this).is(":checked")){
                hobbies.push($(this).val());
         
              }
         
            });
         
            hobbies = hobbies.toString();
            // console.log(hobbies);
         
            if(fname==""){
             alert("Please input the First name");
              document.getElementById("fname").focus();
              return false;
            }
            if(lname==""){
             alert("Please input the Last name");
              document.getElementById("lname").focus();
              return false;
            }
         
           if($("#gender:checked").length == 0){
             alert("Please input the gender");
              document.getElementById("gender").focus();
              return false;
            }
         
             if(hobbies==""){
             alert("Please input the Hobbies");
              document.getElementById("hobbies").focus();
              return false;
            }
         
            if(email==""){
             alert("Please input the email");
              document.getElementById("email").focus();
              return false;
            }
         
            if(dob==""){
             alert("Please input the dob");
             document.getElementById("dob").focus();
              return false;
            }
            if(phonenum==""){
             alert("Please input the phonenum");
             document.getElementById("phonenum").focus();
              return false;
            }
            
            if(Designation==""){
             alert("Please input the Designation");
             document.getElementById("Designation").focus();
              return false;
            }
           
           var data = "fname="+fname+"&lname="+lname+"&gender="+gender+"&hobbies="+hobbies+"&email="+email+"&dob="+dob+"&phonenum="+phonenum+"&Designation="+Designation;
           $.ajax({
                   
             "url":"submitform.php",
             "method":"POST",
             "data":data,
             success:function(returndata){
               alert(returndata);
             window.location.href="";
              
              
              
             }
         
           });
         
           });
         
         });
      </script>
      <!-- ////////////////////////////////// Validation for First Name ////////////////////////////// -->
      <script type="text/javascript">
         function check_fname(){
         
         var fname = $("#fname").val();
         var data = "fname="+fname;
         var pattern = /^[a-z A-Z]+$/;
         
         
         if (fname.length < 4 || !pattern.test(fname))
         {
           alert('Please enter a valid first Name.');
            var fname = $("#fname").val("");
           return false;
         }
         
         $.ajax({
         
         "url":"checkfname.php",
         "method":"POST",
         "data":data,
         success:function(returndata){
           if(returndata==0){
             return false;
           }
           alert(returndata);
             var fname = $("#fname").val("");
         }
         
         });
         }
         
      </script>
      <!-- ////////////////////////////////// Validation for Last Name ////////////////////////////// -->
      <script type="text/javascript">
         function check_lname(){
         
         var lname = $('#lname').val();
         var data = "lname="+lname;
         var pattern = /^[a-z A-Z]+$/;
         
         
         if (lname.length < 5 ||lname.length > 20 || !pattern.test(lname))
         {
           alert('Please enter a valid Last Name.');
           var fname = $("#lname").val("");
           return false;
         }
         
         $.ajax({
         
         "url":"checklname.php",
         "method":"POST",
         "data":data,
         success:function(returndata){
           if(returndata==0){
             return false;
           }
           alert(returndata);
             var lname = $('#lname').val("");
         }
         
         });
         }
         
      </script>
      <!-- ////////////////////////////////// Validation for Email //////////////////////////////-->
      <script type="text/javascript">
         function check_email(){
            var email = $("#email").val();
             var data = "email="+email;
             var pattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,10}$/;
             // alert(data);
         
              if ( !pattern.test(email))
             {
                 alert('Please enter a valid Email.');
                var email = $("#email").val("");
                 return false;
             }
             $.ajax({
         
                "url" : "checkemail.php",
               "method":"POST",
               "data":data,
               success:function(returndata){
                  if(returndata==0){
                   return false;
                  }
               alert(returndata);
                 var email = $("#email").val("");
               }
              });
         }
      </script>
      <!-- ////////////////////////////////// Validation for Phone number //////////////////////////////-->
      <script type="text/javascript">
         function check_phonenumber(){
         
         var phonenum = $("#phonenum").val();
         var data = "phonenum="+phonenum;
         var pattern = /(7|8|9)\d{9}/;
         
         
         if (!pattern.test(phonenum))
         {
           alert('Please enter a valid number.');
           var phonenum = $("#phonenum").val("");
           return false;
         }
         if(isNaN(phonenum)){
               alert("Please Enter only number");
               var phonenum = $("#phonenum").val("");
               return false;
             }
         if(phonenum.length<10 || phonenum.length>10 ){
               alert("Please Enter 10 digit number");
               var phonenum = $("#phonenum").val("");
               return false;
             }
         
         $.ajax({
         
         "url":"checknumber.php",
         "method":"POST",
         "data":data,
         success:function(returndata){
           if(returndata==0){
             return false;
           }
           alert(returndata);
             var phonenum = $("#phonenum").val("");
         }
         
         });
         }
         
      </script>
      <!-- ////////////////////////////////// Validation for Designation //////////////////////////////-->
      <script type="text/javascript">
         function check_designation(){
         
         var designation = $("#Designation").val();
         var data = "designation="+designation;
         var pattern = /^[a-z A-Z]+$/;
         
         
         if (designation.length < 5 ||designation.length > 20 || !pattern.test(designation))
         {
           alert('Please enter a valid designation.');
           var designation = $("#designation").val("");
           return false;
         }
         
         
         }
         
      </script>
   </body>
</html>