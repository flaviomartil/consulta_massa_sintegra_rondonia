<?php

 if (isset($_POST['lista'])) { // NOME DO FORMULARIO //
    $texto = $_POST['lista']; // NOME DO FORMULARIO //
	$cx2 = file_put_contents('cookies sintegra.txt', "$texto # ".PHP_EOL , FILE_APPEND | LOCK_EX);
    
 }
 ?>
<?php
$checker = "Sintegra Rondonia";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="desc" content="validador de inscrições estaduais rondonia."><title id="title">[0/0] Validador <?php echo $checker; ?></title>
  
</head>
<!--my own css-->
<style>
body{
  overflow-x: hidden;

}
#sla{
 background-color: #3E3D3D;
}
#top-bar{
 background-color: #3E3D3D;
 width: 100%;
 height: 60px;
 
 background-color: #;
 position: relative;
 top: -20px;
}
#title-top-bar{
  position: relative;
  top: 5px;
  color: white;
  font-weight: bold;
  font-family: 'Quicksand', sans-serif;
  left: 55px;
}
#logo-top-bar{
  width: 60px;
  position: relative;
  top: -50px;
}

</style>
<body class="animated bounce">
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
  <html><head>
    <style type="text/css">
    <!--
    #apDiv1 {
     position:absolute;
     width:200px;
     height:115px;
     z-index:1;
     left: 135px;
     top: 81px;
   }
   -->
 </style>
 <script type="text/javascript">
  <!--
    function MM_showHideLayers() {
      var i,p,v,obj,args=MM_showHideLayers.arguments;
      for (i=0; i<(args.length-2); i+=3) 
        with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
          if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
          obj.visibility=v; }
        }

        function MM_timelinePlay(tmLnName, myID) { 
          var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,propNum,theObj,firstTime=false;
          if (document.MM_Time == null) MM_initTimelines(); 
          tmLn = document.MM_Time[tmLnName];
          if (myID == null) { myID = ++tmLn.ID; firstTime=true;}
          if (myID == tmLn.ID) { 
            setTimeout('MM_timelinePlay("'+tmLnName+'",'+myID+')',tmLn.delay);
            fNew = ++tmLn.curFrame;
            for (i=0; i<tmLn.length; i++) {
              sprite = tmLn[i];
              if (sprite.charAt(0) == 's') {
                if (sprite.obj) {
                  numKeyFr = sprite.keyFrames.length; firstKeyFr = sprite.keyFrames[0];
                  if (fNew >= firstKeyFr && fNew <= sprite.keyFrames[numKeyFr-1]) {
                    keyFrm=1;
                    for (j=0; j<sprite.values.length; j++) {
                      props = sprite.values[j]; 
                      if (numKeyFr != props.length) {
                        if (props.prop2 == null) sprite.obj[props.prop] = props[fNew-firstKeyFr];
                        else        sprite.obj[props.prop2][props.prop] = props[fNew-firstKeyFr];
                      } else {
                        while (keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]) keyFrm++;
                        if (firstTime || fNew==sprite.keyFrames[keyFrm-1]) {
                          if (props.prop2 == null) sprite.obj[props.prop] = props[keyFrm-1];
                          else        sprite.obj[props.prop2][props.prop] = props[keyFrm-1];
                        } } } } }
                      } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
                      if (fNew > tmLn.lastFrame) tmLn.ID = 0;
                    } }
                  }

                  function MM_initTimelines() { 
                    var ns = navigator.appName == "Netscape";
                    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
                    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
                    var macIE5 = (navigator.platform ? (navigator.platform == "MacPPC") : false) && (navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4);
                    document.MM_Time = new Array(1);
                    document.MM_Time[0] = new Array(1);
                    document.MM_Time["Timeline1"] = document.MM_Time[0];
                    document.MM_Time[0].MM_Name = "Timeline1";
                    document.MM_Time[0].fps = 15;
                    document.MM_Time[0][0] = new String("sprite");
                    document.MM_Time[0][0].slot = 1;
                    if (ns4)
                      document.MM_Time[0][0].obj = document["apDiv1"];
                    else if (ns5)
                      document.MM_Time[0][0].obj = document.getElementById("apDiv1");
                    else
                      document.MM_Time[0][0].obj = document.all ? document.all["apDiv1"] : null;
                    document.MM_Time[0][0].keyFrames = new Array(1, 5, 12, 18, 26, 30);
                    document.MM_Time[0][0].values = new Array(2);
                    if (ns5 || macIE5)
                      document.MM_Time[0][0].values[0] = new Array("10px", "13px", "16px", "19px", "25px", "30px", "36px", "42px", "49px", "56px", "62px", "68px", "72px", "75px", "77px", "78px", "81px", "86px", "92px", "98px", "104px", "111px", "118px", "124px", "130px", "135px", "139px", "138px", "136px", "135px");
                    else
                      document.MM_Time[0][0].values[0] = new Array(10,13,16,19,25,30,36,42,49,56,62,68,72,75,77,78,81,86,92,98,104,111,118,124,130,135,139,138,136,135);
                    document.MM_Time[0][0].values[0].prop = "left";
                    if (ns5 || macIE5)
                      document.MM_Time[0][0].values[1] = new Array("15px", "18px", "22px", "25px", "27px", "27px", "27px", "27px", "26px", "26px", "26px", "28px", "32px", "36px", "41px", "46px", "51px", "55px", "56px", "57px", "56px", "56px", "55px", "55px", "55px", "56px", "63px", "69px", "75px", "81px");
                    else
                      document.MM_Time[0][0].values[1] = new Array(15,18,22,25,27,27,27,27,26,26,26,28,32,36,41,46,51,55,56,57,56,56,55,55,55,56,63,69,75,81);
                    document.MM_Time[0][0].values[1].prop = "top";
                    if (!ns4) {
                      document.MM_Time[0][0].values[0].prop2 = "style";
                      document.MM_Time[0][0].values[1].prop2 = "style";
                    }
                    document.MM_Time[0].lastFrame = 30;
                    for (i=0; i<document.MM_Time.length; i++) {
                      document.MM_Time[i].ID = null;
                      document.MM_Time[i].curFrame = 0;
                      document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
                    }
                  }
