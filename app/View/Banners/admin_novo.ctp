<?php
/**
 * ASBRASP
 * Copyright Gustavo Ramos
 * Created August 2013
 * gustavo.ramos@veadvogados.com.br
 * All Rights Reservated
 */
?>

<p class="header1">Novo Banner</p>

<p class="paragrafo">
    Utilize essa página para inserir um novo banner no sistema.
    Por padrão, o novo banner será o último na ordem de exibição.
</p>

<?php

echo $this->Form->create('Banner', array('type' => 'file', 'action' => 'novo'));
echo $this->Form->input('Banner.start_date', array('label' => 'Data Inicial'));
echo $this->Form->input('Banner.end_date', array('label' => 'Data Final'));
echo $this->Form->input('Banner.banner_text', array('label' => 'Texto do Banner'));
echo $this->Form->input('Banner.banner_link', array('label' => 'Link do Banner'));
echo $this->Form->input('Banner.banner_link_new_window', array('label' => 'Abrir em Nova Janela'));
echo $this->Form->input('Banner.image_path', array('type' => 'file', 'label' => 'Upload da Imagem'));
echo $this->Form->end('Enviar');

