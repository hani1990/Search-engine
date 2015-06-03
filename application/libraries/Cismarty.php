<?php   
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');   
require_once( APPPATH . 'libraries/smarty/libs/Smarty.class.php' );   

 
class Cismarty extends Smarty {
    protected $ci;
    protected $complie_dir;
    protected $template_ext;
    public function  __construct(){
                parent::__construct();
        $this->ci = & get_instance();
        $this->ci->load->config('smarty');//加载smarty的配置文件
        //获取相关的配置项
        $this->template_dir   = $this->ci->config->item('template_dir');
        $this->complie_dir    = $this->ci->config->item('compile_dir');
        $this->cache_dir      = $this->ci->config->item('cache_dir');
        $this->template_ext   = $this->ci->config->item('template_ext');
        $this->caching        = $this->ci->config->item('caching');
        $this->cache_lifetime = $this->ci->config->item('lefttime');
                $this->left_delimiter = '<{';
        $this->right_delimiter = '}>';
        if(function_exists('site_url')) {
            // URL helper required
            $this->assign('site_url', site_url()); // so we can get the full path to CI easily
        }
         
        $this->assign('elapsed_time', $this->ci->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end'));
        $this->assign('memory_usage', ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage() / 1024 / 1024, 2) . 'MB');
    }
} 