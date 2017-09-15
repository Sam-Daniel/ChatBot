<!DOCTYPE html>
<html>
    <head>
        <title>Chat Bot User Interface</title>
         <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
        <script type="text/javascript" src="credentials.js"></script>

    </head>

    <body>
	    
               
                
           
        
	    <div class="headerBar">
                <div class="user-photo"><img src="https://publishmybrand.com/wp-content/uploads/2017/09/mr.tack_.jpg"></div>
                <p class="title"> Mr.Tack </p>
		    

        </div>

        
        
        <div class="chatbox"> 
	  
            <div class="chatlogs">
            
                <div class="chat friend">
                    <div class="user-photo"><img src="https://publishmybrand.com/wp-content/uploads/2017/09/mr.tack_.jpg"></div>
                    <p class="chat-message">Hi!</p>
                </div>

                <div class="chat friend" id="loadingGif" style="display: none;">
                     <div class="user-photo"><img src="https://publishmybrand.com/wp-content/uploads/2017/09/mr.tack_.jpg"></div>
                    <div class="gif"><img src="Images/loading.gif"></div>
                </div>

            </div>

            <div class="chat-form">
                <div id="inputDiv" autofocus/>
                    <textarea class="input" type="text" autofocus></textarea>
                </div>
                <div id="chat-form-buttons">
                    
      
                </div>
               <!--<button id="switchInputType"></button>-->

        </div>

        <script type="text/javascript" src="index.js"></script>  
    </body>

</html>
