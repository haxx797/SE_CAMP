<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            height: 440px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .scrollable-content {
            height: 220px;
            overflow-y: scroll;
            text-align: center;
        }

        .multiplication-table {
            text-align: center; 
        }
    </style>
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div class="scrollable-content">
        <?php
        for ($i = 1; $i <= 24; $i++) {
            $result = $multi_x * $i;
            echo "$multi_x x $i = $result<br>";
        }
        ?>
    </div>

   
</body>

</html>
