<?php

namespace App\Http\Controllers;

//use Illuminate\Http;
//use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
//    header("Access-Control-Allow-Origin:*");
    public $e_put = ['code'=>404,'info'=>'Error'];
    public function index() {
        $data = ['code'=>200,'data'=>['name'=>'张三','age'=>35]];
        echo json_encode($data);
    }

    /*测数数据跑通*/
    public function get_data() {
        $back = Input::get('data_back');
//        $back = $_GET['back'];
//        if(!$back){
//            echo json_encode($this->e_put);exit;
//        }
        $data = [['title'=>'买车票','start'=>'2017,12,6'],['title'=>'买菜','start'=>'2017,12,8']];
        echo $back.'('.json_encode($data).')';
    }

    /*获取日程数据*/
    public function get_info() {
        $back = Input::get('data_back');
        if(!$back) {
            echo json_encode($this->e_put);exit;
        }
        $res = DB::table('dateinfo')->where('is_show',1)->get()->toarray();
        echo $back.'('.json_encode($res).')';
//        print_r($res);

    }

    /*获取日程数据*/
    public function get_xml() {
        $res = DB::table('dateinfo')->select(['event_info','start_time','end_time'])->where('is_show',1)->get()->toarray();
//        print_r($res);die;
        return $res;
    }

    public function lar_get() {
        $res = DB::table('dateinfo')->where('is_show',1)->get();
//        print_r($res);die;
        return view('Index.index');
    }

    /*提交表单数据*/
    public function submit_do() {
        $data = Input::get();
        if($data['day_type'] != 3) {
//            unset($data['end_time']);
            $data['end_time'] = null;
        }
        unset($data['day_type']);
        $data['event_info'] = $this->chars_do($data['event_info']);
//        print_r($data);
        $res = DB::table('dateinfo')->insert([
            'start_time'=>$data['start_time'],
            'end_time'=>$data['end_time'],
            'event_info'=>$data['event_info'],
            'add_time'=>time(),
            /*审核项 默认可展示*/
            'is_show'=>1
        ]);
//        var_dump($res);
//        if($res)
//        $this->redirect('');
        return redirect('/');
}



    /*Html标签过滤*/
    private function chars_do($param = '') {
        return htmlspecialchars($param);
    }
}