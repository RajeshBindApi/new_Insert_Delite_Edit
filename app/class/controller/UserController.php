<?php
    class UserController
    {
        private $model;
        public function __construct(UserModel $model)
        {
            $this->model = $model;
        }

        public function getUser()
        {
          return  $this->model->getdata();
        }
        
        public function saveUser($data)
        {
            $this->model->savedata($data);
        }
        
        public function updateUser($data,$id)
        {
            $this->model->updatedata($data,$id);
        }

        public function deleteUser($id)
        {
            $this->model->deletedata($id);
        }

        public function getupdateUser($id)
        {
          return $this->model->getupdateUser($id);
        }
    }