//-->
</script>
<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css"><link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="styles/plugins/c3.css"><link rel="stylesheet" href="styles/plugins/waves.css"><link rel="stylesheet" href="styles/plugins/perfect-scrollbar.css"><link rel="stylesheet" href="styles/bootstrap.min.css"><link rel="stylesheet" href="styles/main.min.css"><link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css"><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head><body id="app" class="app off-canvas theme-zero nav-expand" onload="MM_timelinePlay('Timeline1')">
</map></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script>
<div class="container">
  <div class="content-container nav-expand fixedHeader" id="content">
    <div class="page page-dashboard">
      <div class="page-wrap">
        <div class="row"><br>
          <br>
          <div class="col-md-12">
            <div class="dash-head clearfix mt15 mb20">
              <div class="left">
                <h4 class="mb5 text-light" style="font-family: Roboto,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; font-weight: 300; line-height: 1.1; color: rgb(70, 70, 70); margin-top: 10.5px; margin-bottom: 5px; font-size: 18px; font-style: normal; letter-spacing: 0.5px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255);">Validador<span style="">&nbsp;</span><span style="font-weight: bold;"><span style="color: rgb(154,85,255);"><?php echo $checker; ?></span></span></h4>
                <p class="small"><strong style="font-weight: bold; color: rgb(70, 70, 70); font-family: Roboto,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; font-size: 11.9px; font-style: normal; letter-spacing: 0.5px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255);">Formato:</strong><span style="color: rgb(70, 70, 70); font-family: Roboto,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; font-size: 11.9px; font-style: normal; font-weight: 400; letter-spacing: 0.5px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;"><span>&nbsp;</span><span style="color: rgb(154,85,255); font-weight: bold;">Inscrições</span><span style="color: rgb(154,85,255); font-weight: bold;"></span|<span style="color: rgb(154,85,255); font-weight: bold;"></span><span style="color: rgb(154,85,255); font-weight: bold;"></span></span></p>
              </div>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-8">
           <div class="panel panel-default mb20 panel-hovered analytics">
            <div class="panel-body">
             <textarea id="list" style="text-align: center;" rows="5" class="form-control resize-v" placeholder=""></textarea><br>
             <div class="progress-striped progress" value="45" type="primary">
              <div class="progress-bar progress-bar-primary" id="progreso" style=""><span></span></div>
            </div>
            <button type="button" id="stop" style="float: right; height: 32px;" class="btn btn-line-danger btn-icon-inline waves-effect"><i class="ion ion-stop"></i>Pausar</button>
            <button type="button" id="start" style="float: right; margin-right: 5px; height: 32px;" class="btn btn-line-success btn-icon-inline waves-effect"><i class="ion ion-play"></i>Iniciar</button>
          </div>
        </div>
      </div> 
      <div class="col-md-4">
       <div class="panel panel-default mb20 list-widget">
        <ul class="list-unstyled clearfix">
          <li> <i class="fa fa-check-square-o"></i> <span class="text">Validas</span>
            <span class="badge badge-xs badge-success right"><font id="cLive" size="2">0</font></span> </li>
            <li> <i class="fa fa-close"></i> <span class="text">Invalidas</span>
              <span class="badge badge-xs badge-danger right"><font id="cDie" size="2">0</font></span> </li>
              <li> <i class="fa fa-refresh"></i> <span class="text">Carregadas</span>
                <span class="badge badge-xs badge-info right"><font id="carregadas" size="2">0</font></span> </li>
                <li><i class="fa fa-rocket"></i>  <span class="text">Testadas</span>
                  <span class="badge badge-xs badge-primary right"><font id="total" size="2">0</font></span> </li>
                </ul>
              </div>
            </div>
            <script>
             $(document).ready(function () {
              $('#start').attr('disabled', null);
              $('#start').click(function () {
                audio.play();
                
                var line = $('#list').val().split('\n');
                var total = line.length;
                var ap = 0;
                var rp = 0;
                var st = 'Aguardando...';
                $('#carregadas').html(total);
                
                $('#status').html(st);
                line.forEach(function (value) {
                  var email = list[0];
                  var ajaxCall = $.ajax({
                    url: 'api.php',
                    type: 'GET',
                    data: 'lista='+ value +'',
                    beforeSend: function () {
                      $('#stop').attr('disabled', null);
                      $('#start').attr('disabled', 'disabled');
                      var st = 'Testando...';
                      $('#status').html(st);

                    },
                    success: function(data){
                      if(data.indexOf("Inscrição existente") >= 0){ 
                        $("#lives").val(data + "\n" + $("#lives").val());
                        ap = ap + 1;
                        document.getElementById("lives").innerHTML += data + "";
                        audio.play();
                        removelinha();
                      }else{
                        $("#dies").val(data + "\n" + $("#dies").val());
                        rp = rp + 1;
                        document.getElementById("employe").innerHTML += data + "";
                        removelinha();
                      }
                      var fila = parseInt(ap) + parseInt(rp);
                      $('#cLive').html(ap);
                      $('#cDie').html(rp);
                      $('#total').html(fila);
                      var result = (fila/total)*100;
                      $('#pct').html(result);
                      $('#title').html('[' + fila + '/' + total + ']');
                      document.getElementById("progreso").style.width = result + "%";
                      if (fila == total) {
                        $('#start').attr('disabled', null);
                        $('#stop').attr('disabled', 'disabled');
                        audio.play();
                        var st = 'Finalizado';
                        swal("Finalizado!", "Todas as inscrições foram testadas com sucesso.", "success");
                        $('#status').html(st);
                      }
                    }
                  });
                  $('#stop').click(function () {
                    ajaxCall.abort();
                    $('#start').attr('disabled', null);
                    $('#stop').attr('disabled', 'disabled');
                    var st = 'Pausado...';
                    $('#status').html(st);
                  });
                });
              });
            });
             function stopado() {
              var lines = $("#list").val().split('\n');
              lines.splice(0, 1);
              $("#list").val(lines.join("\n"));
            }
            function removelinha() {
              var lines = $("#list").val().split('\n');
              lines.splice(0, 1);
              $("#list").val(lines.join("\n"));
            }
          </script>
        </div> <!-- #end row -->
        <div id="sla" class="clearfix tabs-linearrow">
          <ul class="nav nav-tabs">
           <li class="active"><a href="#lives" data-toggle="tab"><span style="font-weight: bold;"><span style="color: green;"><i class="fa fa-check-square-o"></i><span style="font-weight: bold;"><span style="color: green;">Validas</a></li>

             <li><a href="#employe" data-toggle="tab"><span style="font-weight: bold;"><span style="color: rgb(154,85,255);"> <i class="fa fa-close"> </i><span style="font-weight: bold;"><span style="color: rgb(154,85,255);">Invalidas</a></li>
             </ul>
             <div class="tab-content">
               <div class="tab-pane active" id="lives">
               </div>
               <div class="tab-pane" id="employe">
               </div>
             </div>
           </div>
         </div> 
       </div>
     </div>
   </div> 
   <script src="scripts/vendors.js"></script>
   <script src="scripts/plugins/d3.min.js"></script>
   <script src="scripts/plugins/c3.min.js"></script>
   <script src="scripts/plugins/screenfull.js"></script>
   <script src="scripts/plugins/perfect-scrollbar.min.js"></script>
   <script src="scripts/plugins/waves.min.js"></script>
   <script src="scripts/plugins/jquery.sparkline.min.js"></script>
   <script src="scripts/plugins/jquery.easypiechart.min.js"></script>
   <script src="scripts/plugins/bootstrap-rating.min.js"></script>
   <script src="scripts/app.js"></script>
   <script src="assets/plugins/toastr/toastr.min.js"></script>
   <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
   <script src="assets/pages/jquery.sweet-alert.init.js"></script>
   <script src="scripts/index.init.js"></script>
   <script src="scripts/app.js"></script>





