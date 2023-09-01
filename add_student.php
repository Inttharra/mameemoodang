<?php
    include 'php/server.php';

    if (!isset($_SESSION['id'])) {
        echo "<script>alert('กรุณาเข้าสู่ระบบก่อนค่ะ'); window.location = 'login.php'</script>";
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        echo "<script>alert('ออกจากระบบสำเร็จ'); window.location = 'login.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลนักเรียน | ผลการเรียนนักเรียนไม่ผ่านเกณฑ์</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <div class="row my-5">
        <div class="col-1 col-sm-1 col-md-2">

        </div>
        <div class="col-10 col-sm-10 col-md-8">
            <div class="row mb-3">
                <center>
                    <img src="img/add-1.png" width="90px" height="90px" class="mb-3">
                </center>
                <div class="fs-3 text-center">
                    เพิ่มข้อมูลนักเรียนที่มีผลการเรียนไม่ผ่านเกณฑ์
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="add_student_db.php" method="post">
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 mb-2 col-md-2">
                                    <label class="form-label">เลขประจำตัว</label>
                                    <input type="number" name="id_student" class="form-control" required placeholder="เช่น 12344">
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-2">
                                    <label class="form-label">คำนำหน้าชื่อ</label>
                                    <select name="title_student" required class="form-select">
                                        <option>คำนำหน้า</option>
                                        <option value="เด็กหญิง">เด็กหญิง</option>
                                        <option value="เด็กชาย">เด็กชาย</option>
                                        <option value="นางสาว">นางสาว</option>
                                        <option value="นาย">นาย</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-3">
                                    <label class="form-label">ชื่อจริง</label>
                                    <input type="text" name="first_name_student" class="form-control" required placeholder="กรอกชื่อจริงนักเรียน">
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-3">
                                    <label class="form-label">นามสกุล</label>
                                    <input type="text" name="last_name_student" class="form-control" required placeholder="กรอกนามสกุลของนักเรียน">
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-2">
                                    <label class="form-label">ชั้น/ห้อง</label>
                                    <select name="class" class="form-select" required>
                                        <option>เลือกชั้น</option>
                                        <option value="1/1">1/1</option>
                                        <option value="1/2">1/2</option>
                                        <option value="1/3">1/3</option>
                                        <option value="1/4">1/4</option>
                                        <option value="1/5">1/5</option>
                                        <option value="1/6">1/6</option>
                                        <option value="1/7">1/7</option>
                                        <option value="2/1">2/1</option>
                                        <option value="2/2">2/2</option>
                                        <option value="2/3">2/3</option>
                                        <option value="2/4">2/4</option>
                                        <option value="2/5">2/5</option>
                                        <option value="2/6">2/6</option>
                                        <option value="3/1">3/1</option>
                                        <option value="3/2">3/2</option>
                                        <option value="3/3">3/3</option>
                                        <option value="3/4">3/4</option>
                                        <option value="3/5">3/5</option>
                                        <option value="3/6">3/6</option>
                                        <option value="4/1">4/1</option>
                                        <option value="4/2">4/2</option>
                                        <option value="4/3">4/3</option>
                                        <option value="4/4">4/4</option>
                                        <option value="4/5">4/5</option>
                                        <option value="4/6">4/6</option>
                                        <option value="4/7">4/7</option>
                                        <option value="5/1">5/1</option>
                                        <option value="5/2">5/2</option>
                                        <option value="5/3">5/3</option>
                                        <option value="5/4">5/4</option>
                                        <option value="5/5">5/5</option>
                                        <option value="5/6">5/6</option>
                                        <option value="5/7">5/7</option>
                                        <option value="6/1">6/1</option>
                                        <option value="6/2">6/2</option>
                                        <option value="6/3">6/3</option>
                                        <option value="6/4">6/4</option>
                                        <option value="6/5">6/5</option>
                                        <option value="6/6">6/6</option>
                                        <option value="6/7">6/7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 col-md-3">
                                    <label class="form-label">ปีการศึกษา</label>
                                    <select name="year" required class="form-select">
                                        <option>ปีการศึกษา</option>
                                        <option value="1/2564">1/2564</option>
                                        <option value="2/2564">2/2564</option>
                                        <option value="1/2565">1/2565</option>
                                        <option value="2/2565">2/2565</option>
                                        <option value="1/2566">1/2566</option>
                                        <option value="2/2566">2/2566</option>
                                        <option value="1/2567">1/2567</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-3">
                                    <label class="form-label">กลุ่มสาระการเรียนรู้</label>
                                    <select name="sara" required class="form-select">
                                        <option>กลุ่มสาระ</option>
                                        <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                                        <option value="วิทยาศาสตร์และเทคโนโลยี">วิทยาศาสตร์และเทคโนโลยี</option>
                                        <option value="ศิลปะ">ศิลปะ</option>
                                        <option value="ภาษาไทย">ภาษาไทย</option>
                                        <option value="ภาษาต่างประเทศ">ภาษาต่างประเทศ</option>
                                        <option value="สังคมศึกษาฯ">สังคมศึกษาฯ</option>
                                        <option value="การงานอาชีพ">การงานอาชีพ</option>
                                        <option value="สุขศึกษาฯ">สุขศึกษาฯ</option>
                                        <option value="กิจกรรมพัฒนาผู้เรียน">กิจกรรมพัฒนาผู้เรียน</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-3">
                                    <label class="form-label">รหัสวิชา</label>
                                    <input type="text" name="id_subject" class="form-control" required placeholder="เช่น ก20827">
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-3">
                                    <label class="form-label">ชื่อวิชา</label>
                                    <input type="text" name="name_subject" class="form-control" required placeholder="กรอกชื่อวิชา">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 mb-2 col-md-4">
                                    <label class="form-label">จำนวนหน่อยกิต</label>
                                    <input type="number" name="credit" class="form-control" step="0.5" required>
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-4">
                                    <label class="form-label">คะแนนที่ได้</label>
                                    <input type="number" name="after_score" class="form-control" step="0.5" required>
                                </div>
                                <div class="col-12 col-sm-12 mb-2 col-md-4">
                                    <label class="form-label">ผลการเรียนที่ได้</label>
                                    <select name="after_grade" class="form-select" required>
                                        <option>ผลการเรียน</option>
                                        <option value="0">0</option>
                                        <option value="ร">ร</option>
                                        <option value="มส">มส</option>
                                        <option value="มผ">มผ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 mb-2 col-md-12">
                                    <label class="form-label">ครูประจำวิชา</label>
                                    <input type="text" readonly placeholder="<?php echo $_SESSION['title'] . ' ' .  $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] ?>" class="form-control">
                                    <input type="hidden" name="id_teacher" value="<?php echo $_SESSION['id']; ?>">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 mb-2 col-md-12">
                                    <button type="submit" class="btn btn-success w-100">เพิ่มข้อมูลนักเรียน</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-2">

        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>