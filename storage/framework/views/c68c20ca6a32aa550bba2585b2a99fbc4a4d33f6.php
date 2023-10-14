<h1>Task List</h1>
    <a href="<?php echo e(route('tasks.create')); ?>">Create New Task</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($task->title); ?></td>
                    <td><?php echo e($task->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('tasks.edit', $task->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><?php /**PATH C:\Users\RUSSEL\crudapp\resources\views/tasks/index.blade.php ENDPATH**/ ?>