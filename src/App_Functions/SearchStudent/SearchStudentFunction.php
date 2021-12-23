
<?php

    $id ="";
    $errors = array(); 

    $searchName= ""; 
    $searchSurname ="";  
    $searchFathername=""; 
    $searchGrade="";
    $searchMobilenumber="";
    $searchBirthday="";


    // Search Functionality
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
    
    if(isset($_POST['search']))
    {

        $id = mysqli_real_escape_string($connection_db, $_POST['id']);
        
        // check if fields is not empty
        if (empty($id)) {
            array_push($errors, "Id is required");
        }

        if (count($errors) == 0) {

            $data = getData();
            $search_Query = "SELECT * FROM students WHERE id = $data[0]";
            
            try{

                $search_Result = mysqli_query($connection_db, $search_Query);
                
                if($search_Result)
                {
                    if(mysqli_num_rows($search_Result))
                    {
                        while($row = mysqli_fetch_array($search_Result))
                        {        
                                $id = $row['id'];
                                $searchName = $row['name'];
                                $searchSurname = $row['surname'];
                                $searchFathername = $row['fathername'];
                                $searchGrade = $row['grade'];
                                $searchMobilenumber = $row['mobilenumber'];
                                $searchBirthday = $row['birthday'];
                        }
                    }else{
                        echo 'No Data For This Id';
                    }
                }else{
                    echo 'Result Error';
                }

                /* 
                if($search_Result)
                {
                    if(mysqli_affected_rows($connection_db) > 0)
                    {
                        echo 'Search Success';
                    }else{
                        echo 'Search Not Success';
                        printf("error: %s\n", mysqli_error($connection_db));
                    }
                }
                */
                
            } catch (Exception $ex) {
                echo 'Error Search '.$ex->getMessage(); 
            }
        }
    }
?>