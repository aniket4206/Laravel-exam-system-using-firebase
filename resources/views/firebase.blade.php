<html>
   <head>
      <title>Phone Number Authentication using Firebase In Laravel 8</title>
      <!-- CSS only -->
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <!-- Js only -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   </head>
   <body>
      <div class="container">
      <div class="jumbotron"><br />
      <div class="container text-center">
         <h1>Phone Number Authentication using <br />Firebase In Laravel 8</h1>
      </div>
      </div>
      <br />
         <div class="alert alert-danger" id="error" style="display: none;"></div>
         <div class="card align-items-center" style="width: 45rem;align: center;">
            <div class="card-header">
               Enter Phone Number
            </div>
            <div class="card-body">
               <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
               <form>
                  <label>Phone Number:</label><br />
                  <input type="text" id="number" class="form-control" placeholder="+91********"><br />
                  <div id="recaptcha-container"></div><br />
                  <button type="button" class="btn btn-success" onclick="phoneSendAuth();">SendCode</button><br />
               </form>
            </div>
         </div>
         <div class="card align-items-center" style="margin-top: 10;width: 45rem;">
            <div class="card-header">
               Enter Verification code
            </div>
            <div class="card-body">
               <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
               <form>
                  <input type="text" id="verificationCode" class="form-control" placeholder="Enter verification code"><br />
                  <button type="button" class="btn btn-success" onclick="codeverify();">Verify code</button><br />
               </form>
            </div>
         </div>
      </div>
      <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
      <script>
         var firebaseConfig = {
            apiKey: "AIzaSyC2nJSiM23-s6m8CyhTmNUJ9z-g1zlOYWE",
            authDomain: "laravel-crud-1e534.firebaseapp.com",
            databaseURL: "https://laravel-crud-1e534-default-rtdb.firebaseio.com",
            projectId: "laravel-crud-1e534",
            storageBucket: "laravel-crud-1e534.appspot.com",
            messagingSenderId: "556381023988",
            appId: "1:556381023988:web:8b67c0333914fff312f8a1",
            measurementId: "G-X4EZN30824"
         };
           
         firebase.initializeApp(firebaseConfig);
      </script>
      <script type="text/javascript">
         window.onload=function () {
           render();
         };
         
         function render() {
             window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
             recaptchaVerifier.render();
         }
         
         function phoneSendAuth() {
                
             var number = $("#number").val();
               
             firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
                   
                 window.confirmationResult=confirmationResult;
                 coderesult=confirmationResult;
                 console.log(coderesult);
         
                 $("#sentSuccess").text("Message Sent Successfully.");
                 $("#sentSuccess").show();
                   
             }).catch(function (error) {
                 $("#error").text(error.message);
                 $("#error").show();
             });
         
         }
         
         function codeverify() {
         
             var code = $("#verificationCode").val();
         
             coderesult.confirm(code).then(function (result) {
                 var user=result.user;
                 
                 $("#successRegsiter").text("you are register Successfully.");
                 $("#successRegsiter").show();
         
             }).catch(function (error) {
                 $("#error").text(error.message);
                 $("#error").show();
             });
         }
      </script>
   </body>
</html>