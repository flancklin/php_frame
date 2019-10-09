<?php use yii\helpers\Url;?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Fly Template v3.0，基于 layui 的极简社区页面模版</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="fly,layui,前端社区">
  <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
  <link rel="stylesheet" href="<?php echo Yii::getAlias('@web');?>/blog/layui/css/layui.css">
  <link rel="stylesheet" href="<?php echo Yii::getAlias('@web');?>/blog/css/global.css">
</head>
<body>

<div class="fly-header layui-bg-black">
  <div class="layui-container">
    <a class="fly-logo" href="/">
      <img src="<?php echo Yii::getAlias('@web');?>/blog/images/logo.png" alt="layui">
    </a>
    <ul class="layui-nav fly-nav layui-hide-xs">
      <li class="layui-nav-item layui-this">
        <a href="/"><i class="iconfont icon-jiaoliu"></i>交流</a>
      </li>
      <li class="layui-nav-item">
        <a href="../case/case.html"><i class="iconfont icon-iconmingxinganli"></i>案例</a>
      </li>
      <li class="layui-nav-item">
        <a href="http://www.layui.com/" target="_blank"><i class="iconfont icon-ui"></i>框架</a>
      </li>
    </ul>
  </div>
</div>

<div class="layui-hide-xs">
  <div class="fly-panel fly-column">
    <div class="layui-container">
      <ul class="layui-clear">
        <li class="layui-hide-xs"><a href="/">首页</a></li> 
        <li class="layui-this"><a href="">提问</a></li> 
        <li><a href="">分享<span class="layui-badge-dot"></span></a></li> 
        <li><a href="">讨论</a></li> 
        <li><a href="">建议</a></li> 
        <li><a href="">公告</a></li> 
        <li><a href="">动态</a></li> 
      </ul>
      
      <div class="fly-column-right layui-hide-xs"> 
        <span class="fly-search"><i class="layui-icon"></i></span> 
        <a href="<?php echo Url::to(['site/blog-add']);?>" class="layui-btn">发表新帖</a> 
      </div> 
      <div class="layui-hide-sm layui-show-xs-block" style="margin-top: -10px; padding-bottom: 10px; text-align: center;"> 
        <a href="<?php echo Url::to(['site/blog-add']);?>" class="layui-btn">发表新帖</a> 
      </div> 
    </div>
  </div>
</div>

