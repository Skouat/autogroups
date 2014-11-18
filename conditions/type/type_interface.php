<?php
/**
*
* Auto Groups extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbb\autogroups\conditions\type;

/**
* Auto Groups interface
*/
interface type_interface
{
	/**
	* Get condition type
	*
	* @return string Condition type
	* @access public
	*/
	public function get_condition_type();

	/**
	* Get condition type name
	*
	* @return string Condition type name
	* @access public
	*/
	public function get_condition_type_name();

	/**
	* Get users to apply to this condition
	*
	* @param array $options Array of optional data
	* @return array Array of users ids and their post counts
	* @access public
	*/
	public function get_users_for_condition($options = array());

	/**
	* Get auto group rules for condition
	*
	* @param array $user_ids An array of user ids to check
	* @param string $condition Auto group condition type name
	* @return array Auto group rows
	* @access public
	*/
	public function get_group_rules($condition);

	/**
	* Get users group ids
	*
	* @param array $user_ids An array of user ids to check
	* @return array An array of usergroup ids each user belongs to
	* @access public
	*/
	public function get_users_groups($user_ids);

	/**
	* Add user to groups
	*
	* @param array $groups_data Data array where a group id is a key and user array is value
	* @param bool $default Make this group the default
	* @return null
	* @access public
	*/
	public function add_user_to_groups($groups_data, $default);

	/**
	* Remove user from groups
	*
	* @param array $groups_data Data array where a group id is a key and user array is value
	* @return null
	* @access public
	*/
	public function remove_user_from_groups($groups_data);
}
