<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($multiplier){
            $result = [];
            for($i=1; $i<=12; $i++){
                $result[]=[
                    'no' => $i,
                    'multiplier' => $multiplier,
                    'answer' => $i*$multiplier
                ];
            }
            return $result;
        }
        $multiplier = isset($_GET['multiplier'])? intval($_GET['multiplier']) : 2;
        $multiplicationTable = multiplication($multiplier);
    ?>
    <table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($multiplicationTable as $row): ?>
                <tr>
                    <td><?= ($row['no']) ?></td>
                    <td><?= ($row['multiplier']) ?></td>
                    <td><?= ($row['answer']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>