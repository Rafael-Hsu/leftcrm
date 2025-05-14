<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:105:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/public/../application/admin/view/facrm/dashboard/index.html";i:1731660548;s:88:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/layout/default.html";i:1731127532;s:85:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/meta.html";i:1731127532;s:87:"/www/wwwroot/2024/10/kh06_crm178.kaiwenit.com/application/admin/view/common/script.html";i:1731127532;}*/ ?>
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
                                <style type="text/css">
    .sm-st {
        background: #fff;
        padding: 20px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin-bottom: 20px;
        -webkit-box-shadow: 0 1px 0px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 0px rgba(0, 0, 0, 0.05);
    }

    .sm-st-icon {
        width: 60px;
        height: 60px;
        display: inline-block;
        line-height: 60px;
        text-align: center;
        font-size: 30px;
        background: #eee;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        float: left;
        margin-right: 10px;
        color: #fff;
    }

    .sm-st-info {
        font-size: 12px;
        padding-top: 2px;
    }

    .sm-st-info span {
        display: block;
        font-size: 24px;
        font-weight: 600;
    }

    .orange {
        background: #fa8564 !important;
    }

    .tar {
        background: #45cf95 !important;
    }

    .sm-st .green {
        background: #86ba41 !important;
    }

    .pink {
        background: #AC75F0 !important;
    }

    .yellow-b {
        background: #fdd752 !important;
    }

    .stat-elem {

        background-color: #fff;
        padding: 18px;
        border-radius: 40px;

    }

    .stat-info {
        text-align: center;
        background-color: #fff;
        border-radius: 5px;
        margin-top: -5px;
        padding: 8px;
        -webkit-box-shadow: 0 1px 0px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 0px rgba(0, 0, 0, 0.05);
        font-style: italic;
    }

    .stat-icon {
        text-align: center;
        margin-bottom: 5px;
    }

    .st-red {
        background-color: #F05050;
    }

    .st-green {
        background-color: #27C24C;
    }

    .st-violet {
        background-color: #7266ba;
    }

    .st-blue {
        background-color: #23b7e5;
    }

    .stats .stat-icon {
        color: #28bb9c;
        display: inline-block;
        font-size: 26px;
        text-align: center;
        vertical-align: middle;
        width: 50px;
        float: left;
    }

    .stat {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
    }

    .stat .value {
        font-size: 20px;
        line-height: 24px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 500;
    }

    .stat .name {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .stat.lg .value {
        font-size: 26px;
        line-height: 28px;
    }

    .stat.lg .name {
        font-size: 16px;
    }

    .stat-col .progress {
        height: 2px;
    }

    .stat-col .progress-bar {
        line-height: 2px;
        height: 2px;
    }

    .item {
        padding: 30px 0;
    }


    #statistics .panel {
        min-height: 150px;
    }

    #statistics .panel h5 {
        font-size: 13px;
    }

    .bg-aqua-gradient {
        background: #3498db !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f2f2f5), color-stop(1, #f2f2f5)) !important;
        background: -ms-linear-gradient(bottom, #3498db, #52a7e0) !important;
        background: -moz-linear-gradient(center bottom, #3498db 0%, #52a7e0 100%) !important;
        background: -o-linear-gradient(#52a7e0, #3498db) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#52a7e0', endColorstr='#3498db', GradientType=0) !important;
        color: #fff;
    }

    .bg-aqua1-gradient {
        background: #3498db !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f2f2f5), color-stop(1, #f2f2f5)) !important;
        background: -ms-linear-gradient(bottom, #3498db, #52a7e0) !important;
        background: -moz-linear-gradient(center bottom, #3498db 0%, #52a7e0 100%) !important;
        background: -o-linear-gradient(#52a7e0, #3498db) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#52a7e0', endColorstr='#3498db', GradientType=0) !important;
    }

    .progress {
        background-color: #d7d7d7;
    }
    .row_config{
        height: 24px;
    }
</style>
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null, false); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab"><?php echo __('我的概況'); ?></a></li>
            <li><a href="#two" data-toggle="tab"><?php echo __('團隊概況'); ?></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="panel bg-aqua1-gradient no-border" style="height: 488px">
                            <div class="panel-body">
                                <div class="panel-title">
                                    <span class="label label-primary pull-right"></span>

                                    <h4><span class="label label-primary "> <?php echo __('常用事項'); ?></span></h4>
                                </div>
                                <div class="panel-content">
                                    <div class="card sameheight-item stats ">
                                        <div class="card-block">
                                            <div class="row row-sm stats-container" style="margin-top: 40px;">
                                                <div class="col-xs-6 stat-col">
                                                    <div class="stat-icon"><i class="fa fa-rocket"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/customer/index?ref=addtabs&from_type=need"
                                                           class="btn-addtabs" title="<?php echo __('需跟進的客戶'); ?>">
                                                            <div class="value"> <?php echo $communicate; ?></div>
                                                            <div class="name"> <?php echo __('今日待追蹤的客戶'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 30%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 stat-col">
                                                    <div class="stat-icon"><i class="fa fa-shopping-cart"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/customer/index?ref=addtabs&from_type=expire"
                                                           class="btn-addtabs" title="<?php echo __('即將過期客戶'); ?>">
                                                            <div class="value"> <?php echo $lose_num; ?></div>
                                                            <div class="name"> <?php echo __('即將失效的客戶'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-line-chart"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/business/index?ref=addtabs&from_type=need"
                                                           class="btn-addtabs" title="<?php echo __('需跟進的商機'); ?>">
                                                            <div class="value"> <?php echo $business; ?></div>
                                                            <div class="name"> <?php echo __('今日需跟進的商機'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-users"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/contract/index?ref=addtabs&from_type=expire"
                                                           class="btn-addtabs" title="<?php echo __('即將到期的合約'); ?>">
                                                            <div class="value"> <?php echo $contract_expire; ?></div>
                                                            <div class="name"> <?php echo __('即將到期的合約'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-list-alt"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/contract/index?ref=addtabs&from_type=return"
                                                           class="btn-addtabs" title="<?php echo __('即將到期的合約'); ?>">
                                                            <div class="value"> <?php echo $contract_return; ?></div>
                                                            <div class="name"> <?php echo __('待收款合約'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-link fa-fw"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/clues/index?ref=addtabs&from_type=need"
                                                           class="btn-addtabs" title="<?php echo __('待追蹤的潛在客戶'); ?>">
                                                            <div class="value"> <?php echo $clues_num; ?></div>
                                                            <div class="name"> <?php echo __('待追蹤的潛在客戶'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="panel bg-aqua1-gradient no-border">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-right" style="padding: 5px;">
                                        <?php echo __('目標'); ?>：<span id="yeartarget"><?php echo $achievement['yeartarget']; ?></span> &nbsp;&nbsp;
                                        <?php echo __('合約'); ?>：<span id="contract_money"><?php echo $achievement['contract_money']; ?></span>&nbsp;&nbsp;
                                        <?php echo __('收款'); ?>：<span id="receivables_money"><?php echo $achievement['receivables_money']; ?></span>&nbsp;&nbsp;

                                    </span>
                                    <span class="label label-primary "> 業績概況
                                   </span>
                                    <form id="hetong2-form" class="  " role="form" data-toggle="validator" method="POST"
                                          action="">
                                        <h4>
                                            <input type="hidden" class="achievement_type" value="">
                                            <select data-rule="required"  class="row_config">
                                                <option value="1" selected>合約金額</option>
                                                <option value="2">收款金額</option>
                                            </select>
                                            <input type="text" style="width: 50px;height: 24px;" class=" datetimepicker row_year"
                                                   name="search_time2" placeholder="年份" data-date-format="YYYY"
                                                   value="<?php echo $achievement['year']; ?>" >
                                            <input type="text" style="width: 50px;height: 24px;" class=" datetimepicker row_month"
                                                   name="month" placeholder="月份" data-date-format="M" >

                                        </h4>
                                    </form>

                                </div>
                                <div class="ibox-content">
                                    <div id="echart" class="btn-refresh" style="height:400px;width:100%;"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-6">
                        <div class="panel bg-aqua-gradient no-border">
                            <div class="panel-body">
                                <div class="panel-title">
                                    <span class="label label-primary pull-right"></span>

                                    <h4><span class="label label-primary "> 合約|收款</span></h4>
                                </div>
                                <div class="panel-content">
                                    <form id="hetong-form" class="form-horizontal" role="form" data-toggle="validator"
                                          method="POST" action="">

                                        <div class="fixed-table-toolbar margin-bottom-xs">
                                            <div class="form-inline bs-bars ">
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近7天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近30天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">上月</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">本月</a>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-calendar"></i></span>
                                                    <input type="text"
                                                           class="form-control input-inline datetimerange datetimerange1"
                                                           placeholder="指定日期" style="width:270px;"
                                                           data-type="achievement"
                                                           data-url="<?php echo url('facrm/dashboard/index',['ajax_type'=>'getAchievementEchart']); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="achievement-echart" class="btn-refresh"
                                             style="height:200px;width:100%;"></div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="panel bg-aqua-gradient no-border">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-right"></span>
                                    <h4><span class="label label-primary "> 跟進趨勢</span> </h4>
                                </div>
                                <div class="ibox-content">
                                    <form id="record-form" class="form-horizontal" role="form" data-toggle="validator"
                                          method="POST" action="">
                                        <div class="fixed-table-toolbar margin-bottom-xs">
                                            <div class="form-inline bs-bars ">
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近7天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近30天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">上月</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">本月</a>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-calendar"></i></span>
                                                    <input type="text"
                                                           class="form-control input-inline datetimerange datetimerange1"
                                                           placeholder="指定日期" style="width:270px;"
                                                           data-type="record"
                                                           data-url="<?php echo url('facrm/dashboard/index',['ajax_type'=>'getRecordEchartData']); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="record-echart" class="btn-refresh"
                                             style="height:200px;width:100%;"></div>
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="tab-pane fade active" id="two">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="panel bg-aqua1-gradient no-border" style="height: 488px">
                            <div class="panel-body">
                                <div class="panel-title">
                                    <span class="label label-primary pull-right"></span>

                                    <h4><span class="label label-primary "> 常用事項</span></h4>
                                </div>
                                <div class="panel-content">
                                    <div class="card sameheight-item stats ">
                                        <div class="card-block">
                                            <div class="row row-sm stats-container" style="margin-top: 40px;">
                                                <div class="col-xs-6 stat-col">
                                                    <div class="stat-icon"><i class="fa fa-rocket"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/customer/index?ref=addtabs&from_type=need"
                                                           class="btn-addtabs" title="<?php echo __('需跟進的客戶'); ?>">
                                                            <div class="value"> <?php echo $team_communicate; ?></div>
                                                            <div class="name"> <?php echo __('今日待追蹤的客戶'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 30%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 stat-col">
                                                    <div class="stat-icon"><i class="fa fa-shopping-cart"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/customer/index?ref=addtabs&from_type=expire"
                                                           class="btn-addtabs" title="<?php echo __('即將過期客戶'); ?>">
                                                            <div class="value"> <?php echo $team_lose_num; ?></div>
                                                            <div class="name"> <?php echo __('即將失效的客戶'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-line-chart"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/business/index?ref=addtabs&from_type=need"
                                                           class="btn-addtabs" title="<?php echo __('需跟進的商機'); ?>">
                                                            <div class="value"> <?php echo $team_business; ?></div>
                                                            <div class="name"> <?php echo __('今日需跟進的商機'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-users"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/contract/index?ref=addtabs&from_type=expire"
                                                           class="btn-addtabs" title="<?php echo __('即將到期的合約'); ?>">
                                                            <div class="value"> <?php echo $team_contract_expire; ?></div>
                                                            <div class="name"> <?php echo __('即將到期的合約'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-list-alt"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/contract/index?ref=addtabs&from_type=return"
                                                           class="btn-addtabs" title="<?php echo __('即將到期的合約'); ?>">
                                                            <div class="value"> <?php echo $team_contract_return; ?></div>
                                                            <div class="name"> <?php echo __('待收款合約'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6  stat-col">
                                                    <div class="stat-icon"><i class="fa fa-link fa-fw"></i></div>
                                                    <div class="stat">
                                                        <a href="facrm/clues/index?ref=addtabs&from_type=need"
                                                           class="btn-addtabs" title="<?php echo __('待追蹤的潛在客戶'); ?>">
                                                            <div class="value"> <?php echo $team_clues_num; ?></div>
                                                            <div class="name"> <?php echo __('待追蹤的潛在客戶'); ?></div>
                                                        </a>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             style="width: 25%"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="panel bg-aqua1-gradient no-border">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-right" style="padding: 5px;">
                                        <?php echo __('目標'); ?>：<span id="team_yeartarget"><?php echo $team_achievement['yeartarget']; ?></span> &nbsp;&nbsp;
                                        <?php echo __('合約'); ?>：<span id="team_contract_money"><?php echo $team_achievement['contract_money']; ?></span>&nbsp;&nbsp;
                                        <?php echo __('收款'); ?>：<span id="team_receivables_money"><?php echo $team_achievement['receivables_money']; ?></span>&nbsp;&nbsp;

                                    </span>
                                    <span class="label label-primary "> 業績概況
                                   </span>
                                    <form id="team_hetong2-form" class="  " role="form" data-toggle="validator" method="POST"
                                          action="">
                                        <h4>
                                            <input type="hidden" class="achievement_type" value="team">
                                            <select data-rule="required" class="row_config">
                                                <option value="1" selected>合約金額</option>
                                                <option value="2">收款金額</option>
                                            </select>
                                            <input type="text" style="width: 50px;height: 24px;" class=" datetimepicker row_year"
                                                   name="search_time2" placeholder="年份" data-date-format="YYYY"
                                                   value="<?php echo $achievement['year']; ?>" >
                                            <input type="text" style="width: 50px;height: 24px;" class=" datetimepicker row_month"
                                                   name="month" placeholder="月份" data-date-format="M">

                                        </h4>
                                    </form>

                                </div>
                                <div class="ibox-content">
                                    <div id="team_echart" class="btn-refresh" style="height:400px;width:100%;"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-6">
                        <div class="panel bg-aqua-gradient no-border">
                            <div class="panel-body">
                                <div class="panel-title">
                                    <span class="label label-primary pull-right"></span>

                                    <h4><span class="label label-primary "> 合約|收款</span></h4>
                                </div>
                                <div class="panel-content">
                                    <form id="team_hetong-form" class="form-horizontal" role="form" data-toggle="validator"
                                          method="POST" action="">

                                        <div class="fixed-table-toolbar margin-bottom-xs">
                                            <div class="form-inline bs-bars ">
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近7天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近30天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">上月</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">本月</a>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-calendar"></i></span>
                                                    <input type="text"
                                                           class="form-control input-inline datetimerange datetimerange1"
                                                           placeholder="指定日期" style="width:270px;"
                                                           data-type="team_achievement"
                                                           data-url="<?php echo url('facrm/dashboard/index',['ajax_type'=>'getAchievementEchart']); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="team_achievement-echart" class="btn-refresh"
                                             style="height:200px;width:100%;"></div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="panel bg-aqua-gradient no-border">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-right"></span>
                                    <h4><span class="label label-primary "> 跟進趨勢</span> </h4>
                                </div>
                                <div class="ibox-content">
                                    <form id="team_record-form" class="form-horizontal" role="form" data-toggle="validator"
                                          method="POST" action="">
                                        <div class="fixed-table-toolbar margin-bottom-xs">
                                            <div class="form-inline bs-bars ">
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近7天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">最近30天</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">上月</a>
                                                <a href="javascript:;" class="btn btn-success btn-filter">本月</a>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-calendar"></i></span>
                                                    <input type="text"
                                                           class="form-control input-inline datetimerange datetimerange1"
                                                           placeholder="指定日期" style="width:270px;"
                                                           data-type="team_record"
                                                           data-url="<?php echo url('facrm/dashboard/index',['ajax_type'=>'getRecordEchartData']); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="team_record-echart" class="btn-refresh"
                                             style="height:200px;width:100%;"></div>
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--@formatter:off-->

<script>
    var Echartdata = <?php echo json_encode($erchart); ?>;
    var TeamEchartdata = <?php echo json_encode($team_erchart); ?>;
</script>
<!--@formatter:on-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
