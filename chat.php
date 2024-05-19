<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <svg id="icon"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-robot mb-3 " viewBox="0 0 16 16">
                    <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                    <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                </svg>
                <h4 class="text-center mb-5" id="h4">How can I help you today?</h4>
            <div class="col-6">
            <div id="response"  style="height: 560px; overflow: auto;">

</div>
            </div>
            <div class="col-6 "style=" position:fixed; bottom:30px;">
              
 
     <form method="post" action="trait.php"id="form" >
                <div class="input-group mt-5 " id="parent">
                    <input type="text" id="qes"class="form-control form-control-lg"  placeholder="Type a message" name="Question">
                    <button class="btn btn-dark" name="Ask" id="submit">-></button>
                </div>
                
                </form>
            </div>
            <h6 class="text-center " style="position:fixed; bottom:5px;">Developed by Abdellah Kaddis</h6>
        </div>
    </div>
   
<script>

    $("#submit").click(function(){
       
            $("#h4").hide();
       

    $.post( $("#form").attr("action"),
            $("#form :input").serializeArray(),
            function(info){
                $("#response").append(info);
            });
    return false; // Prevent default click event behavior
});
</script>
</body>
</html>