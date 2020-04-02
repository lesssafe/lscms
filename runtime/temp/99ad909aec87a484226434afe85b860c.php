<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpstudy_pro\WWW\public/../application/admin\view\index\catelist.html";i:1585573377;}*/ ?>
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
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">分类名称</th>
      <th width="10%">当前分类</th>
      <th width="10%">上级分类ID</th>
      <th width="10%">操作</th>
    </tr>
    <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catelist1): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo $catelist1['cate_id']; ?></td>
      <td><?php  echo str_repeat('|---',$catelist1['cate_level'])  ?> <?php echo $catelist1['cate_name']; ?></td>
      <td><?php echo $catelist1['cate_level']; ?>级分类</td>
      <td><?php echo $catelist1['cate_pid']; ?></td>
      <td><div class="button-group"> <a class="button border-main" href="cateedit?cate_id=<?php echo $catelist1['cate_id']; ?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="catedel?cate_id=<?php echo $catelist1['cate_id']; ?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
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
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="cateadd">
      <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select name="cate_pid" class="input w50">
            <option value="0">顶级分类</option>
            <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catelist2): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $catelist2['cate_id']; ?>"><?php echo $catelist2['cate_name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
          <div class="tips">不选择上级分类默认为一级分类</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="cate_name" />
          <div class="tips"></div>
        </div>
      </div>


      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>