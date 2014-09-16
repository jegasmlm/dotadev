/**
 * Created by QUAD04 on 9/15/2014.
 */
//Method to get the current page from url.
function GetCurrentPageName(){
    var pageURL = document.location.href;

    return pageURL;
}
$(document).ready(function(){
    var CurrPage = GetCurrentPageName();
    switch(CurrPage){
        case'http://www.dota.dev/Heroes':
            $('#heroesSec').addClass('active');
        break;
        case'http://www.dota.dev/Sides':
            $('#sidesSec').addClass('active');
        break;
        case'http://www.dota.dev/Groups':
            $('#groupsSec').addClass('active');
        break;
        case'http://www.dota.dev/Strategies':
            $('#strategySec').addClass('active');
        break;
        case'http://www.dota.dev/Heroes/randomTeam':
            $('#randomSec').addClass('active');
        break;
        case'http://www.dota.dev/Heroes/randomTeamByStrategy':
            $('#randomSec').addClass('active');
        break;
    }
});
