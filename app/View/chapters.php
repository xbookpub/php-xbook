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

<div class="am-g am-g-fixed">
  <div class="am-u-md-12">
    <div class="am-g">
      <div class="am-u-sm-12 am-u-sm-centered">
        <?php if (isset($volumes)): ?>
            <section data-am-widget="accordion" class="am-accordion am-accordion-basic" data-am-accordion='{  }'>
                <?php foreach ($volumes as $vol): ?>
                <dl class="am-accordion-item">
                  <dt class="am-accordion-title">
                      <?php echo $vol['name']; ?>
                  </dt>
                  <dd class="am-accordion-bd am-collapse">
                    <div class="am-accordion-content">
                      <div class="am-cf am-article">
                      <?php foreach ($vol['chapters'] as $chapter): ?>
                        <a href="<?=uri("books/{$book_id}/chapters/{$chapter['id']}")?>"><?=$chapter['title']?></a><br />
                      <?php endforeach; ?>
                      </div>
                    </div>
                  </dd>
                </dl>
                <?php endforeach; ?>
            </section>
        <?php else: ?>
            <?php foreach ($chapters as $chapter): ?>
            <div class="am-cf am-article">
                <a href="<?=uri("books/{$book_id}/chapters/{$chapter['id']}")?>"><?=$chapter['title']?></a><br />
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <hr/>
      </div>
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
</body>
</html>