<div class="layui-container">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8 content detail">
      <div class="fly-panel detail-box">
        <h1>Fly Template v3.0，基于 layui 的极简社区页面模版</h1>
        <div class="detail-about">
          <a class="fly-avatar" href="javascript:void(0);">
            <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
          </a>
          <div class="fly-detail-user">
            <a href="javascript:void(0);" class="fly-link">
              <cite>贤心</cite>
              <i class="iconfont icon-renzheng" title="认证信息：{{ rows.user.approve }}"></i>
              <i class="layui-badge fly-badge-vip">VIP3</i>
            </a>
            <span>2017-11-30</span>
          </div>
          <div class="detail-hits" id="LAY_jieAdmin" data-id="123">
            <span style="padding-right: 10px; color: #FF7200">悬赏：60飞吻</span>  
            <span class="layui-btn layui-btn-xs jie-admin" type="edit"><a href="<?php echo Url::to(['site/blog-add']);?>">编辑此贴</a></span>
          </div>
        </div>
        <div class="detail-body photos">
          我是文章内容。。。。。。。。。。。。。。。。。。。。。。。。
        </div>
      </div>

      <!--<div class="fly-panel detail-box" id="flyReply">-->
        <!--<fieldset class="layui-elem-field layui-field-title" style="text-align: center;">-->
          <!--<legend>回帖</legend>-->
        <!--</fieldset>-->

        <!--<ul class="jieda" id="jieda">-->
          <!--<li data-id="111" class="jieda-daan">-->
            <!--<a name="item-1111111111"></a>-->
            <!--<div class="detail-about detail-about-reply">-->
              <!--<a class="fly-avatar" href="">-->
                <!--<img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt=" ">-->
              <!--</a>-->
              <!--<div class="fly-detail-user">-->
                <!--<a href="" class="fly-link">-->
                  <!--<cite>贤心</cite>-->
                  <!--<i class="iconfont icon-renzheng" title="认证信息：XXX"></i>-->
                  <!--<i class="layui-badge fly-badge-vip">VIP3</i>              -->
                <!--</a>-->
                <!---->
                <!--<span>(楼主)</span>-->
                <!--&lt;!&ndash;-->
                <!--<span style="color:#5FB878">(管理员)</span>-->
                <!--<span style="color:#FF9E3F">（社区之光）</span>-->
                <!--<span style="color:#999">（该号已被封）</span>-->
                <!--&ndash;&gt;-->
              <!--</div>-->

              <!--<div class="detail-hits">-->
                <!--<span>2017-11-30</span>-->
              <!--</div>-->

              <!--<i class="iconfont icon-caina" title="最佳答案"></i>-->
            <!--</div>-->
            <!--<div class="detail-body jieda-body photos">-->
              <!--<p>香菇那个蓝瘦，这是一条被采纳的回帖</p>-->
            <!--</div>-->
            <!--<div class="jieda-reply">-->
              <!--<span class="jieda-zan zanok" type="zan">-->
                <!--<i class="iconfont icon-zan"></i>-->
                <!--<em>66</em>-->
              <!--</span>-->
              <!--<span type="reply">-->
                <!--<i class="iconfont icon-svgmoban53"></i>-->
                <!--回复-->
              <!--</span>-->
              <!--<div class="jieda-admin">-->
                <!--<span type="edit">编辑</span>-->
                <!--<span type="del">删除</span>-->
                <!--&lt;!&ndash; <span class="jieda-accept" type="accept">采纳</span> &ndash;&gt;-->
              <!--</div>-->
            <!--</div>-->
          <!--</li>-->
          <!---->
          <!--<li data-id="111">-->
            <!--<a name="item-1111111111"></a>-->
            <!--<div class="detail-about detail-about-reply">-->
              <!--<a class="fly-avatar" href="">-->
                <!--<img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt=" ">-->
              <!--</a>-->
              <!--<div class="fly-detail-user">-->
                <!--<a href="" class="fly-link">-->
                  <!--<cite>贤心</cite>       -->
                <!--</a>-->
              <!--</div>-->
              <!--<div class="detail-hits">-->
                <!--<span>2017-11-30</span>-->
              <!--</div>-->
            <!--</div>-->
            <!--<div class="detail-body jieda-body photos">-->
              <!--<p>蓝瘦那个香菇，这是一条没被采纳的回帖</p>-->
            <!--</div>-->
            <!--<div class="jieda-reply">-->
              <!--<span class="jieda-zan" type="zan">-->
                <!--<i class="iconfont icon-zan"></i>-->
                <!--<em>0</em>-->
              <!--</span>-->
              <!--<span type="reply">-->
                <!--<i class="iconfont icon-svgmoban53"></i>-->
                <!--回复-->
              <!--</span>-->
              <!--<div class="jieda-admin">-->
                <!--<span type="edit">编辑</span>-->
                <!--<span type="del">删除</span>-->
                <!--<span class="jieda-accept" type="accept">采纳</span>-->
              <!--</div>-->
            <!--</div>-->
          <!--</li>-->
          <!---->
          <!--&lt;!&ndash; 无数据时 &ndash;&gt;-->
          <!--&lt;!&ndash; <li class="fly-none">消灭零回复</li> &ndash;&gt;-->
        <!--</ul>-->
        <!---->
        <!--<div class="layui-form layui-form-pane">-->
          <!--<form action="/jie/reply/" method="post">-->
            <!--<div class="layui-form-item layui-form-text">-->
              <!--<a name="comment"></a>-->
              <!--<div class="layui-input-block">-->
                <!--<textarea id="L_content" name="content" required lay-verify="required" placeholder="请输入内容"  class="layui-textarea fly-editor" style="height: 150px;"></textarea>-->
              <!--</div>-->
            <!--</div>-->
            <!--<div class="layui-form-item">-->
              <!--<input type="hidden" name="jid" value="123">-->
              <!--<button class="layui-btn" lay-filter="*" lay-submit>提交回复</button>-->
            <!--</div>-->
          <!--</form>-->
        <!--</div>-->
      <!--</div>-->
    </div>
  </div>
</div>

<div class="fly-footer">
  <p><a href="http://fly.layui.com/" target="_blank">Fly社区</a> 2017 &copy; <a href="http://www.layui.com/" target="_blank">layui.com 出品</a></p>
  <p>
    <a href="http://fly.layui.com/jie/3147/" target="_blank">付费计划</a>
    <a href="http://www.layui.com/template/fly/" target="_blank">获取Fly社区模版</a>
    <a href="http://fly.layui.com/jie/2461/" target="_blank">微信公众号</a>
  </p>
</div>

<script src="<?php echo Yii::getAlias('@web');?>/blog/layui/layui.js"></script>
<script>
layui.cache.page = 'jie';
layui.cache.user = {
  username: '游客'
  ,uid: -1
  ,avatar: '<?php echo Yii::getAlias('@web');?>/blog/images/avatar/00.jpg'
  ,experience: 83
  ,sex: '男'
};
layui.config({
  version: "3.0.0"
    ,base: '<?php echo Yii::getAlias('@web');?>/blog/mods/'
}).extend({
  fly: 'index'
}).use(['fly', 'face'], function(){
  var $ = layui.$
  ,fly = layui.fly;
  //如果你是采用模版自带的编辑器，你需要开启以下语句来解析。
  /*
  $('.detail-body').each(function(){
    var othis = $(this), html = othis.html();
    othis.html(fly.content(html));
  });
  */
});
</script>

</body>
</html>