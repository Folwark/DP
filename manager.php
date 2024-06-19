<!DOCTYPE html>
<html>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #44944A;
            text-align:center;
            font-size:1.5rem;
        }
        td p{
            font-size:1.2rem;
            text-align:center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        tr:not(:last-child)::after {
    content: "";
    display: block;
    height: 2px;
    background-color: black;
}
    </style>
<head>
    <title>Вывод данных</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "byh_db";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

$sql = "SELECT * FROM application";
$result = mysqli_query($conn, $sql);

$data = array(); // Создаем пустой массив для хранения данных

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; // Добавляем каждую строку в массив данных
    }
} else {
    echo "Нет данных";
}

mysqli_close($conn);
?>
<h1 style="text-align:center; padding: 1rem">Заявки
<a href="home.php" class="btn" style="font-size: 1rem;">Вернуться на сайт</a></h1>
<table>
    <tr>
        <th>ФИО</th>
        <th>Email</th>
        <th>Телефон</th>
        <th>Адрес</th>
        <th>Действие</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr id="row-<?php echo $row['id']; ?>">
            <td><p><?php echo $row['name']; ?></p></td>
            <td><p><?php echo $row['email']; ?></p></td>
            <td><p><?php echo $row['phone']; ?></p></td>
            <td><p><?php echo $row['address']; ?></p></td>
            <td><a class="btn" onclick="updateStatus(<?php echo $row['id']; ?>, 1)" data-id="<?php echo $row['id']; ?>" data-status="1">Отметить</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<script>
    // Перебираем каждую строку и изменяем фоновый цвет соответствующей <tr> в зависимости от значения статуса
    <?php foreach ($data as $row): ?>
        var status = "<?php echo $row['status']; ?>";
        var tr = document.getElementById("row-<?php echo $row['id']; ?>");
        if (status === "0") {
            tr.style.backgroundColor = "#BDECB6";
        }
    <?php endforeach; ?>
</script>
<script>
    $(document).ready(function() {
        $('.btn').click(function() {
            var id = $(this).data('id');
            var status = $(this).data('status');
            updateStatus(id, status);
        });
    });

    function updateStatus(id, status) {
        // Ваш код обновления статуса в базе данных
        $.ajax({
            url: 'tools.php',
            method: 'POST',
            data: {id: id},
            success: function(response) {
                // Изменение цвета строки на зеленый
                var tr = document.getElementById("row-" + id);
                tr.style.backgroundColor = "#BDECB6";
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
</script>
</body>
</html>
