<?php
session_start();
require ("../Functions/Includes/Navbar.php");
?>

<body>
    <div class="Container">
        <div class="Contente">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Item</th>
                        <th scope="col">Preco</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><form method="post"><input type="number"></form></th>
                        <td>Mouse</td>
                        <td>44</td>
                        <td><a href=""><i class="fa-solid fa-trash" style="color: #a51d2d;"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>