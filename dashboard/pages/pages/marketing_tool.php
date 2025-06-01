<?php include("../session_login.php") ?>
<?php include("chat_mysqli.php") ?>
<?php 
    include("../../db/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Summary</title>
  <script src="../plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/gradient_buttons.css">
  <link rel = "icon" href="../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../dist/css/size_adjustment_G_D_S_R.css">
  <style>
    .header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
    }
    .span_alert {
    display:none
    }

    .bigicon {
        font-size: 22px;
        color: #36A0FF;
    }
    
    input[type=text], input[type=password], #message {
      border: 1px solid purple;
    }    
    .content-wrapper {
      background-color: white;
      padding: 30px 50px;
    }
    
    .new-sec {
      border-top: 3px solid goldenrod;
      padding: 20px;
    }
    body {
            color: black;
            line-height: 1.6;
        }
        h1, h2, h3 {
            color: green;
        }
        ul {
            padding-left: 20px;
        }
        
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
  
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../../assets/images/cropped-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCWF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/fafa.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

       <?php include"sidebar-menu.php" ?>
    </div>
  </aside>
<?php include"../header_green.php" ?>
  <div class="content-wrapper">
    <div class="new-sec">
      <h1>
        Tools of WJCW crowdfunding platform 
  </h1>
      <strong>
      Your Digital Marketing Toolbox
      </strong>
      <p>
      These tools are designed to help improve your brand’s marketing, web performance,
analysis, digital experience, and more
. 100% believe and trust yourself with full
 Confidence with full knowledge we are very blessed our beloved prophet
Mohammed (s.a.w.w) city of knowledge
and our beloved Imam Ali (a.s) gate of this
Knowledge city ,we must get knowledge   
    </p>
      <p>
      This WJCW CF work together help each other’s for achieve aims and objectives of
WJCW "Honesty is the best policy" is a well-known proverb that emphasizes the
importance of being truthful and sincere in all aspects of life. It suggests that honesty
is not only morally right but also leads to positive outcomes and builds trust and
credibility with others. By being honest in our words and actions, we can maintain
strong relationships, earn respect, and avoid the negative consequences of deceit
and dishonesty. Ultimately, honesty is a fundamental value that guides us to make
ethical decisions and live with integrity.  
    </p>
      <p>
      Be faithful and hard work fallow the system ,system will follow you 
      </p>
      <ul>
        <li>
          Unity is very important 
          <br/> Work with passion on this platform worldwide 

        </li>
        <li>
        Unity is power.
        </li>
    </ul>
  </div>
  <div class="new-sec">

    <h1>Motivation is essential for the success of a networking and crowdfunding platform. Here are several reasons why motivation is particularly important in this context:</h1>    
        <br/>
    <h3>1. Building Community Engagement:</h3>
    <ul>
        <li><strong>Motivation to Connect:</strong> Users are more likely to engage with the platform when they feel motivated to connect with others. This can foster a sense of community where individuals feel they belong, share common interests, and support each other.</li>
    </ul>
    
    <h3>2. Encouraging Participation:</h3>
    <ul>
        <li><strong>Active Involvement:</strong> Motivated users are more likely to participate in discussions, share ideas, and contribute to projects. This active involvement is crucial for the vibrancy and sustainability of the platform.</li>
    </ul>
    
    <h3>3. Driving Fundraising Success:</h3>
    <ul>
        <li><strong>Increased Contributions:</strong> Motivated project creators and backers are essential for a successful crowdfunding platform. When users feel inspired by a project, they are more likely to contribute financially and advocate for it within their networks.</li>
    </ul>
    
    <h3>4. Enhancing User Experience:</h3>
    <ul>
        <li><strong>Positive Feedback Loop:</strong> A motivated community enhances the overall user experience. Satisfied users are more likely to return, share their experiences, and invite others, creating a positive feedback loop that benefits the platform.</li>
    </ul>
    
    <h3>5. Fostering Innovation:</h3>
    <ul>
        <li><strong>Idea Generation:</strong> A motivated network encourages creativity and innovation. Users who feel empowered are more likely to share unique ideas and collaborate on projects, leading to diverse and innovative solutions.</li>
    </ul>
    
    <h3>6. Building Trust and Credibility:</h3>
    <ul>
        <li><strong>Social Proof:</strong> When users see others actively engaging and successfully raising funds, it builds trust in the platform. Motivation among successful users can serve as social proof, attracting new users and projects.</li>
    </ul>
    
    <h3>7. Attracting Diverse Projects:</h3>
    <ul>
        <li><strong>Variety of Offerings:</strong> A motivated community can lead to a diverse range of projects being presented on the platform. This variety can attract a broader audience of backers, increasing the chances of successful funding.</li>
    </ul>
    
    <h3>8. Creating Value for Users:</h3>
    <ul>
        <li><strong>Shared Success:</strong> When users feel motivated to support each other, it creates a culture of shared success. As projects succeed, it reinforces the value of the platform and encourages more users to engage.</li>
    </ul>
    
    <h3>9. Driving Growth and Expansion:</h3>
    <ul>
        <li><strong>Referral Networks:</strong> Motivated users are more likely to refer others to the platform, facilitating organic growth. Word-of-mouth marketing from enthusiastic users can significantly expand the platform's reach.</li>
    </ul>
    
    <h3>10. Sustaining Momentum:</h3>
    <ul>
        <li><strong>Long-Term Engagement:</strong> Maintaining motivation is essential for the long-term sustainability of the platform. Regularly engaging users through updates, success stories, and community-building activities can keep the momentum going.</li>
    </ul>
    
    <h3>11. Facilitating Learning Opportunities:</h3>
    <ul>
        <li><strong>Skill Development:</strong> A motivated network can serve as a learning platform where users share knowledge, skills, and experiences. This collaborative environment can enhance the overall capability of the community.</li>
    </ul>
    
    <h3>Conclusion</h3>
    <p>In summary, motivation is the lifeblood of a networking and crowdfunding platform. It drives engagement, fosters innovation, and creates a supportive community that enhances user experience and project success. By focusing on strategies that inspire and motivate users—such as providing recognition, facilitating connections, and sharing success stories—you can cultivate a thriving ecosystem that benefits everyone involved.</p>

  </div>

