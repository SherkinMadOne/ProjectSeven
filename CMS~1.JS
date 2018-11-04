(function() {

	document.addEventListener("DOMContentLoaded", init,false)

	function init(){
        var sheet = document.getElementsByClassName('changeCSS');
		for (var i = 0; i <sheet.length; i++) {            
            sheet[i].addEventListener("click",switch_css, false); }
        var links = document.getElementsByClassName('a');
        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener("click", changeContent, false);
        }		
	}

 	function switch_css(){
        var head = document.getElementsByTagName('head')[0];
        fileName=this.id;
        head.getElementsByTagName('link')[0].href=fileName;
	
	}

	function displayMessage (){
		// Here display the message when loading 
		// Or maybe display an error message

}


	function changeContent (fileName){
		// Check the file exists and
		// Load the file then
        // Display the file
        switch(this.id){
            case "1":
                break;


        }
	
}

})()