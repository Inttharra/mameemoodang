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
    $score_after = $_POST['score_after'];
    $grade_after = $_POST['grade_after'];
    $status = $_POST['status'];
    $id_post = $_POST['id'];

    $edit_student_query = "UPDATE `log_student` SET
        `id_student` = '$id_student',
        `title_name` = '$title_name',
        `first_name` = '$first_name',
        `last_name` = '$last_name',
        `class` = '$class',
        `year` = '$year',
        `sara` = '$sara',
        `id_subject` = '$id_subject',
        `name_subject` = '$name_subject',
        `credit` = '$credit',
        `score_before` = '$score_before',
        `score_after` = '$score_after',
        `grade_before` = '$grade_before',
        `grade_after` = '$grade_after',
        `id_teacher` = '$id',
        `status` = '$status'
        WHERE `id` = '$id_post';
    ";
    $edit_student_result = mysqli_query($connect, $edit_student_query);

    if($edit_student_result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ!!'); window.location = '../student.php'</script>";
    } else {
        echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จกรุณาลองใหม่อีกครั้ง'); window.location = '../student.php'</script>";
    }

?>