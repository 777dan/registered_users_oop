<?php
require "users.php";
$user1 = new User("Peter", "abcde");
$user2 = new User("Alex", "321");
$users = new Users([$user1, $user2]);
print $users->IsValid("Peter", "acde") ? "Всё верно" : "Логин или пароль неправильный";
$users->toAddUser(new User("Olga", "hello"));
$users->toAddUser(new User("Greg", "123"));
$users->toDeleteUser("Greg");
echo trim($users);
