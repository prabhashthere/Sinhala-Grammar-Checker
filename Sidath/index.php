<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    

  </head>
  <body  >
  <div style="height:100%; width:100%; " >
    <div class="s006" >
      <form id="form">
        <fieldset>
          
            <legend>ක්‍රියාපද විවරණය</legend>

          <div class="inner-form">
            <div class="input-field">
              <button class="btn-search"  type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button>
              <input id="search" type="text" name="word" placeholder="සොයන්න" style="font-size:25px" />
            </div>
            
          </div>
          <div class="messages">
          </div>

        </fieldset>
      </form>
     <script>
         $("#form").on('submit',(function(e)
         {
             e.preventDefault();

             $.ajax({
                 url: "process.php",
                 type: "POST",
                 data:  new FormData(this),
                 contentType: false,
                 cache: false,
                 processData:false,
                 success: function(response)
                 {
                   //alert(response);
                    // data = JSON object that contact.php returns

                    // we recieve the type of the message: success x danger and apply it to the 
                    //var messageAlert = 'alert-' + response.type;
                     if(response){
                         var messageText = response;
                     }else {
                         var messageText ="නොදන්නා පදයකි";
                     }


                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert alert-dark alert-dismissable legend"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText +'</div>';
                    
                    // If we have messageAlert and messageText
                    if ( messageText) {
                        // inject the alert to .messages div in our form
                        $('#form').find('.messages').html(alertBox);
                        // empty the form
                        //$('#contact-form')[0].reset();
                    }
                }
             });
         }));
     </script>
    </div>
    <footer class="page-footer font-small " style="background-color:#7b2d00" >
        <div class="footer-copyright text-center py-3" style="font-size:18px; color:#ffff;"> © 2019 Copyright:
            <a > සිදත්</a>
        </div>

    </footer>
  </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        

  </body>
</html>
