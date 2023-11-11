<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* 新增的样式 */

        .member-container {
            text-align: center;
        }

        .about-img {
            position: relative;
        }

        .member-image {
            width: 100px; /* 调整图片大小 */
            height: 100px;
            border-radius: 50%; /* 使图片呈圆形 */
        }

        .member-name {
            font-size: 18px;
            font-weight: bold;
        }

        .member-position {
            font-size: 13px;
            text-transform: uppercase;
            color: #868e96;
            margin-bottom: 2px;
        }

        /* 剧中显示成员信息和职位 */

        .card {
            text-align: center;
        }

        /* 超链接样式 */

        .card a {
            text-decoration: none;
            color: #007bff;
        }

        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h2 class="">成员</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="bg-soft-primary about-img rounded">
                        <img src="https://q1.qlogo.cn/g?b=qq&nk=1115058004&s=640" alt="Horatio"
                             class="img-fluid d-block mx-auto member-image">
                    </div>
                    <div class="mt-3">
                        <p class="text-uppercase text-muted mb-2 f-13 member-position">创始人</p>
                        <h4 class="f-18 member-name"><a href="https://horatio.cn/">Horatio</a></h4>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="bg-soft-primary about-img rounded">
                        <img src="https://q1.qlogo.cn/g?b=qq&nk=1298800228&s=640" alt="Jack"
                             class="img-fluid d-block mx-auto member-image">
                    </div>
                    <div class="mt-3">
                        <p class="text-uppercase text-muted mb-2 f-13 member-position">联合创始人</p>
                        <h4 class="f-18 member-name"><a href="https://blog.wj0.top/">Jack</a></h4>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="bg-soft-primary about-img rounded">
                        <img src="https://q1.qlogo.cn/g?b=qq&nk=3033831844&s=640" alt="Jack"
                             class="img-fluid d-block mx-auto member-image">
                    </div>
                    <div class="mt-3">
                        <p class="text-uppercase text-muted mb-2 f-13 member-position">联合创始人</p>
                        <h4 class="f-18 member-name"><a href="/">Lujing</a></h4>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="bg-soft-primary about-img rounded">
                        <img src="https://q1.qlogo.cn/g?b=qq&nk=3206558616&s=640" alt="Cheng"
                             class="img-fluid d-block mx-auto member-image">
                    </div>
                    <div class="mt-3">
                        <p class="text-uppercase text-muted mb-2 f-13 member-position">成员</p>
                        <h4 class="f-18 member-name"><a href="/">Cheng</a></h4>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="bg-soft-primary about-img rounded">
                        <img src="https://q1.qlogo.cn/g?b=qq&nk=2653382153&s=640" alt="Cheri"
                             class="img-fluid d-block mx-auto member-image">
                    </div>
                    <div class="mt-3">
                        <p class="text-uppercase text-muted mb-2 f-13 member-position">成员</p>
                        <h4 class="f-18 member-name"><a href="/">Cheri</a></h4>
                    </div>
                </div>
            </div>

            <!-- Team Member 6 -->
            <div class="col-lg-4">
                <div class="card border-0">
                    <div class="bg-soft-primary about-img rounded">
                        <img src="https://q1.qlogo.cn/g?b=qq&nk=3211218425&s=640" alt="wdw0"
                             class="img-fluid d-block mx-auto member-image">
                    </div>
                    <div class="mt-3">
                        <p class="text-uppercase text-muted mb-2 f-13 member-position">成员</p>
                        <h4 class="f-18 member-name"><a href="/">wdw0</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
