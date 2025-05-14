<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:109:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/customer/record/add.html";i:1731660548;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
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
    .form-group .col-sm-4{
        padding-bottom: 5px;
    }
    .nav-tabs{
        border-bottom: unset;
    }
    #extra1 .form-group .col-sm-2{padding-right: 0px;}
</style>
<form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <div class="col-md-6 col-sm-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div class="panel-lead">
                    <div class="panel-title">
                        <span style="font-weight: bold;font-style: normal;"><?php echo __('基本信息'); ?></span>

                        <small style="margin-left: 10px;" class=" label bg-purple">總消費：<?php echo $row['purchase_total']; ?></small>
                        <small style="margin-left: 10px;" class=" label bg-blue">下單：<?php echo $row['purchase_times']; ?>次</small></label>
                        <small style="margin-left: 10px;" class=" label bg-green">
                            <?php 
                            $deal_time= \addons\facrm\library\Helper::timeTran($row['deal_time']);
                            echo  $deal_time?$deal_time.'下單':'無下單';
                             ?>
                        </small>

                        <span class="label label-primary pull-right">
                            <a href="#" onclick="javascript:parent.Fast.api.open('facrm/customer/index/edit/ids/<?php echo $row['id']; ?>',__('修改客戶信息-')+'<?php echo $row['name']; ?>');"> <?php echo __('修改'); ?></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="panel-body" style="min-height: 286px;">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="extra">
                        <div class="form-group">
                            <label  class="control-label col-xs-12 col-sm-2 "><?php echo __('客戶名稱'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <label  class="control-label"><?php echo $row['name']; ?>(<?php echo $row['id']; ?>)</label>
                                <?php if($row['tags']): ?>
                                <span class="label label-primary"><?php echo $row['tags']; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="c-mobile" class="control-label col-xs-12 col-sm-2"><?php echo __('聯系電話'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <input id="c-telephone" class="form-control" size="50" name="row[telephone]" type="text" value="<?php echo $row['telephone']; ?>"  readonly>
                                    <div class="input-group-addon no-border no-padding">
                                        <span>
                                            <button type="button"  class="btn btn-success cloudcall" data-type="customer" data-field="telephone" data-typeid="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>"
                                            ><i class="fa fa-phone"></i> <?php echo __('雲呼'); ?></button></span>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="c-mobile" class="control-label col-xs-12 col-sm-2"><?php echo __('聯系手機'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <input id="c-mobile" class="form-control" size="50" name="row[mobile]" type="text" value="<?php echo $row['mobile']; ?>"  readonly>
                                    <div class="input-group-addon no-border no-padding">
                                        <span>
                                            <button type="button"  class="btn btn-success cloudcall" data-type="customer" data-field="mobile" data-typeid="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>"
                                            ><i class="fa fa-phone"></i> <?php echo __('雲呼'); ?></button></span>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="c-remark" class="control-label col-xs-12 col-sm-2"><?php echo __('備注'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <textarea id="c-remark" class="form-control" name="crow[remark]" disabled><?php echo $row['remark']; ?></textarea>
                            </div>
                        </div>
                        <div  id="hiddeninfo" style="display: none;">
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2"><?php echo __('客戶等級'); ?>:</label>
                                <div class="col-xs-12 col-sm-8">
                                    <?php echo build_select('crow[level]', $levelList,$row['level'], ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2"><?php echo __('客戶行業'); ?>:</label>
                                <div class="col-xs-12 col-sm-8">
                                    <?php echo build_select('crow[industry]', $industryList, $row['industry'], ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2"><?php echo __('客戶行業'); ?>:</label>
                                <div class="col-xs-12 col-sm-8">
                                    <?php echo build_select('crow[source]', $sourceList, $row['source'], ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="c-tags" class="control-label col-xs-12 col-sm-2"><?php echo __('客戶標簽'); ?>:</label>
                                <div class="col-xs-12 col-sm-8">
                                    <input id="c-tags" data-rule="" class="form-control"  name="row[tags]" type="text" readonly value="<?php echo $row['tags']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="c-address" class="control-label col-xs-12 col-sm-2">地址:</label>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="form-inline" data-toggle="cxselect" data-selects="province,city,area">
                                        <select class="province form-control" name="province" data-url="ajax/area" readonly>
                                            <option value="<?php echo $row['province']; ?>" selected=""></option>
                                        </select>
                                        <select class="city form-control" name="city" data-url="ajax/area" readonly>
                                            <option value="<?php echo $row['city']; ?>" selected=""></option>
                                        </select>
                                        <select class="area form-control" name="area" data-url="ajax/area" readonly>
                                            <option value="<?php echo $row['area']; ?>" selected=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="c-detail_address" class="control-label col-xs-12 col-sm-2">詳細地址:</label>
                                <div class="col-xs-12 col-sm-8">
                                    <input id="c-detail_address" type="text" data-rule="required" class="form-control" name="crow[detail_address]" value="<?php echo $row['detail_address']; ?>" disabled />
                                </div>
                            </div>



                            <div id="extend"></div>

                        </div>
                        <div class="text-center"><a href="javascript:;" id="buttonshow">--<?php echo __('更多信息'); ?>--</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="panel panel-default panel-success">
            <div class="panel-heading">
                <div class="panel-lead">
                    <span style="font-weight: bold;font-style: normal;"><?php echo __('跟進操作'); ?></span>
                </div>
            </div>
            <div class="panel-body" style="min-height: 286px;">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="extra1">
                        <div class="form-group">
                            <label for="record-content" class="control-label col-xs-12 col-sm-2"><?php echo __('跟進內容'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <textarea id="record-content"  data-rule="required" class="form-control " name="row[content]" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-image" class="control-label col-xs-12 col-sm-2"><?php echo __('附件'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <input id="c-image" class="form-control" size="50" name="row[image]" type="text" value="" placeholder="可以爲空">
                                    <div class="input-group-addon no-border no-padding">
                                        <span><button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-image" data-mimetype="*" data-multiple="true" data-preview-id="p-image"><i class="fa fa-upload"></i> <?php echo __('上傳'); ?></button></span>

                                    </div>
                                    <span class="msg-box n-right" for="c-image"></span>
                                </div>
                                <ul class="row list-inline plupload-preview" id="p-image"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-next_time" class="control-label col-xs-12 col-sm-2"><?php echo __('下次跟進時間'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input id="c-next_time"  value=""  class="form-control datetimepicker"
                                       data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[next_time]" type="text" placeholder="<?php echo __('如不需要再跟進設置爲空'); ?>" >

                            </div>
                        </div>
                        <?php if(isset($status_row)&&$status_row['content_list']): ?>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-2"><?php echo __('跟進狀態'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <select class="form-control selectpicker" data-rule="required" name="row[follow_status]">
                                    <?php if(is_array($status_row['content_list']) || $status_row['content_list'] instanceof \think\Collection || $status_row['content_list'] instanceof \think\Paginator): if( count($status_row['content_list'])==0 ) : echo "" ;else: foreach($status_row['content_list'] as $key=>$vo): ?>
                                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_status'])?$row['follow_status']:explode(',',$row['follow_status']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-2"><?php echo __('跟進方式'); ?>:</label>
                            <div class="col-xs-12 col-sm-8">
                                <div class="input-group">
                                    <?php echo build_select('row[record_type]', $record_type_list,0, ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
                                    <div class="input-group-addon no-border no-padding normal-footer">
                                        <button type="submit" class="btn btn-success btn-embossed  disabled"><?php echo __('立即保存'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
    <div class="panel panel-default  panel-info">
        <div class="panel-heading" style="padding-bottom: 0;">
            <ul class="nav nav-tabs">

                <li class="active"><a href="#bulletin" role="tab" data-toggle="tab"><?php echo __('跟進記錄'); ?></a></li>
               <!-- <li><a href="#rule" role="tab" data-toggle="tab"><?php echo __('邀約記錄'); ?></a></li>-->
                <li><a href="#forum" role="tab" data-toggle="tab"><?php echo __('聯系人'); ?></a></li>
                <?php if(($auth->check('facrm/business/index'))): ?>
                <li><a href="#business" role="tab"  data-toggle="tab"><?php echo __('商機'); ?></a></li>
                <?php endif; if(($auth->check('facrm/customer/index/contractlist'))): ?>
                <li><a href="#contract" role="tab"  data-toggle="tab"><?php echo __('合約'); ?></a></li>
                <?php endif; if(($auth->check('facrm/customer/index/receivableslist'))): ?>
                <li><a href="#receivables" role="tab"  data-toggle="tab"><?php echo __('收款'); ?></a></li>
                <?php endif; ?>
                <li><a href="#files12" role="tab"  data-toggle="tab"><?php echo __('附件'); ?></a></li>
                <?php if(($auth->check('facrm/operatelog/index'))): ?>
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
                       title="添加商機"><i class="fa fa-plus"></i> <?php echo __('添加'); ?></a>
                    <?php endif; ?>
                </div>

                <?php if(($auth->check('facrm/customer/index/contractlist'))): ?>
                <div id="toolbar-contract" class="toolbar ">
                    <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                    <?php if(($auth->check('facrm/contract/index/contractadd'))): ?>
                    <a href="javascript:;" data-url="facrm/contract/index/contractadd/customer_id/<?php echo $row['id']; ?>" class="btn btn-success  btn-dialog "
                       title="添加合約"><i class="fa fa-plus"></i> <?php echo __('添加'); ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; if(($auth->check('facrm/customer/index/receivableslist'))): ?>
                <div id="toolbar-receivables" class="toolbar ">
                    <a href="javascript:;" class="btn btn-primary btn-refresh"><i class="fa fa-refresh"></i></a>
                    <?php if(($auth->check('facrm/contract/receivables/receivablesadd'))): ?>
                    <a href="javascript:;" data-url="facrm/contract/receivables/receivablesadd/customer_id/<?php echo input('ids'); ?>" class="btn btn-success  btn-dialog "
                       title="添加收款"><i class="fa fa-plus"></i> <?php echo __('添加'); ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <!-- 跟進記錄開始-->
                <div class="tab-pane fade active in" id="bulletin">
                    <table id="tableflow" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                    <!-- 修改 amplam2018年8月11日 15:40:05--->
                </div>
                <!-- 跟進記錄結束-->
                <!-- 聯系人開始-->
                <div class="tab-pane fade" id="forum">
                    <table id="contact" class="table table-striped table-bordered table-hover table-nowrap" width="100%"
                           data-operate-edit="<?php echo $auth->check('facrm/customer/contacts/edit'); ?>"
                           data-operate-del="<?php echo $auth->check('facrm/customer/contacts/del'); ?>"
                           data-operate-email="<?php echo $auth->check('facrm/apps/email/send'); ?>"
                           data-operate-sms="<?php echo $auth->check('facrm/apps/sms/send'); ?>">


                    </table>
                    <!-- 修改 amplam2018年8月13日 10:30:05--->
                </div>
                <!-- 聯系人結束-->
                <?php if(($auth->check('facrm/business/index'))): ?>
                <!-- 商機開始-->
                <div class="tab-pane fade" id="business">
                    <table id="t-business" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                </div>
                <?php endif; ?>
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
                <?php endif; ?>

                <!-- 附件-->
                <div class="tab-pane fade" id="files12">
                    <table id="t-files" class="table table-striped table-bordered table-hover table-nowrap" width="100%"></table>
                </div>
                <!-- 附件-->

            </div>
        </div>
    </div>

    </div>
					    
	
    <div class="form-group fixed-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">

            <button type="button" class="btn  btn-send-email  bg-purple <?php echo $auth->check('facrm/apps/email/send')?'':'hide'; ?> "
                    data-url="facrm/apps/email/send"
                    data-types="customer"
                    data-typesid="<?php echo $row['id']; ?>"
                    data-title="<?php echo __('發郵件給客戶：'); ?><?php echo $row['name']; ?>"><?php echo __('發郵件'); ?></button>

            <button type="button" class="btn  btn-send-sms  btn-info <?php echo $auth->check('facrm/apps/sms/send')?'':'hide'; ?> "
                    data-url="facrm/apps/sms/send"
                    data-types="customer"
                    data-typesid="<?php echo $row['id']; ?>"
                    data-title="<?php echo __('發信息給客戶：'); ?><?php echo $row['name']; ?>"><?php echo __('發信息'); ?></button>
            <?php if(($auth->check('facrm/customer/index/next'))): ?>
            <a class="btn  btn-primary  btn-next " href="javascript:;"
               data-title="<?php echo __('下壹個客戶'); ?>"
               data-url="facrm/customer/index/next"><?php echo __('下壹個'); ?></a>

            <?php endif; if(($auth->check('facrm/customer/index/deal')||$auth->check('facrm/contract/index/contractadd'))): ?>
            <button type="button" class="btn  btn-success btn-dialog"
                    data-title="<?php echo __('成交'); ?>：<?php echo $row['name']; ?>"
                    data-url="<?php if($addon_config['deal']==1): ?>facrm/customer/index/deal/ids/<?php echo $row['id']; else: ?>facrm/contract/index/contractadd/customer_id/<?php echo $row['id']; endif; ?>"><?php echo __('成交'); ?></button>

            <?php endif; ?>

        </div>
    </div>
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
