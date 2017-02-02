<?php

require_once '../../Settings.php';

$id = $_POST['id'];

$first = isset($_POST['first']) ? $_POST['first']: '';
$last = isset($_POST['last']) ? $_POST['last']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$title = isset($_POST['title']) ? $_POST['title']: '';
$category = isset($_POST['category']) ? $_POST['category']: '';
$image = strcmp($_FILES['image']['name'], '') != 0 ? $_FILES['image'] : null;

$upload_folder = '../../assets';

$upload_passed = 0;

$database = Settings::get_database_connection();

if ($image != null) {
    $is_img = getimagesize($image["tmp_name"]);

    $upload_passed = $is_img ? 1 : 0;

    $file_ext = pathinfo($image["name"],PATHINFO_EXTENSION);

    if ($upload_passed == 1) {

        $ext_check = !($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg"
            && $file_ext != "gif");

        $upload_passed = $ext_check ? 1 : 0;

        if ($upload_passed == 1) {

            $file_last = strtolower($last);

            $new_img_name = "$upload_folder/web_$file_last.jpg";

            move_uploaded_file($image["tmp_name"], $new_img_name);

            $database->query("
                UPDATE TeamMembers SET has_image='1' WHERE id='$id';
            ") or die($database->error);
        }
    }
}

$database->query("
    UPDATE TeamMembers SET `first`='$first', `last`='$last', `email`='$email', `title`='$title', `category`='$category' WHERE `id`='$id';
") or die($database->error);

header('location: ../people');