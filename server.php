<?php
    session_start();

    // connect to the database
    $conn = new mysqli('localhost', 'root', '', 'letmegrab');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // REGISTER USER
    if (isset($_POST['btnSubmit'])) {
        // receive all input values from the form
        $name               = $_POST['name'];
        $email              = $_POST['email'];
        $password           = md5($_POST['password']);
        $contact_number     = $_POST['contact_number'];
        $aadhar_card_number = $_POST['aadhar_card'];
        $pan_card_number    = $_POST['pan_card'];
        $gender             = $_POST['gender'];
        $website_url        = $_POST['website_url'];
        $bank_name          = $_POST['bank_name'];
        $branch_name        = $_POST['branch_name'];
        $beneficiary_name   = $_POST['beneficiary_name'];
        $account_number     = $_POST['account_number'];
        $account_type       = $_POST['account_type'];
        $ifsc_code          = $_POST['ifsc_code'];
        $created_at         = date('Y-m-d H:i:s');
        $modified_at        = date('Y-m-d H:i:s');
        
        if(isset($_FILES['photo'])) {
            $file_name  = $_FILES['photo']['name'];
            $file_size  = $_FILES['photo']['size'];
            $file_tmp   = $_FILES['photo']['tmp_name'];
            $file_type  = $_FILES['photo']['type'];
            // $file_ext   = strtolower(end(explode('.',$_FILES['photo']['name'])));

            move_uploaded_file($file_tmp, "img/users/".$file_name);
        } else {
            $file_name  = "";
        }

        $query = "INSERT INTO users (`name`, `email`, `password`, `photo`, `contact_number`, `aadhar_card_number`, `pan_card_number`, `gender`, `website_url`, `bank_name`, `branch_name`, `beneficiary_name`, `account_number`, `account_type`, `ifsc_code`, `created_at`, `modified_at`) VALUES('$name', '$email', '$password', '$file_name', '$contact_number', '$aadhar_card_number', '$pan_card_number', '$gender', '$website_url', '$bank_name', '$branch_name', '$beneficiary_name', '$account_number', '$account_type', '$ifsc_code', '$created_at', '$modified_at')";
            
        if($conn->query($query) == TRUE) {
            $last_id = $conn->insert_id;
            $_SESSION['success'] = "Data inserted successfully!";
                
            $sql = "SELECT * FROM users WHERE id = $last_id";
            /** PDF GENERATE */
            require('fpdf/fpdf.php');
            $header = array('#', 'Name', 'Email', 'Password', 'Photo', 'Contact No.', 'Aadhar Card No.', 'PAN Card No.', 'Gender', 'Website URL', 'Bank Name', 'Branch Name', 'Beneficiary Name', 'Account No.', 'Account Type', 'IFSC Code', 'Created Date', 'Modified Date');
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 12);
            // foreach($header as $column_heading) {
            //     $pdf->Cell(90,12,$column_heading,1);
            // }
            if($result = $conn->query($sql)) {
                foreach($result->fetch_row() as $key => $column) {
                    $pdf->SetFont('Arial','',12);	
                    $pdf->Ln();
                    // $pdf->Cell(90,12,$header[$key],1);
                    $ext = explode(".", $column);
                    if(isset($ext[1])) {
                        if(strtolower($ext[1]) == "jpeg" || strtolower($ext[1]) == "jpg" || strtolower($ext[1]) == 'png' || strtolower($ext[1] == 'gif')) {
                            // echo $column; exit;
                            $img = 'img/users/'.$column;
                            $pdf->Cell(90,12,$header[$key],1);
                            $pdf->Cell(90, 12, "", 0, 1, 'C',$pdf->Image($img));
                            // $pdf->Cell(90,12,$pdf->Image($img),1);
                            // $pdf->Image($img);
                        } else {
                            $pdf->Cell(90,12,$header[$key],1);
                            $pdf->Cell(90,12,$column,1);
                        }
                    } else {
                        $pdf->Cell(90,12,$header[$key],1);
                        $pdf->Cell(90,12,$column,1);
                    }
                }
            }

            $pdf->Output('D');                   
  	        header('location: index.php');
        }
    }
?>