// chart drawflow
    var id = document.getElementById("drawflow");
    const editor = new Drawflow(id);
    editor.reroute =null;
    var rightpop=100;
    var leftpopup=6;
    var rightpopnext=0;
editor.drawflow = {"drawflow":{"Home":{"data":{"1":{"id":1,"name":"welcome","data":{},"class":"help","html":"\n","typenode": false, "inputs":{},"outputs":{},"pos_x":50,"pos_y":50, }}}}}
editor.start();
 var dbclick = '<div class=\"flow-chart-design start-here\"><div class=\"start-round\" >Start</div></div><span class="blue-plus" onmousedown="return false" style="display: block;height: 25px;width: 25px; text-align: center;padding-top: 2px;top: 62px; left: 113px; padding-left:0;"><i class="simple-icon-plus"></i></span>';
editor.addNode('dbclick', 1, 1, 50, 100, 'dbclick', { name: ''}, dbclick );
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
		var conclass=$(this).closest('.connection').attr('class').split('node_in_');
		newids=(conclass[1].split(' ')[0]);
		var conclass1=$(this).closest('.connection').attr('class').split('node_out_');
		newids1=(conclass1[1].split(' ')[0]);
		$('#exampleModalRight .for-edit-option').attr('edit-id',newids);
		$('#exampleModalRight .for-edit-option .static-title').html($('.drawflow').find('#'+newids+' .square-box .divtext').html());
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value',$('.drawflow').find('#'+newids+' .square-box .divimg').attr('val'));
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select img').attr('src',$('.drawflow').find('#'+newids+' .square-box .divimg img').attr('src'));
		$('#exampleModalRight .main-icons .colorpicker').val($('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
		$('.sidebarpopup .nav-tabs').attr('style','background-color:'+$('.drawflow').find('#'+newids+' .square-box .divimg').attr('color-val'));
		if(newids1!='node-2'){
			$('#exampleModalRight .glyph .class-name').html($('.drawflow').find('#'+newids1+' .square-box .divtext').html());
			$('#exampleModalRight .glyph').find('img').attr('src',$('.drawflow').find('#'+newids1+' .square-box .divimg img').attr('src'));
			$('#exampleModalRight .glyph').find('img').css('opacity','1');
        }else{
			$('#exampleModalRight .glyph .class-name').html('&nbsp;');
			$('#exampleModalRight .glyph').find('img').attr('src','');
			$('#exampleModalRight .glyph').find('img').css('opacity','0');
		}
		$('#exampleModalRight').modal('show');
		colorcode=$('.colorpicker').val();
		if(colorcode){
			$('.color-line li a[data-color='+colorcode+']').trigger('click');
		}
    })
	// end click on line
	//right sidebar click
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
		$('.sidebarpopup .static-title').attr('style','color:'+$(this).attr('data-color'));
		colorcode=$('.colorpicker').val();
		if(colorcode){}else{
			colorcode='thumbnail';
		}
		newimgrt=$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value');
		$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select img').attr('src',$('.vodiapicker').find('[value='+newimgrt+']').attr('data-'+colorcode));
		
	});
    $('body').on('click','#node-2 .blue-plus',function(e){
		$nodethis='node-2';
        topbot=$('.drawflow').find('#node-2').attr('style');
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
		var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\"><img src=\"https://cerapoda.com/zuzu/img/reward.png\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0)\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0)\" class="blue" onmousedown="return false"><span class=\"blue-plus\" onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
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
		$('.drawflow').find('.parent-node').last().append('<svg class=\"connection node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 56)+' '+(net1+97)+' C '+(n2 - 27.25)+' '+(net1+97)+' '+(n2 - 27.25)+' '+n4+' '+(n2)+'  '+n4+'\"></path></svg>');
		$('.drawflow').find('.connection .main-path.selected').removeClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').addClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').click();
		e.preventDefault();
		e.stopPropagation();
		e.returnValue = false;
    })
	//end add new box
	$(document).ready(function(){
		$('body').on('dragstart','img',function(event) { event.preventDefault(); });
		// Add new sub box
		$('body').on('blur','.range-per-text',function(){
			$('#rangeslide').val(parseInt($(this).html())/10);
		});
		$(document).on('input', '#rangeslide', function() {
			$('.range-per-text').html(($(this).val()*10)+'%');
		});		
		$('body').on('click','.blue-div a',function(e){
		lastidflag=0;
		$nodethis=$(this).closest('.drawflow-node').attr('id');
		$ingpath='https://cerapoda.com/zuzu/img/reward.png';
		colorcode=$('.colorpicker').val();
		if(colorcode){
			$ingpath=$('.vodiapicker [value=en]').attr('data-'+colorcode);
		}
		var dbclick = '<div class=\"work-flow\"><ul class=\"list-unstyled list-inline\"> <li class=\"square-box\"><div class=\"divtext\">No Text</div><span class=\"divimg\" val=\"en\"><img src=\"'+$ingpath+'\" alt="" value="en" style="margin: 3px; max-height: 30px;"></span></li></ul></div><a href=\"javascript:void(0);\"  data-backdrop=\"static\"  class="orange"><span class=\"orange-plus\"><i class=\"simple-icon-plus\"></i></span></a> <a href=\"javascript:void(0);\" class="blue"><span class=\"blue-plus\" onmousedown="return false"><i class=\"simple-icon-plus\"></i></span></a>';
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
		n2=parseInt(newnet2)+175;
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
		$('.drawflow').find('.parent-node').last().append('<svg class=\"connection node_in_'+$nodelast+' node_out_'+$nodethis+' output_1 input_2 connection-blue-row\" data-in=\"'+$nodelast+'\"><path class=\"main-path\" d=\" M '+(n2 - 21.75)+' '+(net1+41)+' C '+(n2 - 11.75)+' '+(net1+41)+' '+(n2 - 11.75)+' '+n4+' '+(n2)+'  '+n4+'\"></path></svg>');
		$('.drawflow').find('.connection .main-path.selected').removeClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').addClass('selected');
		$('.drawflow').find('.connection.node_in_'+$nodelast+'.node_out_'+$nodethis+' .main-path').click();
		
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
			if(e.originalEvent.wheelDelta /120 > 0) {
				editor.zoom_out();
			}else{
				editor.zoom_in();
			}
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
  newimgrt=$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select').attr('value');
$('#exampleModalRight .for-edit-option').find('.lang-select .btn-select img').attr('src',$('.vodiapicker').find('[value='+newimgrt+']').attr('data-'+colorcode));
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
