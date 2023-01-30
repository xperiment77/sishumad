<?php
/**
 * Page Access Control
 * @category  RBAC Helper
 */
defined('ROOT') or exit('No direct script access allowed');
class ACL
{
	

	/**
	 * Array of user roles and page access 
	 * Use "*" to grant all access right to particular user role
	 * @var array
	 */
	public static $role_pages = array(
			'admin' =>
						array(
							'berita_utama' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'content' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'css' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'header' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'js' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'login' => array('list','view','add','edit', 'editfield','delete','userregister','accountedit','accountview'),
							'pimpinan_dan_staff' => array('list','view','add','edit', 'editfield','delete'),
							'berita_terbaru' => array('list','view','add','edit', 'editfield','delete'),
							'layanan' => array('list','view','add','edit', 'editfield','delete'),
							'alamat' => array('list','view','add','edit', 'editfield','delete'),
							'peta' => array('list','view','add','edit', 'editfield','delete'),
							'covid_19' => array('list','view','add','edit', 'editfield','delete'),
							'informasi_kampus' => array('list','view','add','edit', 'editfield','delete'),
							'border' => array('list','view','add','edit', 'editfield','delete'),
							'tool_bar' => array('list','view','add','edit', 'editfield','delete'),
							'berita' => array('list','view','add','edit', 'editfield','delete'),
							'edit_gambar' => array('list','view','add','edit', 'editfield','delete'),
							'sidebar1' => array('list','view','add','edit', 'editfield','delete'),
							'sidebar2' => array('list','view','add','edit', 'editfield','delete'),
							'sidebar3' => array('list','view','add','edit', 'editfield','delete'),
							'sidebar4' => array('list','view','add','edit', 'editfield','delete'),
							'dashboard' => array('list','view','add','edit', 'editfield','delete'),
							'visi_misi' => array('list','view','add','edit', 'editfield','delete'),
							'artikel' => array('list','view','add','edit', 'editfield','delete'),
							'data_pegawai' => array('list','view','add','edit', 'editfield','delete'),
							'gallery' => array('list','view','add','edit', 'editfield','delete'),
							'humas' => array('list','view','add','edit', 'editfield','delete'),
							'makna_lambang' => array('list','view','add','edit', 'editfield','delete'),
							'sejarah' => array('list','view','add','edit', 'editfield','delete'),
							'sisfo' => array('list','view','add','edit', 'editfield','delete'),
							'struktur_organisasi' => array('list','view','add','edit', 'editfield','delete'),
							'kontak_kami' => array('list','view','add','edit', 'editfield','delete'),
							'progress_sishumad' => array('list','view','add','edit', 'editfield','delete'),
							'laporan_mingguan' => array('list','view','add','edit', 'editfield','delete'),
							'ict' => array('list','view','add','edit', 'editfield','delete'),
							'satu_data' => array('list','view','add','edit', 'editfield','delete'),
							'video' => array('list','view','add','edit', 'editfield','delete'),
							'youtube' => array('list','view','add','edit', 'editfield','delete'),
							'pesan_terkirim' => array('list','view','add','edit', 'editfield','delete'),
							'info' => array('list','view','add','edit', 'editfield','delete')
						),
		
			'user' =>
						array(
							'login' => array('userregister','accountedit','accountview')
						)
		);

	/**
	 * Current user role name
	 * @var string
	 */
	public static $user_role = null;

	/**
	 * pages to Exclude From Access Validation Check
	 * @var array
	 */
	public static $exclude_page_check = array("", "index", "home", "account", "info", "masterdetail");

	/**
	 * Init page properties
	 */
	public function __construct()
	{	
		if(!empty(USER_ROLE)){
			self::$user_role = USER_ROLE;
		}
	}

	/**
	 * Check page path against user role permissions
	 * if user has access return AUTHORIZED
	 * if user has NO access return UNAUTHORIZED
	 * if user has NO role return NO_ROLE
	 * @return string
	 */
	public static function GetPageAccess($path)
	{
		$rp = self::$role_pages;
		if ($rp == "*") {
			return AUTHORIZED; // Grant access to any user
		} else {
			$path = strtolower(trim($path, '/'));

			$arr_path = explode("/", $path);
			$page = strtolower($arr_path[0]);

			//If user is accessing excluded access contrl pages
			if (in_array($page, self::$exclude_page_check)) {
				return AUTHORIZED;
			}

			$user_role = strtolower(USER_ROLE); // Get user defined role from session value
			if (array_key_exists($user_role, $rp)) {
				$action = (!empty($arr_path[1]) ? $arr_path[1] : "list");
				if ($action == "index") {
					$action = "list";
				}
				//Check if user have access to all pages or user have access to all page actions
				if ($rp[$user_role] == "*" || (!empty($rp[$user_role][$page]) && $rp[$user_role][$page] == "*")) {
					return AUTHORIZED;
				} else {
					if (!empty($rp[$user_role][$page]) && in_array($action, $rp[$user_role][$page])) {
						return AUTHORIZED;
					}
				}
				return FORBIDDEN;
			} else {
				//User does not have any role.
				return NOROLE;
			}
		}
	}

	/**
	 * Check if user role has access to a page
	 * @return Bool
	 */
	public static function is_allowed($path)
	{
		return (self::GetPageAccess($path) == AUTHORIZED);
	}

}
