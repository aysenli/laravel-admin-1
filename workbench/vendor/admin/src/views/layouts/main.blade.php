<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理系统</title>

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <?php echo HTML::style('css/bootstrap.css') ;?> 
    <style>
      body {
        min-height: 2000px;
        padding-top: 70px;
      }
    </style>
        <?php echo HTML::script('js/ueditor/ueditor.config.js');?>
        <?php echo HTML::script('js/ueditor/ueditor.all.js');?>
        <?php echo HTML::script('js/ueditor/editor_api.js');?>
        <?php echo HTML::script('js/ueditor/lang/zh-cn/zh-cn.js');?>

        <?php echo HTML::script('js/my.js');?>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            @foreach($displayData['MenuList'] as $k)
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$k['name']}}<b class="caret"></b></a>
              <ul class="dropdown-menu">
                @foreach($k['children'] as $k2)
                <li><a href="{{$k2['url']}}">{{$k2['name']}}</a></li>
                @endforeach
              </ul>
            </li>
            @endforeach
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      @yield('content')
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <?php echo HTML::script('js/bootstrap.min.js') ;?> 
  </body>
</html>

