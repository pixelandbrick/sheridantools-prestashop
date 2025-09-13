/**
 * 2011-2018 OBSOLUTIONS WD S.L. All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of OBSOLUTIONS WD S.L. and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to OBSOLUTIONS WD S.L.
 * and its suppliers and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from OBSOLUTIONS WD S.L.
 *
 *  @author    OBSOLUTIONS WD S.L. <http://addons.prestashop.com/en/65_obs-solutions>
 *  @copyright 2011-2018 OBSOLUTIONS WD S.L.
 *  @license   OBSOLUTIONS WD S.L. All Rights Reserved
 *  International Registered Trademark & Property of OBSOLUTIONS WD S.L.
 */

$(document).ready(function(){
	
	obsstocks = {
			
		run: function() {
			
			//PS 1.5
			this.ps15();
			
			this.select_retail_price_options();
			this.select_data_source_options();
			$(".obsstocks_remote_ftp_pwd").prop('type', 'password');
		},
		select_retail_price_options: function(){
			
			if ($(".retail_price_opt").val() == 2)
			{
				$(".obsstocks_retail_prices_column").show();
				$(".obsstocks_retail_prices_margin").hide();
			}
			else
			{
				$(".obsstocks_retail_prices_column").hide();
				$(".obsstocks_retail_prices_margin").show();
			}
		},
		select_data_source_options: function(){
			
			if ($(".import_data_source_opt").val() == 'url_feed')
			{
				$(".obsstocks_feed_url").show();
				$(".obsstocks_remote_ftp").hide();
				$(".obsstocks_local_file").hide();
				$(".obsstocks_import_cron").show();
			}
			else if ($(".import_data_source_opt").val() == 'remote_ftp')
			{
				$(".obsstocks_feed_url").hide();
				$(".obsstocks_remote_ftp").show();
				$(".obsstocks_local_file").hide();
				$(".obsstocks_import_cron").show();
			}
			else if ($(".import_data_source_opt").val() == 'local_file')
			{
				$(".obsstocks_feed_url").hide();
				$(".obsstocks_remote_ftp").hide();
				$(".obsstocks_local_file").show();
				$(".obsstocks_import_cron").show();
			}
			else
			{
				$(".obsstocks_feed_url").hide();
				$(".obsstocks_remote_ftp").hide();
				$(".obsstocks_local_file").hide();
				$(".obsstocks_import_cron").hide();
			}
		},
		ps15: function(){
			
			if($('input[name="prices_margin"]').parent().hasClass('margin-form')){
			
				$('input[name="prices_margin"]').parent().addClass('obsstocks_retail_prices_margin');
				$('input[name="prices_margin"]').parent().prev().addClass('obsstocks_retail_prices_margin');
				
				$('input[name="prices_column"]').parent().addClass('obsstocks_retail_prices_column');
				$('input[name="prices_column"]').parent().prev().addClass('obsstocks_retail_prices_column');
				
				$('input[name="url_feed_url"]').parent().addClass('obsstocks_feed_url');
				$('input[name="url_feed_url"]').parent().prev().addClass('obsstocks_feed_url');
				
				$('input[name="remote_ftp_host"]').parent().addClass('obsstocks_remote_ftp');
				$('input[name="remote_ftp_host"]').parent().prev().addClass('obsstocks_remote_ftp');
				
				$('input[name="remote_ftp_port"]').parent().addClass('obsstocks_remote_ftp');
				$('input[name="remote_ftp_port"]').parent().prev().addClass('obsstocks_remote_ftp');
				
				$('input[name="remote_ftp_user"]').parent().addClass('obsstocks_remote_ftp');
				$('input[name="remote_ftp_user"]').parent().prev().addClass('obsstocks_remote_ftp');
				
				$('input[name="remote_ftp_pwd"]').parent().addClass('obsstocks_remote_ftp');
				$('input[name="remote_ftp_pwd"]').parent().prev().addClass('obsstocks_remote_ftp');
				
				$('input[name="remote_ftp_path"]').parent().addClass('obsstocks_remote_ftp');
				$('input[name="remote_ftp_path"]').parent().prev().addClass('obsstocks_remote_ftp');
				
				$('input[name="local_file_path"]').parent().addClass('obsstocks_local_file');
				$('input[name="local_file_path"]').parent().prev().addClass('obsstocks_local_file');
				
				$('input[name="url_import_cron"]').parent().addClass('obsstocks_import_cron');
				$('input[name="url_import_cron"]').parent().prev().addClass('obsstocks_import_cron');
				
				$('input[name="url_import_cron_test"]').parent().addClass('obsstocks_import_cron');
				$('input[name="url_import_cron_test"]').parent().prev().addClass('obsstocks_import_cron');
			}
		}
	}
	
	$( ".retail_price_opt" ).change( function (){
		
		if ($(".retail_price_opt").val() == 2)
		{
			$(".obsstocks_retail_prices_column").show();
			$(".obsstocks_retail_prices_margin").hide();
		}
		else
		{
			$(".obsstocks_retail_prices_column").hide();
			$(".obsstocks_retail_prices_margin").show();
		}
	});
	
	$( ".import_data_source_opt" ).change( function (){
		
		if ($(".import_data_source_opt").val() == 'url_feed')
		{
			$(".obsstocks_feed_url").show();
			$(".obsstocks_remote_ftp").hide();
			$(".obsstocks_local_file").hide();
			$(".obsstocks_import_cron").show();
		}
		else if ($(".import_data_source_opt").val() == 'remote_ftp')
		{
			$(".obsstocks_feed_url").hide();
			$(".obsstocks_remote_ftp").show();
			$(".obsstocks_local_file").hide();
			$(".obsstocks_import_cron").show();
		}
		else if ($(".import_data_source_opt").val() == 'local_file')
		{
			$(".obsstocks_feed_url").hide();
			$(".obsstocks_remote_ftp").hide();
			$(".obsstocks_local_file").show();
			$(".obsstocks_import_cron").show();
		}
		else
		{
			$(".obsstocks_feed_url").hide();
			$(".obsstocks_remote_ftp").hide();
			$(".obsstocks_local_file").hide();
			$(".obsstocks_import_cron").hide();
		}
	});
	
	obsstocks.run();	
	
});

