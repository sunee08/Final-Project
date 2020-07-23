<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link class="include" rel="stylesheet" type="text/css" href="jquery.jqplot.min.css" />
        <title>ทดสอบ jqplot</title>       
        <script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!--  เรียกไฟล์ jquery-->
        <script class="include" type="text/javascript" src="jquery.jqplot.min.js"></script><!-- core หลักของ jqplot-->
         <script class="include" type="text/javascript" src="plugins/jqplot.categoryAxisRenderer.min.js"></script><!-- plugin แสดงแท่ง chart แบบแยกเป็นกลุ่มหรือประเภท (category)-->
        <script class="include" type="text/javascript" src="plugins/jqplot.pointLabels.min.js"></script><!-- plugin แสดงค่าบนแท่ง chart-->
        <script class="include" type="text/javascript" src="plugins/jqplot.barRenderer.min.js"></script><!-- ชนิด chart ในที่นี้คือ bar chart -->
        <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]--><!-- เพื่อรองรับ IE6-9-->
        <script type="text/javascript">
            $(document).ready(function() {
                var s1 = [212, 625, 736, 1004];//แกน Y กลุ่มที่ 1 คือ ต้นทุน
                var s2 = [750, 5050, 3020, 2014];//แกน Y กลุ่มที่ 2 คือ รายรับ
                var label = [{label: 'ต้นทุน'}, {label: 'รายรับ'}];//แสดงใน label
                var ticks = ['2009', '2010', '2011', '2012'];//แกน X ชื่อกลุ่ม
                plot2 = $.jqplot('showchart', [s1, s2], {//showcart คือ id="showchart" ของ div
                    seriesDefaults: {
                        renderer: $.jqplot.BarRenderer,//ประเภท Chart ในที่นี้ผมเลือกใช้ Bar Chart
                        shadow: false,//ไม่แสดงเงาบนแท่งชาร์ต
                        pointLabels: {show: true}//แสดงค่าบนแท่งชาร์ต
                    },
                    axes: {
                        xaxis: {//แกน X
                            renderer: $.jqplot.CategoryAxisRenderer,//เรียกประเภทการแสดงผลบน Bar Chart
                            ticks: ticks//แสดงค่าปี 2009-2012
                        }
                    },
                    series: label, //เชตชื่อ Label
                    legend: {
                        show: true//แสดง Label
                    }
                });
               $('#showchart').CanvasHack();//แก้ปัญหาตอน print บน IE
            });
            $.fn.CanvasHack = function() {//function แก้ปัญหาตอน print บน IE
                var canvases = this.find('canvas').filter(function() {
                    return $(this).css('position') == 'absolute';
                });
                canvases.wrap(function() {
                    var canvas = $(this);
                    var div = $('<div />').css({
                        position: 'absolute',
                        top: canvas.css('top'),
                        left: canvas.css('left')
                    });
                    canvas.css({
                        top: '0',
                        left: '0'
                    });
                    return div;
                });
                return this;
            };
        </script>
    </head>
 
    <body>
    <div style="margin-left:50px;">
    <h3>Chart แสดงรายได้ประจำปี</h3>
        <div id="showchart" style="width:500px;"></div>
     </div>
    </body>
</html>