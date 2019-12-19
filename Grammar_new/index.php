<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    

  </head>
  <body  >
  <div style="height:100%; width:100%; " >
    <div class="s006" >
      <form id="form">
          <div class="form-group">
              <label for="comment">Enter Your Text:</label>
              <textarea class="form-control" rows="10" name="text" id="text" style="margin-bottom: 10px"></textarea>
              <button type="submit" class="btn btn-success">Submit</button>

          </div>
          <div class="load">

          </div>

          <div class="messages">
          </div>
      </form>

     <script>
         $("#form").on('submit',(function(e)
         {

             e.preventDefault();
             $('#form').find('.load').html('<div class="d-flex align-items-center"><strong>Loading...</strong><div class="spinner-border ml-auto" role="status" aria-hidden="true"></div></div>');
             $.ajax({
                 url: "Grammar.php",
                 type: "POST",
                 data:  new FormData(this),
                 contentType: false,
                 cache: false,
                 processData:false,
                 success: function(response)
                 {
                     $('#form').find('.load').html('<div></div>');
                     var messageText = JSON.parse(response);
                    // console.log(response);
                     var message = '';
                     jQuery.each( messageText, function( i, val ) {
                         //message = $('textarea#text_result').val();
                         if(val[0] == "0"){
                             message = message.concat('<p style="color: red; display: inline">' +val[1]+'</p>');
                             // message = message.concat(". ");
                         }else {
                             message = message.concat('<p style="color: blue; display: inline">' +val[1]+'</p>');
                             // message = message.concat(". ");
                         }


                     });
                     console.log(message);
                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert alert-success" role="alert" style=" font-size: 17px;border-radius: 10px;">' +message + '</div>';
                    
                    // If we have messageAlert and messageText
                    if ( messageText) {

                        // inject the alert to .messages div in our form
                        $('#form').find('.messages').html(alertBox);
                        // $('textarea#text_result').val(message);

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
