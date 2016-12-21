<!doctype html>
<html>
<head lang="zh-cmn-Hans">
  <meta charset="UTF-8">
  <title><?=$title?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <!--<link rel="alternate icon" type="image/png" href="assets/i/favicon.png">-->
  
  <!--预加载下一章-->
  <link rel="prefetch" href="<?=uri('chapters', ['id'=>$next])?>" />

  <link href="//cdn.amazeui.org/amazeui/2.7.1/css/amazeui.min.css" rel="stylesheet">

  <link href="/static/css/amazeui.switch.min.css" rel="stylesheet">
  <!--<link href="https://rawgit.com/amazeui/switch/master/amazeui.switch.css" rel="stylesheet">-->
  
  <style>
    .am-offcanvas-bar .am-nav>li>a {
      color:#ccc;
      border-radius: 0;
      border-top: 1px solid rgba(0,0,0,.3);
      box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
    }

    .am-offcanvas-bar .am-nav>li>a:hover {
      background: #404040;
      color: #fff
    }

    .am-offcanvas-bar .am-nav>li.am-nav-header {
      color: #777;
      background: #404040;
      box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
      text-shadow: 0 1px 0 rgba(0,0,0,.5);
      border-top: 1px solid rgba(0,0,0,.3);
      font-weight: 400;
      font-size: 75%
    }

    .am-offcanvas-bar .am-nav>li.am-active>a {
      background: #1a1a1a;
      color: #fff;
      box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
    }

    .am-offcanvas-bar .am-nav>li+li {
      margin-top: 0;
    }

    .my-sidebar {
      padding-right: 0;
      border-right: 1px solid #eeeeee;
    }

    .my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
<div class="am-g am-g-fixed">
  <div class="am-u-md-12">
    <div class="am-g">
      <div class="am-u-sm-12 am-u-sm-centered">
        <div id='content' class="am-cf am-article">
          <?=$content?>
        </div>
        <hr/>
        <ul class="am-pagination am-pagination-default" style="text-align:center; margin-bottom:0px;">
          <li class="am-pagination-prev" style="display:none;"><a id='pre' href="<?=uri("chapters/{$pre}")?>">«上一章</a></li>
          <li class="am-pagination-prev"><a href="javascript:;" data-am-modal="{target: '#my-alert'}">加入书架</a></li>
          <li class=""><a href="<?=uri("books/{$book_id}")?>">目录</a></li>
          <li class="am-pagination-next"><a id='next' href="<?=uri("chapters/{$next}")?>">下一章»</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <!--侧边栏-->
  <div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
    <div class="am-offcanvas" id="sidebar">
      <div class="am-offcanvas-bar">
        <ul class="am-nav">
          <li><a href="#">hello, 胖胖红</a></li>
          <li class="am-nav-header"></li>
          <li><a href="#">阿里巴巴是个快乐的青年</a></li>
          <li><a href="#">预备 唱~</a></li>
          <li><a href="#">胖胖</a></li>
          <li><a href="#">胖胖胖胖</a></li>
          <li><a href="#">胖胖胖胖胖胖胖胖红</a></li>
        </ul>
        
        <div class="am-offcanvas-content" style="position:fixed; bottom:0px;">
            <div style="position:fixed; bottom:70px;">
                <div id="decrement" style="cursor:pointer; position: relative; float:left; background-color:#FFFFFF; width:50px; height:50px; margin-left:50px; text-align:center;">A-</div>
                <div id="increment" style="cursor:pointer; position: relative; float:left; background-color:#FFFFFF; width:50px; height:50px; margin-left:20px; text-align:center;">A+</div>
            </div>

            <br />
            
            <div>
                <a id="style-1" href="javascript:;" style="background-color:#FFFFFF; position: relative; float:left; width:35px; height:35px; border:1px solid;">&nbsp;</a>
                <a id="style-3" href="javascript:;" style="background-color:#FFF2E2; position: relative; float:left; width:35px; height:35px; margin-left:10px; border:1px solid;">&nbsp;</a>
                <a id="style-2" href="javascript:;" style="background-color:#C7EDCC; position: relative; float:left; width:35px; height:35px; margin-left:10px; border:1px solid;">&nbsp;</a>
                <div style="position: relative; float:left; width:80px; height:35px; margin-left:20px;">
                    <input name='day-night' type="checkbox" data-am-switch data-off-text="日" data-on-text="夜" data-size="sm" data-animate="false" />
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--侧边栏结束-->

