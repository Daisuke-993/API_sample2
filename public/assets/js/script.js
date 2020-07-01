$(function() {
 
    $('form').submit(
        
        function(){
            $.ajax({
                url:'weather',
                type:'post',
                dataType: 'json',
                contentType: 'application/json',
                data:JSON.stringify({city : $('#city').val()}),
                success: function(result){
                    var json = JSON.parse(result);
                    var date = new Date();
                    $('tbody').prepend("<tr><td>" + $('#city').val() + "</td><td>" + json.weather + "</td><td>" + json.temp + "</td><td>" + json.wind + "</td><td>" + date + "</td></tr>"); 
                    $('#city').val(null);
                },
                error: function(data) {
                    alert('error');
                }
            });
            return false;
        }
    );
  });