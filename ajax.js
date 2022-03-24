$(function(){

    $('#enviar').bind('click',function(e){
        e.preventDefault();
        console.log( $( this ).serialize() );
        
        let tcampo = $('#km_saida').val().length;
        let tcampo2 =  $('#km_chegada').val().length;
    
        if(tcampo == 0)
        {
            
            $('#alert-preencher-kmSaida').modal('show');
            $('#email').focus();
        }

        if(tcampo2 == 0)
        {
            
            $('#alert-preencher-senha').modal('show');
            $('#senha').focus();
        }

        

          else {
          

         //header("Location: login.php");

           // <script>window.setTimeout(function(){window.location=\'ajax-login.php\';}, 1000);</script>;

              var timer = setInterval(function() { alert(i++) }, 10000);
                
                  //let dados = $(this).serialize();
                  //let dados = $(this).serialize();
                  $('#login').on('click', function(){ 
                    let email =  $('#email').val();
                    let senha = $('#senha').val();

                    $.ajax({
      
                      type: 'POST',
                      url:'ajax-login.php',		
                    data: {
                      email:email,senha:senha
                    },
                    dataType: 'json',
                    success: function (retorno){
                      console.log(retorno);
        
                      
                        if(retorno == "erro")
                       {
                        console.log(retorno);
    
                        $('#email-alert').modal('show');
                        //console.log('nao encontrado');
                      
                       } 
                       
                       else  {
                       //alert("sucesso");
                       //console.log(retorno); 
                       setInterval(function() {
                        $('#success-alert').modal('show');
                      },10000);
                                             
                       window.location.href="dashboard/dist/index.php";
                       $('#success-alert').modal('show');
                       // header("Location: dashboard/dist/index.php");
                      
                        
                       }
                    
                     }
                    
                  })

                })
        
            



         }
    
    })
    })
    
    
    