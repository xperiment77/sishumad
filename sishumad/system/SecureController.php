<?php
/**
* Extends to Application Base Controller.
* Page Controllers which need page authentication and authorization can extend to this class 
*/
class SecureController extends BaseController{
	function __construct(){
		parent::__construct();
		// Page actions which do not require authentication.
		$exclude_pages = array('header/list', 'css/list', 'berita_utama/list', 'content/list', 'pimpinan_dan_staff/list', 'layanan/list', 'alamat/list', 'peta/list', 'covid_19/list', 'informasi_kampus/list', 'berita_terbaru/list', 'border/list', 'tool_bar/list', 'sidebar1/list', 'sidebar2/list', 'sidebar3/list', 'sidebar4/list', 'visi_misi/list', 'covid_19/view', 'berita/list', 'berita/view', 'artikel/list', 'gallery/list', 'humas/list', 'makna_lambang/list', 'sejarah/list', 'sisfo/list', 'struktur_organisasi/list', 'kontak_kami/add', 'progress_sishumad/list', 'laporan_mingguan/list', 'ict/list', 'satu_data/list', 'video/list', 'youtube/list', 'pesan_terkirim/list', 'info/list');
		$url = Router :: $page_url;
		$url = str_ireplace("/index", "/list", $url);
		$acl = new ACL;
		if(!empty($url)){
			$url_segment =$url_segment = explode("/" , rtrim($url , "/")) ;
			$controller = strtolower(!empty($url_segment[0]) ? $url_segment[0] : null);
			$action = strtolower((!empty($url_segment[1]) ? $url_segment[1] : "list"));
			$page = "$controller/$action";
			if(!in_array($page , $exclude_pages)){
				if($this->authenticate_user()){
					
					$page = Router::$page_url; //current page path
					$this->status = ACL::GetPageAccess($page); 

				}
				else{
					$this->status = UNAUTHORIZED;
				}
			}
		}
	}

	/**
	 * Authenticate And Check User Page Access Eligibility
	 * @return  Redirect to Login Page Or Displays Error Message When user access control authorization Fails
	 */
	private function authenticate_user()
	{
		if (user_login_status() == false) {
			//check if user has a login cookie
			$session_key = get_cookie("login_session_key");
			if (!empty($session_key)) {
				$db = $this->GetModel();
				$db->where("login_session_key", hash_value($session_key));
				$user = $db->getOne("__tablename");
				if (!empty($user)) {
					set_session("user_data", $user);
				}
			}
		}
		return user_login_status();
	}
}