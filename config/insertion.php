<?php
    class Insertion {
        private $servername = "localhost";
        private $dbname = "blog";
        private $username = "root";
        private $password = "";
        private $conn;

        public function insert(){
            // $this->conn = null;

            try{
                $this->conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected Successfully";

                $this->conn->stmnt = $this->conn->prepare("INSERT INTO `posts`(`title`, `body`, `author`, `created_at`) VALUES (:title, :body,:author,:created_at)");
                $this->conn->stmnt->bindParam(':title', $title);
                $this->conn->stmnt->bindParam(':body', $body);
                $this->conn->stmnt->bindParam(':author', $author);
                $this->conn->stmnt->bindParam(':created_at', $created_at);



                // $title= 'NOTICE OF 2022 PROFESSIONAL EXAMINATION TECHNOLOGY';
                // $body = "The Nigerian Institute of Animal Science (NIAS) is a Professional and Industry Regulatory Agency under the Federal Ministry of Agriculture and Rural Development, established by Act No. 26 of 2007 as Amended 2015. Among its mandates are the powers to prescribe and regulate the standards of academic qualifications and practical skills to be attained by persons seeking to be registered as Members, Associates or Fellows of the Institute as the case may be, and the regulation of all issues pertaining to Animal Husbandry in Nigeria.
                // Notice is hereby given that the 2022 Professional Examination for the Admission of Registered Animal Scientists (RAS) and Graduate Animal Scientists (GAS) of the Nigerian Institute of Animal Science (NIAS) is scheduled to hold as follows:
                // ";
                // $author= 'Scope Softwares Solution';
                // $created_at = date("Y-m-d h:i:sa");
                // $this->conn->stmnt->execute();

                // $title= 'NOTICE OF 2022 PROFESSIONAL EXAMINATION ENTERTAINMENT';
                // $body = "The Nigerian Institute of Animal Science (NIAS) is a Professional and Industry Regulatory Agency under the Federal Ministry of Agriculture and Rural Development, established by Act No. 26 of 2007 as Amended 2015. Among its mandates are the powers to prescribe and regulate the standards of academic qualifications and practical skills to be attained by persons seeking to be registered as Members, Associates or Fellows of the Institute as the case may be, and the regulation of all issues pertaining to Animal Husbandry in Nigeria.
                // Notice is hereby given that the 2022 Professional Examination for the Admission of Registered Animal Scientists (RAS) and Graduate Animal Scientists (GAS) of the Nigerian Institute of Animal Science (NIAS) is scheduled to hold as follows:
                // ";
                // $author= 'Scope Softwares Solution';
                // $created_at = date("Y-m-d h:i:sa");
                // $this->conn->stmnt->execute();

                // $title= 'NOTICE OF 2022 PROFESSIONAL EXAMINATION SPORT';
                // $body = "The Nigerian Institute of Animal Science (NIAS) is a Professional and Industry Regulatory Agency under the Federal Ministry of Agriculture and Rural Development, established by Act No. 26 of 2007 as Amended 2015. Among its mandates are the powers to prescribe and regulate the standards of academic qualifications and practical skills to be attained by persons seeking to be registered as Members, Associates or Fellows of the Institute as the case may be, and the regulation of all issues pertaining to Animal Husbandry in Nigeria.
                // Notice is hereby given that the 2022 Professional Examination for the Admission of Registered Animal Scientists (RAS) and Graduate Animal Scientists (GAS) of the Nigerian Institute of Animal Science (NIAS) is scheduled to hold as follows:
                // ";
                // $author= 'Scope Softwares Solution';
                // $created_at = date("Y-m-d h:i:sa");
                // $this->conn->stmnt->execute();

                // $title= 'NOTICE OF 2022 PROFESSIONAL EXAMINATION NEWS';
                // $body = "The Nigerian Institute of Animal Science (NIAS) is a Professional and Industry Regulatory Agency under the Federal Ministry of Agriculture and Rural Development, established by Act No. 26 of 2007 as Amended 2015. Among its mandates are the powers to prescribe and regulate the standards of academic qualifications and practical skills to be attained by persons seeking to be registered as Members, Associates or Fellows of the Institute as the case may be, and the regulation of all issues pertaining to Animal Husbandry in Nigeria.
                // Notice is hereby given that the 2022 Professional Examination for the Admission of Registered Animal Scientists (RAS) and Graduate Animal Scientists (GAS) of the Nigerian Institute of Animal Science (NIAS) is scheduled to hold as follows:
                // ";
                // $author= 'Scope Softwares Solution';
                // $created_at = date("Y-m-d h:i:sa");
                // $this->conn->stmnt->execute();

                // $title= 'NOTICE OF 2022 PROFESSIONAL EXAMINATION POLITICS';
                // $body = "The Nigerian Institute of Animal Science (NIAS) is a Professional and Industry Regulatory Agency under the Federal Ministry of Agriculture and Rural Development, established by Act No. 26 of 2007 as Amended 2015. Among its mandates are the powers to prescribe and regulate the standards of academic qualifications and practical skills to be attained by persons seeking to be registered as Members, Associates or Fellows of the Institute as the case may be, and the regulation of all issues pertaining to Animal Husbandry in Nigeria.
                // Notice is hereby given that the 2022 Professional Examination for the Admission of Registered Animal Scientists (RAS) and Graduate Animal Scientists (GAS) of the Nigerian Institute of Animal Science (NIAS) is scheduled to hold as follows:
                // ";
                // $author= 'Scope Softwares Solution';
                // $created_at = date("Y-m-d h:i:sa");
                // $this->conn->stmnt->execute();

                // $title= 'NOTICE OF 2022 PROFESSIONAL EXAMINATION MATTERS ARISING';
                // $body = "The Nigerian Institute of Animal Science (NIAS) is a Professional and Industry Regulatory Agency under the Federal Ministry of Agriculture and Rural Development, established by Act No. 26 of 2007 as Amended 2015. Among its mandates are the powers to prescribe and regulate the standards of academic qualifications and practical skills to be attained by persons seeking to be registered as Members, Associates or Fellows of the Institute as the case may be, and the regulation of all issues pertaining to Animal Husbandry in Nigeria.
                // Notice is hereby given that the 2022 Professional Examination for the Admission of Registered Animal Scientists (RAS) and Graduate Animal Scientists (GAS) of the Nigerian Institute of Animal Science (NIAS) is scheduled to hold as follows:
                // ";
                // $author= 'Scope Softwares Solution';
                // $created_at = date("Y-m-d h:i:sa");
                // $this->conn->stmnt->execute();

               
                // echo "Data Inserted Successfully";

            }catch(PDOException $e){
                echo "Error" . $e->getMessage();
            }
        }
    }

$enterData = new Insertion;
$enterData->insert();


?>