<?php
    //Listado de usuarios
    include("../conexionPDO.php");
    $sql="SELECT * from usuarios order by id"; //la consulta
    //Preparamos la consulta sql
    $result = $cn->prepare($sql);
   
    //Ejecutamos la consulta
    $result->execute();
?>

<br/>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <caption>Listado de Usuarios</caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
        </thead>
        <tbody>
        <?php
        $usuarios = $result->fetchAll(PDO::FETCH_OBJ);
        if ($result->rowCount()>0)
        {
            //si por lo menos hay un registro
            foreach ($usuarios as $row)
            {
                //los recorremos
                echo '
                <tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->nombre.'</td>
                    <td>'.$row->apellido.'</td>
                    <td><img width="20" height="20" src=images/user-icon.jpg'.$row->imagen.'></td>
                ';

                echo '
                    <td>
                        <a href="edit.php?nid='.$row->id.'" title="Editar datos" class="btn btn-primary btn-sm"><span class="fas fa-edit" ariahidden="true">Editar</span></a>
                        <a href="index.php?aksi=delete&nid='.$row->id.'" title="Eliminar"
                        onclick="return confirm(\'Esta seguro de borrar los datos '.$row->nombre.'?\')" class="btn btn-danger btn-sm"><span class="fas" aria-hidden="true">Eliminar</span></a>
                    </td>
                </tr>
                ';
            }
        }
        else
        {
            ?>
            <tr><td colspan="5">No hay datos.</td></tr>
            <?php
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
   //cerrando la conexion
   $result->closeCursor(); // opcional en MySQL, dependiendo del controlador de base de datos
   
   $result = null; // obligado para cerrar la conexión
   $cn = null;
   ?>