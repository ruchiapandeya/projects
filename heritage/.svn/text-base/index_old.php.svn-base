<html>
<head>

<style>
</style>
<script src='jquery.js'></script>
<script src='jquery.flippy.min.js'></script>
<link href='style.css' rel='stylesheet'/>

<script>
var count1=0;
var count2=0;
var count3=0;

window.onerror=function(sMessage,sUrl,sLine){alert("Message : "+sMessage+"\nURL : "+sUrl+"\nLine : "+sLine);};


setInterval(getClick1,7000);
setInterval(getClick2,7600);
setInterval(getClick3,6400);

function getClick1()
{
 $("#flip-data1 li").removeClass("active");
 count1++;
 if(count1>2){count1=0;}
 $("#flip-list1-"+count1).addClass("active");

  $('#flippyBox1').click();
}
function getClick2()
{
 $("#flip-data2 li").removeClass("active");
 count2++;
 if(count2>2){count2=0;}
 $("#flip-list2-"+count2).addClass("active");
  $('#flippyBox2').click();
}
function getClick3()
{
 $("#flip-data3 li").removeClass("active");
 count3++;
 if(count3>2){count3=0;}
 $("#flip-list3-"+count3).addClass("active");
  $('#flippyBox3').click();
}

$(document).ready(function(){
$("#flip-list1-0").addClass("active");
$("#flip-list2-0").addClass("active");
$("#flip-list3-0").addClass("active");

$('.flippybox').click(function(){
                                 var idd=$(this).attr('id');
		$(this).flippy({
			color_target:'white',
			content:$('#'+idd),
			direction:"RIGHT",
			duration:"500"
		});

});
});
</script>

</head>
<body>
<div id='xheader'></div>
<div id='wrapper'>
  <div id='header'>
       <div id='title'>
            <span id='sub-title1'>Heritage</span><span id='sub-title2'>.com</span>
       </div>
       <div id='profile'>
      </div>
  </div>
  <div id='main-area'>
    <div id='main-content'>
      <div id='search-bar'>
         <input type='text' name='btitle' id='btitle' style="width: 100%" placeholder='Start Searching. . .'/>
      </div>
      <div id='artical-content'>
        <div id='flippy_demo'>
        <div class='flippyBox' id="flippyBox1">
          <ul id='flip-data1'>
           <li id='flip-list1-0'>
             <span class='article-title'>Article Title 1</span><p class='article-content'>Article Content 1</p>
           </li>
           <li id='flip-list1-1'>
             <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
           <li id='flip-list1-2'>
             <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
          </ul>
        </div>
        <div class='flippyBox' id="flippyBox2">
          <ul id='flip-data2'>
           <li id='flip-list2-0'>
           <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
           <li id='flip-list2-1'>
           <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
           <li id='flip-list2-2'>
           <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
          </ul>
        </div>
        <div class='flippyBox' id="flippyBox3">
          <ul id='flip-data3'>
           <li id='flip-list3-0'>
           <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
           <li id='flip-list3-1'>
           <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
           <li id='flip-list3-2'>
           <span class='article-title'>Article Title 1</span><span class='article-content'>Article Content 1</span>
           </li>
          </ul>
        </div>
        </div>
      </div>
      <div id="menu">
        <?php
           $tab1=json_decode(file_get_contents('Heritage/Home/MenuTab/tab1.json'));
        ?>
        <div class='menu-box' id='menu-box1' style=<?php echo "bakground-image:url(".$tab1->image.")";?> >
              <a href=<?php echo $tab1->href;?> >
              <span class='menu-content'>Article Content 3</span>
              </a>
        </div>
        <?php
          $tab2=json_decode(file_get_contents('Heritage/Home/MenuTab/tab2.json'));
        ?>
        <div class='menu-box' id='menu-box2' style=<?php echo "bakground-image:url(".$tab2->image.")";?> >
              <a href=<?php echo $tab2->href;?> >
              <span class='menu-content'>Article Content 3</span>
              </a>
        </div>
        <?php
          $tab3=json_decode(file_get_contents('Heritage/Home/MenuTab/tab3.json'));
        ?>
        <div class='menu-box' id='menu-box3' style=<?php echo "bakground-image:url(".$tab3->image.")";?> >
              <a href=<?php echo $tab3->href;?> >
              <span class='menu-content'>Article Content</span>
              </a>
        </div>
      </div>
    </div>
  </div>
  <div id='footer'>
       <span>&copy; Heritage.com 2012</span>
  </div>
</div>
</body>
</html>