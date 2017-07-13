

app.controller("PageController", function($scope,$http){
    $scope.dropText="Choose Question";
    $scope.num;
    $scope.UpOrDown="down";
    $scope.translatedText="";
    $scope.sourceLan="Russian";
    $scope.destinationLan="English";
    var lan="";
    var word="";
    var num;
	
 function changeGlyphicon(){
     if($sopce.UpOrDown=="down"){
         $scope.UpOrDown="up";
     }
 }; 
    $scope.translate = function (word){
        var translateThisText = word;
        if($scope.sourceLan=="Russian"){
            var sLan="Ru";
            var dLan="en";
        }else{
            var sLan="en";
            var dLan="Ru";
        }
        
        $http.get('https://www.googleapis.com/language/translate/v2?key=AIzaSyCFKSuFgmT4Op34FoomBdBNn-FX7uht4R4&q='+translateThisText+'&source='+sLan+'&target='+dLan)
            .success(function(result){
                var translations = result.data.translations || [];
                $scope.translatedText = translations.length > 0 ? translations[0].translatedText :"Sorry, I can't translate this";
        });
    };
    $scope.deleteWord=function(){
         $scope.translatedText ="";    
    };
    $scope.changeLan=function(lan,num){
	
        if(lan=="Ru" && num == 1){
            
            $scope.sourceLan="Russian";
            $scope.destinationLan="English";
        }
        else if(lan=="en" && num == 1){
            $scope.destinationLan="Russian";
            $scope.sourceLan="English";
        }
        else if (lan=="Ru" && num == 2){
            $scope.sourceLan="English";
            $scope.destinationLan="Russian";
        }
        else if (lan=="en" && num == 2){
            $scope.sourceLan="Russian";
            $scope.destinationLan="English";
        }
    };
	

});
//For question asking
    $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keyup(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
//For zooming pictures in news
$(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 

$(function() {
    $('.panel-image img.panel-image-preview').on('click', function(e) {
	    $(this).closest('.panel-image').toggleClass('hide-panel-body');
    });
});


