$(document).ready(function(){
	$('#direct-chat-msg').animate({ scrollTop: $('#direct-chat-msg')[0].scrollHeight}, 100);
});

var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

$('#form_send').on('submit',function(e){

event.preventDefault();

var formData = 'message='+$('#message').val();      
$.ajax({
  type: "POST",
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  url: $(this).attr('action'),
  data: $(this).serialize(),
  cache : false,
  processData: false,
  success: function(result){
    $("#direct-chat-msg").append(result);
    $('#direct-chat-msg').animate({ scrollTop: $('#direct-chat-msg')[0].scrollHeight}, 100);
    $("#message").val('');
  }
});
}); 