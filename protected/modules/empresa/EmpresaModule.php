<?php

class EmpresaModule extends CWebModule
{   
    public $nombre;
    public $modulo;
    public $padre;
    public $desplegable;
    public $version;
	
	public function init()
	{		
                // this method is called when the module is being created
		// you may place code here to customize the module or the application
                
                $configuracion = '-- phpMyAdmin SQL Dump
                                    -- version 4.2.7.1
                                    -- http://www.phpmyadmin.net
                                    --
                                    -- Servidor: 127.0.0.1
                                    -- Tiempo de generaciÃ³n: 16-02-2016 a las 15:31:06
                                    -- VersiÃ³n del servidor: 5.5.39
                                    -- VersiÃ³n de PHP: 5.4.31

                                    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
                                    SET time_zone = "+00:00";


                                    /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
                                    /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
                                    /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
                                    /*!40101 SET NAMES utf8 */;

                                    --
                                    -- Base de datos: `bdsofint`
                                    --

                                    -- --------------------------------------------------------

                                    --
                                    -- Estructura de tabla para la tabla `sofint_config`
                                    --

                                    CREATE TABLE IF NOT EXISTS `sofint_config` (
                                    `id` int(11) NOT NULL,
                                      `nombre` varchar(100) NOT NULL,
                                      `nit` varchar(100) NOT NULL,
                                      `direccion` text NOT NULL,
                                      `telefono` bigint(20) NOT NULL,
                                      `movil` bigint(20) NOT NULL,
                                      `web` varchar(200) NOT NULL,
                                      `logo` varchar(100) NOT NULL,
                                      `gcalid` varchar(100) NOT NULL,
                                      `gmailuser` varchar(100) NOT NULL,
                                      `gmailclave` varchar(100) NOT NULL,
                                      `asterurl` varchar(100) NOT NULL,
                                      `asteruser` varchar(100) NOT NULL,
                                      `asterclave` varchar(100) NOT NULL,
                                      `dat1` int(11) NOT NULL,
                                      `dat2` varchar(100) NOT NULL,
                                      `dat3` varchar(100) NOT NULL,
                                      `dat4` varchar(100) NOT NULL,
                                      `dat5` varchar(100) NOT NULL,
                                      `dat6` varchar(100) NOT NULL,
                                      `dat7` varchar(100) NOT NULL,
                                      `dat8` varchar(100) NOT NULL,
                                      `dat9` varchar(100) NOT NULL,
                                      `dat10` text NOT NULL
                                    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

                                    --
                                    -- Indices para tablas volcadas
                                    --

                                    --
                                    -- Indices de la tabla `sofint_config`
                                    --
                                    ALTER TABLE `sofint_config`
                                     ADD PRIMARY KEY (`id`);

                                    --
                                    -- AUTO_INCREMENT de las tablas volcadas
                                    --

                                    --
                                    -- AUTO_INCREMENT de la tabla `sofint_config`
                                    --
                                    ALTER TABLE `sofint_config`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
                                    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
                                    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
                                    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
				';
		$command=Yii::app()->db->createCommand($configuracion);
		$command->execute();
            
		// import the module-level models and components
		$this->setImport(array(
			'empresa.models.*',
			'empresa.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
