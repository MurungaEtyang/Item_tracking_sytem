<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        <?php include "./assets/css/setting.css"?>
    </style>
    
</head>
<body>
    <div>
    <form action="uploaddata/settings.php">`
        <label for="haeder">heading</label>
        <input type="text" name="header">
        <label for="logo">upload logo</label>
        <input type="file" id="logo" name="uploadlogo">
        <label for="favcon">upload favicon</label>
        <input type="file" id="favcon" name="uploadfavcon">
        <label for="footer-logo">upload footer logo</label>
        <input type="file" id="footer-logo" name='upload_footer_logo'>
        <input type="submit" name="submit">
    </form>
    </div>
</body>

</html>