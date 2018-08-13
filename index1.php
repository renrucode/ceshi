<?php
class AA{
	public function __construct(){
		echo "construct";
	}
	public static function hh(){
		echo "hh";
		$hhs=new self;
		// var_dump($hhs);//object
		return $hhs;//将类AA实例化的对象返回给hh()方法 
	}
	public function aa(){
      // echo "aa";
		return $this;//当前的对象即实例化后的对象$AA
	}
	public function bb(){
		// echo "bb";
		return $this;
	}
	public function cc(){
		echo "cc";
	}
}
// $AA=new AA();
// var_dump($AA);//object
// $AA->aa();
// var_dump($AA->aa());//object
// $AA->aa()->bb();//输出bb
// var_dump($AA->aa()->bb());//object
// $AA->aa()->bb()->cc();//cc

$hh=AA::hh();
 var_dump($hh);//objct
 $hh->cc();//cc





echo "<hr/>";
 class ee{
 	public static $kk=null;
 	public $mm;
 	public function __construct(){
 		$res=mysqli_connect('localhost','root','root','lianxi');
 		$this->mm=$res;
 	}
 	public static function aa(){
 		if(self::$kk==null){
 			self::$kk=new self;
 		}
       return self::$kk;
 		 // return new self;//减少实例化次数
 	}
 	public function bb(){
 		echo "string";
 	}
 	public function select($sql){
        $liulan=mysqli_query($this->mm,$sql);
        while ($an=mysqli_fetch_assoc($liulan)) {
 			// var_dump($an);
 			// echo "<br/>";
 			$newan[]=$an;		
 		}
 		return $newan;
    }
 }
 $sql1="select * from aaa ";
 // ee::aa()->bb();
 $see=ee::aa()->select($sql1);
 echo "<pre>";
var_dump($see);
 // var_dump(ee::aa());
 // echo "<hr/>";
 // ee::aa();
 // var_dump(ee::aa());