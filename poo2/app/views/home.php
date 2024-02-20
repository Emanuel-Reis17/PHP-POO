<?php
$this->tituloPagina = "Home";
include 'layout/header.php';
?>
    <h2>Essa é a página</h2>
    <p>Lista de compras</p>
    <ul>
        <?php foreach ($this->lista as $key => $value): ?>
            <li><?php echo $value['titulo'] . ' - ' . $value['desc'];?></li>
        <?php endforeach; ?>
    </ul>
<?php include 'layout/footer.php';?>