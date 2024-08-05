
  $("#btn").click(function(){

    var url="process.php";
    var lurl=$('#longurl').val();
   $.ajax({
    type:"POST",
    url:url,
    data:{longurl:lurl},
    success: function(data) {
    if (data.status) {
        $("#success").html('<h5>Link is shortened successfully</h5><div class="alert alert-warning" role="alert"><a href="http://localhost/urlshortener/redirect.php?url=' + data.short + '" target="_blank">http://localhost/urlshortener/redirect.php?url=' + data.short + '</a></div>'); 
    } else {
        $("#error").html('<div class="alert alert-danger" role="alert">' + data.msg + '</div>'); 
    }
}
,
    dataType:'json'
   });
  });
