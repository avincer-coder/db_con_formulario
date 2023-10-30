<?php 
require_once "../models/modelo.php";
$ModeloPractica = new ModeloTabla();
$Tabla10 = $ModeloPractica->LeerTabla();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
                <?php 
                    foreach($Tabla10 as $Row){
                        echo(
                            "<tr>".
                                "<td>".$Row["Nombre"]."</td>". 
                                "<td>".$Row["Email"]."</td>". 
                                "<td>".$Row["Address"]."</td>".
                                "<td>".$Row["Phone"]."</td>". 
                                "<td>".
                                    "<button>".
                                        "Editar"
                                    ."</button>".
                                "<td>".
                                    "<button>".
                                        "Eliminar"
                                    ."</button>"
                                ."</td>"

                            ."</tr>" 
                        );
                    };
                ?>                
        </tbody>
    </table>
</body>
</html>