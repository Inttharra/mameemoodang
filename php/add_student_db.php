<?php
    include 'server.php';

    $id_student = $_POST['id_student'];
    $title_name = $_POST['title_student'];
    $first_name = $_POST['first_name_student'];
    $last_name = $_POST['last_name_student'];
    $class = $_POST['class'];
    $year = $_POST['year'];
    $sara = $_POST['sara'];
    $id_subject = $_POST['id_subject'];
    $name_subject = $_POST['name_subject'];
    $score_before = $_POST['score_before'];
    $grade_before = $_POST['grade_before'];
    $id = $_POST['id_teacher'];
    $credit = $_POST['credit'];

    $add_query = "INSERT INTO `log_student` (`id_student`, `title_name`, `first_name`, `last_name`, `class`, `year`, `sara`, `id_subject`, `name_subject`, `credit`, `score_before`, `score_after`, `grade_before`, `grade_after`, `id_teacher`, `status`)
    VALUES ('$id_student', '$title_name', '$first_name', '$last_name', '$class', '$year', '$sara', '$id_subject', '$name_subject', '$credit', '$score_before', '$score_before', '$grade_before', '0', '$id', 'กำลังแก้ไข')";
    $add_result = mysqli_query($connect, $add_query);

    if ($add_query) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จของนักเรียนสำเร็จ'); window.location = '../student.php'</script>";
    } else {
        echo "<script>alert('เพิ่มข้อมูลนักเรียนไม่สำเร็จ กรุณาลองใหม่อีกครั้ง'); window.location = '../add_student.php'</script>";
    }
?>