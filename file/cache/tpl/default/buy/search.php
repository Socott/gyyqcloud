<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('cloudproduce/header');?>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" />
    <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/css/pages.css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" type="text/css" />
    <link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter//pages/industrialMall/css/clound.css" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/zone/qltyAuth/css/popup7.css"/>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/zone/qltyAuth/css/reset7.css"/>
<!--头部 end-->
<input type="hidden" id="classification">
<input type="hidden" id="industryids">
<!-- 企业类型 -->
    <input type="hidden" id="sys_type">
    <!-- 经营类型 -->
    <input type="hidden" id="sys_model">
    <!-- 企业规模 -->
    <input type="hidden" id="sys_scale">
    
    <input type="hidden" id="isSrm">
<!--主体内容 start-->

<!--面包屑 start-->
        <div class="crumbs">
            <div class="block">
                <a href="../cosimcloud/index.html">首页</a><span id="leimu"> > 需求大厅</span>

</div>
        </div>
        <!--面包屑 end-->
        <!--搜索选项 start-->
        <div class="cpzx-commodity-classification">
            <div class="block">
                <div class="classification-title">
                    <span class="commdoity-name">需求列表</span>
                    <a href="/member/my.php?mid=6&action=add"  class="release">发布需求</a>
                </div>
                <div class="classification-list">
                   <span class="fenlei">
                    <div class="item i1 feilei">
                        <span>分类：</span>
                        <div class="text">
                            <div class="text-box" id="classBox">
                <a value="capabilityIframe" class="classification" onclick="searchByClassification('0','1',1,this); return false;">全部</a>
    
      <a value="capabilityIframe" class="classification" onclick="searchByClassification('60000','1',1,this); return false;">产品外协</a>
      
      <a value="capabilityIframe" class="classification" onclick="searchByClassification('10000','1',1,this); return false;">设计</a>
      
      <a value="capabilityIframe" class="classification" onclick="searchByClassification('20000','1',1,this); return false;">制造</a>
      
      <a value="capabilityIframe" class="classification" onclick="searchByClassification('40000','1',1,this); return false;">试验</a>
      
      <a value="capabilityIframe" class="classification" onclick="searchByClassification('70000','1',1,this); return false;">服务</a>
      
      <a value="capabilityIframe" class="classification" onclick="searchByClassification('80000','1',1,this); return false;">其他</a>
      
                            </div>
                        </div>
                    </div>
                    </span>
                    <div class="item i3">
                        <span>企业类型：</span>
                        <div class="text">
                            <div class="text-box">
                            <a href="#">全部</a>
                                <a href="#">国有企业</a>
                                <a href="#">集体企业</a>
                                <a href="#">股份合作企业</a>
                                <a href="#">联营企业</a>
                                <a href="#">有限责任公司</a>
                                <a href="#">股份有限公司</a>
                                <a href="#">私营企业</a>
                                <a href="#">其他企业</a>
                                <a href="#">合资经营企业(港或澳、台资)</a>
                                <a href="#">合作经营企业(港或澳、台资)</a>
                                <a href="#">港、澳、台商独资经营企业</a>
                                <a href="#">港、澳、台商投资股份有限公司</a>
                                <a href="#">其他港、澳、台投资企业</a>
                                <a href="#">中外合资经营企业</a>
                                <a href="#">中外合作经营企业</a>
                                <a href="#">外资企业</a>
                                <a href="#">外商投资股份有限公司</a>
                                <a href="#">其他国外投资</a>
                                <a href="#">个体户</a>
                                <a href="#">个人合伙</a>
                                <a href="#">其他个体经营</a>
                                <a href="#">事业单位</a>
                                <a href="#">其他</a>
                            </div>
                            <div class="but">
                                <a href="javascript:void(0);" class="submit">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a href="#" class="button1">多选</a>
                        <a href="javascript:;" class="more">
                            <font>更多</font>
                        </a>
                    </div>
                    <!-- <div class="item i4">
                        <span>认证：</span>
                        <div class="text">
                            <div class="text-box">
                                <a href="#">认证</a>
                                <a href="#">未认证</a>
                            </div>
                            <div class="but">
                                <a href="#" class="submit">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a href="#" class="button1">多选</a>
                    </div> -->
                    <div class="item i5">
                        <span>经营方式：</span>
                        <div class="text">
                            <div class="text-box">
                            <a href="#">全部</a>
                                <a href="#" option="1">生产型</a>
                                <a href="#" option="2">贸易型</a>
                                <a href="#" option="3">服务型</a>
                                <a href="#" option="4">研发型</a>
                                <a href="#" option="0">其他类型</a>
                            </div>
                            <div class="but">
                                <a href="#" class="submit">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a href="#" class="button1">多选</a>
                      
                    </div>
                    <div class="item i6">
                        <span>企业规模：</span>
                        <div class="text">
                            <div class="text-box">
                            <a href="#">全部</a>
                                <a href="javascript:;">5 人以下</a>
                                <a href="javascript:;">5 - 10 人</a>
                                <a href="javascript:;">11 - 50 人</a>
                                <a href="javascript:;">51 - 100 人</a>
                                <a href="javascript:;">101 - 200 人</a>
                                <a href="javascript:;">201 - 300 人</a>
                                <a href="javascript:;">301 - 500 人</a>
                                <a href="javascript:;">501 - 1000 人</a>
                                <a href="javascript:;">1000 人以上</a>
                            </div>
                            <div class="but">
                                <a href="#" class="submit">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a class="button1" href="#">多选</a>
                        <a href="javascript:;" class="more">
                            <font>更多</font>
                        </a>
                    </div>
                    <div class="item i7">
                        <span>大客户认证：</span>
                        <div class="text">
                            <div class="text-box">
                            <a href="#">全部</a>
                                <a href="javascript:;">航天晨光srm</a>
                             
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--搜索选项 end-->
<div class="yzz_classify_list" style="overflow:hidden;">
<div class="cpzx-commodity-condition">
                <div class="block">
                    <div class="div1">
                        <a href="javascript:void(0)" id="sumUp" class="a1" onclick="clearorder()">综合</a>
                        <a href="javascript:void(0)" class="a2" onclick="changeorder('createTime',this)"  value="asc"/>发布时间↓</a>
                        <a href="javascript:void(0)" class="a3" onclick="changeorder('endtime',this)" value="asc">截止时间↓</a> 
                        <!--  <a href="javascript:void(0)" class="a4" onclick="changeorder('a.searchCount',this)" value="asc">热度↓</a> -->
                        <input name="shiming" id="shiming" class="a4" autocomplete="off" type="checkbox" onClick="certification(this);">实名认证</input>
                        <!--suntao add city filter begin-->
                        <a class="allZone">
                            <span>所在地区</span>
                            <div class="zoneFilter">
                                <p>所有地区</p>
                                <ul class="zonefilterList">
                                    <li>北京</li>
                                    <li>上海</li>
                                    <li>重庆</li>
                                    <li>天津</li>
                                    <li>广东</li>
                                    <li>浙江</li>
                                    <li>江苏</li>
                                    <li>山东</li>
                                    <li>河北</li>
                                    <li>河南</li>
                                    <li>福建</li>
                                    <li>辽宁</li>
                                    <li>安徽</li>
                                    <li>广西</li>
                                    <li>山西</li>
                                    <li>海南</li>
                                    <li>内蒙古</li>
                                    <li>吉林</li>
                                    <li>黑龙江</li>
                                    <li>湖北</li>
                                    <li>湖南</li>
                                    <li>江西</li>
                                    <li>宁夏</li>
                                    <li>新疆</li>
                                    <li>青海</li>
                                    <li>陕西</li>
                                    <li>甘肃</li>
                                    <li>四川</li>
                                    <li>云南</li>
                                    <li>贵州</li>
                                    <li>西藏</li>
                                    <li>香港</li>
                                    <li>澳门</li>
                                    <li>台湾</li>
                                </ul>
                            </div>     
                        </a>
