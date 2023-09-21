<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="POST">
              <div id="msg"></div>

              <div class="form-group">
                 <label>First Name</label>
                 <input  type="text" class="form-control" id="full_name"  alt="full_name" placeholder="Please enter first name" autocomplete="off">
                 <span class="fname-error"></span>
               </div>
               <div class="form-group">
                 <label>Middle Name</label>
                 <input  type="text" class="form-control" id="middle_name"  alt="middle_name" placeholder="Optional" autocomplete="off">
                 <span class="middle-error"></span>
               </div>
               <div class="form-group">
                 <label>Last Name</label>
                 <input  type="text" class="form-control" id="last_name"  alt="last_name" placeholder="Please enter last name" autocomplete="off">
                 <span class="lastname-error"></span>
               </div>

               <div class="form-group">
                 <label>Email Address</label>
                  <input type="text" class="form-control" id="email_address" alt="email_address" placeholder="Please enter Email Address" autocomplete="off">
                  <span class="email-error"></span>
               </div>

               <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" id="username" alt="username" placeholder="Please enter Username" autocomplete="off">
                  <span class="uname-error"></span>
               </div>

               <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" alt="password" placeholder="Please enter Password" autocomplete="off">
                    <span class="pass-error"></span>
               </div>

               

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <div class="form-group mt-2">
                  <button type="button" class="btn btn-primary" value="Submit" id="btn-submit">Submit</button>
               </div>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript"> 

    document.addEventListener('DOMContentLoaded', () => {
      let btn = document.querySelector('#btn-submit')
          btn.addEventListener('click', (event) => {
              event.preventDefault();

              const fullname = document.querySelector('input[alt=full_name]').value;
              console.log('==========fullname==========')
              console.log(fullname);

               const middlename = document.querySelector('input[alt=middle_name]').value;
              console.log('==========middlename==========')
              console.log(middlename);

               const lastname = document.querySelector('input[alt=last_name]').value;
              console.log('==========lastname==========')
              console.log(lastname);

              const emailaddress = document.querySelector('input[alt=email_address]').value;
              console.log('==========emailaddress==========')
              console.log(emailaddress);

              const username = document.querySelector('input[alt=username]').value;
              console.log('==========username==========')
              console.log(username);

              const password = document.querySelector('input[alt=password]').value;
              console.log('==========password==========')
              console.log(password);


          function isValidFullname(){            
             var pattern = /^[a-z A-Z ]+$/;
             var full_name = $("#full_name").val();
             if(pattern.test(full_name) && full_name !== ""){
                $("#full_name").removeClass("is-invalid").addClass("is-valid");
                $(".fname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

             }else if(full_name === ""){
               $("#full_name").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Required Full Name");
                 $(".fname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#full_name").removeClass("is-valid").addClass("is-invalid");
               $(".fname-error").html("Please input Character Only");
                 $(".fname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          }


          function isValidmiddlename(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var  middle_name = $("#middle_name").val();
             if(pattern.test(middle_name) && middle_name !== ""){
                $("#middle_name").removeClass("is-invalid").addClass("is-valid");
                $(".middle-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;

             }else if(middle_name === ""){
              input.removeAttribute('required');
               $("#middle_name").removeClass("is-valid").addClass("is-invalid");
               $(".middle-error").html("Required middle Name");
                 $(".middle-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#middle_name").removeClass("is-valid").addClass("is-invalid");
               $(".middle-error").html("Please input Character Only");
                 $(".middle-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          }

          function isValidlastname(){
             
             var pattern = /^[a-z A-Z ]+$/;
             var last_name = $("#last_name").val();
             if(pattern.test(last_name) && last_name !== ""){
                $("#last_name").removeClass("is-invalid").addClass("is-valid");
                $(".lastname-error").css({
                 "color": "green",
                 "font-size": "14px",
                 "display": "none"
               });
                return true;
last_name             }else if(last_name === ""){
               $("#last_name").removeClass("is-valid").addClass("is-invalid");
               $(".lastname-error").html("Required Full Name");
                 $(".lastname-error").css({
                   "color": "red",
                   "font-size": "14px"
                 });
             }else{
               $("#last_name").removeClass("is-valid").addClass("is-invalid");
               $(".lastname-error").html("Please input Character Only");
                 $(".lastname-error").css({
                 "color": "red",
                 "font-size": "14px",
                 "display": "block"
               });

             };

          }


            function isValidUsername(){
           
               var pattern = /^[a-z A-Z 0-9 #_.]+$/;
               var username = $("#username").val();
               if(pattern.test(username) && username !== ""){
                  $("#username").removeClass("is-invalid").addClass("is-valid");
                  $(".uname-error").css({
                   "color": "green",
                   "font-size": "14px",
                   "display": "none"
                 });
                  return true;

               }else if(username === ""){
                 $("#username").removeClass("is-valid").addClass("is-invalid");
                 $(".uname-error").html("Required Username");
                   $(".uname-error").css({
                     "color": "red",
                     "font-size": "14px"
                   });
               }else{
                 $("#username").removeClass("is-valid").addClass("is-invalid");
                 $(".uname-error").html("Please input Character Only");
                   $(".uname-error").css({
                   "color": "red",
                   "font-size": "14px",
                   "display": "block"
                 });

               };

            }

           function isValidEmail(){
             
                 var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
                 var email_address = $("#email_address").val();
                 if(pattern.test(email_address) && email_address !== ""){
                    $("#email_address").removeClass("is-invalid").addClass("is-valid");
                    $(".email-error").css({
                     "color": "green",
                     "font-size": "14px",
                     "display": "none"
                   });
                    return true;

                 }else if(email_address === ""){
                   $("#email_address").removeClass("is-valid").addClass("is-invalid");
                   $(".email-error").html("Required Email address");
                     $(".email-error").css({
                       "color": "red",
                       "font-size": "14px"
                     });
                 }else{
                   $("#email_address").removeClass("is-valid").addClass("is-invalid");
                   $(".email-error").html("Please input Unique Email Address");
                     $(".email-error").css({
                     "color": "red",
                     "font-size": "14px",
                     "display": "block"
                   });

                 };

              }


           function isValidPassword(){
                if($("#password").val() === ""){
                  

                    $($("#password")).addClass("is-invalid");
                    $(".pass-error").html("Please enter Password");
                    $(".pass-error").css({"color" : "red", "font-size" : "14px"})
                  return false;

                 }else{

                   $("#password").removeClass("is-invalid").addClass("is-valid");
                   $(".pass-error").html("");

                  return true;
           
                }
              }


            isValidFullname();
            isValidEmail();
            isValidUsername();
            isValidPassword();

            var data = new FormData(this.form);

            data.append('fullname', fullname);
            data.append('middlename', middlename);
            data.append('lastname', lastname);
            data.append('emailaddress', emailaddress)
            data.append('username', username)
            data.append('password', password)


            if(isValidFullname() === true  &&isValidmiddlename() === true  &&isValidlastname() === true  && isValidEmail() === true && isValidUsername() === true && isValidPassword() === true){

                 $.ajax({

                         url: '../config/add_admin.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                      success: function(res){
                        console.log('==================res===========');
                        console.log(res);
                        $('#msg').html(res);

                    },error: function(res){
                      console.log("Failed Insert");
                    }

                  });

             }

          });
     });
  </script>