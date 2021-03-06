<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 $timestamp = time();
 $token = ossn_generate_action_token($timestamp);
 
 $token = array(
			'ossn_ts' => $timestamp,
			'ossn_token' => $token,
			);
 $configs = array('token' => $token);
?> 	
	Ossn.site_url = '<?php echo ossn_site_url();?>';
	Ossn.Config = <?php echo json_encode($configs);?>;
	Ossn.Init();