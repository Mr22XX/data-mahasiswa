<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MR22XX UNIVERSITY</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }

    .ipt{
        height: 25px;
    }

    form{
        display:flex;
        flex-direction: column;
    }

    .btn{
        height: 25px;
        background-color: rgb(0, 47, 255);
        border-radius: 10px;
        margin: 3px;
        cursor: pointer;
    }
</style>
<body>

    <div style="
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        height:100vh;
        width:100%;
        background-color:black;
        color:white;
        ">
    <h1 style="color: white;
                padding-bottom:30px;
                text-align:center;
    ">DATA MAHASISWA <span style="color: red">MR22XX</span> UNIVERSITY</h1>



    <table border="4">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>SCORE</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->score); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<br>

<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($error); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<h4 style="
    padding:20px;

">Tambah Data Disini !!!</h4>
<form action="<?php echo e(route('store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input class="ipt" type="text" name="name" placeholder="name">
    <input class="ipt" type="number" name="score" placeholder="score">
    <button class="btn" type="submit">add</button>
</form>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\create-belajar\resources\views/create.blade.php ENDPATH**/ ?>