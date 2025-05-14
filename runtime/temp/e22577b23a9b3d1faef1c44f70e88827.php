<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:114:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/contract/receivables/add.html";i:1731660548;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
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
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <div class="row">
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-number" class="control-label col-xs-12 col-sm-2"><?php echo __('收款編號'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <div class="input-group">
                    <input id="c-number" data-rule="required" type="text" class="form-control" name="row[number]" value="<?php echo $rprefix; ?>"/>
                    <div class="input-group-addon no-border no-padding">
                        <span><button type="button" id="number-create" class="btn btn-primary " > <?php echo __('生成'); ?></button></span>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-customer_id" class="control-label col-xs-12 col-sm-2"><?php echo __('選擇客戶'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <input id="c-customer_id" data-rule="required" data-source="facrm/customer/index/selectpage/<?php echo $addtype=='add'?'type/all':''; ?>"
                       class="form-control selectpage" name="row[customer_id]" type="text" value="<?php echo isset($contract_r['customer_id'])?$contract_r['customer_id']:input('customer_id'); ?>">

            </div>
        </div>
        <div class="col-md-4 col-xs-12 form-group business_id_div ">
            <label for="c-contract_id" class="control-label col-xs-12 col-sm-2"><?php echo __('選擇合約'); ?>:</label>
            <div class="col-xs-12 col-sm-8">

                <div class="clickbox">

                    <label class="control-label">
                        <a href="javascript:;" data-url="<?php echo $addtype=='add'?'facrm/contract/receivables/selectcontract':'facrm/contract/index/lists/select/1'; ?>" id="select-resources" >
                            <?php echo isset($contract_r['name'])?$contract_r['name']:__('選擇合約'); ?></a>
                    </label>
                    <input type="hidden" id="c-contract_id" name="row[contract_id]" id="c-eventkey" class="form-control" value="<?php echo isset($contract_r['id'])?$contract_r['id']:''; ?>" data-rule="required" readonly/>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-xs-12 form-group">
            <label for="pay_type" class="control-label col-xs-12 col-sm-2">收款方式:</label>
            <div class="col-xs-12 col-sm-8">
                <?php echo build_radios('row[pay_type]', ['1'=>__('默認方式'), '2'=>__('在線收款')], 1); ?>
                <span class="text-red">選擇在線收款會生成收款碼，客戶掃碼並支付。</span>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-money" class="control-label col-xs-12 col-sm-2"><?php echo __('收款金額'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <input id="c-money" type="number" class="form-control" name="row[money]" value=""/>
            </div>
        </div>

        <div class="pay_type" >
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-customer_id" class="control-label col-xs-12 col-sm-2"><?php echo __('收款帳戶'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <?php echo build_select('row[account_id]', $account_list,0, ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>

            </div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-return_time" class="control-label col-xs-12 col-sm-2"><?php echo __('收款日期'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <input id="c-return_time" value="<?php echo datetime(time()); ?>" class="form-control datetimepicker"
                       data-date-format="YYYY-MM-DD HH:mm" data-use-current="true" name="row[return_time]" type="text">
            </div>
        </div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-flow_admin_id" class="control-label col-xs-12 col-sm-2"><?php echo __('審批人'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <input id="c-flow_admin_id"   data-source="facrm/common/selectpage/model/admin/type/all" data-field="nickname" data-multiple="true"  <?php echo $flow->config==1?'disabled ':'data-rule="required"'; ?>
                class="form-control selectpage" name="row[flow_admin_id]" type="text" value="<?php if($flow->config==1): ?><?php echo $flow->getAdminIds($flow,$auth->id); endif; ?>">
            </div>
        </div>
        <div id="extend"></div>
        <div class="col-md-4 col-xs-12 form-group">
            <label for="c-remark" class="control-label col-xs-12 col-sm-2"><?php echo __('備注'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <textarea id="c-remark" class="form-control" name="row[remark]"></textarea>
            </div>
        </div>
    </div>


    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>







                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
