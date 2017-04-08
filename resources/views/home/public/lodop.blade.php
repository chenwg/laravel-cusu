<script src="/public/lodop/LodopFuncs.js" type="text/javascript"></script>
<object  id="LODOP_OB" classid="clsid:2105C259-1E0C-4534-8141-A753534CB4CA" width=0 height=0>
  <embed id="LODOP_EM" type="application/x-print-lodop" width=0 height=0></embed>
</object>
<style id="tab">
  #tabCss{font-size: 14px;font-family: '微软雅黑';padding:10px}
  #tabCss table{border:1px solid #000}
  #tabCss table td{border:1px solid #000;height:28px;line-height: 28px;padding:2px}
</style>
<script language="javascript" type="text/javascript">
var LODOP;
function Preview(){
    CreatePrintPage();
    LODOP.PREVIEW();
}
function CreatePrintPage(){
  LODOP = getLodop(document.getElementById('LODOP_OB'),document.getElementById('LODOP_EM'));
  var strBodyStyle = "<style>" +document.getElementById('tab') +"</style>";
  var strFormHtml = strBodyStyle + "<body><div id='tabCss'>"+document.getElementById('phtml').innerHTML + "</div></body>";
  LODOP.PRINT_INIT("打印内容");
  //LODOP.SET_PRINT_PAGESIZE(1, 0, 0, "A4");//让软件手工控制
  //LODOP.SET_PRINT_STYLE("FontSize", 9);//让软件手工控制
  LODOP.ADD_PRINT_HTM("0%", "0%", "100%", "100%", strFormHtml);
}
</script>
