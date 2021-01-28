// for chart drawflow
    var id = document.getElementById("drawflow");
    const editor = new Drawflow(id);
    editor.reroute =null;
    var rightpop=100;
    var leftpopup=6;
    var rightpopnext=0;
    editor.editor_mode = 'fixed';
    
editor.drawflow ={"drawflow": {"Home": {"data": {"1": {"id": 1,"name": "welcome","data": {},"class": "help","html": "\n","typenode": false,"inputs": {},"outputs": {},"pos_x": 50,"pos_y": 50},"2": {"id": 2,"name": "dbclick","data": {"name": ""},"class": "dbclick","html": '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div><span class="blue-plus" onmousedown="return false" style="display: block;height: 25px;width: 25px; text-align: center;padding-top: 2px;top: 46px; left: 113px; padding-left:0;" lastn1="160" lastn2="227"><i class="simple-icon-plus"></i></span>',"typenode": false,"inputs": {"input_1": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 128,"pos_y": 260},"3": {"id": 3,"name": "dbclick","data": {"name": ""},"class": "dbclick","html": '<div class="work-flow addclasspop"><ul class="list-unstyled list-inline"><li class="square-box" style="border-color:#1266ab; color:#1266ab;"><span class="alertbox set-danger"><img src="img/alert.svg"> </span><div class="number-icons three-icon"><img src="img/three.png"></div><span class="divtext first-unit" style="color:#009BF2;">Intro to <br>Spirits</span><span class="divimg" val="uk" color-val=""><img src="https://cerapoda.com/zuzu/img/021-clapperboard BL.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:black;">Intro to Spirits <img src="https://cerapoda.com/zuzu/img/021-clapperboard BL.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled pop-list-parent"><li><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><a href="#" class="link" data-for="joe"><div class="overlay"></div><img src="img/user-icon7.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link" data-for="kandace"><div class="overlay"></div><img src="img/user-icon2.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link" data-for="evia"><div class="overlay"></div><img src="img/user-icon3.png"></a></li><li></li></ul><div class="profile-pop" data-pop-for="joe"><div class="profile-pop-title"><div class="pop-pro-img"><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><img src="img/user-icon7.png"></div><div class="profile-pop-title-left"><h5>Joe Smith</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="kandace"><div class="profile-pop-title"><div class="pop-pro-img"><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><img src="img/user-icon2.png"></div><div class="profile-pop-title-left"><h5>kandace Blessing</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="evia"><div class="profile-pop-title"><div class="pop-pro-img"><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><img src="img/user-icon3.png"></div><div class="profile-pop-title-left"><h5>Evia Winnet</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg" alt="setting" class="pop-close"></li><li><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><img src="img/popup3.svg"></a></li><li><img src="img/popup4.svg"></li></ul></div></div><div class="popup" tabindex="-1"><div class="inner-content"><div class="left-popup"><h3>Joe Smith</h3><h4>BFA Student</h4><p>Last Activity: Sep 8, 2020</p></div><div class="right-popup"><ul class="list-unstyled list-inline"><li><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img src="img/black-icon3.svg"></a></li><li><img src="img/black-icon1.svg"></li><li><img src="img/black-icon2.svg"></li></ul></div><div class="clearfix"></div><p><img src="img/alert.svg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim venia quis.</p></div></div></li></ul><span class="close">×</span></div><a href="javascript:void(0)" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0)" class="blue" onmousedown="return false" lastn1="747" lastn2="265" lastid="node-11"><span class="blue-plus" onmousedown="return false" style="background-color:" data-color=""><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 303,"pos_y": 303},"4": {"id": 4,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: #009BF2; color: #009BF2; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Mixing<div>Juices</div></div><span class="divimg" val="cla" color-val="#009BF2"><img src="https://cerapoda.com/zuzu/img/021-clapperboard BL.png" alt="" value="cla" style="margin: 3px; max-height: 20px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:black;">Intro to Spirits <img src="https://cerapoda.com/zuzu/img/021-clapperboard BL.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled pop-list-parent"><li><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon7.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon2.png"></a></li><li><div class="danger-icon"><img src="img/alert.svg"></div><a href="#" class="link"><div class="overlay"></div><img src="img/user-icon3.png"></a></li></ul></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg" alt="setting" class="pop-close"></li><li><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><img src="img/popup3.svg"></a></li><li><img src="img/popup4.svg"></li></ul></div></div></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="159" lastn2="626" lastid="node-5"><span class="blue-plus" onmousedown="return false" data-color="#009BF2" style="color:#009BF2"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 841,"pos_y": 303},"5": {"id": 5,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow addclasspop"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: #009BF2; color: #009BF2; padding-top: 7px; padding-bottom: 7px;"><div class="number-icons"><img src="img/six.png"></div><div class="divtext">Exercise<div>Tequila Sunrise</div></div><span class="divimg" val="si" color-val="#009BF2"><img src="https://cerapoda.com/zuzu/img/060-signing - BLU.png" alt="" value="si" style="margin: 3px; max-height: 20px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:black;">Exercise Tequila Sunrise <img src="https://cerapoda.com/zuzu/img/060-signing - BLU.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled pop-list-parent"><li><a href="#" class="link" data-for="prudence"><div class="overlay"></div><img src="img/user-icon4.png"></a></li><li><a href="#" class="link" data-for="hiram"><div class="overlay"></div><img src="img/user-icon5.png"></a></li><li><a href="#" class="link" data-for="david"><div class="overlay"></div><img src="img/user-icon1.png"></a></li><li><a href="#" class="link" data-for="todd"><div class="overlay"></div><img src="img/user-icon6.png"></a></li><li><a href="#" class="link" data-for="annie"><div class="overlay"></div><img src="img/user-icon9.png"></a></li><li><a href="#" class="link" data-for="jerry"><div class="overlay"></div><img src="img/user-icon8.png"></a></li></ul><div class="profile-pop" data-pop-for="prudence"><div class="profile-pop-title"><div class="pop-pro-img"><img src="img/user-icon4.png"></div><div class="profile-pop-title-left"><h5>Prudence Watkin</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="hiram"><div class="profile-pop-title"><div class="pop-pro-img"><img src="img/user-icon5.png"></div><div class="profile-pop-title-left"><h5>Hiram Sexton</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="david"><div class="profile-pop-title"><div class="pop-pro-img"><img src="img/user-icon1.png"></div><div class="profile-pop-title-left"><h5>David Cruzan</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="todd"><div class="profile-pop-title"><div class="pop-pro-img"><img src="img/user-icon6.png"></div><div class="profile-pop-title-left"><h5>Todd Toomey</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="annie"><div class="profile-pop-title"><div class="pop-pro-img"><img src="img/user-icon9.png"></div><div class="profile-pop-title-left"><h5>Annie Heisler</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div><div class="profile-pop" data-pop-for="jerry"><div class="profile-pop-title"><div class="pop-pro-img"><img src="img/user-icon8.png"></div><div class="profile-pop-title-left"><h5>Jerry Ruiz</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg" alt="setting" class="pop-close"></li><li><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><img src="img/popup3.svg"></a></li><li><img src="img/popup4.svg"></li></ul></div></div></li></ul><span class="close">×</span></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="#009BF2" style="color:#009BF2"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1299.11,"pos_y": 299},"6": {"id": 6,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">How are&nbsp;<div>spirits made</div></div><span class="divimg" val="si" color-val="orange"><img src="https://cerapoda.com/zuzu/img/060-signing - OR.png" alt="" value="si" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="652" lastid="node-7"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 527,"pos_y": 177},"7": {"id": 7,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">What is<div>Tequila</div></div><span class="divimg" val="en" color-val="orange"><img src="https://cerapoda.com/zuzu/img/034-reward - OR.png" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="852" lastid="node-8"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 757,"pos_y": 97},"8": {"id": 8,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="number-icons"><img src="img/nine.png"></div><div class="divtext">What is<div>Tequila</div></div><span class="divimg" val="en" color-val="orange"><img src="https://cerapoda.com/zuzu/img/034-reward - OR.png" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="852" lastid="node-8"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1082.56,"pos_y": 90.1111},"10": {"id": 10,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: green; color: green; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Video intro<div>to spirits</div></div><span class="divimg" val="cla" color-val="green"><img src="https://cerapoda.com/zuzu/img/021-clapperboard -GREE.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="green" style="color:green"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 520,"pos_y": 22.89},"11": {"id": 11,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: green; color: green; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Video intro<div>Mixing</div></div><span class="divimg" val="cla" color-val="green"><img src="https://cerapoda.com/zuzu/img/021-clapperboard -GREE.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="green" style="color:green"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1084.78,"pos_y": -21.2222},"12": {"id": 12,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow addclasspop"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: black; color: black; padding-top: 7px; padding-bottom: 7px;"><span class="alertbox set-danger-new"><img src="img/alert.svg"> </span><div class="number-icons one-icon"><img src="img/one.png"></div><div class="divtext">What is<div>Alcohol</div></div><span class="divimg" val="ch" color-val="black"><img src="https://cerapoda.com/zuzu/img/080-chains.png" alt="" value="ch" style="margin: 3px; max-height: 30px;"></span><div class="pop"><div class="left-side"><h4 class="text" style="color:black;">What Is Alcohol <img src="https://cerapoda.com/zuzu/img/080-chains.png" alt="" value="uk" style="margin: 3px; max-width: 20px;"></h4><ul class="list-inline list-unstyled pop-list-parent"><li><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><a href="#" class="link" data-for="dora"><div class="overlay"></div><img src="img/user-icon10.png"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li><li><a href="#" class="link"></a></li></ul><div class="profile-pop" data-pop-for="dora"><div class="profile-pop-title"><div class="pop-pro-img"><div class="danger-icon popup-danger"><img src="img/alert.svg"></div><img src="img/user-icon10.png"></div><div class="profile-pop-title-left"><h5>Dora Lin</h5><p>BFA Student</p><p class="profile-activity">Last Activity: Sep 8, 2020</p></div></div><div class="profile-pop-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div></div></div><div class="right-side"><ul class="list-unstyled"><li><img src="img/popup1.svg"></li><li><img src="img/popup2.svg" alt="setting" class="pop-close"></li><li><a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><img src="img/popup3.svg"></a></li><li><img src="img/popup4.svg"></li></ul></div></div></li></ul><span class="close">×</span></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="-133" lastn2="435" lastid="node-13"><span class="blue-plus" onmousedown="return false" data-color="black" style="color:black"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 235.778,"pos_y": -133.889}}}}}
editor.start();
editor.zoom_out();
editor.zoom_out();
editor.zoom_out();
editor.zoom_out();
// var dbclick = '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div><span class="blue-plus" onmousedown="return false" style="display: block;height: 25px;width: 25px; text-align: center;padding-top: 2px;top: 62px; left: 113px; padding-left:0;"><i class="simple-icon-plus"></i></span>';
//editor.addNode('dbclick', 1, 1, 50, 100, 'dbclick', { name: ''}, dbclick );//top: -21.2222px; left: 1084.78px;
    var elements = document.getElementsByClassName('drag-drawflow');
    for (var i = 0; i < elements.length; i++) {
      elements[i].addEventListener('touchend', drop, false);
      elements[i].addEventListener('touchmove', positionMobile, false);
      elements[i].addEventListener('touchstart', drag, false );
    }

    var mobile_item_selec = '';
    var mobile_last_move = null;
   function positionMobile(ev) {
     mobile_last_move = event;
   }

   function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      if (ev.type === "touchstart") {
        mobile_item_selec = ev.target.closest(".drag-drawflow").getAttribute('data-node');
      } else {
      ev.dataTransfer.setData("node", ev.target.getAttribute('data-node'));
      }
    }

    function drop(ev) {
      if (ev.type === "touchend") {
        var parentdrawflow = document.elementFromPoint( mobile_last_move.touches[0].clientX, mobile_last_move.touches[0].clientY).closest("#drawflow");
        if(parentdrawflow != null) {
          addNodeToDrawFlow(mobile_item_selec, mobile_last_move.touches[0].clientX, mobile_last_move.touches[0].clientY);
        }
        mobile_item_selec = '';
      } else {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("node");
        addNodeToDrawFlow(data, ev.clientX, ev.clientY);
      }

    }


  var transform = '';
  function showpopup(e) {
    e.target.closest(".drawflow-node").style.zIndex = "9999";
    e.target.children[0].style.display = "block";
    //document.getElementById("modalfix").style.display = "block";

    //e.target.children[0].style.transform = 'translate('+translate.x+'px, '+translate.y+'px)';
    transform = editor.precanvas.style.transform;
    editor.precanvas.style.transform = '';
    editor.precanvas.style.left = editor.canvas_x +'px';
    editor.precanvas.style.top = editor.canvas_y +'px';
    console.log(transform);

    //e.target.children[0].style.top  =  -editor.canvas_y - editor.container.offsetTop +'px';
    //e.target.children[0].style.left  =  -editor.canvas_x  - editor.container.offsetLeft +'px';
    editor.editor_mode = "fixed";

  }

   function closemodal(e) {
     e.target.closest(".drawflow-node").style.zIndex = "2";
     e.target.parentElement.parentElement.style.display  ="none";
     //document.getElementById("modalfix").style.display = "none";
     editor.precanvas.style.transform = transform;
       editor.precanvas.style.left = '0px';
       editor.precanvas.style.top = '0px';
      editor.editor_mode = "edit";
   }

    function changeModule(event) {
      var all = document.querySelectorAll(".menu ul li");
        for (var i = 0; i < all.length; i++) {
          all[i].classList.remove('selected');
        }
      event.target.classList.add('selected');
    }

    function changeMode(option) {

    //console.log(lock.id);
      if(option == 'lock') {
        lock.style.display = 'none';
        unlock.style.display = 'block';
      } else {
        lock.style.display = 'block';
        unlock.style.display = 'none';
      }

    }
    $(function() {
    rightpop++;
    });
	// line click code
    $('body').on('click','.drawflow .connection .main-path',function(){
		var conclass=$(this).closest('.connection').attr('class').split('node_in_');
		newids=(conclass[1].split(' ')[0]);
		$('#exampleModalRight .for-edit-option').attr('edit-id',newids);
		$('#exampleModalRight .for-edit-option .static-title').html($('.drawflow').find('#'+newids+' .square-box .divtext').html());
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value',$('.drawflow').find('#'+newids+' .square-box .divimg').attr('val'));
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select img').attr('src',$('.drawflow').find('#'+newids+' .square-box .divimg img').attr('src'));
		$('#exampleModalRight .main-icons .colorpicker').val($('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
        $('#exampleModalRight').modal('show');
    })
	// for edit box 
	$('body').click(function(e) {
		if (!$(e.target).closest('.addclasspop').length){
			$('.addclasspop .close').trigger('click');
		}
		if (!$(e.target).closest('#node-3').length || !$(e.target).closest('#node-5').length ){
			$(this).closest('.drawflow-node').find('a.[data-target=#collapseExample]').trigger('click');
		}
	});
	$('body').on('click','.modal-footer .editupdate',function(){
		editids=$(this).closest('.sidebarpopup').find('.static-title').attr('edit-id');
		valtest=$(this).closest('.modal-dialog').find('.static-title').html();
		if(valtest.includes('<div>') || ((valtest.match(/<br>/g) || []).length>1)){
			$('.drawflow').find('#'+newids+' .square-box').css('padding-top','7px');
			$('.drawflow').find('#'+newids+' .square-box').css('padding-bottom','7px');
		}else{
			$('.drawflow').find('#'+newids+' .square-box').css('padding-top','15px');
			$('.drawflow').find('#'+newids+' .square-box').css('padding-bottom','15px');
		}
		$('.drawflow').find('#'+newids+' .divtext').html($(this).closest('.modal-dialog').find('.static-title').html());//option:selected
		colorcode=$(this).closest('.modal-dialog').find('.colorpicker').val();
		if(colorcode){}else{
			colorcode='thumbnail';
		}
		valn=$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value');
		$('.drawflow').find('#'+newids+' .divimg').html('<img src="'+$(this).closest('.modal-dialog').find('.vodiapicker [value='+valn+']').attr('data-'+colorcode)+'" alt="" value="'+valn+'" style="margin: 3px; max-height: 30px;">');
		$('.drawflow').find('#'+newids+' .divimg').attr('val',valn);
		$('.drawflow').find('#'+newids+' .divimg').attr('color-val',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('.node_in_'+newids+' .main-path.selected').attr('style','stroke:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' li.square-box').css('border-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' li.square-box').css('color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' .outputs .output_1').attr('style','background-color:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('style','color:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('#exampleModalRight button.close').trigger('click');
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
	});
	$('.color-line ul li a').click(function(){
		$('.colorpicker').val($(this).attr('data-color'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$(this).attr('data-color'));
	});

	$(document).ready(function(){
		$('body').on('dragstart','img',function(event) { event.preventDefault(); });
		$('body').on('click','#node-3 .list-unstyled a img, #node-5 .list-unstyled a img',function(){
			$('#drawflow .drawflow').toggleClass('bottomtop');
			if($('#drawflow .drawflow').hasClass('bottomtop')){
				$('#drawflow .drawflow').css('transform','translate(0px, -346px) scale(0.8)');
			}else{
				$('#drawflow .drawflow').css('transform','translate(0px, 0px) scale(0.8)');
			}
			$(window).trigger('resize');
			$(window).resize();
		})
		$('body').on('click','#node-12 .list-unstyled a img',function(){
			$('#drawflow .drawflow').toggleClass('bottomtop');
			$('#drawflow .drawflow').css('transform','translate(0px, 0px) scale(0.8)');
		})
		$('#drawflow').find('#node-3').closest('.parent-node').append('<svg class="connection node_in_node-3 node_out_node-2 output_1 input_2 connection-blue-row" data-in="node-3"><path class="main-path" d=" M 242 340 C 272.75 340 272.75 342 303.5  342" style="stroke:#009BF2"></path></svg>');
		$('#drawflow').find('#node-4').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-4"><path class="main-path" d=" M 456.5 342 C 649 342 649 344 841.5  344" style="stroke:#009BF2"></path></svg>');
		$('#drawflow').find('#node-5').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-5"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1147.0555792914497 344.00000678168396 1147.0555792914497 340.00000678168396 1299.6110534667969  340.00000678168396" style="stroke:#009BF2"></path></svg>');
		$('#drawflow').find('#node-6').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-6 output_1 input_2 strokeblue"><path class="main-path" d=" M 680.5 218 C 761 218 761 344 841.5  344" style="stroke:orange"></path></svg><svg class="connection node_in_node-6 node_out_node-3 output_1 input_2 strokeblue"><path class="main-path" d=" M 456.5 342 C 492 342 492 218 527.5  218" style="stroke:orange"></path></svg><svg class="connection node_in_node-7 node_out_node-6 output_1 input_2 connection-blue-row" data-in="node-7"><path class="main-path" d=" M 680.5 218 C 719 218 719 138 757.5  138" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-7').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-7 output_1 input_1 strokeorange"><path class="main-path" d=" M 910.5 138 C 913.75 138 913.75 301 917  301" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-8').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-8 output_1 input_2 strokeorange"><path class="main-path" d=" M 1236.0555521647136 131.1111111111111 C 1267.8333028157554 131.1111111111111 1267.8333028157554 340.00000678168396 1299.6110534667969  340.00000678168396" style="stroke:orange"></path></svg><svg class="connection node_in_node-8 node_out_node-4 output_1 input_2 strokeblue"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1038.777855767144 344.00000678168396 1038.777855767144 131.1111178927951 1083.0556064181858  131.1111178927951" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-10').closest('.parent-node').append('<svg class="connection node_in_node-10 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-10"><path class="main-path" d="M 455.5 344 C 488 344 488 63.888885498046875 520.5  63.888885498046875" style="stroke:green"></path></svg><svg class="connection node_in_node-7 node_out_node-10 output_1 input_2 strokegreen"><path class="main-path" d=" M 673.5000101725261 63.88888888888888 C 715.499996609158 63.88888888888888 715.499996609158 138.00002034505206 757.4999830457899  138.00002034505206"></path></svg>');
		$('#drawflow').find('#node-11').closest('.parent-node').append('<svg class="connection node_in_node-11 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-11"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1039.8889668782551 344.00000678168396 1039.8889668782551 19.777770996093754 1085.277828640408  19.777770996093754" style="stroke:green"></path></svg><svg class="connection node_in_node-5 node_out_node-11 output_1 input_2 strokegreen"><path class="main-path" d=" M 1238.2777743869358 19.777798122829857 C 1268.9444139268662 19.777798122829857 1268.9444139268662 340.00000678168396 1299.6110534667969  340.00000678168396"></path></svg>');
		$('#drawflow').find('#node-12').closest('.parent-node').append('<svg class="connection node_in_node-12 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-12"><path class="main-path" d=" M 444.3888854980469 343.3334011501736 C 548.4444342719185 343.3334011501736 132.2222391764323 -92.88888888888886 236.27778795030383  -92.88888888888886" style="stroke:black"></path></svg><svg class="connection node_in_node-10 node_out_node-12 output_1 input_2 strokeblack"><path class="main-path" d=" M 389.2778015136719 -92.88886176215276 C 454.8888990614149 -92.88886176215276 454.8888990614149 63.88892957899306 520.499996609158  63.88892957899306"></path></svg>');
		
		$('#drawflow').find('#node-3 .output.output_1').attr('style','background-color:#009BF2;');
		$('#drawflow').find('#node-4 .output.output_1').attr('style','background-color:#009BF2;');
		$('#drawflow').find('#node-5 .output.output_1').attr('style','background-color:#009BF2;');
		$('#drawflow').find('#node-6 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-7 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-8 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-10 .output.output_1').attr('style','background-color:green;');
		$('#drawflow').find('#node-11 .output.output_1').attr('style','background-color:green;');
		$('#drawflow').find('#node-12 .output.output_1').attr('style','background-color:black;');
		//popupcode
		 $('#node-4 .addclasspop').click(function(){
            $(this).find('.close').show();
            $(this).closest('.drawflow-node').addClass('bigboxdesign');
            $(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
            $(this).closest('.drawflow-node').css('top','230px');
            $(this).closest('.drawflow-node').css('left','1299px');
            $(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
            $(this).closest('.drawflow-node').find('.square-box').css('height','230px');
            $(this).closest('.drawflow-node').find('.square-box').css('width','346px');
            //$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('old-p',$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p'));
            //$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p','M 582.2777811686198 -90.38884480794269 C 607.6666768391926 -90.38884480794269 506.11109415690095 63.3333740234375 531.4999898274739  63.3333740234375');
        });
		//poupcode
		$('#node-5 .addclasspop').click(function(){
			$(this).find('.close').show();
			$(this).closest('.drawflow-node').addClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
			$(this).closest('.drawflow-node').css('top','230px');
			$(this).closest('.drawflow-node').css('left','1299px');
			$(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
			$(this).closest('.drawflow-node').find('.square-box').css('height','230px');
			$(this).closest('.drawflow-node').find('.square-box').css('width','346px');
			//$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('old-p',$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p'));
			//$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p','M 582.2777811686198 -90.38884480794269 C 607.6666768391926 -90.38884480794269 506.11109415690095 63.3333740234375 531.4999898274739  63.3333740234375');
		});
		//poupcode
		$('#node-12 .addclasspop').click(function(){
			$(this).find('.close').show();
			$(this).closest('.drawflow-node').addClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
			$(this).closest('.drawflow-node').css('top','-203.889px');
			$(this).closest('.drawflow-node').css('left','235.778px');
			$(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
			$(this).closest('.drawflow-node').find('.square-box').css('height','230px');
			$(this).closest('.drawflow-node').find('.square-box').css('width','346px');
			$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('old-p',$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p'));
			$('body').find('.connection.node_in_node-10.node_out_node-12.output_1.input_2').attr('p','M 582.2777811686198 -90.38884480794269 C 607.6666768391926 -90.38884480794269 506.11109415690095 63.3333740234375 531.4999898274739  63.3333740234375');
		});
		//poupcode
		$('#node-3 .addclasspop').click(function(){
			$(this).find('.close').show();
			$(this).closest('.drawflow-node').addClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('old-style',$(this).closest('.drawflow-node').attr('style'));
			$(this).closest('.drawflow-node').find('.square-box').attr('old-style',$(this).closest('.drawflow-node').find('.square-box').attr('style'));
			$('#node-2').attr('old-stype',$('#node-2').attr('style'));
			$('#node-6').attr('old-stype',$('#node-6').attr('style'));
			$(this).closest('.drawflow-node').css('top','231px');
			$(this).closest('.drawflow-node').css('left','303px');
			var firstheight = $(this).closest('.drawflow-node').find('.pop').height();
            		$(this).closest('.drawflow-node').find('.square-box').css('height',firstheight);
			//$(this).closest('.drawflow-node').find('.square-box').css('height','230px');
			$(this).closest('.drawflow-node').find('.square-box').css('width','346px');
			$('#node-3').css('z-index','99');
			//$('#node-2').css('left','80px');
			//$('#node-6').css('top','125px');
			/*$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('old-d',$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('d'));
			$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('d','M 142 340 C 272.75 340 272.75 342 303.5  342');
			$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('old-d',$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('d'));
			$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('d',' M 678.5000174386159 166.00001743861606 C 759.9999999999999 166.00001743861606 759.9999999999999 344.00005231584817 841.4999825613838  344.00005231584817');
			$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('old-d',$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('d'));
			$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('d',' M 649.4999999999999 341.9999389648437 C 710.4999999999999 341.9999389648437 466.4999999999999 165.99999999999997 527.4999999999999  165.99999999999997');
			$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('old-d',$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('d'));
			$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('d',' M 680.5000523158482 166.42857142857142 C 719.000026157924 166.42857142857142 719.000026157924 138.0000348772321 757.4999999999999  138.0000348772321');
			$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('old-d',$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d'));
			$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d',' M 622.4999999999999 340.54765973772317 C 815.6071254185266 340.54765973772317 43.17862374441964 -92.88092041015622 236.2857491629464  -92.88092041015622');
			$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('old-d',$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d'));
			$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d',' M 649.4999999999999 341.9999389648437 C 713.9999999999999 341.9999389648437 455.9999999999999 63.89996337890625 520.4999999999999  63.89996337890625');// 
			*/
		});
		//poupcode close
		$('body').on('click','#node-4.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').css('top','299px');
			$(this).closest('.drawflow-node').css('left','1299.11px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
		})
		
		$('body').on('click','#node-5.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').css('top','299px');
			$(this).closest('.drawflow-node').css('left','1299.11px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
		})
		$('body').on('click','#node-12.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').css('top','-133.889px');
			$(this).closest('.drawflow-node').css('left','235.778px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
		})
		$('body').on('click','#node-3.bigboxdesign .addclasspop .close',function(){
			$(this).hide();
			$(this).closest('.drawflow-node').removeClass('bigboxdesign');
			$(this).closest('.drawflow-node').attr('style',$(this).closest('.drawflow-node').attr('old-style'));
			$(this).closest('.drawflow-node').find('.square-box').attr('style',$(this).closest('.drawflow-node').find('.square-box').attr('old-style'));
			//$('#node-2').attr('style',$('#node-2').attr('old-style'));
			//$('#node-6').attr('style',$('#node-6').attr('old-style'));
			$(this).closest('.drawflow-node').css('top','303px');
			$(this).closest('.drawflow-node').css('left','303px');
			$(this).closest('.drawflow-node').find('.square-box').css('height','');
			$(this).closest('.drawflow-node').find('.square-box').css('width','');
			$('#node-2').css('left','128px');
			//$('#node-6').css('top','177px');
			/*$('body').find('.connection.node_in_node-3.node_out_node-2.output_1.input_2 .main-path').attr('d',' M 242 340 C 272.75 340 272.75 342 303.5  342');
			$('.connection.node_in_node-4.node_out_node-6.output_1.input_2.strokeblue .main-path').attr('d',' M 680.5 218 C 761 218 761 344 841.5  344');
			$('body').find('.connection.node_in_node-6.node_out_node-3.output_1.input_2 .main-path').attr('d','M 456.5 342 C 492 342 492 218 527.5  218');
			$('.connection.node_in_node-7.node_out_node-6.output_1.input_2.connection-blue-row .main-path').attr('d',' M 680.5 218 C 719 218 719 138 757.5  138');
			$('.connection.node_in_node-12.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d',' M 444.3888854980469 343.3334011501736 C 548.4444342719185 343.3334011501736 132.2222391764323 -92.88888888888886 236.27778795030383  -92.88888888888886');
			$('.connection.node_in_node-10.node_out_node-3.output_1.input_2.connection-blue-row .main-path').attr('d','M 455.5 344 C 488 344 488 63.888885498046875 520.5  63.888885498046875');
			*/
		});
		$('.drawflow').bind('mousewheel', function(e){
			e.preventDefault();
		});
		$('#collapseAuthorization').on('mouseover','a',function(e){
			e.preventDefault();
		})
	});
//test for iterating over child elements
var langArray = [];
$('.vodiapicker option').each(function(){
  var img = $(this).attr("data-thumbnail");
  var text = this.innerText;
  var value = $(this).val();
  var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
  langArray.push(item);
})

$('#a').html(langArray);

//Set the button value to the first el of the array
$('.btn-select').html(langArray[0]);
$('.btn-select').attr('value', 'en');

//change button stuff on click
$('#a li').click(function(){
   var img = $(this).find('img').attr("src");
   var value = $(this).find('img').attr('value');
   var text = this.innerText;
   var item = '<li><img src="'+ img +'" alt="" /></li>';
  $('.btn-select').html(item);
  $('.btn-select').attr('value', value);
  $(".b").toggle();
  //console.log(value);
});
$(".btn-select").click(function(){
        $(".b").toggle();
    });
//check local storage for the lang
var sessionLang = localStorage.getItem('lang');
if (sessionLang){
  //find an item with value of sessionLang
  var langIndex = langArray.indexOf(sessionLang);
  $('.btn-select').html(langArray[langIndex]);
  $('.btn-select').attr('value', sessionLang);
} else {
   var langIndex = langArray.indexOf('ch');
  console.log(langIndex);
  $('.btn-select').html(langArray[langIndex]);
  //$('.btn-select').attr('value', 'en');
}
$(".msg-profile").click(function(e){
     e.preventDefault();
    $(".blue-status").fadeIn(300,function(){$(this).focus();});
});

$('.blue-status').on('click', '.close', function() {
   $(".blue-status").fadeOut(300);
});
$(".blue-status").on('blur',function(){
    $(this).fadeOut(300);
});

// SUMIT POPUP JS 24-11-20

$("body").on('click', ".link[data-for]", function(e){
	e.preventDefault();
	e.stopPropagation();
	var $parents = $(this).attr('data-for');
	var $customPop = $(this).attr('data-overlay');
	$("div[data-pop-for='" + $parents + "']").addClass("pop-active");
	
	$("div[data-pop-for='" + $parents + "']").siblings(".profile-pop").removeClass("pop-active");
	$(this).closest('.pop-list-parent').addClass('pop-active');
	var newheight = $(this).closest('.pop').height();
	console.log(newheight);
	$(this).closest('.square-box').css('height',newheight);
});

$("body").on('click', ".pop-close", function(e){
	e.preventDefault();
	e.stopPropagation();
	$(this).closest('.pop').find('.profile-pop').removeClass('pop-active');
	$(this).closest('.pop').find('.pop-list-parent').removeClass("pop-active");
	var newheight1 = $(this).closest('.pop').height();
	$(this).closest('.square-box').css('height',newheight1);
});

$('<div class="pop-close-wrap"><a href="javascript:void(0)" class="pop-close">Back to List</a></div>').appendTo('.profile-pop-content');
$('.top-bar-toggle a[aria-expanded="true"]').click(function(){
	$('#drawflow .drawflow').css('transform', 'translate(0px, 0px) scale(0.8)');
});

$('.first-menus a').click(function(){
	if(!$(this).hasClass('disablea')){
	   if($(this).attr('aria-controls') == 'collapseAuthorization'){
			$('.first-menus a').removeClass('active');
			$(this).addClass('active');
			$('.inner-level-menu li').show();
		} else {
			$('.first-menus a').removeClass('active');
			$(this).addClass('active');
			var dataControl = $(this).attr('aria-controls');
			$('.inner-level-menu li').hide();
			$('.inner-level-menu li[data-control-item='+dataControl+']').show();
		}
	}
});

$(document).ready(function() {
	$(".bottom-section .collapse").resizable({
		handles: 'n, s'
	});

});

