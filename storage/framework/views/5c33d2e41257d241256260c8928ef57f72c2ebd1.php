<h1>Create Task</h1>
    <a href="<?php echo e(route('tasks.index')); ?>">Back to Task List</a>
    <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="3" required></textarea>
        <br>
        <button type="submit">Create Task</button>
    </form><?php /**PATH C:\Users\RUSSEL\crudapp\resources\views/tasks/create.blade.php ENDPATH**/ ?>