$(function() {
 
    $('.submit').click(
        
        function(){
            $.ajax({
                url:'weather',
                type:'post',
                dataType: 'json',
                contentType: 'application/json',
                data:JSON.stringify({city : $('#city').val()}),
                success: function(data){
                     $('.weather').append(data);    
                },
                error: function(data) {
                    alert('error');
                }
            });
        }
    );
  });