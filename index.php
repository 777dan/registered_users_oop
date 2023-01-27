<?php
require "users.php";
$user1 = new User("Peter", "abcde");
$user2 = new User("Alex", "321");
$users = new Users([$user1, $user2]);
print $users->IsValid("Peter", "acde") ? "Всё верно" : "Логин или пароль неправильный";
echo "\n";
// $users->toAddUser(new User("Olga", "hello"));
if ($users->toAddUser(new User("Greg", "123"))) {
    echo "Такой пользовательно уже существует";
} else {
    $users->users[] = new User("Greg", "123");
}
$users->users;
if ($users->toDeleteUser("Greg")) {
    $key = $users->toDeleteUser("Greg");
    unset($users->users[$key]);
}
echo trim($users);
