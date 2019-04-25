<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empresa
 *
 * @author sistemas2
 */
class Empresa extends SofintConfig
{
    public function getDatosempresa($id)
    {
        return SofintConfig::model()->findByPk($id);
    }
}
