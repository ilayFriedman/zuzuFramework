// chart drawflow
    var id = document.getElementById("drawflow");
    const editor = new Drawflow(id);
    editor.reroute =null;
    var rightpop=100;
    var leftpopup=6;
    var rightpopnext=0;
editor.drawflow ={"drawflow": {"Home": {"data": {"1": {"id": 1,"name": "welcome","data": {},"class": "help","html": "\n","typenode": false,"inputs": {},"outputs": {},"pos_x": 50,"pos_y": 50},"2": {"id": 2,"name": "dbclick","data": {"name": ""},"class": "dbclick","html": '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div><span class="blue-plus" onmousedown="return false" style="display: block;height: 25px;width: 25px; text-align: center;padding-top: 2px;top: 62px; left: 113px; padding-left:0;" lastn1="160" lastn2="227"><i class="simple-icon-plus"></i></span>',"typenode": false,"inputs": {"input_1": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 128,"pos_y": 243},"3": {"id": 3,"name": "dbclick","data": {"name": ""},"class": "dbclick","html": '<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="padding-top: 7px; padding-bottom: 7px; border-color: #009BF2; color: #009BF2;"><div class="divtext">intro to&nbsp;<div>spirits</div></div><span class="divimg" val="cla" color-val="#009BF2"><img src="img/021-clapperboard BL.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="159" lastn2="426" lastid="node-5"><span class="blue-plus" onmousedown="return false" data-color="#009BF2" style="color:#009BF2" lastn1="160" lastn2="427"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 303,"pos_y": 303},"4": {"id": 4,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: #009BF2; color: #009BF2; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Mixing<div>Juices</div></div><span class="divimg" val="cla" color-val="#009BF2"><img src="img/021-clapperboard BL.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="159" lastn2="626" lastid="node-5"><span class="blue-plus" onmousedown="return false" data-color="#009BF2" style="color:#009BF2"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 841,"pos_y": 303},"5": {"id": 5,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: #009BF2; color: #009BF2; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Exercise<div>Tequila Sunrise</div></div><span class="divimg" val="si" color-val="#009BF2"><img src="img/060-signing - BLU.png" alt="" value="si" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="#009BF2" style="color:#009BF2"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1299.11,"pos_y": 299},"6": {"id": 6,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">How are&nbsp;<div>spirits made</div></div><span class="divimg" val="si" color-val="orange"><img src="img/060-signing - OR.png" alt="" value="si" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="652" lastid="node-7"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 527,"pos_y": 177},"7": {"id": 7,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">What is<div>Tequila</div></div><span class="divimg" val="en" color-val="orange"><img src="img/034-reward - OR.png" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="852" lastid="node-8"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 757,"pos_y": 97},"8": {"id": 8,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: orange; color: orange; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">What is<div>Tequila</div></div><span class="divimg" val="en" color-val="orange"><img src="img/034-reward - OR.png" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue" lastn1="139" lastn2="852" lastid="node-8"><span class="blue-plus" onmousedown="return false" data-color="orange" style="color:orange"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1082.56,"pos_y": 90.1111},"10": {"id": 10,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: green; color: green; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Video intro<div>to spirits</div></div><span class="divimg" val="cla" color-val="green"><img src="img/021-clapperboard -GREE.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="green" style="color:green"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 520,"pos_y": 22.89},"11": {"id": 11,"name": "dbclick","data": {"name": ""},"class": "dbclick","html":'<div class="work-flow"><ul class="list-unstyled list-inline"> <li class="square-box" style="border-color: green; color: green; padding-top: 7px; padding-bottom: 7px;"><div class="divtext">Video intro<div>Mixing</div></div><span class="divimg" val="cla" color-val="green"><img src="img/021-clapperboard -GREE.png" alt="" value="cla" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href="javascript:void(0);" data-backdrop="static" class="orange"><span class="orange-plus"><i class="simple-icon-plus"></i></span></a> <a href="javascript:void(0);" class="blue"><span class="blue-plus" onmousedown="return false" data-color="green" style="color:green"><i class="simple-icon-plus"></i></span></a>',"typenode": false,"inputs": {"input_1": {"connections": []},"input_2": {"connections": []},"input_3": {"connections": []}},"outputs": {"output_1": {"connections": []}},"pos_x": 1084.78,"pos_y": -21.2222}}}}}
editor.start();//top: -594.25px; left: 1007.75px;//top: -133.889px; left: 235.778px;//top: -228px; left: 484px;/top: -374.556px; left: 761.778px;//top: -484.5px; left: 1005.25px;//top: -392.25px; left: 1289px;
editor.zoom_out();
editor.zoom_out();
editor.zoom_out();
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
// end chart drawflow

    $('body').on('click', function(e) {
  $('body').addClass('changeCursor');
  
});
    $(function() {
    rightpop++;
    });
	// click on line 
    $('body').on('click','.drawflow .connection .main-path',function(){
		$('body').find('.main-path.selected').removeClass('selected');
		$(this).addClass('selected');
		var conclass=$(this).closest('.connection').attr('class').split('node_in_');
		newids=(conclass[1].split(' ')[0]);
		var conclass1=$(this).closest('.connection').attr('class').split('node_out_');
		newids1=(conclass1[1].split(' ')[0]);
		$('#exampleModalRight .for-edit-option').attr('edit-id',newids);
		$('#exampleModalRight .unit-label-section .right').html($('.drawflow').find('#'+newids+' .square-box .divtext').html());
		$('#exampleModalRight .unit-icon').find('.lang-select .btn-select').attr('value',$('.drawflow').find('#'+newids+' .square-box .divimg').attr('val'));
		$('#exampleModalRight .unit-icon').find('.lang-select .btn-select img').attr('src',$('.drawflow').find('#'+newids+' .square-box .divimg img').attr('src'));
		$('.colorpicker').val($('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
		if(newids1!='node-2'){
			$('#exampleModalRight .glyph').find('img').attr('src',$('.drawflow').find('#'+newids1+' .square-box .divimg img').attr('src'));
			$('#exampleModalRight .glyph').find('img').css('opacity','1');
			$('#exampleModalRight .unit-label-section .left').html($('.drawflow').find('#'+newids1+' .square-box .divtext').html()).css('color', $('.drawflow').find('#'+newids1+' .square-box .divimg').attr('color-val')).css('border-color', $('.drawflow').find('#'+newids1+' .square-box .divimg').attr('color-val'));
        }else{
			$('#exampleModalRight .unit-label-section .left').html('Start').css('color','black');
			$('#exampleModalRight .unit-label-section .left').html('Start').css('border-color','black');
			$('#exampleModalRight .glyph').find('img').attr('src','img/start.png');
			$('#exampleModalRight .glyph').find('img').css('opacity','1');
		}
		$('#exampleModalRight').modal('show');
		colorcode=$('.colorpicker').val();
		if(colorcode=='#009BF2'){
			$('.color-line li a.bluecolors').trigger('click');
		}else{
			if(colorcode){
				$('.color-line li a[data-color='+colorcode+']').trigger('click');
			}else{
				$('.color-line li a.bluecolors').trigger('click');
			}
		}
    })
	// end click on line
	//right sidebar click
	$('body').on('click','.modal-footer .editupdate',function(){
		console.log('clicked');
		editids=$(this).closest('.sidebarpopup').find('.static-title').attr('edit-id');
		valtest=$(this).closest('.modal-dialog').find('.static-title').html();
		if(valtest.includes('<div>') || ((valtest.match(/<br>/g) || []).length>1)){
			$('.drawflow').find('#'+newids+' .square-box').css('padding-top','7px');
			$('.drawflow').find('#'+newids+' .square-box').css('padding-bottom','7px');
		}else{
			$('.drawflow').find('#'+newids+' .square-box').css('padding-top','10px');
			$('.drawflow').find('#'+newids+' .square-box').css('padding-bottom','15px');
		}
		$('.drawflow').find('#'+newids+' .divtext').html($(this).closest('.modal-dialog').find('.static-title').html());//option:selected
		colorcode=$(this).closest('.modal-dialog').find('.colorpicker').val();
		if(colorcode){}else{
			colorcode='thumbnail';
		}
		valn=$('#exampleModalRight .unit-icon').find('.lang-select .btn-select').attr('value');
		$('.drawflow').find('#'+newids+' .divimg').html('<img src="'+$(this).closest('.modal-dialog').find('.vodiapicker [value='+valn+']').attr('data-'+colorcode)+'" alt="" value="'+valn+'" style="margin: 3px; max-height: 30px;">');
		$('.drawflow').find('#'+newids+' .divimg').attr('val',valn);
		$('.drawflow').find('#'+newids+' .divimg').attr('color-val',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('.main-path.selected').attr('style','stroke:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' li.square-box').css('border-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' li.square-box').css('color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' .outputs .output_1').attr('style','background-color:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('style','color:'+$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
		$('#exampleModalRight button.close').trigger('click');
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',$(this).closest('.modal-dialog').find('.colorpicker').val());
	
	});
	// end rightsidebar click
	//add new box
	$('.color-line ul li a').click(function(){
		$('.colorpicker').val($(this).attr('data-color'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$(this).attr('data-color'));
		$('.sidebarpopup .custom-switch label.custom-switch-btn').css('background-color',$(this).attr('data-color'));
		$('.sidebarpopup .chapter-slider1 .slider').attr('class','slider');
		$('.sidebarpopup .chapter-slider1 .slider').addClass($(this).attr('data-color'));
		$('.sidebarpopup .btn.btn-primary.editupdate').css('background-color',$(this).attr('data-color'));
		$('.sidebarpopup .chapter-slider1 .range-per-text').css('background-color',$(this).attr('data-color'));
		$('.sidebarpopup .custom-switch label.custom-switch-btn').css('border-color',$(this).attr('data-color'));
		$('.sidebarpopup .btn.btn-primary.editupdate').css('border-color',$(this).attr('data-color'));
		$('.sidebarpopup .static-title').css('color',$(this).attr('data-color'));
		$('.sidebarpopup .static-title').css('border-color',$(this).attr('data-color'));
		colorcode=$('.colorpicker').val();
		if(colorcode){}else{
			colorcode='thumbnail';
		}
		newimgrt=$('#exampleModalRight .unit-icon').find('.lang-select .btn-select').attr('value');
		$('#exampleModalRight .unit-icon').find('.lang-select .btn-select img').attr('src',$('.vodiapicker').find('[value='+newimgrt+']').attr('data-'+colorcode));
		jQuery('.unit-icon #a img').each(function () {
			var currentColor = jQuery(this).attr('value');
			jQuery(this).attr('src', $('.vodiapicker').find('[value='+currentColor+']').attr('data-'+colorcode));
		});
		
	});
		$('body').on('click','.discard',function(){
		$('body').find('.new_unit').closest('.drawflow-node').remove();
		$('body').find('.new_unit_line').remove();
	})
	$('body').on('click','.editupdate',function(){
		$('body').find('.new_unit').removeClass('new_unit');
		$('body').find('.new_unit_line').removeClass('new_unit_line');
	})
    $('body').on('click','#node-2 .blue-plus',function(e){
		$('.sidebarpopup').addClass('defaultColor');
		$('.sidebarpopup .nav-tabs, .sidebarpopup .custom-switch label.custom-switch-btn').css('background-color','#009BF2');
		$('.sidebarpopup .custom-switch label.custom-switch-btn').css('background-color',$(this).attr('data-color'));
		$('.sidebarpopup .chapter-slider1 .slider').attr('class','slider');
		$('.sidebarpopup .btn.btn-primary.editupdate, .sidebarpopup .chapter-slider1 .range-per-text').css('background-color','#009BF2');
		
		$('.sidebarpopup .custom-switch label.custom-switch-btn, .sidebarpopup .btn.btn-primary.editupdate, .sidebarpopup .static-title, .unit-color-section .left').css('border-color','#009BF2');
		$('.sidebarpopup .static-title, .unit-color-section .left').css('color','#009BF2');

		$nodethis='node-2';
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		n1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		n2=parseInt(net2.replace(" ",""));
		n1=n1+59;
		n2=n2+170;
        $flag=0;
		var divtext=$('#divtext').val();
		var dbclick = '<div class=\"work-flow new_unit\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\"><img src=\"img/reward.png\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0)\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0)\" class="blue" onmousedown="return false"><span class=\"blue-plus\" onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
       $(this).attr('lastn1',n1);
       $(this).attr('lastn2',n2);
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		newnet1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		newnet2=parseInt(net2.replace(" ",""));
		n2=parseInt(newnet2)+175;
		var eachi=0;
		var drawflowX= new Array();
		var drawflowY= new Array();
		$( ".drawflow-node" ).each(function(){
			topbot1=$(this).attr('style');
			topbot1=topbot1.replace("px","");
			topbot1=topbot1.replace("px","");
			newtopbot2=topbot1.split(";");
			net1=newtopbot2[0].replace("top:","");
			net1=parseInt(net1.replace(" ",""));
			net2=newtopbot2[1].replace("left:","");
			net2=parseInt(net2.replace(" ",""));
			drawflowX[eachi]=net1;
			drawflowY[eachi]=net2;
			eachi++;
		});
		for (i = 0; i < drawflowX.length; i++){
				if(parseInt(drawflowX[i] - 89)<=parseInt(n1) && parseInt(drawflowX[i]+89)>=parseInt(n1)){
					if(parseInt(drawflowY[i] - 163)<=parseInt(n2) && parseInt(drawflowY[i])+163>=parseInt(n2)){
						n1=drawflowX[i]+101;
						i=0;
					}
				}
				//console.log('ibT='+i+'Y='+drawflowY[i]+'X='+drawflowX[i]+'cun1='+n1+'cun2='+n2);
		}
		editor.addNode('dbclick', 3, 1, n2, n1, 'dbclick', { name: ''}, dbclick );
		$('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('blue-div');
		n3=(27+n1);
		n4=n3-1;
		$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		net1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		net2=parseInt(net2.replace(" ",""));
		n3=(n1+39);
		n4=n3-1;
		$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
		$(this).attr('lastid',$nodelast);
		$('.drawflow').find('.parent-node').last().append('<svg class=\"connection new_unit_line node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 56)+' '+(net1+97)+' C '+(n2 - 27.25)+' '+(net1+97)+' '+(n2 - 27.25)+' '+n4+' '+(n2)+'  '+n4+'\"></path></svg>');
		$('.drawflow').find('.connection .main-path.selected').removeClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').addClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').click();
		e.preventDefault();
		e.stopPropagation();
		e.returnValue = false;
    })
	$('#drawflow').find('#node-3').closest('.parent-node').append('<svg class="connection node_in_node-3 node_out_node-2 output_1 input_2 connection-blue-row" data-in="node-3"><path class="main-path" d=" M 242 340 C 272.75 340 272.75 342 303.5  342" style="stroke:#009BF2"></path></svg>');
		$('#drawflow').find('#node-4').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-4"><path class="main-path" d=" M 456.5 342 C 649 342 649 344 841.5  344" style="stroke:#009BF2"></path></svg>');
		$('#drawflow').find('#node-5').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-5"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1147.0555792914497 344.00000678168396 1147.0555792914497 340.00000678168396 1299.6110534667969  340.00000678168396" style="stroke:#009BF2"></path></svg>');
		$('#drawflow').find('#node-6').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-6 output_1 input_2 strokeblue"><path class="main-path" d=" M 680.5 218 C 761 218 761 344 841.5  344" style="stroke:orange"></path></svg><svg class="connection node_in_node-6 node_out_node-3 output_1 input_2 strokeblue"><path class="main-path" d=" M 456.5 342 C 492 342 492 218 527.5  218" style="stroke:orange"></path></svg><svg class="connection node_in_node-7 node_out_node-6 output_1 input_2 connection-blue-row" data-in="node-7"><path class="main-path" d=" M 680.5 218 C 719 218 719 138 757.5  138" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-7').closest('.parent-node').append('<svg class="connection node_in_node-4 node_out_node-7 output_1 input_1 strokeorange"><path class="main-path" d=" M 910.5 138 C 913.75 138 913.75 301 917  301" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-8').closest('.parent-node').append('<svg class="connection node_in_node-5 node_out_node-8 output_1 input_2 strokeorange"><path class="main-path" d=" M 1236.0555521647136 131.1111111111111 C 1267.8333028157554 131.1111111111111 1267.8333028157554 340.00000678168396 1299.6110534667969  340.00000678168396" style="stroke:orange"></path></svg><svg class="connection node_in_node-8 node_out_node-4 output_1 input_2 strokeblue"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1038.777855767144 344.00000678168396 1038.777855767144 131.1111178927951 1083.0556064181858  131.1111178927951" style="stroke:orange"></path></svg>');
		$('#drawflow').find('#node-10').closest('.parent-node').append('<svg class="connection node_in_node-10 node_out_node-3 output_1 input_2 connection-blue-row" data-in="node-10"><path class="main-path" d="M 455.5 344 C 488 344 488 63.888885498046875 520.5  63.888885498046875" style="stroke:green"></path></svg><svg class="connection node_in_node-7 node_out_node-10 output_1 input_2 strokegreen"><path class="main-path" d=" M 673.5000101725261 63.88888888888888 C 715.499996609158 63.88888888888888 715.499996609158 138.00002034505206 757.4999830457899  138.00002034505206"></path></svg>');
		$('#drawflow').find('#node-11').closest('.parent-node').append('<svg class="connection node_in_node-11 node_out_node-4 output_1 input_2 connection-blue-row" data-in="node-11"><path class="main-path" d=" M 994.5001051161024 344.00000678168396 C 1039.8889668782551 344.00000678168396 1039.8889668782551 19.777770996093754 1085.277828640408  19.777770996093754" style="stroke:green"></path></svg><svg class="connection node_in_node-5 node_out_node-11 output_1 input_2 strokegreen"><path class="main-path" d=" M 1238.2777743869358 19.777798122829857 C 1268.9444139268662 19.777798122829857 1268.9444139268662 340.00000678168396 1299.6110534667969  340.00000678168396"></path></svg>');
		$('#drawflow').find('#node-3 .output.output_1').attr('style','background-color:#009BF2;');
		$('#drawflow').find('#node-4 .output.output_1').attr('style','background-color:#009BF2;');
		$('#drawflow').find('#node-5 .output.output_1').attr('style','background-color:#009BF2;');
		$('#drawflow').find('#node-6 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-7 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-8 .output.output_1').attr('style','background-color:orange;');
		$('#drawflow').find('#node-10 .output.output_1').attr('style','background-color:green;');
		$('#drawflow').find('#node-11 .output.output_1').attr('style','background-color:green;');
		
		
	$(document).ready(function(){
		$('body').on('dragstart','img',function(event) { event.preventDefault(); });
		// Add new sub box
		$('body').on('blur','.range-per-text',function(){
			$perc=$('#rangeslide').val()*10;
			$styr=$('#rangeslide').attr('style');
			$('#rangeslide').attr('style',$styr.replace('transparent '+$perc+'%', 'transparent '+$(this).html()));
			$styr=$('#rangeslide').attr('style');
			$('#rangeslide').attr('style',$styr.replace(($perc)+'.1%', $(this).html()));
			$('#rangeslide').val(parseInt($(this).html())/10);
		});
		$(document).on('input', '#rangeslide', function() {
			$('.range-per-text').html(($(this).val()*10)+'%');
		});		
		$('body').on('click','.drawflow-node a',function(e){
		lastidflag=0;
		$nodethis=$(this).closest('.drawflow-node').attr('id');
		$ingpath='img/reward.png';
		colorcode=$(this).find('.blue-plus').attr('data-color');
		if(colorcode){
			$ingpath=$('.vodiapicker [value=en]').attr('data-'+colorcode);
		}
		var dbclick = '<div class=\"work-flow new_unit\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\" style="\color:'+colorcode+';border-color:'+colorcode+'; \"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\" color-val="'+colorcode+'"><img src=\"'+$ingpath+'\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\" style="color:'+colorcode+';"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\" onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		n1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		n2=parseInt(net2.replace(" ",""));
		n1=n1;
		n2=n2+170;
        $flag=0;
		$(this).attr('lastn1',n1);
       $(this).attr('lastn2',n2);
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		newnet1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		newnet2=parseInt(net2.replace(" ",""));
		n2=parseInt(newnet2)+210;
		var eachi=0;
		var drawflowX= new Array();
		var drawflowY= new Array();
		$(".drawflow-node").each(function(){
			topbot1=$(this).attr('style');
			topbot1=topbot1.replace("px","");
			topbot1=topbot1.replace("px","");
			newtopbot2=topbot1.split(";");
			net1=newtopbot2[0].replace("top:","");
			net1=parseInt(net1.replace(" ",""));
			net2=newtopbot2[1].replace("left:","");
			net2=parseInt(net2.replace(" ",""));
			drawflowX[eachi]=net1;
			drawflowY[eachi]=net2;
			eachi++;
		});
		for (i = 0; i < drawflowX.length; i++) { 
			if(parseInt(drawflowX[i] - 89)<=parseInt(n1) && parseInt(drawflowX[i]+89)>=parseInt(n1)){
				if(parseInt(drawflowY[i] - 163)<=parseInt(n2) && parseInt(drawflowY[i])+163>=parseInt(n2)){
						n1=drawflowX[i]+101;
						i=0;
				}
			}
		}
		editor.addNode('dbclick', 3, 1, n2, n1, 'dbclick', { name: ''}, dbclick );
		$('.drawflow').find('.parent-node').last().find('.drawflow-node').addClass('blue-div');
		n3=(27+n1);
		n4=n3-1;
		$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
		topbot1=$(this).closest('.drawflow-node').attr('style');
		topbot1=topbot1.replace("px","");
		topbot1=topbot1.replace("px","");
		newtopbot2=topbot1.split(";");
		net1=newtopbot2[0].replace("top:","");
		net1=parseInt(net1.replace(" ",""));
		net2=newtopbot2[1].replace("left:","");
		net2=parseInt(net2.replace(" ",""));
		n4=(n1+41);
		$nodelast=$('.drawflow').find('.parent-node').last().find('.drawflow-node').attr('id');
		$(this).attr('lastid',$nodelast);
		$('.drawflow').find('.parent-node').last().append('<svg class=\"connection new_unit_line node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 57.75)+' '+(net1+41)+' C '+(n2 - 14.75)+' '+(net1+41)+' '+(n2 - 11.75)+' '+(n4)+' '+(n2)+'  '+(n4)+'\"></path></svg>');
		$('.drawflow').find('.connection .main-path.selected').removeClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').addClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').click();
		valn=$(this).find('.blue-plus').attr('data-color');;
		newids=$nodelast;
		$('.drawflow').find('#'+newids+' .divimg').attr('color-val',valn);
		$('.drawflow').find('.main-path.selected').attr('style','stroke:'+valn);
		$('.drawflow').find('#'+newids+' li.square-box').css('border-color',valn);
		$('.drawflow').find('#'+newids+' li.square-box').css('color',valn);
		$('.drawflow').find('#'+newids+' .outputs .output_1').attr('style','background-color:'+valn);
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('style','color:'+valn);
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',valn);
		$('#exampleModalRight button.close').trigger('click');
		$('.drawflow').find('#'+newids+' a .blue-plus').attr('data-color',valn);
		});
		$('.lang-select a li img').on('click',function(){
			//colorpicker
			colorcode=$('.colorpicker').val();
			if(colorcode){
				$('.color-line').find(' a[data-color='+colorcode+']').trigger('click');
			}else{
				colorcode='thumbnail';
			}
		});
		// end new subbox
		$('.drawflow').bind('mousewheel', function(e){
			e.preventDefault();
		});
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
  newimgrt=$('#exampleModalRight .unit-icon').find('.lang-select .btn-select').attr('value');
$('#exampleModalRight .unit-icon').find('.lang-select .btn-select img').attr('src',$('.vodiapicker').find('[value='+newimgrt+']').attr('data-'+colorcode));
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

$('.close').click(function() {
   $(".blue-status").fadeOut(300);
});
$(".blue-status").on('blur',function(){
    $(this).fadeOut(300);
});

const settings={
	fill: 'transparent',
	background: '#d7dcdf'
  }
  const sliders = $('.chapter-slider1 .slider');
  Array.prototype.forEach.call(sliders,(slider)=>{
	slider.querySelector('input').addEventListener('input', (event)=>{
	  applyFill(event.target);
	});
	
	applyFill(slider.querySelector('input'));
  });

  function applyFill(slider) {
	const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
	const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
	slider.style.background = bg;
  }