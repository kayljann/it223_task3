<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SQL Functions - Task 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #e7e7e7 !important;
        }

        .code {
            font-family: Courier;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <h1>IT223 - Task 3</h1>
    <p>FROYD D. CARBAJOSA </p>
    <p>ETHAN MAR D. DEMETERIO</p>
    <p>JHON KYLE L. COLLADOS</p>
    <p>(BSIT - 2C)</p>

    <table class="table">
        <tr>
            <th>SQL Function</th>
            <th>Description</th>
            <th>Example Code</th>
            <th>Example Output</th>
        </tr>

        <tr>
            <td colspan="4"><b>1. STRING FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>ASCII()</b></td>
            <td>Returns the ASCII value of the first character</td>
            <td class="code">SELECT first_name, ASCII(first_name) AS ascii_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/ascii.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CHAR_LENGTH()</b></td>
            <td>Returns the length of a string in characters</td>
            <td class="code">SELECT first_name, CHAR_LENGTH(first_name) AS char_length FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/char_length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CHARACTER_LENGTH()</b></td>
            <td>Returns the length of a string in characters</td>
            <td class="code">SELECT first_name, CHARACTER_LENGTH(first_name) AS character_length FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/character_length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONCAT()</b></td>
            <td>Combines strings together</td>
            <td class="code">SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/concat.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONCAT_WS()</b></td>
            <td>Concatenates strings with a separator</td>
            <td class="code">SELECT CONCAT_WS(', ', first_name, last_name, department) AS employee_info FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/concat_ws.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FIELD()</b></td>
            <td>Returns the index position of a value in a list</td>
            <td class="code">SELECT department, FIELD(department, 'IT', 'Sales', 'HR', 'Marketing') AS position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/field.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FIND_IN_SET()</b></td>
            <td>Returns position of a string in a comma-separated list</td>
            <td class="code">SELECT first_name, FIND_IN_SET('IT', 'Sales,IT,HR,Marketing') AS found_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/find_in_set.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FORMAT()</b></td>
            <td>Formats a number with thousand separators</td>
            <td class="code">SELECT first_name, salary, FORMAT(salary, 2) AS formatted_salary FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/format.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>INSERT()</b></td>
            <td>Inserts a substring at a specified position</td>
            <td class="code">SELECT first_name, INSERT(first_name, 1, 0, 'Mr. ') AS modified_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/insert.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>INSTR()</b></td>
            <td>Returns the position of first occurrence of a substring</td>
            <td class="code">SELECT email, INSTR(email, '@') AS at_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/instr.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LCASE()</b></td>
            <td>Converts a string to lowercase</td>
            <td class="code">SELECT first_name, LCASE(first_name) AS lowercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/lcase.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LEFT()</b></td>
            <td>Extracts a number of characters from the left</td>
            <td class="code">SELECT first_name, LEFT(first_name, 3) AS first_three FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/left.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LENGTH()</b></td>
            <td>Returns string length</td>
            <td class="code">SELECT first_name, LENGTH(first_name) AS name_length FROM employees ORDER BY name_length DESC LIMIT 5;</td>
            <td><a href="sql-functions/string/length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOCATE()</b></td>
            <td>Returns the position of a substring in a string</td>
            <td class="code">SELECT first_name, LOCATE('a', first_name) AS a_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/locate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOWER()</b></td>
            <td>Converts to lowercase</td>
            <td class="code">SELECT email, LOWER(email) AS lowercase_email FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/lower.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LPAD()</b></td>
            <td>Left-pads a string with another string to a certain length</td>
            <td class="code">SELECT first_name, LPAD(first_name, 10, '*') AS padded_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/lpad.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LTRIM()</b></td>
            <td>Removes leading spaces from a string</td>
            <td class="code">SELECT LTRIM(' Hello World') AS trimmed_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/ltrim.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MID()</b></td>
            <td>Extracts a substring from a string (starting at any position)</td>
            <td class="code">SELECT first_name, MID(first_name, 2, 3) AS middle_chars FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/mid.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>POSITION()</b></td>
            <td>Returns the position of a substring in a string</td>
            <td class="code">SELECT email, POSITION('@' IN email) AS at_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/position.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REPEAT()</b></td>
            <td>Repeats a string a specified number of times</td>
            <td class="code">SELECT first_name, REPEAT(first_name, 2) AS repeated_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/repeat.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REPLACE()</b></td>
            <td>Replaces text in string</td>
            <td class="code">SELECT email, REPLACE(email, '@company.com', '@newdomain.com') AS new_email FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/replace.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REVERSE()</b></td>
            <td>Reverses a string</td>
            <td class="code">SELECT first_name, REVERSE(first_name) AS reversed_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/reverse.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RIGHT()</b></td>
            <td>Extracts a number of characters from the right</td>
            <td class="code">SELECT first_name, RIGHT(first_name, 3) AS last_three FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/right.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RPAD()</b></td>
            <td>Right-pads a string with another string to a certain length</td>
            <td class="code">SELECT first_name, RPAD(first_name, 10, '*') AS padded_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/rpad.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RTRIM()</b></td>
            <td>Removes trailing spaces from a string</td>
            <td class="code">SELECT RTRIM('Hello World ') AS trimmed_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/rtrim.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SPACE()</b></td>
            <td>Returns a string of specified number of spaces</td>
            <td class="code">SELECT CONCAT('Hello', SPACE(5), 'World') AS spaced_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/space.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>STRCMP()</b></td>
            <td>Compares two strings</td>
            <td class="code">SELECT first_name, last_name, STRCMP(first_name, last_name) AS comparison FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/strcmp.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTR()</b></td>
            <td>Extracts a substring from a string</td>
            <td class="code">SELECT email, SUBSTR(email, 1, 5) AS email_substr FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/substr.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTRING()</b></td>
            <td>Extracts part of string</td>
            <td class="code">SELECT email, SUBSTRING(email, 1, 5) AS email_prefix FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/substring.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTRING_INDEX()</b></td>
            <td>Returns a substring before a specified number of delimiter occurs</td>
            <td class="code">SELECT email, SUBSTRING_INDEX(email, '@', 1) AS username FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/substring_index.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TRIM()</b></td>
            <td>Removes leading and trailing spaces from a string</td>
            <td class="code">SELECT TRIM(' Hello World ') AS trimmed_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/trim.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>UCASE()</b></td>
            <td>Converts a string to uppercase</td>
            <td class="code">SELECT first_name, UCASE(first_name) AS uppercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/ucase.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>UPPER()</b></td>
            <td>Converts to uppercase</td>
            <td class="code">SELECT first_name, UPPER(first_name) AS uppercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/upper.php">View Output</a></td>
        </tr>

        <tr>
            <td colspan="4"><b>2. NUMERIC FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>ABS()</b></td>
            <td>Returns the absolute value of a number</td>
            <td class="code">SELECT salary, ABS(salary - 60000) AS difference_from_60k FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/abs.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ACOS()</b></td>
            <td>Returns the arc cosine of a number</td>
            <td class="code">SELECT ACOS(0.5) AS acos_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/acos.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ASIN()</b></td>
            <td>Returns the arc sine of a number</td>
            <td class="code">SELECT ASIN(0.5) AS asin_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/asin.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ATAN()</b></td>
            <td>Returns the arc tangent of a number</td>
            <td class="code">SELECT ATAN(1) AS atan_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/atan.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ATAN2()</b></td>
            <td>Returns the arc tangent of two numbers</td>
            <td class="code">SELECT ATAN2(1, 2) AS atan2_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/atan2.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>AVG()</b></td>
            <td>Calculates average</td>
            <td class="code">SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/numeric/avg.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CEIL()</b></td>
            <td>Returns the smallest integer value greater than or equal to a number</td>
            <td class="code">SELECT salary, CEIL(salary / 1000) AS ceiled_thousands FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/ceil.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CEILING()</b></td>
            <td>Returns the smallest integer value greater than or equal to a number</td>
            <td class="code">SELECT salary, CEILING(salary / 1000) AS ceiling_thousands FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/ceiling.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>COS()</b></td>
            <td>Returns the cosine of a number</td>
            <td class="code">SELECT COS(PI()) AS cos_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/cos.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>COT()</b></td>
            <td>Returns the cotangent of a number</td>
            <td class="code">SELECT COT(1) AS cot_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/cot.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>COUNT()</b></td>
            <td>Counts rows</td>
            <td class="code">SELECT department, COUNT(*) AS employee_count FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/numeric/count.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DEGREES()</b></td>
            <td>Converts a radian value to degrees</td>
            <td class="code">SELECT DEGREES(PI()) AS degrees_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/degrees.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DIV</b></td>
            <td>Integer division</td>
            <td class="code">SELECT salary, salary DIV 1000 AS thousands FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/div.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>EXP()</b></td>
            <td>Returns e raised to the power of a number</td>
            <td class="code">SELECT EXP(1) AS exp_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/exp.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FLOOR()</b></td>
            <td>Returns the largest integer value less than or equal to a number</td>
            <td class="code">SELECT salary, FLOOR(salary / 1000) AS floor_thousands FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/floor.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>GREATEST()</b></td>
            <td>Returns the greatest value in a list of arguments</td>
            <td class="code">SELECT first_name, salary, GREATEST(salary, 60000, 50000) AS greatest_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/greatest.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LEAST()</b></td>
            <td>Returns the smallest value in a list of arguments</td>
            <td class="code">SELECT first_name, salary, LEAST(salary, 60000, 70000) AS least_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/least.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LN()</b></td>
            <td>Returns the natural logarithm of a number</td>
            <td class="code">SELECT LN(10) AS ln_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/ln.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOG()</b></td>
            <td>Returns the natural logarithm of a number</td>
            <td class="code">SELECT LOG(10) AS log_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/log.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOG10()</b></td>
            <td>Returns the base-10 logarithm of a number</td>
            <td class="code">SELECT LOG10(100) AS log10_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/log10.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOG2()</b></td>
            <td>Returns the base-2 logarithm of a number</td>
            <td class="code">SELECT LOG2(8) AS log2_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/log2.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MAX()</b></td>
            <td>Finds maximum value</td>
            <td class="code">SELECT department, MAX(salary) AS max_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/numeric/max.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MIN()</b></td>
            <td>Finds minimum value</td>
            <td class="code">SELECT department, MIN(salary) AS min_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/numeric/min.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MOD()</b></td>
            <td>Returns the remainder of a division operation</td>
            <td class="code">SELECT id, id MOD 2 AS is_odd FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/mod.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>PI()</b></td>
            <td>Returns the value of PI</td>
            <td class="code">SELECT PI() AS pi_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/pi.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>POW()</b></td>
            <td>Returns the value of a number raised to the power of another number</td>
            <td class="code">SELECT POW(2, 3) AS power_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/pow.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>POWER()</b></td>
            <td>Returns the value of a number raised to the power of another number</td>
            <td class="code">SELECT POWER(2, 3) AS power_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/power.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RADIANS()</b></td>
            <td>Converts a degree value to radians</td>
            <td class="code">SELECT RADIANS(180) AS radians_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/radians.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RAND()</b></td>
            <td>Returns a random number between 0 and 1</td>
            <td class="code">SELECT first_name, RAND() AS random_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/rand.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ROUND()</b></td>
            <td>Rounds numbers</td>
            <td class="code">SELECT first_name, salary, ROUND(salary, 0) AS rounded_salary FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/round.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SIGN()</b></td>
            <td>Returns the sign of a number</td>
            <td class="code">SELECT salary, SIGN(salary - 60000) AS sign_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/sign.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SIN()</b></td>
            <td>Returns the sine of a number</td>
            <td class="code">SELECT SIN(PI() / 2) AS sin_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/sin.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SQRT()</b></td>
            <td>Returns the square root of a number</td>
            <td class="code">SELECT SQRT(16) AS sqrt_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/sqrt.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUM()</b></td>
            <td>Adds up values</td>
            <td class="code">SELECT department, SUM(salary) AS total_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/numeric/sum.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TAN()</b></td>
            <td>Returns the tangent of a number</td>
            <td class="code">SELECT TAN(PI() / 4) AS tan_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/numeric/tan.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TRUNCATE()</b></td>
            <td>Truncates a number to a specified number of decimal places</td>
            <td class="code">SELECT salary, TRUNCATE(salary, 0) AS truncated_salary FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/numeric/truncate.php">View Output</a></td>
        </tr>

        <tr>
            <td colspan="4"><b>3. DATE FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>ADDDATE()</b></td>
            <td>Adds a time/date interval to a date</td>
            <td class="code">SELECT hire_date, ADDDATE(hire_date, INTERVAL 30 DAY) AS date_plus_30 FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/adddate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ADDTIME()</b></td>
            <td>Adds a time interval to a time/datetime</td>
            <td class="code">SELECT NOW() AS current_datetime, ADDTIME(NOW(), '02:30:00') AS time_plus_2h30m FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/addtime.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURDATE()</b></td>
            <td>Gets current date</td>
            <td class="code">SELECT CURDATE() AS today_date FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/curdate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURRENT_DATE()</b></td>
            <td>Returns the current date</td>
            <td class="code">SELECT CURRENT_DATE() AS today_date FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/current_date.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURRENT_TIME()</b></td>
            <td>Returns the current time</td>
            <td class="code">SELECT CURRENT_TIME() AS current_time_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/current_time.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURRENT_TIMESTAMP()</b></td>
            <td>Returns the current date and time</td>
            <td class="code">SELECT CURRENT_TIMESTAMP() AS current_ts FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/current_timestamp.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURTIME()</b></td>
            <td>Returns the current time</td>
            <td class="code">SELECT CURTIME() AS current_time_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/curtime.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATE()</b></td>
            <td>Extracts the date part of a date or datetime expression</td>
            <td class="code">SELECT NOW() AS datetime_value, DATE(NOW()) AS date_only FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/date.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATEDIFF()</b></td>
            <td>Days between dates</td>
            <td class="code">SELECT first_name, hire_date, DATEDIFF(CURDATE(), hire_date) AS days_employed FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/datediff.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATE_ADD()</b></td>
            <td>Adds a time/date interval to a date</td>
            <td class="code">SELECT hire_date, DATE_ADD(hire_date, INTERVAL 1 YEAR) AS date_plus_year FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/date_add.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATE_FORMAT()</b></td>
            <td>Formats date display</td>
            <td class="code">SELECT first_name, hire_date, DATE_FORMAT(hire_date, '%M %d, %Y') AS formatted_date FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/date_format.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATE_SUB()</b></td>
            <td>Subtracts a time/date interval from a date</td>
            <td class="code">SELECT hire_date, DATE_SUB(hire_date, INTERVAL 6 MONTH) AS date_minus_6months FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/date_sub.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DAY()</b></td>
            <td>Returns the day of the month</td>
            <td class="code">SELECT hire_date, DAY(hire_date) AS day_of_month FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/day.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DAYNAME()</b></td>
            <td>Returns the weekday name</td>
            <td class="code">SELECT hire_date, DAYNAME(hire_date) AS day_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/dayname.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DAYOFMONTH()</b></td>
            <td>Returns the day of the month</td>
            <td class="code">SELECT hire_date, DAYOFMONTH(hire_date) AS day_of_month FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/dayofmonth.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DAYOFWEEK()</b></td>
            <td>Returns the weekday index</td>
            <td class="code">SELECT hire_date, DAYOFWEEK(hire_date) AS day_of_week FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/dayofweek.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DAYOFYEAR()</b></td>
            <td>Returns the day of the year</td>
            <td class="code">SELECT hire_date, DAYOFYEAR(hire_date) AS day_of_year FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/dayofyear.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>EXTRACT()</b></td>
            <td>Extracts a part from a given date</td>
            <td class="code">SELECT hire_date, EXTRACT(YEAR FROM hire_date) AS extracted_year FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/extract.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FROM_DAYS()</b></td>
            <td>Returns a date from a numeric datevalue</td>
            <td class="code">SELECT FROM_DAYS(738000) AS date_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/from_days.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>HOUR()</b></td>
            <td>Returns the hour part</td>
            <td class="code">SELECT NOW() AS current_datetime, HOUR(NOW()) AS hour_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/hour.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LAST_DAY()</b></td>
            <td>Returns the last day of the month</td>
            <td class="code">SELECT hire_date, LAST_DAY(hire_date) AS last_day_of_month FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/last_day.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOCALTIME()</b></td>
            <td>Returns the current date and time</td>
            <td class="code">SELECT LOCALTIME() AS local_time FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/localtime.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOCALTIMESTAMP()</b></td>
            <td>Returns the current date and time</td>
            <td class="code">SELECT LOCALTIMESTAMP() AS local_timestamp FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/localtimestamp.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MAKEDATE()</b></td>
            <td>Creates a date from year and day values</td>
            <td class="code">SELECT MAKEDATE(2024, 100) AS date_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/makedate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MAKETIME()</b></td>
            <td>Creates a time from hour, minute, second</td>
            <td class="code">SELECT MAKETIME(10, 30, 45) AS time_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/maketime.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MICROSECOND()</b></td>
            <td>Returns the microsecond part</td>
            <td class="code">SELECT NOW() AS current_datetime, MICROSECOND(NOW()) AS microsecond_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/microsecond.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MINUTE()</b></td>
            <td>Returns the minute part</td>
            <td class="code">SELECT NOW() AS current_datetime, MINUTE(NOW()) AS minute_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/minute.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MONTH()</b></td>
            <td>Gets month from date</td>
            <td class="code">SELECT first_name, birth_date, MONTH(birth_date) AS birth_month FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/month.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MONTHNAME()</b></td>
            <td>Returns the name of the month</td>
            <td class="code">SELECT birth_date, MONTHNAME(birth_date) AS month_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/monthname.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>NOW()</b></td>
            <td>Gets current date and time</td>
            <td class="code">SELECT NOW() AS current_datetime FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/now.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>PERIOD_ADD()</b></td>
            <td>Adds months to a period</td>
            <td class="code">SELECT PERIOD_ADD(202301, 3) AS period_result FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/period_add.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>PERIOD_DIFF()</b></td>
            <td>Returns the difference between two periods</td>
            <td class="code">SELECT PERIOD_DIFF(202312, 202301) AS period_difference FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/period_diff.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>QUARTER()</b></td>
            <td>Returns the quarter of the year</td>
            <td class="code">SELECT hire_date, QUARTER(hire_date) AS quarter_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/quarter.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SECOND()</b></td>
            <td>Returns the seconds part</td>
            <td class="code">SELECT NOW() AS current_datetime, SECOND(NOW()) AS second_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/second.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SEC_TO_TIME()</b></td>
            <td>Returns a time value from seconds</td>
            <td class="code">SELECT SEC_TO_TIME(3665) AS time_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/sec_to_time.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>STR_TO_DATE()</b></td>
            <td>Returns a date based on string and format</td>
            <td class="code">SELECT STR_TO_DATE('January 15 2024', '%M %d %Y') AS date_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/str_to_date.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBDATE()</b></td>
            <td>Subtracts a time/date interval from a date</td>
            <td class="code">SELECT hire_date, SUBDATE(hire_date, INTERVAL 15 DAY) AS date_minus_15 FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/subdate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBTIME()</b></td>
            <td>Subtracts time from a time/datetime</td>
            <td class="code">SELECT NOW() AS current_datetime, SUBTIME(NOW(), '01:30:00') AS time_minus_1h30m FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/subtime.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SYSDATE()</b></td>
            <td>Returns the current date and time</td>
            <td class="code">SELECT SYSDATE() AS system_date FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/sysdate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TIME()</b></td>
            <td>Extracts the time part</td>
            <td class="code">SELECT NOW() AS datetime_value, TIME(NOW()) AS time_only FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/time.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TIME_FORMAT()</b></td>
            <td>Formats a time by a specified format</td>
            <td class="code">SELECT NOW() AS current_datetime, TIME_FORMAT(NOW(), '%H:%i:%s') AS formatted_time FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/time_format.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TIME_TO_SEC()</b></td>
            <td>Converts a time value into seconds</td>
            <td class="code">SELECT TIME_TO_SEC('01:30:45') AS seconds FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/time_to_sec.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TIMEDIFF()</b></td>
            <td>Returns the difference between two time/datetime</td>
            <td class="code">SELECT TIMEDIFF('13:30:00', '10:00:00') AS time_difference FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/timediff.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TIMESTAMP()</b></td>
            <td>Returns a datetime value</td>
            <td class="code">SELECT TIMESTAMP('2024-01-15', '10:30:00') AS timestamp_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/date/timestamp.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TO_DAYS()</b></td>
            <td>Returns the number of days between a date and year 0</td>
            <td class="code">SELECT hire_date, TO_DAYS(hire_date) AS days_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/to_days.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>WEEK()</b></td>
            <td>Returns the week number</td>
            <td class="code">SELECT hire_date, WEEK(hire_date) AS week_number FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/week.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>WEEKDAY()</b></td>
            <td>Returns the weekday index</td>
            <td class="code">SELECT hire_date, WEEKDAY(hire_date) AS weekday_index FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/weekday.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>WEEKOFYEAR()</b></td>
            <td>Returns the week number</td>
            <td class="code">SELECT hire_date, WEEKOFYEAR(hire_date) AS week_of_year FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/weekofyear.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>YEAR()</b></td>
            <td>Gets year from date</td>
            <td class="code">SELECT first_name, hire_date, YEAR(hire_date) AS hire_year FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/year.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>YEARWEEK()</b></td>
            <td>Returns the year and week number</td>
            <td class="code">SELECT hire_date, YEARWEEK(hire_date) AS year_week FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date/yearweek.php">View Output</a></td>
        </tr>

        <tr>
            <td colspan="4"><b>4. ADVANCED FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>BIN()</b></td>
            <td>Returns a binary representation of a number</td>
            <td class="code">SELECT id, BIN(id) AS binary_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/bin.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>BINARY</b></td>
            <td>Converts a value to a binary string</td>
            <td class="code">SELECT first_name, BINARY first_name AS binary_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/binary.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CASE</b></td>
            <td>Goes through conditions and returns value</td>
            <td class="code">SELECT first_name, salary, CASE WHEN salary >= 70000 THEN 'High' WHEN salary >= 50000 THEN 'Medium' ELSE 'Low' END AS salary_level FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/case.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CAST()</b></td>
            <td>Converts a value from one datatype to another</td>
            <td class="code">SELECT id, CAST(id AS CHAR) AS id_as_char FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/cast.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>COALESCE()</b></td>
            <td>Returns first non-null value</td>
            <td class="code">SELECT first_name, COALESCE(NULL, NULL, first_name, 'N/A') AS coalesce_result FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/coalesce.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONNECTION_ID()</b></td>
            <td>Returns the unique connection ID</td>
            <td class="code">SELECT CONNECTION_ID() AS connection_id FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/connection_id.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONV()</b></td>
            <td>Converts a number from one base to another</td>
            <td class="code">SELECT CONV(15, 10, 2) AS decimal_to_binary FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/conv.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONVERT()</b></td>
            <td>Converts a value from one datatype to another</td>
            <td class="code">SELECT id, CONVERT(id, CHAR) AS id_converted FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/convert.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURRENT_USER()</b></td>
            <td>Returns the current MySQL user name and host</td>
            <td class="code">SELECT CURRENT_USER() AS current_user_value FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/current_user.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATABASE()</b></td>
            <td>Returns the name of the current database</td>
            <td class="code">SELECT DATABASE() AS database_name FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/database.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>IF()</b></td>
            <td>Returns value based on condition</td>
            <td class="code">SELECT first_name, salary, IF(salary > 60000, 'High', 'Low') AS salary_level FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/if.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>IFNULL()</b></td>
            <td>Returns a specified value if expression is NULL</td>
            <td class="code">SELECT first_name, IFNULL(NULL, first_name) AS ifnull_result FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/ifnull.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ISNULL()</b></td>
            <td>Returns 1 or 0 depending on if expression is NULL</td>
            <td class="code">SELECT first_name, ISNULL(first_name) AS is_null FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/isnull.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LAST_INSERT_ID()</b></td>
            <td>Returns the AUTO_INCREMENT id of last row</td>
            <td class="code">SELECT LAST_INSERT_ID() AS last_insert_id FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/last_insert_id.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>NULLIF()</b></td>
            <td>Returns NULL if two expressions are equal</td>
            <td class="code">SELECT first_name, NULLIF(first_name, 'John') AS nullif_result FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/advanced/nullif.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SESSION_USER()</b></td>
            <td>Returns the current MySQL user name and host</td>
            <td class="code">SELECT SESSION_USER() AS session_user FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/session_user.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SYSTEM_USER()</b></td>
            <td>Returns the current MySQL user name and host</td>
            <td class="code">SELECT SYSTEM_USER() AS system_user FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/system_user.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>USER()</b></td>
            <td>Returns the current MySQL user name and host</td>
            <td class="code">SELECT USER() AS user_info FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/user.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>VERSION()</b></td>
            <td>Returns the current MySQL version</td>
            <td class="code">SELECT VERSION() AS mysql_version FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/advanced/version.php">View Output</a></td>
        </tr>
    </table>

    <hr>
    <p>Total: 138 SQL Functions</p>
</body>

</html>