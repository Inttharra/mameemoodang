<nav class="navbar navbar-expand-lg" style="background-color: #35155D;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #FAF3F0;">
      <img src="img/wnw.png" width="30px" height="30px">
      โรงเรียนวังเหนือวิทยา
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #FAF3F0;">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_student.php" style="color: #FAF3F0;">เพิ่มข้อมูลนักเรียน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php" style="color: #FAF3F0;">แก้ไข/ลบข้อมูลนักเรียน</a>
        </li>
      </ul>
      <div class="d-flex">
        <?php if(isset($_SESSION['id'])) { ?>
          <span class="navbar-text me-3" style="color: #FAF3F0;">ชื่อ : <?php echo $_SESSION['title'] . " " . $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></span>
          <a href="index.php?logout='0'" class="btn btn-danger">ออกจากระบบ</a>
        <?php } else { ?>
          <a href="login.php" class="btn" style="background-color: #FFC95F;">เข้าสู่ระบบ</a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>