<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <br><br>
        <input type="text" name="subject" placeholder="Subject of mail">
        <br/><br/>
        <textarea placeholder="Message" rows="5" cols="50" name="message"></textarea>
        <br/><br/>
        <input type="file" name="fileupload">
        <input type="submit">

    </form>

</body>

</html>