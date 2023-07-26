<!DOCTYPE html>
<html lang="cn">

<head>
  <meta charset="utf-8">
  <title>唯蟹 Team - 我们不断探索前进</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="We Quest On and On">
  <meta name="keywords" content="唯蟹Team, Xies' Group, Blog233, HoratioWeb, lujing, jack">
  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.min.css" rel="stylesheet" type="text/css">
  <style>
    /* Set the page height to 100vh (viewport height) */
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    /* Set the section height to 100vh and remove margin and padding */
    section {
      height: 100vh;
      margin: 0;
      padding: 0;
    }
    /* Set background color to white */
    body {
      background-color: #fff;
    }
    /* Footer styling */
    footer {
      background-color: #fff; /* Changed background color to white */
      padding: 20px;
      text-align: center;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    /* Team members styling */
    .team-member {
      text-align: center;
      margin: 20px;
      transition: transform 0.2s ease; /* 添加过渡效果 */
    }
    .team-member img {
      max-width: 100px;
      border-radius: 20px;
    }
    /* 放大效果 */
    .team-member:hover img {
      transform: scale(1.1); /* 将头像放大1.1倍 */
    }
  </style>
</head>
<body>
  <!--Navbar Start-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark align-items-center">
    <div class="container">
      <!-- LOGO -->
      <a class="logo mr-3" href="https://www.wxies.cn"><img src="https://www.wxies.cn/logo.png" alt="" class="" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class=""
          data-feather="menu"></i></button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav navbar-center" id="mySidenav">
          <li class="nav-item"><a href="#home" class="nav-link"></a></li>
          <li class="nav-item"><a href="#about" class="nav-link"></a></li>
          <li class="nav-item"><a href="#services" class="nav-link"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- Hero Start -->
  <section class="hero-1-bg bg-white"> <!-- Changed background color back to white -->
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6">
          <h1 class="display-4 font-weight-medium mb-4 text-dark">唯蟹 Team</h1> <!-- Changed text color back to dark -->
          <h1 class="hero-1-title font-weight-normal text-dark mb-4">我们不断探索前进</h1> <!-- Changed text color back to dark -->
          <!-- Added a new paragraph for team introduction -->
          <p class="lead text-dark">欢迎来到唯蟹 Team，我们是一支热爱探索的团队。通过坚持不懈的努力，我们不断前进，迎接新的挑战。</p>
        </div>
        <div class="col-lg-6 col-md-10">
          <!-- Team Members - 每行显示三个成员 -->
          <div class="row">
            <div class="col-md-12">
              <div class="d-flex flex-wrap justify-content-center align-items-center">
                <!-- Member 1 (Team Leader) -->
                <div class="team-member mx-4">
                  <a href="https://horatio.cn"><img src="https://q1.qlogo.cn/g?b=qq&nk=1115058004&s=640" alt="Horatio"></a>
                  <p>Horatio<br>创始人</p>
                </div>
                <!-- Member 2 (Co-founder) -->
                <div class="team-member mx-4">
                  <a href="https://blog.wj0.top"><img src="https://q1.qlogo.cn/g?b=qq&nk=1298800228&s=640" alt="Jack"></a>
                  <p>Jack<br>联合创始人</p>
                </div>
                <!-- Member 3 (Co-founder) -->
                <div class="team-member mx-4">
                  <a href="https://horatio.cn"><img src="https://q1.qlogo.cn/g?b=qq&nk=3033831844&s=640" alt="Lujing"></a>
                  <p>Lujing<br>联合创始人</p>
                </div>
                <!-- Member 4 -->
                <div class="team-member mx-4">
                  <img src="https://q1.qlogo.cn/g?b=qq&nk=3206558616&s=640" alt="Horatio">
                  <p>Cheng</p>
                </div>
                <!-- Member 5 -->
                <div class="team-member mx-4">
                  <img src="https://q1.qlogo.cn/g?b=qq&nk=2653382153&s=640" alt="Horatio">
                  <p>Cheri</p>
                </div>
                <!-- Member 6 -->
                <div class="team-member mx-4">
                  <img src="https://q1.qlogo.cn/g?b=qq&nk=3211218425&s=640" alt="Horatio">
                  <p>wdw0</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Team Members End - 每行显示三个成员 -->
        </div>
      </div>
    </div>
  </section>
  <!-- Hero End -->

  <!-- Footer -->
  <footer>
    <?php include 'copyright.php'; ?>
  </footer>
  <!-- javascript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/scrollspy.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
</body>
</html>
