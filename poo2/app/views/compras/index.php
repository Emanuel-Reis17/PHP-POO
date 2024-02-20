<?php
$this->tituloPagina = "Views";
$this->layout('layout.header');
// include dirname(__FILE__, 2).'/layout/header.php';
?>
    <h2>Essa é a página</h2>
    <p>Lista de compras</p>
    <ul>
        <?php foreach ($this->lista as $key => $value): ?>
            <li><?php echo $value['titulo'] . ' - ' . $value['desc'];?></li>
        <?php endforeach; ?>
    </ul>
<?php $this->layout('layout.footer'); ?>