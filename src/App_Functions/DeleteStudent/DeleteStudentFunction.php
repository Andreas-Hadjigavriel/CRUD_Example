<?php
    $id ="";
    $errors = array(); 

    // Delete Functionality
    function getData()
    {
        $data = array();
        $data[0] = $_POST['id'];
        return $data;
    }
    
    if(isset($_POST['delete']))
    {
        
        $id = mysqli_real_escape_string($connection_db, $_POST['id']);

         
        // check if field is not empty
        if (empty($id)) {
            array_push($errors, "Id is Required");
        }

        if (count($errors) == 0) {
            $data = getData();
            $delete_Query = "DELETE FROM students WHERE id = $data[0]";
            
            try{
    
                $delete_Result = mysqli_query($connection_db, $delete_Query);
                echo '<script>alert("Student Deleted Successfully")</script>';
    
                /* 
                if($delete_Result)
                {
                    if(mysqli_affected_rows($connection_db) > 0)
                    {
                        echo 'Data Deleted';
                    }else{
                        echo 'Data Not Deleted';
                        printf("error: %s\n", mysqli_error($connection_db));
                    }
                }
                */
                
            } catch (Exception $ex) {
                echo 'Error Insert '.$ex->getMessage(); 
            }
        }
  
      
    }
?>