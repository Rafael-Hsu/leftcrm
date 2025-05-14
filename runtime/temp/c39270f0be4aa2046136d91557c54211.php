<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:113:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/achievement/batch_admin.html";i:1731660548;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
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
                                
<form id="add-form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
    <?php echo token(); ?>

    <div class=" form-group">
        <label for="c-admin_id" class="control-label col-xs-12 col-sm-2 "><?php echo __('選擇員工'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-admin_id"  data-source="facrm/common/selectpage/model/admin"  data-field="nickname"
                   class="form-control selectpage" name="row[admin_id]" type="text" value="0" placeholder="不選擇應用全部" data-multiple="true">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">

        <label for="c-config" class="control-label col-xs-12 col-sm-2"><?php echo __('業績方式'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <select class="form-control selectpicker" data-rule="required" name="row[config]" id="c-config">
                <option value="1"><?php echo __('合約金額'); ?></option>
                <option value="2"><?php echo __('收款金額'); ?></option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label for="c-year" class="control-label col-xs-12 col-sm-2"><?php echo __('年份'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control datetimepicker" id="c-year" name="row[year]" value="<?php echo date('Y'); ?>" data-rule="required" data-date-format="YYYY"  />

        </div>
    </div>

    <div class="form-group">
        <label for="c-yeartarget" class="control-label col-xs-12 col-sm-2"><?php echo __('全年業績'); ?>:</label>
        <div class="col-xs-12 col-sm-8">

            <div class="input-group">
                <input type="number" class="form-control" id="c-yeartarget" name="row[yeartarget]" value=""  />
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="average" class="btn btn-primary " > <?php echo __('平均每月'); ?></button></span>
                </div>
            </div>
            <span class="text-gray">可留空，會自動計算</span>
        </div>
    </div>

    <div class="average_month">
    <div class="form-group">
        <label for="c-january" class="control-label col-xs-12 col-sm-2"><?php echo __('1月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-january" name="row[january]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-february" class="control-label col-xs-12 col-sm-2"><?php echo __('2月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-february" name="row[february]" value=""  />
        </div>
    </div>

    <div class="form-group">
        <label for="c-march" class="control-label col-xs-12 col-sm-2"><?php echo __('3月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-march" name="row[march]" value=""  />
        </div>
    </div>

    <div class="form-group">
        <label for="c-april" class="control-label col-xs-12 col-sm-2"><?php echo __('4月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-april" name="row[april]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-may" class="control-label col-xs-12 col-sm-2"><?php echo __('5月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-may" name="row[may]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-june" class="control-label col-xs-12 col-sm-2"><?php echo __('6月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-june" name="row[june]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-july" class="control-label col-xs-12 col-sm-2"><?php echo __('7月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-july" name="row[july]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-august" class="control-label col-xs-12 col-sm-2"><?php echo __('8月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-august" name="row[august]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-september" class="control-label col-xs-12 col-sm-2"><?php echo __('9月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-september" name="row[september]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-october" class="control-label col-xs-12 col-sm-2"><?php echo __('10月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-october" name="row[october]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-november" class="control-label col-xs-12 col-sm-2"><?php echo __('11月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-november" name="row[november]" value=""  />
        </div>
    </div>
    <div class="form-group">
        <label for="c-december" class="control-label col-xs-12 col-sm-2"><?php echo __('12月'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="number" class="form-control" id="c-december" name="row[december]" value=""  />
        </div>
    </div>
    </div>

    <div class="form-group hidden layer-footer">
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
