<?php
require "users.php";
$user1 = new User("Peter", "abcde");
$user2 = new User("Alex", "321");
$users = new Users([$user1, $user2]);
print $users->IsValid("Peter", "acde") ? "Всё верно" : "Логин или пароль неправильный";
echo "\n";
if ($users->toAddUser(new User("Greg", "123"))) {
    echo "Такой пользовательно уже существует";
}
$users->users;
$users->toDeleteUser("Greg");
echo trim($users);
