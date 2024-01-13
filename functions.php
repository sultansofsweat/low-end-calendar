<?php
	//This is the LECal 2.x function table.
	
	/* User levels
	0=Banned
	1=Inactive
	2=Active
	3=Administrator
	4=Root*/
	
	//Function for opening database read-only
	function open_db_ro()
	{
	}
	//Function for opening database read-write
	function open_db_rw()
	{
	}
	//Function for closing database
	function close_db($db)
	{
	}
	
	//Function for adding a user
	function add_user($db,$username,$displayname,$password,$level,$email,$description,$link,$offset,$theme,$dst)
	{
	}
	//Function for changing user display name
	function change_display_name($db,$username,$newdispname)
	{
	}
	//Function for changing user password
	function change_password($db,$username,$newpass)
	{
	}
	//Function for changing user level
	function change_user_level($db,$username,$newlevel)
	{
	}
	//Function for changing user email
	function change_user_level($db,$username,$newmail)
	{
	}
	//Function for changing user description
	function change_user_level($db,$username,$newdesc)
	{
	}
	//Function for changing user link
	function change_user_level($db,$username,$newlink)
	{
	}
	//Function for changing user time information
	function change_user_level($db,$username,$newoffset,$newdst)
	{
	}
	//Function for changing user theme
	function change_user_level($db,$username,$newtheme)
	{
	}
	//Function for deleting a user
	function delete_user($db,$username)
	{
	}
	//Function for getting all users
	function get_all_users($db)
	{
	}
	//Function for getting a single user
	function get_user($db,$username)
	{
	}
	//Function for getting a user's password
	function get_user_password($db,$username)
	{
	}
	//Function for getting a user's level
	function get_user_level($db,$username)
	{
	}
	//Function for getting a user's email
	function get_user_email($db,$username)
	{
	}
	//Function for getting a user's time zone info (offset and DST, calculated as one)
	function get_user_tzinfo($db,$username)
	{
	}
	//Function for getting a user's theme
	function get_user_theme($db,$username)
	{
	}
	
	//Function for adding an event
	function add_event($db,$name,$description,$owner,$public,$link)
	{
	}
	//Function for changing event name
	function change_event_name($db,$id,$newname)
	{
	}
	//Function for changing event description
	function change_event_description($db,$id,$newdesc)
	{
	}
	//Function for changing event owner
	function change_event_owner($db,$id,$newowner)
	{
	}
	//Function for changing event privacy
	function change_event_privacy($db,$id,$newpriv)
	{
	}
	//Function for changing event link
	function change_event_link($db,$id,$newlink)
	{
	}
	//Function for deleting an event
	function delete_event($db,$id)
	{
	}
	//Function for getting all events
	function get_all_events($db)
	{
	}
	//Function for getting an event
	function get_event($db,$id)
	{
	}
	//Function for getting all user's events
	function get_events_for_user($db,$username)
	{
	}
	
	//Function for adding an event instance
	function add_instance($db,$event,$start,$end)
	{
	}
	//Function for cancelling an instance
	function cancel_instance($db,$id)
	{
	}
	//Function for un-cancelling an instance
	function activate_instance($db,$id)
	{
	}
	//Function for getting all event instances
	function get_all_instances_for_event($db,$event)
	{
	}
	//Function for getting all future instances
	function get_all_future_instances($db,$time,$offset)
	{
	}
	//Function for getting all instances in a time frame
	function get_all_instances_in_range($db,$start,$end,$offset)
	{
	}
	//Function for getting a single instance
	function get_instance($db,$id)
	{
	}
	
	//Function for adding an event participant
	function add_participant($db,$event,$user)
	{
	}
	//Function for removing all participants from an event
	function remove_all_participants($db,$event)
	{
	}
	//Function for removing a participant from an event
	function remove_participant($db,$event,$user)
	{
	}
	//Function for getting all participants
	function get_event_participants($db,$event)
	{
	}
	
	//Function for inserting an IP/user link
	function add_link($db,$user,$ip)
	{
	}
	//Function for deleting an IP/user link
	function delete_link($db,$id)
	{
	}
	//Function for deleting all IP/user links
	function clear_links($db)
	{
	}
	//Function for getting all IPs associated with a user
	function get_ips_for_user($db,$user)
	{
	}
	//Function for getting all users associated with an IP
	function get_all_users_for_ip($db,$ip)
	{
	}
	
	//Function for banning a user
	function ban_user($db,$user,$banner,$reason)
	{
	}
	//Function for unbanning a user
	function unban_user($db,$user)
	{
	}
	//Function for getting all user bans
	function get_all_user_bans($db)
	{
	}
	//Function for getting a user ban
	function get_user_ban($db,$user)
	{
	}
	//Function for checking if a user is banned
	function is_user_banned($db,$user)
	{
	}
	//Function for banning an IP address
	function ban_ip($db,$user,$banner,$reason)
	{
	}
	//Function for unbanning an IP address
	function unban_ip($db,$user)
	{
	}
	//Function for getting all IP address bans
	function get_all_ip_bans($db)
	{
	}
	//Function for getting an IP address ban
	function get_ip_ban($db,$user)
	{
	}
	//Function for checking if an IP address is banned
	function is_ip_banned($db,$ip)
	{
	}
	//"Super ban" - recursively ban all IPs associated with user, and vice-versa
	function super_ban($db,$user,$ip)
	{
	}
	
	//Function for changing a setting
	function change_setting($db,$setting,$value)
	{
	}
	//Function for modifying setting default
	function change_default($db,$setting,$value)
	{
	}
	//Function for resetting a setting to default
	function reset_to_default($db,$setting)
	{
	}
	//Function for resetting a setting to system default ("static")
	function reset_to_static($db,$setting)
	{
	}
	//Function for getting a setting
	function get_setting($db,$setting)
	{
	}
	
	//Function for adding a stylesheet
	function add_stylesheet($db,$filename)
	{
	}
	//Function for changing a stylesheet filename
	function change_stylesheet($db,$id,$filename)
	{
	}
	//Function for deleting a stylesheet
	function delete_stylesheet($db,$id)
	{
	}
	//Function for getting all stylesheets
	function get_all_stylesheets($db)
	{
	}
	//Function for getting a stylesheet
	function get_stylesheet($db,$id)
	{
	}
?>