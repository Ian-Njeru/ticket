<?php
    include "./../session/session_start.php";
    include "././controller/profile.controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Ticket</title>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/pathname.js"></script>
    <script src="js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style\global.css">
    <link rel="stylesheet" href="style\sidenav.css">
    <link rel="stylesheet" href="style\profile.css">
    <link rel="stylesheet" href="style\modal.css">
</head>
<body>
<div class="profile"> 
       <?php 
       
            include "sidenav.php";
            $success = $_SESSION['success']??'';
            $error = $_SESSION['error']??'';
            unset($_SESSION['success']);
                if($success){
                    echo '<script>
                            Swal.fire({
                                    title: "Success",
                                    text: "'.$success.'",
                                    icon: "success"
                                     
                                }).then((result)=>{
                                    window.location.href = "./profile";
                                    });
                           </script>';
                }else{
                    echo htmlspecialchars($error);
                }

    ?>


    <div class="profile-details">
        <!--<div class="img"><img src=""></div>-->
        <div class="contact-details">
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" id="contactDetails">
                <h3>Contact Details</h3>
                <div class="person-name">
                    <div class="firstname">
                        <label for="firstName">First Name</label><br><br>
                        <input type="text" name="firstname" id="firstname" value="<?php echo $first_name;?>" disabled>
                    </div>
                    <div class="lastname">
                        <label for="lastName">Last Name</label><br><br>
                        <input type="text" name="lastname" id="lastname" value="<?php echo $last_name;?>" disabled>
                    </div>
                </div>

                    <div class="phone">
                        <label for="phoneNumber">Phone Number</label><br><br>
                        <input type="tel" id="phone" name="phone" value="<?php echo $phone;?>" disabled>
                    </div>
               
                <div class="edit"><button id="edit">Edit Details</button></div>
                <div class="save" hidden><button id="save" name="save" type="submit">Save Changes</button></div>
            </form>
        </div>

        <div class="account-overview">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" id="accountOverview">
                <h3>Account overview</h3>
                <table class="accountOverview">
                    
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $password;?></td>
                            <td><div class="status"><?php echo $status;?></div></td>
                            <td><i class="fa fa-cog" id="action"></i>
                                <div class="actionModal">
                                    <div class="action">
                                        <div id="close_modal">
                                            <span class="close_modal">&times;</span>
                                        </div>

                                        <div class="header">
                                            <h2>Select Action to do</h2>
                                        </div>

                                        <div class="body">
                                            <input type="radio" name="change" value="email" class="changeEmail">
                                            <label for="email">Change Email</label>
                                            <br><br>
                                                <div id="changeEmail">
                                                    <label for="email">Change Email</label>
                                                    <input type="email" name="email" id=""><br>
                                                        <div id="buttons">
                                                            <button class="submit" type="submit" name="changeEmail">Change Email</button>
                                                            <button class="reset" type="reset">Cancel</button>
                                                        </div>
                                                </div>

                                            <input type="radio" name="change" value="password" class="changePassword">
                                            <label for="password">Change Password</label>
                                            <br><br>
                                                <div id="changePassword">
                                                        <label for="password">Change Password</label>
                                                        <input type="password" name="password" placeholder = "New Password" id="newPassword"><br>
                                                        <input type="password" name="confirmPassword" placeholder = "Confirm password" id="confrimPassword"><br> 

                                                        <div class="showpassword">
                                                            <input type="checkbox" name="showPasswprd" id="">Show Password
                                                        </div>
                                                            <div id="buttons">
                                                                <button class="submit" type="submit" name="changePassword">change Password</button>
                                                                <button class="reset" type="reset">Cancel</button>
                                                            </div>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="delete-account">
            
            <form action="" method="post">
                <h3>Delete Account</h3>
                <div class="delete"><input type="button" id="deleteAccount" name="deleteAccount" value='Delete Account'></div>
            </form>
        </div>
    </div>
    </div>
<script>
    const input = document.querySelector("#phone");
    input.style.width = "100%";
    window.intlTelInput(input, {
        initialCountry: "auto",
        strictMode: true,
        nationalMode: true,
        separateDialCode: true,
        geoIpLookup: callback => {
            fetch("https://ipapi.co/json")
            .then(res => res.json())
            .then(data => callback(data.country_code))
            .catch(() => callback("ke"));

        },
        loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/js/utils.js"),
    });

    new DataTable('.accountOverview', {
        info: false,
        ordering: false,
        paging: false,
        searching: false,
    });

    $(document).ready(function(){
        $('.edit').click(function(){
            $('.edit').hide();
            $('.save').show();

            $('input[type=text], input[type=tel]').prop('disabled', false).css({
                "background-color":"#fff"
            });
            
        });

        $('input[type="radio"]').change(function(){
            var selectedValue = $(this).val();
            var selectedClass = $(this).attr('class');

            console.log("."+selectedClass+"");

            if(selectedClass === 'changeEmail'){
                $('#changeEmail').show();
                $('#changePassword').hide();
                $('.reset').click(function(){
                    $("input[type='email']").val('');
                    $('#changeEmail').hide();
                });
            }else{
                $('#changePassword').show();
                $('#changeEmail').hide();
                $('.reset').click(function(){
                    $("input[type='password']").val('');
                    $('#changePassword').hide();
                });
            }

            
        });
        

       $('#deleteAccount').click(function(){
            swal.fire({
                title: "<b>Do you want to delete your account?</b>",
                icon: "warning",
                text: "You won't be able to revert this",
                showCancelButton: true,
                confirmButtonColor: "#4f8cff",
                cancelButtonColor: "#ff4d4d",
                confirmButtonText: "Yes, delete my account."

            }).then((result)=>{
            if(result.isConfirmed){
                swal.fire({
                    title: "You have deleted your account!",
                    text: "You will receie an email recognizing your deleted account.",
                    icon: "success",
                    timer: 10000
                });
            }
        });
       });

       
       $('input[type="checkbox"]').change(function(){
        var getCheckboxType = $(this).prop('type');
        
            var newPass = $("#newPassword").prop('type');
            var confirmPass = $("#confrimPassword").prop('type'); 
            
            if(newPass && confirmPass  === 'password'){
                $("#newPassword").prop('type','text');
                $("#confrimPassword").prop('type', 'text');
            }else{
                $("#newPassword").prop('type','password');
                $("#confrimPassword").prop('type', 'password');
            }
       });
    });
</script>
</body>
</html>