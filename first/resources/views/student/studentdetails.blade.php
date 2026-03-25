<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details Page</h1>
    <p>List of all students:</p>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>Section</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['roll'] }}</td>
                    <td>{{ $student['section'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>