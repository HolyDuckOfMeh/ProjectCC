<script>

    //ajax function to update the card modal info and cart qty indicator
    function ajaxAddNewsletter(newsName, newsEmail){
        //ajax function
        $.ajax({
            type:"POST",
            url: "./Controller/ajax-newsletter.php",
            data: "newsName=" + newsName + "&newsEmail=" + newsEmail,
            success: function(data){
                $("#ajax-msg").html(data);
                $("#newsName").val("");
                $("#newsEmail").val("");
            },
            error: function(data){
                alert('bad bruh');
            },
            
        });
    }

</script>