<?php
/*
    Shared Availability Addon
*/
require_once dirname( __FILE__ ).'/base.addon.php';

if( !class_exists( 'CPAPPB_SingleDaysSelection' ) )
{
    class CPAPPB_SingleDaysSelection extends CPAPPB_BaseAddon
    {

        /************* ADDON SYSTEM - ATTRIBUTES AND METHODS *************/
		protected $addonID = "addon-SingleDaysSelection-20230817";
		protected $name = "Single Days Selection Interface";
		protected $description;
        public $category = 'Improvements';
        public $help = 'https://apphourbooking.dwbooster.com/customdownloads/single-days-selection-interface.png';

	

        /************************ CONSTRUCT *****************************/

        function __construct()
        {            
			$this->description = __("Alternative time slot selection interface that does not display a calendar, but only available dates.", 'appointment-hour-booking' );
           

        } // End __construct



    } // End Class

    // Main add-on code
    $CPAPPB_SingleDaysSelection_obj = new CPAPPB_SingleDaysSelection();

	// Add addon object to the objects list
	global $cpappb_addons_objs_list;
	$cpappb_addons_objs_list[ $CPAPPB_SingleDaysSelection_obj->get_addon_id() ] = $CPAPPB_SingleDaysSelection_obj;
}

