$(document).ready(function() {
  $("#main-content a").live("click",function(){
    var file=$(this).attr("file");
    $("#overlay").css("visibility","visible");
    $("#xdata").css("background-image",'url(../Heritage/PublishedArticles/'+file+'/image.png)');
    $("#xdata").load("../Heritage/PublishedArticles/"+file+"/article.html");
  });
  $("#overlay").live("click",function(){
    $("#overlay").css("visibility","hidden");
  });
});