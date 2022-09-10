<?php
   if(isset($_POST['submit'])){

       $name = $_POST['name'];
       $email = $_POST['email'];
       $zip = $_POST['zip'];
       
       $errorEmpty = false;
       $errorEmail = false;
       
       if(empty($name) || empty($email) || empty($zip)){
           echo '<span style="color: red;">Fill in all fields</span>';
           $errorEmpty = true;
       }
       else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<span style="color: red;">Write email correctly</span>';
        $errorEmail = true;
       }
       else{
        
        $con = new mysqli('localhost', 'root', '', 'mail');
        if($con->connect_error){
            die('connection failed').$con->connect_error();
        }
        
        $stmt = $con->prepare('INSERT INTO CUSTOM(NAME, EMAIL, POSTAL) VALUES(?, ?, ?)');
        $stmt->bind_param("ssi", $name, $email, $zip);
        $stmt->execute();
        $stmt->close();
        $con->close();
        echo '<span style="color: green;">Successfully field</span>';
       }
    }

else{
    echo 'There was an error';
}
    ?>
<script>
    $('#mail-name','#mail-email','#mail-zip').removeClass('input-error');
    var emptyEmail = '<?php echo $errorEmail ?>';
    var errorEmpty = '<?php echo $errorEmpty ?>';

    if(errorEmpty == true){
        $('#mail-name','#mail-email','#mail-zip').addClass('input-error');
    }
    if(emptyEmail == true){
        $('#mail-email').addClass('input-error');
    }
    if(emptyEmail == false && errorEmpty == false){
        $('#mail-name').val("");
        $('#mail-email').val("");
        $('#mail-zip').val("");
    }
</script>