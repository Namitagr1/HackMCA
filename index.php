<!DOCTYPE html>
<html>
    <head>
        <title>Agarwal.IO</title>
        <link rel="icon" type="image/x-icon" href="nerd-face.png">
        <style>
            body {
                background: rgb(255,151,251);
                background: radial-gradient(circle, rgba(255,151,251,0.5247190673144257) 0%, rgba(70,221,252,0.6171560421043417) 100%);
            }
            * {
                text-align: center;
                font-family: system-ui;
            }
            table {
                border: 3px solid black;
                background-color: black;
                margin-left: auto;
                margin-right: auto;
            }
            input[type = 'button'] {
                width: 100%;
                font-size: 200%;
                padding: 20px 40px;
                background-color: orange;
                color: white;
                border-radius: 15px;
            }
            #main {
                width: 80%;
                padding: 30px 40px;
                font-size: 200%;
            }
        </style>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js" integrity= "sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js" integrity= "sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <h1>
            Agarwal.IO
        </h1>
        <div id = "grade-calculator">
            <h2>
                Weighted Grade Calculator
            </h2>
            <form action="grade.php" method = 'post'>
                <label for="course">Enter your course name: </label>
                <input type="text" name = 'course' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="time">Enter the weekly coursework time in minutes: </label>
                <input type="text" name = 'time' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="grade1">Enter the first of four sample grades: </label>
                <input type="text" name = 'grade1' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="grade2">Enter the second grade: </label>
                <input type="text" name = 'grade2' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="grade3">Enter the third grade: </label>
                <input type="text" name = 'grade3' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="grade4">Enter the fourth grade: </label>
                <input type="text" name = 'grade4' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="quiz1">Enter the first of two sample quiz grades: </label>
                <input type="text" name = 'quiz1' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="quiz2">Enter the second quiz grade: </label>
                <input type="text" name = 'quiz2' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <label for="exam">Enter your final exam grade: </label>
                <input type="text" name = 'exam' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>

                <button style="font-family: system-ui; font-size: 120%; padding: 5px 20px 8px 20px; position: relative;" type="submit">Submit</button>
            </form>
        </div>
        <br><br><br>
        <div id = 'college-finder'>
            <h2>
                College Statistics Finder
            </h2>
            <form action="" method = 'post'>
                <label for="state">Enter your state: </label>
                <input type="text" name = 'state' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>
                <label for="Score">Enter your ACT Score: </label>
                <input type="text" name = 'Score' style="width: 200px; height: 40px; border: none; border-radius: 8px; background: #d0d2d6;">
                <br><br>
                <button style="font-family: system-ui; font-size: 120%; padding: 5px 20px 8px 20px; position: relative;" type="submit">Submit</button>
            </form>
        </div>
        <br><br><br>
        <div id = 'calculator'>
            <h2>
                Scientific Calculator
            </h2>
            <table>
                <tr>
                    <td colspan = '3'><input type="text" id = 'main'></td>
                    <td><input type="button" value = 'AC' onclick = 'document.getElementById("main").value = ""'></td>
                </tr>
                <tr>
                    <td><input type="button" value = 'CE' onclick = 'document.getElementById("main").value = document.getElementById("main").value.slice(0, document.getElementById("main").value.length - 1)'></td>
                    <td><input type="button" value = '^' onclick = 'document.getElementById("main").value += "^"'></td>
                    <td><input type="button" value = ')' onclick = 'document.getElementById("main").value += ")"'></td>
                    <td><input type="button" value = 'π' onclick = 'document.getElementById("main").value += "3.14159265358979"'></td>
                </tr>
                <tr>
                    <td><input type="button" value = 'sin' onclick = 'document.getElementById("main").value += "sin("'></td>
                    <td><input type="button" value = 'cos' onclick = 'document.getElementById("main").value += "cos("'></td>
                    <td><input type="button" value = 'tan' onclick = 'document.getElementById("main").value += "tan("'></td>
                    <td><input type="button" value = 'e' onclick = 'document.getElementById("main").value += "2.718281828459045"'></td>
                </tr>
                <tr>
                    <td><input type="button" value = '7' onclick = 'document.getElementById("main").value += "7"'></td>
                    <td><input type="button" value = '8' onclick = 'document.getElementById("main").value += "8"'></td>
                    <td><input type="button" value = '9' onclick = 'document.getElementById("main").value += "9"'></td>
                    <td><input type="button" value = '*' onclick = 'document.getElementById("main").value += "*"'></td>
                </tr>
                <tr>
                    <td><input type="button" value = '4' onclick = 'document.getElementById("main").value += "4"'></td>
                    <td><input type="button" value = '5' onclick = 'document.getElementById("main").value += "5"'></td>
                    <td><input type="button" value = '6' onclick = 'document.getElementById("main").value += "6"'></td>
                    <td><input type="button" value = '-' onclick = 'document.getElementById("main").value += "-"'></td>
                </tr>
                <tr>
                    <td><input type="button" value = '1' onclick = 'document.getElementById("main").value += "1"'></td>
                    <td><input type="button" value = '2' onclick = 'document.getElementById("main").value += "2"'></td>
                    <td><input type="button" value = '3' onclick = 'document.getElementById("main").value += "3"'></td>
                    <td><input type="button" value = '+' onclick = 'document.getElementById("main").value += "+"'></td>
                </tr>
                <tr>
                    <td><input type="button" value = '0' onclick = 'document.getElementById("main").value += "0"'></td>
                    <td><input type="button" value = '.' onclick = 'document.getElementById("main").value += "."'></td>
                    <td colspan = '2'><input type="button" value = '=' onclick = 'document.getElementById("main").value = math.evaluate(document.getElementById("main").value)'></td>
                </tr>
            </table>
        </div>
        <br><br>
    </body>
</html>
