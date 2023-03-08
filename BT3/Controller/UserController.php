<?php
include ("Services/UserService.php");
    class UserController {
        public function index() {
            $users = UserService::getAll();
          // Render a Twig template with the list of users
          // ...
        }
      
        public function show($id) {
          $users = UserService::getById($id);
          // Render a Twig template with the user's details
          // ...
        }
      
        public function create() {
          // Render a Twig template with a form to create a new user
          // ...
        }
      
        public function store() {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $user = new User($name, $email, $password);
          $user->save();
          // Redirect to the user's details page
          // ...
        }
      
        public function edit($id) {
          $user = UserService::getById($id);
          // Render a Twig template with a form to edit the user's details
          // ...
        }
      
        public function update($id) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $users = UserService::getById($id);
          $user->setName($name);
          $user->setEmail($email);
          $user->setPassword($password);
          $user->save();
          // Redirect to the user's details page
          // ...
        }
      
        public function delete($id) {
          $user = UserService::getById($id);
          $user->delete();
          // Redirect to the list of users
          // ...
        }
      }
      
?>