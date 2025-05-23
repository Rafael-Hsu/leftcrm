<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:110:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/contract/index/index.html";i:1731660548;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
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
                                <?php 
//權限控制
$addurl="facrm/contract/index/add";
$raddurl="facrm/contract/receivables/add";//添加收款鏈接

if(isset($action)&&$action=='lists'){
    $addurl="facrm/contract/index/contractadd";
    $raddurl="facrm/contract/receivables/receivablesadd";
}

 ?>

<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null,FALSE); ?>
        <ul class="nav nav-tabs" data-field="scene_id">
            <?php if(is_array($scene_list) || $scene_list instanceof \think\Collection || $scene_list instanceof \think\Paginator): if( count($scene_list)==0 ) : echo "" ;else: $i=0; foreach($scene_list as $key=>$vo): ++$i; ?>
            <li <?php if($i == 1): ?>class='active'<?php endif; ?>><a  href="#t-<?php echo $key; ?>" data-value="<?php echo $key; ?>" data-toggle="tab">
            <?php echo $vo; ?><span class="pull-right-container <?php echo $key; ?>"><small class="label pull-right bg-orange"></small></span>
        </a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="contract_table">
                        <div id="toolbar" class="toolbar">
                            <a href="javascript:;" class="btn btn-primary btn-refresh" title="<?php echo __('Refresh'); ?>" ><i class="fa fa-refresh"></i> </a>

                            <a class="btn btn-info btn-print btn-disabled disabled <?php echo $auth->check('facrm/contract/index/print')?'':'hide'; ?>" >
                                <i class="fa fa-print"></i> <?php echo __('打印'); ?></a>


                            <a href="javascript:;" class="btn btn-success btn-dialog <?php echo $auth->check($addurl)?'':'hide'; ?>" data-url="<?php echo $addurl; ?>" title="<?php echo __('Add'); ?>" data-area='["100%","100%"]' >
                                <i class="fa fa-plus"></i> <?php echo __('Add'); ?></a>
                            <a class="btn btn-success btn-recyclebin btn-dialog <?php echo $auth->check('facrm/contract/index/recyclebin')?'':'hide'; ?>"
                               href="<?php echo url('facrm/contract.index/recyclebin'); ?>" title="<?php echo __('Recycle bin'); ?>"><i class="fa fa-recycle"></i> <?php echo __('回收站'); ?></a>
                        </div>
                        <table id="contract" class="table table-striped table-bordered table-hover table-nowrap"
                               data-operate-edit="<?php echo $auth->check('facrm/contract/index/edit'); ?>"
                               data-operate-del="<?php echo $auth->check('facrm/contract/index/del'); ?>"
                               data-operate-add="<?php echo $auth->check('facrm/contract/index/add'); ?>"
                               data-operate-raddurl="<?php echo $auth->check($raddurl); ?>"

                               width="100%">
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<script>
    var scene_list=<?php echo json_encode($scene_list); ?>;
    var from_type="<?php echo input('from_type'); ?>";
    var raddurl='<?php echo $raddurl; ?>';
    var customer_id="<?php echo input('customer_id','','intval'); ?>";
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
