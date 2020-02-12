<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Calculator</h1>
    <form method="POST">
        <div style="display:flex; flex-direction:row; align-items:center;">
            <input type="number" name="numb1" required>
            <h3>First Number</h3>
        </div>
        <br>
        <div style="display:flex; flex-direction:row; align-items:center;">
            <input type="number" name="numb2" required>
            <h3>Second Number</h3>
        </div>
        <br>
        <div>
            <h2>Operator</h2>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="subtract" value="Subtract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">
            <input type="submit" name="modulo" value="Modulo">
        </div>
    </form>
    <?php
    
    ?>
</body>
</html>