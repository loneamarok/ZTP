<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<!doctype html>
<html>
<head>
  <title>Status page</title>
  <link rel="stylesheet" href="css/style.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/progress-wizard.min.css" rel="stylesheet">
<style>
    .example {
         width: 90%;
         margin: 50px auto 30px auto;
    }

    .progress__container {
         width: 100%;
         background-color: #ccc;
         border-radius: 5px;
         overflow-x: hidden;
         line-height: 8px;
    }

    .progress__bar {
         height: 8px;
         background-color: #4CAF50;
         border-top-left-radius: 5px;
         border-bottom-left-radius: 5px;
         display: inline-block;
    }

    .progress__bar--failure {
         background-color: red;
    }

    .progress {
         position: relative;
    }

    .step {
         position: absolute;
         top: 10px;
         transform: translate(-50%, 0);
         text-align: center;
    }

    .step--first {
         left: 0%;
         transform: none;
         text-align: left;
    }

    .step--last {
         right: 0%;
         transform: none;
         text-align: right;
    }

    .step__content {
         display: inline-block;
         margin-top: 10px;
    }

    .step__title {
         font-size: 14px;
    }
    .step__title__up {
         font-size: 14px;
         position: relative;
         top: -50px;
    }


    .step__title--status-icon {
         font-size: 13px;
         font-weight: bold;
         border-radius: 14px;
         position: absolute;
         height: 10px;
         width: 10px;
         top: -15.5px;
         left: 50%;
         color: black;
         background-color: #ccc;
         transform: translate(-50%, 0);
         padding: 5px;
         text-align: center;
    }

    .step__title--status-icon-completed {
         color: white;
         background-color: green;
    }

    .step__title--status-icon--first {
         left: -2px;
         transform: none;
    }

    .step__title--status-icon--last {
         left: auto;
         right: -2px;
         transform: none;
    }

.loader-block {
  position: relative;
  margin:50px;
  width: 180px;
  height: 180px;
  left: 35%;
}
.loader {
   width: 100%;
   height: 100%;
   border-radius: 50%;
   border-top: 8px solid green;
   border-bottom: 8px solid green;
   border-right:8px solid green;
   border-left:8px solid white;   
   animation: spin 4s linear infinite;   
   box-sizing: border-box;
}

