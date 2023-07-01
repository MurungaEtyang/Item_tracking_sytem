<?php
class Settings {
    public $db;
    public $target_directory;
    public $header;
    public $uploadlogo;
    public $uploadfavcon;
    public $upload_footer_logo;

    function __construct($db, $directory) {
        $this->db = $db;
        $this->target_directory = $directory;
        $this->uploadLogo($db, $directory);
    }

    function uploadLogo($db, $directory) {
        $this->db = $db;
        $this->target_directory = $directory;

        $target_file = $directory . basename($_FILES["uploadlogo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["uploadlogo"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["uploadlogo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["uploadlogo"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["uploadlogo"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function uploadFavcon($db, $directory, $favcon) {
        $this->db = $db;
        $this->target_directory = $directory;
        $this->uploadfavcon = $favcon;
    }

    function uploadFooterLogo($db, $directory, $footerlogo) {
        $this->target_directory = $directory;
        $this->db = $db;
        $this->upload_footer_logo = $footerlogo;
    }

    function header($db, $header) {
        $this->db = $db;
        $this->header = $header;
    }
}
?>
