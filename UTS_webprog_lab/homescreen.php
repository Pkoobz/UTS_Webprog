<!DOCTYPE html>
<html>
<head>
    <title>My To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>My To-Do List</h1>
        <form action="add_task.php" method="post">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description"></textarea>
            <input type="date" name="deadline">
            <button type="submit">Add Task</button>
        </form>
        <div class="task-list">
            <!-- List of tasks goes here -->
        </div>
    </div>
</body>
</html>
