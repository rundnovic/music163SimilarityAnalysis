<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-27 20:55:33
         compiled from "test.html" */ ?>
<?php /*%%SmartyHeaderCode:14492583b31787e5d75-99862360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5017803b9ee9b00cc52db4a18a64b71cfc076fd7' => 
    array (
      0 => 'test.html',
      1 => 1480280083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14492583b31787e5d75-99862360',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_583b31788b3c45_60733661',
  'variables' => 
  array (
    'listUrl1' => 0,
    'url1DisplayInfo' => 0,
    'url1Per' => 0,
    'url1Num' => 0,
    'listUrl2' => 0,
    'url2Per' => 0,
    'url2Num' => 0,
    'intersectNum' => 0,
    'simiDis' => 0,
    'unionDisplayInfo' => 0,
    'simiPro' => 0,
    'intersect' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583b31788b3c45_60733661')) {function content_583b31788b3c45_60733661($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>网易云音乐歌单音乐相似度分析</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
  <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
  <script type="text/javascript">
  $.validator.setDefaults({
    submitHandler: function() {
      alert("提交事件!");
    }
  });
  $().ready(function() {
    $("#commentForm").validate();
  });
</script>
  </script>
</head>
<body>
  <h1></h1>
  <div class="container">
    <div class="div1 ">
      <form class="form-horizontal marginTop20" action="form.php" method="post" role="form" >
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label pull-left">歌单一URL:</label>
        <div class="col-sm-4">
          <input required type="text" name="url1" class="form-control" id="firstname" placeholder="请输入第一个歌单链接地址">
        </div>
      </div>
      <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">歌单二URL:</label>
        <div class="col-sm-4">
          <input required type="text" name="url2" class="form-control" id="lastname" placeholder="请输入第二个歌单链接地址">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-1 col-sm-offset-2">
          <button type="submit" class="btn btn-primary btn-block">分 析</button>
        </div>
      </div>
      </form>
    </div>
    <h4 class="col-sm-offset-1">分析结果</h4>
    <div class="div2 marginTop20 col-sm-offset-1">
      <div>
          <a href="http://music.163.com/#/playlist?id=<?php echo $_smarty_tpl->tpl_vars['listUrl1']->value['playlistid'];?>
" target="_blank">
             <button class="btn">歌单一名称：<?php echo $_smarty_tpl->tpl_vars['listUrl1']->value['playlistname'];?>
</button>
          </a>
          <a href="http://music.163.com/#/user/home?id=<?php echo $_smarty_tpl->tpl_vars['listUrl1']->value['userid'];?>
" target="_blank">
            <button class="btn">Created By：<?php echo $_smarty_tpl->tpl_vars['listUrl1']->value['username'];?>
</button>
          </a>
      </div>
      <div class="progress height25">
        <div class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['url1DisplayInfo']->value;?>
" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
        style='width: <?php echo $_smarty_tpl->tpl_vars['url1Per']->value;?>
'>
          <span class="pull-left  height25">歌曲总数：<?php echo $_smarty_tpl->tpl_vars['url1Num']->value;?>
首&nbsp; (<?php echo $_smarty_tpl->tpl_vars['url1Per']->value;?>
)</span>
        </div>
      </div>
    </div>
    <div class="div2 marginTop20 col-sm-offset-1">
      <div>
          <a href="http://music.163.com/#/playlist?id=<?php echo $_smarty_tpl->tpl_vars['listUrl2']->value['playlistid'];?>
" target="_blank">
             <button class="btn">歌单二名称：<?php echo $_smarty_tpl->tpl_vars['listUrl2']->value['playlistname'];?>
</button>
          </a>
          <a href="http://music.163.com/#/user/home?id=<?php echo $_smarty_tpl->tpl_vars['listUrl2']->value['userid'];?>
" target="_blank">
            <button class="btn">Created By：<?php echo $_smarty_tpl->tpl_vars['listUrl2']->value['username'];?>
</button>
          </a>
      </div>
      <div class="progress height25">
        <div class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['url1DisplayInfo']->value;?>
>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
        style='width: <?php echo $_smarty_tpl->tpl_vars['url2Per']->value;?>
'>
          <span class="pull-left  height25">歌曲总数：<?php echo $_smarty_tpl->tpl_vars['url2Num']->value;?>
首&nbsp;(<?php echo $_smarty_tpl->tpl_vars['url2Per']->value;?>
)</span>
        </div>
      </div>
    </div>
    <div class="div2 marginTop20 col-sm-offset-1">
      <div>
        <button class="btn">
          共同收藏歌曲数量：<?php echo $_smarty_tpl->tpl_vars['intersectNum']->value;?>
首
        </button>
        <button class="btn">
          相似度<?php echo $_smarty_tpl->tpl_vars['simiDis']->value;?>

        </button>
      </div>
      <div class="progress height25">
        <div class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['unionDisplayInfo']->value;?>
" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
        style='width: <?php echo $_smarty_tpl->tpl_vars['simiPro']->value;?>
'>
          <span class="pull-left  height25" style="color:black;"><?php echo $_smarty_tpl->tpl_vars['simiDis']->value;?>
</span>
        </div>
      </div>
    </div>
    <div class="div3 col-sm-4  col-sm-offset-1">
      <h4>共同音乐列表<small style="color:#d9534f">&nbsp;(注：如无法播放可能是因为版权不允许)</small></h4>

      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['intersect']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <div class="">
          <span>
            <embed src='http://music.163.com/style/swf/widget.swf?sid=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&type=2&auto=0&width=320&height=66' width='340' height='86'  allowNetworking='all'></embed>
          </span>
        </div>
      <?php } ?>

    </div>
</body>
</html>
<?php }} ?>
