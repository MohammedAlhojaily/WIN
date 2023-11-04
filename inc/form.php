<?php

$firstName =    $_POST['firstName'];
$lastName =     $_POST['lastName'];
$email =        $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if(isset($_POST['submit'])) {

//تحقق الاسم الاول
if(empty($firstName)){
    $errors['firstNameError'] = 'يرجى ادخال الاسم الأول';
}
//تحقق الاسم الاخير
if(empty($lastName)){
    $errors['lastNameError'] = 'يرجى ادخال الاسم الأخير';
}
//تحقق الايميل
if(empty($email)){
    $errors['emailError'] = 'يرجى ادخال البريد الالكتروني';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'يرجى ادخال البريد الالكتروني صحيح';
}

//تحقق لا يوجد اخطاء
if(!array_filter($errors)){
    $firstName =    mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =     mysqli_real_escape_string($conn, $_POST['lastName']);
    $email =        mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users(firstName, lastName, email)
    VALUES('$firstName', '$lastName', '$email')";

try {
    if (mysqli_query($conn, $sql)) {
        header('Location: ' . $_SERVER['PHP_SELF']);
    } else {
        throw new Exception('Error: ' . mysqli_error($conn));
    }
} catch (Exception $e) {
    echo $e->getMessage();
}   
}
}