</div>

<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
  <div class="am-modal-dialog">
    <div class="am-modal-hd"></div>
    <div class="am-modal-bd">
      功能开发中
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>

<footer class="my-footer">
  <p><small>© 2016 xbook.pub | SOSTART Team</small></p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.7.1/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<!--<![endif]-->
<script src="//cdn.amazeui.org/amazeui/2.7.1/js/amazeui.min.js"></script>
<script src="/static/js/amazeui.switch.min.js"></script>
<!--<script src="https://rawgit.com/amazeui/switch/master/amazeui.switch.min.js"></script>-->

<script>
    
    // PC
    $(function () {
        // 响应键盘翻页
        $(document).keydown(function (e) {
            if (e.keyCode==37) {
                $('#pre')[0].click();
            } else if (e.keyCode==39) {
                $('#next')[0].click();
            }
        });
    });
    
    // MOBILE
    $(function () {
        // 响应手势翻页
        $(document).hammer().on('swiperight', function () {
            $('#pre')[0].click();
        }).on('swipeleft', function () {
            $('#next')[0].click();
        });
    });

    $(function () {

        store = $.AMUI.store;
        if (!store.enabled) {
            store = $.AMUI.utils.cookie;
            store.remove = store.unset;
        }

        // 侧边栏
        $('#content').on('click', function () {
            $('#sidebar').offCanvas('open');
            return false;
        });
        
        // 字体
        (function(){
            var sizelist = ['16', '20', '26'];
            var size = (store.get('fontsize')==null) ? 0 : store.get('fontsize');
            $('#content').css('font-size', sizelist[size]+'px');

            $('#increment').click(function () {
                size = size+1 > sizelist.length-1 ? sizelist.length-1 : size+1;
                store.set('fontsize', size);
                $('#content').css('font-size', sizelist[size]+'px');
            });

            $('#decrement').click(function () {
                size = size-1 < 0 ? 0 : size-1;
                store.set('fontsize', size);
                $('#content').css('font-size', sizelist[size]+'px');
            });
        })();
        
        // 阅读模式及配色
        (function(){

            var night = (store.get('reader.night')==null) ? false : store.get('reader.night');
            var style = (store.get('reader.style')==null) ? 1 : store.get('reader.style');

            // 阅读样式选择
            $('#style-1').click(function () {

                style = 1; store.set('reader.style', 1);

                if (night) {
                    $('[name="day-night"]').bootstrapSwitch('state', false);
                }

                $('body').css({
                    'background-color': '#FFF'
                });
                $('#content').css({
                    'color' : '#000'
                });
            });
            $('#style-2').click(function () {

                style = 2; store.set('reader.style', 2);

                if (night) {
                    $('[name="day-night"]').bootstrapSwitch('state', false);
                }

                $('body').css({
                    'background-color': '#C7EDCC'
                });
                $('#content').css({
                    'color' : '#000000'
                });
            });
            $('#style-3').click(function () {

                style = 3; store.set('reader.style', 3);

                if (night) {
                    $('[name="day-night"]').bootstrapSwitch('state', false);
                }

                $('body').css({
                    'background-color': '#FFF2E2'
                });
                $('#content').css({
                    'color' : '#000000'
                });
            });

            // 阅读模式切换
            $('[name="day-night"]').bootstrapSwitch();
            $('[name="day-night"]').on('switchChange.bootstrapSwitch', function(event, state) {
                if (state) {
                    // 夜间
                    night = true; store.set('reader.night', true);

                    $('body').css({
                        'background-color': '#222'
                    });
                    $('#content').css({
                        'color' : '#778899' // #F8F8FF
                    });
                } else {
                    // 白天
                    night = false; store.set('reader.night', false);
                    $('#style-'+style).click();
                }
            });
            
            // 初始化
            function styleinit() {
                if (night) {
                    $('[name="day-night"]').bootstrapSwitch('state', true);
                } else {
                    $('#style-'+style).click();
                }
            }

            styleinit();

        })();
    });
</script>
</body>
</html>