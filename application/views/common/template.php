<?php $this->load->view("common/header"); ?>

<?php
    if (isset($page)) {
        $this->load->view($page);
    }
?>

<?php $this->load->view("common/footer"); ?>