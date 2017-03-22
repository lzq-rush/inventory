<?php /* Smarty version 2.6.26, created on 2017-03-22 09:56:56
         compiled from simpla/sales/out.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'simpla/sales/out.html', 37, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['head_title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/favicon.ico" type="image/x-icon" />


<link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/simpla/css/bootstrap-theme.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/simpla/css/self.css" type="text/css" />

<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body>

<div id="main-content">
  <div class="clear"></div>
  <div class="content-box">
    <div class="content-box-header">
      <center><h3>张家物流公司</h3></center>
      <center><h4>配货单</h4></center>
      
      <div class="clear"></div>
    </div>
<!--     <div class="content-box-content">
      <div class="tab-content default-tab" id="tab1"> -->
      <center><div class="print-table">
        <table class="table table-striped table-hover">
          <tr>
            <td colspan="3">客户编号：<?php echo $this->_tpl_vars['member_id']; ?>
 
            客户名称：<?php if ($this->_tpl_vars['member_name']): ?><?php echo $this->_tpl_vars['member_name']; ?>
  <?php else: ?>无<?php endif; ?></td>
          </tr>
          <tr>
            <td colspan="3">订单号：<?php echo $this->_tpl_vars['order_id']; ?>
 购买时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</td>
          </tr>
          <tr>
            <th>商品名称</th>
            <th>单位</th>
            <th>数量</th>
            <th>单价</th>
            <th>金额</th>
            <th>备注</th>
          </tr>
          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['goods']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <tr>
            <td><?php echo $this->_tpl_vars['goods'][$this->_sections['i']['index']]['goods_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['goods'][$this->_sections['i']['index']]['unit']; ?>
</td>
            <td><?php echo $this->_tpl_vars['goods'][$this->_sections['i']['index']]['num']; ?>
</td>
            <td><?php echo $this->_tpl_vars['goods'][$this->_sections['i']['index']]['out_price']; ?>
</td>
            <td><?php echo $this->_tpl_vars['goods'][$this->_sections['i']['index']]['out_price']*$this->_tpl_vars['goods'][$this->_sections['i']['index']]['num']; ?>
</td>
          </tr>
          <?php endfor; endif; ?>
          <tr>
            <td colspan="3" class="alt">总价：<?php echo $this->_tpl_vars['out_amount']; ?>
元，优惠：<?php if ($this->_tpl_vars['mem_amount'] > 0): ?><?php echo $this->_tpl_vars['mem_amount']; ?>
元<?php elseif ($this->_tpl_vars['pro_amount'] > 0): ?><?php echo $this->_tpl_vars['pro_amount']; ?>
元<?php else: ?>无<?php endif; ?>。实收：<?php echo $this->_tpl_vars['real_amount']; ?>
元</td>
          </tr>
          <tr>
            <td colspan="3" class="alt">管理员：张张，开票员：张张。客户签名________</td>
          </tr>

        </table></center>
        </div>
<!--       </div>
    </div> -->
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