<!--全局设置-->
<?php 
include('config.php'); 
$tips = '';
include('admincore.php');?>
<!--
 * 热搜视频会员系统
 * 网站：http://v.resoumen.com
 * 编写：热搜视频
 * 时间：2019年08月01日
 * 合作事宜请联系站长，谢绝一切形式的盗站行为！
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php include('inc.php'); ?>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>
	</head>
<body>
	<?php $nav = 'setting';include('head.php'); ?>
	
	<div id="hd_main">
		<div class="hd_bj">
			<div class="hd_bt">
			</div> 
			<div align="center"><?php echo $tips?></div>
			 
			<form name="configform" id="configform" action="./setting.php?act=setting&t=<?php echo time()?>" method="post" onsubmit="return subck()">
				<table width="90%"  align="center" cellpadding="5" cellspacing="1" class="tablecss" >
					<tr class="thead">
						<td colspan="10" align="left" style="color: #63b8ff;font-weight: bold;font-size: 16px;">基本设置</td>
					</tr>
					<tr>
					  <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">网站名称</td>
					  <td width="680" valign="middle">
					  	<input name="edit" id="edit" type="hidden" value="1" />
					  	<input type="text" name="aik[sitename]" class="shuru" value="<?php echo $aik['sitename']?>" size="60" >
					  	<span class="gray tips">网站名称，如：热搜视频</span>
					  </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">网站域名</td>
					    <td width="680" valign="middle">
					    	<input type="text" name="aik[pcdomain]" class="shuru" id="aik_pcdomain" value="<?php echo $aik['pcdomain']?>" size="60">
					      <span class="gray tips">网站域名，如：http://v.resoumen.com </span>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">首页标题</td>
					    <td width="680" valign="middle">
					    	<input type="text" name="aik[title]" class="shuru" value="<?php echo $aik['title']?>" size="60">
					      <span class="gray tips">首页标题，一般不超过80个字符</span>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">关键字</td>
					    <td valign="top"><span class="gray tips">首页SEO关键字，用英文逗号分开，一般不超过100个字符</span><br>
					    	<textarea name="aik[keywords]" cols="100" rows="3"><?php echo $aik['keywords']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">首页描述</td>
					    <td valign="top">
					    	<span class="gray tips">首页SEO描述，一般不超过200个字符</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[description]" cols="100" rows="3"><?php echo $aik['description']?></textarea>
					    </td>
					</tr>
					
					<tr>
						<td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">默认视频</td>
						<td valign="top">首页默认自动播放视频<font color="red">（视频播放默认调用接口）</font><div class="cl5"></div>
						    <input type="text" name="aik[maurl]" class="shuru" placeholder="填写视频链接" value="<?php echo $aik['maurl']?>" size=100" >
						</td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">解析接口</td>
					   		
					    <td valign="top">视频解析接口分别填入下列空格中<font color="red">（第一条是默认调用接口）</font><div class="cl5"></div>
					    	<input type="text" name="aik[jiekou1name]" class="shuru" placeholder="接口名称：" value="<?php echo $aik['jiekou1name']?>" size=15" ><input type="text" name="aik[jiekou1]" placeholder="接口URL：" class="shuru" value="<?php echo $aik['jiekou1']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou2name]" class="shuru" placeholder="接口名称：" value="<?php echo $aik['jiekou2name']?>" size=15" ><input type="text" name="aik[jiekou2]" placeholder="接口URL：" class="shuru" value="<?php echo $aik['jiekou2']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou3name]" class="shuru" placeholder="接口名称：" value="<?php echo $aik['jiekou3name']?>" size=15" ><input type="text" name="aik[jiekou3]" placeholder="接口URL：" class="shuru" value="<?php echo $aik['jiekou3']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou4name]" class="shuru" placeholder="接口名称：" value="<?php echo $aik['jiekou4name']?>" size=15" ><input type="text" name="aik[jiekou4]" placeholder="接口URL：" class="shuru" value="<?php echo $aik['jiekou4']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou5name]" class="shuru" placeholder="接口名称：" value="<?php echo $aik['jiekou5name']?>" size=15" ><input type="text" name="aik[jiekou5]" placeholder="接口URL：" class="shuru" value="<?php echo $aik['jiekou5']?>" size="80" ><br/>
							<input type="text" name="aik[jiekou6name]" class="shuru" placeholder="接口名称：" value="<?php echo $aik['jiekou6name']?>" size=15" ><input type="text" name="aik[jiekou6]" placeholder="接口URL：" class="shuru" value="<?php echo $aik['jiekou6']?>" size="80" ><br/>
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">导航菜单</td>
					    <td valign="top">
					    	<span class="gray tips">首页顶部新增导航菜单，不添加可以留空，图标请添加在Li下面：'<xmp style="display: inline-block;background: #FA584E;color: #fff;font-size: 9px;"><span class="ico-new"></span></xmp>'</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[topnav]" cols="100" rows="5"><?php echo $aik['topnav']?></textarea>
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">旗下网站</td>
					    <td valign="top">
					    	<input type="text" name="aik[url]" placeholder="填写友情网站链接" class="shuru" value="<?php echo $aik['url']?>" size="100"><br/>	
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">站长主页</td>
					    <td valign="top">
					    	<input type="text" name="aik[zhuye]" placeholder="填写个人主页或者微博链接" class="shuru" value="<?php echo $aik['zhuye']?>" size="100"><br/>	
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">联系我们</td>
					    <td valign="top">
					    	<input type="text" name="aik[lianxi]" placeholder="推荐填写一键发起QQ对话链接" class="shuru" value="<?php echo $aik['lianxi']?>" size="100"><br/>	
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">会员群组</td>
					    <td valign="top">
					    	<input type="text" name="aik[qun]" placeholder="推荐填写一键加QQ群链接" class="shuru" value="<?php echo $aik['qun']?>" size="100"><br/>	
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">侧滑广告</td>
					    <td valign="top">
					    	<div class="cl5"></div>
					    	<textarea name="aik[ch1]" cols="100" rows="3" placeholder="左侧悬浮侧滑广告，填写广告代码，不开启可以留空"><?php echo $aik['ch1']?></textarea>
					    	<div class="cl5"></div>
					    	<textarea name="aik[ch2]" cols="100" rows="3" placeholder="右侧悬浮侧滑广告，填写广告代码，不开启可以留空"><?php echo $aik['ch2']?></textarea>
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">视频下方</td>
					    <td valign="top">
					    	<div class="cl5"></div>
					    	<textarea name="aik[gonggao]" cols="100" rows="2" placeholder="视频下方文字广告，填写文案，一般不超过100个字符"><?php echo $aik['gonggao']?></textarea>
					    	<div class="cl5"></div>
					    	<textarea name="aik[gonggaourl]" cols="100" rows="2" placeholder="视频下方文字广告，填写链接，无链接地址可以留空"><?php echo $aik['gonggaourl']?></textarea>
					    </td>
					</tr>
					
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">横幅广告</td>
					    <td valign="top">
						<div class="cl5"></div>
					    	<textarea name="aik[guanggao]" cols="100" rows="3" placeholder="播放器下方横幅广告，填写广告代码，不开启可以留空"><?php echo $aik['guanggao']?></textarea>	
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">友情链接</td>
					    <td valign="top">
					    	<textarea name="aik[homelink]" cols="100" rows="8" placeholder="网站底部友情链接，填写代码，不开启可以留空"><?php echo $aik['homelink']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">备案号</td>
					    <td width="690" valign="middle">
					    	<input type="text" name="aik[icp]" id="aik_path" value="<?php echo $aik['icp']?>" size="50">
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">版权说明</td>
					    <td valign="top">
					    	<textarea name="aik[foot]" cols="100" rows="4"><?php echo $aik['foot']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">网站统计</td>
					    <td valign="top">
					    	<textarea name="aik[tongji]" cols="100" rows="4"><?php $aik['tongji'] = str_replace("\\'","'",$aik['tongji']);echo htmlspecialchars($aik['tongji'])?></textarea>
					    </td>
					</tr>
					<td colspan="10" align="left" style="color: #63b8ff;font-weight: bold;font-size: 16px;">登录账号设置</td>
						
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">登录账号</td>
						    <td valign="top"><input type="text" name="aik[admin_name]" value="<?php echo $aik['admin_name']?>" size="30">
						   	<span class="gray tips"></span></td>
						</tr>
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">登录密码</td>
						    <td valign="top"><input type="text" name="aik[admin_pass]" value="" size="30">
						    <span class="gray tips">不修改请留空</span></td>
						</tr>
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title" style="font-weight: bold">管理邮箱</td>
						    <td valign="top"><input type="text" name="aik[admin_email]" value="<?php echo $aik['admin_email']?>" size="30"></td>
						</tr>
					
				</table>
				<!--核心提交-->
				<div align="center" style="margin: 20 auto; display: inline-block;width: 100%;">
						<input name="edit" type="hidden" value="1" />
						<input id="configSave" type="submit" class="nth" onclick="return getsort()" value="保 &nbsp;&nbsp;&nbsp;&nbsp;存">
				</div>	
			</form>
			<script type="text/javascript">
				$(".sxlist:first").dragsort();
			</script>
		</div>
	</div>
<!--<?php include('foot.php'); ?>-->
</body>
</html>