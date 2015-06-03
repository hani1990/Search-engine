<?php 

if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');
require_once( APPPATH . 'third_party/phpanalysis2.0/phpanalysis.class.php' );   

class Example extends MY_Controller{  
  
    // function __construct(){  
    //     parent::__construct();  
    // }  
    public function index(){  
        $data['title'] = '标题';  
        $data['num'] = '123456789';  
        $this->cismarty->assign('data',$data); // 亦可  
        $this->cismarty->display('test.html'); // 亦可  
    }  

    public function fenci( $str ){
     $t1 = $ntime = microtime(true);

    $do_multi = $do_prop = $pri_dict = false;
    $do_fork  = $do_unit  = true;
    
    //初始化类
    PhpAnalysis::$loadInit = false;
    $pa = new PhpAnalysis('utf-8', 'utf-8', 'false');

    //载入词典
    $pa->LoadDict();
        
    //执行分词
    $pa->SetSource($str);
    $pa->differMax = $do_multi;
    $pa->unitWord = $do_unit;
    
    $pa->StartAnalysis( $do_fork );
    
    // echo $okresult = $pa->GetFinallyResult(' | ', $do_prop);
    //print_memory('输出分词结果', $memory_info);
    //获取出现频率最高的指定词条数（通常用于提取文档关键字）
     $kws      = $pa->GetFinallyKeywords();
     //$array_kw = explode( ',', $kws );
     var_dump( $kws );
     //return $array_kw;
    //获取hash索引数组
    //var_dump( $pa->GetFinallyIndex() ); 
     //获得包含属性信息的粗分结果
   // var_dump( $pa->GetSimpleResultAll() );
    
    //var_dump( $pa->GetSimpleResult() );
  // echo $pa_foundWordStr = $pa->foundWordStr;
   // var_dump( $pa );
    
    }

    public function test(){

        $query = $this->db->query( 'select * from onethink_jobs where id=3117 ' );
        foreach ($query->result_array() as $r) {
           $str = $r['description'];
           //分词
           $kw  = $this->fenci( $str );
          // var_dump( $kw );
           //建立索引
           // foreach ($kw as &$k) {
           //  echo $k. $r['id']. '</br>'   ;
           //   if( !$this->db->get_where( 'kw' , array( 'docid' => $r['id'] ) ) ){

           //     // $this->db->insert( 'kw' , array( 'kw'=>$k , 'docid'=>$r['id']  ) );
           //      echo "建立索引成功!";
           //   } else {
           //      echo "该文档id 已经存在";
           //   }
             
           // }
        }
       


    }
}  
  