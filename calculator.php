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
            <input type="submit" name="someshit" value="Add">
            <input type="submit" name="someshit" value="Subtract">
            <input type="submit" name="someshit" value="Multiply">
            <input type="submit" name="someshit" value="Divide">
            <input type="submit" name="someshit" value="Modulo">
        </div>
    </form>
    <?php
    if(isset($_POST["someshit"])){
        switch($_POST["someshit"])
        {
            case "Add":
                echo($_POST['numb1']+$_POST['numb2']);
            break;
            case "Subtract":
                echo($_POST['numb1']-$_POST['numb2']);
            break;
            case "Multiply":
                echo($_POST['numb1']*$_POST['numb2']);
            break;
            case "Divide":
                echo($_POST['numb1']/$_POST['numb2']);
            break;
            case "Modulo":
                echo($_POST['numb1']%$_POST['numb2']);
            break;
        }
    }
    ?>
</body>
</html>