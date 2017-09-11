<!DOCTYPE html>
<html>
    <head>
        <title>Chat Bot User Interface</title>
         <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
        <script type="text/javascript" src="credentials.js"></script>

    </head>

    <body>
	    
               
                
           
        
	    <div class="headerBar">
                <div class="user-photo"><img src="https://i.pinimg.com/736x/f1/86/78/f18678b7fc471157b01330df6b072f11--korean-artist-pencil-portrait.jpg"></div>
                <p class="title"> Mr.Bot </p>
		    

        </div>

        
        
        <div class="chatbox"> 
	  
            <div class="chatlogs">
            
                <div class="chat friend">
                    <div class="user-photo"><img src="https://i.pinimg.com/736x/f1/86/78/f18678b7fc471157b01330df6b072f11--korean-artist-pencil-portrait.jpg"></div>
                    <p class="chat-message">Hello!</p>
                </div>

                <div class="chat friend" id="loadingGif" style="display: none;">
                    <div class="user-photo"><img src="Images/ana.JPG"></div>
                    <div class="gif"><img src="Images/loading.gif"></div>
                </div>

            </div>

            <div class="chat-form">
                <div id="inputDiv">
                    <textarea class="input" placeholder="Message"></textarea>
                </div>
                <div id="chat-form-buttons">
                    <input type ="image"id="rec" src="Images/microphone.png">
                    <input type="image" src="Images/keyboard.png" id="switchInputType"/>
                </div>
               <!--<button id="switchInputType"></button>-->

        </div>

        <script type="text/javascript" src="index.js"></script>  
    </body>

</html>
