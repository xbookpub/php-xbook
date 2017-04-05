<!doctype html>
<html>
<head lang="zh-cmn-Hans">
  <meta charset="UTF-8">
  <title><?=$title?></title>
  <meta name="description" content="xbook.pub 一个简单的在线阅读站">
  <meta name="keyword" content="xbook,xbook.pub">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link href="//cdn.amazeui.org/amazeui/2.7.1/css/amazeui.min.css" rel="stylesheet">
  <style>
    .my-footer {
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>

<div data-am-widget="list_news" class="am-list-news am-list-news-default">
  <!--列表标题-->
  <div class="am-list-news-bd">
    <?php foreach ($books as $book): ?>
    <ul class="am-list">
      <li class="am-g am-list-item-desced">
        <div class="am-list-main">
          <h3 class="am-list-item-hd">
            <a href="<?=uri("books/{$book['id']}")?>" class=""><?=$book['name']?></a>
          </h3>
          <div class="am-list-item-text"></div>
        </div>
      </li>
    </ul>
    <?php endforeach; ?>
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

<script src="/static/js/extends.js"></script>

</body>
</html>