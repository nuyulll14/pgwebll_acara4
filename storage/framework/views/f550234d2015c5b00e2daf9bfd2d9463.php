<?php $__env->startSection('content'); ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>dayat</td>
            <td>1111</td>
            <td>A</td>
        </tr>
        <tr>
            <td>2</td>
            <td>daffa</td>
            <td>1112</td>
            <td>A</td>
        </tr>
        <tr>
            <td>3</td>
            <td>lili</td>
            <td>1113</td>
            <td>B</td>
        </tr>
        <tr>
            <td>4</td>
            <td>elaa</td>
            <td>1114</td>
            <td>B</td>
        </tr>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pgwebl\example-app\resources\views/table.blade.php ENDPATH**/ ?>