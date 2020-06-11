<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha de Borrado</th>
        </tr>
    <?php
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['deleted_at']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>