.stop{
  position: absolute;
  display: inline-block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:20px;
  text-align: center;
}
.stop_img
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
</head>
<body>


    <div id="main-wrapper-big">
    <center><h2>ZTP status</h2></center>
    <center><h3>Configuring <?php echo $_SESSION['ipAddress']; ?></h3></center>
    
    <form action="index.php" method="post">
      <div class="loader-block">
      <div class="loader" id="loader_id"></div>
      <div class="stop" id="status_text">
        Finding current ZTP status
      </div>
      <!--<div class="stop_img">
        <img src="imgs/avatar.png" alt="Avatar" class="avatar">
        
      </div>-->
    </div>
      <br>

        <div class="example">
    <div class="progress">
        <div class="progress__container">
            <div class="progress__bar" style="width: 0%" id="bar_control">
                <div class="step step--first">
                    <div class="step__content">
                        <div class="step__title">
                            DHCP process
                            <div class="step__title--status-icon step__title--status-icon--first step__title--status-icon-completed" id="step1">1</div>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 11.11%">
                    <div class="step__content">
                        <div class="step__title">
                          <div class=step__title__up>
                            HTTP file check
                          </div>
                            <span class="step__title--status-icon" id="step2">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 22.22%">
                    <div class="step__content">
                        <div class="step__title">
                            GET server.py
                            <span class="step__title--status-icon" id="step3">3</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 33.33%">
                    <div class="step__content">
                        <div class="step__title">
                          <div class=step__title__up>
                            GET server_child.py
                          </div>
                            <span class="step__title--status-icon" id="step4">4</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 44.44%">
                    <div class="step__content">
                        <div class="step__title">
                            GET image
                            <span class="step__title--status-icon" id="step5">5</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 55.55%">
                    <div class="step__content">
                        <div class="step__title">
                          <div class=step__title__up>
                            DHCP process
                          </div>
                            <span class="step__title--status-icon" id="step6">6</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 66.66%">
                    <div class="step__content">
                        <div class="step__title">
                            HTTP server check
                            <span class="step__title--status-icon" id="step7">7</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 77.77%">
                    <div class="step__content">
                        <div class="step__title">
                          <div class=step__title__up>
                            GET server.py
                          </div>
                            <span class="step__title--status-icon" id="step8">8</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 88.88%">
                    <div class="step__content">
                        <div class="step__title">
                            GET config
                            <span class="step__title--status-icon" id="step9">9</span>
                        </div>
                    </div>
                </div>

                <div class="step step--last">
                    <div class="step__content">
                        <div class="step__title">
                          <div class=step__title__up>
                            Completed
                          </div>
                            <span class="step__title--status-icon step__title--status-icon--last" id="step10">10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


      <div class="inner_container">
        <button class="logout_button" type="submit">Log Out</button>  
      </div>
    </form>
  </div>
  <div id="show"></div>
  <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
    var pos=1;
    var eta_timer_start=0;
    //const eta_timer;
   // const step_set_timer;
    var percent;
    var cur_per=1;
    var oldPos=1;
    var cur_pos=1;
    var bar=document.getElementById("bar_control");
    var ztp=["DHCP process","HTTP Server Check","GET scripy.py","GET script_child.py","GET Image","DHCP process","HTTP Server check","GET script.py","GET Config","Completed"];
    var eta=[10,20,10,10,100,10,10,10,10,10];
    var eta_const=[10,20,10,10,100,10,10,10,10,10];

    eta_pause=0;
    var eta_timer=setInterval(eta_timer_fn,30);
    
    const step_fill=setInterval(step_fill_fn,100);

    const eta_time_dec=setInterval(eta_time_dec_fn,1000);

    pos=parseFloat(<?php echo $_SESSION['pos']; ?>);

    const databaseQuery=setInterval(function(){
    $('#show').load('data.php', function(show) {
    pos = $('#show').html();
    console.log(pos+" "+oldPos);
    if(pos!=oldPos)
    {
      eta_pause=1;
        percent=(pos-1)*11.11;
        cur_per=parseFloat((bar.style.width).slice(0,-1));
        //console.log(cur_per+" "+percent);
        //var element=document.getElementById("step"+i);
        //element.className+=" step__title--status-icon-completed";
        //clearInterval(eta_timer_fn);
        var smooth_bar= setInterval(function(){
        
        bar.style.width=(cur_per+0.3)+"%";
        cur_per+=0.3;
        //if()
        var status_txt=document.getElementById("status_text");
            status_txt.innerHTML="Finding current ZTP status";
          if(cur_per>=percent)
          {
            console.log("in");
            eta_pause=0;
            if(pos==9)
            {
              var status_txt=document.getElementById("status_text");
              status_txt.innerHTML="Finishing up. ETA: "+eta[pos];
            }
            var status_txt=document.getElementById("status_text");
            status_txt.innerHTML="ETA for "+ztp[pos]+": "+eta[pos];
            clearInterval(smooth_bar);     
          }
        },20);

        //console.log(element.innerHTML+" "+i);
        
    }
    else
    {

      var status_txt=document.getElementById("status_text");
      status_txt.innerHTML="ETA for "+ztp[cur_pos]+": "+eta[cur_pos];
    }

    oldPos=pos;
    });
  },3000);



    function step_fill_fn(){
      if(pos==1)
        eta_timer_start=1;
    for(var i=1;i<10;i++)
    {
    if(cur_per>=i*11.11)
    {
      //eta_pause=0;
      var element=document.getElementById("step"+(i+1));
      element.className+=" step__title--status-icon-completed";
      cur_pos=i+1;
      if(cur_pos==pos)
        eta_timer_start=1;
//console.log(cur_pos+"cur pos");

    }
    }
   // if(cur_pos<=(pos-1)*11.11-2)
   // eta_pause=0;
  }

          function eta_timer_fn(){
            
          if(eta_pause==0)
          {
          console.log(eta[cur_pos]);
          var inc=11.11/eta_const[cur_pos]/33.33;
          cur_per+=inc;
          bar.style.width=(cur_per)+"%";
          //console.log("limit "+((cur_pos-1)*11.11+11.11-2)+" "+cur_per)
          if(cur_pos!=9)
          {
            if(cur_per>=(pos-1)*11.11+11.11-2)
              eta_pause=1;
              //clearInterval(eta_timer);
          }
          else
            if(cur_per>=100)
            {
              eta_pause=1;
              document.getElementById("loader_id").style.borderLeft="8px solid green";
              clearInterval(databaseQuery);
              clearInterval(step_fill_fn);
              clearInterval(eta_timer_fn);
              clearInterval(eta_timer);
              //clearInterval(smooth_bar);
              
              var status_txt=document.getElementById("status_text");
              status_txt.innerHTML="ZTP setup complete";

            }

          }

          }

        function eta_time_dec_fn()
        {
          if(eta_timer_start==1)
          {
          if(eta[cur_pos]!=0&&cur_pos<=9)
          {
            console.log(cur_pos +": eta dec");
          eta[cur_pos]--;
          var status_txt=document.getElementById("status_text");
          status_txt.innerHTML="ETA for "+ztp[cur_pos]+": "+eta[cur_pos];
          }
          else
          {
            if(cur_pos<=9)
            {
            var status_txt=document.getElementById("status_text");
            status_txt.innerHTML="Process delayed. Please wait";
            }
          }
        }

        }

  
   //setInterval(function(){
   //pos=document.getElementById(show).innerHTML;
  // console.log(document.getElementById(show).innerHTML);

 //},3000)


	</script>
</body>
</html>