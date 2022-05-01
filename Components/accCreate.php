<?php
        include('dbcon.php');
        // echo "HEy";
       if(isset($_POST['accsubmit']))
	   {
	//    echo "Yha";
            $fname=$_POST['fname'];
            $email=$_POST['email'];
            $psswd=$_POST['passwd'];
            $mobile=$_POST['mobileNo'];

            // echo $fname;    
            // echo $email;    
            // echo $psswd;    
            // echo $mobile;    
            
//    $query = ;
//    echo "Executed";
//    echo $query;
	if(mysqli_query($cn,"INSERT into userDetails(fname,email,upassword,mobileNo)values('$fname','$email','$psswd','$mobile')"))
	{
		echo "<script>alert('Account Created Sucessfully!');window.location.href='../Components/index.php';</script>" ;
	}
	else
	{
        // echo "else executed";
	// echo "<script>alert('Error: Try Again!');window.location.href='../Components/index.php';</script>" ;
    
    }
	   }
        ?>