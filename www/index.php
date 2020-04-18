<?php
    include 'AppKernel.php';
    include 'templates/_h.php';
?>
<center> Просмотр чека из пакета </center>
<div class="dx-viewport demo-container">
    <div id="gridContainer"></div>
</div>
<script>
    $(function () {
        $("#gridContainer").dxDataGrid({
            filterRow: {visible: true},
            dataSource: customers,
            columns: ["nameSender", "NameRecipient", "DeliveryAddress", "NameContentsPoisoning"],
            showBorders: true
        });
    });
    var customers = [
        <?php (new File())->dataGridJson(); ?>
    ];
</script>
<?php
    include 'templates/_f.php';
?>
