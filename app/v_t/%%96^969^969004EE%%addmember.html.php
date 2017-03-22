<?php /* Smarty version 2.6.26, created on 2017-03-22 09:36:54
         compiled from simpla/member/addmember.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_url', 'simpla/member/addmember.html', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main-content">
  <h2>欢迎您 <?php echo $this->_tpl_vars['_adminname']; ?>
</h2>
  <p id="page-intro">添加和编辑会员帐号。带<span class="red">*</span>为必填</p>
  <div class="clear"></div>
  <div class="content-box">
    <div class="content-box-header">
      <h3>添加编辑帐号</h3>
      <ul class="content-box-tabs">
        <li><a href="<?php echo smarty_function_get_url(array('rule' => "/member/index"), $this);?>
">帐号管理</a></li>
        <li><a href="#tab1" class="default-tab">添加帐号</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="content-box-content">
      <div class="tab-content default-tab" id="tab1">
        <div class="form">
          <form action="<?php echo smarty_function_get_url(array('rule' => '/member/addmember'), $this);?>
" method="post" id="js-form">
            <fieldset class="clearfix">
              <input type="hidden" value="<?php echo $this->_tpl_vars['member']['mid']; ?>
" name="mid" />
                <p>
                  <label><font class="red"> * </font>真实名字：</label>
                  <span>
                  <input type="text" value="<?php echo $this->_tpl_vars['member']['realname']; ?>
" class="text-input small-input" name="realname" id="realname" />
                  </span> </p>
                <p>
                  <label><font class="red"> * </font>会员卡卡号：</label>
                  <span>
                  <input type="text" class="text-input small-input" name="membercardid" value="<?php echo $this->_tpl_vars['member']['membercardid']; ?>
" id="membercardid" />
                  </span> </p>
                <p><font class="red"> * </font>用户组：<span>
                  <select name="grade">
                  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['group']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                    <option value="<?php echo $this->_tpl_vars['group'][$this->_sections['i']['index']]['mgid']; ?>
" <?php if ($this->_tpl_vars['group'][$this->_sections['i']['index']]['mgid'] == $this->_tpl_vars['member']['grade']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['group'][$this->_sections['i']['index']]['mgroup_name']; ?>
-<?php echo $this->_tpl_vars['group'][$this->_sections['i']['index']]['discount']; ?>
%</option>
                    <?php endfor; endif; ?>
                  </select>
                  </span> </p>
                <p>身份证号：
                  <span>
                  <input type="text" class="text-input small-input" name="cardid" value="<?php echo $this->_tpl_vars['member']['cardid']; ?>
" />
                  </span> </p>
                <p>用户状态：
                  <span>
                  <input name="state" type="radio" value="0" <?php if ($this->_tpl_vars['member']['state'] == 0): ?>checked="checked"<?php endif; ?>/>
                  禁用
                  <input name="state" type="radio" value="1" <?php if ($this->_tpl_vars['member']['state'] == 1): ?>checked="checked"<?php endif; ?>/>
                  启用</span> </p>
                <p>手机号码：
                  <span>
                  <input type="text" class="text-input min-input" name="mobile" value="<?php echo $this->_tpl_vars['member']['mobile']; ?>
" />
                  </span> </p>
                <p>座机号码：
                  <span>
                  <input type="text" class="text-input min-input" name="phone" value="<?php echo $this->_tpl_vars['member']['phone']; ?>
" />
                  </span> </p>
                <p>邮箱地址：
                  <span>
                  <input type="text" class="text-input min-input" name="email" value="<?php echo $this->_tpl_vars['member']['email']; ?>
" />
                  </span> </p>
                <p>地区选择：
                  <span>
                  <select id="province" name="prov_id" onChange="getcity(this.value)">
                    <option value="">---请选择省份---</option>
                  </select>
                  <select id="city" name="city_id">
                    <option value="">---请选择城市---</option>
                  </select>
                  </span> </p>
                <p>详细地址：
                  <span>
                  <input type="text" class="text-input small-input" name="address" value="<?php echo $this->_tpl_vars['member']['address']; ?>
" />
                  </span> </p>
                <p>邮政编码：
                  <span>
                  <input type="text" class="text-input small-input" name="zipcode" value="<?php echo $this->_tpl_vars['member']['zipcode']; ?>
" />
                  </span> </p>
              <dt>
                <input type="submit" name="" class="button" value="<?php if ($this->_tpl_vars['member']['mid']): ?>编辑<?php else: ?>添加<?php endif; ?>" />
              </dt>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/copy.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<script type="text/javascript" src="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/js/g.js"></script>
<script type="text/javascript">
function getprovince(rid,pid) {
	 $.ajax({
		url:'<?php echo $this->_tpl_vars['root_dir']; ?>
/ajax/getregion',
		data:'exce=1&parent_id='+rid,
		success:function(json) {
			for(i=0;i<json.length;i++) {
				if(json[i].region_id == pid) {
					var slt;
					slt = document.getElementById('province');
					slt.options.add(new Option(json[i].region_name,json[i].region_id));
					slt.options[slt.options.length-1].selected='selected';
				} else {
					slt = document.getElementById('province');
					slt.options.add(new Option(json[i].region_name,json[i].region_id));
				}
			}
		}
	 });
 }
function getcity(rid,cid) {
	 $.ajax({
		url:'<?php echo $this->_tpl_vars['root_dir']; ?>
/ajax/getregion',
		data:'parent_id='+rid,
		success:function(json) {
			document.getElementById('city').options.length = 0;
			document.getElementById('city').options.add(new Option('---请选择城市---',''));
			for(i=0;i<json.length;i++) {
				if(json[i].region_id == cid) {
					var slt;
					slt = document.getElementById('city');
					slt.options.add(new Option(json[i].region_name,json[i].region_id));
					slt.options[slt.options.length-1].selected='selected';
				} else {
					slt = document.getElementById('city');
					slt.options.add(new Option(json[i].region_name,json[i].region_id));
				}
			}
		}
	 });
}
$(document).ready(function(){
	getprovince('1','<?php echo $this->_tpl_vars['member']['prov_id']; ?>
');
	<?php if ($this->_tpl_vars['member']['prov_id']): ?>
	getcity('<?php echo $this->_tpl_vars['member']['prov_id']; ?>
','<?php echo $this->_tpl_vars['member']['city_id']; ?>
');
	<?php endif; ?>
})
</script>