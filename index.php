
<?php include 'mail_info.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css"  rel="stylesheet">

    <title> || المباشر للأفراد  || الخدمات المصرفية ||  </title>

</head>
<body dir="rtl">
<div class="navbar navbar-expand-md bg-dark navbar-dark text-red">

    <div class="container">
        <a href="#" class="navbar-brand">الخدمات المصرفية</a>
        <button class="navbar-toggler" 
        type="button"
         data-bs-toggle="collapse" 
         data-bs-target="#top" >
            
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collaps navbar-collapse" id="top"> 
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="info.html" class="nav-link">تسديد دفعات شهرية</a></li>
                <li class="nav-item"><a href="info.html" class="nav-link">تسديد رسوم حجز</a></li>
                <li class="nav-item"><a href="info.html" class="nav-link">استرداد المبلغ </a></li>
            </ul>
        </div>
    </div>
</div>



<!-- #region -->

<section id="hero" class="bg-dark text-light text-center text-sm-start py-5">

    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
            <div class="py-3">
                <h4 class="display-5"> المباشر <span class="text-info">للأفراد</span> </h4>
                <p class="py-1 lead">الآن يمكنك إجراء معاملاتك البنكية بكل سهولة ،  نقدم لكم خدمات متعددة وآمنة . بإمكانك تسديد دفعاتك وإسترداد المبلغ الدفوع ورسوم  الحجز . </p>
                <button class="btn btn-info">
                    <a href="info.php" class="nav-link">تقديم طلب </a>
                    </button>
            </div>
            <img class=" d-sm-block img-fluid w-50" src="/img/logo.svg" alt="">

        </div>
    </div>
</section>


<!-- #region -->

<section class="py-3">

<div class="container">

    <div class="row text-center">
        <div class="col">
            <div class="card bg-dark text-light">
                <img src="" alt="" class="card-img-top">
                <div class="card-body text-center">

            <h4 class="card-title">إسترداد المبلغ </h4>
                   
                    <p class="card-text">  استرجع المبلغ المدفوع </p>

                    <a href="info.php" class="btn btn-info">تقديم طلب </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-light">
                <img src="" alt="" class="card-img-top">
                <div class="card-body text-center">
                    <h4 class="card-title">تسديد دفعات </h4>
                    <p class="card-text">  سدد بكل سهولة وأمان من كل البنوك </p>
                    <a href="info.php" class="btn btn-info">تقديم طلب </a>
                </div>
            </div>
        </div>
        
    </div>
</div>




</section>



<img class=" d-sm-block img-fluid w-100" src="/img/bank.png" alt="">

<!-- #region -->
<footer class="py-2 bg-dark text-whit text-center">

    <div class="container">
       <h1 class="lead text-info display-10" > 2022 &copy; جميع الحقوق محفوظة </h1> 
    </div>
</footer>






      
    <script src="/js/bootstrap.bundle.min.js" ></script>

</body>
</html>