<!--
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
-->
  </div>
  <!-- /.content-wrapper -->


</div>
<?php include"../copy_right.php"; ?>  
<script>
const userData = <?= json_encode($me) ?>;
$("#fname").val(userData.first_name);
$("#lname").val(userData.last_name);
$("#member_id").val(userData.member_id);
$("#email").val(userData.email);
$("#phone").val(userData.contact_no_1);  
$("#member_id").attr("disabled", "disabled");

$("#submit").click(function(){
event.preventDefault();
var firstname = $("#fname").val();
var lastname = $("#lname").val();
var member_id = $("#member_id").val();
var email = $("#email").val();
var contactno = $("#phone").val();  

var message = $("#message").val();    
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    
if(!emailReg.test(email)){
    $("#email_err").hide();
    $("#email_span").hide();
     $("#email").after('<span class="text-danger" id="email_err">Enter a valid email address.</span>');
    return false;
}else{
    $("#email_err").hide();
}

if (firstname == ""){
    $("#fname_span").show()
}else{
    $("#fname_span").hide()
}

if (lastname == ""){
    $("#lname_span").show()
}else{
    $("#lname_span").hide()
}    
    
if (email == ""){
    $("#email_span").show()
}else{
    $("#email_span").hide()
}
if (member_id == ""){
    $("#member_id_span").show()
}else{
    $("#member_id_span").hide()
}
    
if (contactno == ""){
    $("#phone_span").show()
}else{
    $("#phone_span").hide()
}

if ($("#message").val().trim() == ""){
    $("#message_span").show()
}else{
    $("#message_span").hide()
}
    
if($("#message").val().trim() == ""){
    return false;
}
    
if(member_id == "" || firstname == "" || lastname == "" || email == "" || contactno == "" || $("#message").val().trim() == ""){
    return false;
}   
    
swal({
  title: "SEND",
  text: "Do you want to send the message ?",
  icon: "info",
  buttons: true,
})
.then((willSave) => {
  if (willSave) {    
    $("#submit").html("Loading, please wait...");
    $("#submit").attr("disabled", "disabled");
    $.ajax({
            url:"../../ajax/send_email_to_contact_us.php",
            method:"POST",
            data:{
              to: '<?php echo $contactUsEmail ?>',
              memberId: userData.member_id,
              firstName: firstname,
              lastName: lastname,
              email: email,
              contactNo: contactno, 
              message: message},
                    success:function(data, success){
                    if(data == 0){
                       swal("Your entered wrong member id !", {
                          icon: "error",
                        });
                    }else{
                        $("#message").val("");
                        
                       swal("Your message has been sent!", {
                          icon: "success",
                        });
                  
                        $("#submit").html("Submit");
                        $("#submit").attr("disabled", false);
                        
                    }
                    }
                        
})
      
  }      
      
});
});
    
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
