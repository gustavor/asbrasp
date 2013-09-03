<?php
/**
 * ASBRASP
 * Copyright Gustavo Ramos
 * Created August 2013
 * gustavo.ramos@veadvogados.com.br
 * All Rights Reservated
 */

class BannersController extends AppController
{
    public function admin_index()
    {
        $this->layout = 'admin';
    }

    public function admin_novo()
    {
        $this->layout = 'admin';
    }
}