<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpstudy_pro\WWW\public/../application/admin\view\index\articlelist.html";i:1585580806;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="__admin__/css/pintuer.css">
<link rel="stylesheet" href="__admin__/css/admin.css">
<script src="__admin__/js/jquery.js"></script>
<script src="__admin__/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='articleadd'"><span class="icon-plus-square-o"></span> 添加文章</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">文章名称</th>
      <th width="10%">分类</th>
      <th width="10%">作者</th>
      <th width="10%">操作</th>
    </tr>
    <?php if(is_array($articlelist) || $articlelist instanceof \think\Collection || $articlelist instanceof \think\Paginator): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articlelist1): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo $articlelist1['id']; ?></td>
      <td><?php echo $articlelist1['title']; ?></td>
      <td><?php echo $articlelist1['cate_name']; ?></td>
      <td><?php echo $articlelist1['writer']; ?></td>
      <td><div class="button-group"> <a class="button border-main" href="articleedit?id=<?php echo $articlelist1['id']; ?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="articledel?id=<?php echo $articlelist1['id']; ?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){			
		
	}
}
</script>

</body>
</html>