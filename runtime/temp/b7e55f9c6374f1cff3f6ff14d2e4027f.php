<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"E:\WWW\tp5shop/application/admin\view\system\navigationlist.html";i:1480672740;s:56:"E:\WWW\tp5shop/application/admin\view\layout\layout.html";i:1480665142;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>基于TP5的商城管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="__PUBLIC__/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="__PUBLIC__/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="__PUBLIC__/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="__PUBLIC__/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="__PUBLIC__/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="__PUBLIC__/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="__PUBLIC__/assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="__PUBLIC__/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="__PUBLIC__/assets/layouts/layout/img/avatar3_small.jpg" />
                        <span class="username username-hide-on-mobile"> Nick </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li class="divider"> </li>
                        <li>
                            <a href="<?php echo url('user/changePwd'); ?>">
                                <i class="icon-lock-open"></i> 修改密码 </a>
                        </li>
                        <li>
                            <a href="<?php echo url('user/lock'); ?>">
                                <i class="icon-lock"></i> 锁定屏幕 </a>
                        </li>
                        <li>
                            <a href="<?php echo url('user/logout'); ?>">
                                <i class="icon-key"></i> 安全退出 </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <!--<li class="dropdown dropdown-quick-sidebar-toggler">-->
                    <!--<a href="javascript:;" class="dropdown-toggle">-->
                        <!--<i class="icon-logout"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="nav-item start">
                    <a href="<?php echo url('index/index'); ?>" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">系统设置</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('system/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">网站设置</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('article/linkList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">友情链接</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('system/navigationList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">自定义导航</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('tools/region'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">区域管理</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('system/right_list'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">权限资源列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-gears"></i>
                        <span class="title">权限管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">管理员列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/role'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">角色管理</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/supplier'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">供应商管理</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('admin/log'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">管理员日志</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>
                        <span class="title">会员管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('user/ulist'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">会员列表</span>
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('user/levelList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">会员等级</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('user/recharge'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">充值记录</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">商品管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('goods/categoryList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品分类</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('goods/goodsList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('goods/goodsTypeList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品类型</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('goods/specList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品规格</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('goods/goodsAttributeList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品属性</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('goods/brandList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">品牌列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('comment/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品评论</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('comment/ask_list'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品咨询</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-money"></i>
                        <span class="title">订单管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('order/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">订单列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('order/delivery_list'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">发货单</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('order/return_list'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">退货单</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('order/add_order'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">添加订单</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('order/order_log'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">订单日志</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-bell"></i>
                        <span class="title">促销管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('promotion/flash_sale'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">抢购管理</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('promotion/group_buy_list'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">团购管理</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('promotion/prom_goods_list'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">商品促销</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('promotion/prom_order_list'); ?>" class="nav-link nav-toggle">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">订单促销</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('coupon/index'); ?>" class="nav-link nav-toggle">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">代金券管理</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="?p=" class="nav-link nav-toggle">
                        <i class="fa fa-flag"></i>
                        <span class="title">广告管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('ad/adList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">广告列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('ad/positionList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">广告位置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-comments"></i>
                        <span class="title">内容管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('article/articleList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">文章列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('article/categoryList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">文章分类</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('topic/topicList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">专题列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-weixin"></i>
                        <span class="title">微信管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('wechat/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">公众号管理</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('wechat/menu'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">微信菜单管理</span>
                            </a>
                        <li>
                            <a href="<?php echo url('Wechat/text'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">文本回复</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('wechat/img'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">图文回复</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-adjust"></i>
                        <span class="title">模板管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('template/templateList','t=pc'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">PC端模板</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('template/templateList','t=mobile'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">手机端模板</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-plug"></i>
                        <span class="title">插件管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('plugin/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">插件列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('tools/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">数据备份</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('tools/restore'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">数据还原</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-signal"></i>
                        <span class="title">统计报表</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('report/index'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">销售概况</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('report/saleTop'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">销售排行</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('report/userTop'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">会员排行</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('report/saleList'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">销售明细</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('report/user'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">会员统计</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('report/finance'); ?>" class="nav-link ">
                                <i class="fa fa-circle-o"></i>
                                <span class="title">财务统计</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-anchor"></i>
                        <span class="title">自提点管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo url('pickup/index'); ?>" class="nav-link ">
                                <span class="title">自提点列表</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo url('pickup/add'); ?>" class="nav-link ">
                                <span class="title">添加自提点</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">商城管理系统</a>
            <i class="fa fa-caret-right"></i>
        </li>
        <li>
            <span>系统设置</span>
            <i class="fa fa-caret-right"></i>
        </li>
        <li>
            <span>自定义导航</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->

<div class="portlet box light" style="margin-top: 10px;">
    <div class="portlet-title">
        <div class="caption">前台导航列表 </div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th> 导航名称 </th>
                    <th> 链接地址 </th>
                    <th> 是否显示 </th>
                    <th> 是否新窗口 </th>
                    <th> 排序 </th>
                    <th> 操作 </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> 积分商城 </td>
                    <td> /index.php?m=Home&c=Goods&a=integralMall </td>
                    <td> <i class="fa fa-check"></i> </td>
                    <td> <i class="fa fa-close"></i> </td>
                    <td>
                        <input type="text" name="name" data-required="1" class="form-control">
                    </td>
                    <td>
                        <a href="javascript:;" class="btn btn-sm green"> 查看
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm blue"> 编辑
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm red">
                            <i class="fa fa-times"></i> 删除 </a>
                    </td>
                </tr>
                <tr>
                    <td> 团购 </td>
                    <td> http://www.google.com.hk </td>
                    <td> <i class="fa fa-close"></i> </td>
                    <td> <i class="fa fa-close"></i> </td>
                    <td><input type="text" name="name" data-required="1" class="form-control"></td>
                    <td>
                        <a href="javascript:;" class="btn btn-sm green"> 查看
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm blue"> 编辑
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm red">
                            <i class="fa fa-times"></i> 删除 </a>
                    </td>
                </tr>
                <tr>
                    <td> 数码城 </td>
                    <td> http://www.baidu.com </td>
                    <td> <i class="fa fa-close"></i> </td>
                    <td> <i class="fa fa-close"></i> </td>
                    <td><input type="text" name="name" data-required="1" class="form-control"></td>
                    <td>
                        <a href="javascript:;" class="btn btn-sm green"> 查看
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm blue"> 编辑
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm red">
                            <i class="fa fa-times"></i> 删除 </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <!--<a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>-->
    <!--<div class="page-quick-sidebar-wrapper" data-close-on-body-click="true">
        <div class="page-quick-sidebar">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                        <span class="badge badge-success">7</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-bell"></i> Alerts </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-info"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-speech"></i> Activities </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-settings"></i> Settings </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                    <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                        <h3 class="list-heading">Staff</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">8</span>
                                </div>
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar3.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Bob Nilson</h4>
                                    <div class="media-heading-sub"> Project Manager </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar1.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Nick Larson</h4>
                                    <div class="media-heading-sub"> Art Director </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">3</span>
                                </div>
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar4.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Hubert</h4>
                                    <div class="media-heading-sub"> CTO </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar2.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ella Wong</h4>
                                    <div class="media-heading-sub"> CEO </div>
                                </div>
                            </li>
                        </ul>
                        <h3 class="list-heading">Customers</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-warning">2</span>
                                </div>
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar6.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lara Kunis</h4>
                                    <div class="media-heading-sub"> CEO, Loop Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="label label-sm label-success">new</span>
                                </div>
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar7.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ernie Kyllonen</h4>
                                    <div class="media-heading-sub"> Project Manager,
                                        <br> SmartBizz PTL </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar8.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lisa Stone</h4>
                                    <div class="media-heading-sub"> CTO, Keort Inc </div>
                                    <div class="media-heading-small"> Last seen 13:10 PM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">7</span>
                                </div>
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar9.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Portalatin</h4>
                                    <div class="media-heading-sub"> CFO, H&D LTD </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar10.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Irina Savikova</h4>
                                    <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">4</span>
                                </div>
                                <img class="media-object" src="__PUBLIC__/assets/layouts/layout/img/avatar11.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Maria Gomez</h4>
                                    <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="page-quick-sidebar-item">
                        <div class="page-quick-sidebar-chat-user">
                            <div class="page-quick-sidebar-nav">
                                <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                    <i class="icon-arrow-left"></i>Back</a>
                            </div>
                            <div class="page-quick-sidebar-chat-user-messages">
                                <div class="post out">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> When could you send me the report ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Its almost done. I will be sending it shortly </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Alright. Thanks! :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:16</span>
                                        <span class="body"> You are most welcome. Sorry for the delay. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> No probs. Just take your time :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Alright. I just emailed it to you. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Great! Thanks. Will check it right away. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Please let me know if you have any comment. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="__PUBLIC__/assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="page-quick-sidebar-chat-user-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type a message here...">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn green">
                                            <i class="icon-paper-clip"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                    <div class="page-quick-sidebar-alerts-list">
                        <h3 class="list-heading">General</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-warning"> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h3 class="list-heading">System</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-default "> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                    <div class="page-quick-sidebar-settings-list">
                        <h3 class="list-heading">General Settings</h3>
                        <ul class="list-items borderless">
                            <li> Enable Notifications
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Allow Tracking
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Log Errors
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Auto Sumbit Issues
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Enable SMS Alerts
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <h3 class="list-heading">System Settings</h3>
                        <ul class="list-items borderless">
                            <li> Security Level
                                <select class="form-control input-inline input-sm input-small">
                                    <option value="1">Normal</option>
                                    <option value="2" selected>Medium</option>
                                    <option value="e">High</option>
                                </select>
                            </li>
                            <li> Failed Email Attempts
                                <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                            <li> Secondary SMTP Port
                                <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                            <li> Notify On System Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Notify On SMTP Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <div class="inner-content">
                            <button class="btn btn-success">
                                <i class="icon-settings"></i> Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.</div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="__PUBLIC__/assets/global/plugins/respond.min.js"></script>
<script src="__PUBLIC__/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="__PUBLIC__/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="__PUBLIC__/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="__PUBLIC__/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="__PUBLIC__/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="__PUBLIC__/assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="__PUBLIC__/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="__PUBLIC__/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="__PUBLIC__/assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
</body>
</html>