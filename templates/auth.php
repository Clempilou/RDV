<div class = "container">
    <div class="simple-formulaire">
        <h2 class="title">Connectez-vous :)</h2>
        <input type="text" id="champPseudo" class="champ" placeholder="Pseudo" autofocus>
        <input type="password" id="champMdp" class="champ" placeholder="Password" >
        <input type="checkbox" id="check" value="check"/><label>Se rappeler de moi</label>
        <button class="btn btn-lg btn-warning btn-block" onClick="authentifier()" id="valider">Go</button>
        <a href="#"><u>Créer un compte</u></a>
    </div>
    
</div>

<script>
    $("#champMdp").on("mousedown",function(){
           $("#champMdp").prop("type", "text");
    });

    $("#champMdp").on("mouseup",function(){
           $("#champMdp").prop("type", "password");
    });  
    
    $(document).on("mouseup",function(){
           $("#champMdp").prop("type", "password");
    }); 
    
    
    $("#valider").on("click",function(){
           
    }); 
</script>