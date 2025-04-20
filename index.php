<!DOCTYPE html>
<html lang="'en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت من</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  
</body>
</html>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/webprogramming/infs.php"> اطلاعات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/webprogramming/contact-us.php"> تماس با ما</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<section>
    <h1>بخش اول ارسال اطلاعات</h1>
    <form action="process-form.php" method="POST">
        <div class="form-group">
            <label for="name">نام</label>
            <input type="text" class="form-input" name="name" id="name" value="">
        </div>
        <div class="form-group">
            <label for="last_name">نام و نام خانوادگی</label>
            <input type="text" name="last_name" id="last_name" value="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>    
</body>
</html>