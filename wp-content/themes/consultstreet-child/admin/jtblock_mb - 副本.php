<?php 
require 'tpl/inc_admin_ini.php';
//require DMCURPGROOT.'admin/tpl/inc_admin_ini.php'; 
require DMCURPGROOT.'admin/tpl/tpl_header.php'; 
//-------------

 
//-------------
//pre($_GET);
//$ppid = @$_GET['ppid'];
$jumpv = DMCURPGPATH.'admin/jtblock_mb.php?lang=en';

$act = htmlentitdm(@$_GET['act']);
$mbdir = htmlentitdm(@$_GET['mbdir']);
 ?>
 
<div class="jtblockadmin container">
 
 <h2 class="toptitle">模板管理</h2>
 <div class="blocknavlist blocknav" style="padding:10px 0"> 


<?php 
$dmcurmbdir = 'mb01';

$file = DMCURPGROOT.'curmb.php';

 if(is_file($file)) require $file;

//echo $dmcurmbdir;

if($act=='use'){

   // echo $mbdir;

    $cnt = '<?php  $dmcurmbdir = "'.$mbdir.'";';

    
    if(is_file($file)){
        file_put_contents($file,$cnt);
    }


 jump($jumpv);

 
}else{  

 
$mbdir = dmgetDir(DMPGMBPGROOT);
//pre($mbdir);
 
 echo '<ul class="mblist">';
  $img = DMPGMBPGPATH_CUR.'screenshot.jpg';

   $mbconfig = '<a class="but2" href="jtblock_mbconfig.php?lang=en&mbdir='.DMCURMBPGNAME.'"  target="_self">模板配置</a>';
   //$mbconfig = '';

  echo '<li><a href="'.DMBASEURL01.'" target="_blank"><img src="'.$img.'" alt="" /></a><div class="title cur">'.DMCURMBPGNAME.'<br />正在使用此模板'.$mbconfig.'</div></li>';

    foreach ($mbdir as $k => $v) {

        if(DMCURMBPGNAME == $v) continue;

        
        $img = DMPGMBPGPATH.$v.'/screenshot.jpg';
        $mbconfig = '<a href="jtblock_mbconfig.php?lang=en&mbdir='.$v.'" target="_self">模板配置</a>';

       // $mbconfig = '';

        echo '<li><img src="'.$img.'" alt="" /><div class="title">'.$v.'<br /><a class="but1" href="'.$jumpv.'&act=use&mbdir='.$v.'">启用此模板</a> '.$mbconfig.'</div></li>';

    }

    echo '</ul>';


 } //end act...
 ?>


  

 
</div>
 <?php
 require_once DMCURPGROOT.'admin/tpl/tpl_footer.php';
