<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:109:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/contract/index/edit.html";i:1731660516;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">
<meta name="robots" content="noindex, nofollow">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <?php if($row['check_status']=="2"): ?>
<div class="alert alert-danger-light">
    <p><i class="fa fa-info"></i> <?php echo __('已經審核通過的合約只能修改備注'); ?></p>
</div>
<?php endif; ?>
<style>
    .form-group .col-sm-2{
        min-width: 120px;
    }

</style>
<form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <div class="">
		<div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse"
                           href="#collapseOne">
                            <span><?php echo __('基本信息'); ?></span> 
                        </a>
                       
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-number" class="control-label col-xs-12 col-sm-2"><?php echo __('合約編號'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-number" data-rule="required" type="text" class="form-control" name="row[number]" value="<?php echo $row['number']; ?>" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>  />
							</div>
						</div>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('合約名稱'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-name" data-rule="required" type="text" class="form-control" name="row[name]" value="<?php echo $row['name']; ?>" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?> />
							</div>
						</div>

						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-customer_id" class="control-label col-xs-12 col-sm-2"><?php echo __('選擇客戶'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-customer_id" data-rule="required" data-source="facrm/customer/index/selectpage/type/all"
									   class="form-control selectpage"  type="text" value="<?php echo $row['customer_id']; ?>" disabled>

							</div>
						</div>
						<div class="col-md-4 col-xs-12 form-group business_id_div" >
							<label for="c-business_id" class="control-label col-xs-12 col-sm-2"><?php echo __('選擇商機'); ?>:</label>
							<div class="col-xs-12 col-sm-8">


								<input id="c-business_id" data-rule="required" data-source="facrm/business/index/index"
									   class="form-control selectpage" name="" type="text" value="<?php echo $row['business_id']; ?>"  disabled>

							</div>
						</div>

						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-money" class="control-label col-xs-12 col-sm-2"><?php echo __('合約金額'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-money" type="number"  class="form-control" name="row[money]" value="<?php echo $row['money']; ?>" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>  />
							</div>
						</div>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-order_time" class="control-label col-xs-12 col-sm-2"><?php echo __('下單時間'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-order_time"  value="<?php echo datetime($row['order_time']); ?>"  class="form-control datetimepicker" data-date-format="YYYY-MM-DD" data-use-current="true" name="row[order_time]" type="text" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?> >
							</div>
						</div>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-start_time" class="control-label col-xs-12 col-sm-2"><?php echo __('合約開始時間'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-start_time"  value="<?php echo datetime($row['start_time']); ?>"  class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm" data-use-current="true" name="row[start_time]" type="text" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?> >
							</div>
						</div>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-end_time" class="control-label col-xs-12 col-sm-2"><?php echo __('合約結束時間'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-end_time"  value="<?php echo datetime($row['end_time']); ?>"  class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm" data-use-current="true" name="row[end_time]" type="text"  <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>>
							</div>
						</div>


						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-contacts_id" class="control-label col-xs-12 col-sm-2"><?php echo __('客戶簽約人'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-contacts_id" data-source="facrm/contract/index/selectcontact"
									   class="form-control selectpage" name="row[contacts_id]" type="text" value="<?php echo $row['contacts_id']; ?>" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?> >

							</div>
						</div>

						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-order_admin_id" class="control-label col-xs-12 col-sm-2"><?php echo __('公司簽約人'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-order_admin_id" data-rule="required" data-source="facrm/common/selectpage/model/admin/type/all" data-field="nickname"
									   class="form-control selectpage" name="row[order_admin_id]" type="text" value="<?php echo $row['order_admin_id']; ?>" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>  >

							</div>
						</div>
						
						<?php if($row['check_status']!="2"): ?>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-flow_admin_id" class="control-label col-xs-12 col-sm-2"><?php echo __('審批人'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<?php if(($flow)): ?>
								<input id="c-flow_admin_id"  value="<?php echo $row['flow_admin_id']; ?>"  data-source="facrm/common/selectpage/model/admin/type/all" data-field="nickname" data-multiple="true" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>  <?php echo $flow->config==1?'disabled ':'data-rule="required"'; ?>
								class="form-control selectpage" name="row[flow_admin_id]" type="text" value="<?php if($flow->config==1): ?><?php echo $flow->step[0]['admin_ids']; endif; ?>">
								<?php else: ?>
								<label  class="control-label">審批流程已被刪除</label>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; if($row['check_status']=="2"): ?>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-expire_handle" class="control-label col-xs-12 col-sm-2">合約過期處理：</label>
							<div class="col-xs-12 col-sm-8">
								<?php echo build_radios('row[expire_handle]', ['0'=>'未處理', '1'=>'已續簽', '2'=>'不再合作'], $row['expire_handle']); ?>
							</div>
						</div>
						<?php endif; ?>
						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-order_admin_id" class="control-label col-xs-12 col-sm-2"><?php echo __('合約負責人'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<input id="c-owner_user_id" data-rule="required" data-source="facrm/common/selectpage/model/admin" data-field="nickname"
									   class="form-control selectpage" name="row[owner_user_id]" type="text" value="<?php echo $row['owner_user_id']; ?>"   >

							</div>
						</div>

						<div class="col-md-4 col-xs-12 form-group">
							<label for="c-remark" class="control-label col-xs-12 col-sm-2"><?php echo __('備注'); ?>:</label>
							<div class="col-xs-12 col-sm-8">
								<textarea id="c-remark" class="form-control" name="row[remark]"><?php echo $row['remark']; ?></textarea>
							</div>
						</div>
					
					</div>
                </div>
            </div>
		
		
		<div class="panel-group" id="accordion">
			 <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse"
                           href="#collapseThree">
                           合約擴展
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div id="extend"></div>

                    </div>
                </div>
            </div>
		
		</div>
        
    </div>

    <div class="row">
        <div class="table-responsive" style="margin: 20px">
            <table id="table" class="table table-striped table-bordered table-hover table-nowrap">
                <thead>
                <th style="width: 120px"><?php echo __('操作'); ?></th>
                <th style="width: 50px"><?php echo __('序號'); ?></th>
                <th><?php echo __('編碼'); ?></th>
                <th style="width: 100px"><?php echo __('商品'); ?></th>
                <th style="width: 80px"><?php echo __('數量'); ?></th>
                <th style="width: 80px"><?php echo __('售價'); ?></th>
                <th><?php echo __('備注'); ?></th>
                <th><?php echo __('規格'); ?></th>
                <th><?php echo __('屬性'); ?></th>
                <th ><?php echo __('單位'); ?></th>
                <th><?php echo __('小計'); ?></th>


                </thead>
                <tbody>
                <?php 
                $totalnums=0;
                $allMoney=0;//産品金額小計

                 if(is_array($product_list) || $product_list instanceof \think\Collection || $product_list instanceof \think\Paginator): if( count($product_list)==0 ) : echo "" ;else: $i=0; foreach($product_list as $key=>$vo): ++$i; 
                if(!isset($vo['info']['sku'])){
                    continue;
                }
                $totalnums +=$vo['nums'];
                $allMoney+=$vo['subtotal'];
                 ?>
                <tr>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="addRow()"><?php echo __('添加'); ?></button>
                        <button type="button" class="btn btn-default" onclick="delRow(this)"><?php echo __('刪除'); ?></button>
                    </td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $vo['info']['sku']; ?></td>
                    <td>
                        <input date-rule="required;" style="width: 100px" value="<?php echo $vo['info']['name']; ?>"  type="text" name="product[<?php echo $i; ?>][name]" data-index="<?php echo $i; ?>" class="find" class="" data-toggle="modal" data-target="#modelProduct" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?> >
                        <input   type="hidden" name="product[<?php echo $i; ?>][product_id]" value="<?php echo $vo['product_id']; ?>"  >
                        <input   type="hidden" name="product[<?php echo $i; ?>][sku]" value="<?php echo $vo['sku']; ?>" >
                        <input   type="hidden" name="product[<?php echo $i; ?>][specification]" value="<?php echo $vo['specification']; ?>" >
                        <input   type="hidden" name="product[<?php echo $i; ?>][prop]" value="<?php echo $vo['prop']; ?>"  >
                        <input   type="hidden" name="product[<?php echo $i; ?>][unit]" value="<?php echo $vo['unit']; ?>" >
                    </td>
                    <td>
                        <input  type="number" value="<?php echo $vo['nums']; ?>" style="width: 80px" name="product[<?php echo $i; ?>][nums]" data-rule="required;integer;range(0~);"  class="nums" onblur="totalNums(this)" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>>
                    </td>
                    <td><input value="<?php echo $vo['sales_price']; ?>" type="number" style="width: 80px" data-rule="required;range(0~);" onblur="calMoney(this)" class="unit-price" name="product[<?php echo $i; ?>][price]" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>>
                        <input   type="hidden" name="product[<?php echo $i; ?>][subtotal]"  value="<?php echo $vo['subtotal']; ?>" >
                    </td>
                    <td> <textarea rows="1" class="remarks" name="product[<?php echo $i; ?>][remarks]" cols="20" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>><?php echo $vo['remarks']; ?></textarea></td>

                    <td class="gg"><?php echo $vo['specification']; ?></td>
                    <td>
                        <?php echo $vo['prop']; ?>
                    </td>
                    <td class="unit"><?php echo $vo['unit']; ?></td>

                    <td class="subtotal">
                        <?php echo $vo['subtotal']; ?>
                    </td>


                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <td><?php echo __('合計'); ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="totalnums" ><?php echo $totalnums; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id="allMoney"><?php echo $allMoney; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div>

            <div class="row">
                <div class="col-md-4 col-xs-12">
                </div>
                <div class="col-md-4 col-xs-12">
                    <label class="control-label col-xs-12 col-sm-6"><?php echo __('優惠率%'); ?>:</label>
                    <div class="col-xs-12 col-sm-6">
                        <input id="c-rate" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?> class="form-control"  data-rule="required;float;range(0~100);"  name="row[discount_rate]" type="number" value="<?php echo $row['discount_rate']; ?>" onblur="calTotalMoneys()">

                    </div>
                </div>
                <div class="col-md-4 col-xs-12">

                    <label class="control-label col-xs-12 col-sm-6"> <?php echo __('産品總額 $'); ?>:</label>
                    <div class="col-xs-12 col-sm-6">
                        <input id="totalMoneys" class="form-control"  name="row[total_price]" <?php if($row['check_status']=="2"): ?>disabled<?php endif; ?>  type="number" value="<?php echo $row['total_price']; ?>">
                        <input id="money" style="display: none;"   readonly="readonly"  type="number" >
                        <input id="allNums" style="display: none;" name="row[totalNums]"  readonly="readonly"  type="number" >
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
            <?php if($row['check_status']=="2" &&$auth->check('facrm/contract/index/change')): ?>
            <a class="btn btn-xs btn-danger  btn-dialog" href="facrm/contract/index/change/ids/<?php echo $row['id']; ?>" data-title="合約更變"><?php echo __('更變'); ?></a>
            <?php endif; ?>

        </div>
    </div>
</form>


<!-- Modal -->
<div class="modal fade" id="modelProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 15px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo __('選擇産品'); ?></h4>
            </div>
            <div class="modal-body">
                <div id="lays-row" class="row" >
                    <table id="table2" class="table table-striped table-bordered table-hover " data-show-export="false" data-show-toggle="false" data-show-columns="false">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var contract_id=<?php echo input('ids'); ?>;
</script>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
