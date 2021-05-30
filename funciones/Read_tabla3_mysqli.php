<?php
    //Listado de usuarios
    include("conexionMYSQLI.php");

    $sql = mysqli_query($con, "SELECT * FROM productos order by id");
?>

<br/>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <caption>Listado de productos</caption>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(mysqli_num_rows($sql)==0)
                {
                    //Si no retorna ningun dato
                    echo '<tr><td colspan="5">No hay datos</td></tr>';
                }
                else
                {
                    $no = 1;
                    //mientras haya datos en la consulta
                    while($row = mysqli_fetch_assoc($sql))
                    {
                        //pintamos la tabla
                        echo '
                        <tr>
                            <td>'.$no.'</td>                            
                            <td><a href="profile.php?nid='.$row['id'].'<span
                            class="fas fa-user" aria-hidden="true"></span>
                            '.$row['nombre'].'</a></td>
                            <td>'.$row['precio'].'</td>
                            <td>'.$row['stock'].'</td>
                        ';

                        //ahora las acciones
                        echo '
                            <td>
                                <a href="edit.php?nid='.$row['id'].'" title="Editar datos" class="btn btn-primary
                                btn-sm"><span class="fas fa-edit" ariahidden="true">Editar</span></a>
                                <a href="index.php?aksi=delete&nid='.$row['id'].'" title="Eliminar"
                                onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')"
                                class="btn btn-danger btn-sm"><span class="fas fa-trash" ariahidden="true">Eliminar</span></a>
                            </td>
                        </tr>
                        ';
                        $no++;
                    }
                }
                ?>

                </tbody>
                    <tfoot class="table-dark">
                        <tr>
                            <td>
                                <p style="text-align: center;">&copy; Sistemas Web <?php echo date("Y");?></p>
                            </td>
                        </tr>
                    </tfoot>
    </table>
</div>

<?php
    mysqli_free_result($sql);
    $con->close();
?>