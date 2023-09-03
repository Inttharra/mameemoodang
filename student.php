<?php
    include 'php/server.php';

    if (!isset($_SESSION['id'])) {
        echo "<script>alert('กรุณาเข้าสู่ระบบก่อนค่ะ'); window.location = 'login.php'</script>";
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        echo "<script>alert('ออกจากระบบสำเร็จ'); window.location = 'login.php'</script>";
    }

    if ($_SESSION['id']) {
        $id_teacher = $_SESSION['id'];
        $students = "SELECT * FROM `log_student` WHERE id_teacher = '$id_teacher'";
        $students_result = mysqli_query($connect, $students);
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $delete = "DELETE FROM `log_student` WHERE `id` = '$id'";
        $delete_result = mysqli_query($connect, $delete);

        if ($delete_result) {
            echo "<script>alert('ลบรายชื่อนักเรียนสำเร็จ'); window.location = 'student.php'</script>";
        } else {
            echo "<script>alert('ลบรายชื่อนักเรียนคนนี้ไม่สำเร็จ กรุณาลองใหม่อีกครั้ง'); window.location = 'student.php'</script>";
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการเรียนนักเรียนไม่ผ่านเกณฑ์</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <div class="row">
    <div class="col col-sm col-md-2">

    </div>
    <div class="col-12 col-sm-12 col-md-8">
        <div class="row my-3">
            <div class="fs-3 text-center">
                รายชื่อนักเรียนไม่ผ่านเกณฑ์
            </div>
        </div>
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>เลขประจำ</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>สถานะ</th>
                    <th>ลบ/แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($students_result)) { ?>
                <tr>
                    <td><?php echo $row['id_student']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <?php if ($row['status'] == 'กำลังแก้ไข') { ?>
                        <td class="text-danger"><?php echo $row['status'] ?></td>
                    <?php } else { ?>
                        <td><?php echo $row['status'] ?></td>
                    <?php } ?>
                    <td>
                        <a href="student.php?del=<?php echo $row['id'] ?>" class="btn btn-danger">ลบ</a>
                        <a href="student_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">แก้ไข</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>">
                            อะไรน้อ
                        </button>

                        <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">ข้อมูลนักเรียน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>ชื่อ - นามสกุล : <?php echo $row['title'] . ' ' . $row['first_name'] . ' ' . $row['last_name'] ?></p>
                                <p>ชั้น/ห้อง : <?php echo $row['class'] ?></p>
                                <p>ปีการศึกษาที่ติด : <?php echo $row['year'] ?></p>
                                <p>รหัสวิชา ชื่อวิชา : <?php echo $row['id_subject'] . ' ' . $row['name_subject'] ?></p>
                                <p>คะแนนก่อนแก้ไข : <?php echo $row['score_before']; ?></p>
                                <p>ผลการเรียน : <?php echo $row['grade_before']; ?></p>
                                <p>คะแนนหลังแก้ไข : <?php echo $row['score_after']; ?></p>
                                <p>ผลการเรียนหลังแก้ไข : <?php echo $row['grade_after']; ?></p>
                                <p>สถานะ : <?php echo $row['status']; ?></p>
                                <p>ครูประจำวิชา : <?php 
                                    // teacher_name
                                $id_teacher = $row['id_teacher'];
                                $teacher = "SELECT * FROM `users` WHERE `id` = $id_teacher ";
                                $teacher_result = mysqli_query($connect, $teacher);

                                while ($teacher_name = $teacher_result->fetch_assoc()) {
                                    echo $teacher_name['title_name'] . ' ' . $teacher_name['first_name'] . ' ' . $teacher_name['last_name'];
                                } ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col col-sm col-md-2">

    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>