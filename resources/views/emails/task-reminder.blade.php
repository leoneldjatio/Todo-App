<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task Reminder</title>
</head>
<body>
    <h1>Task Reminder</h1>
    <p>Dear {{ $task->user->name }},</p>
    
    <p>This is a reminder for your task:</p>
    
    <p>Task Name: {{ $task->name }}</p>
    <p>Task Description: {{ $task->description }}</p>
    <p>Task Due Date: {{ $task->due_date }}</p>
    
    <p>Thank you for using our application!</p>
</body>
</html>