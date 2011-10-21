<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake.libs.view.templates.pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<p>
	<!--nocache-->
	<span class="notice">
		<?php
			echo __('Your tmp directory is ');
			if (is_writable(TMP)):
				echo __('writable.');
			else:
				echo __('NOT writable.');
			endif;
		?>
	</span>
	<!--/nocache-->
</p>
<p>
	<span class="notice">
		<?php
			echo __('Your cache is ');
			if (Cache::isInitialized('default')):
				echo __('set up and initialized properly.');
				$settings = Cache::settings();
				echo '<p>' . $settings['engine'];
				echo __(' is being used to cache, to change this edit config/core.php ');
				echo '</p>';

				echo 'Settings: <ul>';
				foreach ($settings as $name => $value):
					echo '<li>' . $name . ': ' . $value . '</li>';
				endforeach;
				echo '</ul>';

			else:
				echo __('NOT working.');
				echo '<br />';
				if (is_writable(TMP)):
					echo __('Edit: config/core.php to insure you have the newset version of this file and the variable $cakeCache set properly');
				endif;
			endif;
		?>
	</span>
</p>
<p>
	<span class="notice">
		<?php
			echo __('Your database configuration file is ');
			$filePresent = null;
			if (file_exists(APP . 'Config'.'database.php')):
				echo __('present.');
				$filePresent = true;
			else:
				echo __('NOT present.');
				echo '<br/>';
				echo __('Rename config/database.php.default to config/database.php');
			endif;
		?>
	</span>
</p>
<?php
if (!empty($filePresent)):
	if (!class_exists('ConnectionManager')) {
		require CAKE . 'model' . DS . 'connection_manager.php';
	}
 	$connected = ConnectionManager::getDataSource('default');
?>
<p>
	<span class="notice">
		<?php echo __('Cake');
			if ($connected->isConnected()):
		 		__(' is able to ');
			else:
				__(' is NOT able to ');
			endif;
			__('connect to the database.');
		?>
	</span>
</p>
<?php endif; ?>
<h2><?php echo __('Release Notes for CakePHP %s.', Configure::version()); ?></h2>
<a href="https://trac.cakephp.org/wiki/notes/1.2.x.x"><?php echo __('Read the release notes and get the latest version'); ?> </a>
<h2><?php echo __('Editing this Page'); ?></h2>
<p>
<?php echo __('To change the content of this page, create: /app/View/Pages/home.ctp.'); ?><br />
<?php echo __('To change its layout, create: /app/View/Layouts/default.ctp.'); ?><br />
<a href="http://manual.cakephp.org/"><?php echo __('See the views section of the manual for more info.'); ?> </a><br />
<?php echo __('You can also add some CSS styles for your pages at: app/webroot/css/.'); ?>
</p>
<h2><?php echo __('Getting Started'); ?></h2>
<p>
<a href="http://manual.cakephp.org/appendix/blog_tutorial"><?php echo __('The 15 min Blog Tutorial'); ?></a><br />
<a href="http://www-128.ibm.com/developerworks/edu/os-dw-os-php-cake1.html"><?php echo __('Cook up Web sites fast with CakePHP'); ?></a><br />
<a href="http://www-128.ibm.com/developerworks/edu/os-dw-os-php-wiki1.html"><?php echo __('Create an interactive production wiki using PHP'); ?></a>
</p>
<h2><?php echo __('More about Cake'); ?></h2>
<p>
<?php echo __('CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.'); ?>
</p>
<p>
<?php echo __('Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.'); ?>
</p>
<ul>
	<li><a href="http://cakefoundation.org/"><?php echo __('Cake Software Foundation'); ?> </a>
	<ul><li><?php echo __('Promoting development related to CakePHP'); ?></li></ul></li>
	<li><a href="http://bakery.cakephp.org"><?php echo __('The Bakery'); ?> </a>
	<ul><li><?php echo __('Everything CakePHP'); ?></li></ul></li>
	<li><a href="http://astore.amazon.com/cakesoftwaref-20/"><?php echo __('Book Store'); ?> </a>
	<ul><li><?php echo __('Recommended Software Books'); ?></li></ul></li>
	<li><a href="http://www.cafepress.com/cakefoundation"><?php echo __('CakeSchwag'); ?> </a>
	<ul><li><?php echo __('Get your own CakePHP gear - Doughnate to Cake'); ?></li></ul></li>
	<li><a href="http://www.cakephp.org"><?php echo __('CakePHP'); ?> </a>
	<ul><li><?php echo __('The Rapid Development Framework'); ?></li></ul></li>
	<li><a href="http://manual.cakephp.org"><?php echo __('CakePHP Manual'); ?> </a>
	<ul><li><?php echo __('Your Rapid Development Cookbook'); ?></li></ul></li>
	<li><a href="http://api.cakephp.org"><?php echo __('CakePHP API'); ?> </a>
	<ul><li><?php echo __('Docblock Your Best Friend'); ?></li></ul></li>
	<li><a href="http://www.cakeforge.org"><?php echo __('CakeForge'); ?> </a>
	<ul><li><?php echo __('Open Development for CakePHP'); ?></li></ul></li>
	<li><a href="https://trac.cakephp.org/"><?php echo __('CakePHP Trac'); ?> </a>
	<ul><li><?php echo __('For the Development of CakePHP (Tickets, SVN browser, Roadmap, Changelogs)'); ?></li></ul></li>
	<li><a href="http://groups-beta.google.com/group/cake-php"><?php echo __('CakePHP Google Group'); ?> </a>
	<ul><li><?php echo __('Community mailing list'); ?></li></ul></li>
	<li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
	<ul><li><?php echo __('Live chat about CakePHP'); ?></li></ul></li>
</ul>