<!--suntao add city filter begin-->
<!-- select star begin -->
<a class="allStar">
                            <span>质量认证</span>
                            <div class="starFilter">
                                <ul class="starfilterList">
                                    <li onclick="selectStar(this)" value="1">一星级</li>
                                    <li onclick="selectStar(this)" value="2">二星级</li>
                                    <li onclick="selectStar(this)" value="3">三星级</li>
                                    <li onclick="selectStar(this)" value="4">四星级</li>
                                    <li onclick="selectStar(this)" value="5">五星级</li>
                                </ul>
                            </div>     
                        </a>
                        <!-- select star end -->
                    </div>
                    <div class="div6" style="margin-left: 220px;">
                        <input type="text" id="keyWord" value="" onkeydown="javascript:onkeyselect();" autocomplete="off" placeholder="在结果中搜索"/>
                        <input type="submit" value="搜索" onclick="searchForKeyword()"/>
                    </div>
                </div>
            </div>
            <div id="releaseHallList" style="width:1230px; margin:auto">
<iframe id="capability_Imageiframe" name="proIfram" scrolling="no" style="width: 100%; height: 3453px;" border="0" src="/buy/list.php" frameborder="no"></iframe>
            </div>
</div>
<div class="popup" style="display:none;"></div>
        <div class="popupCon" style="display:none;" >
            <div class="popupCon_img" >
                <img src="../pages/zone/qltyAuth/images/popup7_img.png"  alt="" />
                <span class="popup_close"></span>
                <a  class="popup_link"></a>
            </div>
        </div>
<!--主体内容 end-->
 
   
<!--part7End-->
  
<?php include template('cloudproduce/footer');?>
</html>
