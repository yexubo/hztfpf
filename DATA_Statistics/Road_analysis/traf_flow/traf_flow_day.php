<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../../../css/tab3.css">
<link rel="stylesheet" type="text/css" href="../../../css/scollbar2.css">
<script src="../../../js/util.js"></script>
<script src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/Highcharts-4.0.3/js/highcharts.js"></script>
<!--<script type="text/javascript" src="../../../js/Highcharts-4.0.3/js/modules/exporting.js"></script>-->
<script src="js_traf_flow/day/road.js"></script>
</head>

<body style=" font-size:14px; color:#414141; overflow-x:auto; min-width:1220px; font-family: "Arial", Microsoft YaHei,"微软雅黑",Arial,Helvetica,Geneva,sans-serif;" >
 <div id="scroll">
                       <div id="scroLeft">
            <div class="tabs" style="background:#f0f8fe;"> 
                    <div id="chart_container" style="width:55%;height:250px;border:1px solid #000;margin:10px 0 0 10px;float:left"></div>
                    
                    <div class="glfx2" style="float:left; width: 42%;margin:10px 0 0 10px;height: 250px">
                    <div style="margin-right:17px;">
                    <table border="1px" style="width:100%;border-collapse:collapse; background:#3b88e7;color:#fff;">
  						<tr style="margin:0 10px 0 0;">
    						<th width="33%">编号</th>
    						<th width="33%">时间</th>
                            <th	width="33%">交通流量</th>
 				 		</tr>
                    </table>
                    </div>
                    <div style="float:left;overflow-x: hidden; width: 99.9%;margin:0px 0 0 0px;height: 232px">
                    	<table id ='ctb' border="1" style="width:100%;border-collapse:collapse; text-align:center;">
  							<tr>
    							<td>Loading</td>
    							<td>Loading</td>
                            	<td>Loading</td>
 				 			</tr> 
                    	</table>
					</div>
                    
					</div>
                    
                    <div style="clear:both"></div>
                    <div style="width:98%;margin:10px 0 0 10px; ">
                    	<div class="tb2" >统计数据</div>
                    	<div class="glfx2">
                        	<table  class="tqjz2" border="0">
                            	<th class="h2" align="left">当前统计数据:</th>
                              	<tr class="t1">
                              		<th scope="col">
                                 	 	<div>最高值:<span id='max_val' class="red">Loading...</span></div>
                                  		<div>时段:<span id='time' class="red">Loading...</span></div>
                              		</th>
                             		<th scope="col">
                                  		<div>平均值:<span id='arv_val' class="green">Loading...</span></div>
                              		</th>
                              		<th scope="col">
                                  		<div>总流量:<span id='total_val' class="green">Loading...</span></div>
                              		</th>
                              		<th scope="col">
                                  		<div>交通稳定度:<span id='traf_stability' class="green">Loading...</span></div>
                              		</th>
                           		</tr>
                                <th class="h2" align="left">前一天统计数据:</th>
                                <tr class="t1">
                              		<th scope="col">
                                 	 	<div>最高值:<span id='max_val' class="red">Loading...</span></div>
                                  		<div>时段:<span id='time' class="red">Loading...</span></div>
                              		</th>
                             		<th scope="col">
                                  		<div>平均值:<span id='arv_val' class="green">Loading...</span></div>
                              		</th>
                              		<th scope="col">
                                  		<div>总流量:<span id='total_val' class="green">Loading...</span></div>
                              		</th>
                              		<th scope="col">
                                  		<div>交通稳定度:<span id='traf_stability' class="green">Loading...</span></div>
                              		</th>
                           		</tr>
                                <th class="h2"></th>
                        	</table>
                     	</div> 
                    </div>
                    
                    
             
                  
            <div style="float:left;width:300px;margin:20px 0 0 0;">
                    <div class="tb1" >关联时段分析</div>
                    <div class="glfx">
                      <table  class="tqjz" >
                        <th class="h">注：本数据是近一年内相关数据对比结果</th>
                          <tr class="t1">
                            <th scope="col" >
                                历史同期均值
                            </th>
                            <th scope="col">
                                <div>最高:<span id='rtetime_max_val' class="red">Loading...</span></div>
                                <div>最低:<span id='rtetime_min_val' class="green">Loading...</span></div>
                            </th>
                          </tr>
                          <th class="h">注：本数据是近一周内相关数据对比结果</th>
                          <tr class="t1">
                            <th>近一周日均值</th>
                            <th>
                                <div>最高:<span id='rtetime_arv_max_val' class="red">Loading...</span></div>
                                <div>最低:<span id='rtetime_arv_min_val' class="orange">Loading...</span></div>
                                <div>平均:<span id='rtetime_arv_arv_val' class="green">Loading...</span></div>                
                            </th>
                          </tr>
                      </table>
                    </div>
                </div>
            </div>    
            <div style="float:left;width:357px;margin:10px 0 0 10px;">   
                <div class="tb2">关联路段分析</div>
                <div class="glfx">
                    <table id = "rte_roads" border="1" bordercolor="#70c3e9"
                     style=" background:#FFF;margin-top:5px;border-collapse:collapse;width:347px;margin-left:3.5px;table-layout:fixed;text-align:center;">
                      <tr class="t2">
                        <th scope="col">路段名</th>
                        <th scope="col">最高值</th>
                        <th scope="col">平均值</th>
                        <th scope="col">总流量</th>
                      </tr>
                      <tr class='rte_road_row' >
                        <td><div class='rte_road_name'>Loading...</div></td>
                        <td><div id='rte1_max_val'>Loading...</div></td>
                        <td><div id='rte1_avg_val'>Loading...</div></td>
                        <td><div id='rte1_total_val'>Loading...</div></td>
                      </tr>
                      <tr class='rte_road_row'>
                        <td><div id='rte2_road_name'>Loading...</div></td>
                        <td><div id='rte2_max_val'>Loading...</div></td>
                        <td><div id='rte2_avg_val'>Loading...</div></td>
                        <td><div id='rte2_total_val'>Loading...</div></td>
                      </tr>
                      <tr class='rte_road_row'>
                        <td><div id='rte3_road_name'>Loading...</div></td>
                        <td><div id='rte3_max_val'>Loading...</div></td>
                        <td><div id='rte3_avg_val'>Loading...</div></td>
                        <td><div id='rte3_total_val'>Loading...</div></td>
                      </tr>
                      <tr class='rte_road_row'>
                        <td><div id='rte4_road_name'>Loading...</div></td>
                        <td><div id='rte4_max_val'>Loading...</div></td>
                        <td><div id='rte4_avg_val'>Loading...</div></td>
                        <td><div id='rte4_total_val'>Loading...</div></td>
                      </tr>
                      <tr class='rte_road_row'>
                        <td><div id='rte5_road_name'>Loading...</div></td>
                        <td><div id='rte5_max_val'>Loading...</div></td>
                        <td><div id='rte5_avg_val'>Loading...</div></td>
                        <td><div id='rte5_total_val'>Loading...</div></td>
                      </tr>
                      <tr class='rte_road_row'>
                        <td><div id='rte6_road_name'>Loading...</div></td>
                        <td><div id='rte6_max_val'>Loading...</div></td>
                        <td><div id='rte6_avg_val'>Loading...</div></td>
                        <td><div id='rte6_total_val'>Loading...</div></td>
                      </tr>
                      <tr class='rte_road_row'>
                        <td><div id='rte7_road_name'>Loading...</div></td>
                        <td><div id='rte7_max_val'>Loading...</div></td>
                        <td><div id='rte7_avg_val'>Loading...</div></td>
                        <td><div id='rte7_total_val'>Loading...</div></td>
                      </tr>
                    </table>
                </div>
            </div>
            <div style="float:left;width:495px;margin-right:50px;margin:10px 0 0 10px;">
                <div class="tb2">行程车速日分布</div>
                 <div class="glfx">
                <div id="pie_container"></div>	
                </div>
            </div>
            </div>
</div>

</div>             
            <div style="clear:both"></div> 
            
</body>
</html>