<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:109:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/customer/index/edit.html";i:1731660516;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
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
                                <style>
    .nav-tabs{
        border-bottom: unset;
    }
</style>
<form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <div class="row content" style="padding: 0px;">
        <div class="panel-group" id="accordion">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">

                        <small style="margin-left: 10px;" class=" label bg-purple">總消費：<?php echo $row['purchase_total']; ?></small>
                        <small style="margin-left: 10px;" class=" label bg-blue">下單：<?php echo $row['purchase_times']; ?>次</small></label>
                        <small style="margin-left: 10px;" class=" label bg-green">
                            <?php 
                            $deal_time= \addons\facrm\library\Helper::timeTran($row['deal_time']);
                            echo  $deal_time?$deal_time.'下單':'無下單';
                             ?>
                        </small></label>
                        <span class="label label-primary pull-right">
                            <a href="#" style="color: #ffffff" onclick="javascript:parent.Fast.api.open('facrm/customer/index/edit/ids/<?php echo $row['id']; ?>',__('修改客戶信息-')+'<?php echo $row['name']; ?>');"> <?php echo __('修改'); ?></a>
                        </span>

                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">

                        <div class="form-group col-md-6 col-xs-12">
                            <label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('客戶名稱'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <input id="c-name"  style="border-right: unset" data-rule="required" type="text" class="form-control" name="row[name]" value="<?php echo htmlentities($row['name']); ?>"  />
                                    <div class="input-group-addon " style="border-left: unset">
                                        <span>ID：<?php echo $row['id']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">

                            <label for="c-telephone" class="control-label col-xs-12 col-sm-2"><?php echo __('聯系電話'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <input id="c-telephone" class="form-control" size="50" name="row[telephone]" type="text" value="<?php echo $row['telephone']; ?>"  >
                                    <div class="input-group-addon no-border no-padding">
                                        <span>
                                            <button type="button"  class="btn btn-success cloudcall" data-type="customer" data-field="telephone" data-typeid="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>"
                                            ><i class="fa fa-phone"></i> <?php echo __('雲呼'); ?></button></span>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-group col-md-6 col-xs-12">
                            <label for="c-mobile" class="control-label col-xs-12 col-sm-2"><?php echo __('聯系手機'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <input id="c-mobile" class="form-control" size="50" name="row[mobile]" type="text" value="<?php echo $row['mobile']; ?>"  >
                                    <div class="input-group-addon no-border no-padding">
                                        <span>
                                            <button type="button"  class="btn btn-success cloudcall" data-type="customer" data-field="mobile" data-typeid="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>"
                                            ><i class="fa fa-phone"></i> <?php echo __('雲呼'); ?></button></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label class="control-label col-xs-12 col-sm-2"><?php echo __('客戶級別'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <?php echo build_select('row[level]', $levelList,$row['level'], ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label class="control-label col-xs-12 col-sm-2"><?php echo __('客戶行業'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <?php echo build_select('row[industry]', $industryList, $row['industry'], ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label class="control-label col-xs-12 col-sm-2"><?php echo __('客戶來源'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                               <?php echo build_select('row[source]', $sourceList, $row['source'], ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                                  
							</div>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="c-tags" class="control-label col-xs-12 col-sm-2"><?php echo __('客戶標簽'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input id="c-tags" data-rule="" class="form-control" placeholder="輸入後空格確認" name="row[tags]" type="text" value="<?php echo $row['tags']; ?>">
                                <span class="text-gray">輸入後空格確認</span>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="c-address" class="control-label col-xs-12 col-sm-2">地址:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="form-inline" data-toggle="cxselect" data-selects="province,city,area">
                                    <select class="province form-control" name="province" data-url="ajax/area">
                                        <option value="<?php echo $row['province']; ?>" selected=""></option>
                                    </select>
                                    <select class="city form-control" name="city" data-url="ajax/area">
                                        <option value="<?php echo $row['city']; ?>" selected=""></option>
                                    </select>
                                    <select class="area form-control" name="area" data-url="ajax/area">
                                        <option value="<?php echo $row['area']; ?>" selected=""></option>
                                    </select>
                                </div>
                            </div>
                            <small class="pull-left" style=" margin-left: -10px;line-height: 31px;">
                                <i class="fa fa-info-circle"></i> <a href="#" data-toggle="tooltip"  data-original-title="插件會用到fa_area表數據。您可以直接導入數據，或者後台安裝“開發示例”插件">有問題?</a></small>

                        </div>

                        <div class="form-group col-md-6 col-xs-12">
                            <label for="c-detail_address" class="control-label col-xs-12 col-sm-2">詳細地址:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input id="c-detail_address" type="text" class="form-control" name="row[detail_address]" value="<?php echo $row['detail_address']; ?>"  />
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-xs-12">
                            <label for="c-remark" class="control-label col-xs-12 col-sm-2"><?php echo __('備注'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <textarea id="c-remark" class="form-control" name="row[remark]"><?php echo $row['remark']; ?></textarea>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse"
                           href="#collapseThree">
                            <?php echo __('資料擴展'); ?>
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



        <div class="panel panel-default panel-info">
            <div class="panel-heading" style="padding-bottom: 0;">
                <ul class="nav nav-tabs">

                    <li class="active"><a href="#bulletin" role="tab" data-toggle="tab">跟進記錄</a></li>
                    <!-- <li><a href="#rule" role="tab" data-toggle="tab">邀約記錄</a></li>-->
                    <li><a href="#forum" role="tab" data-toggle="tab">聯系人</a></li>
                    <li><a href="#business" role="tab"  data-toggle="tab">商機</a></li>
                    <?php if(($auth->check('facrm/customer/index/contractlist'))): ?>
                    <li><a href="#contract" role="tab"  data-toggle="tab">合約</a></li>
                    <?php endif; if(($auth->check('facrm/customer/index/receivableslist'))): ?>
                    <li><a href="#receivables" role="tab"  data-toggle="tab">收款</a></li>
                    <?php endif; if(($auth->check('facrm/customer/record/files'))): ?>
                    <li><a href="#files12" role="tab"  data-toggle="tab">附件</a></li>
                    <?php endif; if(($auth->check('facrm/operatelog/index'))): ?>
                    <li><a href="#" onclick="javascript:parent.Fast.api.open('facrm/operatelog/index/customer_id/<?php echo $row['id']; ?>',__('操作紀錄-')+'<?php echo $row['name']; ?>');" ><?php echo __('紀錄'); ?></a></li>
                    <?php endif; if(($auth->check('facrm/customer/record/calllog'))): ?>
                    <li><a href="#" onclick="javascript:Fast.api.open('facrm/customer/record/calllog?customer_id=<?php echo $row['id']; ?>',__('通話記錄-')+'<?php echo $row['name']; ?>');" ><?php echo __('通話記錄'); ?></a></li>
                    <?php endif; ?>

                </ul>


            </div>
            <div class="panel-body">
                <div id="myTabContent" class="tab-content">
                    <div id="toolbar1" class="toolbar ">
                        <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                        <?php if(($auth->check('facrm/customer/record/add'))): ?>
                        <a href="javascript:;" data-url="facrm/customer/record/add/ids/<?php echo input('ids'); ?>" class="btn btn-success  btn-dialog "
                           title="添加跟進"><i class="fa fa-plus"></i> 添加跟進</a>
                        <?php endif; ?>
                    </div>
                    <div id="toolbar2" class="toolbar ">
                        <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                        <?php if(($auth->check('facrm/customer/contacts/add'))): ?>
                        <a href="javascript:;" data-url="facrm/customer/contacts/add/customer_id/<?php echo input('ids'); ?>" class="btn btn-success  btn-dialog "
                           title="添加聯系人"><i class="fa fa-plus"></i> <?php echo __('添加'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div id="toolbar-business" class="toolbar ">
                        <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                        <?php if(($auth->check('facrm/business/index/add'))): ?>
                        <a href="javascript:;" data-url="facrm/business/index/add/customer_id/<?php echo input('ids'); ?>" class="btn btn-success  btn-dialog "
                           title="添加商機"><i class="fa fa-plus"></i> 添加</a>
                        <?php endif; ?>
                    </div>



                    <?php if(($auth->check('facrm/customer/index/contractlist'))): ?>
                    <div id="toolbar-contract" class="toolbar ">
                        <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                        <?php if(($auth->check('facrm/contract/index/contractadd'))): ?>
                        <a href="javascript:;" data-url="facrm/contract/index/contractadd/customer_id/<?php echo input('ids'); ?>" class="btn btn-success  btn-dialog "
                           title="添加合約"><i class="fa fa-plus"></i> <?php echo __('添加'); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endif; if(($auth->check('facrm/customer/index/receivableslist'))): ?>
                    <div id="toolbar-receivables" class="toolbar ">
                        <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                        <?php if(($auth->check('facrm/contract/receivables/receivablesadd'))): ?>
                        <a href="javascript:;" data-url="facrm/contract/receivables/receivablesadd/customer_id/<?php echo input('ids'); ?>" class="btn btn-success  btn-dialog "
                           title="添加收款"><i class="fa fa-plus"></i> 添加</a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>


                    <!-- 跟進記錄開始-->
                    <div class="tab-pane fade active in" id="bulletin">
                        <table id="tableflow" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                    </div>
                    <!-- 跟進記錄結束-->
                    <!-- 聯系人開始-->
                    <div class="tab-pane fade" id="forum">
                        <table id="contact" class="table table-striped table-bordered table-hover table-nowrap" width="100%"
                               data-operate-edit1="<?php echo $auth->check('facrm/customer/contacts/edit'); ?>"
                               data-operate-del1="<?php echo $auth->check('facrm/customer/contacts/del'); ?>"
                        ></table>

                    </div>
                    <!-- 聯系人結束-->
                    <!-- 商機開始-->
                    <div class="tab-pane fade" id="business">
                        <table id="t-business" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                    </div>
                    <!-- 商機結束-->
                    <?php if(($auth->check('facrm/customer/index/contractlist'))): ?>
                    <!-- 合約開始-->
                    <div class="tab-pane fade" id="contract">
                        <table id="t-contract" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                    </div>
                    <!-- 合約結束-->
                    <?php endif; if(($auth->check('facrm/customer/index/receivableslist'))): ?>
                    <!-- 收款開始-->
                    <div class="tab-pane fade" id="receivables">
                        <table id="t-receivables" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                    </div>
                    <!-- 收款結束-->
                    <?php endif; if(($auth->check('facrm/customer/record/files'))): ?>
                    <!-- 附件-->
                    <div class="tab-pane fade" id="files12">
                        <table id="t-files" class="table table-striped table-bordered table-hover" width="100%"></table>
                    </div>
                    <!-- 附件-->
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </div>




					    
	<?php if(!isset($action)): ?>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
    <?php endif; ?>
</form>
<script>
    var customer_id=<?php echo input('ids'); ?>;
    var record_type_list=<?php echo json_encode($record_type_list); ?>;
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
