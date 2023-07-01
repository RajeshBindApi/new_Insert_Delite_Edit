<?php
    class UserModel
    {
        private $conn;
        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function getdata()
        {
            $sql = "SELECT * FROM students";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function savedata($data)
        {
            $sql = "INSERT INTO students (name, email, phone, course) VALUES (?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $insert = $stmt->execute([$data['name'],$data['email'],$data['phone'],$data['course']]);
            if($insert){
                header('location:index.php');
            }
        }

        public function updatedata($data,$id)
        {
            $sql = "UPDATE students SET id=?, name=?, email=?, phone=?, course=?  WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $update = $result = $stmt->execute([$id,$data['name'],$data['email'],$data['phone'],$data['course'],$id]);
            if($update){
                header('location:index.php');
            }
        }

        public function deletedata($id)
        {
            $sql = "DELETE FROM students WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute([$id]);
            if($result){
                header('location:index.php');
            }
        }

        public function getupdateUser($id)
        {
            $spl ="SELECT * FROM students WHERE id=?"; 
            $stm = $this->conn->prepare($spl);   
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }
    }