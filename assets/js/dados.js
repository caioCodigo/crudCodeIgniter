  
       var httRequest;
       $('#btn_form').click(function() { 
           var usuario = $('#user').val();
           var senha = $('#pass').val();
           var baseurl = $('#base_url').val();
           console.log(baseurl);

           makeRequest('logar',usuario,senha).then(function(valor){
               console.log(valor);
           }); 
       });
       
           function makeRequest(url, usuario, senha) {

               return new Promisse(function(resolve,reject){

                   httpRequest = new XMLHttpRequest();
                 
                   httpRequest.onreadystatechange = alertContents;
                   httpRequest.open('POST', url);
                   httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                   httpRequest.onreadystatechange = function(){
                       if(httpRequest.readyState == XMLHttpRequest.DONE ){
                           resolve(JSON.parse(httpRequest.responseText));
                       }
                   }
                   httpRequest.send('name='+ encodeURIComponent(usuario)+'&senha='+ encodeURIComponent(senha));
               });                
           }            

           function alertContents() {
                if (httpRequest.readyState === 4) {

                   if (httpRequest.status === 200) {

                    var response = httpRequest.responseText;
               
                    console.log(httpRequest);
                    alert(response.computedString);    
                                                 
                   } else {
                       alert('There was a problem with the request.');
                   }
                }
                else{
                       alert(httpRequest.readyState);
                }                   
            }