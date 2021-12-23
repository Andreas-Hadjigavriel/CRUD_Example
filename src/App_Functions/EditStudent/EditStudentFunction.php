<?php
    $id ="";
    $fname="";
    $lname ="";
    $fathername ="";
    $grade="";
    $mobilenumber="";
    $birthday="";
    $errors = array(); 

    function getData()
    {    
        $data = array();
        $data[0] = $_POST['id'];
        $data[1] = $_POST['fname'];
        $data[2] = $_POST['lname'];
        $data[3] = $_POST['fathername'];
        $data[4] = $_POST['grade'];
        $data[5] = $_POST['mobilenumber'];
        $data[6] = $_POST['birthday'];
        return $data;
    }

    if(isset($_POST['update'])){

        $id = mysqli_real_escape_string($connection_db, $_POST['id']);
        $fname = mysqli_real_escape_string($connection_db, $_POST['fname']);
        $lname = mysqli_real_escape_string($connection_db, $_POST['lname']);
        $fathername = mysqli_real_escape_string($connection_db, $_POST['fathername']);
        $grade = mysqli_real_escape_string($connection_db, $_POST['grade']);
        $mobilenumber = mysqli_real_escape_string($connection_db, $_POST['mobilenumber']);
        $birthday = mysqli_real_escape_string($connection_db, $_POST['birthday']);

        
        // check if fields is not empty
        if (empty($id)) {
            array_push($errors, "Id is required");
        }
        if (empty($fname)) {
            array_push($errors, "First Name is required");
        }
        if (empty($lname)) {
            array_push($errors, "Surname is required");
        }
        if (empty($fathername)) {
            array_push($errors, "Fathername is required");
        }
        if (empty($grade)) {
            array_push($errors, "Grade is required");
        }
        if (empty($mobilenumber)) {
            array_push($errors, "Mobile Number is required");
        }
        if (empty($birthday)) {
            array_push($errors, "Birthday Date is required");
        }


        if (count($errors) == 0) {
            $data = getData();
            $update_Query = "UPDATE students 
                                SET `name` ='$data[1]', surname='$data[2]', fathername='$data[3]',  grade='$data[4]', mobilenumber='$data[5]', birthday ='$data[6]'
                                WHERE `id` = $data[0]";
            

            try{
                $update_Result = mysqli_query($connection_db, $update_Query);
                echo '<script>alert("Student Updated Successfully")</script>';

                /*
                if($update_Result)
                {
                    if(mysqli_affected_rows($connection_db) > 0)
                    {
                        echo '<script>alert("Data Updated Successfully")</script>';
                    }else{
                        echo 'Data Not Updated';
                        printf("error: %s\n", mysqli_error($connection_db));
                    }
                }
                */
                
            } catch (Exception $ex) {
                echo 'Error Update '.$ex->getMessage();
            }
        }
    }

?>