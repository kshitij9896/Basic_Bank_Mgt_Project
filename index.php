<?php include 'config.php';?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description">
    <meta name="keywords">
    <title>Basic Bank Mgt | Sparks Foundation </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="icon" href="img/favicon.ico" type="image/ico" sizes="16x16"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script> -->
</head>

<body ondragstart="return false" onselectstart="return false">
    <div id="header"></div>
    <div id="mainsection"></div>
    <div class="parallax-container">
        <div class="parallax ">
            <img src="img/ferran-fusalba-rosello-WgUHuGSWPVM-unsplash.jpg" class="responsive-img">
        </div>
    </div>
    <div id="customers" class="show-on-small">
    </div>
    <div class="parallax-container">
    <div class="parallax"><img src="img/ferran-fusalba-rosello-WgUHuGSWPVM-unsplash.jpg" class="responsive-img">
        </div>
    </div>


    <div id="modal1" class="modal">
    <div class="modal-content">
        <div class="contactus-section">
            <h2 class="center-align blue-text">BANKING</h2>
            <div class="container">
            </div>
            <div class="row">
                <div class="col s12 l6 offset-l3">
                    <div class="row hoverable">
                        <form class="col s12" name="transfer" action="index.php" method="post" id="myform">
                            <div class="row">
                                <div class="input-field col s12 ">
                                    
 <select name="c_id" tabindex="2">
     <option disabled selected>Select A/c</option>
           <?php
            // require 'config.php';
            $sql=$conn->query("select * from customers");
            while($row=mysqli_fetch_array($sql))
            {
        ?>
        <!-- <input id="c_id" type="dropdown" required class="validate" name="c_id" tabindex="1" > -->
        <!-- <option value="0"></option> -->

            <option ><?php echo $row["c_id"]; ?></option>
        <?php
            }
        ?>
    </select>

      
 <label for="c_id"><i class="fa fa-user">&nbsp; Sender's</i></label>
                                   

                                 

                                   
                                    <!-- <div id="usermsg"></div> -->
                                </div>
                            </div>




                            <div class="row">
                                <div class="input-field col s12">

    <select name="c_id2" tabindex="2">
        <option disabled selected>Select A/c</option>
           <?php
            $sql=$conn->query("select * from customers");
            while($row=mysqli_fetch_array($sql))
            {
        ?>
        <!-- <input id="c_id" type="dropdown" required class="validate" name="c_id" tabindex="1" > -->
        <!-- <option value="0"></option> -->

            <option ><?php echo $row["c_id"]; ?></option>
        <?php
            }
        ?>
    </select>

     
   


  
 <label for="c_id"><i class="fa fa-user">&nbsp;Receiver A/c*</i></label>
                                   

                                   <!--  <input id="c_id2" type="number" required class="validate" name="c_id2">
                                    <label for="c_id2"><i class="fa fa-envelope" tabindex="2">&nbsp; Receiver A/c</label></i>
 -->                                    <div id="emailmsg"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="amt" type="number" required class="validate" name="amt"  tabindex="3" value="100">
                                    <label for="amt"><i class="fa fa-pencil-square-o">&nbsp; Amount*</label></i>
                                    <div id="qrymsg"></div>
                                </div>
                            </div>
                            <div class="row center-align">
                                <input type="submit" class="btn btn primary #0d47a1 blue darken-4" name="submit" value="submit" id="submit" style="text-transform: capitalize;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</label>
</div>
</div>
</label>
</div>
</div>
    <div id="footer"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
<script>
$(document).ready(function() {
    $('#header').load('header.php');
    $('#mainsection').load('mainsection.php');
    $('#customers').load('customers.php');
    // $('#kshitijskills').load('skills.html');
    // $('#experience').load('experience.html');
    // $('#contactkshitij').load('contact.html');
    $('#footer').load('Footer.php');
});
</script>
<script>
$(document).ready(function() {
    $('.parallax').parallax();
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('select').formSelect();

        

    (function($) {
        $(document).on('contextmenu', 'img', function() {
            return false;
        });
    })(jQuery);

});
</script>
<?php

require 'config.php';
     if(isset($_POST['submit']))
    {   
        //echo $tcode;

        $ac1 = $_POST['c_id'];
        $ac2 = $_POST['c_id2'];
        $amt1 = $_POST['amt'];
      
        
 
           // $qry="UPDATE  WHERE c_id = '$ac1";
           // $upd="UPDATE customers SET avl_bal='$amt' WHERE c_id='$ac2'";
            
                        $qry="INSERT INTO transfer (c_id,c_id2,amt) VALUES ('$ac1','$ac2','$amt1')";
                        $amt2 = 100;
                        $upd="UPDATE customers SET avl_bal = '$amt2' WHERE c_id = '$ac2'"; 

                if($conn->query($qry)===TRUE && $conn->query($upd)===TRUE)
                {
                    ?><script>
                            alert("Transaction Successfull!!!");
                        
                                    
                                    
                            </script>
                    <?php
                }
                else
                {
                  ?>
                    <script>
                               
                    
                      alert("Error! Transaction Unsuccessfull!!");
                                          
                    </script>
                    <?php
                }
                    
?>        


<?php    

 }       $conn->close();

?>