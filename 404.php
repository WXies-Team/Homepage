<!DOCTYPE html>
<html lang="cn">

<!-- Head -->
<?php include('head.php'); ?>
<!-- Head -->
<style>
  /* Set the page height to 100vh (viewport height) */
  body,
  html {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  /* Set background color to white */
  body {
    background-color: #fff;
  }

  /* Center the content on the page */
  .error-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    text-align: center;
  }

  .error-logo {
    max-width: 200px;
    margin-bottom: 20px;
  }

  .error-message {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .home-link {
    color: #007bff;
    text-decoration: none;
  }

  /* Footer styling */
  footer {
    background-color: #f0f0f0;
    /* Light gray background color */
    padding: 10px 0;
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
  }
</style>

<body>
  <!-- Logo -->
  <div class="error-container">
    <img class="error-logo" src="https://www.wxies.cn/logo.png" alt="Logo">
    <div class="error-message">
      <p>对不起，页面不存在！</p>
      <p>您访问的页面可能已被删除或链接错误。</p>
      <p>请返回<a href="https://www.wxies.cn" class="home-link">主页</a>或尝试其他链接。</p>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
</body>

</html>